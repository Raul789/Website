<?php


include 'connect.php';

// if(isset($_POST['signUp'])){
//     $nume=$_POST['nume'];
//     $email=$_POST['email'];
//     $parola=$_POST['parola'];
//     $parola=md5($parola);

//      $checkEmail="SELECT * From Utilizatori where email = '$email'";
//      $result=$conn->query($checkEmail);
//      if($result->num_rows>0){
//         echo "Email Adress Allready Exists !";
//      }
//      else {
//         $insertQuery="INSERT INTO users(nume,email,parola) VALUES ('$nume','$email','$parola')";
//         if($conn->query($insertQuery)==TRUE){
//             header("location: index.php");
//         }
//         else {
//             echo "Error:".$conn->error;
//         }
//      }
// }

if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $parola=$_POST['parola']; 
    $parola=md5($parola);

    $sql = "SELECT * FROM Utilizatori WHERE email = '$email' and parola = '$parola'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location: Menu.php");
        exit();
    } 
    else {
        echo "Account not found! Incorrect Email or Password";
    }
}

?>