<?php 
    include "../frame/__config.php";
    include "../frame/__data.php";
    include "__data.php";
    $type="md";
?>
<!doctype html>
<html lang="zh-TW">
<head>
    <?php meta();?>
</head>
<body>
    <div class="site-outter">
        <?php include "../module_header/_md_header_004.php";?>
        <div class="site-body">
            <article class="site-main">
                <?php include "../module_category/_md_category_001.php";?>
                <?php if ($result=='true') {?>
                <!-- result -->
                <?php include "../module_component/_md_site_filter.php";?>
                <!-- include "../module_component/_md_site_infinite_scroll.php"; -->
                <?php include "../module_component/_md_site_infinite_scroll_004.php";?>
                <?php ;} else {?>
                <!-- no result -->
                <?php include "../module_category/_md_category_002.php";?>
                <?php ;}?>
            </article>
        </div>
        <?php include "../module_footer/_md_footer_001.php";?>
        <!-- <?php include "../module_footer/_md_copyright_001.php";?>
        <?php include "../module_component/_md_nav_top.php";?> -->
    </div>
    <?php include "../frame/__md_js_library.php";?>
</body>
</html>