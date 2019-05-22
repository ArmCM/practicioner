<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
    <title>Document</title>
</head>
    <body>
    <?php require 'partials/nav.php'; ?>
        <div>
            <h3>Forms</h3>

            <form action="/names" method="POST">
                <input name="name">

                <button type="submit" value="Submit">submit</button>
            </form>
        </div>
    </body>
</html>