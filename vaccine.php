<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<style>
table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid black;

}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}

</style>
</head>
<body>
<?php
$con=new mysqli("localhost","root","root","drug database",'3307');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql="select Category,covid_19.vaccine_name,country,transmission_classification,manufacturer,cumulative_cases from drug_varieties,covid_19,updates_on where drug_varieties.Variety_number=updates_on.Variety_number and covid_19.vaccine_name=updates_on.vaccine_name";
$result = $con->query($sql);
if ($result->num_rows > 0) {
        echo "<table><tr><th>Drug Category</th><th>Vaccine Name</th><th>Country</th><th>Transmission Classification</th><th>Manufacturer of Vaccine</th><th>Cumulative Cases";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Category"] . "</td><td>" . $row["vaccine_name"] . "</td><td>" . $row["country"]. "</td><td>" . $row["transmission_classification"]. "</td><td>" . $row["manufacturer"]. "</td><td>" . $row["cumulative_cases"]. "</td></tr>";
    }
    echo "</table>";
}else {
    echo "0 results";
}
$con->close();
?>

<a style="text-align:center;font-size:25px;font-family:Times New Roman;" class="nav-link text-dark" href="covid_19.html"><u>Home</u></a> 
</body>
</html>
