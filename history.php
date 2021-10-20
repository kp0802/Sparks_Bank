<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="CSS/style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/table.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<header>
            <div class="brand-logo">
                <a href="index.php"><img src="images/bank_logo.png" alt="Brand Logo"></a>
            </div>

            <input type="checkbox" id="toggle-btn">
            <label for="toggle-btn" class="show-menu-btn"><i class="fas fa-bars"></i></label>

            <nav>
                <ul class="navigation">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="viewall.php">VIEW ALL CUSTOMERS</a></li>
                    <label for="toggle-btn" class="hide-menu-btn"><i class="fas fa-times"></i></label>
                </ul>
            </nav>
        </header>
<div align="center">
    <h2 class="text-center pt-4" style="font-weight:bold;">TRANSACTION HISTORY</h2>
      <table class="content-table">
        <thead>
            <tr>
                <th class="text-center">FROM</th>
                <th class="text-center">TO</th>
                <th class="text-center">AMOUNT</th>
                <th class="text-center">DATE & TIME</th>
            </tr>
        </thead>
        <tbody>
         <?php

            include 'dbconnection.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
         ?>

            <tr>
              <td class="text-center py-2"><?php echo $rows['sender']; ?></td>
              <td class="text-center py-2"><?php echo $rows['receiver']; ?></td>
              <td class="text-center py-2">₹<?php echo $rows['balance']; ?> </td>
              <td class="text-center py-2"><?php echo $rows['datetime']; ?> </td>  
        <?php
            }

        ?>
        </tbody>
      </table>
  </div>
</body>
</html>