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
            <th scope="col">Phone Number</th>
            <th scope="col">Addition Info</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($account as $acc)
            <tr>
              <th scope="row">{{ $acc->id }}</th>
              <td>{{ $acc->email }}</td>
              <td>{{ $acc->password }}</td>
              <td>{{ $acc->sites }}</td>
              <td>{{ $acc->phonenumber }}</td>
              <td>{{ $acc->info }}</td>
              <td>
                <a href="{{ $acc->id }}/edit" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                <form action="{{url('/accounts')}}/{{ $acc->id }}" method="post" class="d-inline">
                    @method('delete')
                    {{ csrf_field() }}
                    <button type="submit" onclick="return confirm('Are you sure delete this account ?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                </form>
              </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection