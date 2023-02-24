<header class="site-header">
    <div class="container">
        <?php if(isset($_GET['edit']) && $edit=="true"){ //後臺編輯區塊?>
        <section class="edit-area">
            <button class="btn-edit" onclick="location.href='/inside/modify-menu.html'"><i class="fa fa-sitemap"></i>編輯網站MENU</button>    
        </section>
        <?php } //後臺編輯區塊 end ?>
        <a href="index.php" class="logo"><img src="../c/img/frame/logo_2x.png" alt=""></a>
        <?php include "../module_component/_site_search.php";?>
        <div class="clearfix"></div>
        <?php include "../module_component/_nav_menu.php";?>
        <div class="clearfix"></div>
        <nav class="nav-user" style="visibility:visible;">
            <ul>
                <li><a href="#">登入</a></li>
                <li><a href="#">註冊</a></li>
                <li><a href="#">查訂單</a></li>
                <li><a href="#">帳戶</a></li>
                <li><div class="cart-btn">
                    <span class="count">1</span>
                    <a href="#"><i class="fa fa-shopping-cart f-cart"></i> 購物車</a>
                    <!--a class="icon-cart">購物車</a-->
                    <?php include "../module_component/_site_cart.php";?>
                    </div>
                </li>
            </ul>
        </nav>
        <nav class="nav-menu-mobile">
            <ul>
                <li><i class="fa fa-bars icon-menu"></i></li>
                <li><i class="fa fa-search icon-search"></i></li>
                <li><i class="fa fa-user icon-account"></i></li>
                <li><a href="#" class="m-f-cart"><i class="fa fa-shopping-cart f-cart"></i><span class="count">1</span></a></li>
                <!--li><a href="#" class="icon-cart"><span class="count">1</span></a></li-->
            </ul>
        </nav>
    </div>
</header>