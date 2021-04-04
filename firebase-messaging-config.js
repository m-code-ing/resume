const messaging = firebase.messaging();

// Get registration token. Initially this makes a network call, once retrieved
// subsequent calls to getToken will return from cache.
messaging.getToken({ vapidKey: '<YOUR_PUBLIC_VAPID_KEY_HERE>' }).then((currentToken) => {
    if (currentToken) {
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




//   the below code if from tutorial.

// const messaging = firebase.messaging();
// messaging
//     .requestPermission()
//     .then(function () {
//         MsgElem.innerHTML = "Notification permission granted."
//         console.log("Notification permission granted.");

//         // get the token in the form of promise
//         return messaging.getToken()
//     })
//     .then(function (token) {
//         TokenElem.innerHTML = "token is : " + token
//     })
//     .catch(function (err) {
//         ErrElem.innerHTML = ErrElem.innerHTML + "; " + err
//         console.log("Unable to get permission to notify.", err);
//     });