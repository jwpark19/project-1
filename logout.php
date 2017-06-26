<a href="./logout.php"><button>logout</button></a> // anchor

// logout.php
<?php
    session_start();
    unset($_SESSION['username']);
    session_destroy();

    header("Location: index.html");
    exit();
?>
