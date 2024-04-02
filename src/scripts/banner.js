// banner.js

// Definirea variabilelor
const bannerImage = document.getElementById('banner-image');
const prevButton = document.getElementById('prev-btn');
const nextButton = document.getElementById('next-btn');
const images = ['/Users/macbook/Desktop/SEM2/Web/Website/Website/images/Banner Windows/B1.png', '/Users/macbook/Desktop/SEM2/Web/Website/Website/images/Banner Windows/B2.png', '/Users/macbook/Desktop/SEM2/Web/Website/Website/images/Banner Windows/B3.png', '/Users/macbook/Desktop/SEM2/Web/Website/Website/images/Banner Windows/B4.png']; // Lista cu numele imaginilor

let currentIndex = 0; // Indexul imaginii curente

// Funcția pentru afișarea imaginii următoare
function showNextImage() {
    currentIndex = (currentIndex + 1) % images.length; // Incrementarea indexului, ținând cont de lungimea listei de imagini
    bannerImage.src = images[currentIndex]; // Afișarea imaginii următoare
}

// Funcția pentru afișarea imaginii anterioare
function showPreviousImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length; // Decrementarea indexului, ținând cont de lungimea listei de imagini
    bannerImage.src = images[currentIndex]; // Afișarea imaginii anterioare
}

// Funcția pentru schimbarea automată a imaginilor la un interval de timp
setInterval(showNextImage, 10000); // Schimbă imaginea la fiecare 5 secunde (5000 milisecunde)
