@extends('layouts.defaultclient')
@section('content')
    <div class="site-section bg-light">
      <div class="container">
        <div class="row  pt-5 px-2 mt-4">
          <div class="col-lg-4 col-md-4 col-sm-12 ">
            <div class="bg-white rounded shadow">
              <div class="text-center">
                <img src=" {{asset('asset/images/person_1.jpg')}} " width="50%" class="rounded-circle p-2" alt="">
                <img src=" {{asset('asset/images/edit.png')}} " alt="" class="cursor-pointer align-left float-left" width="4.5%" height="2.5%" style="position:relative; top: 15px; Right: 12rem;" >
                
              </div>
              <ul>
                <li class="d-md-flex d-block">
                  <h5 class="p-2 font-weight-bold">{{(app()->getLocale() == 'ar') ? $user->ar_name : $user->name}}</h5>
                  </li> 
              </ul>
              <dl class="dlist is-fitted text-muted  p-2">
                <div class=" ">
                  <dt>{{__('Country')}}</dt>
                  <dd>{{(app()->getLocale() == 'ar') ? $user->ar_country.'-'.$user->ar_city : $user->country.' - '.$user->city}}</dd>
                </div>
                <div class=" ">
                  <dt>{{__('Education')}}</dt>
                  <dd><a href="" {{($user->university == null && $user->ar_university == null) ? 'data-toggle = "modal" data-target = "#educationinfo"' : ''}}>
                     {{($user->university == null && $user->ar_university == null) ? __('Add Education info') :(app()->getLocale() == 'ar') ? $user->ar_university :  $user->university}}
                  </a></dd>
                </div>
                <div class=" ">
                  <dt>{{__('Experience')}}</dt>
                  <dd><a href="" data-toggle="modal" data-target="#addexperience">{{__('Add experience')}}</a></dd>
                </div>
              </dl>
              <div class="text-center p-3">
                <a target="_blank" href="#" id="download-attachment"
                  class="btn btn-outline-primary px-3  font-weight-bold">
                 {{__('Save as PDF')}} </a>
               </div> 
               <div class="p-3">
                  <hr> <p><span class="text-muted">آخر تحديث للسيرة الذاتية:</span> {{$user->updated_at}}</p>
              </div> 
            </div>
          </div> 
          <div class="col-lg-8 col-md-8 col-sm-12 ">
            <div class="">
              <!--comlete your cv-->
              <div class="{{(number_format($count, '0', '.', '') == 80) ? 'border-success' : 'border-danger' }} mb-3 text-center bg-white d-block d-md-flex rounded border-right">
                <div class="p-3">
                   <span class="{{(number_format($count, '0', '.', '') == 80) ? 'text-success':'text-danger' }} display-4">{{ number_format($count, '0', '.', '')}}%</span>
                </div>
                <p class="pt-4 mt-2">
                  أكمل سيرتك الذاتية بنسبة 80% لتكون من أبرز 10% من المستخدمين الأكثر ظهوراً. </p>
              </div>


              <!--------------- user info // cv info ----------------->
     <div class="bg-white mb-3 rounded">
        <div class="card ">
            <div class="card-header  d-flex justify-content-between">
              <h5>المعلومات الشخصية</h5>
              <a href="" data-toggle="modal" data-target="#personalinfo"><img src=" {{asset('asset/images/edit.png')}} " alt=""  class="p-1 align-left float-left   cursor-pointer"></a> 
            </div>
            <div class="card-body">
              <table class="table table-borderless">
                  <tr>
                    <th scope="col">{{(app()->getLocale() == 'ar') ? 'الاسم' : 'name'}}</th> 
                    <td>{{(app()->getLocale() == 'ar') ? $user->ar_name : $user->name}}</td>
                  </tr> 
                  <tr>
                    <th scope="row">{{(app()->getLocale() == 'ar') ? 'الجنس' : 'Gender'}}</th>
                    <td>{{(app()->getLocale() == 'ar') ? $user->ar_gender : $user->gender}}</td> 
                  </tr>
                  <tr>
                    <th scope="col">{{(app()->getLocale() == 'ar') ? 'مكان الميلاد' : 'Identity'}}</th> 
                    <td>{{(app()->getLocale() == 'ar') ? $user->ar_brith : $user->brith}}</td>
                  </tr>
                  <tr>
                    <th scope="col">{{__('Brith day')}}</th> 
                    <td>{{$user->birthdate}}</td>
                  </tr>
                  <tr>
                    <th scope="col">بلد الاقامة</th> 
                    <td>{{(app()->getLocale() == 'ar') ? $user->ar_country : $user->country}}</td>
                  </tr>
                  <tr>
                    <th scope="col">الحالة الجتماعية</th> 
                    <td>{{(app()->getLocale() == 'ar') ? $user->ar_social_status : $user->social_status}}</td>
                  </tr>
                  <tr>
                    <th scope="col">الديانة  </th> 
                    <td>{{(app()->getLocale() == 'ar') ? $user->ar_religion : $user->religion}}</td>
                  </tr>
                  <tr>
                    <th scope="col">رقم الاثبات  </th> 
                    <td>12345678945</td>
                  </tr>
              </table>
            </div>
          </div>
        </div>



    <div class="bg-white mb-3 rounded">
      <div class="card">
          <div class="card-header  d-flex justify-content-between">
            <h5>معلومات الاتصال</h5>
            <a href="" data-toggle="modal" data-target="#contact" ><img src=" {{asset('asset/images/edit.png')}} " alt=""  class="p-1 align-left float-left   cursor-pointer"></a> 
          </div>
            <div class="card-body">
                <table class="table table-borderless">
                  <tr>
                    <th scope="col">رقم الهاتف</th> 
                    <td>{{$user->phone_key.''. $user->phone}}</td>
                  </tr> 
                  <tr>
                    <th scope="row">البريد الالكتروني</th>
                    <td>{{$user->email}}</td> 
                  </tr> 
                </table>
            </div>
        </div>
    </div>


    <div class="bg-white mb-3 rounded">
        <div class="card">
            <div class="card-header  d-flex justify-content-between">
              <h5>معلومات التعليم</h5>
              <a href="" data-toggle="modal" data-target="#educationinfo" ><img src=" {{asset('asset/images/edit.png')}} " alt=""  class="p-1 align-left float-left   cursor-pointer"></a> 
            </div>
              <div class="card-body">
                @if(app()->getLocale() == 'ar')
                <table class="table table-borderless">
                  <tr> 
                      <td><span>{{$user->ar_role}}</span>  , <span>{{$user->ar_qualification}}</span>
                    <div class="float-right d-flex d-md-flex">
                        <img src=" {{asset('asset/images/pencil2.png')}} " class="pl-2" alt="" srcset=""><img src=" {{asset('asset/images/clear-button.png')}} " alt="" srcset=""> 
                    </div> 
                    </td>  
                  </tr> 
                  <tr> 
                      <td> <span>{{__('University Of')}}</span> : <span>{{$user->university}}</span></td> 
                  </tr>
                  <tr> 
                    <td><span>{{$user->ar_country}}</span>- <span>{{$user->ar_city}}</span></td>
                  </tr> 
                  <tr> 
                     <td><span>{{__('Date Of graduation')}}</span> : <span>{{$user->grade_date}}</span></td>
                    </tr>
                    <tr> 
                        <td><span>{{__('Rate')}}</span> : <span>{{$user->grade}}</span></td>
                      </tr>
                </table>
                @else 

                <table class="table table-borderless">
                    <tr> 
                        <td><span>{{$user->role}}</span>  , <span>{{$user->qualification}}</span>
                      <div class="float-right d-flex d-md-flex">
                          <img src=" {{asset('asset/images/pencil2.png')}} " class="pl-2" alt="" srcset=""><img src=" {{asset('asset/images/clear-button.png')}} " alt="" srcset=""> 
                      </div> 
                      </td>  
                    </tr> 
                    <tr> 
                        <td> <span>{{__('University Of')}}</span> : <span>{{$user->university}}</span></td> 
                    </tr>
                    <tr> 
                      <td><span>{{$user->country}}</span>- <span>{{$user->city}}</span></td>
                    </tr> 
                    <tr> 
                       <td><span>{{__('Date Of graduation')}}</span> : <span>{{$user->grade_date}}</span></td>
                      </tr>
                      <tr> 
                          <td><span>{{__('Rate')}}</span> : <span>{{$user->grade}}</span></td>
                        </tr>
                  </table>
                  @endif
            </div>
          </div>
        </div> 



    
        <div class="bg-white mb-3">
        <div class="card">
            <div class="card-header  d-flex justify-content-between">
              <h5>الشهادات والدورات التدريبية</h5>
              <a href="" data-toggle="modal" data-target="#education" ><img src=" {{asset('asset/images/add.png')}} " alt=""  class="p-1 align-left float-left   cursor-pointer"></a> 
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                  <p>اضف الشهادات والدورات التدريبيه لتكون من أبرز المستخدمين</p>
                  <div data-toggle="modal" data-target="#experienceinfo" class="btn btn-primary">{{__('Traner And Experiences')}}</div>
                    
                </table>
            </div>
        </div>
    </div>
 
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
  
 

