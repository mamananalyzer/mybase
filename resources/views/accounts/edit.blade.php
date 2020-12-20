@extends('layout/base')

@section('title', 'Account')

@section('container')
    <div class="container">
        <form class="py-3" enctype="multipart/form-data" action="{{url('/accounts')}}/{{ $account->id }}" method="POST">
        @method('patch')
        {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Email or Username</label>
              <input type="name" name="email" class="form-control" id="name" value="{{ $account->email }}">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" value="{{ $account->password }}">
            </div>
            <div class="form-group">
              <label for="sites">Sites</label>
              <input type="url" name="sites" class="form-control" id="sites" value="{{ $account->sites }}">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="phonenumber" name="phonenumber" class="form-control" id="phone" value="{{ $account->phonenumber }}">
            </div>
            <div class="form-group">
              <label for="text">Additional Information</label>
              <input class="form-control" name="info" id="text" rows="3" value="{{ $account->info }}">
            </div>
            <a href="{{ url('/accounts') }}" class="btn btn-secondary mb-4 mr-4">Back</a>
            <input class="btn btn-success mb-4" type="submit" name="submit" value="Edit Account" />
        </form>
    </div>
@endsection