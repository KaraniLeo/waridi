<?php
// Include the file with the database connection code
include 'database_connection.php';

// Function to update a user's details
function update_user($id, $email, $username, $password) {
    global $pdo;

    // Prepare the update statement
    $stmt = $pdo->prepare('UPDATE users SET email = ?, username = ?, password = ? WHERE id = ?');

    if (!$stmt) {
        // Handle error if the statement preparation failed
        echo 'Error preparing statement: ' . $pdo->errorInfo()[2];
        return false;
    }

    // Bind the parameters to the statement
    $stmt->bindParam(1, $email);
    $stmt->bindParam(2, $username);
    $stmt->bindParam(3, $password);
    $stmt->bindParam(4, $id);

    // Execute the statement
    if (!$stmt->execute()) {
        // Handle error if the statement execution failed
        echo 'Error executing statement: ' . $stmt->errorInfo()[2];
        return false;
    }

    return true;
}
?>
