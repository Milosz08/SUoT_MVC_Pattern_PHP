const closeBannerButton = document.getElementById('close-banner-button'); // uchwyt do przycisku zamykającego banner
const bannerContainer = document.getElementById('banner-container'); // uchwyt do bannera

// event uruchamiany po kliknięciu w zamknięcie bannera, zamykająy banner
closeBannerButton.addEventListener('click', function() {
    bannerContainer.classList.remove('app__banner--enabled');
});

// automatyczne chowanie banera z informacją 3 sekundy po wejściu na stronę
setTimeout(function() { bannerContainer.classList.remove('app__banner--enabled'); }, 3000);