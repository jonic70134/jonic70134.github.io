<?php
    include "../frame/__config.php";
    include "../frame/__data.php";
?>
<?php //買立折?>
<div id="fancybox-buy-discount">
    <h1 class="title">買立折</h1>
    <div class="block">
        <div class="line">
            <div class="key">Product Name：</div>
            <div class="value">我是商品我是商品我是商品</div>
        </div>
        <div class="line">
            <div class="key">Special：</div>
            <div class="value price">$4590</div>
        </div>
        <div class="line">
            <div class="key">Promo Price：</div>
            <div class="value price">-300</div>
        </div>
        <hr>
        <div class="line">
            <div class="key">Price discount：</div>
            <div class="value price">$4290</div>
        </div>
        <div class="actions">
            <div class="quantity">
                <span class="quantity-decrease">-</span>
                <?php //修正瀏覽器統一樣式?>
                <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">
                <span class="quantity-increase">+</span>
            </div>
            <div class="button large">購買</div>
        </div>
    </div>
</div>

<?php //加購商品 error message?>
<div id="" class="hide">
    <h1 class="title">加購品</h1>
    <div class="block">
        <span class="name">zenfone 5</span>
        <span>加購品的數量，不可大於主商品購買的數量</span>
        <div class="actions">
            <a href="#" class="button large gray" >確定</a>
        </div>
    </div>
</div>

<?php //贈品圖, 組合商品圖?>
<div id="fancybox-image">
    <h1 class="title">贈品 or 組合商品</h1>
    <div class="block">
        <img src="http://placehold.it/300x300" alt="" class="img-full">
    </div>
</div>

<?php //商品選擇?>
<div id="fancybox-select">
    <h1 class="title">請選擇尺寸</h1>
    <div class="block">
        <div class="product">
            <img src="http://placehold.it/150x150" alt="" class="img-full">
        </div>
        <div class="options">
            <h1>商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱</h1>
            <div class="option">
                <p class="key">顏色:</p>
                <ul class="value">
                    <li itemprop="color" class="img disabled" title="已售完"><i class="fa fa-times-circle"></i><img src="../c/img/sample/color_purple.png" alt="顏色" title="顏色"></li>
                    <li itemprop="color" class="img"><img src="../c/img/sample/color_white.png" alt="顏色" title="顏色"></li>
                    <li itemprop="color" class="img"><img src="../c/img/sample/color_red.png" alt="顏色" title="顏色"></li>
                    <li itemprop="color" class="img"><img src="../c/img/sample/color_green.png" alt="顏色" title="顏色"></li>
                    <li itemprop="color" class="img active"><i class="fa fa-check"></i><img src="../c/img/sample/color_orange.png" alt="顏色" title="顏色"></li>
                    <li itemprop="color">顏色文字</li>
                </ul>
            </div>
            <div class="option">
                <p class="key">尺寸:</p>
                <ul class="value">
                    <li itemprop="model" class="active"><i class="fa fa-check"></i>11</li>
                    <li itemprop="model" class="disabled"><i class="fa fa-times-circle"></i>12</li>
                    <li itemprop="model" >13</li>
                </ul>
            </div>
        </div>
        <div class="actions">
            <div class="quantity num-cart">
                <span class="quantity-decrease">-</span>
                <?php //修正瀏覽器統一樣式?>
                <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">
                <span class="quantity-increase">+</span>
            </div>
            <div class="button large num-cart">加入購物車</div>
            <div class="button large select-atr">請選擇尺寸</div>
        </div>
    </div>
