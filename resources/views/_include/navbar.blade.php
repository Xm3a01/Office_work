
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
                            <li><a href="index.html">الرئيسية</a></li>
                            <li><a href="{{route('users.index' , app()->getLocale())}}">أضف سيرتك الذاتية</a></li> 
                            <li class="has-children">
                              <a href="">الوظائف</a>
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
                            <li><a href="{{route('job.owner' , app()->getLocale())}}">صاحب عمل؟</a></li>
                            <li><a href="{{route('web.contact' , app()->getLocale())}}">إتصل بنا</a></li>
                            @guest
                            <li><a class="add" href="{{ route('login',app()->getLocale()) }}">{{ __('Login') }}</a></li>
                            @if (Route::has('register'))
                                <li >
                                    <a style="margin: 0 6px 0 -18px;border: 1px solid #fb236a; border-radius:25px" href="{{ route('register',app()->getLocale()) }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->ar_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('users.logout',app()->getLocale()) }}">
                                        {{ __('Logout') }}
                                    </a>
                                </div>
                            </li>
                           @endguest
                           @foreach (config('app.available_locales') as $locale)
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
                           </li>
                         @endforeach
                          </ul> 
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>