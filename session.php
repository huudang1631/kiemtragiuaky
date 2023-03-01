<?php
    session_start();  
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
    <h2>Đăng Nhập</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
        <div class="input-form">
            <span>Tên Người Dùng</span>
            <input type="text" name="username">
        </div>
        <div class="input-form">
            <span>Mật Khẩu</span>
            <input type="password" name="password">
        </div>
    
        <div class="input-form">
            <input type="submit" name = "login" value="Dang nhap">
        </div>               
    </form>
</head>
<body>
    <?php                
        if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {	
            $tk= $_POST['username'];
            $mk = $_POST['password'];			
            if ($tk == 'nhom12' && $mk == '123') 
            {              
            $_SESSION['username'] = $tk;                
                header('location:student-list.php');
            }
            else {
            echo "sai ten tk hoac mk";
            }
        }
    ?>
	
</body>

  
</html>