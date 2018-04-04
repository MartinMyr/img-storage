<?php
    session_start();
    if($_SESSION["loggedIn"]!==true){
        header('location: index.php');
    }
    include 'include/header.php';
    include 'include/function.php';
?>


    <form>
    

    </form>






<?php
    include 'include/footer.php';
?>
