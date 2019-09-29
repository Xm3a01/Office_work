@extends('layouts.defult')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login', app()->getLocale()) }}">
                        @csrf

<div class="bg-light modeltop " id="login" >
    <div class="container  justify-content-center mb-3" role="document">
        <div class=" row  justify-content-center mb-5">
          <div class="col-md-4 bg-white">
            <div class="">
                <strong> <h5 class="text-center pt-5 pb-3" id="exampleModalLabel">   {{ __('Login') }}  </h5></strong>
            </div>
            <div class="pt-2">  
               <form action="{{ route('login') }}" class="p-2 ">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="email" class="">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror 
                   </div> 
                         
                <div class="form-group col-md-12">
                    <label for="password">{{ __('Password') }}</label>
                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request', app()->getLocale()) }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

                </div>
            </form>  
            
                  <p class="text-center p-5"> <u><a href="#" class="text-center">{{ __(' Dont have account? register now') }} </a></u></p>
            </div>
          </div>
        </div>
      </div>
</div>


      @endsection
    