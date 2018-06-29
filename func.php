<?php 
function print_option($statu){
    echo "<div id='content' class='str'>
                    <h2>遊戲攻略</h2>
                    <div id='sub-menu'>
                        <ul>
                        <li><a href='./weapan.php'>武器</a></li>
                        <li><a href='./armor.php'>防具</a></li>
                        <li><a href='./decoration.php'>裝飾品</a></li>
                        <li><a href='./airou.php'>艾路</a></li>
                        <li><a href='./monster.php'>怪物</a></li>
                        <li><a href='./item.php'>道具</a></li>
                        </ul>
                    </div>";
    switch ($statu) {
        case '0':
            $str = "<h3>武器</h3>
                    <form name='form' id='form'>
                        <select name='jumpMenu' id='jumpMenu' onchange='MM_jumpMenu(&#39;parent&#39;,this,1)'>
                            <option label='= 選擇武器 ='></option>
                            <option value='#island1-1'>大劍</option>
                            <option value='#island1-2'>太刀</option>
                            <option value='#island1-3'>片手劍</option>
                            <option value='#island1-4'>雙刀</option>
                            <option value='#island1-5'>錘</option>
                            <option value='#island1-6'>狩獵笛</option>
                            <option value='#island1-7'>長槍</option>
                            <option value='#island1-8'>銃槍</option>
                            <option value='#island1-9'>輕弩</option>
                            <option value='#island1-10'>重弩</option>
                            <option value='#island1-11'>弓</option>
                      </select>
                    </form>";
            break;
        case '1':
            $str = "<h3>防具</h3>
                    <form name='form' id='form'>
                        <select name='jumpMenu' id='jumpMenu' onchange='MM_jumpMenu(&#39;parent&#39;,this,1)'>
                            <option label='= 選擇防具 ='></option>
                            <option value='#island1-1'>頭部</option>
                            <option value='#island1-2'>胸部</option>
                            <option value='#island1-3'>手部</option>
                            <option value='#island1-4'>腰部</option>
                            <option value='#island1-5'>腳部</option>
                        </select>
                    </form>";
            break;
        case '2':
            $str = "<h3>裝飾品</h3>";
            break;
        case '3':
            $str = "<h3>艾路</h3>
                   <form name='form' id='form'>
                        <select name='jumpMenu' id='jumpMenu' onchange='MM_jumpMenu(&#39;parent&#39;,this,1)'>
                            <option label='= 選擇艾路 ='></option>
                            <option value='#island1-1'>隨行貓</option>
                            <option value='#island1-2'>廚師貓</option>
                        </select>
                    </form>";
            break;
        case '4':
            $str = "<h3>怪物</h3>
                    <form name='form' id='form'>
                        <select name='jumpMenu' id='jumpMenu' onchange='MM_jumpMenu(&#39;parent&#39;,this,1)'>
                            <option label='= 選擇種族 ='></option>
                            <option value='#island1-1'>鳥龍種</option>
                            <option value='#island1-2'>魚龍種</option>
                            <option value='#island1-3'>甲殼種</option>
                            <option value='#island1-4'>牙獸種</option>
                            <option value='#island1-5'>飛龍種</option>
                            <option value='#island1-6'>古龍種</option>
                        </select>
                    </form>";
            break;
        case '5':
            $str = "<h3>道具</h3>
                    <div class='section'>
                        <div class='mdl-table' id='island1-1'>
                            <div class='mdl-table__list mdl-table__thead'>
                               <div class='mdl-table__list__th--island'>道具</div>
                            </div>";
            break;
        default:
            $str = "";
            break;
    }

    echo $str;

}

function header_img($page){
    switch ($page) {
        case '0':
            $url = "./images/weapan_header_img.jpg";
            break;
        case '1':
            $url = "./images/armor_header_img.jpg";
            break;
        case '2':
            $url = "./images/decoration_header_img.jpg";
            break;
        case '3':
            $url = "./images/airou_header_img.jpg";
            break;
        case '4':
            $url = "./images/monster_header_img.jpg";
            break;
        case '5':
            $url = "./images/item_header_img.jpg";
            break;
        
        default:
            # code...
            break;
    }
            echo "<head>
                        <style type='text/css'>
                            body.page #mv,body.text #mv{ width:100%; max-width:1200px; margin:0 auto;background:url(".$url.") center top no-repeat; height:185px;}
                        </style>
                    </head>";
}