<!-- experience model -->
<div class="modal fade" id="addexperience" style="padding-right: 0;" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-full" role="document">
      <div class="modal-content fill-cont">
          <div class="modal-header">
              <h5 class="modal-title"> {{__('Experinces info')}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body p-4" id="result"> 
              <div class="row justify-content-center">
                  <form method="POST" class="form-row col-md-6" action="{{route('users.store', app()->getLocale())}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">{{__('Experience years')}}</label>
                    <input type="text" class="form-control" name="expert_year" id="inputAddress2" placeholder="{{__('Expert Years')}}" >
                      </div>
                      <div class="form-group col-md-3">      
                            <label for="inputEmail4">{{__('Start year')}}</label>
                            <input type="text" class="form-control" name="start_year" id="inputAddress2" placeholder="2001 مثلا" >
                      </div>

                      <div class="form-group col-md-3">
                          <label>{{__('Start month')}}</label>
                          <input id="datepicker" width="276" class="form-control" name="start_month"  />
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputEmail4">{{__('End year')}}</label>
                          <input type="text" class="form-control" id="inputAddress2" placeholder="مثال: 2003." name="end_year">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">{{__('End month')}}</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="مثال: 1." name="end_month">
                          </div>

                        
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">{{__('Role')}}</label>
                        <input list ="role" id="inputState" class="form-control" name="role">
                        <datalist id="role">   
                          @foreach ($roles as $role)  
                          <option value=" {{(app()->getLocale() == 'ar') ? $role->ar_name : $role->name }}">
                          @endforeach
                        </datalist>
                      </div>

                      <div class="form-group col-md-6">
                          <label for="inputEmail4">{{__('Level')}}</label>
                          <input list ="level" id="inputState" class="form-control" name="level">
                          <datalist id="level">   
                            @foreach ($levels as $level)  
                            <option value=" {{(app()->getLocale() == 'ar') ? $level->ar_name : $level->name }}">
                            @endforeach
                          </datalist>
                        </div>

                      <div class="form-group col-md-12">
                        <label for="inputEmail4">{{__('Sub specialization')}}</label>
                        <input list ="subspecial" id="inputState" class="form-control" name="expertspecial">
                        <datalist id="subspecial">
                          @foreach ($sub_specials as $special)     
                          <option aria-checked="true" value="{{(app()->getLocale() == 'ar') ? $user->ar_special : $user->special }}">
                          <option value=" {{(app()->getLocale() == 'ar') ? $special->ar_name : $special->name }}">
                          @endforeach
                        </datalist>
                        </div>

                       <div class="form-group col-md-12">
                        <label for="exampleFormControlTextarea1">{{__('Summary')}}</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"
                          placeholder="أضف المشاريع التي عملت عليها، والأنشطة التي شاركت بها، والإنجازات التي حققتها من خلال سنوات دراستك.."
                          rows="3" name="summary">{{$user->summary}}</textarea>
                      </div>
                      <div class="form-group col-md-12">
                          <label for="exampleFormControlTextarea1">{{__('Arabic Summary')}}</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1"
                            placeholder="أضف المشاريع التي عملت عليها، والأنشطة التي شاركت بها، والإنجازات التي حققتها من خلال سنوات دراستك.."
                            rows="3" name="ar_summary"> {{$user->ar_summary}} </textarea>
                        </div>
                      <div class="col-md-12 mb-1">
                        <input type="file" name="cert_pdf">
                      </div>
                      
                        <button class="btn btn-primary btn-outline" type="submit">save</button>
                    </div>
                  </form>

              </div>
          </div>
      </div> 
  </div>
</div>
<!-- end experience model -->

<!-- experience model -->
<div class="modal fade" id="experienceinfo" style="padding-right: 0;" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content fill-cont">
            <div class="modal-header">
                <h5 class="modal-title"> {{__('Experinces info')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result"> 
                <div class="row justify-content-center">
                    <form method="POST" class="form-row col-md-6" action="{{route('users.update' , [app()->getLocale() , $user->id])}}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <input type="hidden" name="expert_form" value="exprt">
                      <input type="hidden" name="user_id" value="{{$user->id}}">
                      <div class="form-group col-md-12">
                          <label for="inputEmail4">{{__('Experience years')}}</label>
                      <input type="text" class="form-control" name="expert_year" id="inputAddress2" placeholder="{{__('Expert Years')}}" >
                        </div>
                        <div class="form-group col-md-3">      
                              <label for="inputEmail4">{{__('Start year')}}</label>
                              <input type="text" class="form-control" name="start_year" id="inputAddress2" placeholder="2001 مثلا" >
                        </div>

                        <div class="form-group col-md-3">
                            <label>{{__('Start month')}}</label>
                            <input id="datepicker" width="276" class="form-control" name="start_month"  />
                          </div>
                          <div class="form-group col-md-3">
                            <label for="inputEmail4">{{__('End year')}}</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="مثال: 2003." name="end_year">
                          </div>

                          <div class="form-group col-md-3">
                              <label for="inputEmail4">{{__('End month')}}</label>
                              <input type="text" class="form-control" id="inputAddress2" placeholder="مثال: 1." name="end_month">
                            </div>

                          
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">{{__('Role')}}</label>
                          <input list ="role" id="inputState" class="form-control" name="role">
                          <datalist id="role">   
                            @foreach ($roles as $role)  
                            <option value=" {{(app()->getLocale() == 'ar') ? $role->ar_name : $role->name }}">
                            @endforeach
                          </datalist>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">{{__('Level')}}</label>
                            <input list ="level" id="inputState" class="form-control" name="level">
                            <datalist id="level">   
                              @foreach ($levels as $level)  
                              <option value=" {{(app()->getLocale() == 'ar') ? $level->ar_name : $level->name }}">
                              @endforeach
                            </datalist>
                          </div>

                        <div class="form-group col-md-12">
                          <label for="inputEmail4">{{__('Sub specialization')}}</label>
                          <input list ="subspecial" id="inputState" class="form-control" name="expertspecial">
                          <datalist id="subspecial">
                            @foreach ($sub_specials as $special)     
                            <option aria-checked="true" value="{{(app()->getLocale() == 'ar') ? $user->ar_special : $user->special }}">
                            <option value=" {{(app()->getLocale() == 'ar') ? $special->ar_name : $special->name }}">
                            @endforeach
                          </datalist>
                          </div>

                         <div class="form-group col-md-12">
                          <label for="exampleFormControlTextarea1">{{__('Summary')}}</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1"
                            placeholder="أضف المشاريع التي عملت عليها، والأنشطة التي شاركت بها، والإنجازات التي حققتها من خلال سنوات دراستك.."
                            rows="3" name="summary">{{$user->summary}}</textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleFormControlTextarea1">{{__('Arabic Summary')}}</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1"
                              placeholder="أضف المشاريع التي عملت عليها، والأنشطة التي شاركت بها، والإنجازات التي حققتها من خلال سنوات دراستك.."
                              rows="3" name="ar_summary"> {{$user->ar_summary}} </textarea>
                          </div>
                        <div class="col-md-12 mb-1">
                          <input type="file" name="cert_pdf">
                        </div>
                        
                          <button class="btn btn-primary btn-outline" type="submit">save</button>
                      </div>
                    </form>

                </div>
            </div>
        </div> 
    </div>
</div>
<!-- end experience model -->

<!-- education model -->
<div class="modal fade" id="educationinfo" style="padding-right: 0;" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content fill-cont">
            <div class="modal-header">
                <h5 class="modal-title"> {{__('Education info')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result"> 
                <div class="row justify-content-center">
                    <form method="POST" class="form-row col-md-6" action="{{route('users.update' , [app()->getLocale() , $user->id])}}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <input type="hidden" name="user_id" value="{{$user->id}}">
                        <div class="form-group col-md-12">
                          <label for="inputEmail4">{{__('Certificates')}}</label>
                          <select id="inputState" class="form-control" name="qualification">
                            <option selected hidden value="">اختر نوع الشهادة</option>
                            <option value="Diploma">{{__('Diploma')}}</option>
                            <option value="Bachelor">{{__('Bachelor')}}</option>
                            <option value="Master">{{__('Master')}}</option>
                            <option value="PH">{{__('PH')}}</option>
                          </select>
                        </div>
                        <div class="form-group col-md-12">
                          <div class="row">
                            <div class="col-md-6">
                              <label for="inputEmail4">{{__('Arabic university')}}</label>
                              <input type="text" class="form-control" name="ar_university" id="inputAddress2" placeholder="مثال: جامعة هارفورد"value="{{$user->ar_university}}" >
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4"> University</label>
                                <input type="text" class="form-control" name="university" id="inputAddress2" placeholder="eg. Harvard "value="{{$user->university}}" >
                            </div>
                          </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>تاريخ التخرج</label>
                            <input type="date" id="datepicker" width="276" class="form-control" name="grade_date"  value="{{$user->grade_date}}"/>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">المعدل</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="مثال: 3.50 من 4.00" name="grade">
                          </div>

                          

                        <div class="form-group col-md-12">
                          <label for="inputEmail4">{{__('Sub specialization')}}</label>
                          <input list ="subspecial" id="inputState" class="form-control" name="subspecial">
                          <datalist id="subspecial">
                            @foreach ($sub_specials as $special)     
                            <option aria-checked="true" value="{{(app()->getLocale() == 'ar') ? $user->ar_special : $user->special }}">
                            <option value=" {{(app()->getLocale() == 'ar') ? $special->ar_name : $special->name }}">
                            @endforeach
                          </datalist>
                          </div>
                        
                          <button class="btn btn-primary btn-outline" type="submit">save</button>
                      </div>
                    </form>

                </div>
            </div>
        </div> 
    </div>
</div>
<!-- end education model -->
 
<!-- personal info model -->
  <div class="modal fade" id="personalinfo" style="padding-right: 0;" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-full" role="document">
          <div class="modal-content fill-cont">
              <div class="modal-header">
                  <h5 class="modal-title">تعديل البيانات الشخصية</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="modal-body p-4" id="result"> 
                  <div class="row justify-content-center">
                        <form class="form-row col-md-6" method="POST" action="{{route('users.update',[app()->getLocale() , $user->id])}}" >
                          @csrf
                          @method('PUT')
                          <input type="hidden" name="user_id" value="{{$user->id}}">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">الإسم الاول</label>
                            <input type="text" class="form-control" value="{{$user->ar_name}}"  name="ar_name"  placeholder="ادخل الاسم الاول">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="inputEmail4">الإسم بالغه الانجليزيه</label>
                              <input type="text" class="form-control" name="name" value="{{$user->name}}"   placeholder="">
                            </div>
                            <div class="form-group col-md-6 pr-2">
                                <label for="inputState"
                                  style="vertical-align:bottom; display: table; margin-bottom: 0.5rem;">الجنس</label>
                                <div class="form-check form-check-inline">
                                  <input {{($user->gender == 'Male') ? 'checked' : '' }}  class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                                    value="Male">
                                  <label class="form-check-label" for="inlineRadio1">{{__('Male')}}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input {{($user->gender == 'Female') ? 'checked' : '' }} class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                                    value="Female">
                                  <label class="form-check-label" for="inlineRadio2">{{__('Female')}}</label>
                                </div>
                              </div>
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">الجنسية</label>
                            <input list="identity" id="inputState" class="form-control" name="identity" autocomplete="off">
                            <datalist id="identity" dir="rtl" >
                                @foreach ($countries as $country)
                                <option selected value="{{(app()->getLocale() == "ar") ? $country->ar_name : $country->country}}">      
                                @endforeach
                              </datalist>
                          </div> 
                          <div class="form-group col-md-6">
                            <label>{{__('Brith Date')}}</label>
                            <input type="date" id="datepicker" width="276" class="form-control" name="brithDate" />
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">{{__('Brith Place')}}</label>
                            <input list="country" name="birth_country" id="inputState" class="form-control">
                            <datalist id="country" dir="rtl" >
                              @foreach ($countries as $country)
                              @if(app()->getLocale() == 'ar')
                              <option data-selected value="{{ ($country->ar_name == $user->ar_country) ? $country->ar_name :''}}" >
                                @else 
                              <option selected value="{{($country->name == $user->country) ? $country->name : ''}}">    
                              @endif     
                              <option value="{{(app()->getLocale() == 'ar') ? $country->ar_name : $country->name}}">
                              @endforeach
                            </datalist>
                          </div>
        
                          <div class="form-group col-md-6">
                            <label for="inputState">{{('Religion')}}</label>
                            <select id="inputState" class="form-control" name="religion">
                              <option value="Muslime">{{__('Muslime')}}</option>
                              <option value="Christian">{{__('Christian')}}</option>
                              <option value="Gushin">{{__('Gushin')}}</option>
                              <option value="Other">{{__('Other')}}</option>

                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputState">الحالة الاجتماعية</label>
                            <select id="inputState" class="form-control" name="social_status">
                              <option value="Married">{{__('Married')}}</option>
                              <option value="Single">{{__('Single')}}</option>
                            </select>
                          </div>
                         
                          <div class="form-group col-md-6">
                          <label for="inputState">{{__('Passpord No')}}</label> 
                          <input type="text" class="form-control"   placeholder="" name="idint_1" value="{{$user->idint_1}}">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputAddress2">{{__('Nationality No')}}</label>
                              <input type="text" class="form-control" id="inputAddress2" placeholder="" name="idint_2" value="{{$user->idint_2}}">
                            </div> 
                          
                          <div class="form-groub col-md-12">
                          <div class="text-center py-5">
                              <button  class="btn btn-primary px-3 " type="submit"> حفظ </button> 
                                </div>
                            </div>

                        </div>
                      </form>
                  </div>
              </div> 
      </div>
  </div>
<!-- end personl Modal -->
   
<!-- contact model -->
<div class="modal fade" id="contact" style="padding-right: 0;" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content fill-cont">
            <div class="modal-header">
                <h5 class="modal-title">تعديل بيانات الاتصال</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result"> 
            <div class="row justify-content-center">
            <form  class="form-row col-md-6" action="#" method="post">
              @csrf
               @method('PUT')
                   <input type="hidden" name="user_id" value="{{$user->id}}" id="">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">رقم الهاتف</label>
                            <input name="phone" type="text" class="form-control" id="inputAddress" value="{{$user->phone}}" placeholder="ادخل الايميل">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputAddress">الايميل</label>
                            <input name="email" type="text" class="form-control" id="inputAddress"  value="{{$user->email}}" placeholder="ادخل الايميل">
                          </div> 
                          <div class="form-group col-md-6">
                              <label for="inputAddress2">السكن الحالي</label>
                              <input  name="city" list="city" id="inputState" class="form-control" autocomplete="off">
                              <datalist id="city">
                               @foreach ($cities as $city)   
                               <option value="{{ (app()->getLocale() == 'ar') ?  $city->ar_name : $city->name}}" >
                               @endforeach
                              </datalist>
                            </div>
          
                            <div class="form-group col-md-6">
                              <label for="inputCity">المدينة</label>
                              <input  name="" list="city" id="inputState" class="form-control">
                              <datalist id="city" >
                               @foreach ($cities as $city)   
                               <option value="{{ (app()->getLocale() == 'ar') ?  $city->ar_name : $city->name}}" >
                               @endforeach
                              </datalist>
                            </div> 
                            
                          <div class="form-groub col-md-12">
                          <div class="text-center py-5">
                          <button class="btn btn-primary px-3 " type="submit"> حفظ </button> 
                          </div>
                      </div>
                  </form>
            </div>
        </div> 
    </div>
</div>
<!-- end contact model -->

    @endsection