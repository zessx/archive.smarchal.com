<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Archives — smarchal.com</title>
    <style>
    html {
        overflow:  hidden;
    }
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: Arial;
        white-space: nowrap;
        line-height: 26px;
        background: #222;
        height: 100vh;
    }
    ul {
        display: flex;
        align-items: center;
        justify-content: center;
        list-style-type: none;
    }
    a {
        display: inline-block;
        text-decoration: none;
        color: #222;
        background: #eee;
        padding: 0.5em 1em;
        margin: 0.5em;
        box-shadow: inset 0 0 0 3px #222;
        transition: box-shadow 0.2s;
    }
    a:hover,
    a:focus {
        box-shadow: inset 0 0 0 0 #222;
        outline: none;
    }
    </style>
</head>
<body>
    <ul>
    <?php
    $versions = array_diff(scandir(__DIR__), array('.', '..', 'index.php'));
    foreach ($versions as $version) {
        if (is_dir($version)) {
            printf('<li><a href="/%s">%s</a></li>', $version, $version);
        }
    }
    ?>
    </ul>
</body>
</html>