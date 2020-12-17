@extends('layout/base')

@section('title', 'Account')

@section('container')
    <div class="container">
        <div class="row mx-4 my-3">
            <div class="col">
                <a href="{{ '/accounts/create' }}">
                    <button type="button" class="btn btn-success">Add Account</button>
                </a>
                <button type="button" class="btn btn-success">Success</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-success">Success</button>
            </div>
        </div>
        <div class="row mx-4 my-3">
            <div class="col">
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-success">Success</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-success">Success</button>
            </div>
        </div>
    </div>

    {{-- display list account --}}
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Sites</th>
            <th scope="col">Addition Info</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>@twitter</td>
          </tr>
        </tbody>
    </table>

    {{-- @if(auth()->user()->role == 'admin') --}}
        {{-- <ul class="list-group mb-4">
            @foreach ($products as $product)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $product -> type }}
            <a href="products/{{ $product->id }}" class="badge badge-info">Read more ...</a>
            </li>
            @endforeach
        </ul> --}}
    {{-- @endif --}}

@endsection