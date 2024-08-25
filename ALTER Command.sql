ALTER TABLE employees ADD CONSTRAINT fk_department FOREIGN KEY (department_id) REFERENCES departments(id);



ALTER TABLE employees DROP FOREIGN KEY fk_department;


ALTER TABLE employees ENGINE = InnoDB;


ALTER TABLE employees CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


$server_name = "localhost";  // or your server IP address
$username = "root";          // your MySQL username
$password = "";              // your MySQL password
$database_name = "my_database"; // your database name
// Create a connection
$connection = mysqli_connect($server_name, $username, $password, $database_name);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



$sql_query = "SELECT * FROM employees";
$result = mysqli_query($connection, $sql_query);
// Check if query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}
// Fetch and display results
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Position: " . $row["position"] . "<br>";
}



// Close the connection
mysqli_close($connection);


<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "my_database";
// Create a connection
$connection = mysqli_connect($server_name, $username, $password, $database_name);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
// Run an SQL query
$sql_query = "SELECT * FROM employees";
$result = mysqli_query($connection, $sql_query);

// Check if query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}
// Fetch and display results
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Position: " . $row["position"] . "<br>";
}
// Close the connection
mysqli_close($connection);
?>

<?php
$servername = "localhost";
$username = "root"; // Change this if needed
$password = ""; // Change this if needed
$dbname = "test_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<?php
// Include the database connection script
include 'db_connect.php';
// SQL query to fetch data from the users table
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
// Close the connection
$conn->close();
?>



<?php
// Include the database connection script
include 'db_connect.php';
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    // Prepare the SQL query
    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);
    // Execute the query
    if ($stmt->execute()) {
        echo "New user created successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>


