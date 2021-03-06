@extends('app')
@section('content')
<div class="d-flex justify-content-center mt-5">
<div style="width:50%">
  <form action="{{route('login')}}" method="post">
      <!-- Cross Site Request Forgery-->
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
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <!-- <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label> -->
    </div>
    <button class="w-100 btn btn-lg btn-primary pb-2" type="submit">Sign in</button>





    <p class="pt-2">----------------or------------</p>
    <a class="w-100 btn btn-lg btn-danger" href="{{route('registration')}}">Create An Account</a>
    
    
    
    <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
  </form>
</div>
</div>
@endsection