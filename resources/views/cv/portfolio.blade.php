@extends('cv.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($pages as $page)
                @include('cv.elements.page', ["page" => $page])
            @endforeach
        </div>
    </div>
@endsection