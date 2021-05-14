4)  <?php
session_start();
$showDate = date("Y.m.d");
$_SESSION['storeDate'] = $showDate;
$_SESSION['storename'] = $_POST["name"];
$_SESSION['storeage'] = $_POST["age"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="$name" placeholder="Your name" required />
            <input type="number" name="$age" placeholder="Your age" required />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
?>
