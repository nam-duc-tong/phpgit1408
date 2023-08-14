<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        input{
            margin: 10px;
        }
        button{
            margin: 10px 20px;
        }
    </style>
</head>
<body>
    <h2>Edit User</h2>
    <form action="" autocomplete="off" method="post">
        <?php
            require 'config.php';
            $id = $_GET["id"];
            $rows = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users WHERE id = $id"));
        ?>
        <input type="hidden" id="id" value="<?php echo $rows['id'];?>">
        <label for="">Name</label>
        <input type="text" id="name" value="<?php echo $rows['name'];?>"><br>
        <label for="">Email</label>
        <input type="text" id="email" value="<?php echo $rows['email'];?>"><br>
        <label for="">Gender</label>
        <select class="" id="gender">
            <option value="Male" <?php if($rows["gender"] == "Male") echo "selected";?>>Male</option>
            <option value="Female" <?php if($rows["gender"] == "Female") echo "selected";?>>Female</option>
        </select><br>
        <button type="button" class="btn btn-success" onclick="submitData('edit');">Edit</button>
    </form>
    <br>
    <a href="index.php">Go To Index</a>
    <?php
        require 'script.php';
    ?>
</body>
</html>