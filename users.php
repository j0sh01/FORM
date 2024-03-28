<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="users.css">
</head>
<body>
    <div class="container">
        <?php
        require_once "config.php";

        $sql = "SELECT id, username FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h2>List of Users</h2>";
            echo "<table><tr><th>ID</th><th>Username</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No users found.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
