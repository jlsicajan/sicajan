<div class="profile">
    <div class="image" style="background-image: url({{ asset("images/profile/deathstroke.jpg") }})">asdas</div>
    <div class="user-info">
        Sed aliquam ultrices mauris. Aliquam lobortis. Praesent adipiscing. Phasellus gravida semper nisi. Suspendisse eu ligula.

        Pellentesque auctor neque nec urna. Fusce egestas elit eget lorem. Vestibulum fringilla pede sit amet augue. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Fusce commodo aliquam arcu.

        Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Vivamus quis mi. Curabitur blandit mollis lacus. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc.

        Ut tincidunt tincidunt erat. Nam eget dui. Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Ut tincidunt tincidunt erat. Praesent nonummy mi in odio.

        Aliquam eu nunc. Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis tellus, vitae iaculis lacus elit id tortor. Vestibulum volutpat pretium libero. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis tellus, vitae iaculis lacus elit id tortor.
    </div>
</div>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">HOME <span class="sr-only">(current)</span></a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">SERVICES</a></li>
                <li {{ (Request::is('portfolio') ? 'class=active' : '') }} ><a href="{{ route('portfolio') }}">PORTAFOLIO</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">CONTACT</a></li>
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="#">About</a></li>--}}
                        {{--<li><a href="#">Portafolio</a></li>--}}
                        {{--<li><a href="#">Something else here</a></li>--}}
                        {{--<li role="separator" class="divider"></li>--}}
                        {{--<li><a href="#">Separated link</a></li>--}}
                        {{--<li role="separator" class="divider"></li>--}}
                        {{--<li><a href="#">One more separated link</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
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
</script>