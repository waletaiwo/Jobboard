<?php

class Auth {
    private $db;
    private $errors;

    public function __construct() {
        $this->db = new Database;
        $this->errors = array();
    }

    public function register($username, $email, $pwd, $confirmpwd) {
        // Check if any fields are empty
        if (empty($username) || empty($email) || empty($pwd) || empty($confirmpwd)) {
            $this->errors[] = "Please fill in all fields.";
            return false;
        }

        // Check if password and confirm password fields match
        if ($pwd !== $confirmpwd) {
            $this->errors[] = "Passwords do not match.";
            return false;
        }

        // Check if username contains invalid characters
        if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
            $this->errors[] = "Username contains invalid characters.";
            return false;
        }

        // Check if email is in a valid format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "Invalid email format.";
            return false;
        }

        // Check if username or email already exists in the database
        $this->db->query("SELECT * FROM users WHERE username = :username OR email = :email");
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);
        $user = $this->db->single();

        if ($user) {
            $this->errors[] = "The username or email address already exists.";
            return false;
        }

        // Hash the password
        $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);

        // Insert user data into the database
        $this->db->query("INSERT INTO users (username, email, pass) VALUES (:username, :email, :pass)");
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);
        $this->db->bind(':pass', $hashed_password);

        if ($this->db->execute()) {
            // Registration successful
            return true;
        } else {
            // Registration failed
            $this->errors[] = "Registration failed. Please try again.";
            return false;
        }
    }

    public function login($username, $pwd) {
        // Check if any fields are empty
        if (empty($username) || empty($pwd)) {
            $this->errors[] = "Please fill in all fields.";
            return false;
        }

        // Get user data from the database
        $this->db->query("SELECT * FROM users WHERE username = :username");
        $this->db->bind(':username', $username);
        $user = $this->db->single();

        // Check if user exists and password is correct
        if ($user && password_verify($pwd, $user->pass)) {
            
             // Login successful
                $_SESSION['user'] = $user->username;
                return $user->username;
        } else {
            // Login failed
            $this->errors[] = "Invalid username or password.";
            return false;
        }
    }

    public function isLoggedIn() {
        return isset($_SESSION['user']);
    }

    public function logout() {
        session_destroy();
    }

    public function getErrors() {
        return $this->errors;
    }
}