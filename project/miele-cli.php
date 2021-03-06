<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/projects.css">
    <title>OMFJ - Miele CLI</title>
</head>
<body>
    <div class="main">
        <h1>Miele Logic CLI</h1>
        <?php include "../include/nav.php"; ?>
        <div class="project-info">
            <p>
                A program that uses the Miele Logic API (kind, uses curl idk) to check the progress of the dryers and washers at my student complex.
            </p>
            <p>
                <b>Please note.</b>
                The authorization header is removed. You have to add your own if you want to use the program.
            </p>
            <p>
                <b>Example output:</b>
                <img src="../images/miele-example.png" alt="Output from Miele in terminal">
            <p>
                <a class="take-a-look" href="https://github.com/omfj/miele-cli">Download</a>
            </p>
        </div>
    </div>
</body>
</html>