<?php
$connect = mysqli_connect(
    'db',        
    'php_docker',
    'password',  
    'php_docker' 
);

if (isset($_POST['submmit'])) {
    
    if (isset($_POST['id'], $_POST['name'], $_POST['age'], $_POST['cgpa'])) {

        $id = mysqli_real_escape_string($connect, $_POST['id']);
        $name = mysqli_real_escape_string($connect, $_POST['name']);
        $age = mysqli_real_escape_string($connect, $_POST['age']);
        $cgpa = mysqli_real_escape_string($connect, $_POST['cgpa']);

        
        if (empty($id) || empty($name) || empty($age) || empty($cgpa)) {
        } else {
            
            $query = "INSERT INTO students (id, name, age, cgpa) 
                      VALUES ('$id', '$name', '$age', '$cgpa')";

           
            if (mysqli_query($connect, $query)) {
                
                header("Location: dissplay.php");
                exit; 
            } else {
                echo "<script>alert('Error: Unable to insert data into the database. Please try again later.');</script>";
            }
        }
    } 
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <title>Add Students Information</title>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="post" action="register.php">
                <h1>Apply information below</h1>

                <input type="text" placeholder="ID" name="id" />
                <input type="text" placeholder="Name" name="name" />
                <input type="text" placeholder="Age" name="age" />
                <input type="text" placeholder="CGPA" name="cgpa" />
                <button name="submmit" value="submmit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>