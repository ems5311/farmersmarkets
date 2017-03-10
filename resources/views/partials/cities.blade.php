<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            @foreach ($cities->chunk(17) as $cityList)
                <div class="col-md-4">
                    <ul class="list-group">
                        @foreach($cityList as $city)
                            <li class="list-group-item justify-content-between">
                                <a href="/states/{{ $city->state }}/{{ $city->name }}">{{ $city->name }}</a>
                                <span class="badge badge-default badge-pill">{{ $city->total }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</div>

<nav class="blog-pagination">

    <a class="btn btn-outline-{{ $cities->currentPage() == 1 ? 'secondary disabled' : 'primary' }}"
       href="{{ $cities->previousPageUrl()  }}">Older</a>
    <a class="btn btn-outline-{{ $cities->hasMorePages() ? 'primary' : 'secondary disabled' }}"
       href="{{ $cities->nextPageUrl() }}">Newer</a>

</nav>
