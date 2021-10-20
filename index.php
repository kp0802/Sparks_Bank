<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Sparks Bank</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="banner">
        <div class="navbar">
        <img src="images/bank_logo.png" class="logo">
        
        </div>
        <div class="content">
        <h1> Welcome To Sparks Bank </h1>
            <div>
            <button type="button" id="viewbutton"><span></span>View All Customers</button>
            <button type="button" id="myButton"><span></span>Transfer History</button>
            </div>
        </div>
        </div>
    </body>
    <script>
      document.getElementById("viewbutton").onclick = function(){
        window.location.href = "viewall.php";
      };
      document.getElementById("myButton").onclick = function () {
        window.location.href = "history.php";
      };
    </script>

</html>