<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="cont-Cont-us">
      <h1>Contact Us</h1>
      <?php
      if(isset($_GET["error"])) {//If there is an error on sendEmail.php we will print this.
           if($_GET["error"] == "error"){//We will take the information from the URL.
             echo "<p id='error'> The message wasn't sent </p>";
           }
           else if ($_GET["error"] == "none"){
             echo "<p id='none'> The message was sent </p>";
             //header( "refresh:5;url=wherever.php" ); if the email was sent send the user to the page you like.
           }
         }

      ?>
      <div class="input-cont">
    <form method="post" action="sendEmail.php" name="myForm">
      <!--Name and Email-->
      <div class="input-group">
        <span class="input-group-text">Name and Email</span>
        <input type="text" aria-label="First name" class="form-control" name="name">
        <input type="text" aria-label="Last name" class="form-control"  name="Email">
      </div>
      <!--Message-->
      <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="Message"></textarea>
        <label for="floatingTextarea2">Comments</label>
      </div>
      <button type="submit" name="nameSubmit" class="btn btn-outline-dark position-absolute end-0 ">Send</button>
      <br>
    </form>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
