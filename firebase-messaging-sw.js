importScripts('https://www.gstatic.com/firebasejs/8.2.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.2.0/firebase-messaging.js');
//Remeber this part we have used above in our index.html
var firebaseConfig = {
  apiKey: "AIzaSyDJ6BPnkrkykdU_eSgAZY-RDe_dlxTLbuI",
  authDomain: "resume-c699f.firebaseapp.com",
  projectId: "resume-c699f",
  storageBucket: "resume-c699f.appspot.com",
  messagingSenderId: "852753908586",
  appId: "1:852753908586:web:a2e512be535281387ddb13"
};

firebase.initializeApp(firebaseConfig);
const messaging = firebase.messaging();
messaging.onBackgroundMessage(function (payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = 'Title';
  const notificationOptions = {
    body: payload,
    icon: '/firebase-logo.png'
  };
  self.registration.showNotification(notificationTitle,
    notificationOptions);
});




