<?php
    require_once './database/helper.php';
    require_once './session/helper.php';
    if(isLogin()){
        header("location:main.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <link rel="icon" href="/favicon1.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="/favicon1.ico" type="image/x-icon"/>
        <style>
            *{
                font-family: 'Microsoft YaHei';
            }
            body{
                background-color: #e7e7e7;
            }         
        </style>
        <title>CheatChat 3.0</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
            <div class="row hide-on-small-only">
                <div class="col s2">

                </div>
                <div class="col s8">
                    <div class="card">
                        <div class="card-content white-text">
                            <span class="card-title" style="color:rgb(59, 59, 59);">登录CheatChat 2018.4.3</span>
                        </div>
                        <div class="card-action">
                            <form>
                            <div class="row">
                                <div class="col s8 offset-s2">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="email" type="email" class="validate" name="Emmmail">
                                            <label for="email" data-error="邮箱格式不正确" data-success="格式通过" >内部邮件</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s8 offset-s2">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="pass" type="password" class="validate" name="Passsword" id="PasswordInput">
                                            <label for="password">密码</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s4 push-s9">
                                    <a id="comSubmit" onclick="loginnew();" class="waves-effect waves-teal btn-flat">登录</a>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="card-action">
                            <span> PHP Vision: <?php echo phpversion(); ?></span>
                            <span style="float:right;"> Creater:Bobh </span>
                        </div>
                    </div>
                </div>
                <div class="col s2">
                </div>
            </div>

            <div class="row hide-on-med-and-up">
                <div class="col s1">

                </div>
                <div class="col s10">
                    <div class="card">
                        <div class="card-content white-text">
                            <span class="card-title" style="color:rgb(59, 59, 59);font-size:18px;">登录CheatChat手机版</span>
                        </div>
                        <div class="card-action">
                            <form>
                            <div class="row">
                                <div class="col s10 offset-s1">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="pemail" type="email" class="validate" name="Emmmail">
                                            <label for="email" data-error="邮箱格式不正确" data-success="格式通过" >内部邮件</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s10 offset-s1">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="ppass" type="password" class="validate" name="Passsword">
                                            <label for="password">内部密码</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s5">
                                    <a id="phoSubmit" onclick="loginnew2();" class="waves-effect waves-teal btn-flat">登录</a>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                        <div class="card-action">
                            <span> PHP Vision: <?php echo phpversion(); ?></span>
                            <span style="float:right;"> Creater:Bobh </span>
                        </div>
                    </div>
                </div>
                <div class="col s1">
                </div>
            </div>
    </body>
    <script>
    $(function(){
    $("#comSubmit").click(function(event){
        event.preventDefault();
    });
    $("#phoSubmit").click(function(event){
        event.preventDefault();
    });
})
    </script>
</html>