</div>
<?php //信用卡紅利說明?>
<div id="fancybox-bonus">
    <article class="credit-card bonus" style="margin-top:0;">
        <h3 class="title-h3">信用卡紅利折抵說明<a href="../module_component/_site_fancybox_all.php #fancybox-bank" class="fancybox fancybox.ajax link">分期優惠</a></h3>
        <table class="list">
            <tbody>
                <tr>
                    <th>發卡銀行</th>
                    <th>最高折抵上限(註1)</th>
                    <th>消費金額限制(註2)</th>
                    <th>點數限制(註3)</th>
                    <th>折抵比例(註4)</th>
                </tr>
                <tr>
                    <td><h4>台新銀行</h4></td>
                    <td>100 %</td>
                    <td>120 元</td>
                    <td>1000 點</td>
                    <td>1000 點 = 60 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷台新銀行信用卡，單筆消費金額滿120元以上，可以紅利點數線上立即折抵消費金額。<br>每1,000 點紅利點數折抵NT$60，最高可折抵該筆消費金額之100%</p>
                        <ol>
                            <li>本活動對象為台新銀行發行之各類信用卡（台新美國運通卡除外）之正卡持卡人，附卡持卡人恕無法參加本活動。</li>
                            <li>持卡人（限正卡）參加本活動時，若有下列情形者，喪失參與本活動之權利：
                                <ul>
                                    <li>持卡人自行終止信用卡帳戶者。</li>
                                    <li>持卡人現有大集大利紅利點數不足 1,000 點。</li>
                                    <li>任何遲繳、欠繳、超額、違反「台新銀行信用卡會員約定條款」及其他信用貶落之情事者。</li>
                                </ul>
                            </li>
                            <li>參加本活動之持卡人不得自行指定欲折抵之金額或點數，台新銀行將於持卡人當次刷卡消費金額100％之範圍內，依持卡人現有之紅利點數予以折抵(可撥打信用卡背面的聯絡電話)。</li>
                            <li>持卡人參加本活動後，如有退貨之情事，請依照 ASAP 線上購物之退貨處理流程，由客服務人員為您處理退貨事宜，其消費交易所抵扣之紅利點數將依ASAP線上購物完成退貨作業時間，退回至持卡人點數帳戶。</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>萬泰銀行</h4></td>
                    <td>100 %"</td>
                    <td>120 元</td>
                    <td>1000 點</td>
                    <td>1000 點 = 60 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷萬泰銀行信用卡，單筆消費金額滿120元以上，可以紅利點數線上立即折抵消費金額。每 1,000 點紅利點數折抵 NT$60 ，最高可折抵該筆消費金額之100%</p>
                        <ol>
                            <li>凡持萬泰銀行發行之信用卡，即可使用信用卡紅利點數折抵消費。</li>
                            <li>紅利點數折抵活動與分期付款活動無法同時使用。</li>
                            <li>紅利點數折抵活動僅限正卡持卡人參加。</li>
                            <li>當點數不足最高折抵上限時，將自動改為可折抵的最高點數折抵消費。</li>
                            <li>參加紅利點數折抵活動，該筆消費所回饋之紅利點數係依折抵後之金額計算(可撥打信用卡背面的聯絡電話)。</li>
                            <li>乙方MoneyBack御璽卡、MoneyBack白金卡及統一Smile信用卡不適用本優惠活動。</li>
                            <li>萬泰銀行保留隨時修改、變更、取消或終止本活動之權利。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>澳盛銀行</h4></td>
                    <td>100 %</td>
                    <td>500 元</td>
                    <td>1000 點</td>
                    <td>1000 點 = 100 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷澳盛銀行飛行積金，單筆消費滿500元(含以上)，可以紅利點數線上立即折抵消費金額。 每 1,000 點紅利點數折抵 NT$100 ，最高可折抵該筆消費金額之100%！(限澳盛銀行飛行白金卡及飛行御璽卡正卡人使用)</p>
                        <ol>
                            <li>本活動限台灣地區發行之指定澳盛銀行信用卡有效之飛行卡正卡持卡人且飛行積金達1,000點(含)以上參加。</li>
                            <li>飛行積金折抵刷卡金為每1,000點折抵NT$100，本活動最高可折抵該筆消費金額之100%。</li>
                            <li>飛行積金折抵金額及點數均由系統換算，正卡持卡人須於結帳前主動選擇使用飛行積金折抵，惟不得自行指定欲折抵之金額或點數，澳盛銀行將於指定信用卡之正卡持卡人當次消費金額之可折抵上限範圍內，依正卡持卡人現有之飛行積金予以折抵，最小折抵單位為1,000點，至點數不足或折抵完畢為止(可撥打信用卡背面的聯絡電話)。</li>
                            <li>指定信用卡正卡持卡人參加本活動後，如果退貨之情事，請依照該旅行社之退貨處理流程，由客服人員處理退貨事宜，其消費交易所扣抵之飛行積金將依各旅行社完成退貨作業時間，退回正卡持卡人信用卡帳戶。</li>
                            <li>正卡持卡人參加本活動時，飛行積金點數經折抵使用後，除依前述規定辦理退貨外，不得要求退還。使用飛行積金折抵時須為有效卡，如有停卡、延滯繳款或其他違反信用卡契約之情事者，恕無法使用飛行積金折抵。</li>
                            <li>本行及各商店保留審核持卡人參加本活動與否及修改、變更及終止本活動之權利。活動期間如有更改，皆以各商店網站公告為準，恕不另行通知。</li>
                            <li>分期詳細規則以及相關活動辦法、未盡事項或更動，詳見本行網站anz.tw。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>新光銀行</h4></td>
                    <td>100 %"</td>
                    <td></td>
                    <td>1000 點</td>
                    <td>1000 點 = 60 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷新光銀行信用卡，不限消費金額，可以紅利點數線上立即折抵消費金額， 每 1000 點紅利點數折抵 NT$60 ，最高可折抵該筆消費金額之100%</p>
                        <ol>
                            <li>紅利折抵活動對象限臺灣新光銀行發行之信用卡正卡持卡人參加，附卡持卡人恕無法參加本活動，參加本活動時若有下列情形者，喪失參與本活動之權利：
                                <ul>
                                    <li>持卡人自行終止信用卡帳戶者。</li>
                                    <li>持卡人現有紅利點數不足1,000 點。</li>
                                    <li>任何遲繳、欠繳、超額、違反「臺灣新光銀行信用卡會員約定條款」及其他信用貶落之情事者。 </li>
                                </ul>
                            </li>
                            <li>不適用紅利折抵之信用卡：寰宇卡、日本航空聯名卡、京城銀行聯名卡、分期7card、商務卡及VISA金融卡。 </li>
                            <li>同一筆簽帳消費恕不得同時使用紅利折抵與分期付款。(可撥打信用卡背面的聯絡電話)</li>
                            <li>活動期間紅利點數折抵消費之條件：每1,000點紅利可折抵消費 60元，最高折抵比例為該筆消費金額之100%，以千點為折抵單位，倘現有點數不足最高折抵比率上限時，將自動改以最高單位折抵點數折抵消費。</li>
                            <li>紅利點數折抵金額及點數均由系統換算，無法人工指定折抵某特定點數或金額。 </li>
                            <li>使用紅利點數折抵刷卡金額後，若需退貨者，須全額退貨，並依特約商店退貨流程辦理退貨事宜，該筆已抵扣之紅利點數將於完成退貨作業時間後退還至持卡人點數帳戶。 </li>
                            <li>臺灣新光銀行保留隨時變更或終止本活動之權利，並保留同意持卡人參加本活動與否之權利。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>匯豐銀行</h4></td>
                    <td>100 %</td>
                    <td>500 元</td>
                    <td>1000 點</td>
                    <td>1000 點 = 60 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷匯豐銀行信用卡，單筆消費金額滿200元以上，可以紅利點數線上立即折抵消費金額。每1,000 點紅利點數折抵NT$60，最高可折抵該筆消費金額之100%</p>
                        <ol>
                            <li>凡持匯豐銀行發行之信用卡，即可使用信用卡紅利點數折抵消費。</li>
                            <li>紅利點數折抵活動與分期付款活動無法同時併用。</li>
                            <li>紅利點數折抵活動僅限正卡持卡人參加。</li>
                            <li>當點數不足最高折抵上限時，將自動改為可折抵的最高點數折抵消費。</li>
                            <li>查詢信用卡紅利點數 : 請洽您的信用卡發卡銀行 ( 可撥打信用卡背面的聯絡電話 )。</li>
                            <li>匯豐銀行保留隨時修改、變更、取消或終止本活動之權利。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>渣打銀行</h4></td>
                    <td>100 %</td>
                    <td></td>
                    <td>1000 點</td>
                    <td>1000 點 = 25 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷渣打信用卡，不限消費金額，可以紅利點數線上立即折抵消費金額。每 1,000 點紅利點數折抵 NT$25 ，最高可折抵該筆消費金額之100%</p>
                        <ol>
                            <li>凡持渣打國際商業銀行發行之信用卡，即可使用信用卡紅利點數折抵消費。</li>
                            <li>最高折抵上限為100% : 即最多可折抵當筆消費的100%。</li>
                            <li>當卡友點數不足最高折抵上限時，將自動改為可折抵的最高點數折抵消費。</li>
                            <li>點數限制1,000點 : 最少需有渣打銀行信用卡點數1,000點(含)以上，才可使用銀行紅利折抵。</li>
                            <li>查詢信用卡紅利點數 : 請洽您的信用卡發卡銀行(可撥打信用卡背面的聯絡電話)。</li>
                            <li>紅利折抵與分期付款恕不得同時使用 。</li>
                            <li>渣打銀行保留變更、修改或終止本活動之權利。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>台灣永旺信用卡</h4></td>
                    <td>100 %</td>
                    <td>1000 元</td>
                    <td>1000 點</td>
                    <td>1000 點 = 40 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷台灣永旺銀行信用卡，單筆消費金額滿1,000元以上，可以紅利點數線上立即折抵消費金額。每1,000點紅利點數折抵NT$40，最高可折抵該筆消費金額之100%</p>
                        <ol>
                            <li>每筆交易金額需超過1,000元方可使用紅利扣抵。</li>
                            <li>每1,000點紅利可扣抵交易金額40元。 最高可折抵該筆消費金額之100%</li>
                            <li>限正卡，附卡恕無法使用。</li>
                            <li>持卡人之紅利點數為本公司所公佈之紅利累積方式計算之。</li>
                            <li>每次扣抵所使用之紅利需以1,000點為單位。</li>
                            <li>紅利折抵刷卡金需使用「一次付清」付款方式，不得和信用卡分期同時使用(可撥打信用卡背面的聯絡電話)。</li>
                            <li>台灣永旺保留隨時修改、終止或變更本活動之權利。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>第一銀行</h4></td>
                    <td>100 %</td>
                    <td></td>
                    <td>1000 點</td>
                    <td>1000 點 = 50 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷第一銀行信用卡，不限消費金額，可以紅利點數線上立即折抵消費金額。每1,000 點紅利點數折抵 NT$50，最高可折抵該筆消費金額之100%</p>
                        <ol>
                            <li>欲使用第一銀行信用卡紅利折抵之持卡人， 需於結帳前主動告知特店人員，且不得自行指定欲折抵之金額或點數 ，第一銀行信用卡將於持卡人當次消費金額之可折抵上限範圍內，依持卡人現有之紅利點數予以折抵，至紅利點數不足或折抵完畢為止。點數換算折抵金額若有異動，則以各活動現場公告為主或詳見本網站。</li>
                            <li>紅利折抵活動適用於第一銀行正、附卡持卡人(除由你分期卡、YOUR NEEDS卡，及已設定分期功能卡片不適用)，且至少持有第一銀行紅利點數1000點（含）以上，惟附卡持卡人折抵之紅利點數以正卡持卡人所持有者計算(可撥打信用卡背面的聯絡電話)。</li>
                            <li>持卡人參加紅利折抵消費金額活動，如有退貨之情事，須攜帶欲退貨之商品、原消費之信用卡、簽單及發票至原消費地點辦理退貨手續，倘同一筆交易包含多項商品者，則須退回全數商品及金額，無法接受單項或部分商品之申請退貨。</li>
                            <li>持卡人參加紅利折抵活動，紅利點數經折抵使用後，除依前述規定辦理退貨外，不得要求退還或轉回。</li>
                            <li>同一筆消費如已使用”紅利折抵”，無法與特店分期、來電分期、約定分期併同使用。 </li>
                            <li>如交易期間適逢主機關機，系統無法正常回覆交易扣抵訊息時，則本交易將予以拒絕。</li>
                            <li>卡友若已停卡、信用貶落、帳戶遭控管或違反「第一銀行信用卡約定條款」者，則喪失本活動之資格。使用紅利折抵消費金額時，本行保留授權與否之權利。</li>
                            <li>第一銀行保留隨時修改、變更及取消本活動之權利。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>元大銀行</h4></td>
                    <td>60 %</td>
                    <td></td>
                    <td>1000 點</td>
                    <td>1000 點 = 50 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷元大銀行信用卡，不限消費金額，可以紅利點數線上立即折抵消費金額。每1,000 點紅利點數折抵 NT$60，最高可折抵該筆消費金額之60%</p>
                        <ol>
                            <li>參加元大銀行信用卡紅利折抵活動(下稱本活動)限元大銀行信用卡正卡持卡人，附卡持卡人恕無法參加本活動。</li>
                            <li>本活動期間持卡人至本行指定之紅利折抵特約商店(下稱特約商店)參加紅利折抵活動，每次可折抵之最小點數單位、可折抵金額、活動期間及單筆消費之最高折抵上下限，將依本行及各指定特約商店公告為準。本活動折抵金額及點數均已設定系統作業，無法接受持卡人指定折抵特定點數或金額，且每次折抵點數需為各項可折抵最小點數單位之倍數(有特別註明者不列入此限)。</li>
                            <li>欲參加本活動使用紅利點數折抵當次消費金額者，請事先告知結帳人員或依線上購物訂購網頁說明操作，且限消費結帳當時折抵，無法事後補登及退款。特約商店亦僅就持卡人當時實際支付之金額開立發票。</li>
                            <li>持卡人於本活動當次刷卡所累積之紅利點數，不能於當次使用，須於特約商店請款入帳經帳單結帳日期結算列入帳單後方可使用(可撥打信用卡背面的聯絡電話)。</li>
                            <li>參加本活動後若需辦理退貨時需全額退貨，請依各特約商店規定攜帶原信用卡、簽單及發票至原消費地點辦理退貨手續，或依線上購物網頁說明操作。其消費交易所折抵之紅利點數，將於特約商店完成紅利折抵退貨(或取消交易)程序後，退回至持卡人的原信用卡帳戶，且紅利點數返還信用卡帳戶時間將依各特約商店的作業時間而定，恕無法立即返還辦理退貨(或取消交易)之紅利點數。</li>
                            <li>分期付款交易不適用本活動。百貨公司之紅利折抵項目不包含禮券、超市、小吃部門之刷卡消費。</li>
                            <li>若持卡人對於紅利折抵之消費帳款發生任何信用卡消費帳款疑義之情事(疑義帳款之處理請參本行信用卡約定條款)，本行將就符合暫停付款條件之帳款提供查詢服務，但當筆折抵之紅利點數將在交易歸責釐清確認後，方做調整列入持卡人的原信用卡帳戶。</li>
                            <li>本行與紅利折抵特約商店並無經銷、代理或保證人關係；如持卡人就購買之商品或服務有爭議時，均由銷售商品或服務之特約商店負責，概與本行無涉。</li>
                            <li>持卡人若停卡、信用貶落、帳戶遭控管或違反「元大銀行信用卡約定條款」、「紅利積點活動辦法」者，則喪失本活動之資格。如有前述情形且已使用紅利折抵消費金額時，本行保留授權與否之權利。</li>
                            <li>如本活動特約商店適逢刷卡機故障或其系統線路等問題，而無法提供本活動服務時，不再另行折抵。</li>
                            <li>紅利折抵刷卡金需使用「一次付清」付款方式，不得和信用卡分期同時使用。</li>
                            <li>元大銀行保留隨時修改、終止或變更本活動之權利。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>安泰銀行</h4></td>
                    <td>60 %</td>
                    <td>599 元</td>
                    <td>1000 點</td>
                    <td>1000 點 = 30 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷安泰銀行信用卡，單筆消費金額滿599元以上，可以紅利點數線上立即折抵消費金額。每 1,000 點紅利點數折抵 NT$30，最高可折抵該筆消費金額之60%</p>
                        <ol>
                            <li>凡持安泰銀行發行之信用卡，即可使用信用卡紅利點數折抵消費。</li>
                            <li>紅利點數折抵活動與分期付款活動無法同時併用。</li>
                            <li>紅利點數折抵活動僅限正卡持卡人參加。</li>
                            <li>當點數不足最高折抵上限時，將自動改為可折抵的最高點數折抵消費(可撥打信用卡背面的聯絡電話)。</li>
                            <li>參加紅利點數折抵活動，該筆消費所回饋之紅利點數係依折抵後之金額計算。</li>
                            <li>安泰銀行保留隨時修改、變更、取消或終止本活動之權利。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>國泰世華銀行</h4></td>
                    <td>50 %</td>
                    <td></td>
                    <td>1000 點</td>
                    <td>1000 點 = 60 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p> 刷國泰世華信用卡，不限消費金額，可以紅利點數線上立即折抵消費金額。每 1,000 點紅利點數折抵 NT$60，最高可折抵該筆消費金額之50%</p>
                        <ol>
                            <li>凡持國泰世華銀行發行之信用卡，即可使用信用卡紅利點數折抵消費。</li>
                            <li>最高折抵上限為50%: 即最多只能折抵當筆消費金額的50%。</li>
                            <li>當卡友點數不足最高折抵上限時，將自動改為可折抵的最高點數折抵消費。</li>
                            <li>紅利折抵與分期付款恕不得同時使用 。</li>
                            <li>點數限制 1,000 點 : 最少需有國泰世華銀行信用卡點數 1,000 點 ( 含 )以上，才可使用銀行紅利折抵。</li>
                            <li>查詢信用卡紅利點數 : 請洽您的信用卡發卡銀行 ( 可撥打信用卡背面的聯絡電話 )。</li>
                            <li>國泰世華銀行保留隨時變更或終止本活動之權利，並保留同意持卡人參加本活動與否之權利。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>玉山銀行</h4></td>
                    <td>50 %</td>
                    <td>600 元</td>
                    <td>1000 點</td>
                    <td>1000 點 = 60 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷玉山銀行信用卡，單筆消費金額滿600元以上，可以紅利點數線上立即折抵消費金額。每 1,000 點紅利點數折抵 NT$60 ，最高可折抵該筆消費金額50%</p>
                        <ol>
                            <li>紅利點數折抵金額及點數均由系統換算，無法人工指定折抵某特定點數或金額。</li>
                            <li>欲使用紅利折抵之持卡人，請依 ASAP 線上購物訂購網頁說明操作，消費後需退貨者，須全額退貨，並依 ASAP 線上購物之規定，辦理退貨手續。</li>
                            <li>紅利折抵與分期付款恕不得同時使用(可撥打信用卡背面的聯絡電話)。</li>
                            <li>玉山銀行保留隨時變更或終止本活動之權利，並保留同意持卡人參加本活動與否之權利。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>日盛銀行</h4></td>
                    <td>50 %</td>
                    <td></td>
                    <td>1000 點</td>
                    <td>1000 點 = 60 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷日盛國際商業銀行信用卡，不限消費金額，可以紅利點數線上立即折抵消費金額。每1,000點紅利點數折抵NT$60，最高可折抵該筆消費金額之50%</p>
                        <ol>
                            <li>紅利點數折抵活動對象為持有日盛國際商業銀行信用卡紅利點數 1,000 點以上之正卡持卡人，附卡持卡人不得參加。</li>
                            <li>紅利點數折抵金額及點數均由系統換算，無法人工指定折抵某特定點數或金額。</li>
                            <li>紅利折抵與分期付款恕不得同時使用 (可撥打信用卡背面的聯絡電話)。</li>
                            <li>日盛國際商業銀行保留隨時變更或終止本活動之權利，並保留同意持卡人參加本活動與否之權利。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>台北富邦銀行</h4></td>
                    <td>30 %</td>
                    <td>300 元</td>
                    <td>1000 點</td>
                    <td>1000 點 = 60 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷台北富邦銀行信用卡，單筆消費金額滿300元以上，可以紅利點數線上立即折抵消費金額。每 1,000 點紅利點數折抵 NT$60 ，最高可折抵該筆消費金額之30%</p>
                        <ol>
                            <li>本活動限持有富邦信用卡集利亨通紅利點數 1,000 點以上之正卡持卡人參加 。</li>
                            <li>同一筆消費簽單恕無法同時使用『紅利點數折抵刷卡金』與『分期付款』。</li>
                            <li>紅利點數折抵刷卡金由系統自動在當次消費金額30% 之內換算折抵點數與金額，每1,000 點可抵刷卡金額 60 元，無法由持卡人指定。</li>
                            <li>福華卡、國賓卡、環保卡、宏碁卡、白金商務卡、 A money 卡及 a miles及財神 卡等不適用本活動(可撥打信用卡背面的聯絡電話)。</li>
                            <li>本活動請依ASAP線上購物網站之說明操作。</li>
                            <li>台北富邦銀行保留變更、修改或終止本活動之權利。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>永豐銀行</h4></td>
                    <td>30 %</td>
                    <td>1000 元</td>
                    <td>1000 點</td>
                    <td>1000 點 = 50 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷永豐銀行信用卡，單筆消費滿1000元，可以紅利點數線上立即折抵消費金額。 每 1000 點紅利點數折抵 NT$50 ，最高可折抵該筆消費金額之30%</p>
                        <ol>
                            <li>凡持永豐銀行信用卡單筆消費金額高於新台幣1,000元，即可使用信用卡紅利點數折抵消費。</li>
                            <li>紅利點數折抵活動對象為持有永豐信用卡紅利點數1,000點以上之正、附卡持卡人，惟附卡持卡人折抵之紅利點數以正卡持卡人所持有者計算。</li>
                            <li>刷卡消費若為紅利折抵之交易，以紅利折抵後之實際付款金額計算紅利點數。</li>
                            <li>紅利折抵與分期付款恕不得同時使用，永豐Prestige美國運通卡不適用本活動。</li>
                            <li>查詢信用卡紅利點數：請洽永豐銀行信用卡服務專線(02)2528-7776。</li>
                            <li>永豐銀行保留隨時變更或終止本活動之權利，並保留同意持卡人參加本活動與否之權利。</li>
                            <li>紅利點數折抵刷卡金額最低點數使用限制、最高折抵比例限制依各發卡機構規定，詳情請洽永豐銀行。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>華南銀行</h4></td>
                    <td>30 %</td>
                    <td>1000 元</td>
                    <td>1000 點</td>
                    <td>1000 點 = 50 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷華南銀行信用卡，單筆消費金額滿1,000元以上，可以紅利點數線上立即折抵消費金額。每 1,000 點紅利點數折抵 NT$50，最高可折抵該筆消費金額之30%</p>
                        <ol>
                            <li>紅利折抵活動適用於華南銀行正、附卡持卡人（企業商務卡、旅鑽個人商務御璽卡及Visa金融卡除外），單筆消費達1,000元（含）以上且至少持有華南銀行紅利點數1,000點（含）以上，惟附卡持卡人折抵之紅利點數以正卡持卡人所持有者計算。</li>
                            <li>最高折抵上限為 30%: 即最多只能折抵當筆消費金額的30%。</li>
                            <li>當卡友點數不足最高折抵上限時，將自動改為可折抵的最高點數折抵消費。</li>
                            <li>點數限制 1,000 點 : 最少需有華南銀行信用卡點數 1,000 點 ( 含 ) 以上，才可使用銀行紅利折抵。</li>
                            <li>查詢信用卡紅利點數 : 請洽您的信用卡發卡銀行 ( 可撥打信用卡背面的聯絡電話 )。</li>
                            <li>紅利點數折抵活動與分期付款活動無法同時併用。</li>
                            <li>華南銀行保留隨時修改、變更、取消或終止本活動之權利。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>兆豐國際商業銀行</h4></td>
                    <td>30 %</td>
                    <td></td>
                    <td>1000 點</td>
                    <td>1000 點 = 60 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷兆豐商銀信用卡，不限消費金額，可以紅利點數線上立即折抵消費金額，每 1000 點紅利點數折抵 NT$60 ，最高可折抵該筆消費金額之30%</p>
                        <ol>
                            <li>紅利折抵與分期付款消費不得同時使用。</li>
                            <li>兆豐商銀之採購卡、商務卡、附卡及VISA金融卡不適用紅利折抵活動。</li>
                            <li>兆豐商銀保留紅利折抵活動交易核准與否之權利。折抵金額及點數均由系統直接換算，無法人工指定折抵某特定點數或金額。</li>
                            <li>紅利點數折抵活動對象為持有兆豐商銀信用卡紅利點數 1000 點以上之正卡持卡人，附卡持卡人不得參加(可撥打信用卡背面的聯絡電話)。</li>
                            <li>兆豐銀行保留隨時修改、終止或變更本活動之權利。 </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>中國信託銀行</h4></td>
                    <td>20 %</td>
                    <td></td>
                    <td>1000 點</td>
                    <td>1000 點 = 60 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷中國信託銀行信用卡，不限消費金額，可以紅利點數線上立即折抵消費金額，每1000點紅利點數折抵NT$60，最高可折抵該筆消費金額之20%</p>
                        <ol>
                            <li>凡持中國信託商業銀行發行之信用卡，即可使用信用卡紅利點數折抵消費。</li>
                            <li>鈦金卡、COSTCO卡、家扶卡、廣達卡、澳航聯名卡及商務卡不適用本活動。 </li>
                            <li>最高折抵上限為 20%: 即最多只能折抵當筆消費金額的20%。 </li>
                            <li>當卡友點數不足最高折抵上限時，將自動改為可折抵的最高點數折抵消費。 </li>
                            <li>點數限制 1000 點 : 最少需有中國信託銀行信用卡點數 1000 點 ( 含 )以上，才可使用銀行紅利折抵。 </li>
                            <li>紅利點數折抵活動與分期付款活動無法同時使用。</li>
                            <li>查詢信用卡紅利點數 : 請洽您的信用卡發卡銀行 ( 可撥打信用卡背面的聯絡電話 )。 </li>
                            <li>中國信託商業銀行保留隨時修改、終止或變更本活動之權利。</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td><h4>上海商業儲蓄銀行</h4></td>
                    <td>20 %</td>
                    <td></td>
                    <td>1000 點</td>
                    <td>100 點 = 6 元</td>
                </tr>
                <tr>
                    <td colspan="5" class="descript">
                        <p>刷上海銀行信用卡，不限消費金額，可以紅利點數線上立即折抵消費金額。 每 100 點紅利點數折抵 NT$6，最高可折抵該筆消費金額之20%</p>
                        <ol>
                            <li>本活動對象為持有上海銀行信用卡紅利點數100點以上之正卡持卡人，附卡持卡人、公司商務卡及法人卡恕無法參加。</li>
                            <li>持卡人參加本活動時，若有下列情形者，喪失參與本活動之權利：
                                <ul>
                                    <li>持卡人自行終止信用卡帳戶者。</li>
                                    <li>持卡人現有紅利點數不足100 點。</li>
                                    <li>任何遲繳、欠繳、超額、違反「上海銀行信用卡會員約定條款」及其他信用貶落之情事者。</li>
                                </ul>
                            </li>
                            <li>欲參加本活動之持卡人，需於結帳前主動告知結帳人員或依線上購物網頁說明操作。</li>
                            <li>同一筆消費恕不得同時使用紅利折抵與分期付款(可撥打信用卡背面的聯絡電話)。</li>
                            <li>紅利點數折抵金額、點數及比例均由系統換算，無法人工指定折抵某特定點數或金額或折抵比例。</li>
                            <li>上海銀行與紅利折抵特約商店並無經銷、代理或保證人關係；如持卡人就購買之商品或服務有爭議時，均由商品出售之特約商店負責，概與上海銀行無涉。</li>
                            <li>上海銀行保留隨時修改、變更、取消或終止本活動之權利。 </li>
                        </ol>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="bonus-detail">
            <tbody>
                <tr>
                    <th>最高折抵上限(註1)</th>
                    <td>可折抵消費金額的最高比例，例如：銀行規定最高折抵上限為 50 % ，則消費 1,000元最高可用點數折抵為 500元。</td>
                </tr>
                <tr>
                    <th>消費金額限制(註2)</th>
                    <td>本次刷卡須超過此金額方可進行銀行紅利折抵。</td>
                </tr>
                <tr>
                    <th>點數限制(註3)</th>
                    <td>該張信用卡最少需要的紅利點數，假設銀行設定最低點數限制為1,000點，及該信用卡有超過1,000點，銀行紅利點數方可進行紅利折抵。</td>
                </tr>
                <tr>
                    <th>折抵比例(註4)</th>
                    <td>銀行信用卡紅利折抵現金的比例及折抵單位，如1,000點:60元 即每1,000點數可折抵60元。</td>
                </tr>
                <tr>
                    <th>規則說明</th>
                    <td>詳細辦法仍以各家銀行公告為準。</td>
                </tr>
            </tbody>
        </table>
    </article>
