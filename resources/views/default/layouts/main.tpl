<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Say some</title>

    <link rel="shortcut icon" href="src/images/icon.png" type="image/png">
    <!-- CDN STYLES -->
    <link rel="stylesheet" href="http://cdn.foundation5.zurb.com/foundation.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="src/styles/app.css">
</head>
<body>
<!-- HEADER -->
{include file="partials/header.tpl"}

<!-- CONTENT -->
{if isset($templateContent)}
    {include file=$templateContent}
{/if}

<!-- FOOTER -->

<!-- CDN SCRIPTS -->
<script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
<script src="http://cdn.foundation5.zurb.com/foundation.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="src/scripts/app.js"></script>
</body>
</html>