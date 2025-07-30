<?php

class Header {
/**
 * @param $page Page
 */
function __construct($page) {
    $this->page = $page;
    if ($page->settings->header_show_totals) {
        $t = $page->settings->table;
        $t_bans = $t['bans'];
        $t_mutes = $t['mutes'];
        $t_warnings = $t['warnings'];
        $t_kicks = $t['kicks'];
        try {
            $st = $page->conn->query("SELECT
            (SELECT COUNT(*) FROM $t_bans) AS c_bans,
            (SELECT COUNT(*) FROM $t_mutes) AS c_mutes,
            (SELECT COUNT(*) FROM $t_warnings) AS c_warnings,
            (SELECT COUNT(*) FROM $t_kicks) AS c_kicks");
            ($row = $st->fetch(PDO::FETCH_ASSOC)) or die('Failed to fetch row counts.');
            $st->closeCursor();
            $this->count = array(
                'bans.php'     => $row['c_bans'],
                'mutes.php'    => $row['c_mutes'],
                'warnings.php' => $row['c_warnings'],
                'kicks.php'    => $row['c_kicks'],
            );
        } catch (PDOException $ex) {
            Settings::handle_error($page->settings, $ex);
        }
    }
}

function navbar($links) {
    echo '<ul class="nav navbar-nav">';
    foreach ($links as $page => $title) {
        $li = "li";
        if ((substr($_SERVER['SCRIPT_NAME'], -strlen($page))) === $page) {
            $li .= ' class="active"';
        }
        if ($this->page->settings->header_show_totals && isset($this->count[$page])) {
            $title .= " <span class=\"badge\">";
            $title .= $this->count[$page];
            $title .= "</span>";
        }
        echo "<$li><a href=\"$page\">$title</a></li>";
    }
    echo '</ul>';
}

function autoversion($file) {
    return $file . "?" . filemtime($file);
}

function print_header() {
$settings = $this->page->settings;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="description" content="">
    <meta name="author" content="LiteBans">
    <link rel="shortcut icon" href="inc/img/minecraft.ico">
    <!-- CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=SF+Pro+Display:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="<?php echo $this->autoversion('inc/css/custom.css'); ?>" rel="stylesheet">
    <script src="<?php echo $this->autoversion('inc/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript">
        function withjQuery(f) {
            if (window.jQuery) f();
            else window.setTimeout(function () {
                withjQuery(f);
            }, 100);
        }

        function setViewportHeight() {
            const vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        }

        setViewportHeight();
        window.addEventListener('resize', setViewportHeight);
        window.addEventListener('orientationchange', () => {
            setTimeout(setViewportHeight, 100);
        });
    </script>
</head>

<body class="min-h-screen-dynamic relative overflow-x-hidden">
    <!-- Floating Orbs -->
    <div class="floating-orb orb-1 hidden lg:block"></div>
    <div class="floating-orb orb-2 hidden lg:block"></div>
    <div class="floating-orb orb-3 hidden lg:block"></div>

    <!-- Header -->
    <header class="glass-header fixed top-0 left-0 right-0 z-50 glass-button border-b border-white/10" role="banner">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Brand -->
                <div class="flex items-center">
                    <a href="<?php echo $settings->name_link; ?>" class="text-white font-bold text-lg hover:text-white/80 transition-colors duration-200">
                        <?php echo $settings->name; ?>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:block">
                    <div class="flex items-center space-x-6">
                        <?php
                        $nav_items = array(
                            "index.php"    => $this->page->t("header_index"),
                            "bans.php"     => $this->page->t("header_bans"),
                            "mutes.php"    => $this->page->t("header_mutes"),
                            "warnings.php" => $this->page->t("header_warnings"),
                            "kicks.php"    => $this->page->t("header_kicks"),
                        );
                        
                        foreach ($nav_items as $page => $title) {
                            $is_active = (substr($_SERVER['SCRIPT_NAME'], -strlen($page))) === $page;
                            $class = $is_active ? 'text-white border-b-2 border-white/30' : 'text-white/70 hover:text-white';
                            
                            if ($this->page->settings->header_show_totals && isset($this->count[$page])) {
                                $title .= " <span class=\"ml-1 px-2 py-0.5 text-xs bg-white/10 rounded-full\">";
                                $title .= $this->count[$page];
                                $title .= "</span>";
                            }
                            
                            echo "<a href=\"$page\" class=\"$class transition-colors duration-200 px-3 py-2 text-sm font-medium\">$title</a>";
                        }
                        ?>
                        <a href="https://www.spigotmc.org/resources/litebans.3715/" 
                           class="text-white/50 hover:text-white/70 text-xs transition-colors duration-200" 
                           target="_blank">&copy; LiteBans</a>
                    </div>
                </nav>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="glass-button-hover text-white p-2 rounded-lg" 
                            onclick="toggleMobileMenu()" id="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="md:hidden hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 glass rounded-lg mt-2">
                    <?php
                    foreach ($nav_items as $page => $title) {
                        $is_active = (substr($_SERVER['SCRIPT_NAME'], -strlen($page))) === $page;
                        $class = $is_active ? 'text-white bg-white/10' : 'text-white/70 hover:text-white hover:bg-white/5';
                        
                        if ($this->page->settings->header_show_totals && isset($this->count[$page])) {
                            $title .= " <span class=\"ml-1 px-2 py-0.5 text-xs bg-white/10 rounded-full\">";
                            $title .= $this->count[$page];
                            $title .= "</span>";
                        }
                        
                        echo "<a href=\"$page\" class=\"$class block px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200\">$title</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="pt-16 min-h-screen-dynamic">
<?php
}
}
?>
