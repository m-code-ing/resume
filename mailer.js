$(document).ready(() => {
    $('#btn_contact_form').click( e => {
        e.preventDefault();
        let formData = $('#contact_me_form').serializeArray();
        displayNotification(formData);
    })
})