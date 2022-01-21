
{{-- la vista diventa un'estensione del layout --}}

@extends('layouts.main')

{{-- il nome della section deve corrispondere a quello dello @yield --}}
{{-- ci possono essere più sections  --}}
@section('content')
    <main>
        <h1>About</h1>
        <div class="container boxes">

            <div class="product-card">
                {{-- <img :src="product.src" :alt="product.titolo">
                <h3>{{product.titolo}}</h3> --}}
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates suscipit laboriosam libero. Autem officiis repellat nam blanditiis exercitationem, facere eum quibusdam nemo optio neque est ullam, laborum, obcaecati recusandae soluta?
                </p>
            </div>



        </div>

      </main>
@endsection


