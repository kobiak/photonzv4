document.getElementById("js-open-menu").addEventListener("click", function (e) {
    e.preventDefault();
    document.getElementById("mobile-menu").style.left = "0";
    document.getElementById("js-close-menu").style.display = "block";
});

document.getElementById("js-close-menu").addEventListener("click", function (e) {
    e.preventDefault();
    document.getElementById("mobile-menu").removeAttribute("style");
    document.getElementById("js-close-menu").removeAttribute("style");
});

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js', {
        scope: '/'
    }).then(function (reg) {
        console.log('Service Worker Registered', reg);
    }, function (err) {
        console.log("Service Worker Register fail", err);
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
