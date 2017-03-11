<div class="container">
    <div class="row">
        @foreach ($markets as $market)
            <div class="col-md-12">
                <div class="panel panel-default">
                    <h2 class="text-md-left">
                        {{ $market->marketName }}
                        @if($market->website)
                            <a href="{{ $market->website }}" class="btn btn-primary pull-right" style="margin-right: 10px">
                                <i class="fa fa-link" aria-hidden="true"></i>
                            </a>
                        @endif
                        @if($market->facebook)
                            <a href="{{ $market->facebook }}" class="btn btn-primary pull-right" style="margin-right: 10px">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        @endif
                        @if($market->twitter)
                            <a href="{{ $market->twitter }}" class="btn btn-primary pull-right" style="margin-right: 10px">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        @endif
                        @if($market->youtube)
                            <a href="{{ $market->youtube }}" class="btn btn-primary pull-right" style="margin-right: 10px">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </a>
                        @endif
                    </h2>
                    <hr/>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="https://www.google.com/maps?q={{ $market->yCoordinate }},{{ $market->xCoordinate }}"
                                   target="_blank">
                                    <img src="https://maps.googleapis.com/maps/api/staticmap?markers={{ $market->yCoordinate }},{{ $market->xCoordinate }}&zoom=14&size=300x300&key=AIzaSyBy_iZhvqq57d9KGpVTRR3kBtCucUrRrrE"
                                         alt="Location of {{ $market->marketName }}"
                                         class="img-thumbnail"
                                         width="100%" />
                                </a>
                            </div>
                            <div class="col-sm-8">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

