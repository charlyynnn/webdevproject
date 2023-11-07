
<?php
     include_once("../dbConnection/mysqlconfig_connection.php");
    $query = "SELECT * FROM tblsubjects";
    $result = mysqli_query($dbc, $query);
    // using mysqli_query
 ?>