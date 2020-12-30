@extends('index')



@section('content')

    @if(Session::has('successes'))

    <div class="alert alert-primary" role="alert">
        {{Session::get('successes')}}
    </div>
    @endif


    <div class="d-flex justify-content-center">
        {!! $userInfo->links() !!}
    </div>

    <table class="table table-dark mt-3">
        <thead>
        <tr>
            <th scope="col">id ns</th>
            <th scope="col">name</th>
            <th scope="col">live</th>
            <th scope="col">phone</th>
            <th scope="col">Delete</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($userInfo as $user)
            <tr>
                <td>{{$user->id_ns}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->live}}</td>
                <td>{{$user->phone}}</td>
                <td><a href="{{route('delete.user', ['id' => $user->id])}}" class="text-danger"><i class="fas fa-trash"></i></a> </td>
                <td><a href="{{route('update.user.form', ['id' => $user->id])}}"><i class="fas fa-user-edit"></i></a> </td>
            </tr>
        @endforeach
        </tbody>
    </table>


<h3 class="text-center">Add new user</h3>

<div class="d-flex justify-content-center mb-5">
    <form action="{{route('store.user')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="id">Id ns</label>
            <input name="id_ns" type="text" class="form-control" id="phone">
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input name="phone" type="tel" class="form-control" id="phone">
        </div>

        <div class="form-group">
            <label for="live">Live</label>
            <input name="live"  type="text" class="form-control" id="live">
        </div>


        <button type="submit" class="btn btn-primary">Save</button>
    </form>

</div>
@endsection
