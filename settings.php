<?php
    $settingsLocation = "./settings.json";
    if (is_readable($settingsLocation)) {{
        $settingsJsonRaw = file_get_contents($settingsLocation);
        $settingsJson = json_decode($settingsJsonRaw, true);
    }}

    if (isset($settingsJson['name'])) {
        $JSONWebsite = $settingsJson['name'];
        define("JSONWebsite", $settingsJson['name']);
        constant("JSONWebsite");
    } else {
        $JSONWebsite = "Missing";
        define("JSONWebsite", 'Missing');
    }
    if (isset($settingsJson['description'])) {
        $JSONDescription = $settingsJson['description'];
        define("JSONDescription", $settingsJson['description']);
    } else {
        $JSONDescription = "Missing";
        define("JSONDescription", 'Missing');
    }
    
    /*echo($settingsJson['name']);
    echo($settingsJson['description']);*/
?>