$(document).on('submit', '#loginForm', function(event){

//            alert("working");
    var info = $('.avatar_alert');
    event.preventDefault();
    var data = { username: $("#username").val() , password: $("#password").val()};
    $.ajax({
        url: "login",
        type: "POST",
        data: data
    }).done(function(response) {
        info.hide().find('ul').empty();
        if(response.errors)
        {
            $.each(response.errors, function(index, error){
                info.find('ul').append(error);
            });
            info.slideDown();
        }
        else if(response.success){
            window.location.href = "home";
        }
    });
});


$(document).on('submit', '#registrationForm', function(event){

//            alert("working");
    var info = $('.avatar_alert');
    var suc = $('.avatar_success');

    event.preventDefault();

    var data = {
        fname: $("#fname").val(),
        mname: $("#mname").val(),
        lname: $("#lname").val(),
        uname: $("#uname").val(),
        email: $("#email").val(),
        pnumber: $("#pnumber").val(),
        password: $("#secretword").val()

    };

    $.ajax({
        url: "register",
        type: "POST",
        data: data
    }).done(function(response) {
        info.hide().find('ul').empty();
        suc.hide().find('ul').empty();
        if(response.errors)
        {
            $.each(response.errors, function(index, error){
                info.find('ul').append(error);
            });
            info.slideDown();
        }
        else{
            switchForms('success');
        }
    });
});


function switchForms(whichform){
    $('.modalForm').hide()
    $('.form-header').text(whichform);
    $('.'+whichform).removeClass('hidden').slideDown();
}