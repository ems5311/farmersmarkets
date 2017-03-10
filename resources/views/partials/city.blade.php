<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <ul class="list-group">
                @foreach ($city->markets as $market)
                    <li class="list-group-item justify-content-between">
{{--                        <a href="/state/{{ $city->state }}/{{ $city->name }}">{{ $city->name }}</a>--}}
                        {{--<span class="badge badge-default badge-pill">{{ $city->total }}</span>--}}
                        {{ $market }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

{{--<nav class="blog-pagination">--}}

    {{--<a class="btn btn-outline-{{ $cities->currentPage() == 1 ? 'secondary disabled' : 'primary' }}"--}}
       {{--href="{{ $cities->previousPageUrl()  }}">Older</a>--}}
    {{--<a class="btn btn-outline-{{ $cities->hasMorePages() ? 'primary' : 'secondary disabled' }}"--}}
       {{--href="{{ $cities->nextPageUrl() }}">Newer</a>--}}

{{--</nav>--}}
