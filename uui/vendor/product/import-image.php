<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
<link href="../css/product.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../css/ie.css">
<![endif]--></head>
<body>
<div id="wrapper">
    <!-- Header  -->
    <?php include("../frame/header.php");?>
    <!--Header /-->    

    <!-- BEGIN Menu -->
    <?php include("../frame/menu.php");?>
    <!-- END Menu -->
    <!-- container -->
    <div id="container">
      <div class="breadcrumb_top">
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li><a href="import-data.php">批次匯入商品</a></li><span class="divider"> &gt; </span></li> <li class="active">匯入商品圖檔</li></ul>
</div>
<dl class="template-tabs">
  <dd><a href="import-data.php">匯入商品資料</a></dd>
  <dd><a href="import-image.php" class="active">匯入商品圖檔</a></dd>
  <dd><a href="import-log.php">查詢上傳記錄</a></dd>
</dl>
<section class="template-content template-content-tab">
  <dl class="form-element import-form">
    <dd>
      <label class="form-element-name">選擇要匯入的商品圖檔：</label>
      <input type="file" accept=".zip">
      <button class="btn-infr go-popup" data-width="800" data-href="popup/import-image-infr.php"><i class="fa fa-info-circle"></i>圖檔上傳說明</button>
      <span class="comment">* 大小不可超過20mb，格式為zip<br>* 圖檔名稱需要與「主商品圖」填寫的檔名完全相同</span>
    </dd>
    <dd>
      <label class="form-element-name">商品對應的廠商：</label>
      <input type="text" class="input-search" placeholder="請輸入廠商名">
      <dl class="related-searches">
        <dd>和天些今腕的信更人多長城卻說 (ipsum)</dd>
        <dd>憑神戰年不有啊上人打我家不 (sunt)</dd>
      </dl>
    </dd>
  </dl>
  <div class="template-button">
    <button class="btn-submit" onclick="alert('圖檔匯入完成！\n可至「查詢上傳記錄」查看配圖結果');location.href='import-log.php'"><i class="fa fa-upload"></i>匯入圖檔</button>
  </div>
</section>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/template-action.js"></script>
<script>
  //related
  $('.input-search').bind('keyup change', function() {
      $('.related-searches').slideDown(100);
      if ($(this).val() == '') {
          $('.related-searches').slideUp(50);
      };
  }).blur(function() {
      $('.related-searches').slideUp(50);
  });
  //select
  $('.select-in-option').change(function() {
    $(this).parent('dd').find('input').prop('checked',true);
  });
</script>
</body>
</html>