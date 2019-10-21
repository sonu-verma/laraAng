<?php date_default_timezone_set('Asia/Calcutta'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> <!-- test -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Email</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
        @yield('email-specific-link')
        <style type="text/css">
            /* General */
            a { color: #345498; text-decoration: none; }
            .bg-eee { text-align: center }
            #container { width: 700px; background-color: #f8f8f8; }
            #content { padding: 28px 47px 20px 47px; overflow: hidden; }
            #inner-content { background-color: #fff; margin:50px; }
            /* General */

            /* Header */
            #header { min-height: 76px; width: 600px; }
            #headerDivider { float: left; }
            #headerDivider img { float: left; margin: 27px 24px auto 20px; }
            #logo {  }
            #logo img { margin: 40px auto auto 40px; }
            #tagLine { float: left; }
            #tagLine img { margin-top: 32px; }
            #footer-links a {padding:6px;}
            /* Header */

            /* Footer */
            #footer { width: 600px; margin-top:30px; }
            /*#footer a { color:#fff; }*/
            #footer a { color: #fe5d03 !important; }
            #timestamp { color: #EEE; }
            /* Footer */
        </style>
        @yield('email-specific-css')
    </head>
    <body style="padding:0; margin:0;">
        <div  style="width: 700px; background: #f8f8f8; margin:0 auto;
                font-family: Arial,Tahoma,Verdana,sans-serif;
                font-size:16px;
                -webkit-text-size-adjust: 100% !important;
                -ms-text-size-adjust: 100% !important;
                -webkit-font-smoothing: antialiased !important; padding:50px;">
            {{--<div style="background: #fff;height:750px;">--}}
            <div style="background: #fff;height: 100%;">
                <div id="header" class="bg-eee" style="text-align: center; min-height: 76px; width: 100%;">
                    {{--<div id="logo">--}}
                        {{--<a href="{{ URL::to('/')}}" target="_blank"><img src="{{ asset('public/img/logo.png') }}" alt="MHLMS" width="230" style="margin-top: 0px;"/></a>--}}
                    {{--</div>--}}
                </div>
                <div style="clear: both;"></div>
                <div id="content" style="margin-top:20px; padding: 28px 47px; overflow: hidden; width:600px; min-height:480px;height: 100%;">
                    @yield('content')
                </div>
                <div style="clear: both;"></div>
                <div id="footer" align="center" style="margin-top:30px;width: 100%;">
                    @php
                        $year = date('Y') - 1 ."-".date('Y');
                    @endphp
                    &copy; {{ $year }} <a class="col-thm-orange" href="{{ url('/') }}">mhlms.com</a>.All rights reserved.
                </div>
            </div>
        </div>
    </body>
</html>
