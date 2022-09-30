@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->

                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">sno</th>
                        <th scope="col">name</th>
                        <th scope="col">image</th>
                        <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                    @foreach ($products as $product)
                        <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{$product->name}}</td>
                        <td><img src="/image/{{ $product->image }}" width="100px"></td>
                        <td>
                            <a href="/delete/{{$product->id}}" ><button type="submit" class="btn btn-danger">Delete</button></a>
                            <a href="/edit/{{$product->id}}" ><button type="submit" class="btn btn-danger">Edit</button></a>
                        </td>
                        <?php $i++; ?>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
