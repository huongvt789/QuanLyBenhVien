@extends('admin.layout.index')

@section('content')
<div class="page-container">
    <style type="text/css">
        .actions.btn-set {
        position: relative;
        left: 746px;
        bottom: 14px;
        /* border: 2px solid #cdcddb; */
        width: 300px;
        /* background: #f7f7fa; */
    }

    label.control-label.col-md-2 {
        /* border: 0px solid blue; */
        text-align: left;
        background: #e9e9f0;
        padding: 12px;
    }
    .actions.btn-set {
    position: relative;
    left: 509px;
    }
    </style>
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        @include('admin.layout.menu_admin');
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light form-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-social-dribbble font-green"></i>
                                <span class="caption-subject font-green bold uppercase">Sửa thông tin nhân viên</span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                {{$err}}<br>
                                @endforeach
                            </div>
                            @endif
                            @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                            @endif
                            <form action="admin/QuanLyBenhNhan/sua/{{$benhnhan->id}}" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Tên</label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="icon-exclamation-sign"></i>
                                                <input type="text" class="form-control" name="ten" id="username2_input" value="{{$benhnhan->ten}}"> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Tuổi</label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="icon-exclamation-sign"></i>
                                                <input type="text" class="form-control" name="tuoi" id="username2_input"> </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label col-md-2">Địa chỉ</label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="icon-exclamation-sign"></i>
                                                <input type="text" class="form-control" name="diachi" id="username2_input"> </div>
                                        </div>
                                    </div>
                                 <div class="form-group">
                                        <label class="control-label col-md-2">Số điện thoại</label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="icon-exclamation-sign"></i>
                                                <input type="text" class="form-control" name="sodienthoai" id="username2_input"> </div>
                                        </div>
                                    </div>
                                <div class="form-group">
                                        <label class="control-label col-md-2">Email</label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="icon-exclamation-sign"></i>
                                                <input type="text" class="form-control" name="email" id="username2_input"> </div>
                                        </div>
                                    </div>
                                
                                    <div class="form-group last password-strength">
                                        <label class="control-label col-md-2">Hoạt động</label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="icon-exclamation-sign"></i>
                                                <input type="text" class="form-control" name="hoatdong" id="username2_input" value="{{$benhnhan->status}}"> </div>
                                        </div>
                                        </div>
         
                                    </div>
                                    <br>
                                        <div class="actions btn-set">
                                        <button type="button" name="back" class="btn btn-secondary-outline">
                                            <i class="fa fa-angle-left"></i> Back</button>
                                        <button type="reset" class="btn btn-secondary-outline">
                                            <i class="fa fa-reply"></i> Reset</button>
                                        <button type="submit"class="btn btn-success" >
                                            <i class="fa fa-check"></i> Save</button>
                                    </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
@endsection