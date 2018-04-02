@extends('admin.layout.index')

@section('content')
<div class="page-container">
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
     <style>
     table.danhsach {
    border: 2px solid blue;
    }

    tr {
        border: 1px solid blue;
    }

    td {
        border: 1px solid blue;
    }
    th {
    border: 1px solid blue;
}
     </style>
   <div class="page-content">
<h1>Quản lý thuốc</h1>
       <div class="row">
           <div class="col-md-12">
            <table class="danhsach">
              <tr>
                <th width="5%"> ID </th>
                 <th width="15%"> Tên </th>
                 <th width="15%"> Số lượng </th>
                 <th width="15%"> Ngày nhập </th>
                 <th width="10%"> Hoạt động</th>
                 <th width="15%"> Actions </th>
              </tr>
               @foreach($benhnhan as $bn)
                 <tr role="row" class="filter">
                     <td>
                         {{$bn->id}}
                     </td>
                     <td>
                         {{$bn->ten}}
                     </td>
                     <td>
                         {{$bn->soluong}}
                     </td>
                      <td>
                         {{$bn->created_at}}
                     </td>
                     <td>
                       {{$bn->status}}
                     </td>
                      <td>
                           <div class="center">
                                  <i class="fa fa-pencil fa-fw"></i>
                                  <a href="admin/QuanLyThuoc/sua/{{$bn->id}}">Edit</a>
                              </div>
                              <div class="center">
                                  <i class="fa fa-trash-o fa-fw"></i>
                                  <a href="admin/QuanLyThuoc/xoa/{{$bn->id}}">Dele</a>
                              </div>
                     </td>
                 </tr>
               @endforeach
            </table>
                    </div>
                   </div>
               </div>
               <!-- End: life time stats -->
           </div>
       </div>
     </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
@endsection