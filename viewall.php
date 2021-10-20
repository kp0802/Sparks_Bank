<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Transaction</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/style1.css">
        <link rel="stylesheet" href="CSS/table.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <style type="button">
            button:focus {
            outline: none !important;
            }
        </style>
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
                    <li><a href="history.php">TRANSACTION HISTORY</a></li>
                    
                </ul>
            </nav>
        </header>
        <?php
            include 'dbconnection.php';
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn,$sql);
        ?>
        <div align="center"> 
        <h2 class="text-center pt-4" style="font-weight:bold;">CUSTOMER DETAILS</h2>  
    <table class="content-table">
        <thead>
          <tr>
            <th scope="col" class="text-center py-2">C.NO</th>
            <th scope="col" class="text-center py-2">NAME</th>
            <th scope="col" class="text-center py-2">E-MAIL</th>
            <th scope="col" class="text-center py-2">PHONE</th>
            <th scope="col" class="text-center py-2">BALANCE</th>
            <th scope="col" class="text-center py-2">OPERATION  </th>
          </tr>
        </thead>
        <tbody>
        <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="text-center py-2"><?php echo $rows['id'] ?></td>
                        <td class="text-center py-2"><?php echo $rows['name']?></td>
                        <td class="text-center py-2"><?php echo $rows['email']?></td>
                        <td class="text-center py-2"><?php echo $rows['phone']?></td>
                        <td class="text-center py-2">₹<?php echo $rows['balance']?></td>
                        <div class="message-wrapper">
                           <div class="container">
                           <td class="text-center"><a href="transfer.php?id= <?php echo $rows['id'] ;?>"> <span class="btn message" style="color:white;">TRANSFER</span></a></td>
                           </div>
                       </div>
                       
                   </tr>
                <?php
                    }
                ?>
        </tbody>
      </table>
    </div>
    </body>
</html>