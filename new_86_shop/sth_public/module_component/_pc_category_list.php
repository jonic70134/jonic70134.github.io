<div class="pc_category_list item-list-4"><!-- 後面增加 class name 'item-list' 調整為一行3個區塊 -->
    <div class="container">
        <div class="items">
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item is-border-none">
                <a href="item.php">
                    <p itemprop="offerurl" class="photo">
                        <?php switch ($value['tab']) {
                            case '大材積':
                                echo '<span class="tag-status is-odd">大材積</span>';
                                break;
                            case '北市5h 全台24h':
                                echo '<span class="tag-status is-uitox-delivery">北市5h 全台24h</span>';
                                break;
                            case '廠商出貨 約2-7日':
                                echo '<span class="tag-status is-vendor-delivery">廠商出貨 約2-7日</span>';
                                break;
                            case '分開到貨':
                                echo '<span class="tag-status is-separate-delivery">分開到貨</span>';
                                break;
                            case '日本直送':
                                echo '<span class="tag-status is-imported">日本直送</span>';
                                break;
                            default:
                                # code...
                                break;
                        }?>
                        <img src="<?php echo $value['images'];?>" alt="">
                        <div class="discount_tip"></div>
                    </p>
                    <div class="info">
                        <h1 itemprop="name" class="name"><?php echo $value['name'];?></h1>
                        <p class="buy is-old">
                            <span class="type">網路價</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                        </p>
                        <p class="buy">
                            <span class="type">購物金價</span>
                            <span class="currency">NT$</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                            <span href="javascript:void(0);" class="btn-rush" itemprop="offerurl" target="_blank">搶</span>
                        </p>
                        <button href="../module_component/_site_fancybox_all.php #fancybox-compare-best-price" class="bird-block best small fancybox fancybox.ajax fee-c">省1000<span class="detail">詳</span></button>
                    </div>
                </a>
            </div>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item is-border-none">
                <a href="item.php">
                    <p itemprop="offerurl" class="photo">
                        <?php switch ($value['tab']) {
                            case '大材積':
                                echo '<span class="tag-status is-odd">大材積</span>';
                                break;
                            case '北市5h 全台24h':
                                echo '<span class="tag-status is-uitox-delivery">北市5h 全台24h</span>';
                                break;
                            case '廠商出貨 約2-7日':
                                echo '<span class="tag-status is-vendor-delivery">廠商出貨 約2-7日</span>';
                                break;
                            case '分開到貨':
                                echo '<span class="tag-status is-separate-delivery">分開到貨</span>';
                                break;
                            case '日本直送':
                                echo '<span class="tag-status is-imported">日本直送</span>';
                                break;
                            default:
                                # code...
                                break;
                        }?>
                        <img src="<?php echo $value['images'];?>" alt="">
                        <div class="discount_tip"></div>
                    </p>
                    <div class="info">
                        <h1 itemprop="name" class="name"><?php echo $value['name'];?></h1>
                        <p class="buy is-old">
                            <span class="type">網路價</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                        </p>
                        <p class="buy">
                            <span class="type">購物金價</span>
                            <span class="currency">NT$</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                            <span href="javascript:void(0);" class="btn-rush" itemprop="offerurl" target="_blank">搶</span>
                        </p>
                        <button href='../module_component/_site_fancybox_all.php #fancybox-call-best-price' class="bird-block call small fancybox fancybox.ajax fee-c">省錢通知我</button>
                    </div>
                </a>
            </div>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item is-border-none">
                <a href="item.php">
                    <p itemprop="offerurl" class="photo">
                        <?php switch ($value['tab']) {
                            case '大材積':
                                echo '<span class="tag-status is-odd">大材積</span>';
                                break;
                            case '北市5h 全台24h':
                                echo '<span class="tag-status is-uitox-delivery">北市5h 全台24h</span>';
                                break;
                            case '廠商出貨 約2-7日':
                                echo '<span class="tag-status is-vendor-delivery">廠商出貨 約2-7日</span>';
                                break;
                            case '分開到貨':
                                echo '<span class="tag-status is-separate-delivery">分開到貨</span>';
                                break;
                            case '日本直送':
                                echo '<span class="tag-status is-imported">日本直送</span>';
                                break;
                            default:
                                # code...
                                break;
                        }?>
                        <img src="<?php echo $value['images'];?>" alt="">
                        <div class="discount_tip"></div>
                    </p>
                    <div class="info">
                        <h1 itemprop="name" class="name"><?php echo $value['name'];?></h1>
                        <p class="buy is-old">
                            <span class="type">網路價</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                        </p>
                        <p class="buy">
                            <span class="type">購物金價</span>
                            <span class="currency">NT$</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                            <span href="javascript:void(0);" class="btn" itemprop="offerurl" target="_blank">搶購 <i class="fa fa-chevron-circle-right"></i></span>
                        </p>
                    </div>
                </a>
            </div>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item is-border-none">
                <a href="item.php">
                    <p itemprop="offerurl" class="photo">
                        <?php switch ($value['tab']) {
                            case '大材積':
                                echo '<span class="tag-status is-odd">大材積</span>';
                                break;
                            case '北市5h 全台24h':
                                echo '<span class="tag-status is-uitox-delivery">北市5h 全台24h</span>';
                                break;
                            case '廠商出貨 約2-7日':
                                echo '<span class="tag-status is-vendor-delivery">廠商出貨 約2-7日</span>';
                                break;
                            case '分開到貨':
                                echo '<span class="tag-status is-separate-delivery">分開到貨</span>';
                                break;
                            case '日本直送':
                                echo '<span class="tag-status is-imported">日本直送</span>';
                                break;
                            default:
                                # code...
                                break;
                        }?>
                        <img src="<?php echo $value['images'];?>" alt="">
                        <div class="discount_tip"></div>
                    </p>
                    <div class="info">
                        <h1 itemprop="name" class="name"><?php echo $value['name'];?></h1>
                        <p class="buy is-old">
                            <span class="type">網路價</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                        </p>
                        <p class="buy">
                            <span class="type">還可折抵購物金</span>
                            <span href="javascript:void(0);" class="btn" itemprop="offerurl" target="_blank">搶購 <i class="fa fa-chevron-circle-right"></i></span>
                        </p>
                    </div>
                </a>
            </div>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item is-border-none">
                <a href="item.php">
                    <p itemprop="offerurl" class="photo">
                        <?php switch ($value['tab']) {
                            case '大材積':
                                echo '<span class="tag-status is-odd">大材積</span>';
                                break;
                            case '北市5h 全台24h':
                                echo '<span class="tag-status is-uitox-delivery">北市5h 全台24h</span>';
                                break;
                            case '廠商出貨 約2-7日':
                                echo '<span class="tag-status is-vendor-delivery">廠商出貨 約2-7日</span>';
                                break;
                            case '分開到貨':
                                echo '<span class="tag-status is-separate-delivery">分開到貨</span>';
                                break;
                            case '日本直送':
                                echo '<span class="tag-status is-imported">日本直送</span>';
                                break;
                            default:
                                # code...
                                break;
                        }?>
                        <img src="<?php echo $value['images'];?>" alt="">
                        <div class="discount_tip"></div>
                    </p>
                    <div class="info">
                        <h1 itemprop="name" class="name"><?php echo $value['name'];?></h1>
                        <p class="buy is-old"></p>
                        <p class="buy">
                            <span class="type">網路價</span>
                            <span class="currency">NT$</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                            <span href="javascript:void(0);" class="btn" itemprop="offerurl" target="_blank">搶購 <i class="fa fa-chevron-circle-right"></i></span>
                        </p>
                    </div>
                </a>
            </div>
            <?php foreach ($category_items as $key => $value){ ?>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item is-border-none">
                <a href="item.php" itemprop="offerurl" class="photo">
                    <?php switch ($value['tab']) {
                        case '大材積':
                            echo '<span class="tag-status is-odd">大材積</span>';
                            break;
                        case '北市5h 全台24h':
                            echo '<span class="tag-status is-uitox-delivery">北市5h 全台24h</span>';
                            break;
                        case '廠商出貨 約2-7日':
                            echo '<span class="tag-status is-vendor-delivery">廠商出貨 約2-7日</span>';
                            break;
                        case '分開到貨':
                            echo '<span class="tag-status is-separate-delivery">分開到貨</span>';
                            break;
                        case '日本直送':
                            echo '<span class="tag-status is-imported">日本直送</span>';
                            break;
                        default:
                            # code...
                            break;
                    }?>
                    <img src="<?php echo $value['images'];?>" alt="">
                    <div class="discount_tip"></div>
                </a>
                <div class="info">
                    <h1 itemprop="name" class="name"><a href="item.php"><?php echo $value['name'];?></a></h1>
                        <p class="buy is-old">
                            <span class="type">網路價</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                        </p>
                        <p class="buy">
                            <span class="type">購物金價</span>
                            <span class="currency">NT$</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                            <?php echo ($value['type'] == 'btn-addbuy')? '<a href="javascript:void(0);" class="btn" itemprop="offerurl" target="_blank">搶購 <i class="fa fa-chevron-circle-right"></i></a>' : '';?>
                        </p>
                    <div class="buy-actions">
                    <?php if($value['type']=="btn-preorder" || $value['type']=="btn-addcart" || $value['type']=="btn-discount" || $value['type']==""){?>
                    <div class="quantity">
                        <span class="quantity-decrease">-</span>
                        <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">
                        <span class="quantity-increase">+</span>
                    </div>
                    <?php }?>
                    <?php switch ($value['type']) {//10種按鈕型態
                        case 'btn-preorder':
                            echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-preorder">立即預訂</a>';
                            break;
                        case 'btn-preorder-finish':
                            echo '<p class="button large btn-preorder-finish">預購結束</p>';
                            break;
                        case 'btn-rush':
                            echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-rush">立即搶購</a>';
                            break;
                        case 'btn-rush-finish':
                            echo '<p class="button large btn-rush-finish">搶購一空</p>';
                            break;
                        case 'btn-discount':
                            echo '<a href="../module_component/_site_fancybox_all.php #fancybox-buy-discount" itemprop="offerurl" class="button large btn-discount fancybox fancybox.ajax">買立折</a>';
                            break;
                        case 'btn-soldout-stock':
                            echo '<p class="button large btn-soldout-stock">售完，補貨中</p>';
                            break;
                        case 'btn-soldout':
                            echo '<p class="button large btn-soldout">已售完</p>';
                            break;
                        case 'btn-to-sale':
                            echo '<p class="button large btn-to-sale">即將開賣</p>';
                            break;
                        case 'btn-select':
                            echo '<a href="../module_component/_site_fancybox_asap.php?siteName=' . $siteName . '#item_main" class="button large btn-select fancybox fancybox.iframe">請選擇尺寸</a>';
                            break;
                        case 'btn-addcart':
                            echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-addcart">加入購物車</a>';
                            break;
                        case 'btn-addbuy':
                            echo '';
                            break;
                        default:
                            echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-addcart">加入購物車</a>';
                            break;
                    }?>
                    </div>
                    <?php if($value['type']=="btn-preorder"){?>
                    <div class="highlight">
                        <p>會員限購1個(剩餘數量：9999)</p>
                        <p class="red-text">預計出貨日：2014/05/16</p>
                    </div>
                    <?php }?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>