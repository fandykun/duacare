@extends('layouts.admin')

@section('style')
<style>
img {
    max-width: 240px;
    height: auto;
}
</style>
@endsection

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Change Password</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 border-bottom-primary">
            <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
        </div>

        <div class="card-body">
            @if(\Session::has('success'))
              <div class="alert alert-success">
                {!! \Session::get('success') !!}
              </div>
            @endif
            <form method="POST" action="{{ route('change.password') }}">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Old Password</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" name="old_password" placeholder="Old Password" min="6" max="30" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">New Password</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" name="password" placeholder="New Password" min="6" max="30" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">New Password Confirmation</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" name="password_confirmation" placeholder="New Password Confirmation" min="6" max="30" required>
                        <small>New password confirmation should exactly same as new password</small>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
@endsection 