@extends('base')

@section('title', 'Menu')

@section('content')
    <section>
        <h2>Menu</h2>
        @foreach ($categories as $categorie)
        <div>
            <h3>{{ $categorie }}</h3>
            <ul class="plats">
                @for ($i = 0; $i < 3; $i++)
                <li>
                    <img src="images/edgar-castrejon petit format.jpg" alt="Las noches">
                    <h4>Lorem ipsum dolor</h4>
                    <span class="price">19,99 €</span>
                </li>
                @endfor 
            </ul>
        </div>
        @endforeach

    </section>
@endsection
    <footer>
        <!-- TODO -->
    </footer>
</body>

</html>