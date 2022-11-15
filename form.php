<?php include 'conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div>
    <form action="#" method="POST">
      
     
      User Name: <input type="text" name="uname" id="unm" ><br><br>
      Email ID: <input type="text" name="emaill" id="emailid" ><br><br>
      Age: <input type="text" name="age" id="agg"><br><br>

      <input type="submit" name="submit" id="sub" value="SAVE">
        <button><a href="view.php" style="color:black; text-decoration: none;">VIEW</a></button>
    </form>
    </div>

    <?php
    
    if(isset($_POST['submit'])){
        
        $uname = $_POST['uname'];
        $email = $_POST['emaill'];
        $age = $_POST['age'];

        $query = "INSERT INTO user (username, email, age) VALUES('$uname', '$email' , '$age' )";

        $data = mysqli_query($con, $query);

        if($data){
            ?>
            <script>
                alert("Data Save Successfully...");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Please Try Again!");
            </script>
            <?php
        }

    }

    ?>

</body>
</html>

