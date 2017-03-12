<div class="container">
    <div class="row">
        @foreach ($markets as $market)
            <div class="col-md-12">
                <div class="panel panel-default">
                    <h2 class="text-md-left">
                        {{ $market->marketName }} <small>{{ $market->id }}</small>
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
                                <div class="container">
                                    <div id="content">
                                        <ul id="tabs-{{ $market->id }}" class="nav nav-tabs" data-tabs="tabs">
                                            <li class="nav-item"><a class="nav-link active" href="#schedule-{{ $market->id }}" data-toggle="tab">Schedule</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#payment-{{ $market->id }}" data-toggle="tab">Accepted Payment</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#services-{{ $market->id }}" data-toggle="tab">Services</a></li>
                                        </ul>
                                        <div id="my-tab-content-{{ $market->id }}" class="tab-content">
                                            <div class="tab-pane active" id="schedule-{{ $market->id }}">
                                                <p>schedule</p>
                                            </div>
                                            <div class="tab-pane" id="payment-{{ $market->id }}">
                                                <p>payment</p>
                                            </div>
                                            <div class="tab-pane" id="services-{{ $market->id }}">
                                                <p>services</p>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        jQuery(document).ready(function ($) {
                                            $("#tabs-{{ $market->id }}").tab();
                                        });
                                    </script>
                                </div>
                                {{--<div class="col-sm-4">--}}
                                    {{--@if($market->season1Date)--}}
                                        {{--<strong>Seasons</strong>--}}
                                        {{--<hr/>--}}
                                        {{--<ul>--}}
                                            {{--<li>{{ $market->season1Date }}</li>--}}
                                            {{--@if($market->season1Time)--}}
                                                {{--<li>{{ $market->season1Time }}</li>--}}
                                            {{--@endif--}}
                                            {{--@if($market->season2Date)--}}
                                                {{--<li>{{ $market->season2Date }}</li>--}}
                                            {{--@endif--}}
                                            {{--@if($market->season2Time)--}}
                                                {{--<li>{{ $market->season2Time }}</li>--}}
                                            {{--@endif--}}
                                            {{--@if($market->season3Date)--}}
                                                {{--<li>{{ $market->season3Date }}</li>--}}
                                            {{--@endif--}}
                                            {{--@if($market->season3Time)--}}
                                                {{--<li>{{ $market->season3Time }}</li>--}}
                                            {{--@endif--}}
                                            {{--@if($market->season4Date)--}}
                                                {{--<li>{{ $market->season4Date }}</li>--}}
                                            {{--@endif--}}
                                            {{--@if($market->season4Time)--}}
                                                {{--<li>{{ $market->season4Time }}</li>--}}
                                            {{--@endif--}}
                                        {{--</ul>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                                {{--TODO update payment methods to be seeded from the CitiesSeeder file--}}
                                {{--<div class="col-sm-4">--}}
                                    {{--<strong>Accepted Payment</strong>--}}
                                    {{--<hr/>--}}
                                    {{--<ul>--}}
                                    {{--@foreach ($market->paymentTypes() as $p_k => $p_v)--}}
                                        {{--<li>{{ $p_k }}</li>--}}
                                    {{--@endforeach--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

