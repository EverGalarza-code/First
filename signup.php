<?php

require 'includes/header.php';

    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coding II Test</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


    <main>
      <div class="wrapper-main">
        <section class="section-default">
            <h1>Signup</h1>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p>Fill in all fields!</p>';
                }
                else if ($_GET["error"] == "invaliduidmail") {
                    echo '<p>Invalid username and e-mail!</p>';
                }
                else if ($_GET["error"] == "invaliduid") {
                    echo '<p>Invalid username</p>';
                }
                else if ($_GET["error"] == "invalidmail") {
                    echo '<p>Invalid e-mail!</p>';
                }
                else if ($_GET["error"] == "passwordcheck") {
                    echo '<p>Your passwords do not match!</p>';
                }
                else if ($_GET["error"] == "usertaken") {
                    echo '<p>Username is already taken!</p>';
                }
            }
            else if ($_GET["signup"] == "success") {
                echo '<p>Signup successful!</p>';
            }
            ?>
            <form class="form-signup" action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="username">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="password">
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                <button type="submit" name="signup-submit">Signup</button>
            </form>
        </section>
      </div>
    </main>

    <?php
    require "footer.php"
    ?>
  </body>
</html>