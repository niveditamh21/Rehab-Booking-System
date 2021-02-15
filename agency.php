<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agency</title>

    <link
     rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
     crossorigin="anonymous"
     />
     <script 
       src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
       integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
    </script>
     <script 
       src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
       integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
       crossorigin="anonymous">
    </script>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" 
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" 
        crossorigin="anonymous">
    </script>
    <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}
    </style>


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container" class="rounded-circle">
             <a class="navbar-brand"
             href="treatment.html">
             <img src=""  alt="logo" class="container d-flux justify-content-center"/>
             
           </a>
         <button 
           class="navbar-toggler" 
           type="button" data-toggle="collapse" 
           data-target="#navbarNav" 
           aria-controls="navbarNav" 
           aria-expanded="false" 
           aria-label="Toggle navigation">
           <span 
             class="navbar-toggler-icon">
           </span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item ">
             
              <a style="font-family:Times new roman;"class="nav-link" href="home.html"><h2 class="h1">Home</h2></a>
            </li>
            </ul>
         </div>
         
       </div> 
      </nav> 

      
        <?php
        $con=new mysqli("localhost","root","root","drug database",'3307');
 
        // Check connection
        if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $sql = "select * from agency";
        $result = $con->query($sql);


        if ($result->num_rows > 0) {
          echo "<table><tr><th>Country</th><th>Games</th><th>City</th><th>Laboratory Head</th><th>Address</th><th>Substance Doped</th><tr>";
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>" .$row["Country"]. " " . "</td><td>" . $row["Games"]. " " . "</td><td>" . $row["City"]. " " . "</td><td>" . $row["Lab_Head"]. " " . "</td><td>" . $row["Address"]. "</td><td>" . $row["doping"]. "</td></tr>";
          }
            echo "</table>";
        } else {
            echo "0 results";
           
          }
          $con->close();
          
          ?> 
            
         
      

</body>
</html>