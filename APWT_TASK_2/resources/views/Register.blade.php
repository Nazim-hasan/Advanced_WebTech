@extends('app')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <div style="width:50%">
        <form action="{{route('registration')}}" method="post">
        {{csrf_field()}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <h2>Register</h2>
            <p class="hint-text">Create your account. It's free and only takes a minute.</p>
            <div class="form-group mb-2">
                <div class="row">
                    <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
                    <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
                </div>        	
            </div>
            <div class="form-group mb-2">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>
            <div class="form-group mb-2">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group mb-2">
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
            </div>        
            <div class="form-group mb-2">
                <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm btn-block">Register Now</button>
            </div>
        </form>
        <div class="text-center">Already have an account? <a href="#">Sign in</a></div>
    </div>
</div>
@endsection