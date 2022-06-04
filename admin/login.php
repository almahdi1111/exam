<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/loginheader.php');
	include_once ($filepath.'/../classes/Admin.php');
    $ad = new Admin();
?>

<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
       $adminData = $ad->getUserData($_POST);
   }
?>

<div class="main">
<h1 style="text-align: center">تسجيل الادمن</h1>
<div class="adminlogin">
	<form action="" method="post">
		<table>
			<tr>
				<td>اسم المسنخدم</td>
				<td><input type="text" name="adminUser" required=""/></td>
			</tr>
			<tr>
				<td>كلمة السر</td>
				<td><input type="password" name="adminPass" required=""/></td>
			</tr>
			<tr>
				<td colspan="2">
                    <?php
                       if(isset($adminData)){
                           echo $adminData;
                       }
                    ?>
                </td>
			</tr>
            <tr>
                <td></td>
                <td class="button_class"><input type="submit" name="login" value="Login"/></td>
            </tr>
		</table>
	</form>
</div>

    <p style="text-align: center; font-size: 15px; padding-top: 30px;"><a style="text-decoration: darkgreen" href="../index.php">اذهب الى الصف حة الرئيسية</a></p>
</div>
<?php include 'inc/footer.php'; ?>