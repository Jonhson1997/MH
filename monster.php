<?php 
include("header.php"); 
include("info_header.php");
?>
                    <?php header_img(4) ?>
                    <?php print_option(4)?>
                    <?php monster_db(0,$link)?>
                    <?php monster_db(1,$link)?>
                    <?php monster_db(2,$link)?>
                    <?php monster_db(3,$link)?>
                    <?php monster_db(4,$link)?>
                    <?php monster_db(5,$link)?>
                    

                    <div class="clearfix"></div>
                </div>
                <!--[[[[/content]]]-->

                <!-- back to top btn -->
                <div id="back-top" style="display: none;">
                    <a href="##pagetop" >
                        <img src="./images/btn_top.png" alt="top">
                    </a>
                </div>
                <div id="footer">
                    
                </div>
                <!--/footer -->
            </div>
            <!--/container -->
        </div>
        <!--[[[[/wrapper]]] -->
    </body>
</html>