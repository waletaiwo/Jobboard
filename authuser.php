<?php include_once 'config/init.php'; ?>

<?php
$auth = new Auth;

$template = new Template('templates/inc/header');

// Check if the user is logged in
if ($auth->isLoggedIn()) {
    $loggedInUser = $_SESSION['user']->username;
    $template->loggedInUser = $loggedInUser;
}

// Logout user
if (isset($_GET['logout'])) {
    $auth->logout();
    header("Location: index.php");
    exit;
}

echo $template;