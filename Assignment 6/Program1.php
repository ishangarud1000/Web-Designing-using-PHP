<DOCTYPE html>
    <html>
        <head>
            <title>Name Form</title>
        </head>
        <body>
            <h2>Enter your name</h2>
            <form method="post" action="">
                <label for="name">Name:</label>
                <input type="text" name="username" required>
                <input type="submit" name="submit" value="Submit">
            </form>
            <?php
            if(isset($_POST['submit'])){
                $name=$_POST['username'];
                echo "<h3> Your name is:" .htmlspecialchars($name)."</h3>";
            }
            ?>
            </body>
            </html>