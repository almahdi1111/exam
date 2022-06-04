<?php include 'inc/header.php'; ?>

<?php
Session::checkSession();
$question = $exm->getQuestion();
$total    = $exm->getTotalRows();
?>

    <div class="main">
        <h1>مرحبا بك في الاختبار</h1>
        <div style="text-align: center" class="starttest">
            <h2>اختبر معرفتك</h2>
            <p>هذا اختبار متعدد الخيارات لاختبار معلوماتك.</p>
            <ul>
                <li><strong>عدد الأسئلة: </strong> <?php echo $total; ?> </li>
                <li><strong>نوع السؤال: </strong>اختيار متعدد</li>
            </ul>
            <br/>
            <br/>

            <a style="color: green; border-color: green; border-radius: 13px" href="test.php?q=<?php echo $question['quesNo']; ?>">ابدا الاختبار الان</a>
        </div>
    </div>
<?php include 'inc/footer.php'; ?>