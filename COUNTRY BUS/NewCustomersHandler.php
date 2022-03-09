<?php

session_start();
$username = "";
$email = "";
$errors = [];

    // start receiving data from form

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    //connect to the database to save the data.

    $conn = new mysqli('localhost:3307', 'root', '', 'country bus');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: "
            . $conn->connect_error);
    }

    // Check if email already exists

    $sql = "SELECT * FROM newcustomers WHERE Email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists";
    }

    if (count($errors) === 0) {
        $query = "INSERT INTO newcustomers SET name=?, email=?, username=?, password=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssss', $name, $email, $username, $password);
        $result = $stmt->execute();


        if ($result) {
            $user_id = $stmt->insert_id;
            $stmt->close();
        }
    }
}

if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
    header("location:Customer_page.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




// save data into the DB
//    $save=mysqli_query($conn, $query);


//    //check if the saving was successful
//
//    if(isset($save)){   header("location: Customer_login.php");
//    }else{
//       echo"<script>alert('Successfully Registered')</script>";
//  }
//}

























