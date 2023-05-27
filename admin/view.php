<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<body>

    <div class="container my-5 px-5 py-5">
        <table class="table">
            <thead class="text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">CONTACT NO.</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">CERTIFICATE NO.</th>
                    <th scope="col" colspan="2">ACTION</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                require_once('../config/config.php');
                $fetch_query = "SELECT * FROM `user`";

                $res = mysqli_query($connect, $fetch_query);
                while ($row = mysqli_fetch_assoc($res)) {
                    echo '<tr>';
                    echo '<td>' . $row['user_id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['phone'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['certificate'] . '</td>';
                    echo  '<td><a href="edit.php?id=' . $row['user_id'] . '" class="btn btn-primary mb-3">Edit</a></td>';
                    echo '<td><a href="delete.php?user-id=' . $row['user_id'] . '" class="btn btn-primary mb-3">Delete</a></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <div class="col-auto">
            <a href="index.php" class="btn btn-primary mb-3">Enter Details</a>
        </div>
    </div>


    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>