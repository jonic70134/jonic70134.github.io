<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css">
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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li><a href="/product/batch-instock.html">批次修改可賣量</a><span class="divider"> &gt; </span></li> <li class="active">篩選匯出商品</li></ul>
</div>
<dl class="template-tabs">
  <dd><a href="batch-instock.php" class="active">批次修改可賣量</a></dd>
  <dd><a href="batch-price-log.php">查詢修改記錄</a></dd>
</dl>
<section class="template-content template-content-tab">
  <h1 class="title"><i class="fa fa-filter"></i>篩選要匯出的轉單商品</h1>
  <button class="btn-back-prev" onclick="location.href='batch-instock-download.php'"><i class="fa fa-reply"></i>回上一頁</button>
  <div class="form-element search-filter">
    <div class="select-group">
      <label>商品ID/料號<input type="text" class="input-search" placeholder="請輸入商品ID/料號"></label>
      <label for="checkbox1"><input type="checkbox" id="checkbox1" checked>所有規格品</label>
      <label for="checkbox2"><input type="checkbox" id="checkbox2" checked>有上架的商品</label>
    </div>
    <div class="select-group">
      <label>商品新增日</label><input type="text" class="input-datepicker" placeholder="請輸入開始日期">~<input type="text" class="input-datepicker" placeholder="請輸入結束日期" value="">
    </div>
    <br>
    <div class="select-group">
      <label>分類</label>
      <select name="" id="" class="select-search"><option value="">請選擇</option><option value="">select1</option><option value="">select2</option></select>
      <select name="" id="" class="select-search"><option value="">請選擇</option><option value="">select1</option><option value="">select2</option></select>
      <select name="" id="" class="select-search"><option value="">請選擇</option><option value="">select1</option><option value="">select2</option></select>
    </div>
    <div class="select-group">
      <label>可賣量</label>
      <select name="" id="" class="select-search"><option value="">請選擇</option></select>
    </div>
    <br>
    <div class="select-group">
      <label>廠商<input type="text" class="input-search" placeholder="請輸入廠商ID/名稱"></label>
      <dl class="related-searches" style="top: 26px; left: 29px;">
        
        <dd>方嘉 (quos)</dd>
        
        <dd>高宗 (architecto)</dd>
        
        <dd>戴俊佳 (at)</dd>
        
      </dl>
    </div>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
  </div>
  <div class="template-function template-button">
    共有 <span class="txt-list-count">1,999</span> 筆符合查詢條件&nbsp;&nbsp;
    <button class="btn-action"><i class="fa fa-download"></i>匯出查詢資料</button>
  </div>
  <section class="table-container">
    <table class="template-table market-table">
      <thead>
        <tr>
          <th>商品圖片</th>
          <th>商品ID<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
          <th>廠商自用料號</th>
          <th>商品名稱</th>
          <th>顏色</th>
          <th>尺寸</th>
          <th>可賣量</th>
          <th>分類</th>
          <th>廠商</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          for ($x = 0; $x <= 10; $x++) {
              echo '
                <tr>
                  <td><img src="http://placehold.it/50x50/" width="50" height="50" alt="商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱"></td>
                  <td>201310AM170000105</td>
                  <td>aaaaa</td>
                  <td class="txt col-name">鬧在的子笑真去一中短份奏住不提去</td>
                  <td>藍色</td>
                  <td>XXL</td>
                  <td>999,999</td>
                  <td>生活百貨</td>
                  <td>兩白媽胃點還</td>
                </tr>
              ';
          } 
        ?>
        
      </tbody>
    </table>
  </section>
  <div class="pages">
    <a class="prev-page disable">上一頁</a>
    <span class="current-page">1/255</span>
    <a href="#" class="next-page">下一頁</a>
    <select class="select-page"><option>第1頁</option></select>
  </div>
</section>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="../js/template-action.js"></script>
<script>
//date time picker
var timeOption = {
    dateFormat: 'yy/mm/dd',
    showTimepicker: false
};
$('.input-datepicker').datetimepicker(timeOption);
//search filter
$('.input-search').bind('keyup change', function() {
    $(this).parents('.select-group').find('.related-searches').slideDown(100);
    if ($(this).val() == '') {
        $(this).parent().find('.related-searches').slideUp(50);
    };
}).blur(function() {
    $(this).parents('.select-group').find('.related-searches').slideUp(50);
});
</script>
</body>
</html>