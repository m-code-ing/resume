// <!-- The core Firebase JS SDK is always required and must be listed first -->
{/* <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script> */ }
// THe above has been added to index.html file in the head section. 

// <!-- TODO: Add SDKs for Firebase products that you want to use
//  https://firebase.google.com/docs/web/setup#available-libraries -->

{/* // Your web app's Firebase configuration */ }
var firebaseConfig = {
    apiKey: "AIzaSyDJ6BPnkrkykdU_eSgAZY-RDe_dlxTLbuI",
    authDomain: "resume-c699f.firebaseapp.com",
    projectId: "resume-c699f",
    storageBucket: "resume-c699f.appspot.com",
    messagingSenderId: "852753908586",
    appId: "1:852753908586:web:a2e512be535281387ddb13"
};
{/* // Initialize Firebase */ }
firebase.initializeApp(firebaseConfig);

const messaging = firebase.messaging();

// Add the public key generated from the console here.
messaging.getToken({vapidKey: "BLtxg2V5QUuIv8v4dkHcwZSj5lSPLNGpB_8TB8a1Jh09Bdde0Y-0mEqykaerUh6ZKxfpALdDlbfrKGqUuCumZnM"});

// Get registration token. Initially this makes a network call, once retrieved
// subsequent calls to getToken will return from cache.
messaging.getToken({ vapidKey: 'BLtxg2V5QUuIv8v4dkHcwZSj5lSPLNGpB_8TB8a1Jh09Bdde0Y-0mEqykaerUh6ZKxfpALdDlbfrKGqUuCumZnM' }).then((currentToken) => {
    if (currentToken) {
        console.log(currentToken);
      // Send the token to your server and update the UI if necessary
      // ...
    } else {
      // Show permission request UI
      console.log('No registration token available. Request permission to generate one.');
      // ...
    }
  }).catch((err) => {
    console.log('An error occurred while retrieving token. ', err);
    // ...
  });