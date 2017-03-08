<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            @foreach ($cities->chunk(17) as $cityList)
                <div class="col-md-4">
                    <ul class="list-group">
                        @foreach($cityList as $city)
                            <li class="list-group-item justify-content-between">
                                <a href="#">{{ $city->name }}</a>
                                <span class="badge badge-default badge-pill">{{ $city->total }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</div>
