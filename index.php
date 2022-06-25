<html>

<head>
    <title>Updation data</title>
</head>

<style>


</style>


<body>

    <center>

        <h1> Update Infornmaion</h1>


        <form action="" method="POST">
            <input type="text" name="id" placeholder="enter id"> <br />
            <input type="text" name="username" placeholder="enter username"> <br />
            <input type="password" name="password" placeholder="enter password"> <br />
            <input type="submit" name="update" Value="Update Data">
        </form>


    </center>

</body>

</html>


<?php

$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'loginpage');

if(isset($_POST['update']))
{

$id= $_POST['id'];
$query="UPDATE `users` SET username='$_POST[username]', password='$_POST[password]' WHERE id='$_POST[id]'" ;
$query_run=mysqli_query($connection,$query);

if($query_run){

    echo '<script type="text/javascript" > alert("data updted") </script>';

}
else

echo '<script type="text/javascript" > alert("data not updted") </script>';
}
?>