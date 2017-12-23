<div class="col-md-4 col-lg-3 col-sm-5 page">
    <div class="page_container">
        <div class="thumbnail" style="background-image: url({{ asset("images/portfolio/google.jpg") }})">
            <div class="url_container">
                <a href="{{ $page->url }}" class="page_url">{{ $page->url }}</a>
            </div>
        </div>

        <div class="description_container">
            <span class="project_description">
                {{ $page->description }}
            </span>
            <button class="btn btn-success">More+</button>
        </div>
    </div>
</div>