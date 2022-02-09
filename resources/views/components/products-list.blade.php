<div class="products-list">
    <h2>{{ $title }}</h2>

    <div class="products">
        @foreach ($pasta_array as $pasta)
            {{-- Single product --}}
            <div class="product">
                <div>
                    <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                    <h3>{{ $pasta['titolo'] }}</h3>
                </div>
            </div>
            {{-- End Single product --}}
        @endforeach
    </div>
</div>