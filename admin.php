<?php
    session_start();
    
?>
<?php
    echo "Chao ban  : " . $_SESSION["username"] ;
    
?>
<br>
<a href="logout.php">Thoat</a>