<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" media="all" href="style.css" />
</head>
<body> 
<?php include 'header.php'; ?>
<section id="signup-container">
    <div>
        <h1> Sign up for free </h1>
    </div>
    <div class ="signupa">
        <input type="text" class ="texta" placeholder="First Name" required>
        <input type="text" class ="texta" placeholder="Last Name" required>
    </div>
    <div class="signupb">
    <input type="Email" class ="textb" placeholder="xyz@xyz.com" required>
    <input type="Password" class ="textb" placeholder="Password" required>
    <input type="Password" class ="textb" placeholder="Confirm Password" required>
    <span> <input type="checkbox"> I accept the terms of use & privacy policy.</span>
    <span><button type="submit"> Signup</button></span>
    <h4> Already have an account? <a href="signin.php">Login Here</a></h4>
</div>
</section>
<?php include 'footer.php'; ?>
</body>
</html>