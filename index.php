<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<body>
<table>
  <tr>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>APELLIDO</th>
  </tr>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cursodb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname  );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT * FROM datospersonales;";
$resultado = $conn->query($sql);
// validación para mostrar los datos

    // hay información que mostrar
    /*
    foreach($resultado as $key => $row){
        echo "<hr> id asociado: " . $row["ID"] . ", NOMBRE: " . $row["NOMBRE"] . ", APELLIDO: " . $row["APELLIDO"] . "<hr>";
    }
    */
    
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["NOMBRE"] . "</td> <td> " . $row["APELLIDO"] . "</td> </tr> ";
    }
    


$conn->close();
?>

</table>


</body>

</html>