</div>

<?php //信用卡分期說明?>
<div id="fancybox-bank">
    <article class="credit-card" style="margin-top:0;">
        <h3 class="title-h3">信用卡分期優惠說明<a href="../module_component/_site_fancybox_all.php #fancybox-bonus" class="fancybox fancybox.ajax link">紅利折抵</a></h3>
        <table class="list">
            <tbody>
                <tr>
                    <td class="rate"><span class="text18">24</span>期<span class="text18">0</span>利率</td>
                    <td>單品 滿 $ 12000</td>
                    <td class="bank-name">
                        <ul class="note">
                            <li>中信</li>
                            <li>花旗</li>
                            <li>台北富邦</li>
                            <li>永豐</li>
                            <li>萬泰</li>
                            <li>玉山</li>
                            <li>新光</li>
                            <li>聯邦</li>
                            <li>遠東</li>
                            <li>兆豐</li>
                            <li>渣打</li>
                            <li>永旺</li>
                            <li>台中商銀</li>
                            <li>一銀</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="rate"><span class="text18">18</span>期<span class="text18">0</span>利率</td>
                    <td>單品 滿 $ 8000</td>
                    <td class="bank-name">
                        <ul class="note">
                            <li>中信</li>
                            <li>台新</li>
                            <li>花旗</li>
                            <li>台北富邦</li>
                            <li>國泰世華</li>
                            <li>永豐</li>
                            <li>萬泰</li>
                            <li>澳盛</li>
                            <li>玉山</li>
                            <li>新光</li>
                            <li>聯邦</li>
                            <li>大眾</li>
                            <li>上海</li>
                            <li>兆豐</li>
                            <li>永旺</li>
                            <li>台中商銀</li>
                            <li>土銀</li>
                            <li>一銀</li>
                            <li>彰銀</li>
                            <li>陽信</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="rate"><span class="text18">12</span>期<span class="text18">0</span>利率</td>
                    <td>單品 滿 $ 8000</td>
                    <td class="bank-name">
                        <ul class="note">
                            <li>中信</li>
                            <li>台新</li>
                            <li>花旗</li>
                            <li>台北富邦</li>
                            <li>國泰世華</li>
                            <li>永豐</li>
                            <li>萬泰</li>
                            <li>澳盛</li>
                            <li>玉山</li>
                            <li>新光</li>
                            <li>匯豐</li>
                            <li>聯邦</li>
                            <li>華南</li>
                            <li>遠東</li>
                            <li>大眾</li>
                            <li>上海</li>
                            <li>合庫</li>
                            <li>兆豐</li>
                            <li>台企</li>
                            <li>元大</li>
                            <li>日盛</li>
                            <li>永旺</li>
                            <li>台中商銀</li>
                            <li>華泰</li>
                            <li>三信商銀</li>
                            <li>土銀</li>
                            <li>一銀</li>
                            <li>彰銀</li>
                            <li>陽信</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="rate"><span class="text18">10</span>期<span class="text18">0</span>利率</td>
                    <td>單品 滿 $ 6000</td>
                    <td class="bank-name">
                        <ul class="note">
                            <li>台新</li>
                            <li>花旗</li>
                            <li>台北富邦</li>
                            <li>永豐</li>
                            <li>萬泰</li>
                            <li>澳盛</li>
                            <li>玉山</li>
                            <li>新光</li>
                            <li>遠東</li>
                            <li>大眾</li>
                            <li>上海</li>
                            <li>合庫</li>
                            <li>安泰</li>
                            <li>永旺</li>
                            <li>土銀</li>
                            <li>一銀</li>
                            <li>陽信</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="rate"><span class="text18">6</span>期<span class="text18">0</span>利率</td>
                    <td>單品 滿 $ 1000</td>
                    <td class="bank-name">
                        <ul class="note">
                            <li>中信</li>
                            <li>台新</li>
                            <li>花旗</li>
                            <li>台北富邦</li>
                            <li>國泰世華</li>
                            <li>永豐</li>
                            <li>萬泰</li>
                            <li>玉山</li>
                            <li>新光</li>
                            <li>匯豐</li>
                            <li>聯邦</li>
                            <li>華南</li>
                            <li>遠東</li>
                            <li>大眾</li>
                            <li>上海</li>
                            <li>合庫</li>
                            <li>兆豐</li>
                            <li>渣打</li>
                            <li>台企</li>
                            <li>元大</li>
                            <li>安泰</li>
                            <li>日盛</li>
                            <li>永旺</li>
                            <li>台中商銀</li>
                            <li>華泰</li>
                            <li>三信商銀</li>
                            <li>土銀</li>
                            <li>一銀</li>
                            <li>彰銀</li>
                            <li>陽信</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="rate"><span class="text18">3</span>期<span class="text18">0</span>利率</td>
                    <td></td>
                    <td class="bank-name">
                        <ul class="note">
                            <li>中信</li>
                            <li>台新</li>
                            <li>花旗</li>
                            <li>台北富邦</li>
                            <li>國泰世華</li>
                            <li>永豐</li>
                            <li>萬泰</li>
                            <li>澳盛</li>
                            <li>玉山</li>
                            <li>新光</li>
                            <li>匯豐</li>
                            <li>聯邦</li>
                            <li>華南</li>
                            <li>遠東</li>
                            <li>大眾</li>
                            <li>上海</li>
                            <li>合庫</li>
                            <li>兆豐</li>
                            <li>渣打</li>
                            <li>台企</li>
                            <li>元大</li>
                            <li>安泰</li>
                            <li>日盛</li>
                            <li>永旺</li>
                            <li>台中商銀</li>
                            <li>華泰</li>
                            <li>三信商銀</li>
                            <li>土銀</li>
                            <li>一銀</li>
                            <li>彰銀</li>
                            <li>陽信</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </article>
