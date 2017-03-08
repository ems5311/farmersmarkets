<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            @foreach($stateColumns as $states)
                <div class="col-md-4">
                    <ul class="list-group">
                        @foreach($states as $state)
                            <li class="list-group-item justify-content-between">
                                <a href="#">{{ $state->name }}</a>
                                <span class="badge badge-default badge-pill">{{ $state->total }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</div>
