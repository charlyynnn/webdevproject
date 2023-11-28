<html>
    <head>
        <title>Add Syllabus</title>
    </head>
    <body>

    <?php
    include_once("../dbConnection/mysqlconfig_connection.php");
    if(isset($_POST ['Submit'])){
        $code = $_POST['code'];
        $author = $_POST['author'];
        $subject = $_POST['subject'];
        $subject_id = $_POST['id'];
        $syllabus_code = $_POST['code'];
        $syllabus_author = $_POST['author'];
        if(empty($code) || empty ($author)){
            if(empty($code)){
                echo "<font color='red'>Syllabus Code field is empty</font><br/>";
            }
            if(empty($author)) {
                echo "<font color='red'>Syllabus Author field is empty</font><br/>";
            }
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        }
            else{
                $result = mysqli_query($dbc, "INSERT INTO tblsyllabus VALUES('$subject_id','$syllabus_code','$syllabus_author')");
                echo "<font color='green'>Data added successfully.</font>";
                echo "<br/><a href='../functions/index.php'>View Result</a>";
            }
        }
        ?>
    </body>

