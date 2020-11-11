<?PHP
    //Start the session
    SESSION_START();

    // The session need to has started in all pages
    if (!isset($_SESSION)) session_start();

    // Verify if not have the variable to verify the session
    if (!isset($_SESSION['id'])) {
    // Destroy the session for security
    session_destroy();
    // And redirect to the login page
    header("Refresh:2; url=../inc/signin.php"); exit;
    }

    // Pull the user id from active session and make a query in tasks database, with all tasks where contains the same id of my active session
    $userid = $_SESSION['id'];
    $username = $_SESSION['username'];
       
?>