<?php
$settings = "../../settings.php";
require($settings);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | <?php echo constant("JSONWebsite"); ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body id="login">
    <div class="container">
        <div class="small-box">
            <h1>Login</h1>
            <form action="loginaction.php" method="post">
                <div class="form-row d-flex justify-content-center">
                    <div class="col-md-6 mb-3 ">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-row d-flex justify-content-center">
                    <div class="col-md-6 mb-3 ">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>