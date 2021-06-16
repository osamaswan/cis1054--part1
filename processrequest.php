//Post method
4)  <?php
        session_start();
        $_SESSION['storeDate'] = date("Y.m.d");
        $_SESSION['storename'] = $_POST["name"];
        $_SESSION['storeage'] = $_POST["age"];
    ?>
        <!DOCTYPE html>
        <html>
           <head>
                <title>Test</title>
          </head>
          <body>
                <form action="readsession.php" method="POST">
                   <input type="text" name="name" placeholder="Your name" required />
                  <input type="number" name="age" placeholder="Your age" required />
                    <input type="submit" value="Submit" />
             </form>
            </body>
        </html>
    ?>
//Get
<?php
        session_start();
        $_SESSION['storeDate'] = date("Y.m.d");
        $_SESSION['storename'] = $_GET["name"];
        $_SESSION['storeage'] = $_GET["age"];
    ?>
        <!DOCTYPE html>
        <html>
           <head>
                <title>Test</title>
          </head>
          <body>
                <form action="readsession.php" method="GET">
                   <input type="text" name="name" placeholder="Your name" required />
                  <input type="number" name="age" placeholder="Your age" required />
                    <input type="submit" value="Submit" />
             </form>
            </body>
        </html>
    ?>
