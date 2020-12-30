@extends('index')

@section('content')

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            @foreach($sliders as $slider)

            <div class="carousel-item active">
                <img class="d-block w-100" src="{{$slider->image}}" height="400" alt="First slide">
            </div>
            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="d-flex justify-content-center mt-5">
        {!! $userInfo->links() !!}
    </div>

    <table class="table table-dark mt-3">
        <thead>
        <tr>
            <th scope="col">id ns</th>
            <th scope="col">name</th>
            <th scope="col">live</th>
            <th scope="col">phone</th>
        </tr>
        </thead>
        <tbody>
        @foreach($userInfo as $user)
        <tr>
            <td>{{$user->id_ns}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->live}}</td>
            <td>{{$user->phone}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