</div>
<?php //手機版filter?>
<div id="md-fancybox-filter" class="md-site-filter">
    <h1 class="title">篩選</h1>
    <div class="block">
        <p>
            <label for="amount">Price range:</label>
            <input type="text" id="amount" readonly style="border:0; color:#dd0000; font-weight:bold;">
        </p>
        <div id="slider-range"></div>
    </div>
    <div class="block">
        <select class="turnintodropdown">
            <option>請選擇分類:</option>
                <option>England</option>
                <option>Northern Ireland</option>
                <option>Scotland</option>
                <option>Wales</option>
        </select>
    </div>
    <div class="block">
        <select class="turnintodropdown">
            <option>請選擇顏色:</option>
                <option>England</option>
                <option>Northern Ireland</option>
                <option>Scotland</option>
                <option>Wales</option>
        </select>
    </div>
    <div class="block">
        <select class="turnintodropdown">
            <option>請選擇品牌:</option>
                <option>England</option>
                <option>Northern Ireland</option>
                <option>Scotland</option>
                <option>Wales</option>
        </select>
    </div>
    <div class="block">
        <a class="button submit large" itemprop="offerurl" href="javascript:void(0);">確定</a>
    </div>
</div>

<?php //處理費試算?>
<div id="fancybox-fee-calculate" class="fancybox-fee-calculate">
    <div class="block">
        <div class="line">
            <div class="key">網路價：</div>
            <div class="value">
                <span class="f-c-currency">NT$</span><span class="price">88,888,888</span>
            </div>
        </div>
        <div class="line">
            <div class="key">處理費：</div>
            <div class="value">
                <span class="f-c-currency">NT$</span><span class="price">99,999</span>
            </div>
        </div>
        <div class="line total"><span class="f-c-currency">NT$</span><span class="f-c-price">8,888,888</span></div>
