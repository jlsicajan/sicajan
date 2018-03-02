<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JL</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<div class="profile">
    <div class="image"></div>
    <div class="user-info">
        Hi, I'm Jose Sicajan I'm a passionate web developer, perfectionist, with a high sense of responsibility, I like to get into new projects and leave a part of myself in them, giving importance to the smallest details. I have worked with several international clients and local clients in Guatemala and I have learned that constant communication with the client is a very effective tool in achieving objectives. Not only do I like web development, I have also learned how to create Android Apps and desktop applications.
    </div>
</div>
<nav class="navbar navbar-toggleable-md navbar-default bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" onclick="wait_message()" href="#">HOME <span class="sr-only">(current)</span></a></li>
            <li class="nav-item"><a class="nav-link" onclick="wait_message()" href="#">ABOUT</a></li>
            <li class="nav-item"><a class="nav-link" onclick="wait_message()" href="#">SERVICES</a></li>
            <li class="nav-item {{ (Request::is('portfolio') ? 'active' : '') }}"><a class="nav-link" href="{{ route('portfolio') }}">PORTAFOLIO</a></li>
            <li class="nav-item"><a class="nav-link" onclick="wait_message()" href="#">BLOG</a></li>
            <li class="nav-item"><a class="nav-link" onclick="wait_message()" href="#">CONTACT</a></li>
        </ul>
    </div>
</nav>

@yield('content')
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="/js/app.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        resize_update();
    });

    $(window).on('resize', function () {
        resize_update();
    });

    function resize_update() {
        console.log("Window width => " + $(window).width());
        if ($(window).width() > 1300) {
            $('.navbar-default').addClass('give_space');
            $('.container').addClass('give_space');
            $('.profile').show();
            if ($(window).width() > 2000) {
                $('.navbar-default').removeClass('give_space');
                $('.navbar-default').addClass('m-l-500');
            }else{
                $('.navbar-default').removeClass('m-l-500');
            }
        } else {
            $('.navbar-default').removeClass('give_space');
            $('.container').removeClass('give_space');
            $('.navbar-default').removeClass('m-l-500');
            $('.profile').hide();
        }
    }

    function wait_message() {
        alert("En desarrollo.");
    }
</script>
</body>
</html>
