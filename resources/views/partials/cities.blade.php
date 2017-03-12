<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            @foreach ($cities->chunk(17) as $cityList)
                <div class="col-md-4">
                    <div class="list-group">
                        @foreach($cityList as $city)
                            <a href="/states/{{ $city->state }}/{{ $city->name }}" class="list-group-item list-group-item-action justify-content-between">
                                {{ $city->name }}
                                <span class="badge badge-success badge-pill">{{ $city->total }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<nav class="blog-pagination">
    <a class="btn btn-outline-{{ $cities->currentPage() == 1 ? 'secondary disabled' : 'primary' }}"
       href="{{ $cities->previousPageUrl()  }}">Previous</a>
    <a class="btn btn-outline-{{ $cities->hasMorePages() ? 'primary' : 'secondary disabled' }}"
       href="{{ $cities->nextPageUrl() }}">Next</a>
</nav>
