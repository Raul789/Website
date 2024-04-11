<?php
// Conectare la baza de date
$servername = "Website";
$username = "root";
$password = "parola";
$database = "nume_baza_de_date";

$conn = mysqli_connect($servername, $username, $password, $database);

// Verificare conexiune
if (!$conn) {
    die("Conexiunea la baza de date a eșuat: " . mysqli_connect_error());
}

// Procesare date de conectare trimise din formular
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Escapare caractere speciale pentru a preveni SQL injection
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Interogare pentru a verifica credențialele utilizatorului
    $sql = "SELECT * FROM utilizatori WHERE email = '$email' AND parola = '$password'";
    $result = mysqli_query($conn, $sql);

    // Verifică dacă există o înregistrare în baza de date cu aceste credențiale
    if (mysqli_num_rows($result) == 1) {
        // Datele de conectare sunt corecte, creează o sesiune pentru utilizator
        session_start();
        $_SESSION['logged_in'] = true;
        // Redirecționează utilizatorul către pagina principală
        header("Location: Home.html");
        exit(); // Oprește executarea scriptului după redirecționare
    } else {
        // Datele de conectare sunt incorecte, setează un mesaj de eroare
        $error_message = "Datele de conectare sunt incorecte. Te rugăm să încerci din nou.";
    }
}

// Închide conexiunea la baza de date
mysqli_close($conn);
?>