function weapan_db($weapan,$link){
    switch ($weapan) {
        case '0':
            $db = 'weapan_big_sword';
            $value = 0;

            echo "<div class='section'>
                        <div class='mdl-table' id='island1-1'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>大劍</div>
                            </div>";
            break;
        case '1':
            $db = 'weapan_samurai_sword';
            $value = 1;
            echo "<div class='section'>
                    <div class='mdl-table' id='island1-2'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>太刀</div>
                            </div>";
            break;
        case '2':
            $db = 'weapan_hand_sword';
            $value = 2;
            echo "<div class='mdl-table' id='island1-3'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>片手劍</div>
                            </div>";
            break;
        case '3':
            $db = 'weapan_double_knives';
            $value = 3;
            echo "<div class='mdl-table' id='island1-4'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>雙刀</div>
                            </div>";
            break;
        case '4':
            $db = 'weapan_sledgehammer';
            $value = 4;
            echo "<div class='mdl-table' id='island1-5'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>錘</div>
                            </div>";
            break;
        case '5':
            $db = 'weapan_hunting_flute';
            $value = 5;
            echo "<div class='mdl-table' id='island1-6'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>狩獵笛</div>
                            </div>";
            break;
        case '6':
            $db = 'weapan_rifle';
            $value = 6;
            echo "<div class='mdl-table' id='island1-7'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>長槍</div>
                            </div>";
            break;
        case '7':
            $db = 'weapan_cannon';
            $value = 7;
            echo "<div class='mdl-table' id='island1-8'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>銃槍</div>
                            </div>";
            break;    
        case '8':
            $db = 'weapan_light_crossbow';
            $value = 8;
            echo "<div class='mdl-table' id='island1-9'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>輕弩</div>
                            </div>";
            break;    
        case '9':
            $db = 'weapan_heavy_crossbow';
            $value = 9;
            echo "<div class='mdl-table' id='island1-10'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>重弩</div>
                            </div>";
            break;    
        case '10':
            $db = 'weapan_bow';
            $value = 10;
            echo "<div class='mdl-table' id='island1-11'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>弓</div>
                            </div>";
            break;       
        default:
            # code...
            break;
    }
    $sql = "SELECT * FROM ".$db."";
    $result = mysqli_query($link,$sql);
    while($row = mysqli_fetch_row($result)){
        if($weapan == 5 ||$weapan == 7 ||$weapan == 8 ||$weapan == 9 ||$weapan == 10 ){
            switch ($weapan) {
                case '5':
                    echo "<div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th'>武器圖片</div>
                                <div class='mdl-table__list__th pc'>武器名稱</div>
                                <div class='mdl-table__list__th'>價格</div>
                                <div class='mdl-table__list__th'>攻擊力</div>
                                <div class='mdl-table__list__th'>特殊效果</div>
                                <div class='mdl-table__list__th'>音色</div>
                                <div class='mdl-table__list__th'>斬味/斬味+1</div>
                                <div class='mdl-table__list__th'>會心</div>
                                <div class='mdl-table__list__th'>裝飾孔</div>
                                <div class='mdl-table__list__th'>旋律效果</div>
                                <div class='mdl-table__list__th'>製作級別</div>
                                <div class='mdl-table__list__th'>材料</div>
                            </div>
                            <div class='mdl-table__list mdl-table__tbody'>
                                <div class='mdl-table__list__td--img'>
                                    <div class='inner'>
                                       <img src=".$row[1].">
                                    </div>
                                </div>
                                
                                <div class='mdl-table__list__td pc'>
                                  <div class='inner'>
                                     ".$row[2]." 
                                  </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                       ".$row[3]." 
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                       ".$row[4]." 
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[5]." 
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                       ".$row[6]." 
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                       ".$row[7]." 
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                       ".$row[8]." 
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                       ".$row[9]." 
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                       ".$row[10]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                       ".$row[11]."
                                    </div>
                                </div>";
                    break;
                case '7':
                    echo "<div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th'>武器圖片</div>
                                <div class='mdl-table__list__th pc'>武器名稱</div>
                                <div class='mdl-table__list__th'>價格</div>
                                <div class='mdl-table__list__th'>攻擊力</div>
                                <div class='mdl-table__list__th'>砲擊</div>
                                <div class='mdl-table__list__th'>特殊效果</div>
                                <div class='mdl-table__list__th'>斬味/斬味+1</div>
                                <div class='mdl-table__list__th'>會心</div>
                                <div class='mdl-table__list__th'>裝飾孔</div>
                                <div class='mdl-table__list__th'>製作級別</div>
                                <div class='mdl-table__list__th'>材料</div>
                            </div>
                            <div class='mdl-table__list mdl-table__tbody'>
                                <div class='mdl-table__list__td--img'>
                                    <div class='inner'>
                                      <img src='$row[1]'>
                                    </div>
                                </div>
                                <div class='mdl-table__list__td pc'>
                                  <div class='inner'>
                                    ".$row[2]."
                                  </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[3]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[4]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                     ".$row[5]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[6]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[7]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[8]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[9]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[10]."
                                    </div>
                                </div>";
                    break;
                case '8':
                    echo "<div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th'>武器圖片</div>
                                <div class='mdl-table__list__th pc'>武器名稱</div>
                                <div class='mdl-table__list__th'>價格</div>
                                <div class='mdl-table__list__th'>攻擊力</div>
                                <div class='mdl-table__list__th'>裝填反動</div>
                                <div class='mdl-table__list__th'>速射</div>
                                <div class='mdl-table__list__th'>會心</div>
                                <div class='mdl-table__list__th'>裝飾孔</div>
                                <div class='mdl-table__list__th'>一般</div>
                                <div class='mdl-table__list__th'>狀態</div>
                                <div class='mdl-table__list__th'>屬性</div>
                                <div class='mdl-table__list__th'>特殊</div>
                                <div class='mdl-table__list__th'>製作級別</div>
                                <div class='mdl-table__list__th'>材料</div>
                            </div>
                            <div class='mdl-table__list mdl-table__tbody'>
                                <div class='mdl-table__list__td--img'>
                                    <div class='inner'>
                                      <img src='$row[1]'>
                                    </div>
                                </div>
                                <div class='mdl-table__list__td pc'>
                                  <div class='inner'>
                                    ".$row[2]."
                                  </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[3]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[4]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                     ".$row[5]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[6]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[7]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[8]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[9]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[10]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[11]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[12]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[13]."
                                    </div>
                                </div>";
                    break;
                case '9':
                    echo "<div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th'>武器圖片</div>
                                <div class='mdl-table__list__th pc'>武器名稱</div>
                                <div class='mdl-table__list__th'>價格</div>
                                <div class='mdl-table__list__th'>攻擊力</div>
                                <div class='mdl-table__list__th'>裝填反動</div>
                                <div class='mdl-table__list__th'>會心</div>
                                <div class='mdl-table__list__th'>裝飾孔</div>
                                <div class='mdl-table__list__th'>一般</div>
                                <div class='mdl-table__list__th'>狀態</div>
                                <div class='mdl-table__list__th'>屬性</div>
                                <div class='mdl-table__list__th'>特殊</div>
                                <div class='mdl-table__list__th'>製作級別</div>
                                <div class='mdl-table__list__th'>材料</div>
                            </div>
                            <div class='mdl-table__list mdl-table__tbody'>
                                <div class='mdl-table__list__td--img'>
                                    <div class='inner'>
                                      <img src='$row[1]'>
                                    </div>
                                </div>
                                <div class='mdl-table__list__td pc'>
                                  <div class='inner'>
                                    ".$row[2]."
                                  </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[3]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[4]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                     ".$row[5]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[6]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[7]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[8]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[9]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[10]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[11]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[12]."
                                    </div>
                                </div>";
                    break;
                case '10':
                    echo "<div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th'>武器圖片</div>
                                <div class='mdl-table__list__th pc'>武器名稱</div>
                                <div class='mdl-table__list__th'>價格</div>
                                <div class='mdl-table__list__th'>攻擊力</div>
                                <div class='mdl-table__list__th'>特殊效果</div>
                                <div class='mdl-table__list__th'>會心</div>
                                <div class='mdl-table__list__th'>裝飾孔</div>
                                <div class='mdl-table__list__th'>LV1</div>
                                <div class='mdl-table__list__th'>LV2</div>
                                <div class='mdl-table__list__th'>LV3</div>
                                <div class='mdl-table__list__th'>LV4</div>
                                <div class='mdl-table__list__th'>瓶</div>
                                <div class='mdl-table__list__th'>製作級別</div>
                                <div class='mdl-table__list__th'>材料</div>
                            </div>
                            <div class='mdl-table__list mdl-table__tbody'>
                                <div class='mdl-table__list__td--img'>
                                    <div class='inner'>
                                      <img src='$row[1]'>
                                    </div>
                                </div>
                                <div class='mdl-table__list__td pc'>
                                  <div class='inner'>
                                    ".$row[2]."
                                  </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[3]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[4]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                     ".$row[5]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[6]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[7]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[8]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[9]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[10]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[11]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[12]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[13]."
                                    </div>
                                </div>";
                    break;
                
                default:
                    # code...
                    break;
            }
        }else{
        echo   "<div class='mdl-table__list mdl-table__thead'>
                    <div class='mdl-table__list__th'>武器圖片</div>
                    <div class='mdl-table__list__th pc'>武器名稱</div>
                    <div class='mdl-table__list__th'>價格</div>
                    <div class='mdl-table__list__th'>攻擊力</div>
                    <div class='mdl-table__list__th'>特殊效果</div>
                    <div class='mdl-table__list__th'>斬味/斬味+1</div>
                    <div class='mdl-table__list__th'>會心</div>
                    <div class='mdl-table__list__th'>裝飾孔</div>
                    <div class='mdl-table__list__th'>製作級別</div>
                    <div class='mdl-table__list__th'>材料</div>
                </div>";
        echo   "<div class='mdl-table__list mdl-table__tbody'>
                    <div class='mdl-table__list__td--img'>
                        <div class='inner'>";
                            echo '<img src='.$row[1].'>';
                echo   "</div>
                    </div>
                <div class='mdl-table__list__td pc'>
                    <div class='inner'>";
                        echo $row[2];
            echo   "</div>
                </div>
                <div class='mdl-table__list__td'>
                    <div class='inner'>";
                        echo $row[3];
            echo   "</div>
                </div>
                <div class='mdl-table__list__td'>
                    <div class='inner'>";
                        echo $row[4];
            echo   "</div>
                </div>
                <div class='mdl-table__list__td'>
                    <div class='inner'>";
                        echo $row[5];
            echo   "</div>
                </div>
                <div class='mdl-table__list__td'>
                    <div class='inner'>";
                        echo $row[6];
            echo   "</div>
                </div>
                <div class='mdl-table__list__td'>
                    <div class='inner'>";
                        echo $row[7];
            echo   "</div>
                </div>
                <div class='mdl-table__list__td'>
                    <div class='inner'>";
                        echo $row[8];
            echo   "</div>
                    </div>
                    <div class='mdl-table__list__td'>
                        <div class='inner'>";
                        echo $row[9];
            echo   "</div>
                </div>";
            }
        echo   "<div class='mdl-table__list__td'>
                    <div class='inner'>
                        <form name=".'form'." method=".'post'." action=".'weapan_info.php'.">
                            <input type=".'hidden'."  name=".'statu'." value=".$value."> 
                            <input type=".'hidden'."  name=".'id'." value=".$row[0]."> 
                            <input type=".'hidden'."  name=".'pic'." value=".$row[1]."> 
                            <input type=".'hidden'."  name=".'name'." value=".$row[2].">
                            <input type=".'hidden'."  name=".'price'." value=".$row[3].">
                            <input type=".'submit'."  name=".'button'." value='材料' >
                        </form>
                    </div>
                </div>
            </div>";
        
    }
                            
}

