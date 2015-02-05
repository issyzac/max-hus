/**
 * Created by issymac on 2/5/15.
 */
$(document).ready(function() {

        $('#username').keyup(function () {
            var str = $(this).val();
            checkUsername('partial',str);
        });
        $('#username').focusout(function () {
            var str = $(this).val();
            checkUsername('full',str);
        });

        $('#loginbtn').click(function (e) {
            e.preventDefault();
            var url = $('#registrationForm').prop('action');
            login();
        });

        function checkUsername(len,str) {
            //alert(str.length);
            if(str.length > 0) {
                $('#username_status').css('display','block');

                $.get('loginval.php?len='+len+'str='+str,function(response){
                    if(response == 'true'){
                        $('#username_status').removeClass('exists-not').addClass('exists');
                        isLoginFormValid = 'yes';
                    }

                    else if(response == 'false'){
                        $('#username_status').removeClass('exists').addClass('exists-not');

                        isLoginFormValid = 'no';
                        loginError = 'Username not available';
                    }
                });
            }
            else{
                $('#username_status').css('display','none');
            }
        }

        function ValidateLoginForm() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if (username.length > 0 && password.length > 0) {
                checkUsername('full',username);
            } else {
                isLoginFormValid = 'no';
                loginError = 'Some Field Empty';
            }
        }

        function login() {

            if (isLoginFormValid === 'yes') {
                var username = document.getElementById('username').value;
                var password = document.getElementById('password').value;

                $(document).on('submit', '#registrationForm', function(event){

                    var info = $('.avatar_alert');
                    event.preventDefault();
                    var data = { username: $("#username").val() }

                    $.ajax({
                        url: "/login",
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
                            window.location.href = "/home";
                        }
                    });
                });
            }

            else {
                refreshForm('loginForm');
                response('error', loginError);
            }
        }

        function hideForm(whichForm){
            $('.'+whichForm).slideUp();
        }

        function refreshForm(whichForm){
            if(whichForm == 'loginForm'){
                $('#username').val('');
                $('#password').val('');
                $('#username_status').css('display','none');
            }
        }

        function response(type,alertBody) {
            var alertHeaderader,alertText;
            if (type == 'error'){
                alertHeader = 'Error!';
                alertType = "alert alert-danger";
            }
            else if (type == 'success'){
                alertHeader = 'Success!';
                alertType = "alert alert-success";
            }

            alertText = '<strong>'+alertHeader+'</strong> &nbsp;&nbsp;'+alertBody;

            var alert = '<div class="'+alertType+'"><button type="button" class="close" data-dismiss="alert">&times;</button>'+alertText+'</div>';


            $('.response').append(alert);

            setInterval(function(){
                $('.alert').alert('close');
            },6000);
        }
    }
);