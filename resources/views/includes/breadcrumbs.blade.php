@if(!empty($breadcrumbs))
<nav aria-label="breadcrumb" class="mt-3 mb-0">
    <ol class="breadcrumb" style="background: transparent; padding: 0; font-size: 0.9rem;">
        @foreach($breadcrumbs as $crumb)
            @if($loop->last)
                <li class="breadcrumb-item active" aria-current="page">{{ $crumb['label'] }}</li>
            @else
                <li class="breadcrumb-item"><a href="{{ $crumb['url'] }}">{{ $crumb['label'] }}</a></li>
            @endif
        @endforeach
    </ol>
</nav>
@endif