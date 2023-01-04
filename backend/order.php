<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Order | silk_screen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<?php 
		@ini_set('display_errors', '0');
		session_start();
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
									<!-- <a href="index.html" class="logo"><strong>ยินดีต้อนรับ</strong> by HTML5 UP</a> -->
									<p>ยินดีต้อนรับ คุณ admin</p>
									<ul class="icons">
										<li><a href="profile.html" class="logo">แก้ไขข้อมูลส่วนตัว</a></li>
										<li><a href="index.html" class="logo">logout</a></li>
									</ul>

								</header>

							<section id="banner">
								<header>
								</header>
								<div class="Center">
									<h3>ลูกค้าที่สั่งออร์เดอร์ทั้งหมด</h3>
									
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>													
													<th>ชื่อ</th>
													<th>นามสกุล</th>
													<th>วันที่สั่งออร์เดอร์ล่าสุด</th>
													<th>id order</th>
													<th>ออร์เดอร์</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>นายนวพร</td>
													<td>หลงเหลือยิ่ง</td>
													<td>11/11/65</td>
													<td>bts1111220001</td>
													<td><a href="test1.php" class="button secondary" value="คลิ๊กที่นี่">คลิ๊กที่นี่</a></td>
												</tr>
												<tr>												
													<td>นางนงนวล</td>
													<td>อุดรรัตนธี</td>
													<td>12/11/65</td>
													<td>bts1112220001</td>
													<td><a href="test1.php" class="button secondary" value="คลิ๊กที่นี่">คลิ๊กที่นี่</a></td>
												</tr>
												<tr>												
													<td>บุษกร</td>
													<td>นภาลัย</td>
													<td>13/11/65</td>
													<td>bts1113220001</td>
													<td><input type="button" class="button secondary" value="คลิ๊กที่นี่"></input></td>
												</tr>
												<tr>												
													<td>ทดสอบ</td>
													<td>ไร้สกุล</td>
													<td>13/10/65</td>
													<td>bts1013220001</td>
													<td><input type="button" class="button secondary" value="คลิ๊กที่นี่"></input></td>
												</tr>
												<?php if($_SESSION["start"]=="1"){ ?>
												<tr>												
													<td><?php echo $_SESSION["name"]; ?></td>
													<td><?php echo $_SESSION["fname"]; ?></td>
													<td><?php echo $_SESSION["date1"]; ?></td>
													<td>bts1013220001</td>
													<td><a href="test2.php" class="button secondary" value="คลิ๊กที่นี่">คลิ๊กที่นี่</a></td>
												</tr>
												<?php } ?>
											</tbody>
											
										</table>
									</div>
									
								</div>
							</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">
							<nav id="menu">
								<header class="major">
									<h2>Menu</h2>
								</header>
								<ul>
									<li><a href="indexLoginIsTrue.php">หน้าหลัก</a></li>
									<li><a href="order.php">รายการที่ลูกค้าสั่ง</a></li>
									
									<li><a href="checkorder.html">ข้อมูลลูกค้า</a></li>
									<li><a href="purchase.php">การชำระเงิน</a></li>
								</ul>
							</nav>
						</div>
					</div>

			</div>

			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js" defer></script>
			<script src="assets/js/changecolor.js"></script>
			
	</body>
</html>