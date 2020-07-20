<?php
    $settings = "./settings.php";
    if (is_readable($settings)) {
        require($settings);
        $enabled = true;
    } else {
        $enabled = false;
    }
?>
<?php
    if ($enabled = true) {
        include_once("basepage.php");
    }
?>