<!--         <p>
            <span class="fa fa-plane"></span> 每件處理費(配送到府)約: <b><span class="f-c-currency">NT$</span><span class="f-c-price">8888888</span></b><br><span class="f-c-info">以上資訊僅供試算，實際費用依結帳時所產生的費用為準</span>
        </p> -->
        <span class="f-c-info">以上資訊僅供試算，實際費用依結帳時所產生的費用為準</span>
        <!-- <div class="actions">
            
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>
        </div> -->
    </div>
</div>

<?php //呼叫逼逼鳥?>
<div id="fancybox-call-best-price" class="fancybox-call-best-price">
    <h1 class="title">呼叫嗶嗶鳥省錢通知我</h1>
    <div class="block">
        <div class="line">
            <div class="key">比價商品：</div>
            <div class="value">
                【CITIZEN】星辰施華洛世奇晶鑽簡約石英錶- 中金 / EU6034-55E
            </div>
        </div>
        <div class="line">
            <div class="key">Email：</div>
            <div class="value">
                <input type="text" class="quantity-input" value="lee12458@gmail.com">
                <span class="f-c-info">(完成比價後便宜會通知您)</span>
            </div>
        </div>
        <div class="actions">
            <a class="button submit large" itemprop="offerurl" href="javascript:void(0);">確定</a>
        </div>
    </div>
</div>

<?php //比價逼逼鳥?>
<div id="fancybox-compare-best-price" class="fancybox-compare-best-price">
    <h1 class="title">比價嗶嗶鳥</h1>
    <div class="block">
        <h1>已跟台灣六家購物平台完成比價</h1>
        <div class="line-table">
            <div class="row">
                <div class="key"><span class="win-icon">勝</span></div>
                <div class="value">ASAP購物金價</div>
                <div class="value">980元</div>
            </div>
            <div class="row">
                <div class="key">&nbsp;</div>
                <div class="value">他網最低價</div>
                <div class="value">1080元</div>
            </div>
        </div>
        <p class="f-c-info">
            最新比價時間： <span class="f-c-price">20170418 12:30</span>
            <br><a href="#">若您發現有更低價者，敬請通知我們(未來)</a>
        </p>
        <div class="actions">
            <a class="button submit large" itemprop="offerurl" href="javascript:void(0);">確定</a>
        </div>
    </div>
</div>