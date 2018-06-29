<?php 
include("header.php"); 
include("info_header.php");
$statu = $_POST['statu'];
$id = $_POST['id']; 
$name = $_POST['name'];
?>
                        <?php header_img(2) ?>
                        <?php print_option(2); ?>

                            <?php 
                            switch ($statu) {
                                case '0':
                                    $db = 'decoration_info';
                                    break;      
                                default:
                                    # code...
                                    break;
                            }
                            $sql = "SELECT * FROM $db WHERE name = '$name'";
                            $result = mysqli_query($link,$sql);
                            while($row = mysqli_fetch_row($result)){
                            ?>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th pc">裝飾品名稱</div>
                                <div class="mdl-table__list__th">素材1</div>
                                <div class="mdl-table__list__th">素材2</div>
                                <div class="mdl-table__list__th">素材3</div>
                                <div class="mdl-table__list__th">素材4</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td pc">
                                  <div class="inner">
                                    <?php echo $name ?>
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

                <div id="footer">
                 
                </div>
                <!--/footer -->
            </div>
            <!--/container -->
        </div>
        <!--[[[[/wrapper]]] -->
    </body>
</html>