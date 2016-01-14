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
                    <li>
                        <div class="hblock-content">
                            <div class="inner">
                                <img src="images/03.jpg" alt="">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="hblock-content">
                            <div class="inner">
                                <img src="images/04.jpg" alt="">
                            </div>
                        </div>
                    </li>
                    <li>
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
    <hr/>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="image-bann image-bann01">
                    <div class="effect">
                        <img class="img-responsive" alt="" src="images/small01.jpg">
                        <a class="bann-text-link line-effect01" title="" href="#"><span
                                class="h2 no-margin block-center">MEN'S</span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="image-bann image-bann02">
                    <div class="effect">
                        <a href="#"><img class="img-responsive" src="images/small02.jpg" alt=""></a>
                        <div class="bann-content">
                            <div class="post-date"><i class="fa fa-calendar"></i> <span class="month">Nov</span> <span
                                    class="day">02</span> <span class="year">15</span></div>
                            <div class="comment-box"><span class="comments"> <span class="count"> <i
                                            class="fa fa-comments-o"></i> 0 </span> comments </span></div>
                            <div class="blog_short_text clearfix">
                                <a href="#"><span class="title">New collection for men 2016</span></a>
                                <div class="shortcontent-text">
                                    <p class="short-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry’s standard dummy text
                                        ever...</p>
                                </div>
                                <a class="button btn-cart"
                                   href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type='text/javascript'>
    $().ready(function () {
        $('.kwicks01').kwicks({
            maxSize: '75%',
            behavior: 'menu',
            duration: '1000'
        });
        $('.kwicks02').kwicks({
            minSize: 70,
            behavior: 'slideshow',
            duration: '2000'
        });
    });
</script>
</body>

<footer>

</footer>