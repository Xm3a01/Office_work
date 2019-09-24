@extends('layouts.defult')
@section('content')

<div class="pt-5 bg-light" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class=" ">
            <div class="modal-header  text-center">
              <h5 class="modal-title" id="exampleModalLabel">    تسجيل الدخول</h5>
            </div>
        <div class="modal-body">  
            <form action="#" class="p-2 bg-white">
                <div class="form-row">
                <div class="form-group col-md-12 mb-1">
                    <label for="inputEmail4">البريد اللإلكتروني</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div> 
                <div class="form-group col-md-12 mb-1">
                    <label for="inputEmail4">كلمة السر</label>
                    <input type="password" class="form-control" id="" placeholder="">
                </div>  
                <div class="d-flex flex-row justify-content-between">
                    <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" style="width: unset;">
                        <label class="form-check-label" for="gridCheck">
                        تذكرني
                        </label>
                    </div> 
                    </div>  
                <a href="#" class="text-underline">forgrt password</a>
             </div>
                    </div>
            </form> 
    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
              <button type="button" class="btn btn-primary">دخول</button>
            </div>
          </div>
        </div>
      </div>

@endsection
    