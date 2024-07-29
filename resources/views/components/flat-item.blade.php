<Link href="{{ route('flats.show'  , $flat['id']) }}">
    <div class="flat-item">

        <h3>  {{ $flat['name'] }}</h3>
        <div class="flat-meta">
    
            <span>
                <i class="fi fi-rr-ruler-triangle"></i>
                {{ $flat['area'] }}
            </span>
    
            <span>
                <i class="fi fi-rr-money-bill-wave"></i>
                {{ $flat['price'] }} ر.س
            </span>
        </div>
    </div>
</Link>