
<?php
     include_once("../dbConnection/mysqlconfig_connection.php");
     $query=
     "SELECT * FROM tblsubjects
     LEFT JOIN tblsyllabus
     ON tblsyllabus.subject_id = tblsubjects.subjectid";
     $result = mysqli_query ($dbc, $query);
 ?>