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
    .table {
        border-radius: 12px;
        direction: rtl;
        text-align: center;
        margin-top: 20px;
    }
    input {
        border-radius: 12px!important;
        font-size: 18px!important;
        margin: 5px;
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
    
<?php
require_once('database.php');

if(isset($_POST['zedakrn'])) {

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_date = $_POST['product_date'];

$sql = "INSERT INTO mazaxtn (product_name, product_price, product_date) VALUES ('$product_name', '$product_price', '$product_date') ";
if(mysqli_query($connect, $sql) === TRUE) {
    echo "<h5 class='w-50' style='margin: auto;text-align:center;background-color:rgb(28, 226, 160);border-radius:12px;padding:10px;font-weight:900'>بەلێ مەزاختیێ تە هاتە زێدەکرن</h5><br>";
} else {
    echo "نەهاتە زێدەکرن خەلەتیەک هەبوو";
}


}

?>

    <form method="POST" style="direction: rtl;" class="form-inline d-flex justify-content-center">

        <input name="product_name" type="text" class="form-control mb-2" placeholder="ناڤێ بەرهەمی">
        <input name="product_price" type="text" class="form-control mb-2" placeholder="بها">
        <input name="product_date" type="text" class="form-control mb-2" placeholder="مێژوویا کرینێ">
        <input name="zedakrn" type="submit" class="btn btn-primary mb-2" value="زێدەکرن" style="background-color: rgb(28, 226, 160);border-color: rgb(28, 226, 160);color: black;">

      </form>


<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th style="color: rgb(28, 226, 160);" scope="col">ئای دی</th>
      <th style="color: rgb(28, 226, 160);" scope="col">ناڤێ بەرهەمی</th>
      <th style="color: rgb(28, 226, 160);" scope="col">بها</th>
      <th style="color: rgb(28, 226, 160);" scope="col">مێژوویا کرینێ</th>
    </tr>
  </thead>
  <tbody>

  <?php
require_once('database.php');
$sql = "SELECT * FROM mazaxtn";
$anjam = mysqli_query($connect, $sql);
while($mazaxti = mysqli_fetch_assoc($anjam)) {
?>

    <tr>
      <th><?php echo $mazaxti['id'];  ?></th>
      <td><?php echo $mazaxti['product_name'];  ?></td>
      <td><?php echo number_format($mazaxti['product_price']);  ?></td>
      <td><?php echo $mazaxti['product_date'];  ?></td>
    </tr>

<?php
}
?>

  </tbody>
</table>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>