@extends('index')



@section('content')
<form action="{{route('dashboard.slider.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title"  placeholder="Enter the title">
    </div>
    <div class="form-group">
        <label for="desc">Description</label>
        <input name="desc" type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" placeholder="Enter the description">
    </div>
    <div class="form-check">
        <input type="file" name="image">
      @error('image')  <p class="text-danger">No image her</p> @enderror

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
