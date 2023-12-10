<?php
if($_SERVER["REQUEST_METHOD"] == "POST" )
{
    include 'conn.php';
    $login_email = $_POST['login-email'];
    $login_password = $_POST['login-password'];
    
    $sql = "SELECT * FROM users WHERE email='$login_email' AND password='$login_password' ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num>0)
        {
            echo "<script>alert('Logged In Successfully');</script>"; 
            echo '<a href="../../index.html"> Return to homepage </a>';
        }
        else
        {
            echo "<script>alert('Invalid Credentials');</script>"; 
            echo '<a href="../../index.html"> Return to homepage </a>';
        }
}
