<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سیستەمێ ئونلاین</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
    @font-face {
        font-family: 'rabar';
        src: url('fonts/rabar.woff2') format('woff2'),
            url('fonts/rabar.woff') format('woff');
      
      }
      *{
        font-family: 'rabar'!important;
        direction :rtl!important;
      }
    .container {
        padding-top: 50px;
        padding-left: 100px;
        padding-right: 100px;
        padding-bottom: 100px;
    }
    .nav-link {
        color: black!important;
        background-color: rgb(28, 226, 160);
        border-radius: 12px;
        padding: 4px 12px;
    }
    li {
        margin-right: 10px;
    }
    .bggg {
        background-color:rgb(28, 226, 160);
        border-color:rgb(28, 226, 160);
        color:black;
        border-radius:12px;
    }
    .bggg:hover {
        background-color:rgb(28, 226, 160);
        border-color:rgb(28, 226, 160);  
        color:black;
        font-weight:900;
            }
</style>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a style="color: rgb(28, 226, 160);font-weight: 900;" class="navbar-brand" href="#">سیستەمێ ئونلاین</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="./index.php">دەستپێک</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link" href="./dahat.php">داهات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./zedakrn.php">زێدەکرنا مەزاختنا</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./mazaxtn.php">مەزاختن</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./faida.php">فایدێ گشتی</a>
            </li>
          </ul>
        </div>
      </nav>
      
<div class="container">
    
<div class="card text-center bg-dark" style="border-radius:15px">
  <div class="card-header" style="color:white;font-size:30px;font-weight:900">
داهاتێ تەیێ گشتی
  </div>
  <div class="card-body" style="background-color:#000">
    <h1 class="card-title" style="color:rgb(28, 226, 160)">
    
<?php
require_once('database.php');

$sql = "SELECT SUM(product_price) AS product_price FROM barham";
$anjam = mysqli_query($connect, $sql);
$dahat = mysqli_fetch_assoc($anjam);
echo number_format($dahat['product_price']);

?>

    </h1>
    <a href="./index.php" class="btn btn-primary bggg">زڤرین</a>
  </div>
  <div class="card-footer text-muted">
    تۆ بخێرهاتی
  </div>
</div>

</div>

<div style="color:red;"></div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>