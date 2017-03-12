<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            @foreach($stateColumns as $states)
                <div class="col-md-4">
                    <div class="list-group">
                        @foreach($states as $state)
                            <a href="/states/{{ $state->name }}" class="list-group-item list-group-item-action justify-content-between">
                                {{ $state->name }}
                                <span class="badge badge-success badge-pill">{{ $state->total }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
