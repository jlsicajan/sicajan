<div class="col-md-4 col-lg-3 col-sm-5 page">
    <div class="page_container">
        <div class="thumbnail" style="background-image: url({{ asset($page->thumbnail) }})">
            <div class="url_container">
                @if(!empty($page->url))
                    <a href="{{ $page->url }}" class="page_url" target="_blank">{{ $page->url }}</a>
                @else
                    <span class="page_url">Internal</span>
                @endif
            </div>
        </div>

        <div class="description_container">
            <span class="title">
                {{ $page->title }}
            </span>
            <ul>
                <li><p>{!! $page->time  !!}</p></li>
                <li><p>{{ date('M Y', $page->date_start) }} - {{ date('M Y', $page->date_end) }}</p></li>
                <li><p>{!! $page->work_title  !!}</p></li>
            </ul>
            <button data-page-id="{{ $page->id }}" class="btn btn-success page-info" data-toggle="modal" data-target="#page_info_modal">More+</button>
        </div>
    </div>
</div>