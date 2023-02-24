<?php 
    include "../frame/__config.php";
    include "../frame/__data.php";
    $type="rwd";
;?>
<!doctype html>
<html lang="zh-TW">
<head>
    <?php meta();?>
</head>
<body>
    <?php include "../module_header/_rwd_header_003.php";?>
    <div class="site-body two_column">
        <aside class="site-left">
            <?php include "../module_left/_rwd_left_002.php";?>
        </aside>
        <article class="site-main">
            <?php include "../module_component/_nav_breadcrumbs.php";?>
            <?php include "../module_component/_site_filter.php";?>
            <?php include "../module_component/_site_sort.php";?>
            <?php include "../module_component/_item_list_four.php";?>
            <?php include "../module_component/_nav_pagination.php";?>
        </article>
        <!-- <aside class="site-right">
                右欄預留空間
            </aside> -->
    </div>
    <?php include "../module_footer/_rwd_footer_001.php";?>
    <?php include "../module_footer/_rwd_copyright_001.php";?>
    <?php include "../frame/__rwd_js_library.php";?>
    <script>
    </script>
</body>
</html>