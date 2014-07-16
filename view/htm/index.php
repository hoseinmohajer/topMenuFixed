<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>my header</title>
		<link rel="stylesheet" href="../style/css/main.css">
		<link rel="stylesheet" href="../style/css/topmenu.css">
		<script src="../style/js/imgloader.js" type="text/javascript" charset="utf-8" async defer></script>
	</head>
	<body>
		<div class="header">
			<div class="top_menu">
				<div class="phone_number">
					<ul>
						<li>
							<img src="../style/img/phone.png" alt="phone_number" />
						</li>
						<li class="phone_number_align">
							<span>(021) <strong>00000000</strong></span>
						</li>
					</ul>
				</div>
				<div class="logo">
					<img src="../style/img/logo2.png">
				</div>
				<!-- start top menu -->
				<div class="topmenu">
					<ul>
						<li><a href="index.php">صفحه اصلی </a></li>
						<li><a href="#">ارتباط با ما</a></li>
						<li><a href="signup.php">عضویت در سایت </a></li>
						<li><a href="#"  id="subscription">اشتراک</a></li>
						<li><a href="signin.php">ورود</a></li>
						<?php
							if(isset($_SESSION['username'])){
								echo '<li><a href="../../controller/logout.php">خروج</a></li>';
							}
						?>
					</ul>
				</div>
				<div class="usrForm" id="usr_form">
					<form action="../../controller/subscription.php" method="post" accept-charset="utf-8" id="userform" >
						<input class="usrForm_form_input" type="email" name="subscriptionEmail" placeholder="YourEmail@sample.com">
						<input type="hidden" name="pagename" value="index.php">
						<input class="usr_form_button" type="submit" value="ثبت اشتراک">
					</form>
				</div>
				<!-- end top menu -->
			</div>
		</div>
		
			<div class="sliedeshow"> 
				<img src="../img/slideshow/f1.gif" name="slide" />
			</div>	
		
		<br>
		<center>
			<span>
			<?php
				if(isset($_SESSION['username'])){
					echo "Welcom: " . $_SESSION['username'];
				}else{
					echo "Guest user";
				}
			?>
			</span>&nbsp;&nbsp;&nbsp;<img src="../style/img/line2.png"></center>
		<br>
		
			<div class="food_bar_full_width">
				<!-- <div class="food_bar_right_arrow"><img src="../style/img/arrow_g.png"></div> -->
				<div class="food_bar">
					<div class="sub_food_bar"><a href="#"><img src="../img/foods/f1.jpg" alt=""></a><a href="#"><span>منوی غذاهای سنتی</span></a></div>
					<div class="sub_food_bar"><a href="#"><img src="../img/foods/f1.jpg" alt=""></a><a href="#"><span>منوی غذاهای ایتالیایی</span></a></div>
					<div class="sub_food_bar"><a href="#"><img src="../img/foods/f1.jpg" alt=""></a><a href="#"><span>منوی غذاهای مکزیکی</span></a></div>
					<div class="sub_food_bar"><a href="#"><img src="../img/foods/f1.jpg" alt=""></a><a href="#"><span>منوی غذاهای ژاپنی</span></a></div>
					<div class="bottom_label">
						<!-- <ul>
							<li>hello</li>
							<li>hello</li>
							<li>hello</li>
							<li>hello</li>
						</ul> -->
					</div>
				</div>
				<div class="bottom_label_full"></div>
			</div>
			<div class="arrow_bg"></div>
			<div class="third_col_row_full">
				<div class="third_col_row">
				<!-- <div class="arrow_right">123</div> -->
					<div class="cols">
						<div class="rows_title">
							<center><p><b>News & Events</b></p></center>
							<center><img src="../style/img/heading_line.png"></center>
						</div>
						<div class="rows dividerLine">
							<center>
								<p>sometext sometext sometext sometext sometext sometext sometext sometext sometextsometext sometext sometext 
								</p>
							</center>
							
						</div>
						<div class="rows">
							<center>
								<p>sometext sometext sometext sometext sometext sometext sometext sometext sometextsometext sometext sometext 
								</p>
							</center>
						</div>
					</div>
					<div class="cols">
						<div class="rows_title">
							<center><p><b>News & Events</b></p></center>
							<center><img src="../style/img/heading_line.png"></center>
						</div>
						<!-- <div class="rows dividerLine">
							<center>
								<p>sometext sometext sometext sometext sometext sometext sometext sometext sometextsometext sometext sometext 
								</p>
							</center>
							
						</div> -->
						<div class="rows">
							<center>
								<p>sometext sometext sometext sometext sometext sometext sometext sometext sometextsometext sometext sometext 
								</p>
							</center>
						</div>
					</div><div class="cols">
						<div class="rows_title">
							<center><p><b>News & Events</b></p></center>
							<center><img src="../style/img/heading_line.png"></center>
						</div>
						<div class="rows dividerLine">
							<center>
								<p>sometext sometext sometext sometext sometext sometext sometext sometext sometextsometext sometext sometext 
								</p>
							</center>
							
						</div>
						<div class="rows">
							<center>
								<p>sometext sometext sometext sometext sometext sometext sometext sometext sometextsometext sometext sometext 
								</p>
							</center>
						</div>
					</div>
				</div>
			</div>
			<div class="fourth_row">
				<div class="third_col_row_full">
					<div class="third_col_row">
						<div class="cols">
							<div class="rows_title">
								<center><p><b>News & Events</b></p></center>
								<center><img src="../style/img/heading_line.png"></center>
							</div>
							<div class="rows dividerLine">
								<center>
									<p>sometext sometext sometext sometext sometext sometext sometext sometext sometextsometext sometext sometext 
									</p>
								</center>
								
							</div>
							<div class="rows">
								<center>
									<p>sometext sometext sometext sometext sometext sometext sometext sometext sometextsometext sometext sometext 
									</p>
								</center>
							</div>
						</div>
						<div class="cols">
							<div class="rows_title">
								<center><p><b>News & Events</b></p></center>
								<center><img src="../style/img/heading_line.png"></center>
							</div>
							<!-- <div class="rows dividerLine">
								<center>
									<p>sometext sometext sometext sometext sometext sometext sometext sometext sometextsometext sometext sometext 
									</p>
								</center>
								
							</div> -->
							<div class="rows">
								<center>
									<p>sometext sometext sometext sometext sometext sometext sometext sometext sometextsometext sometext sometext 
									</p>
								</center>
							</div>
						</div><div class="cols">
							<div class="rows_title">
								<center><p><b>News & Events</b></p></center>
								<center><img src="../style/img/heading_line.png"></center>
							</div>
							<div class="rows dividerLine">
								<center>
									<p>sometext sometext sometext sometext sometext sometext sometext sometext sometextsometext sometext sometext 
									</p>
								</center>
								
							</div>
							<div class="rows">
								<center>
									<p>sometext sometext sometext sometext sometext sometext sometext sometext sometextsometext sometext sometext 
									</p>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_full">
				<div class="footer">
					&copy; تمام حقوق این سایت محفوظ می باشد
				</div>
			</div>
		
	</body>
	<script src="../style/js/jquery-1.11.1.min.js"></script>
	<script src="../style/js/slideshow.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="../style/js/formloader.js" type="text/javascript" charset="utf-8" async defer></script>
<!-- http://spingle.net/fine_dining/preview.html -->
</html>