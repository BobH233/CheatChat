function check(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('pass').value;
    if(!email || !password){
        Materialize.toast('账号和密码不能为空!', 4000);
        return false;
    }
    return true;
}
function check2(){
    var email = document.getElementById('pemail').value;
    var password = document.getElementById('ppass').value;
    if(!email || !password){
        Materialize.toast('账号和密码不能为空!', 4000);
        return false;
    }
    return true;
}
/*
function loginnew(){
    var email = document.getElementById('email').value;
        var passworda = document.getElementById('pass').value;
        if(!email || !passworda){
            Materialize.toast('账号和密码不能为空!', 4000);
            return false;
        }
        $.ajax({
            url:'/api/user_login.php',
            type:'POST',
            async:true,
            data:{
                username:email,password:passworda
            },
            timeout:5000,
            dataType:'json',
            success:function(data,textStatus,jqXHR){
                //var obj = JSON.parse(data);
                //Materialize.toast(data.msg, 4000);
                if(data.msgcode == 0){
                    window.location.href = 'main.php';
                }else{
                    Materialize.toast(data.msg, 4000);
                }
            }
        });
}*/
function loginnew(){
    var email = document.getElementById('email').value;
    var passworda = document.getElementById('pass').value;
    if(!email || !passworda){
        //Materialize.toast('账号和密码不能为空!', 4000);
        mdui.alert('账号和密码不能为空!', '警告');
        return false;
    }
    $.ajax({
        url:'./api/user_login.php',
        type:'POST',
        async:true,
        data:{
            username:email,password:passworda
        },
        timeout:5000,
        dataType:'json',
        success:function(data,textStatus,jqXHR){
            //var obj = JSON.parse(data);
            //Materialize.toast(data.msg, 4000);
            if(data.msgcode == 0){
                window.location.href = 'main.php';
            }else{
                //Materialize.toast(data.msg, 4000);
                mdui.alert(data.msg, '失败');
            }
        }
    });
}
/*
function loginnew2(){
    var email = document.getElementById('pemail').value;
        var passworda = document.getElementById('ppass').value;
        if(!email || !passworda){
            Materialize.toast('账号和密码不能为空!', 4000);
            return false;
        }
        $.ajax({
            url:'/api/user_login.php',
            type:'POST',
            async:true,
            data:{
                username:email,password:passworda
            },
            timeout:5000,
            dataType:'json',
            success:function(data,textStatus,jqXHR){
                //var obj = JSON.parse(data);
                //Materialize.toast(data.msg, 4000);
                if(data.msgcode == 0){
                    window.location.href = 'main.php';
                }else{
                    Materialize.toast(data.msg, 4000);
                }
            }
        });
}
*/
function loginnew2(){
    var email = document.getElementById('pemail').value;
    var passworda = document.getElementById('ppass').value;
    if(!email || !passworda){
        //Materialize.toast('账号和密码不能为空!', 4000);
        mdui.alert('账号和密码不能为空!', '警告');
        return false;
    }
    $.ajax({
        url:'./api/user_login.php',
        type:'POST',
        async:true,
        data:{
            username:email,password:passworda
        },
        timeout:5000,
        dataType:'json',
        success:function(data,textStatus,jqXHR){
            //var obj = JSON.parse(data);
            //Materialize.toast(data.msg, 4000);
            if(data.msgcode == 0){
                window.location.href = 'main.php';
            }else{
                //Materialize.toast(data.msg, 4000);
                mdui.alert(data.msg, '失败');
            }
        }
    });
}
function ZenLogin(){
    //window.location.href="http://users.zendee.cn/userApplication/appLogin.action?appID=APP20180405212247ZENDEE42&appKey=KEY20180405212247ZENDEE42&appRedirect=https://www.cheatchat.tk/zendeeCallback.php";
    //mdui.alert('程序员还在找BUG啊', '功能正在开发......');
    //window.location.href = "./zendeeLogin.php";
    var url = "http://users.zendee.cn/userApplication/appLogin.action?appID=APP20180405212247ZENDEE42&appKey=KEY20180405212247ZENDEE42&appRedirect=https://www.cheatchat.tk/zendeeCallback.php";
    window.open(url);
}