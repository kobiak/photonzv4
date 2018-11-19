var searchPopup = document.getElementById('search-popup'),
    searchButton = document.getElementById('js-search-button'),
    menuOpen = document.getElementById('js-open-menu'),
    menuClose = document.getElementById('js-close-menu'),
    menuMobile = document.getElementById('mobile-menu');

menuOpen.addEventListener('click', function (e) {
    e.preventDefault();
    menuMobile.style.left = '0';
    menuClose.style.display = 'block';
});

menuClose.addEventListener('click', function (e) {
    e.preventDefault();
    menuMobile.removeAttribute('style');
    menuClose.removeAttribute('style');
});

searchButton.addEventListener('click', function (e) {
    e.preventDefault();
    searchPopup.style.display = 'block';
    /*document.getElementById('body').style.overflow = 'hidden';*/
    document.getElementById('search-input').focus();
});

document.querySelector('body').addEventListener('click', function(event) {
  if (event.target === searchPopup) { 
      event.target.style.display = 'none';  
  }
});

/*searchPopup.addEventListener('click', function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    e.stopPropagation();
    searchPopup.style.display = 'none';    
});*/

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js', {
        scope: '/'
    }).then(function (reg) {
        console.log('Service Worker Registered', reg);
    }, function (err) {
        console.log('Service Worker Register fail', err);
    });
}

/*
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('/sw.js').then(function(registration) {
      // Registration was successful
      console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }, function(err) {
      // registration failed :(
      console.log('ServiceWorker registration failed: ', err);
    });
  });
}
*/
