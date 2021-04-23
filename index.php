<?php
session_start();

if(isset($_SESSION['unique_id'])){ 
    header("location: user.php");
}

?>

<?php include "header.php" ?>
<body>

    <div class="wrapper">
        <section class="form signup">
            <header>Real Time Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" required>
                    </div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label for="">Select an Image</label>
                        <input type="file" name="image">
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat" name="submit">
                    </div>
                </div>
            </form>
            <div class="link">Already singed up?<a href="login.php">Login Now</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>
    
</body>
</html>