<!-- 
Jeffrey Martinez
Module 8 Assignment
February 10, 2023
Instructions:
For this assignment, the database you will use is baseball_01. The database ID you will use to log in is student1 and the password is pass.
The table you create and populate is to focus on a topic that interests you. Using MySQLi, write PHP programs (4 total) to create and populate 
a DB table to be used in Module 9. You will need PHP scripts to: 
- Create your table
- Drop your table
- Populate your table
- Query to test your table
Title the PHP files similar to CreateTable.php. Examples:
JohnCreateTable.php
SueDropTable.php
LarryPopulateTable.php
TomQueryTable.php
Etc.
Your table is to have a minimum of 5 fields, with more than one data type.
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 8 Assignment- Jeffrey Martinez</title>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "student1";
    $password = "pass";
    $dbname = "baseball_01";

    // Making the Connection to the database using MYSQLi Object-Oriented
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Objective 3: Query the data from the table
    $sql = "SELECT id, firstname, lastname FROM players;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    ?>
</body>

</html>