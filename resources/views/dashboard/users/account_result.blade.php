@extends('layouts.defaultclient')
@section('content')


<div class="site-section bg-light  " style="padding: 120px 5px;">
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-8 mb-5"> 
            <h3 class="py-3">وظائف قد تهمك</h3> 
                    <div class="modrn-joblist"> 
                         <div class="rounded jobs-wrap">
                       @foreach ($jobs as $job)
                          <a href="job-single.html" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                                 <div class="company-logo blank-logo text-center text-md-left pl-3">
                                   <img src="{{ Storage::url($job->owner->logo)}}" alt="Image" class="img-fluid mx-auto">
                                 </div>
                                 <div class="job-details h-100">
                                   <div class="p-3 align-self-center">
                                    <h3>{{(app()->getLocale() == 'ar') ? $job->ar_role : $job->role}}</h3>
                                    <div class="d-block d-lg-flex">
                                     <p class="m-0">{{$job->owner->company_name}}</p>
                                      <span class="mr-3">26Aug</span> 
                                        </div>
                                     <div class="d-block d-lg-flex"> 
                                       <div ><span class="icon-suitcase mr-1 ml-2"></span>{{$job->yearsOfExper}}</div>
                                       <div class="mr-3" >{{$job->selary}}<span class="icon-money mr-1"></span></div>
                                     </div>
                                     </div>
                                 </div>
                                 <div class="job-category align-self-center">
                                   <div class="p-3">
                                     <span class="text-info p-2 rounded border border-info">{{(app()->getLocale() == 'ar') ? $job->ar_status : $job->status}}</span>
                                   </div>
                                 </div>
                               </a> 
                            @endforeach
                                  <div class="text-center pt-5" data-aos="fade-up" data-aos-delay="50"><a class="btn"
                                    href="new-post.html">المزيد</a>
                                </div>
                         
                                </div> 
                           
                    </div> 
            
                 
         </div>  

    <div class="col-md-4 col-lg-4 mb-5">  
        <form action="#" class="px-3 py-2 my-3 bg-white"> 
                <h5 class="p-2">أنشئ تنبيهاً وظيفياً</h5>
                  <div class="row form-group">
                    <div class="col-md-12">
                      <label class="font-weight-bold" for="email">المسمي الوظيفي</label>
                      <input type="email" id="email" class="form-control" placeholder="مثال: مدير الموارد البشرية">
                    </div>
               
                  <div class="form-group col-md-12">
                        <label for="inputState" style="font-weight: 600;">البلد</label>
                        <select id="inputState" class="form-control">
                          <option>الامارات</option>
                          <option>السعودية</option>
                        </select>
                      </div> 
                    </div>
                  <div class="row form-group">
                    <div class="col-md-12">
                      <input type="submit" value="انشئ الان" class="btn btn-primary btn-block px-3">
                    </div>
                  </div> 
                </form>

                <div class="py-5 px-3 mt-3 bg-white">
                <div class="d-block d-md-flex">
                    <img src=" {{asset('asset/images/ideaicon2.png')}} " class="img-40 u-left-m m20 p-2"     width="85px" alt="">
                    <p>يبحث أصحاب العمل باستمرار عن موظفين جدد! فاحرص على تحديث سيرتك الذاتية.</p>
                    </div>
                 
                 <div class="">
                     <a href="" class="d-flex justify-content-center" style="text-decoration: underline; font-size: 15px; font-weight: 600; cursor: pointer; color:#333">حدث سيرتك الذاتية الان</a>
                 </div>
              </div>
            </div>
        </div>
      </div>
</div>

<!-- change password model -->
<div class="modal fade" id="changepassword" style="padding-right: 0;" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-full" role="document">
      <div class="modal-content fill-cont">
          <div class="modal-header">
              <h5 class="modal-title">{{__('Change Password')}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body p-4" id="result"> 
              <div class="row justify-content-center">
                  <form class="form-row col-md-6" action="{{route('users.update',[app()->getLocale() , $user->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="user_id" value = "{{$user->id}}">
                       <div class="form-group col-md-6">
                      <label for="inputAddress">{{__('Password')}}</label>
                  <input type="password" name="password" class="form-control" id="inputAddress" required placeholder="{{__('Password')}}">
                </div>
                <div class="form-group  col-md-6">
                    <label for="password-confirm" class="">  {{ __('Confirm Password') }} </label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{__('Confirm Password')}}">
                    </div>
                  <div class="form-groub col-md-12">
                  <div class="text-center py-5">
                      <button class="btn btn-primary px-3 " type="submit"> {{__('Save')}} </button> 
                        </div>
                    </div>

                  </form>
              </div>
          </div>
      </div> 
  </div>
</div>
<!-- end change password model -->

@endsection


@section('scripts')
    <script src="asset('js/app.js')"></script>
    <script>
    const app = new Vue({

      el: '#app',

      data: {

      }
    });
    </script>
@endsection