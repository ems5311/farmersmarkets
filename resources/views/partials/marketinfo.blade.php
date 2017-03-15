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
                    @if (!$market->schedule)
                        <strong>No schedule info provided</strong>
                    @else
                        {!! $market->schedule !!}
                    @endif
                </div>
                <div class="tab-pane" id="payment-{{ $market->id }}">
                    <div class="container">
                        @if (!$market->payments)
                            <strong>No payment info provided</strong>
                        @else
                            {!! $market->payments !!}
                        @endif
                    </div>
                </div>
                <div class="tab-pane" id="services-{{ $market->id }}">
                    <div class="container">
                        @if (!$market->services)
                            <strong>No info provided regarding guarenteed products</strong>
                        @else
                            {!! $market->services !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $("#tabs-{{ $market->id }}").tab();
            });
        </script>
    </div>
</div>
