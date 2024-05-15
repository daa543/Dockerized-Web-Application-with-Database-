<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <title>Displaying students</title>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="post" action="">
                
                
                <button type="submit" name="display_all">Display</button>
            </form>
            </div>
        <div class="back-button">
            <a href="index.php" class="back"><button type="submit">Back</button></a>
        </div>
    </div>

    <?php
    $connect = mysqli_connect('db', 'php_docker', 'password', 'php_docker');

    $table_name = "students";

    if (isset($_POST['display_all'])) {
        $query = "SELECT * FROM $table_name";
        $response = mysqli_query($connect, $query);

        if (mysqli_num_rows($response) > 0) {
            
            echo "<div class='search-results'>"; 
            echo "<strong class='table'>$table_name: </strong>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>CGPA</th></tr>";
            while ($i = mysqli_fetch_assoc($response)) {
                echo "<tr>";
                echo "<td>" . $i['id'] . "</td>";
                echo "<td>" . $i['name'] . "</td>";
                echo "<td>" . $i['age'] . "</td>";
                echo "<td>" . $i['cgpa'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>"; 
        } 
    } 

    mysqli_close($connect);
    ?>

</body>

</html>