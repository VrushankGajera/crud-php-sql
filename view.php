<?php include 'conn.php'; ?>

<a href="form.php">Home</a>


<table border="1" cellpadding="10px" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>Mobile Number</th>
        <th>Email ID</th>
        <th colspan=""2>Actions</th>
    </tr>


    <?php
    
    $query = "SELECT * FROM user";
    $data = mysqli_query($con,$query);

    $result = mysqli_num_rows($data);

    if($result){
       while($row=mysqli_fetch_array($data)){
        ?>

        <tr>
            <td>
                <?php echo $row['username'] ?>
            </td>
            <td>
                <?php echo $row['email'] ?>
            </td>
            <td>
                <?php echo $row['age'] ?>
            </td>
            <td>
                <a style="color:black; text-decoration:none;" href="update.php ? id=<?php echo $row['id']; ?> ">Edit</a>
            </td>
            <td>
                <a style="color:black; text-decoration:none;" onclick="return confirm('Are you want to sure delete ?') " href="delete.php ? id=<?php echo $row['id']; ?> ">Delete</a>
            </td>
        </tr>

        <?php
       }
    }
    else{
        ?>
        <tr>
            <td>
                No Record Found
            </td>
        </tr>
        <?php
    }

    ?>

</table>