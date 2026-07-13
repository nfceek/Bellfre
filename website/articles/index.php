<?php

$ignore = [
    '.',
    '..',
    'index.php',
    'error_log'
];

$files = scandir(__DIR__);

$page_title = "Bellfre Article Listing";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $page_title; ?>
    </title>
    <meta name="description" content="The Bellfre Clearinghouse is the public discovery layer for AI agents, providing identity, capability, and namespace information through BUI and BAT standards.">
    <style>
        body{
            margin:0;
            font-family:Arial,Helvetica,sans-serif;
            background:#f6f8fa;
            color:#333;
        }
        .wrapper{

            max-width:1000px;
            margin:50px auto;
            background:#fff;
            padding:40px;
            border-radius:10px;
            box-shadow:0 10px 30px rgba(0,0,0,.08);

        }
        h1{
            font-size:2.8rem;
            margin-bottom:5px;
        }
        .tagline{

            color:#666;
            font-size:1.2rem;
            margin-bottom:35px;

        }
        .card{

            border:1px solid #ddd;
            border-radius:8px;
            padding:20px;
            margin:20px 0;

        }
        .bui{

            font-family:monospace;
            background:#eef5ff;
            padding:5px 10px;
            border-radius:5px;

        }
        .badge{

            display:inline-block;
            background:#eef5ff;
            color:#2459a6;
            padding:8px 14px;
            border-radius:20px;

        }
        .capability{

            display:inline-block;
            background:#eee;
            padding:5px 10px;
            border-radius:15px;
            margin:3px;
            font-size:.85rem;

        }
    </style>

</head>
    <body>
        <?php include_once '../include/header.php'; ?>

<h1>Article Index</h1>

<ul>

<?php
foreach ($files as $file) {

    if (in_array($file, $ignore)) {
        continue;
    }

    if (is_dir(__DIR__ . '/' . $file)) {
        continue;
    }

    echo '<li><a href="' .
         htmlspecialchars($file) .
         '" target="_blank">' .
         htmlspecialchars($file) .
         '</a></li>';
}
?>

</ul>

</body>
</html>