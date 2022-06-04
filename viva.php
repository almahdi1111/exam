<?php include 'inc/header.php'; ?>
<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/classes/User.php');
include_once ($filepath.'/classes/process.php');
$usr = new User();
$pro = new process();
?>

<?php
Session::checkSession();
$total    = $exm->getTotalRows();
?>

    <div class="viva_main">
        <h1 style="color: blue;">نظام الاختبارات</h1>
        <p style="text-align: center">مبارك حصلت على درجة كاملة .</p>
        <div style="text-align: center;">
            <strong style="color: #444444">النتيجة:
                <?php
                if(isset($_SESSION['score'])){
                    echo $_SESSION['score'];
                    unset($_SESSION['score']);
                }
                ?>
            </strong>
        </div>
        <br/>

        <?php
        if(isset($_POST['viva_btn'])){
            $usr->insert_viva_data($_POST['name'], $_POST['email'], $_POST['facebook'], $_POST['skype']);
        }
        ?>

        

        <div style="text-align: center; padding-top: 45px" class="viva_starttest">
            <a style="border-color: green;" href="viewAns.php">عرض الاجابات الصحيحة</a>
            <a style="border-color: green;" href="start_test.php">اعادة الاختبار من جديد</a>
        </div>


    </div>
<?php include 'inc/footer.php'; ?>