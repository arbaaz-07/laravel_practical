@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{url('/add')}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputDescription1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleInputDescription1" name="description">
  </div>
  <div class="mb-3">
    <label for="exampleInputPrice1" class="form-label">Price</label>
    <input type="text" class="form-control" id="exampleInputPrice1" name="price">
  </div>
  <div class="mb-3">
    <label for="exampleInputPrice1" class="form-label">upload Image</label>
    <input type="file" class="form-control" id="exampleInputPrice1" name="image">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection

