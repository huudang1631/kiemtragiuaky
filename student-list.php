<?php
require ("./students.php");
$students = getAllStudents();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Danh sach sinh vien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <h2>
        <?php
             echo "Chao mung  : " . $_SESSION["username"] ;
        ?>
        </h2>
        <br>
        <h3>      
        <a href="student-add.php">Them</a>
        </h3> 
        <table border="1" cellpadding="10">
            <tr>
                <td>ID</td>
                <td>Fullname</td>
                <td>Birthday</td>
                <td>Action</td>
            </tr>
           
            
             <?php
             
             //$student = array("ID","Fullname","Birthday","Action");
        foreach ($students as $item) { ?>
            <tr>
                <td> <?php echo $item['student_id']; ?> </td>
                <td>
                    <a href="student-add.php?id=<?php echo $item['student_id']; ?>">
                        <?php echo $item['student_name']; ?>
                    </a>
                </td>

                <td><?php echo $item['student_email']; ?></td>
                <td>
                    <form method="post" action="student-delete.php">
                        <input type="hidden" value="<?php echo $item['student_id']; ?>" name="student_id" />
                        <input onclick="return confirm('ban co muon xoa sinh vien hay khong?');" type="submit" value="delete" name="delete" />
                    </form>
                </td>
            </tr>
        <?php } ?>
        </table>
    </body>
    <footer>

        <h4>Thai Huu Dang - 
            Vu Van Tin - 
            Pham Nguyen Trung Truc
        </h4>
    </footer>
    <style>
     footer {
        text-align: center;
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;   /* Height of the footer */
   background:#6cf;
}
    </style>
</html>