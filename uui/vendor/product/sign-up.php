<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
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
        <ul class="breadcrumb"><li><a href="../">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li class="active">報品列表</li></ul>
      </div>
      <div class="select-site" style="display:block;">
        <button class="btn-switch"><i class="fa fa-share"></i>去報名</button>
      </div>

      <div class="form-element search-filter">
        <label class="label-search"><input type="text" size="50" placeholder="商品名稱/商品ID/賣場ID/廠商自用料號/廠商自用欄位"></label>
        <div class="select-group">
            <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
        </div><br/>
          <label class="label-search">分類<select name="" id="" class="select-search"><option value="">全部</option><option value="">select1</option><option value="">select2</option></select></label>
          <label class="label-search">要賣海外<select name="" id="" class="select-search"><option value="">全部</option><option value="">select1</option><option value="">select2</option></select></label><br/>
          <label class="label-search">寄/轉<select name="" id="" class="select-search"><option value="">全部</option><option value="">select1</option><option value="">select2</option></select></label>
          <label class="label-search">可賣量<select name="" id="" class="select-search"><option value="">全部</option><option value="">select1</option><option value="">select2</option></select></label>
        </div>
        <div class="pages right clearfix">
          <a class="prev-page disable">上一頁</a>
          <span class="current-page">1/255</span>
          <a href="#" class="next-page">下一頁</a>
          <select class="select-page"><option>第1頁</option></select>
          <span class="item-count">總筆數：65,535</span>
        </div>
        <div class="template-function template-button">
          <button class="btn-action" onclick="alert('報名成功');">報名</button>
        </div>

  <section class="table-container">
    <div class="table-body">
      <section class="double-scroll-top">
        <div class="scroll-content-width"></div>
      </section>
      <section class="double-scroll-bottom">
        <table class="cloud-market-table template-table scroll-content">
          <thead>
            <tr>
              <th><input type="checkbox"/></th>
              <th>賣場ID</th>
              <th>賣場圖片</th>
              <th>賣場名稱</th>
              <th>顏色</th>
              <th>尺寸</th>
              <th>市價</th>
              <th>售價/進貨價<br/>(含稅)</th>
              <th>毛利率</th>
              <th>可賣量</th>
              <th>借單/轉單</th>
              <th>預計備貨量</th>
              <th>預計進貨時間</th>
              <th>備註</th>
              <th>商品ID</th>
              <th>PM</th>
              <th>分類</th>
              <th>要賣海外</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              for ($x = 0; $x <= 9; $x++) {
                  echo '
                    <tr>
                      <td><input type="checkbox"/></td>
                      <td><a href="#">201510AM9999999</a></td>
                      <td><img src="http://placehold.it/50x50/" width="50" height="50" alt="商品名稱"></td>
                      <td>商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱</td>
                      <td>白色</td>
                      <td>M</td>
                      <td>99999.999</td>
                      <td><span class="highlight">99999.999</span><br/>99999.999</td>
                      <td>99.99%</td>
                      <td>99999</td>
                      <td>寄倉</td>
                      <td><input type="text" size="5" value="99999"/></td>
                      <td><input type="text" size="5" value="99999"/></td>
                      <td><input type="text" size="30" value="煩死了"/></td>
                      <td>201510AM9999999</a></td>
                      <td>SDAPFO</td>
                      <td>手錶</td>
                      <td>是</td>
                    </tr>
                  ';
              } 
            ?>
          </tbody>
        </table>
      </section>
      </div>
    <div class="clearfix"></div>
  </section>
  <div class="pages">
    <a class="prev-page disable">上一頁</a>
    <span class="current-page">1/255</span>
    <a href="#" class="next-page">下一頁</a>
    <select class="select-page"><option>第1頁</option></select>
  </div>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="../js/template-action.js"></script>
<script src="../js/double-scroll.js"></script>
<script>
//date time picker
var timeOption = {
    dateFormat: 'yy/mm/dd',
    showTimepicker: false,
    minDate: -180,
    maxDate: 0
};
$('.input-datepicker').datetimepicker(timeOption);


$('#check-market-name').hide();
$('#select-market-name').change(function(){
  if($('#select-market-name').val() == '1') {
    $('#check-market-name').show(); 
  } else {
    $('#check-market-name').hide(); 
  } 
});
</script>
</body>
</html>