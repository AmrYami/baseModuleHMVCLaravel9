<div class="card shadow-sm">
    <div class="card-header">
        @isset($title)  
            <h3 class="card-title">{{ $title }}</h3>
        @endisset
        @isset($toolbar)
        <div class="card-toolbar">
            {{ $toolbar}}
        </div>
        @endisset
    </div>
    <div class="card-body">
        {{$slot}}
    </div>
    @isset($footer)
    <div class="card-footer">
        {{$footer}}
    </div>
    @endisset
</div>