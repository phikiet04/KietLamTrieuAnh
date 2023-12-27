<?php
    include_once "../dbconnect.php";
    if (!isset($_GET['id'])) {
      header('location:index.php');
 }
   $id=$_GET['id']; // lấy id của danh mục sản phẩm 
  // chuẩn bị câu truy vấn dl
   $queryCat= "SELECT * FROM users where id =$id";// có nghĩa là query cái danh mục sp mà có id này 
   // Thực thi câu truy vấn sql để lấy về dữ liệu ban đầu của record của update
   $result=mysqli_query($conn,$queryCat);
   $categoryRow=$result->fetch_assoc();// chứa sp vào trong cái categoryrow này 
   // nếu kh tìm thấy dữ liệu --> thông báo lại 
 
   if (empty($categoryRow)) {
     echo "Giá trị id: $id không tồn tại. Vui lòng kiểm tra lại.";
     header("Location:index.php");
   }
  ?>
        <?php include_once("../includes/header.php") ?>
            <h1 class="fs-2 text-warning">Trang chỉnh sửa người dùng </h1>
            <form action="" method="post">
                <div class="mb-3">
                 <label for="id" class="form-label">id</label>  
                 <input value="<?php echo $categoryRow['id']?>"readonly type="text" class="form-control" name="id" name="name" id='id'>
                </div>
                <div class="mb-3">
                  <label for="usersname" class="form-label">Usersname</label>
                  <input value="<?php echo $categoryRow ['usename']?>" type="text"  name="usename" class="form-control" id="usename">
                </div>
                <div class="mb-3">
                  <label for="email"class="form-label">Email </label>
                   <input value="<?php echo $categoryRow ['email']?>" type="text"  name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                   <label for="password"class="form-label">Pasword</label>
                   <input value="<?php echo $categoryRow ['password']?>" type="text"  name="password" class="form-control" id="password">
                </div>
                <input type="submit" class="btn btn-primary" name="save" value="Lưu">
            </form>
        <?php include_once("../includes/footer.php") ?>
    <?php
    if(isset($_POST['save'])){
      $usename=$_POST['usename'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $updated_at= date('Y-m-d H:i:s');
  
    $queryUpdate = "UPDATE users SET usename = '$usename', email= '$email', password='$password', updated_at= '$updated_at' where id='$id'";

    if(mysqli_query($conn,$queryUpdate)){
        // đóng kết nối
          mysqli_close($conn);
          // sau khi cập nhật thì phải điều hướng về trang danh sách 
          header('location:index.php');
      }else{
        echo "error:".$queryInsert."<br>".mysqli_error($conn);
      }
    
  }
    ?>
