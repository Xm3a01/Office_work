@extends('layouts.defult')

@section('content')

 
<div class="bg-light modeltop " id="login" >
  <div class="container  justify-content-center " role="document">
    <div class=" row  justify-content-center ">
     <div class="col-md-4 shadow1 mb-5  bg-white">
        <div class="border-bottom">
            <strong> <h5 class="text-center pt-5 pb-3" id="exampleModalLabel"> {{ __('أنشئ حسابك الان')}}</h5></strong>
            </div>
        <div class="py-2 ">  
          <form  method="POST" action="{{route('owners.register.submit',app()->getLocale())}}" class="p-2 " id="app">
            @csrf
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
                            <label for="phone" > {{ __('Phone') }} </label>
                                    
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="name" autofocus>
        
                                    @error('phone')
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
                    <input class="form-control" v-model="role" list="roles" placeholder="{{__('Role')}}" name = "{{(app()->getLocale() == 'ar') ? 'ar_role' : 'role' }}" autocomplete="off">
                    <datalist id="roles" v-if="role">
                        @foreach ($roles as $role) 
                         @if(app()->getLocale() == 'ar')   
                         <option value="{{$role->ar_name}}">
                         @else
                         <option value = "{{$role->name}}">
                         @endif
                         @endforeach 
                    </datalist>
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
                    <div class="form-group my-2">
                            <div class="col-md-12 p-0 ">
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

@section('scripts')
    <script src="{{asset('js/app.js')}}"></script>
    <script>
     const app = new Vue({
     el: '#app',

     data: {
         role: ''
     }
     });
    </script>
@endsection