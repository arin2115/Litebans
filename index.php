<?php
require_once './inc/page.php';

$page = new Page("index");
$page->print_title();
?>
<div class="main-container fade-in">
    <div class="content-card scale-in">
        <div class="welcome-section">
            <h2 class="welcome-title"><?php echo str_replace("{server}", $page->settings->name, $page->t("index_welcome")); ?></h2>
            <p class="welcome-text"><?php echo $page->t("index_welcome2"); ?></p>
        </div>
    </div>
</div>
<?php $page->print_footer(false); ?>
