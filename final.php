<?php include 'inc/header.php'; ?>

<?php
Session::checkSession();
?>

    <div class="main">
        <h1>You are done!</h1>
        <div style="text-align: center" class="starttest">
            <br/>
            <p>تهنئة! لقد أكملت للتو الاختبار.</p>
            <strong style="color: #444444">النتيجة النهائية:
            <?php
               if(isset($_SESSION['score'])){
                   echo $_SESSION['score'];
                   unset($_SESSION['score']);
               }
            ?>
            </strong>

            <br/>
            <br/>
            <br/>
            <a style="border-color: green;" href="viewAns.php">عرض الإجابة الصحيحة</a>
            <a style="border-color: green;" href="start_test.php">ابدأ الاختبار مرة أخرى.!</a>
        </div>

    </div>
<?php include 'inc/footer.php'; ?>