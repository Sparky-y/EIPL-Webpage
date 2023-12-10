<?php
if($_SERVER["REQUEST_METHOD"] == "POST" )
{
    include 'conn.php';
    $signup_email = $_POST['signup-email'];
    $signup_password = $_POST['signup-password'];
    $signup_cpassword = $_POST['conf-password'];
    $exists=false;
    if (($signup_password == $signup_cpassword) && $exists == false)
    {
        $sql = "INSERT INTO `users` (`email`, `password`, `date`) 
        VALUES ('$signup_email', '$signup_password', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if ($result)
        {
            echo "<script>alert('Account Successfully Created');</script>";
        } 
    }
    else{
        echo "<script>alert('Passwords do not match');</script>";
    }
}
?>
<script type="text/javascript">
window.location.href = '../../index.html';
</script>
<?php
