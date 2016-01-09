<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.kwicks.min.css">
    <link rel="stylesheet" type="text/css" href="css/effect.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.kwicks.min.js"></script>
    <title> Hover Effect Collection - HungLH</title>
</head>

<body>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div id="example-01">
                <ul class='kwicks02 kwicks-horizontal'>
                    <li class="kwicks-selected">
                        <div class="hblock-content">
                            <div class="inner">
                                <img src="images/02.jpg" alt="">
                            </div>
                        </div>

                    </li>
                    <li >
                        <div class="hblock-content">
                            <div class="inner">
                                <img src="images/03.jpg" alt="">
                            </div>
                        </div>
                    </li>
                    <li >
                        <div class="hblock-content">
                            <div class="inner">
                                <img src="images/04.jpg" alt="">
                            </div>
                        </div>
                    </li>
                    <li >
                        <div class="hblock-content">
                            <div class="inner">
                                <img src="images/05.jpg" alt="">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<hr/>


<script type='text/javascript'>
    $().ready(function() {
        $('.kwicks01').kwicks({
            maxSize : '75%',
            behavior: 'menu',
            duration: '1000'
        });
        $('.kwicks02').kwicks({
            minSize: 20,
            behavior: 'slideshow',
            duration: '1000'
        });
    });
</script>
</body>

<footer>

</footer>