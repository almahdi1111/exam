<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
?>

    <style>
        .adminpanel{
            border: 1px solid #dddddd;
            border-radius: 12px;
            color: #999999;
            margin: 44px auto 0;
            padding: 110px;
            width: 694px;
        }
    </style>

<div class="main">
<h1 style="text-align: center">صفحة</h1>
    <div class="adminpanel">
        <h2 style="text-align: center">مرحبا بك في صفحة الادمن</h2>
        <p style="text-align: center">يمكنك إدارة المستخدم ونظام الامتحانات من هنا..</p>
    </div>


	
</div>
<?php include 'inc/footer.php'; ?>