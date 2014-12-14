<!DOCTYPE html>
<html>
    <head>
            <title>hello!</title>
            <meta charset="UTF-8">
    </head>
    <body>
            <h1>Hello, <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?></h1>
            <footer>
                 <a href="/">return to HOME</a>
            </footer>
    </body>
</html>
