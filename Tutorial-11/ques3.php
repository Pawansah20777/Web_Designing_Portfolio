for index 


<!DOCTYPE html>
<html>
<head>
    <title>User Input Form</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="hobbies">Hobbies:</label><br>
        <input type="checkbox" name="hobbies[]" value="reading">Reading<br>
        <input type="checkbox" name="hobbies[]" value="swimming">Swimming<br>
        <input type="checkbox" name="hobbies[]" value="hiking">Hiking<br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>


for process




<!DOCTYPE html>
<html>
<head>
    <title>User Input Result</title>
</head>
<body>
    <?php
        // Validate inputs
        if(empty($_POST['name']) || empty($_POST['hobbies'])){
            echo "<p>Please fill in both name and hobbies.</p>";
        } else {
            $name = $_POST['name'];
            $hobbies = implode(", ", $_POST['hobbies']);

            echo "<p>Name: $name</p>";
            echo "<p>Hobbies: $hobbies</p>";
        }
    ?>
</body>
</html>