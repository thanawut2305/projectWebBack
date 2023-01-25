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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
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
		<style>
		body, input, select, textarea {
  color: #7f888f;
  font-family: "Open Sans", sans-serif;
  font-size: 13pt;
  font-weight: 400;
  line-height: 1.65; }
  @media screen and (max-width: 1680px) {
    body, input, select, textarea {
      font-size: 11pt; } }
  @media screen and (max-width: 1280px) {
    body, input, select, textarea {
      font-size: 10pt; } }
  @media screen and (max-width: 360px) {
    body, input, select, textarea {
      font-size: 9pt; } }

a {
  -moz-transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
  -webkit-transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
  -ms-transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
  transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
  border-bottom: dotted 1px;
  color: #2c91f0;
  text-decoration: none; }
  a:hover {
    border-bottom-color: #2c91f0;
    color: #2c91f0 !important; }
    a:hover strong {
      color: inherit; }

strong, b {
  color: #3d4449;
  font-weight: 600; }

em, i {
  font-style: italic; }

p {
  margin: 0 0 2em 0; }

h1, h2, h3, h4, h5, h6 {
  color: #3d4449;
  font-family: "Roboto Slab", serif;
  font-weight: 700;
  line-height: 1.5;
  margin: 0 0 1em 0; }
  h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
    color: inherit;
    text-decoration: none;
    border-bottom: 0; }

h1 {
  font-size: 4em;
  margin: 0 0 0.5em 0;
  line-height: 1.3; }

h2 {
  font-size: 1.75em; }

h3 {
  font-size: 1.25em; }

h4 {
  font-size: 1.1em; }

h5 {
  font-size: 0.9em; }

h6 {
  font-size: 0.7em; }

@media screen and (max-width: 1680px) {
  h1 {
    font-size: 3.5em; } }

@media screen and (max-width: 980px) {
  h1 {
    font-size: 3.25em; } }

@media screen and (max-width: 736px) {
  h1 {
    font-size: 2em;
    line-height: 1.4; }
  h2 {
    font-size: 1.5em; } }

sub {
  font-size: 0.8em;
  position: relative;
  top: 0.5em; }

sup {
  font-size: 0.8em;
  position: relative;
  top: -0.5em; }

blockquote {
  border-left: solid 3px rgba(210, 215, 217, 0.75);
  font-style: italic;
  margin: 0 0 2em 0;
  padding: 0.5em 0 0.5em 2em; }

code {
  background: rgba(230, 235, 237, 0.25);
  border-radius: 0.375em;
  border: solid 1px rgba(210, 215, 217, 0.75);
  font-family: "Courier New", monospace;
  font-size: 0.9em;
  margin: 0 0.25em;
  padding: 0.25em 0.65em; }

pre {
  -webkit-overflow-scrolling: touch;
  font-family: "Courier New", monospace;
  font-size: 0.9em;
  margin: 0 0 2em 0; }
  pre code {
    display: block;
    line-height: 1.75;
    padding: 1em 1.5em;
    overflow-x: auto; }

hr {
  border: 0;
  border-bottom: solid 1px rgba(210, 215, 217, 0.75);
  margin: 2em 0; }
  hr.major {
    margin: 3em 0; }

.align-left {
  text-align: left; }

.align-center {
  text-align: center; }

.align-right {
  text-align: right; }
.display-inline {
    display: inline;
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
									<div class="Center">

										<h4>Search</h4>
									<input type="text" id="Search_All">
										<h3 class="display-inline">ออร์เดอร์ที่อยู่ในระหว่างการดำเนินการ</h3><nobr>

										<div class="table-wrapper">
											<table class="alt">
											<table class="alt" id="table1">
												<thead>
													<tr>
														<td>ชื่อ</td>
														<td>นามสกุล</td>
														<td>วันที่สั่งออร์เดอร์</td>
														<td>id order</td>
														<td>อยู่ในระหว่างการดำเนินการ(วัน)</td>
														<td>สถานะ</td>
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>นายนวพร</td>
														<td>หลงเหลือยิ่ง</td>
														<td>13/11/65</td>
														<td><a href="testtest.php" >bts1111220001</a></td>
														<td>2</td>
														<td>กำลังประเมินราคา</td>
														
													</tr>
													<tr>
														<td>นางนงนวล</td>
														<td>อุดรรัตนธี</td>
														<td>12/11/65</td>
														<td><a href="testtest.php" >bts1112220001</a></td>
														<td>3</td>
														<td>กำลังประเมินราคา</td>
														
													</tr>
													<tr>
														<td>บุษกร</td>
														<td>นภาลัย</td>
														<td>11/11/65</td>
														<td><a href="testtest.php" >bts1113220001</a></td>
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
								<section>
								<div class="Center">
									<h3>ออเดอร์ที่ยังไม่ได้ประเมินราคา</h3>
									<div class="table-wrapper">
										<table class="alt">
										<table class="alt" id="table2">
											<thead>
												<tr>		
													<td>ชื่อ</td>
													<td>นามสกุล</td>
													<td>วันที่สั่งออร์เดอร์</td>
													<td>id order</td>
													
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
								</section>
								<section>
								<div class="Center">
									<h3>ออเดอร์ที่ต้องแก้ไขตัวอย่าง</h3>
									<div class="table-wrapper">
										<table class="alt">
										<table class="alt" id="table3">
											<thead>
												<tr>												
													<td>id order</td>
													<td>วันที่ลูกค้าให้แก้ไข</td>
													<td>รายละเอียดการแก้ไข</td>

													
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
										<!-- <li><a href="management.html">การจัดการระบบ</a></li> -->
										<li><span class="opener">การจัดการระบบ</span>
										<ul>
                                            <li><a href="managementSize.html">จัดการราคาไซส์เสื้อ</a></li>
                                            <li><a href="managementColorTshirt.html">จัดการสีเสื้อ</a></li>
                                            <li><a href="managementColor.html">จัดการสีสกรีน</a></li>
                                            <li><a href="managementBlock.html">จัดการบล็อกพิมพ์</a></li>
                                            <li><a href="managementTransport.html">จัดการค่าขนส่ง</a></li>
                                        </ul>
										</li>
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
			<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
			<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

			<script>

	$.fn.dataTableExt.oApi.fnFilterAll = function (oSettings, sInput, iColumn, bRegex, bSmart) {
               var settings = $.fn.dataTableSettings;

               for (var i = 0; i < settings.length; i++) {
                   settings[i].oInstance.fnFilter(sInput, iColumn, bRegex, bSmart);
               }
           };

           $(document).ready(function () {
               $('#table1').dataTable({
                   "bPaginate": true,
				   "dom": '<"top"l>rt<"bottom"p>'
               });
               var oTable0 = $("#table1").dataTable();

               $("#Search_All").keyup(function () {
                   // Filter on the column (the index) of this element
                   oTable0.fnFilterAll(this.value);
               });
           });

           $(document).ready(function () {
               $('#table2').dataTable({
                   "bPaginate": true,
				   "dom": '<"top"l>rt<"bottom"p>'
               });
               var oTable1 = $("#table1").dataTable();

               $("#Search_All").keyup(function () {
                   // Filter on the column (the index) of this element
                   oTable1.fnFilterAll(this.value);
               });
           });
		   $(document).ready(function () {
               $('#table3').dataTable({
                   "bPaginate": true,
				   "dom": '<"top"l>rt<"bottom"p>'
               });
               var oTable1 = $("#table1").dataTable();

               $("#Search_All").keyup(function () {
                   // Filter on the column (the index) of this element
                   oTable1.fnFilterAll(this.value);
               });
           });
    </script>

	</body>
</html>