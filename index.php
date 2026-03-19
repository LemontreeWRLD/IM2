<?php
include "views/header.php";
?>    
<html>
    <head>
        <meta charset="UTF-8">
        <title>Socmed patatag</title>
        <link href="../views/res/style.css" rel="stylesheet" type="text/css"/>
        <link href="views/res/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="reg-form">
            <p class="title">REGISTRATION</p>
            <form method="POST" action="models/register_account.php">
                <label for ="email">Email</label>   
                    <input type="email" name="email" placeholder="patatag@gmail.com">
                 <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" placeholder="vinmark">
            <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" placeholder="patatag">
            <label for="password">Password</label>
                <input type="password" name="password" id="password">
            <label for="password">Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword">
            <input type="submit" value="signup">
             </form>
            
        </div>
 
<?php
include "views/footer.php";
    