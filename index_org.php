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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="//cdn.bootcss.com/mdui/0.4.0/css/mdui.min.css">
    <script src="//cdn.bootcss.com/mdui/0.4.0/js/mdui.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link rel="stylesheet" href="./live2d/css/live2d.css" />
    <script type="text/javascript" src="js/main.js"></script>
    <title>CheatChat New</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="/favicon1.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon1.ico" type="image/x-icon"/>
    <meta name="Referrer" content="origin" />
    <meta content="always" name="referrer">
    <style>
        body{
            background-color: #e7e7e7;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        *{
            font-family:"Microsoft Yahei";
        }
    </style>
</head>
<body>
    <div class="mdui-container mdui-hidden-xs">
        <div id="landlord">
            <div class="message" style="opacity:0"></div>
            <canvas id="live2d" width="280" height="250" class="live2d"></canvas>        </div>
        <div calss="mdui-row">
            <div class="mdui-col-xs-8 mdui-col-offset-xs-2">
                <div class="mdui-card" style="margin-top:50px;">
                    <div class="card-header">
                        <div class="mdui-card-primary">
                            <div class="mdui-card-primary-title">登录CheatChat UINew</div>
                        </div>
                    </div>
                    <div class="mdui-typo">
                        <hr/>
                    </div>
                    <div class="mdui-card-content">
                        <div class="mdui-row">
                            <div class="mdui-col-xs-8 mdui-col-offset-xs-2">
                                <div class="mdui-textfield mdui-textfield-floating-label">
                                    <label class="mdui-textfield-label">内部邮箱</label>
                                    <input id="email" class="mdui-textfield-input" type="email" style="cursor: text"/>
                                </div>
                                <div class="mdui-textfield mdui-textfield-floating-label">
                                    <label class="mdui-textfield-label">密码</label>
                                    <input id="pass" class="mdui-textfield-input" type="password" style="cursor: text"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdui-card-actions">
                        <div class="mdui-row">
                            <div class="mdui-col-xs-6 mdui-col-offset-xs-7">
                                <button onclick="ZenLogin();" class="mdui-btn mdui-ripple" style="color: #09f;">神邸登录</button>
                                <button onclick="loginnew();" class="mdui-btn mdui-ripple" style="color: #ffab40;">登录</button>
                            </div>
                        </div>
                    </div>
                    <div class="mdui-typo">
                        <hr/>
                    </div>
                    <div class="mdui-card-actions" style="margin-bottom: 8px;">
                        <span> PHP Vision: <?php echo phpversion(); ?></span>
                        <span style="float:right;"> Creater:Bobh </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mdui-hidden-sm-up">
        <div calss="mdui-row">
            <div class="mdui-col-xs-10 mdui-col-offset-xs-1">
                <div class="mdui-card">
                    <div class="card-header">
                        <div class="mdui-card-primary">
                            <div class="mdui-card-primary-title" style="color:rgb(59, 59, 59);font-size:18px;">登录CheatChat手机版</div>
                        </div>
                    </div>
                    <div class="mdui-typo">
                        <hr/>
                    </div>
                    <div class="mdui-card-content">
                        <div class="mdui-row">
                            <div class="mdui-col-xs-10 mdui-col-offset-xs-1">
                                <div class="mdui-textfield mdui-textfield-floating-label">
                                    <label class="mdui-textfield-label">内部邮箱</label>
                                    <input id="pemail" class="mdui-textfield-input" type="email" style="cursor: text"/>
                                </div>
                                <div class="mdui-textfield mdui-textfield-floating-label">
                                    <label class="mdui-textfield-label">密码</label>
                                    <input id="ppass" class="mdui-textfield-input" type="password" style="cursor: text"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdui-card-actions">
                        <div class="mdui-row">
                            <div class="mdui-col-xs-2 mdui-col-offset-xs-8">
                                <button onclick="loginnew2();" class="mdui-btn mdui-ripple" style="color: #ffab40;">登录</button>
                            </div>
                        </div>
                        <div class="mdui-row">
                            <div class="mdui-col-xs-4 mdui-col-offset-xs-8">
                                <button onclick="ZenLogin();" class="mdui-btn mdui-ripple" style="color: #09f;">神邸登录</button>
                            </div>
                        </div>
                    </div>
                    <div class="mdui-typo">
                        <hr/>
                    </div>
                    <div class="mdui-card-actions" style="margin-bottom: 8px;">
                        <span> PHP Vision: <?php echo phpversion(); ?></span>
                        <span style="float:right;"> Creater:Bobh </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var message_Path = './live2d/'
        var home_Path = 'https://haremu.com/'
    </script>
    <script type="text/javascript" src="./live2d/js/live2d.js"></script>
    <script type="text/javascript" src="./live2d/js/message.js"></script>
    <script type="text/javascript">
        loadlive2d("live2d", "./live2d/model/haruna/22/model.2018.spring.json");
        //alert('警告！少儿不宜，石鑫不要看！！');
    </script>
</body>
</html>