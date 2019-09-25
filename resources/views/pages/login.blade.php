@extends('layouts.defult')
@section('content')

<div class="bg-light modeltop " id="login" >
    <div class="container  justify-content-center mb-3" role="document">
        <div class=" row bg-white justify-content-center mb-5">
          <div class="col-md-6 ">
            <div class="">
                <strong> <h5 class="text-center pt-5 pb-3" id="exampleModalLabel">  تسجيل الدخول</h5></strong>
            </div>
            <div class="pt-2">  
               <form action="#" class="p-2 ">
                <div class="form-row">
                 <div class="form-group col-md-12 mb-1">
                    <label for="inputEmail4">البريد اللإلكتروني</label>
                    <input type="text" class="form-control bg-light" id="" placeholder="">
                   </div> 
                <div class="form-group col-md-12 mb-1">
                    <label for="inputEmail4">كلمة السر</label>
                    <input type="password" class="form-control bg-light" id="" placeholder="">
                </div>  
                <div class="d-flex flex-row justify-content-between">  
                    <u> <a href="#" class="text-underline">forgrt password</a> </u>
             </div>
                    </div>
            </form>  
            <div class="p-3"> 
                 <button type="button" class="btn btn-primary btn-block">دخول</button>
                  </div>
                  <p class="text-center p-5"> <u><a href="#" class="text-center">ليس لديك حساب؟ سجل الان</a></u></p>
            </div>
          </div>
        </div>
      </div>

@endsection
    