@extends('backend.master')

@section('content')

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px;">
              <h3 >
                <a href="{!! URL::route('admin.tuyendung.list') !!}">Tuyển dụng</i></a>
                /Cập nhật
              </h3>
            <div class="navbar-right" style="margin-right:10px;margin-top:-50px;">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="{!! URL::route('admin.tuyendung.list') !!}" ><i class="btn btn-default" >Hủy</i></a>
            </div>
            </div>
            <div class="panel-body">
        <div class="col-lg-7">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Tiêu đề</label>
                <input type="text" name="txtTDTittle" id="input" class="form-control" value="{!! $tuyendung->tuyendung_tieu_de !!}">
                <div>
                    {!! $errors->first('txtTDTittle') !!}
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>Mô tả công việc</label>
                <textarea class="form-control" rows="3" name="txtTDIntro" placeholder="Mô tả...">{!! $tuyendung->tuyendung_mo_ta !!}</textarea>
                <script type="text/javascript">CKEDITOR.replace('txtTDIntro'); </script>
                <div>
                    {!! $errors->first('txtTDIntro') !!}
                </div>
            </div>
        </div>
        
        <div class="col-lg-12">
            <div class="form-group">
                <label>Liên hệ</label>
                <textarea class="form-control" rows="1" name="txtTDContact" placeholder="Liên hệ...">{!! $tuyendung->tuyendung_lien_he !!}</textarea>
                <script type="text/javascript">CKEDITOR.replace('txtTDContact'); </script>
                <div>
                    {!! $errors->first('txtTDContact') !!}
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Thời gian tuyển dụng</label>
                <input type="text" name="txtTDDate" id="input" class="form-control" value="{!! $tuyendung->tuyendung_thoi_gian !!}">
                <div>
                    {!! $errors->first('txtTDDate') !!}
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>Hình ảnh</label>
                <br>
                <img src="{!! asset('upload/tuyendung/'.$tuyendung->tuyendung_anh) !!}" class="img-responsive img-rounded" alt="Image" style="width: 150px; height: 200px;">
                <input type="hidden" name="fImageCurrent" value="{!! $tuyendung->tuyendung_anh !!}">
                <br>
                <input type="file" name="fImage">
                <div>
                    {!! $errors->first('fImage') !!}
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    <form>

@stop