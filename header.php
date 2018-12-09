<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arken Zoo</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body id="home">
    <header>
        <h1>My Website</h1>
        <nav>
            <ul>
                <li <?php if($active == 'home') {echo 'class="active"';} ?>><a href="./index.php">HOME</a> </li>
                <li <?php if($active == 'message') {echo 'class="active"';} ?>><a href="./message.php">MESSAGE</a> </li>
                <li <?php if($active == 'content') {echo 'class="active"';} ?>><a href="./content.php">CONTENT</a> </li>
            </ul>
        </nav>
    </header>