function armor_db($armor,$link){
    switch ($armor) {
        case '0':
            $db = 'armor_head';
            $value = 0;

            echo "<div class='section'>
                        <div class='mdl-table' id='island1-1'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>頭部</div>
                            </div>";
            break;
        case '1':
            $db = 'armor_body';
            $value = 1;
            echo "<div class='mdl-table' id='island1-2'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>身體</div>
                            </div>";
            break;
        case '2':
            $db = 'armor_hand';
            $value = 2;
            echo "<div class='mdl-table' id='island1-3'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>手部</div>
                            </div>";
            break;
        case '3':
            $db = 'armor_leg';
            $value = 3;
            echo "<div class='mdl-table' id='island1-4'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>腰部</div>
                            </div>";
            break;
        case '4':
            $db = 'armor_foot';
            $value = 4;
            echo "<div class='mdl-table' id='island1-5'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>腳部</div>
                            </div>";
            break;
        
    }
    $sql = "SELECT * FROM ".$db."";
    $result = mysqli_query($link,$sql);
    while($row = mysqli_fetch_row($result)){
        echo   "<div class='mdl-table__list mdl-table__thead'>
                    <div class='mdl-table__list__th'>防具圖片</div>
                    <div class='mdl-table__list__th pc'>防具名稱</div>
                    <div class='mdl-table__list__th'>價格</div>
                    <div class='mdl-table__list__th'>防禦力</div>
                    <div class='mdl-table__list__th'>抗火性</div>
                    <div class='mdl-table__list__th'>抗水性</div>
                    <div class='mdl-table__list__th'>抗雷性</div>
                    <div class='mdl-table__list__th'>抗冰性</div>
                    <div class='mdl-table__list__th'>抗龍性</div>
                    <div class='mdl-table__list__th'>特殊技能</div>
                    <div class='mdl-table__list__th'>鑲嵌槽</div>
                    <div class='mdl-table__list__th'>材料</div>
                </div>";
        echo   "<div class='mdl-table__list mdl-table__tbody'>
                    <div class='mdl-table__list__td--img'>
                        <div class='inner'>";
                            echo '<img src='.$row[1].'>';
                echo   "</div>
                    </div>
                <div class='mdl-table__list__td pc'>
                    <div class='inner'>";
                        echo $row[2];
            echo   "</div>
                </div>
                <div class='mdl-table__list__td'>
                    <div class='inner'>";
                        echo $row[3];
            echo   "</div>
                </div>
                <div class='mdl-table__list__td'>
                    <div class='inner'>";
                        echo $row[4];
            echo   "</div>
                </div>
                <div class='mdl-table__list__td'>
                    <div class='inner'>";
                        echo $row[5];
            echo   "</div>
                </div>
                <div class='mdl-table__list__td'>
                    <div class='inner'>";
                        echo $row[6];
            echo   "</div>
                </div>
                <div class='mdl-table__list__td'>
                    <div class='inner'>";
                        echo $row[7];
            echo   "</div>
                </div>
                <div class='mdl-table__list__td'>
                    <div class='inner'>";
                        echo $row[8];
            echo   "</div>
                </div>
                <div class='mdl-table__list__td'>
                    <div class='inner'>";
                        echo $row[9];
            echo   "</div>
                </div>
                <div class='mdl-table__list__td'>
                    <div class='inner'>";
                        echo $row[10];
            echo   "</div>
                </div>
                <div class='mdl-table__list__td'>
                    <div class='inner'>";
                        echo $row[11];
            echo   "</div>
                </div>";
        echo   "<div class='mdl-table__list__td'>
                    <div class='inner'>
                        <form name=".'form'." method=".'post'." action=".'armor_info.php'.">
                            <input type=".'hidden'."  name=".'statu'." value=".$value."> 
                            <input type=".'hidden'."  name=".'id'." value=".$row[0]."> 
                            <input type=".'hidden'."  name=".'pic'." value=".$row[1]."> 
                            <input type=".'hidden'."  name=".'name'." value=".$row[2].">
                            <input type=".'hidden'."  name=".'price'." value=".$row[3].">
                            <input type=".'submit'."  name=".'button'." value='材料' >
                        </form>
                    </div>
                </div>
            </div>";
    }
}

