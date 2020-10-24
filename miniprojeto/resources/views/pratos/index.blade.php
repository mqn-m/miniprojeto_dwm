@extends('layout')

@section('content')
<section id="three" class="wrapper">
    <div class="inner flex flex-3">
        @foreach($pratos as $prato)
            <div class="flex-item box">
                <div class="content">
                    <h3>{{ $prato->nome }}</h3>
                    <p>{{ $prato->nota}}</p>

                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection