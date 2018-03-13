@extends('cv.app')
@push('head')
@endpush
@section('content')
    @include('cv.modals.page_info_modal')
    <div class="container">
        {{--<button class="btn btn-outline-info log_pages">LOG PAGES OBJ</button>--}}
        <div class="row">
            @foreach($pages as $page)
                @include('cv.elements.page', ["page" => $page])
            @endforeach
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="/js/cv/portfolio_manager.js"></script>
    <script type="text/javascript">
        var local_obj_pages = {!! json_encode($pages) !!};

        $('.log_pages').unbind('click').click(function(){
            console.dir(local_obj_pages);
        });


    </script>
@endpush
