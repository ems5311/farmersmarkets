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
