@extends('layout.admin.master')
@section('content')
<div class="signup-page spacing">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <div class="signup-features">
                        <div class="feature-thumb">
                           <div class="banner-silder">
                              <div id="JiSlider" class="jislider">
                                 <ul>
                                    <li>
                                       <div class="wrap-slider-item">
                                          <img src="https://zendvn.com/public/public/templates/default/login/images/slider/event-uudai.jpg" alt="Vấn đề bản quyền khóa học">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4" id="signup-features">
                     <div class="bg-wrap">
                        <div class="signup-form">
                           <h2 class="heading-title nm">Đăng nhập</h2>
                           <div class="sform-wrapper signin-form col-xs-12">
                              <!-- 0. kiểm tra Error từ POST khi submit đi. 1. Nếu có error thì đối class "alertsuccess" => "alert-danger" 2. Đổi text -->
                              <form accept-charset="UTF-8" name="appForm" action="" id="create_customer" method="post">
                                 <input type="hidden" name="_module" value="default" id="_module"> <input type="hidden" name="_controller" value="public" id="_controller">
                                 <input type="hidden" name="_action" value="login" id="_action">
                                 <div class="form-group"> <input type="text" name="email" id="email" value="" class="input-normal input-bordered" type="email" placeholder="Email"> </div>
                                 <div class="form-group"> <input type="password" name="password" id="password" value="" class="input-normal input-bordered" type="password" placeholder="Mật khẩu"> </div>
                                 <div class="clearfix"></div>
                                 <div class="form-group"> <input class="check" type="checkbox" value="1" id="remember" name="checkbox" style="width: 20px;height: 20px;"/> <label for="remember">Ghi nhớ tài khoản</label> </div>
                                 <div class="form-group nm">
                                    <input type="submit" name="login" id="submit" value="Đăng nhập" class="btn btn-md btn-full btn-danger">
                                 </div>
                              </form>
                              <div class="sa-signup-suggest"><a href="skype:zendvn.help?chat">Bạn không thể truy cập vào tài khoản?</a></div>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
@endsection
