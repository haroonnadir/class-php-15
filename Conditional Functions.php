<?php
// Include the database connection script
include 'db_connect.php';

// Perform a query
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result) {
    // Query executed successfully
    echo "Query successful.";
} else {
    // Query failed
    echo "Error: " . $conn->error;
}
// Close the connection
$conn->close();
?>


<?php
// Include the database connection script
include 'db_connect.php';
// Perform a query
$sql = "SELECT * FROM users WHERE id = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Data exists
    $row = $result->fetch_assoc();
    echo "User: " . $row["name"];
} else {
    // No data found
    echo "No user found.";
}
// Close the connection
$conn->close();
?>

<?php
// Include the database connection script
include 'db_connect.php';
// Perform a query
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 10) {
    echo "More than 10 users found.";
} elseif ($result->num_rows > 0) {
    echo "Some users found.";
} else {
    echo "No users found.";
}
// Close the connection
$conn->close();
?>


<?php
// Include the database connection script
include 'db_connect.php';
// Perform an insert query
$sql = "INSERT INTO users (name, email) VALUES ('Jane Doe', 'jane@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
} else {
    echo "Error: " . $conn->error;
}
// Close the connection
$conn->close();
?>


<?php
$integerVar = 42;
if (is_int($integerVar)) {
    echo "$integerVar is an integer.\n";
} else {
    echo "$integerVar is not an integer.\n";
}
?>


<?php
$integerVar = 42;
if (is_integer($integerVar)) {
    echo "$integerVar is an integer (using is_integer).\n";
} else {
    echo "$integerVar is not an integer (using is_integer).\n";
}
?>


<?php
$integerVar = 42;
if (is_long($integerVar)) {
    echo "$integerVar is a long integer.\n";
} else {
    echo "$integerVar is not a long integer.\n";
}
?>


<?php
$floatVar = 3.14;
if (is_float($floatVar)) {
    echo "$floatVar is a float.\n";
} else {
    echo "$floatVar is not a float.\n";
}
?>


<?php
$floatVar = 3.14;
if (is_double($floatVar)) {
    echo "$floatVar is a double.\n";
} else {
    echo "$floatVar is not a double.\n";
}
?>


<?php
$floatVar = 3.14;
if (is_real($floatVar)) {
    echo "$floatVar is a real number.\n";
} else {
    echo "$floatVar is not a real number.\n";
}
?>


<?php
$intVar = 10;
$floatVar = 3.14;
$stringNum = "123";
if (is_numeric($intVar)) {
    echo "$intVar is numeric.\n";
}
if (is_numeric($floatVar)) {
    echo "$floatVar is numeric.\n";
}
if (is_numeric($stringNum)) {
    echo "\"$stringNum\" is numeric.\n";
}
?>


<?php
$stringVar = "Hello, World!";
if (is_string($stringVar)) {
    echo "$stringVar is a string.\n";
} else {
    echo "$stringVar is not a string.\n";
}
?>



<?php
$boolVar = true;
if (is_bool($boolVar)) {
    echo "$boolVar is a boolean.\n";
} else {
    echo "$boolVar is not a boolean.\n";
}
?>



<?php
$arrayVar = [1, 2, 3];
if (is_array($arrayVar)) {
    echo "The variable is an array.\n";
} else {
    echo "The variable is not an array.\n";
}
?>



<?php
$arrayVar = [1, 2, 3];
$scalarVar = 42;
if (is_countable($arrayVar)) {
    echo "The array variable is countable.\n";
} else {
    echo "The array variable is not countable.\n";
}
if (!is_countable($scalarVar)) {
    echo "The scalar variable is not countable.\n";
}
?>



<?php
$nullVar = null;
if (is_null($nullVar)) {
    echo "The variable is null.\n";
} else {
    echo "The variable is not null.\n";
}
?>


<?php
$callableVar = 'strlen'; // Function name as a string
if (is_callable($callableVar)) {
    echo "$callableVar is callable.\n";
} else {
    echo "$callableVar is not callable.\n";
}
?>


<?php
$scalarVar = 42;
$arrayVar = [1, 2, 3];
if (is_scalar($scalarVar)) {
    echo "$scalarVar is a scalar.\n";
} else {
    echo "$scalarVar is not a scalar.\n";
}
if (!is_scalar($arrayVar)) {
    echo "The array variable is not a scalar.\n";
}
?>
