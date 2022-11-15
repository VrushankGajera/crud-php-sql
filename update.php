<?php include 'conn.php'; 

$id =$_GET['id'];
$select = "SELECT * FROM user WHERE id='$id'";
$data = mysqli_query($con,$select);
$row=mysqli_fetch_array($data);

?>

<div>
    <form action="#" method="POST">
      
      User Name: <input value="<?php echo $row['username']?>" type="text" name="uname" id="unm" ><br><br>
      Email ID: <input value="<?php echo $row['email']?>" type="text" name="emaill" id="emailid" ><br><br>
      Age: <input value="<?php echo $row['age']?>" type="text" name="age" id="agg"><br><br>

      <input type="submit" name="up_btn" id="sub" value="Update">
        <button><a href="view.php" style="color:black; text-decoration: none;">Back</a></button>
    </form>
    </div>

    <?php
    
    if(isset($_POST['up_btn'])){
       
        $uname = $_POST['uname'];
        $email = $_POST['emaill'];
        $age = $_POST['age'];

        $update = "UPDATE user SET username='$uname' , email='$email', age='$age' WHERE id='$id' ";

        $data = mysqli_query($con, $update);

        if($data){
            ?>
            <script>
                alert("Data Updated Successfully...");
                window.open("http://localhost/demo/view.php", " _self");
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

