<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "database.cnucxjl9epx6.ap-south-1.rds.amazonaws.com";
    $username = "admin";
    $password = "admin123";
    $database = "phptest";

    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    $name = $_POST["name"];
    $email = $_POST["email"];

    $statement = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $statement->execute([$name, $email]);

    echo "<p>User data submitted and stored in the database.</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP-MySQL Application</title>
</head>
<body>
    <h1>User Form</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
