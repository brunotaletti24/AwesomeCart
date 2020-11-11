<?PHP
    // Start the session
    SESSION_START();

    // Destroy all sessions
    SESSION_DESTROY(); 

    // Redirect user to main page
    header("Location: ../inc/signin.php");
?>