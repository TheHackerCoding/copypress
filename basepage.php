<?php
$settings = "./settings.php";
require($settings);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo constant("JSONWebsite"); ?></title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <div class="header">
        <div class="container">
            <h1 class="container"><?php echo constant("JSONWebsite")?></h1>
            <a href="./assets/lib/login.php">Login</a>
        </div>
    </div>
    <div class="header-bottom">
        <h2><?php echo constant("JSONDescription")?></h2>
    </div>

    <h3 class="text-center" style="padding-top: 1.2em; padding-bottom: 4em">Welcome!</h3>
    <div class="container-fluid" style="margin: 0 auto;">
        <div class="row">
            <div class="col-sm-4 d-flex justify-content-center"><img src="https://picsum.photos/300"
                    alt="Random placeholder"></div>
            <div class="col-sm-8 text-center">
                <h5>Lorem ipsum</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Commodo quis imperdiet massa tincidunt nunc pulvinar sapien et ligula. Enim
                    blandit volutpat maecenas volutpat blandit aliquam etiam. Nisi vitae suscipit tellus mauris a diam
                    maecenas sed enim. In aliquam sem fringilla ut morbi tincidunt augue. Varius duis at consectetur
                    lorem donec. Nisi vitae suscipit tellus mauris a diam maecenas sed enim. Maecenas pharetra convallis
                    posuere morbi. Viverra vitae congue eu consequat ac felis donec et. Elit at imperdiet dui accumsan
                    sit amet nulla. Augue lacus viverra vitae congue eu. Magna etiam tempor orci eu lobortis elementum
                    nibh tellus molestie. Quisque egestas diam in arcu cursus euismod quis. Etiam erat velit scelerisque
                    in dictum non consectetur a erat. Eget velit aliquet sagittis id consectetur purus ut faucibus
                    pulvinar.</p>
            </div>
        </div>
    </div>
    <p class="spacer"> </p>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>