<div class="container">
    <div class="row">
        @foreach ($markets as $market)
            <div class="col-md-12">
                <div class="panel panel-default">
                    @include ('partials.medialinks')
                    <hr/>
                    <div class="panel-body">
                        <div class="row">
                            @include ('partials.marketinfo')
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