function monster_db($monster,$link){
    $db = 'monster_boss';
    switch ($monster) {
        case '0':
            $value = '鳥龍種';
            echo "<div class='section'>
                        <div class='mdl-table' id='island1-1'>
                            <div class='mdl-table__list mdl-table__thead'>
                               <div class='mdl-table__list__th--island'>鳥龍種</div>
                            </div>";
            break;
        case '1':
            $value = '魚龍種';
            echo "<div class='section'>
                        <div class='mdl-table' id='island1-2'>
                            <div class='mdl-table__list mdl-table__thead'>
                               <div class='mdl-table__list__th--island'>魚龍種</div>
                            </div>";
            break;
        case '2':
            $value = '甲殼種';
            echo "<div class='section'>
                        <div class='mdl-table' id='island1-3'>
                            <div class='mdl-table__list mdl-table__thead'>
                               <div class='mdl-table__list__th--island'>甲殼種</div>
                            </div>";
            break;
        case '3':
            $value = '牙獸種';
            echo "<div class='section'>
                        <div class='mdl-table' id='island1-4'>
                            <div class='mdl-table__list mdl-table__thead'>
                               <div class='mdl-table__list__th--island'>牙獸種</div>
                            </div>";
            break;
        case '4':
            $value = '飛龍種';
            echo "<div class='section'>
                        <div class='mdl-table' id='island1-5'>
                            <div class='mdl-table__list mdl-table__thead'>
                               <div class='mdl-table__list__th--island'>飛龍種</div>
                            </div>";
            break;
        case '5':
            $value = '古龍種';
            echo "<div class='section'>
                        <div class='mdl-table' id='island1-6'>
                            <div class='mdl-table__list mdl-table__thead'>
                               <div class='mdl-table__list__th--island'>古龍種</div>
                            </div>";
            break;
        default:
            # code...
            break;
    }
    $sql = " SELECT * FROM ".$db." WHERE class ='".$value."'";
    $result = mysqli_query($link,$sql);
    while($row = mysqli_fetch_row($result)){
        echo "<div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th'>怪物名稱</div>
                                <div class='mdl-table__list__th'>火</div>
                                <div class='mdl-table__list__th'>水</div>
                                <div class='mdl-table__list__th'>雷</div>
                                <div class='mdl-table__list__th'>冰</div>
                                <div class='mdl-table__list__th'>龍</div>
                                <div class='mdl-table__list__th'>毒</div>
                                <div class='mdl-table__list__th'>麻</div>
                                <div class='mdl-table__list__th'>睡</div>
                                <div class='mdl-table__list__th'>落穴</div>
                                <div class='mdl-table__list__th'>麻穴</div>
                                <div class='mdl-table__list__th'>閃光彈</div>
                                <div class='mdl-table__list__th'>音爆彈</div>
                                <div class='mdl-table__list__th'>村長任務HP</div>
                                <div class='mdl-table__list__th'>公會下位HP</div>
                                <div class='mdl-table__list__th'>公會上位HP</div>
                            </div>
                            <div class='mdl-table__list mdl-table__tbody'>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[2]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                  <div class='inner'>
                                    ".$row[3]."
                                  </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[4]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[5]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                     ".$row[6]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                       ".$row[7]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[8]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[9]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[10]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[11]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[12]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[13]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[14]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[15]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[16]."
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[17]."
                                    </div>
                                </div>
                            </div>";
    }
}
function decoration_db($decoration,$link){
    switch ($decoration) {
        case '0':
            $db = 'decoration_';
            $value = 0;

            echo "<div class='section'>
                        <div class='mdl-table' id='island1-1'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>裝飾品</div>
                            </div>";
            break;
              
        default:
            # code...
            break;
    }
    $sql = "SELECT * FROM ".$db."";
    $result = mysqli_query($link,$sql);
    while($row = mysqli_fetch_row($result)){
        echo "<div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th pc'>裝飾品名稱</div>
                                <div class='mdl-table__list__th'>效果</div>
                                <div class='mdl-table__list__th'>所需孔數</div>
                                <div class='mdl-table__list__th'>製作HR</div>
                                <div class='mdl-table__list__th'>材料</div>
                            </div>
                            <div class='mdl-table__list mdl-table__tbody'>
                                <div class='mdl-table__list__td pc'>
                                    <div class='inner'>
                                       ".$row[1]."
                                    </div>
                                </div>
                                
                                <div class='mdl-table__list__td'>
                                  <div class='inner'>
                                     ".$row[2]." 
                                  </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                       ".$row[3]." 
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                       ".$row[4]." 
                                    </div>
                                </div>";
        echo   "<div class='mdl-table__list__td'>
                    <div class='inner'>
                        <form name=".'form'." method=".'post'." action=".'decoration_info.php'.">
                            <input type=".'hidden'."  name=".'statu'." value=".$value."> 
                            <input type=".'hidden'."  name=".'id'." value=".$row[0]."> 
                            <input type=".'hidden'."  name=".'name'." value=".$row[1]."> 
                            <input type=".'submit'."  name=".'button'." value='材料' >
                        </form>
                    </div>
                </div>
            </div>";                                
    }
}
function airou_db($airou,$link){
    switch ($airou) {
        case '0':
            $db = 'airou_followers';
            $value = '隨行貓';

            echo "<div class='section'>
                        <div class='mdl-table' id='island1-1'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>隨行貓</div>
                            </div>";
            break;
        case '1':
            $db = 'airou_chef';
            $value = '廚師貓';

            echo "<div class='section'>
                        <div class='mdl-table' id='island1-2'>
                            <div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th--island'>廚師貓</div>
                            </div>";
            break;  
              
        default:
            # code...
            break;
    }
    $sql = "SELECT * FROM ".$db."";
    $result = mysqli_query($link,$sql);
    while($row = mysqli_fetch_row($result)){
        if($airou == 0){
        
                    echo "<div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th pc'>技能名稱</div>
                                <div class='mdl-table__list__th'>所需點數</div>
                                <div class='mdl-table__list__th'>開放技能條件</div>
                            </div>
                            <div class='mdl-table__list mdl-table__tbody'>
                                <div class='mdl-table__list__td pc'>
                                    <div class='inner'>
                                       ".$row[1]."
                                    </div>
                                </div>
                                
                                <div class='mdl-table__list__td'>
                                  <div class='inner'>
                                     ".$row[2]." 
                                  </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                  <div class='inner'>
                                     ".$row[3]." 
                                  </div>
                                </div>
                            </div>";
                
        }
		if($airou == 1){
            
                    echo "<div class='mdl-table__list mdl-table__thead'>
                                <div class='mdl-table__list__th pc'>食材</div>
                                <div class='mdl-table__list__th'>組合</div>
                                <div class='mdl-table__list__th'>1隻0元</div>
                                <div class='mdl-table__list__th'>2隻50元</div>
                                <div class='mdl-table__list__th'>3隻100元</div>
                                <div class='mdl-table__list__th'>4隻200元</div>
                                <div class='mdl-table__list__th'>5隻400元</div>
                            </div>
                            <div class='mdl-table__list mdl-table__tbody'>
                                <div class='mdl-table__list__td pc'>
                                    <div class='inner'>
                                       ".$row[1]."
                                    </div>
                                </div>
                                
                                <div class='mdl-table__list__td'>
                                  <div class='inner'>
                                     ".$row[2]." 
                                  </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                       ".$row[3]." 
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                       ".$row[4]." 
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                      ".$row[5]." 
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                    <div class='inner'>
                                       ".$row[6]." 
                                    </div>
                                </div>
                                <div class='mdl-table__list__td'>
                                  <div class='inner'>
                                     ".$row[7]." 
                                  </div>
                                </div>
                            </div>";
                    
        }
    } 

}
    
function item_db($link){

    $sql = "SELECT * FROM item_";
    $result = mysqli_query($link,$sql);
    while($row = mysqli_fetch_row($result)){
        echo "<div class='mdl-table__list mdl-table__thead'>
                    <div class='mdl-table__list__th'>圖片</div>
                    <div class='mdl-table__list__th pc'>名稱</div>
                    <div class='mdl-table__list__th'>效果</div>
              </div>
                    <div class='mdl-table__list mdl-table__tbody'>
                        <div class='mdl-table__list__td--img'>
                            <div class='inner'>
                                <img src='".$row[1]."'>
                            </div>
                        </div>
                        <div class='mdl-table__list__td pc'>
                            <div class='inner'>
                                ".$row[2]."
                            </div>
                        </div>
                        <div class='mdl-table__list__td'>
                            <div class='inner'>
                                ".$row[3]."
                            </div>
                        </div>
                   </div>";
    }
                            
}
?>