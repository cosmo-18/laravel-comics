@extends('layouts.app')
@section('titolo-pagina', "comics")
@section('main-content')


<div class="container">
    <div class="row">

        @foreach ($comics as $elem)

        <div class="col-3 d-flex  w-70 fs-8 my-4">
            <div class="card" style="width: 18rem;">
                <img src="{{$elem ['thumb']}}" class="card-img-top " alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$elem ['title']}}</h5>
                  <p class="card-text">{{$elem ['description']}}</p>
                  <a href="" class="btn btn-primary">Leggi questo fumetto ! </a>
                </div>
              </div>
        </div>

        @endforeach

    </div>
</div>

@endsection
