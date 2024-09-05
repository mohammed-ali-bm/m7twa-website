@if ($flat->status == 'done')

    <div class="flat-item {{ $flat->status }}">

        <div class="opacity-50">
            <h3> {{ $flat['name'] }}</h3>
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

        @if (@$showOptions)
            <div class="flex-apart flat-item-links">
                <p>{{ \App\Models\Register::where('flat_id', $flat->id)->where('status', 'done')->first()->name ?? '' }}
                </p>
                <Link href="{{ route('dashboard.flats.list', [ "set_status" => 'active' , "id" =>  $flat['id']]) }}" class="secondary-button button-sm">إتاحة الشقة
                </Link>
            </div>
        @endif
    </div>
@else
    <Link href="{{ route('flats.show', $flat['id']) }}">
    <div class="flat-item {{ $flat->status }}">

        <h3> {{ $flat['name'] }}</h3>
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

        @if (@$showOptions)
            <div class="flex-apart flat-item-links">
                <p>{{ \App\Models\Register::where('flat_id', $flat->id)->where('status', 'done')->first()->name ?? '' }}
                </p>
                {{-- <Link href="{{ route('flats.show', $flat['id']) }}" class="secondary-button button-sm">التفاصيل</Link> --}}
   
            </div>
        @endif
    </div>




    </Link>
@endif
