<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JL</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
@include('cv.head')
<div class="container">
    <div class="row">
    @foreach($pages as $page)
        @include('cv.elements.page', ["page" => $page])
    @endforeach
    </div>
</div>
<script src="/js/app.js"></script>
</body>
</html>
