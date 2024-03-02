<?php
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <button class="btn btn-primary"><a href="index.php" class="text-light" style="text-decoration:none"> Add User </a> </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Si No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM `crud` ";
                $result = mysqli_query($con, $sql);
                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row["id"];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];

                        echo '
                        <tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $mobile . '</td>
                        <td>' . $password . '</td>
                        <td>
                            <button class="btn btn-info"><a href="update.php? updateid='.$id.'" class="text-light" style="text-decoration: none;">Update</a></button>
                            <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light" style="text-decoration: none;">Delete</a></button>
                        </td>
                        </tr>';
                    }
                }
                ?>


            </tbody>
        </table>

    </div>
</body>

</html>