<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    try{
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        //ERROR HANDLING

        $errors = [];

        if(is_input_empty($username, $password, $email)){
            $errors["empty input"] = "Fill in all fields!";
        }

        if(is_email_invalid($email)){
            $errors["invalid email"] = "invalid email used";
        }

        if(is_username_taken($pdo, $username)){
            $errors["username_taken"] = "username already taken";
        }
        if(is_email_registered( $pdo,  $email)){
            $errors["email_used"] = "Email already registered";
        }

        require_once 'config_session.inc.php';

        if($errors)
        {
            $_SESSION["errors_signup"] = $errors;

            $signupData = [
                "username" => $username,
                "email" => $email
            ];

            $_SESSION["signup_dats"] = $signupData;


            header("location: ../index.php");
            die();
        }

        create_user( $pdo,  $password,  $username,  $email);

        header("location: ../index.php?signup=success");

        $pdo = null;
        $stmt = null;
        die();
    }
    catch(PDOException $e){
        die("Query failed: " . $e->getMessage());
}
}
else{
    header("location: ../index.php");
    die();
}