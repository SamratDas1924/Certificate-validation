<?php
require_once('../config/config.php');


$name1 = "";
$phone1 = "";
$emai1 = "";
$certificate1 = "";


$name1error = "";
$phone1error = "";
$email1error = "";
$certificate1error = "";
$certificate2error = "";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $certificate = $_POST['certificate'];

    if (empty($_POST['name'])) {
        $name1error = "Name is required";
    } else {
        $name1 = $_POST['name'];
    }

    if (empty($_POST['phone'])) {
        $phone1error = "Contact number is required";
    } else {
        $phone1 = $_POST['phone'];
    }

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

    if ( !empty($_POST['certificate'])) {
        $check_query = "SELECT * FROM `user` WHERE `certificate` = '$certificate' ";

        $result2 = mysqli_query($connect, $check_query);
    $row = mysqli_num_rows($result2);
    if ($row > 0) {
        $certificate2error = "This certificate number is already existed, Please enter a unique certificate number";
    }  else { 
    (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['certificate']));

        $creat_query = "INSERT INTO `user`(`name`, `phone`, `email`, `certificate`) VALUES ('$name','$phone','$email','$certificate')";

        $result = mysqli_query($connect, $creat_query);

        header("location: view.php");

    }
}
        

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

<body>
    <div class="container my-5 px-5 py-5">
        <div class="card">
            <div class="card-body mx-5 px-5">
                <div class="text-center">
                    <h2 class="">Certificate Details</h2>
                </div>

                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Your Name * :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Name" name="name">
                        <div id="emailHelp" class="form-text"><?php echo $name1error ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Contact No. * :</label>

                        <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Enter Contact No." name="phone">
                        <div id="emailHelp" class="form-text"><?php echo $phone1error ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Your Email * :</label>

                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email" name="email">
                        <div id="emailHelp" class="form-text"><?php echo $email1error ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Certificate Number * :</label>

                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Certificate Number" name="certificate">
                        <div id="emailHelp" class="form-text"><?php echo $certificate1error ?></div>
                        <div id="emailHelp" class="form-text"><?php echo $certificate2error ?></div>
                    </div>
                        <div class="text-center mb-3">
                            <button class="btn btn-primary" name="submit">Submit</button>
                        </div>
                        <div class="text-center mb-3">
                            <a href="view.php" class="btn btn-primary mb-3">View Page</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>