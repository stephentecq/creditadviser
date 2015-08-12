<?php
/**
 * Created by PhpStorm.
 * User: Celine
 * Date: 8/11/15
 * Time: 11:43 PM
 */
?>

<fieldset><legend>Login</legend>
    <p>Already a member? Login here!</p>
    <form id="login" method="post" action="index.php">
        <input type="username" name="username" placeholder="Please enter your username"/>
        <input type="emai" name="email" placeholder="Please enter your email"/>
        <input type="password" name="password" placeholder="Please enter your password"/>
        <input type="submit" name="submit" value="login"/>
    </form>
</fieldset>


<fieldset><legend>Register</legend>
    <form id="register" method="post" action="index.php">
        <p>Not yet a member? Register here!</p>
        <input type="username" name="username" placeholder="Please enter your username"/>
        <input type="emai" name="email" placeholder="Please enter your email"/>
        <input type="password" name="password" placeholder="Please enter your password"/>
        <input type="password" name="password" placeholder="Please confirm your password"/>
        <input type="submit" name="submit" value="Register"/>
    </form>
</fieldset>
