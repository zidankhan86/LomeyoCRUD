<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-dfSNAY9Fmw4b4lNBlI5jfHYJ6T/J9WMyUTviWwFVEqsFpWfglm4z/o5b5Bh4HRmf" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/webfonts/all.css">

    <style>
        body {
            background: #C5E1A5;
        }
        .sidebar {
            width: 180px;
            position: fixed;
            top: 0;
            left: 0;
            background: #333;
            color: #fff;
            padding: 20px;
            height: 100%;
        }
        form {
            width: 60%;
            margin-left: 270px;
            background: #efefef;
            padding: 60px 120px 80px 120px;
            text-align: center;
            -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
            box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            position: relative;
            margin: 40px 0px;
        }
        .label-txt {
            position: absolute;
            top: -1.6em;
            padding: 10px;
            font-family: sans-serif;
            font-size: .8em;
            letter-spacing: 1px;
            color: rgb(120,120,120);
            transition: ease .3s;
        }
        .input {
            width: 100%;
            padding: 10px;
            background: transparent;
            border: none;
            outline: none;
        }
        .line-box {
            position: relative;
            width: 100%;
            height: 2px;
            background: #BCBCBC;
        }
        .line {
            position: absolute;
            width: 0%;
            height: 2px;
            top: 0px;
            left: 50%;
            transform: translateX(-50%);
            background: #8BC34A;
            transition: ease .6s;
        }
        .input:focus + .line-box .line {
            width: 100%;
        }
        .label-active {
            top: -3em;
        }
        button {
            display: inline-block;
            padding: 12px 24px;
            background: rgb(220,220,220);
            font-weight: bold;
            color: rgb(120,120,120);
            border: none;
            outline: none;
            border-radius: 3px;
            cursor: pointer;
            transition: ease .3s;
        }
        button:hover {
            background: #8BC34A;
            color: #ffffff;
        }
    </style>
</head>
<body>
   @include('sidebar')
   @yield('content')
    <script>
        $(document).ready(function(){
            $('.input').focus(function(){
                $(this).parent().find(".label-txt").addClass('label-active');
            });
            $(".input").focusout(function(){
                if ($(this).val() == '') {
                    $(this).parent().find(".label-txt").removeClass('label-active');
                };
            });
        });
    </script>
</body>
</html>
