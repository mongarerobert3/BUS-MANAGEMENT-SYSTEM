<?php

session_start();
//check if the button is clicked

if (isset($_POST["log_btn"])){

    // Connect to your MySQL database
    $dbhst = "localhost:3307";
    $dbnme = "country bus";
    $bdusr = "root";
    $dbpws = "";

// Using PDO to connect

    $conn = new PDO('mysql:host='.$dbhst.';dbname='.$dbnme, $bdusr, $dbpws);

// Getting variables

    $username = $_POST['Username'];
    $password = $_POST['Password'];

// Comparing answers

    try {

        $stmt = $conn->prepare('SELECT * FROM staff WHERE Username='" . $username . "' and Password='". $password . "' LIMIT 0,1');
    $stmt->execute();

    $result = $stmt->fetchAll();

    if ( count($result) ) {
        foreach($result as $row) {
            echo header(location"staff_page.php");
            // Do Something Else
        }
    } else {
        echo 'Incorrect username or password. Please try again.';
        exit;
    }
} catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

}
