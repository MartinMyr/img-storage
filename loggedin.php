<?php
    session_start();
    if($_SESSION["loggedIn"]!==true){
        header('location: index.php');
    }
    include 'include/header.php';
    include 'include/function.php';
?>


    <form action="include/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submitUpload">Upload Picture</button>
    

    </form>






<?php
    include 'include/footer.php';
?>
