<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>silk_screen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script type="text/javascript">
			function popup(){
				prompt("กรอกเงินที่ลูกค้าจ่ายผิด");
			}
		</script>
		<?php 
		@ini_set('display_errors', '0');
			session_start();
			$logo = $_SESSION["screenPicture"];
			$_SESSION["price2"] = $_POST["price"];
			$_SESSION["st"] = $_POST["st"];
		?>
		<style>
	.modal {
  display: show;
  position: ;
  height: 80px;
  width: ;: 80px;
  
  
  
  overflow: hidden;
  background-color: white;
}
</style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<header id="header">
								<p>ยินดีต้อนรับ คุณ admin</p>
								<!-- <a href="index.html" class="logo2">logout2</a> -->
								<!-- <a href="index.html" class="logo">logout</a> -->
								
								<!-- <strong>ยินดีต้อนรับ</strong> -->
								<ul class="icons">
									<!-- <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li> -->
									<li><a href="profile.html" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
									<li><a href="index.html" class="logo">logout</a></li>
								</ul>
								<!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
							</header>

							<!-- Banner -->
							
							<section id="banner">
								<header>
								</header>
								<div class="Center2">
								<?php 
											session_start();
											echo $_SESSION["bill"];
											?>
									<h3>การชำระเงินของลูกค้า</h3>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>id order</th>
													<th>ราคาเต็ม</th>
													<th>ราคามัดจำ (ขั้นต่ำ)</th>
													<th>ราคาที่ลูกค้าจ่าย</th>
													<th>ยอดค้างชำระ</th>
													<th>วันที่ชำระล่าสุด</th>
													<th>สลีป</th>
													<th>สถานะ</th>
													<th>รายละเอียด</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>bts1111220001</td>
													<td>1000</td>
													<td>500</td>
													<td>500</td>
													<td>500</td>
													<td>11/11/65</td>
													<td><a href="#" class="fa fa-file"></a></td>
													<td>รอตรวจสอบการมัดจำ</td>
													<td><a href="detailPurchase.html">คลิ๊กที่นี่</a></td>
													
													<!-- <td>
														<div class="displayShirt2">
															<div class="img-resize2"><span><img src="" alt="" /></span></div>
														</div>
													</td> -->
													<!-- <td>
														<div class="positionTable">
															<input type="button" class="button secondary" onclick="return confirm('ยืนยันการชำระเงินถูกต้อง')" value="การชำระถูกต้อง"></input><br>
														</div>
														<div class="positionTable">
															<input type="button" class="button danger" onclick="popup();" value="การชำระไม่ถูกต้อง"></input><br>
														</div>
														
													</td> -->
												</tr>
												<tr>
												<td>bts1112220001</td>
													<td>2000</td>
													<td>1000</td>
													<td>500</td>
													<td>1500</td>
													<td>12/11/65</td>
													<td><a href="#" class="fa fa-file"></a></td>
													<td>รอตรวจสอบการมัดจำ</td>
													<td><a href="detailPurchase.html">คลิ๊กที่นี่</a></td>
												</tr>
												<tr>
												<td>bts1112220002</td>
													<td>3000</td>
													<td>1500</td>
													<td>1600</td>
													<td>1400</td>
													<td>12/11/65</td>
													<td><a href="#" class="fa fa-file"></a></td>
													<td>รอชำระเต็มจำนวน</td>
													<td><a href="detailPurchase.html">คลิ๊กที่นี่</a></td>
												</tr>
												<tr>
												<td>bts1013220001</td>
													<td>1000</td>
													<td>500</td>
													<td>700</td>
													<td>300</td>
													<td>13/10/65</td>
													<td><a href="#" class="fa fa-file"></a></td>
													<td>รอตรวจสอบการมัดจำ</td>
													<td><a href="detailPurchase.html">คลิ๊กที่นี่</a></td>
												</tr>
												<td>bts1113220002</td>
													<td>1000</td>
													<td>500</td>
													<td>1000</td>
													<td>0</td>
													<td>13/11/65</td>
													<td><a href="#" class="fa fa-file"></a></td>
													<td>ชำระเรียบร้อย</td>
													<td><a href="detailPurchase.html">คลิ๊กที่นี่</a></td>
												</tr>
												<tr>
												<td>bts1013220001</td>
													<td>1000</td>
													<td>500</td>
													<td>500</td>
													<td>0</td>
													<td>11/11/65</td>
													<td><a href="#" class="fa fa-file"></a></td>
													<td>รอตรวจสอบการมัดจำ</td>
													<td><a href="detailPurchase.html">คลิ๊กที่นี่</a></td>
												</tr>
												<?php if($_SESSION["start"]=="1"){ ?>
												<tr>												
												<td>bts1013220001</td>
													<td><?php echo $_SESSION["price"]; ?></td>
													<td><?php echo $_SESSION["deposit"]; ?></td>
													<td><?php echo $_SESSION["price"]-$_SESSION["price2"]; ?></td>
													<td><?php echo $_SESSION["price"]-$_SESSION["price2"]; ?></td>
													<td><?php echo $_SESSION["date"]; ?></td>
													<td><span><img class="modal" src="images/TXN_202003051xxU8nbrdzPgP3V9h.jpg" alt="" /></span></td>
													<?php if($_SESSION["st"] == "มัดจำถูกต้อง"){ ?>
													<td>มัดจำถูกต้อง</td>
													<?php }else if($_SESSION["st"] == "มัดจำไม่ถูกต้อง"){ ?>
														<td>มัดจำไม่ถูกต้อง</td>
														<?php } else if($_SESSION["st"] == "จ่ายเต็มจำนวนถูกต้อง"){ ?>
														<td>กำลังผลิต</td>
														<?php }else{ ?>
															<td>รอตรวจสอบการมัดจำ</td>
															<?php } ?>
													<td><a href="detailPurchase.php">คลิ๊กที่นี่</a></td>
												</tr>
												<?php } ?>
											</tbody>
											
										</table>
									</div>
									
								</div>
								<!-- <span class="image object">
									<img src="images/pic10.jpg" alt="" />
								</span> -->
								
							</section>

							<!-- Section -->
								<!-- <section>
									<header class="major">
										<h2>Erat lacinia</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-gem"></span>
											<div class="content">
												<h3>Portitor ullamcorper</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-paper-plane"></span>
											<div class="content">
												<h3>Sapien veroeros</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-rocket"></span>
											<div class="content">
												<h3>Quam lorem ipsum</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-signal"></span>
											<div class="content">
												<h3>Sed magna finibus</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
									</div>
								</section> -->

							<!-- Section -->
								<!-- <section>
									<header class="major">
										<h2>Ipsum sed dolor</h2>
									</header>
									<div class="posts">
										<article>
											<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
											<h3>Interdum aenean</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
											<h3>Nulla amet dolore</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
											<h3>Tempus ullamcorper</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
											<h3>Sed etiam facilis</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
											<h3>Feugiat lorem aenean</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
											<h3>Amet varius aliquam</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
									</div>
								</section> -->

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<!-- <section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section> -->

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="indexLoginIsTrue.php">หน้าหลัก</a></li>
										<li><a href="order.php">รายการที่ลูกค้าสั่ง</a></li>
										
										<li><a href="checkorder.html">ข้อมูลลูกค้า</a></li>
										
										<!-- <li>
											<span class="opener">Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li> -->
										<li><a href="purchase.php">การชำระเงิน</a></li>
										<!-- <li><a href="#">Adipiscing</a></li> -->
										<!-- <li>
											<span class="opener">Another Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li> -->
										<!-- <li><a href="#">Maximus Erat</a></li> -->
										<!-- <li><a href="#">Sapien Mauris</a></li> -->
										<!-- <li><a href="contact.html">ติดต่อเรา</a></li> -->
									</ul>
								</nav>

							<!-- Section -->
								<!-- <section>
									<header class="major">
										<h2>Ante interdum</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section> -->

							<!-- Section -->
								

							<!-- Footer -->
								

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js" defer></script>

	</body>
</html>