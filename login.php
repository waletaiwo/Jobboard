<?php include_once 'config/init.php'; ?>

<?php 
$auth = new Auth;

$template = new Template('templates/register.php');



// Login a user
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

   
    if ($auth->login($username, $pwd)) {
        // Login successful
        $_SESSION['success'] = "Login successful!";
        header("Location: index.php");
        exit;
    } else {
        // Login failed, store errors in session
        $_SESSION['errors'] = $auth->getErrors();
        header('Location: registration.php');
        exit;
    }
}
 

// $template->errors = $errors;
echo $template;
