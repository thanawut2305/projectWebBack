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
		<?php
		@ini_set('display_errors', '0');
		session_start(); 
		if($_FILES){
			
			$logo = $_FILES['logofile'];
			$dir = "images/";
			$logo = $dir . basename($_FILES['logofile']['name']);
			move_uploaded_file($_FILES['logofile']['tmp_name'],$logo);
			$_SESSION["example"]=$logo;
			$_SESSION["option"]=$_POST['option'];
			$_SESSION["serial"]=$_POST['serial'];
			$_SESSION["tp"]=$_POST['tp'];
		}
		?>
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
									<div class="Center">
										<h3>ออร์เดอร์ที่อยู่ในระหว่างการดำเนินการ</h3>
										
										<div class="table-wrapper">
											<table class="alt">
												<thead>
													<tr>
														<th>ชื่อ</th>
														<th>นามสกุล</th>
														<th>วันที่สั่งออร์เดอร์</th>
														<th>id order</th>
														<th>อยู่ในระหว่างการดำเนินการ(วัน)</th>
														<th>สถานะ</th>
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>นายนวพร</td>
														<td>หลงเหลือยิ่ง</td>
														<td>13/11/65</td>
														<td><a href="test1.php" >bts1111220001</a></td>
														<td>2</td>
														<td>กำลังประเมินราคา</td>
														
													</tr>
													<tr>
														<td>นางนงนวล</td>
														<td>อุดรรัตนธี</td>
														<td>12/11/65</td>
														<td><a href="testtest.html" >bts1112220001</a></td>
														<td>3</td>
														<td>กำลังประเมินราคา</td>
														
													</tr>
													<tr>
														<td>บุษกร</td>
														<td>นภาลัย</td>
														<td>11/11/65</td>
														<td><a href="test1.php" >bts1113220001</a></td>
														<td>4</td>
														<td>กำลังแก้ไขตัวอย่าง</td>
														
													</tr>
													<tr>										
													<td><?php echo $_SESSION["name"]; ?></td>
													<td><?php echo $_SESSION["fname"]; ?></td>
													<td><?php echo $_SESSION["date1"]; ?></td>
													<td><a href="test2.php" >bts1112220001</a></td>
													<td>0</td>
														<td>กำลังแก้ไขตัวอย่าง</td>
												</tr>
												</tbody>
												
											</table>
										</div>
										
									</div>
									
									<!-- <span class="image object">
										<img src="images/pic10.jpg" alt="" />
									</span> -->
									
								</section>
								<div class="Center">
									<h3>ออเดอร์ที่ยังไม่ได้ประเมินราคา</h3>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>		
													<th>ชื่อ</th>
													<th>นามสกุล</th>
													<th>วันที่สั่งออร์เดอร์</th>
													<th>id order</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>					
													<td>นายนวพร</td>
													<td>หลงเหลือยิ่ง</td>
													<td>11/11/65</td>
													<td><a href="test1.html" >bts1111220001</a></td>
													
												</tr>
												<tr>										
													<td>นางนงนวล</td>
													<td>อุดรรัตนธี</td>
													<td>12/11/65</td>
													<td><a href="test1.html" >bts1112220001</a></td>
													
												</tr>
												<?php if($_SESSION["number"] == 2){ ?>
													<tr>										
													<td><?php echo $_SESSION["name"]; ?></td>
													<td><?php echo $_SESSION["fname"]; ?></td>
													<td><?php echo $_SESSION["date"]; ?></td>
													<td><a href="test2.php" >bts1112220001</a></td>
													
												</tr>
													<?php } ?>
											</tbody>
											
										</table>
									</div>
									
								</div>
								<div class="Center">
									<h3>ออเดอร์ที่ต้องแก้ไขตัวอย่าง</h3>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>												
													<th>id order</th>
													<th>วันที่ลูกค้าให้แก้ไข</th>
													<th>รายละเอียดการแก้ไข</th>
													
													
												</tr>
											</thead>
											<tbody>
												<tr>													
													<td><a href="test1.php" >bts1113220001</a></td>
													<td>13/11/65</td>
													<td>ขนาดรูปเล็กไป,อยากไห้สีเหลืองเข้มขึ้นอีก</td>
													
													
												</tr>
												<?php if($_SESSION["fix"] == 2){ ?>
													<tr>										
													<td><a href="test1.php" >bts1112220001</a></td>
													<td><?php echo $_SESSION["date1"]; ?></td>
													<td><?php echo $_SESSION["message"]; ?></td>
													
													
												</tr>
													<?php } ?>
												
												
											</tbody>
											
										</table>
									</div>
									
								</div>
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
								

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>