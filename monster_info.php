<?php 
include("header.php"); 
$statu = $_POST['statu'];
$id = $_POST['id']; 
$pic = $_POST['pic'];
$name = $_POST['name'];
$price = $_POST['price'];
?>
    <body class="page">
        <div id="wrapper">
            <div id="container">
                <a id="pagetop"></a>
                <div id="main">
                    <div class="menu-section">
                        <div class="menu-toggle">
                          <div class="one"></div>
                          <div class="two"></div>
                          <div class="three"></div>
                        </div>
                        <nav id="navi">
                      		<ul role="navigation" class="hidden">
                            <li id="navi01"><a href="./index.php"><span class="mb">TOP</span></a></li>
                            <!--
                            <li id="navi02"><a href="http://mhxr.capcom.com.tw/intro01.html"><span class="mb">遊戲介紹</span></a></li>
                            <li id="navi03"><a href="http://mhxr.capcom.com.tw/sys01.html"><span class="mb">系統</span></a></li>
                            <li id="navi04"><a href="http://mhxr.capcom.com.tw/pv.html"><span class="mb">影片</span></a></li>
                            -->
                            <li id="navi02" class="active"><a href="./raiders.php"><span class="mb">遊戲攻略</span></a></li>
                          </ul>
                      	</nav>
                    </div>
                    <!--/nav -->
                    <h1>
                        <a href="./index.php">
                            <img src="./images/logo.png" alt="">
                            <span class="hide">
                            MONSTER HUNTER
                            </span>
                        </a>
                    </h1>
                    <div id="mv"></div>
                    <div id="mv_s">
                        <img src="./images/mainvisual_page.jpg" alt="">
                    </div>
                </div>
                <!--/MAIN -->

                <!--首頁內容 -->
                <div id="content" class="str">
                    <h2>遊戲攻略</h2>
                    <div id="sub-menu">
                        <ul>
                        <li><a href="http://johnson97312.ddns.net/MH/weapan.php">武器</a></li>
                        <li><a href="http://johnson97312.ddns.net/MH/armor.php">防具</a></li>
                        <li><a href="http://johnson97312.ddns.net/MH/decoration.php">裝飾品</a></li>
                        <li><a href="http://johnson97312.ddns.net/MH/airou.php">艾路</a></li>
                        <li><a href="http://johnson97312.ddns.net/MH/monster.php">怪物</a></li>
                        <li><a href="http://johnson97312.ddns.net/MH/item.php">道具</a></li>
                        </ul>
                    </div>

                    <h3>武器</h3>
                    <div class="section">
                        <div class="mdl-table" id="island1-1">
                            <div class="mdl-table__list mdl-table__thead">
                               <div class="mdl-table__list__th--island"></div>
                            </div>

                            <?php 
                            switch ($statu) {
                            	case '0':
                            		$db = 'weapan_big_sword_info';
                            		break;
                            	case '1':
                            		$db = 'weapan_samurai_sword_info';
                            		break;
                            	case '2':
                            		$db = 'weapan_samurai_sword_info';
                            		break;
                            	case '3':
                            		$db = 'weapan_samurai_sword_info';
                            		break;
                            	case '4':
                            		$db = 'weapan_samurai_sword_info';
                            		break;
                            	case '5':
                            		$db = 'weapan_samurai_sword_info';
                            		break;

                            	default:
                            		# code...
                            		break;
                            }
                            $sql = "SELECT * FROM $db WHERE name = '$name'";
                            $result = mysql_query($sql);
                            while($row = mysql_fetch_row($result)){
                            ?>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">武器圖片</div>
                                <div class="mdl-table__list__th pc">武器名稱</div>
                                <div class="mdl-table__list__th">價格</div>
                                <div class="mdl-table__list__th">素材1</div>
                                <div class="mdl-table__list__th">素材2</div>
                                <div class="mdl-table__list__th">素材3</div>
                                <div class="mdl-table__list__th">素材4</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td--img">
                                    <div class="inner">
                                      <?php echo "<img src='$pic'>" ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td pc">
                                  <div class="inner">
                                    <?php echo $name ?>
                                  </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $price ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[2] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                     <?php echo $row[3] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[4] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[5] ?>
                                    </div>
                                </div>
                            </div>
                            <?php }
                            ?>
                        </div>
                        <!-- /table -->

                    </div>
                    <!-- /section -->
                    <div class="clearfix"></div>
                </div>
                <!--[[[[/content]]]-->

                <!-- back to top btn -->
                <div id="back-top" style="display: none;">
                    <a href="##pagetop">
                        <img src="./images/btn_top.png" alt="top">
                    </a>
                </div>

                <div id="download-buttons">
                    <ul>
                        <li><a href="https://www.capcom.com.tw/platform/launcher/2685"><img src="./images/btn_dl01.jpg" alt="APP STORE"></a></li>
                        <li><a href="https://www.capcom.com.tw/platform/launcher/2686"><img src="./images/btn_dl02.jpg" alt="GOOGLE Play"></a></li>
                        <li><a href="https://www.capcom.com.tw/platform/launcher/2687"><img src="./images/btn_dl03.jpg" alt="官網下載"></a></li>
                    </ul>
                    <div id="download-catch"></div>
                </div>
                <!--/DL buttons -->

                <div id="footer">
                    <ul id="linkmenu">
                        <li>
                            <a href="http://mhxr.capcom.com.tw/faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="https://www.capcom.com.tw/member/member_info/mhxr?mobile_flag=1">使用者合約</a>
                        </li>
                        <li>
                            <a href="https://www.capcom.com.tw/member/privacy/mhxr?mobile_flag=1">隱私權條款</a>
                        </li>
                    </ul>
                    <div id="bottomBar">
                        <div id="cr-text">© CAPCOM CO., LTD. ALL RIGHTS RESERVED.</div>
                        <div id="game-rating"><img src="./images/icon_gr.gif"></div>
                        <div class="cleaner"></div>
                    </div>
                    <!--/bottomBar -->
                </div>
                <!--/footer -->
            </div>
            <!--/container -->
        </div>
        <!--[[[[/wrapper]]] -->
    </body>
</html>