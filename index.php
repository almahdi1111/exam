<?php include 'inc/header.php'; ?>

<?php
  Session::checkLogin();
?>

<div class="main">
<h1>نظام الامتحانات  - تسجيل دخول المستخدم</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/test.png"/>
	</div>
	<div class="segment">
	<form action="" method="post">
		<table class="tbl" style="padding-left: 60px; padding-top: 65px">
			 <tr>
			   <td>الايميل</td>
			   <td><input name="email" id="email" type="text" required="" placeholder="Enter Email"></td>
			 </tr>
			 <tr>
			   <td>كلمة السر</td>
			   <td><input name="password" id="password" type="password" required="" placeholder="Enter Password"></td>
			 </tr>
			  <tr>
			  <td></td>
			   <td class="button_class"><input type="submit" id="loginSubmit" value="تسجيل الدخول">
			   </td>
			 </tr>
       </table>
	   </form>

        <br/>
	   <p style="font-size: 16px; text-align: center;">هل أنت مستخدم جديد؟ <a style="text-decoration: none" href="register.php">سجل</a> هنا</p>
        <br/>
        <p style="font-size: 14px; text-align: center;"><span class="empty" style="display: none">يجب ألا تكون الحقول فارغة!</span></p>
        <p style="font-size: 14px; text-align: center;"><span class="error" style="display: none">البريد الإلكتروني أو كلمة المرور غير متطابقتين!</span></p>
        <p style="font-size: 14px; text-align: center;"><span class="disable" style="display: none">معرف المستخدم معطل من المسؤول!</span></p>

    </div>
	
</div>
<?php include 'inc/footer.php'; ?>