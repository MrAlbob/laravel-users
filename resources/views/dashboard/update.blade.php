@extends('index')



@section('content')

    @if(Session::has('successes'))

        <div class="alert alert-primary" role="alert">
            {{Session::get('successes')}}
        </div>
    @endif

    <h3 class="text-center">Update a user</h3>
    <a href="/dashboard" class="text-center">Go To Dashboard</a>

    <div class="d-flex justify-content-center mb-5">
        <form action="{{route('update.user')}}" method="post">

            <input name="id" type="hidden" value="{{$id}}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" id="name" value="{{$data->name}}">
            </div>
            <div class="form-group">
                <label for="id">Id ns</label>
                <input name="id_ns" type="text" class="form-control" id="phone" value="{{$data->id_ns}}">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input name="phone" type="tel" class="form-control" id="phone" value="{{$data->phone}}">
            </div>

            <div class="form-group">
                <label for="live">Live</label>
                <input name="live"  type="text" class="form-control" id="live" value="{{$data->live}}">
            </div>

<br/>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>



@endsection
