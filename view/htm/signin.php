<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>my header</title>
		<link rel="stylesheet" href="../style/css/main.css">
		<link rel="stylesheet" href="../style/css/topmenu.css">
		<link rel="stylesheet" href="../style/css/submitform.css">
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
						<input type="hidden" name="pagename" value="signin.php">
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
		<center><span>
			<?php
				if(isset($_SESSION['username'])){
					echo "Welcom: " . $_SESSION['username'];
				}else{
					echo "Guest user";
				}
			?>
			</span>&nbsp;&nbsp;&nbsp;<img src="../style/img/line2.png"></center>
		<br>
		<div class="third_col_row_full">
			<div class="third_col_row">
				<div class="login_form_box">
					<p>در صورت نداشتن حساب کاربری <a href="signup.php">اینجا</a> را کلیک کنید</p>
					<form action="../../controller/signin.php" method="post">
						<label for="username">نام کاربری</label>
						<input type="text" class="input_text" placeholder="نام کاربری" id="username" name="username">
						<label for="password">کلمه عبور</label>
						<input type="password" class="input_text" placeholder="کلمه عبور" id="password" name="password">
						<div class="button_group">
							<input type="reset" value="از نو" class="button">
							<input type="submit" value="ورود" class="button" id="submit">
						</div>
					</form>
					<div class="note">
						<p>ایمیل شما نزد ما محفوظ خواهد ماند.</p>
					</div>
					<div class="forgetpass">
						<a href="#">فراموشی کلمه عبور</a>
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