document.addEventListener("DOMContentLoaded", function() {
    // Găsim butonul de logout după clasa sa
    var logoutButton = document.querySelector(".logout-button");

    // Adăugăm un eveniment de clic pe butonul de logout
    logoutButton.addEventListener("click", function() {
        // Aici puteți adăuga codul pentru logout, cum ar fi redirecționarea către o altă pagină sau ștergerea datelor de sesiune
        // De exemplu, redirecționarea către pagina de login:
        window.location.href = "Login.html";
    });
});
