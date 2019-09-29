@extends('layouts.defult')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register', app()->getLocale()) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

 
<div class="bg-light modeltop " id="login" >
  <div class="container  justify-content-center " role="document">
    <div class=" row  justify-content-center ">
     <div class="col-md-4 mb-5  bg-white">
        <div class="">
            <strong> <h5 class="text-center pt-5 pb-3" id="exampleModalLabel"> {{ __('أنشئ حسابك الان')}}</h5></strong>
            </div>
        <div class="py-2 ">  
          <form action="#" class="p-2 ">
             <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="name" > {{ __('First Name') }} </label>
                            
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                <div class="form-group col-md-12">
                    <label for="name"  > {{ __('Last Name') }} </label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
        <div class="form-group col-md-12">
                <label for="email" class=" "> {{ __('E-Mail Address') }} </label>
 
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
            <div class="form-group col-md-12 mb-1">
                    <label for="inputEmail4">{{ __(' Role ') }}</label>
                    <select id="inputState" class="form-control">
                        <option>الطب والرعاية الصحية</option> 
                    </select>
                    </div>
                    <div class="form-group  col-md-12">
                        <label for="password"  > {{ __('Password') }} </label>
 
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                 

                    <div class="form-group  col-md-12">
                        <label for="password-confirm" class="">  {{ __('Confirm Password') }} </label>

                       
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        </div>
                    <div class="form-group  mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection