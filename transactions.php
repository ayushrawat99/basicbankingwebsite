<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body style=" background-image: radial-gradient(circle at bottom center, rgb(157, 48, 205) 0%, rgb(157, 48, 205) 4%,rgb(132, 41, 173) 4%, rgb(132, 41, 173) 8%,rgb(107, 35, 141) 8%, rgb(107, 35, 141) 12%,rgb(83, 28, 109) 12%, rgb(83, 28, 109) 16%,rgb(58, 21, 76) 16%, rgb(58, 21, 76) 20%,rgb(33, 15, 44) 20%, rgb(33, 15, 44) 24%,transparent 24%, transparent 100%),radial-gradient(circle at top center, rgb(157, 48, 205) 0%, rgb(157, 48, 205) 3%,rgb(132, 41, 173) 3%, rgb(132, 41, 173) 9%,rgb(107, 35, 141) 9%, rgb(107, 35, 141) 12%,rgb(83, 28, 109) 12%, rgb(83, 28, 109) 15%,rgb(58, 21, 76) 15%, rgb(58, 21, 76) 18%,rgb(33, 15, 44) 18%, rgb(33, 15, 44) 21%,transparent 21%, transparent 100%),radial-gradient(circle at top right, rgb(157, 48, 205) 0%, rgb(157, 48, 205) 3%,rgb(132, 41, 173) 3%, rgb(132, 41, 173) 9%,rgb(107, 35, 141) 9%, rgb(107, 35, 141) 12%,rgb(83, 28, 109) 12%, rgb(83, 28, 109) 15%,rgb(58, 21, 76) 15%, rgb(58, 21, 76) 18%,rgb(33, 15, 44) 18%, rgb(33, 15, 44) 21%,transparent 21%, transparent 100%),radial-gradient(circle at top left, rgb(157, 48, 205) 0%, rgb(157, 48, 205) 3%,rgb(132, 41, 173) 3%, rgb(132, 41, 173) 9%,rgb(107, 35, 141) 9%, rgb(107, 35, 141) 12%,rgb(83, 28, 109) 12%, rgb(83, 28, 109) 15%,rgb(58, 21, 76) 15%, rgb(58, 21, 76) 18%,rgb(33, 15, 44) 18%, rgb(33, 15, 44) 21%,transparent 21%, transparent 100%),radial-gradient(circle at bottom right, rgb(157, 48, 205) 0%, rgb(157, 48, 205) 3%,rgb(132, 41, 173) 3%, rgb(132, 41, 173) 9%,rgb(107, 35, 141) 9%, rgb(107, 35, 141) 12%,rgb(83, 28, 109) 12%, rgb(83, 28, 109) 15%,rgb(58, 21, 76) 15%, rgb(58, 21, 76) 18%,rgb(33, 15, 44) 18%, rgb(33, 15, 44) 21%,transparent 21%, transparent 100%),radial-gradient(circle at bottom left, rgb(157, 48, 205) 0%, rgb(157, 48, 205) 3%,rgb(132, 41, 173) 3%, rgb(132, 41, 173) 9%,rgb(107, 35, 141) 9%, rgb(107, 35, 141) 12%,rgb(83, 28, 109) 12%, rgb(83, 28, 109) 15%,rgb(58, 21, 76) 15%, rgb(58, 21, 76) 18%,rgb(33, 15, 44) 18%, rgb(33, 15, 44) 21%,rgb(8, 8, 12) 21%, rgb(8, 8, 12) 100%);;">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Z Bank  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="customers.php">Our Customers</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://www.xe.com/currencyconverter/convert/?Amount=20&From=INR&To=EUR">Currency Convertor </a>
        </li>
        
</div>


      </ul>
      
    </div>
  </div>
</nav>



	<div class="container">
        <h2 class="text-center pt-4" style="color : white;">Transfer History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : white;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : white;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer class="text-center mt-5 py-2">
            <p>&copy 2021 <b>Ayush Rawat</b> <br> Z Foundation</p>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>