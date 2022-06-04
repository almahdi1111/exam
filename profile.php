<?php include 'inc/header.php'; ?>

<?php
  Session::checkSession();
  $userId = Session::get("userId");
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $updateUser = $usr->updateUserData($userId, $_POST);
}
?>

    <div class="main">
        <h1>نظام ادارة الاختبارات الملف الشخصي</h1>

            <?php
            if(isset($updateUser)){
                echo $updateUser;
            }
            ?>


        <div class="profile">
            <form action="" method="post">

                <?php
                $getData = $usr->getUserData($userId);
                if($getData){
                    $result = $getData->fetch_assoc();

                  //$pass =  $result(varchar)['password'];
                ?>

                <table class="tbl">
                    <tr>
                        <td>الاسم</td>
                        <td><input name="name" type="text" value="<?php echo $result['name'] ?>" ></td>
                    </tr>
                    <tr>
                        <td>اسم المستخدم</td>
                        <td><input name="username" type="text" value="<?php echo $result['username'] ?>" ></td>
                    </tr>
                    <tr>
                        <td>الايميل</td>
                        <td><input name="email" type="text" value="<?php echo $result['email'] ?>" ></td>
                    </tr>
                    <tr>
                        <td>كلمة السر</td>
                        <td><input name="password" type="password" value="<?php echo $result['password'] ?>" ></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="button_class"><input type="submit" value="Update">
                        </td>
                    </tr>
                </table>

                <?php } ?>

            </form>
    </div>
 </div>
<?php include 'inc/footer.php'; ?>