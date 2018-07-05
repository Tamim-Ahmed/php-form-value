<?php include 'database.php';?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
   <div class="container">
    <table class="table table-bordered text-center">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>COUNTRY</th>
            <th>FEEDBACK</th>
        </tr>
        <?php while($result = mysqli_fetch_assoc($query)){?>

        <tr>
            <td><?php echo $result['ID'];?></td>
            <td><?php echo $result['Name'];?></td>
            <td><?php echo $result['Email'];?></td>
            <td><?php echo $result['Phone'];?></td>
            <td><?php echo $result['Country'];?></td>
            <td><?php echo $result['Message'];?></td>
        </tr>
        <?php }?>
    </table>
    </div>
</body>
</html>