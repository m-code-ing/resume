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
        alert('hello');
    });