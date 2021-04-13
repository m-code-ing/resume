const firebaseConfig = {
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
messaging
    .requestPermission()
    .then(function () {
        console.log("Notification permission granted.");

        // get the token in the form of promise
        return messaging.getToken({vapidKey: "BLtxg2V5QUuIv8v4dkHcwZSj5lSPLNGpB_8TB8a1Jh09Bdde0Y-0mEqykaerUh6ZKxfpALdDlbfrKGqUuCumZnM"});
    })
    .then(function (token) {
      console.log(token);
    })
    .catch(function (err) {
        console.log("Unable to get permission to notify.", err);
    });