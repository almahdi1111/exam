<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/inc/header.php');
include_once ($filepath.'/../classes/User.php');

$usr = new User();
?>

  <?php
     if(isset($_GET['dis'])){
         $dblid   = (int)$_GET['dis'];
         $dblUser = $usr->disableUser($dblid);
     }

     if(isset($_GET['ena'])){
         $eblid   = (int)$_GET['ena'];
         $eblUser = $usr->enableUser($eblid);
     }

     if(isset($_GET['del'])){
         $delid   = (int)$_GET['del'];
         $delUser = $usr->deleteUser($delid);
     }
  ?>

    <div class="main">
      <h1 style="text-align: center; font-size: 24px">ادارة المستخدمين</h1>

        <?php
        if(isset($dblUser)){
            echo $dblUser;
        }

        if(isset($eblUser)){
            echo $eblUser;
        }

        if(isset($delUser)){
            echo $delUser;
        }
        ?>

        <div class="manageuser">
           <table class="tblone">
               <tr>
                 <th>رقم</th>
                 <th>الاسم</th>
                 <th>اسم المستخدم</th>
                 <th>الايميل</th>
                 <th>التحكم</th>
               </tr>

              <?php
                 $userData = $usr->getAllUser();
                 if($userData){
                     $i = 0;
                   while($result = $userData->fetch_assoc()){
                     $i++;
              ?>

               <tr>
                 <td>
                     <?php
                     if($result['status']=='1'){
                         echo "<span class='error'>".$i."</span>";
                     }else{
                         echo $i;
                     }
                     ?>
                 </td>
                 <td>
                     <?php
                     if($result['status']=='1'){
                         echo "<span class='error'>".$result['name']."</span>";
                     }else{
                         echo $result['name'];
                     }
                     ?>
                 </td>
                 <td><?php echo $result['username']; ?></td>
                 <td><?php echo $result['email']; ?></td>
                 <td >

                     <?php
                        if($result['status']=='0'){ ?>
                            <a style="color: green; text-decoration: none" onclick="return confirm('Are You Sure to Disable?')" href="?dis=<?php echo $result['userId']; ?>">الغاء التفعيل</a>
                     <?php } else{ ?>
                            <a style="color: blue; text-decoration: none" onclick="return confirm('Are You Sure to Enable?')" href="?ena=<?php echo $result['userId']; ?>">التفعيل</a>
                     <?php } ?>
                     | <a style="color: red; text-decoration: none" onclick="return confirm('Are You Sure to Remove?')" href="?del=<?php echo $result['userId']; ?>">الحذف</a>
                 </td>
               </tr>

               <?php } } ?>

           </table>
       </div>
  </div>
<?php include 'inc/footer.php'; ?>