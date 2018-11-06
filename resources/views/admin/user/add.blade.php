@extends('layout.admin.master')

@section('css')
  {{ Html::style(asset('css/toastr.min.css')) }}
@endsection

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @lang('message.lte.user')
        <small style="color: #D74802;">@lang('message.lte.add')</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>@lang('message.lte.home_page')</a></li>
        <li class="active"><a href="">@lang('message.lte.user')</a> </li>
      </ol>
    </section>


    <!-- Main content -->
     <section class="content">
      <div class="container">
      <div class="row">
            @if($errors->any())
        <div class="col-md-12">

       <div class="alert alert-danger">
        <ul style="list-style-type: none">
            @foreach ($errors->all() as $error)
                <li >{{ $error }}</li>
            @endforeach
        </ul>
      </div>


      </div> {{-- row- col-md --}}
        @endif
        <div class="col-md-12">
      </div>
    </div>
  </div>

      <div class="row">
       {!! Toastr::message() !!}
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">@lang('message.lte.quick_ex')</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           {!! Form::open(['url' => url('user'),'method' => 'post','files'=>true]) !!}
              <div class="box-body">
             @include('form.user.user')
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">@lang('message.lte.add')</button>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('script')
<!-- jQuery 3 -->
{{-- <script src="AdminLTE-2.4.3/bower_components/jquery/dist/jquery.min.js"></script> --}}
<!-- Bootstrap 3.3.7 -->
<script src="AdminLTE-2.4.3/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
{{-- <script src="AdminLTE-2.4.3/bower_components/fastclick/lib/fastclick.js"></script> --}}
<!-- AdminLTE App -->
<script src="AdminLTE-2.4.3/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="AdminLTE-2.4.3/dist/js/demo.js"></script>
{{-- <script src="js/vasplus_uploader.js"></script> --}}
    {{ Html::script(asset('js/toastr.min.js')) }}
    {!! Toastr::message() !!}
@endsection
