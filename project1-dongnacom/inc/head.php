<!DOCTYPE html>
<html>
<title>동네컴퓨터학원</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- 웹폰트 -->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic+Coding:700" rel="stylesheet">  

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    <style>
    .box{
        position: absolute;
        width: 100%;
        transition: 0.1s linear;
        padding-left: 8em;
        padding-top: 3em;
    }

    .redbox{
        margin-top: 8em;
        -webkit-transform: translate3d(0px, 0px, 0px);
    }

    .greenbox{
        
        margin-top: 8em;
        -webkit-transform: translate3d(0px, 0px, 0px);
    }

    .title{
        display: inline; 
        float: left; 
        /* border:1px solid black;  */
        margin-left: 5em; 
        font-size: 3rem;
        text-align: left;
    }

    .w3-light-grey{
    background-color: #36333C !important;
    color: white !important;
    }

    </style>
</head>

<body>
    <div id="grid">
            <nav class="navbar navbar-default navbar-fixed-top" style="box-shadow: 2px 2px 5px gray; width: 100%;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" id="logo" href="#">dongne-com</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRODUCTS <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="border: 0px;">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>   -->
                        <li><a href="#">EDUCATION</a></li>
                        <li><a href="#">COMMUNITY</a></li>
                        <li><a href="#">SUPPORT</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="margin-right: 0px;">
                        <li><a href="../login/login.php">LOGIN</a></li>
                        <li><a href="#">(0)CART</a></li>
                    </ul>
                </div>
            </nav>