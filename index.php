<?php 
include("header.php"); 
?>

	<body class="top">
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
					    
								<li id="navi01" class="active"><a href="./index.php"><span class="mb">TOP</span></a></li>
								<li id="navi02"><a href="./weapan.php"><span class="mb">遊戲攻略</span></a></li>
					    
							</ul>
						</nav>
					</div>
					<!--/nav -->
					<h1>
						<a href="./index.php">
							<img src="./images/logo.png" alt="">
							<span class="hide">MONSTER HUNTER</span>
						</a>
					</h1>
					<div id="mv_">
					</div>
					<div id="mv_s">
					</div>
				</div>
				<!--/MAIN -->
				<div id="download-buttons">
					<ul>
					<li><a href="https://www.facebook.com/monsterhunter/" target="_blank"><img src="./images/btn_fb.png" style="width:300px;height: 57px;padding-left: 50px " alt=""></a></li>
					<li><a href="https://forum.gamer.com.tw/A.php?bsn=5786" target="_blank"><img src="./images/btn_bh.png" style="width:300px;height: 57px;" alt="巴哈姆特討論區"></a></li>
					</ul>
				</div>
				<!--/DL buttons -->

				<!--首頁內容 -->
				<div id="top-content">
					<div id="content_bg">
					</div>

					<div class="clearfix">
					</div>

					<div id="links">
						<ul class="">
						</ul>
					</div>
					<!--/links -->

				</div>
				<!--[[[[/content]]]-->

				<!-- back to top btn -->
				<div id="back-top" style="display: block;">
					<a href="http://mhxr.capcom.com.tw/index.html#pagetop">
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


		<div id="cami_system_container" class="cami_system_elem" style="position:relative; display:none;">
			<div id="cami_patrol_tool">
			</div>
			<div id="cami_show_list" style="position: absolute; top: -10000px; left: -10000px;">
			</div>
		</div>
		<div id="cami_active_talk" class="cami_system_elem">
		</div>
		<div id="cami_service_alert" class="cami_system_elem">
		</div>
		<div id="cami_robot_active" class="cami_system_elem">
			<div class="cami_alpha_bg">
			</div>
			<div class="cami_content_container">
				<div class="cami_content_wrap">
					<div class="cami_content">
					</div>
				</div>
			</div>
			<div class="cami_close" onclick="_cami_system.robotActiveHide(); return false;">
			×
			</div>
		</div>
	</body>
</html>