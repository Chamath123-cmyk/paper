<?php
    include_once 'header.php';
?>
    <div class="form">
       <h1>Develop express</h1> 
    <form action="includes/login.inc.php" method="post">
        <input type="text" id="fname" name="firstname" placeholder="Name">
        <input type="email" id="fname" name="firstname" placeholder="Email">
        <input type="text" id="fname" name="firstname" placeholder="Username">
        <input type="password" id="lname" name="lastname" placeholder="Password">
        <input type="password" id="lname" name="lastname" placeholder="Repeat Password">
        <button name="submit" type="submit"> Login</button>
    </form>

    <p>Already have and account? <br>
    <a href="login.php">Log in.</a></p>
    </div>


<?php
    include_once 'footer.php';
?>