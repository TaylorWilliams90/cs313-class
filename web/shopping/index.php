<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lets go Shopping</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">DDS Shopping</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/shopping.php">Shopping Cart</a>
      </nav>
      <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Pricing</h1>
      <p class="lead"></p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Super Hero Group</h4>
          </div>
          <div class="card-body">
          <img src="img/super-group.jpg" style="width:100%;">
              <form method="post" action="cart.php">
                <input type="text" name="name" value="Super Hero Group" readonly>
                <input type="text" name="price" value="9.99" readonly>
                <input type="hidden" name="img" value="img/super-group.jpg">
                <input type="submit" class="btn btn-lg btn-block btn-primary" value="Submit" name="Submit">
              </form>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Caption</h4>
          </div>
          <div class="card-body">
          <img src="img/caption.png" style="width:100%;">
          <form method="post" action="cart.php">
                <input type="text" name="name" value="Caption" readonly>
                <input type="text" name="price" value="9.99" readonly>
                <input type="hidden" name="img" value="img/caption.png">
                <input type="submit" class="btn btn-lg btn-block btn-primary" value="Submit" name="Submit">
              </form>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Hulk</h4>
          </div>
          <div class="card-body">
            <img src="img/hulk.png" style="width:100%;">
            <form method="post" action="cart.php">
                <input type="text" name="name" value="Hulk" readonly>
                <input type="text" name="price" value="9.99" readonly>
                <input type="hidden" name="img" value="img/hulk.png">
                <input type="submit" class="btn btn-lg btn-block btn-primary" value="Submit" name="Submit">
              </form>
          </div>
        </div>
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>

          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>

          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
          </div>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
