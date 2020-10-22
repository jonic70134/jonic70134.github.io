//item main 選規格
$('.value>li').click(function(){
	var img = "<i class='fa fa-check'></i>";
	if($(this).hasClass('disabled')){
		return false;
	}else{
    	$(this).addClass('active').append(img).siblings().removeClass('active').find('.fa-check').remove();
	}
});



(function($){
    //單品圖片展示
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 0,
      loop: true,
	  loopedSlides: 10,
      navigation: {
        nextEl: '.fa-angle-right',
        prevEl: '.fa-angle-left',
      },
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      slidesPerView:5,
      spaceBetween: 10,
      touchRatio: 0.2,
      slideToClickedSlide: true,
      loop: true,
	  loopedSlides: 10
    });

    if($('.gallery-thumbs .swiper-slide').length == 1) {
        $('.gallery-thumbs').hide();
        $('.nextBtn').hide();
        $('.prevBtn').hide();
    }
    else {
        $('.gallery-thumbs').show();
        $('.nextBtn').show();
        $('.prevBtn').show();
    }

    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;
  
    $(".colorsize li").click(function(){
        var index=$(this).attr('data-href');
        galleryTop.slideTo(index);
     });

     
    //單品頁主圖
    var mySwiper = new Swiper('.item-slider-001',{
        pagination: '.pagination',
        speed: 500,
        loop: false,
        grabCursor: true,
        calculateHeight: true,
        resizeReInit: true,
        paginationClickable: true,
        autoplayDisableOnInteraction: false,
        navigation: {
            nextEl: '.arrow-left',
            prevEl: '.arrow-right',
        }
    })
    




    //item-related tab
        $('.item-related-tabs li').on('click', function(){
            var tab_id = $(this).attr('data-tab');
            $('.item-related-tabs li').removeClass('active');
            $('.item-related .items').removeClass('active');
            $('.pc-item-related .items').removeClass('active');

            $(this).addClass('active');
            $("."+tab_id).addClass('active');
        });


        $('.item-detail-tabs li').on('click', function(){
            var tab_id = $(this).attr('data-tab');
            $('.item-detail-tabs li').removeClass('active');
            //$('.item-related .items').removeClass('active');
            $('.pc-item-detail .items').removeClass('active');

            $(this).addClass('active');
            $("."+tab_id).addClass('active');
        });
    //請選擇尺寸按下去滑動到規格品區塊
    $(".btn-select-pink").click(function() {
        $('html, body').animate({
            scrollTop: $(".buy_product_style").offset().top
        }, 1000);
    });


// 看更多簡介
$('ul.feature_list').each(function(){
    var moreBlock= '<li class="more">看更多簡介<i class="fa fa-chevron-down" aria-hidden="true"></i></li>';
	var LiNum = $(this).find($('ul.feature_list > li')).length;
	if( LiNum > 3){    //超過3個就截斷
	  $('li', this).eq(2).nextAll().hide().addClass('toggleable');
	  $(this).append(moreBlock);    
	}
  });
  $('ul.feature_list').on('click','.more', function(){
	$(this).hide();    
	$(this).siblings('li.toggleable').slideToggle(); 
  }); 


  //贈品
  var item_add = new Swiper('.pc-item-add .swiper-container', {
    slidesPerView: 5,
    spaceBetween: 10,
    slidesPerGroup: 5,
    loopFillGroupWithBlank: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.fa-angle-right',
      prevEl: '.fa-angle-left',
    },
  });

//   贈品勾選連動
// $(".gift_chk_area input[type='checkbox']").click(function () {
//     var btnCart = "選擇";
//     var btnNotselect = "已選擇";
//     var gift_chkid = $(this).attr('id').slice(9);
//     console.log(gift_chkid);
//     if($(this).is(":checked")){
//         $(".gift_chk"+gift_chkid).addClass("active");
//         $(".gift_chk"+ gift_chkid + " .btn-notselect").removeClass("btn-notselect").addClass("btn-cart").text(btnNotselect);
//     }else{
//         $(".gift_chk" + gift_chkid).removeClass("active");
//         $(".gift_chk"+ gift_chkid + " .btn-cart").removeClass("btn-cart").addClass("btn-notselect").text(btnCart);
//     }
// });

