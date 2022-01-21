
{{-- la vista diventa un'estensione del layout --}}

@extends('layouts.main')

{{-- il nome della section deve corrispondere a quello dello @yield --}}
{{-- ci possono essere più sections  --}}
@section('content')
    <main>
        <h1>Lista prodotti</h1>
        <div class="container boxes">

            @foreach ($products as $product )
                <div class="product-card">
                    <img src="{{ $product['src'] }}" alt="{{ $product['titolo'] }}">
                    <h3>{{ $product['titolo'] }}</h3>
                </div>
            @endforeach





        </div>

      </main>
@endsection


