    
    
<div class="bg-light modeltop " id="login" >
  <div class="container  justify-content-center mb-3" role="document">
    <div class=" row bg-white justify-content-center mb-5">
     <div class="col-md-6 "> 
       <div class="pt-2">  
          <form action="#" class="p-2 ">
            <div class="form-row">
             <div class="form-group">
                <label for="name" class="col-md-4 col-form-label text-md-right"> {{ __('First Name') }} </label>
                    <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            </div>
    <div class="form-group">
     <label for="name" class="col-md-4 col-form-label text-md-right"> {{ __('Last Name') }} </label>
        <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    </div>
    <div class="form-group ">
        <label for="email" class="col-md-4 col-form-label text-md-right"> {{ __('E-Mail Address') }} </label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div> 
            <div class="form-group  ">
                <label for="password" class="col-md-4 col-form-label text-md-right"> {{ __('Password') }} </label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group  ">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">  {{ __('Confirm Password') }} </label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                </div>
            <div class="form-group  mb-0">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
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