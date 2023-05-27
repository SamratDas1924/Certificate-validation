<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<body>

    <div class="container my-5 px-5 py-5">
        <div class="card">
            <div class="card-body">

                <?php
                require_once ('../config/config.php');
                 
                $id = $_GET['id'];
                $edit_query = "SELECT * FROM `user` WHERE `user_id` = '$id'";
                

                $res =  mysqli_query($connect, $edit_query);
                while ($row = mysqli_fetch_assoc($res)) {

                ?>


                <form action="update.php" method= "POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="hidden" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['user_id'] ?>" name="uid">
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['name'] ?>" name="uname" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['phone'] ?>" name="uphone" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['email'] ?>" name="uemail" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Certificate No.</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['certificate'] ?>" name="ucertificate" required>
                    </div>
                    <div class="col-auto">
                    <button type="submit" name="submit" class="btn btn-primary mb-3">Submit</button>
                    </div>
                    <div class="col-auto">
                        <a href="index.php" class="btn btn-primary mb-3">Enter Data</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php } ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>