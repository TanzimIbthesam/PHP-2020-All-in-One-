<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="name" id=""><br>
        <input type="submit" name="submit" value="SEND"><br>
        <?php
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            echo $name;
        }



        ?>
    </form>
</body>

</html>