
<?php
if (isset($_POST['c'])) {
    $SERVER = "localhost";
    $username = "root";
    $password = "";
    $database = "gym"; 

    $conn = mysqli_connect($SERVER, $username, $password, $database);

    if($conn->connect_error)
     {
        die("Connection failed: " . mysqli_connect_error());
    }
  else{
            $name = $_POST["name"];
            $number = $_POST["number"];

            $sql = "INSERT INTO gym(name, number) VALUES ('$name', '$number')";

                if ($conn->query($sql)===TRUE)
                {
                    echo "Thank you, $name. Your mobile number $number has been submitted successfully.";
                } 
                else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                   }
         
            $conn->close();
        }
    }
?>

