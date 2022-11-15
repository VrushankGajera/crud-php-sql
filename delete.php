<?php include 'conn.php'; 

$id= $_GET['id'];

$query = "DELETE FROM user WHERE id='$id' ";

$data=mysqli_query($con,$query);

if ($data){
    ?>
    <script>
        alert("Data Deleted Successfully...");
        window.open("http://localhost/demo/view.php", " _self");
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("Please Try Again");
    </script>
    <?php
}

?>