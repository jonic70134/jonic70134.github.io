<div class="photo md-site-sliders">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($itemss as $key => $value) {if($key==10){break;} ?>
            <div class="swiper-slide"><img itemprop="image" data-src="../c/img/sth_asap_m/sample/img_420_02.jpg" class="swiper-lazy" alt="<?php echo $value['name'];?>"></div>
            <?php }?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>