importScripts("https://www.gstatic.com/firebasejs/7.16.1/firebase-app.js");
importScripts(
    "https://www.gstatic.com/firebasejs/7.16.1/firebase-messaging.js",
);
// For an optimal experience using Cloud Messaging, also add the Firebase SDK for Analytics.
importScripts(
    "https://www.gstatic.com/firebasejs/7.16.1/firebase-analytics.js",
);

// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
firebase.initializeApp({
    apiKey: "AIzaSyA0UB8iC2vO09AkVo1Iw2GRAbrPXIVR2tY",
    authDomain: "golang-4afbc.firebaseapp.com",
    projectId: "golang-4afbc",
    storageBucket: "golang-4afbc.appspot.com",
    messagingSenderId: "757594470370",
    appId: "1:757594470370:web:1780ff2ebbc4882d57abbb",
    measurementId: "G-3P1ZH7TRWK"
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function(payload) {
    console.log(
        "[firebase-messaging-sw.js] Received background message ",
        payload,
    );
    // Customize notification here
    const notificationTitle = "Background Message Title";
    const notificationOptions = {
        body: "Background Message body.",
        icon: "/itwonders-web-logo.png",
    };

    return self.registration.showNotification(
        notificationTitle,
        notificationOptions,
    );
});