//   贈品勾選連動
$(".gift_view input[type='checkbox']").change(function () {
    var btnCart = "選擇";
    var btnNotselect = "已選擇";    
    var gift_view_chkid = $(this).attr('id').slice(5);
    var checkedLength = $(".gift_view input[type='checkbox']:checked").length;
    console.log(gift_view_chkid);
    if($(this).is(":checked")){
        $(".gift_chk_area .add_list").show();
        $(".gift_chk_area .emp_info").hide();
        $("#gift_chk_" + gift_view_chkid).prop( "checked", true );
        $("#gift_" + gift_view_chkid).parent(".item").addClass("active");
        $("#gift_"+ gift_view_chkid + "~.info .btn-notselect").removeClass("btn-notselect").addClass("btn-cart").text(btnNotselect);
    }
    else{
        $("#gift_chk_" + gift_view_chkid).prop( "checked", false );
        $("#gift_" + gift_view_chkid).parent(".item").removeClass("active");
        $("#gift_"+ gift_view_chkid + " ~.info .btn-cart").removeClass("btn-cart").addClass("btn-notselect").text(btnCart);
    };

    if (checkedLength > 0){
        $(".gift_chk_area .add_list").show();
        $(".gift_chk_area .emp_info").hide();
      }
      else{
        $(".gift_chk_area .add_list").hide();
        $(".gift_chk_area .emp_info").show();
      }
});


//   加購勾選連動
$(".add_view input[type='checkbox']").change(function () {
    var btnCart = "加入選購";
    var btnNotselect = "已加入";    
    var add_view_chkid = $(this).attr('id').slice(4);
    var checkedLength = $(".add_view input[type='checkbox']:checked").length;
    console.log(add_view_chkid);
    if($(this).is(":checked")){
        $(".add_chk_area .add_list").show();
        $(".add_chk_area .emp_info").hide();
        $("#add_chk_" + add_view_chkid).prop( "checked", true );
        $("#add_" + add_view_chkid).parent(".item").addClass("active");
        $("#add_"+ add_view_chkid + "~.info .btn-notselect").removeClass("btn-notselect").addClass("btn-cart").text(btnNotselect);
    }else{
        $("#add_chk_" + add_view_chkid).prop( "checked", false );
        $("#add_" + add_view_chkid).parent(".item").removeClass("active");
        $("#add_"+ add_view_chkid + " ~.info .btn-cart").removeClass("btn-cart").addClass("btn-notselect").text(btnCart);
    };

    if (checkedLength > 0){
        $(".add_chk_area .add_list").show();
        $(".add_chk_area .emp_info").hide();
    }else{
        $(".add_chk_area .add_list").hide();
        $(".add_chk_area .emp_info").show();
    }
});


//  加購的看更多
$(".add_list .more").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".add_view").offset().top
    }, 1000);
});

// 看贈品
$(".btn-notgift").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".gift_view").offset().top
    }, 1000);
});

// 看加購品
$(".btn-notadd").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".add_view").offset().top
    }, 1000);
});

// 加購看更多折疊
$('.add_view .items').each(function(){
    var addNum = $(this).find($('.add_view .item')).length;
    var moreBlock= '<a href="#" class="more">看更多<i class="fa fa-chevron-down" aria-hidden="true"></i></a>';
	if( addNum > 5){    //超過3個就截斷
	  $('.item', this).eq(4).nextAll().hide().addClass('toggleable');
	  $(this).append(moreBlock);    
	}
  });
  $('.add_view .items').on('click','.more', function(e){
      e.preventDefault();
	$(this).hide();    
	$(this).siblings('.item.toggleable').slideToggle(); 
  }); 


})(jQuery);