/**
 * Created by dan on 12/7/17.
 */
function check(email, password){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var msg1 = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>* 邮箱不能为空</div>";
    var msg2 = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>* 邮箱格式不正确</div>";
    var msg3 = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>* 密码不能为空</div>";
    var msg4 = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>* 密码不能少于6位</div>";

    if(!email){
        $("li#msg").html(msg1);
        return false;
    }
    else if(email.indexOf("@") == -1){
        $("li#msg").html(msg2);
        return false;
    }
    else if(email.indexOf(".com",email.length-4) == -1){
        $("li#msg").html(msg2);
        return false;
    }

    if(!password){
        $("li#msg").html(msg3);
        return false;
    }
    else if(password.length <= 6){
        $("li#msg").html(msg4);
        return false;
    }
    return true;
}

$(document).ready(function(){
    $("#login_form").submit(function(e) {
        e.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();
        if(check(email,password)) {
            $.post("/day4/index.php/home/Login/check_user",
                {
                    email: email,
                    password: password
                },
                function (data, status) {
                    //alert("Data: " + data + "\nStatus: " + status);
                    var content = data.content;
                    if (status == "success") {
                        if (data.status == 0) {
                            var msg = '<div class="alert alert-success"><strong>' + content + '</strong></div>';
                            $("#msg").html(msg);
                        }
                        else {
                            var msg = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> <strong>" + content + "</strong></div>";
                            $("#msg").html(msg);
                        }
                    }
                });
        }
    });
});

