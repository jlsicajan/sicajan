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
    <div class="image" style="background-image: url({{ asset("images/profile/deathstroke.jpg") }})">asdas</div>
    <div class="user-info">
        Sed aliquam ultrices mauris. Aliquam lobortis. Praesent adipiscing. Phasellus gravida semper nisi. Suspendisse eu ligula.

        Pellentesque auctor neque nec urna. Fusce egestas elit eget lorem. Vestibulum fringilla pede sit amet augue. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Fusce commodo aliquam arcu.

        Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Vivamus quis mi. Curabitur blandit mollis lacus. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc.

        Ut tincidunt tincidunt erat. Nam eget dui. Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Ut tincidunt tincidunt erat. Praesent nonummy mi in odio.

        Aliquam eu nunc. Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis tellus, vitae iaculis lacus elit id tortor. Vestibulum volutpat pretium libero. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis tellus, vitae iaculis lacus elit id tortor.
    </div>
</div>
@include('cv.head')
<div class="container">
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6"></div>
    </div>
</div>

<!-- Scripts -->
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
</script>
</body>
</html>
