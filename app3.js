function flip(e){
    console.log(e);
    let panel = $(e);
    if(panel.hasClass('flip')){
        panel.removeClass('flip');
    }
    else{
        panel.addClass('flip');
    }
}

function formClicked(e){
    e.stopPropagation();
}

let sherlock = $('.sherlock-wrapper');

    sherlock.mouseover(function () {
    });


//     Notification.requestPermission(function(status) {
//         console.log('Notification permission status:', status);
//     });


//     function displayNotification(formData) {
//         if (Notification.permission == 'granted') {
//           navigator.serviceWorker.getRegistration().then(function(reg) {
//             var options = {
//               body:{

//               },
//             //   icon: 'images/example.png',
//               vibrate: [100, 50, 100],
//               data: {
//                 dateOfArrival: Date.now(),
//                 primaryKey: 1
//               }
//             };
//             reg.showNotification('Hello world!', options);
//           });
//         }
//       }


// $(document).ready(() => {
//     $('#btn_contact_form').click( e => {
//         e.preventDefault();
//         let formData = $('#contact_me_form').serializeArray();
//         displayNotification(formData);
//     })
// })