 $('document').ready(function(e){

    function logIn(name, pass){
        $.ajax({
            type: "POST",
            url: "login.php",
            data: {"user": name, "pass":pass},
            success: function(data){
                console.log("loged!");
            }

        });
    }
    $("#loginBtn").click(function(){
        var userName = $("#userName").val();
        var userPass = $("#userPassword").val();
        logIn(userName, userPass);
    });
});
