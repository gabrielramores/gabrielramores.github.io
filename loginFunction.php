<?php
  include "include/connection.php";
  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password)){
      $loginQuery="SELECT * FROM usermtrpl WHERE userName = '$username' AND userPass = '$password'";
      $loginResult = mysqli_query($conn, $loginQuery);

      if(mysqli_num_rows($loginResult) == 1){
        while($userRow = mysqli_fetch_assoc($loginResult)){
          $userAccountType = $userRow['UserType'];
          $accountID = $userRow['userID'];
      }
        if($userAccountType == 2){
          header("location: user/driverHome.php");
        }
        else if($userAccountType == 1){
          header("location: admin/adminHome.php?");
        }
      }
      else{
        header("location: index.php?error=Incorrect username or password");
      }
    }
    elseif (empty($username) || empty($password)) {
      header("location: index.php?warning=Invalid username or password");
    }
  }
?>


