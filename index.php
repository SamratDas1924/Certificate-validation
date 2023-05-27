<?php

$emai1 = "";
$certificate1 = "";

$email1error = "";
$certificate1error = "";


if (empty($_POST['email'])) {
    $email1error = "Email is required";
} else {
    $email1 = $_POST['email'];
}

if (empty($_POST['certificate'])) {
    $certificate1error = "Certificate number is required";
} else {
    $certificate1 = $_POST['certificate'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safalya Academy</title>
</head>

<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

<body>

    <?php
    include('header.php');
    ?>

    <div class="main">
        <div class="sub">
            <h1 class="det">Download Certificate</h1>

            <div class="form">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <label for="" class="form-lable">Your Email * :</label>
                    <br>
                    <input type="email" placeholder="Email" class="form-input" name="email">
                    <div id="emailHelp" class="form-text"><?php echo $email1error ?></div>
                    <br>
                    <label for="" class="form-lable">Certificate Number * :</label>
                    <br>
                    <input type="text" placeholder="Certificate Number" class="form-input" name="certificate">
                    <div id="emailHelp" class="form-text"><?php echo $certificate1error ?></div>
                    <center>
                        <button class="submit" name="submit">Submit</button>
                    </center>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>


<?php
require_once('config/config.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $certificate = $_POST['certificate'];



    if (!empty($_POST['email']) && !empty($_POST['certificate'])) {
        $check_query = "SELECT * FROM `user` WHERE `email` = '$email' AND `certificate` = '$certificate' ";

        $result = mysqli_query($connect, $check_query);

        $row = mysqli_num_rows($result);
        if ($row > 0) {
            echo '<script>swal("Great!", "Your certificate has been verified!", "success");</script>';
        } else {
            echo '<script>swal("Oops!", "This certificate is not been valid!", "error");</script>';
        }
    }
}

?>