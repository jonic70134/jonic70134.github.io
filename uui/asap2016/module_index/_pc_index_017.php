<div class="pc_index_017">
    <div class="container pink-bg">
        <?php if($edit=="true"){ //後臺編輯區塊?>
        <section class="edit-area">
            <button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-edit-item.html"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="3"></div>
            <button class="btn-create go-popup" data-width="800" data-href="/inside/popup/modify-add-block.html"><i class="fa fa-plus"></i>新增區塊</button>
            <div class="tooltip">熱門主題廣告區：可設定5則廣告</div>     
        </section>
        <?php } //後臺編輯區塊 end ?>
        <ul class="tabs">                     
            <li data-tab="sub-01" class="active">宋仲基限定版面膜</li>                      
            <li data-tab="sub-02">限時特惠</li>
            <li data-tab="sub-03">專櫃化妝品</li>
            <li data-tab="sub-04">醫美藥妝</li>
            <li data-tab="sub-05">臉部保養</li>
            <li data-tab="sub-06">開架美妝</li>
            <li data-tab="sub-07">彩妝</li>
            <li data-tab="sub-08">香水/香氛</li>
            <li data-tab="sub-09">清潔沐浴</li>
            <li data-tab="sub-10">身體保養</li>
            <li data-tab="sub-11">美髮護理</li>
            <li data-tab="sub-12">指定清潔沐浴，<br>滿588送100點購物金</li>
        </ul>      
        <div class="content">
            <div class="items sub-01 active">
                <div class="item focus">
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" title="<?php echo $value['name'];?>" itemprop="image">
                    </a>
                     <div class="commodity-status">
                       <span class="ic-tag ic-flag fg-jp">日本</span>
                       <span class="ic-tag ic-price">降價</span>
                       <span class="ic-tag ic-top">TOP5</span>
                       <span class="ic-tag ic-limited">限時</span>
                       <span class="ic-tag ic-gifts">贈品</span>
                    </div>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                        <div class="buy">
                           <!--  <del>
                                <span itemprop="currency">NT$</span>
                                <span itemprop="highPrice">99,999,999</span>
                            </del> -->
                            <span class="currency">特價 $</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                           <!--  <a href="item.php" class="btn" itemprop="offerurl">搶購<i class="fa fa-chevron-circle-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <?php foreach ($items as $key => $value) {if($key==6){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <!-- <img src="http://placehold.it/160x160" alt="<?php echo $value['name'];?>" itemprop="image"> -->
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
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" title="<?php echo $value['name'];?>" itemprop="image">
                    </a>
                    <div class="commodity-status">
                       <span class="ic-tag ic-flag fg-jp">日本</span>
                       <span class="ic-tag ic-price">降價</span>
                       <span class="ic-tag ic-top">TOP5</span>
                       <span class="ic-tag ic-limited">限時</span>
                       <span class="ic-tag ic-gifts">贈品</span>
                    </div>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                        <div class="buy">
                            <!-- 
                            <del>
                                <span itemprop="currency">NT$</span>
                                <span itemprop="highPrice">99,999,999</span>
                            </del>
                            -->
                            <span class="currency">$</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                            <!-- a href="item.php" class="btn" itemprop="offerurl">搶購<i class="fa fa-chevron-circle-right"></i></a -->
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>