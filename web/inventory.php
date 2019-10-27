<?php
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Inventory | Home Page </title>

        <meta charset="utf-8"/>
        
        <meta name="author" content="Taylor Williams">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    </head>

    <body id="container">
    <?php include 'common/header.php';?>

      <div class="col-12-lg bigHero">
        <img src="img/hero.jpg" alt="hero" class="hero">
      </div>

      <div class="container">
        <h1>Home Page</h1>
        <p>This is a home page of the inventory web application that i am going to make. thank you for coming by.</p>

           <?php $statement = $db->prepare("SELECT id, make, model, vin FROM car");
            $statement->execute();
            // Go through each result
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                // The variable "row" now holds the complete record for that
                // row, and we can access the different values based on their
                // name
                $id = $row['id'];
                $make = $row['make'];
                $model = $row['model'];
                $vin = $row['vin'];
                echo "<div class='row'><div class='col-2'> $id </div> <div class='col-2'> $make </div><div class='col-2'> $model </div> <div class='col-2'> $vin </div></div>";
            }
            ?>
        </div>

      </div>
      <?php include 'common/footer.php';?>
    </body>
</html>