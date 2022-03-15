<?php
          $StudentName=$_POST['fname']; 
          $StudentID=$_POST['id'];
          $DegreeProgram=$_POST['text'];
          $Batch=$_POST['Batch'];
         
          echo $StudentName."<br>".$StudentID."<br>".$DegreeProgram."<br>".$Batch."<br>";

         
//database details
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="library";

 $conn= mysqli_connect($servername,$username,$password,$dbname);

 if(!$conn){
    die("not connected".mysqli_connect_error());
}

$sql="INSERT INTO user (firstname,studentid,degreeprogram,batch) VALUES ('$StudentName','$StudentID','$DegreeProgram','$Batch')";

if(mysqli_query($conn,$sql)){
    echo "Data added successfully";
}else{
  echo"Data save error: ".$sql."<br>".mysqli_error($conn);
}
          ?>