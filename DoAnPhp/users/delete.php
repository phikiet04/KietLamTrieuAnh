
    <?php
      include_once("../dbconnect.php");
      if(isset($_GET["id"])){
          header('location:index.php');
      }
      $id= $_GET['id'];
      // chuẩn bị câu truy vấn dữ liệu
        $querysql="DELETE FROM users where id=$id";
        // thực thi câu truy vấn 
        $result=mysqli_query($conn,$querysql);
        if($result){
         header('location:index.php');
        }else{
         die(mysqli_close($conb));         // $con là biến kết nối đến cơ sở dữ liệu
        }
    ?>

