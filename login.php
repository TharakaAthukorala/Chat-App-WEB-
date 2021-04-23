<?php
session_start();

if(isset($_SESSION['unique_id'])){ 
    header("location: user.php");
}

?>

<?php include "header.php" ?>
<body>

    <div class="wrapper">
        <section class="form login">
            <header>Real Time Chat App</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">Enter Email</label>
                        <input type="text" name="email">
                    </div>
                    <div class="field input">
                        <label for="">Enter Password</label>
                        <input type="password" name="password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                </div>
            </form>
            <div class="link">Not yet singed up? <a href="index.php">Signup Now</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>
    
</body>
</html>