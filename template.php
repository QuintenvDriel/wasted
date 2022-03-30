<?php
function template_head($page)
{
    echo <<<EOT
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/5b818eb41b.js" crossorigin="anonymous"></script>
    <title>Maatjes | $page</title>
</head>
EOT;
}