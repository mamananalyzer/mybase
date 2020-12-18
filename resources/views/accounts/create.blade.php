@extends('layout/base')

@section('title', 'Account')

@section('container')
    <div class="container">
        <form class="py-3" enctype="multipart/form-data" action="{{ url('/accounts') }}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Email or Username</label>
              <input type="name" name="email" class="form-control" id="name" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="password">
            </div>
            <div class="form-group">
              <label for="sites">Sites</label>
              <input type="url" name="sites" class="form-control" id="sites" placeholder="steam.com">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="phonenumber" name="phonenumber" class="form-control" id="phone" placeholder="+62 812 9449 8448">
            </div>
            <div class="form-group">
              <label for="text">Additional Information</label>
              <textarea class="form-control" name="info" id="text" rows="3"></textarea>
            </div>
            <a href="{{ url('/accounts') }}" class="btn btn-secondary mb-4 mr-4">Back</a>
            <input class="btn btn-success mb-4" type="submit" name="submit" value="Add Account" />
        </form>
    </div>
@endsection