<?php
$checked =$_POST['agree'];

if(isset($checked)){
    require('../required/dbConnect.php');
    if(isset($_POST['submit'])){ 
    $query = $conn->query("select * from students where student_id == '$name';");
    $applicants=[];
    while($row = $query->fetch_assoc()){
    $applicants += [$row['regNumber']=>$row['firstname'].' '.$row['surname']];
    }
        echo "<script>console.log('added',<?php echo $name ?>)";
        header('location:../../front-end/pages/studentPortal.html');
        exit();
    }
    $conn->close();
}