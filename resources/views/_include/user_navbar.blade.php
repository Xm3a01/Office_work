
    <div class="site-navbar-wrap js-site-navbar bg-white">

            <div class="container-fluid">
              <div class="site-navbar bg-light">
                <div class="py-1">
                  <div class="row align-items-center">
                    <div class="col-3">
                  <div class="mb-0 site-logo"><a href="{{route('home' , app()->getLocale())}}"><img src=" {{asset('asset/images/logo.png')}} " width="95%"></a></div>
                    </div>
                    <div class="col-9">
                      <nav class="site-navigation" role="navigation">
                        <div class="container">
                          <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                            <a href="#" class="site-menu-toggle js-menu-toggle text-black">
                              <span class="icon-menu h3"></span>
                             </a>
                            </div>
      
                          <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li><a href="{{route('home',app()->getLocale())}}">{{__('Home')}}</a></li>
                            <li><a href="{{route('web.mycv' , app()->getLocale())}}">سيرتي الذاتية</a></li> 
                            <li class="has-children">
                              <a href="">البحث عن وظائف</a>
                              <ul class="dropdown arrow-top text-center" style="width:30rem;">
                                  <table class="table table-borderless">
                                   <tr>
                                        <th scope="col">الدولة</th>
                                        <th scope="col">الصنف</th>
                                        <th scope="col">المدينة</th>
                                        <th scope="col">اخرى</th> 
                                       </tr> 
                                      <tr>
                                          <td>السودان(15)</td>
                                          <td> تقانةالمعلومات</td> 
                                          <td>الخرطوم</td> 
                                          <td>المرتب</td>
                                      </tr>
                                      <tr>
                                          <td>مصر(20)</td> 
                                          <td>الطب</td>
                                          <td>القاهرة</td>
                                          <td>المرتب</td>
                                        </tr>
                                        <tr>
                                            <td>الكويت(10)</td>
                                            <td>هندسة</td> 
                                            <td>عمان</td>
                                            <td>المرتب</td>
                                          </tr>
                                          <tr>
                                              <td>السعودية(13)</td> 
                                              <td>الادارة</td> 
                                              <td>الرياض</td>
                                              <td>المرتب</td>
                                            </tr> 
                                  </table>  
                              </ul>
                            </li>
                            <li><a href="about.html">إتصل بنا</a></li> 
                            <li><a href="{{route('users.index' ,app()->getLocale())}}" class="add"><span> + </span> ابحث بالمسمي الوظيفي</a></li>
                            <li class="has-children mr-2">
                                    <a href="">{{(app()->getLocale() == 'ar') ? Auth::user()->ar_name : Auth::user()->name}}</a>
                                    <ul class="dropdown arrow-top">
                                      <li><a href="{{route('users.edit',[app()->getLocale(),Auth::user()->id] )}}">{{__('Account setting')}}</a></li>
                                      <li ><a href="{{route('users.logout',app()->getLocale())}}" >  <img src="{{asset('images/more-circular.png')}}" alt="">تسجيل خروج</a></li>
                                       </ul>
                                  </li> 
                                  {{-- @foreach (config('app.available_locales') as $locale)
                                  <li>
                                      <a class="text-right"
                                          href="{{ route(Route::currentRouteName(), $locale) }}"
                                          @if (app()->getLocale() == $locale) style="display:none;" @endif>
                                           @if($locale == 'en') 
                                           {{ strtoupper($locale) }} <img SRC="{{asset('asset/images/en.png')}} " width="20%" class="rounded-circle border border-light">
                                           @else 
                                           {{ strtoupper($locale) }}
                                           <img  SRC="{{asset('asset/images/en.png')}} " width="20%" class="rounded-circle border border-light" alt="Lang">
                                           @endif
                                        </a> 
                                  </li> --}}
                                {{-- @endforeach --}}
                          </ul> 
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      