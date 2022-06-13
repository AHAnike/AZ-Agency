<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("connect.php"); ?>

    <table border="1">
        <tr> <b>
            <td>ID</td>
            <td>firstName</td>
            <td>LastName</td>
            <td>Gender</td>
            <td>Email</td>
            <td>Password</td>
            <td>Phone Number</td>
            <td>Delete</td>
        </b>

        </tr>
        <?php $sl=0;
            $sql = 'select * from info';
            $result = mysqli_query($link,$sql);
            while($data =mysqli_fetch_array($result)) 
            { ?>
                <tr>
                    <td><?php $sl=$sl+1;echo($sl); ?></td>
                    <td><a href="edit.php?pid= <?php echo($data['pid']); ?>"> <?php echo($data['name']); ?></a></td>
                    <td><?php if($data['gender']==1)echo("Male");
                        elseif($data ['gender']==2)echo("Female");
                        else echo("Common"); ?></td>

                        <td><?php echo($data['email']); ?></td>   
                        <td><?php echo($data['phone number']); ?></td>   
                </tr>
           <?php } ?>
    </table>
</body>
</html>