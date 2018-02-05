<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AdminLTE 2 | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="renderer" content="webkit">
 <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
          <script src="assets/js/html5shiv.js"></script>
          <script src="assets/js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            var require = {
                "config": {
                    "site": {
                        "name": "FastAdmin",
                        "cdnurl": "./",
                        "version": "1.0.0",
                        "timezone": "Asia/Shanghai",
                        "languages": {
                            "backend": "zh-cn",
                            "frontend": "zh-cn"
                        }
                    },
                    "upload": {
                        "cdnurl": "./",
                        "uploadurl": "data/upload.json",
                        "bucket": "yourbucketname",
                        "maxsize": "10mb",
                        "mimetype": "*",
                        "multipart": {
                            "policy": "eyJidWNrZXQiOiJ5b3VyYnVja2V0bmFtZSIsInNhdmUta2V5IjoiXC91cGxvYWRzXC97eWVhcn17bW9ufXtkYXl9XC97ZmlsZW1kNX17LnN1ZmZpeH0iLCJleHBpcmF0aW9uIjoxNTAwNTI2NTczLCJub3RpZnktdXJsIjoiaHR0cDpcL1wvd3d3LnlvdXJzaXRlLmNvbVwvdXB5dW5cL25vdGlmeSJ9",
                            "signature": "043eaf09c0319b1a9a11d06511bfdc4e",
                            "bucket": "yourbucketname",
                            "save-key": "/uploads/{year}{mon}{day}/{filemd5}{.suffix}",
                            "expiration": 1500526573,
                            "notify-url": "http://www.yoursite.com/upyun/notify"
                        },
                        "multiple": false
                    },
                    "modulename": "admin",
                    "controllername": "index",
                    "actionname": "login",
                    "jsname": "backend/index",
                    "moduleurl": "./",
                    "language": "zh-cn",
                    "referer": null
                }
            };
        </script>

        <style type="text/css">

            body {
                color:#999;
                background:url('http://img.infinitynewtab.com/wallpaper/{{mt_rand(1111,9999)}}.jpg');
                background-size:cover;
            }
            .login-wrapper{
                margin-top: 200px;
            }
            a {
                color:#fff;
            }
            .login-panel{margin-top:150px;}
            .login-screen {
                max-width:400px;
                padding:0;
                margin:100px auto 0 auto;

            }
            .login-screen .well {
                border-radius: 20px;
                -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                background: rgba(255,255,255, 0.2);
            }
            .login-screen .copyright {
                text-align: center;
            }
            @media(max-width:767px) {
                .login-screen {
                    padding:0 20px;
                }
            }
            .profile-img-card {
                width: 100px;
                height: 100px;
                margin: 10px auto;
                display: block;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                border-radius: 50%;
            }
            .profile-name-card {
                text-align: center;
            }

            #login-form {
                margin-top:20px;
            }
            #login-form .input-group {
                margin-bottom:15px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="login-wrapper">
                <div class="login-screen">
                    <div class="well">
                        <div class="login-form">
                            <img id="profile-img" class="profile-img-card" src="/Admin/dist/img/login/avatar.png" />
                            <p id="profile-name" class="profile-name-card"></p>

                            <form action="data/login.json" method="post" id="login-form">
                                <div id="errtips" class="hide"></div>
                                <input type="hidden" name="__token__" value="68041f02fc8315b7ccdfaeb0e189a743" />                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                                        <input type="text" class="form-control" id="pd-form-username" placeholder="用户名" name="username" autocomplete="off" value="" data-rule="用户名:required;username" />
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
                                </div>

                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
                                    <input type="password" class="form-control" id="pd-form-password" placeholder="密码" name="password" autocomplete="off" value="" data-rule="密码:required;password" />
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"><!-- glyphicon glyphicon-eye-close --></span></div>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                                    <input type="password" class="form-control" id="pd-form-password" placeholder="验证码" name="password" autocomplete="off" value="" data-rule="密码:required;password" />
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></div>
                                </div>

                                <div class="form-group">
                                    <label class="inline" for="keeplogin">
                                        <input type="checkbox" name="keeplogin" id="keeplogin" value="1" />
                                        保持会话                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg btn-block">快快戳我</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <p class="copyright"><a href="http://www.fastadmin.net?ref=demo">Powered By Phoenix</a></p>
                </div>
            </div>
        </div>
        <script src="/Admin/dist/js/login/require.min.js" data-main="/Admin/dist/js/login/require-backend.min.js"></script>
    </body>
</html>