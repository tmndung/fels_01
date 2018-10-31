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
                           <h2 class="heading-title nm">@lang('message.register')</h2>
                           <div class="sform-wrapper signin-form col-xs-12">

                              {!! Form::open(['method' => 'POST', 'id' => 'create_customer' ]) !!}
                                 <div class="form-group">

                                    {{ Form::email('email', old('email'), ['id' => 'email', 'class' => 'input-normal input-bordered', 'required' => 'required', 'placeholder' => trans('message.emailAddress')]) }}
                                  </div>
                                 <div class="form-group">
                                    {{ Form::password('password', ['id' => 'password','class' => 'input-normal input-bordered', 'required' => 'required', 'placeholder' => trans('message.password')]) }}
                                 </div>
                                 <div class="form-group">
                                    {{ Form::password('re-pasword', ['id' => 're-pasword','class' => 'input-normal input-bordered', 'required' => 'required', 'placeholder' => trans('message.passConfirm')]) }}
                                 </div>
                                 <div class="clearfix"></div>

                                 <div class="form-group nm"> <input type="submit" name="login" id="submit" value="Đăng ký" class="btn btn-md btn-full btn-danger"> </div>
                              {!! Form::close() !!}

                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
@endsection
