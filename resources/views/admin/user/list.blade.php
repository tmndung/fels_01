@extends('layout.admin.master')
@section('css')
{{-- <link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css"> --}}
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
{{-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> --}}
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

{{--
<link rel="stylesheet" href="AdminLTE-2.4.3/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> --}}
{{-- <link rel="stylesheet" type="text/css" href="css/style.css"> --}}
{{-- <link rel="stylesheet" href=""> --}}

@endsection

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @lang('message.lte.list_user')
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>@lang('message.lte.home_page')</a></li>
        <li><a href="">@lang('message.lte.user')</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <div id="dialog-confirm" title="Thông báo!" style="display: none;">
      <p>@lang('message.lte.delete_element')</p>
  </div>
      <div class="row">
        {!! Toastr::message() !!}

        <div class="col-xs-12">
          <form action="" method="get" id="form-search">
            <div class="form-group">
              <select style="height: 30px;" name="role" id="role">

                <option selected value=""></option>

                   <option value=""></option>

              </select>
              <input  style="padding: 5px;" type="text" name="keyword" placeholder="Tìm kiếm theo tên" id="search" value="" >
            </div>
          </form>


          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a class="btn" href="{{url('admin/user/add')}}" style="color: #e7e7e7;background: #E3458B;">@lang('message.lte.add_user')</a></h3>

            </div>

            <!-- /.box-header -->
            <div class="box-body">

             <div id="result">

                 <table id="example2" class="table table-bordered table-striped animated fadeIn">
                <thead style="" >
                <tr>
                  <th style="width: 13%;">@lang('message.lte.stt')</th>
                  <th style="width: 13%;" >@lang('message.lte.name')</th>
                  <th style="width: 13%;">@lang('message.lte.avata')</th>
                  <th style="width: 13%;">@lang('message.lte.email')</th>
                  <th style="width: 13%;">@lang('message.lte.address')</th>
                  <th style="width: 13%;">@lang('message.lte.phone')</th>
                  <th style="width: 10%;">@lang('message.lte.action')</th>

                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr id="user_list">
                  <td >{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->avata}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->address}}</td>
                  <td>{{$user->phone}}</td>
                  <td style="width: 50px;" ><a  style="color: red";  href=""><i class="fa fa-trash"></i></a>
                  <span style="font-weight: bold;margin-right: 5px;">|</span><a  style="color: green";  href=""><i class="fa fa-edit"></i></a>  </td>

                </tr>
                @endforeach
                </tbody>

             </table>
                 <div style="float:right" class="pagination" >
                  {{ $users->links() }}
                </div>

              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
