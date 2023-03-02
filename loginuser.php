<?php 
 
include 'connect.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: clientarea.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM tbl_cu WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['status']== 0)
        {
            header("Location: loginuser.php");
            exit;
        }
        
        $_SESSION['username'] = $row['username'];
        $_SESSION['noHp'] = $row['no_hp'];
        header("Location: clientarea.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     
    <link rel="icon" type="iammges/x-icon" href="images/x-icon.ico">

    <link rel="stylesheet" type="text/css" href="loginstyle.css">
 
    <title>Client Area | Login</title>
</head>
<body>
    <!-- <div class="alert alert-warning" role="alert"> 
        <?php echo $_SESSION['error']?>
    </div>-->
 
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <p class="login-register-text ps-2">Lost Your Password? <a href="reset.php" class="ps-4">Reset Password</a></p>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text ps-2">Don't have an account? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>