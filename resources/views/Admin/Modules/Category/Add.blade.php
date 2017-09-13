<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/31/2017
 * Time: 2:55 PM
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/30/2017
 * Time: 9:25 PM
 */
?>

@extends('Admin.Layout_Admin.Layout_Admin')
@section('title-admin')
    Thêm Danh Mục
@endsection
@section('content-admin')
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            @include('Admin.partial_admin.menu_admin')
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Danh mục
                        </h1>
                        @include('Admin.blocks.error')
                        @include('Admin.blocks.warnning')
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-8" style="padding-bottom:120px">
                        <form action="" method="POST">
                            @include('Admin.Layout_Admin.token')
                            <div class="form-group">
                                <label>Tiêu Đề: </label>
                                <input class="form-control" name="name" placeholder="Nhập tên Danh mục" />
                            </div>
                            <div class="form-group">
                                <label>Miêu tả  </label>
                                <input class="form-control" name="Discription" placeholder="Nhập miêu tả" />
                            </div>
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input name="Display" value="0" type="radio">Không hiển thị trên menu
                                </label><br>
                                <label class="radio-inline">
                                    <input name="Display" value="1"  type="radio"> hiển thị trên menu
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                            <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection