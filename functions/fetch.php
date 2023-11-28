
<?php
     include_once("../dbConnection/mysqlconfig_connection.php");
     SELECT * FROM tblsubjects
     LEFT JOIN tblsyllabus
     ON tblsyllabus.subject_id = tblsubjects.subjectid
 ?>