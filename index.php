<?php
    include 'include/function.php';
    if($_SESSION["loggedIn"]==true){
        header('location: loggedin.php');
    }
    include 'include/header.php';

?>
<h1 class="headerText">BildBanken</h1>
<form action="loggedin.php" id="postBox" method="post">
    <div class="inputwrapper">
        <i class="fas fa-user"></i>
        <input class="login" placeholder="Användarnamn" name="user" type="text">
    </div>
    <div class="inputwrapper">
        <i class="fas fa-key"></i>
        <input class="login" placeholder="Lösenord" name="password" type="password">
    </div>
    <button class="login" type="submit">Logga in</button>
</form>










<?php
    include 'include/footer.php';
?>