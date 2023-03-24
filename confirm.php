<?php
// Include the file with the update_user() function
include 'functions.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'create':
        case 'edit':
            // Handle user editing
            $id = $_POST['id'] ?? '';
            $email = $_POST['email'] ?? '';
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
        
            if (update_user($id, $email, $username, $password)) {
                $status = 'success';
                $message = 'User updated successfully.';
                
                // Redirect to the updated table
                header('Location: admin.php');
                exit();
            } else {
                $status = 'error';
                $message = 'Failed to update user.';
            }

            break;
            
        default:
            $message = 'Unknown action.';
            break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Confirmation</title>
</head>
<body>
    <p><?php echo $message; ?></p>
</body>
</html>
