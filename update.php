
<?php

include 'connect.php';

//Update data into DB
$id = $_GET['updateid'];
$sql="select * from `crud`  where id=$id"; 
$result=mysqli_query( $con, $sql); 
$row=mysqli_fetch_assoc( $result ); 

$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
  $name = $_POST[ "name" ];
  $email = $_POST["email"];
  $mobile = $_POST["mobile"];
  $password = $_POST["password"];

  $sql="UPDATE `crud` set id='$id', name='$name', email='$email', mobile='$mobile', password='$password' where id=$id ";

  $result=mysqli_query($con,$sql);
   if($result){
     echo("Update Success");
   }else{
    die(mysqli_error($con));
   }
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD Operation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your Name"
        value="<?php echo $name; ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Mobile</label>
        <input type="text" class="form-control" name="mobile" placeholder="Enter your Mobile Number"
        value="<?php echo $mobile; ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Enter your Email"
        value="<?php echo $email; ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Passsword</label>
        <input type="password" class="form-control" name="password" placeholder="Enter your Password"
        value=" <?php echo $password; ?>">
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Update</button>
      <button class="btn btn-info"><a href="display.php" style="text-decoration: none;" class="text-light">Inserted</a></button>
    </form>
  </div>
</body>

</html>