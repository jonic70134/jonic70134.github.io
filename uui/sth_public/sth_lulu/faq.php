<?php 
    include "../frame/__config.php";
    include "../frame/__data.php";
    include "__data.php";
    $type="rwd";
?>
<!doctype html>
<html lang="zh-TW">
<head>
    <?php meta();?>
</head>
<body>
    <div class="site-outter">
        <?php include "../module_header/_lulu_header.php";?>
        <div class="site-body">
            <aside class="site-left">
                <?php include "../module_left/_rwd_left_001.php";?>
            </aside>
            <section class="site-main">
                <?php include "../module_component/_rwd_other_001.php";?>
            </section>
            <!-- <aside class="site-right">
                右欄預留空間
            </aside> -->
        </div>
        <?php include "../module_footer/_rwd_footer_001.php";?>
        <?php include "../module_footer/_rwd_copyright_001.php";?>
    </div>
    <?php include "../frame/__rwd_js_library.php";?>
</body>
</html>