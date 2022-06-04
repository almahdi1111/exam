<?php include 'inc/header.php'; ?>

<?php
Session::checkSession();
?>

<div class="main">
<h1>مرحبًا بك في الاختبار ابدأ من هنا</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/online_exam.png"/>
	</div>
	<div class="segment">
	<h2>تعليمات الاختبار</h2>
        <p style="text-align: justify; display: block; font-size: 16px; color: #444444">يُجري الاختبار  اختبارًا  لقياس معرفة المشاركين في موضوع معين.
             في الأيام الخوالي كان على الجميع التجمع في الفصل الدراسي في نفس الوقت لإجراء الامتحان.
         للاختبار عبر الإنترنت ، تحتاج إلى متصفح واتصال بالإنترنت. إنه حل فحص عبر الإنترنت يعتمد على الويب
             للطلاب والمؤسسات ومعاهد التدريب التي يمكن تخصيصها حسب المتطلبات يوفر نظام الإدارة هذا
             واجهة بسيطة وبديهية  تدفق خالي من المتاعب من عملية اختبار إلى أخرى.</p>
	<ul style="padding-top: 20px; padding-left: 50px;">
		<li><a href="start_test.php">أبدأ هنا</a></li>
	</ul>
	</div>
	
  </div>
<?php include 'inc/footer.php'; ?>