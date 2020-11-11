@extends("admin.master")
@section('افزودن رزومه')
@section("content")
    <div class="row match-height">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{__('افزودن رزومه')}}</h4>
                </div>
                <div class="card-block">
                    <div class="card-body">

                        <form method="POST" enctype="multipart/form-data"
                              action="{{ url("admin/worker/manage/resumes") }}">
                            @csrf
                            @if(isset($id))
                                <input type="hidden" name="id" value="{{$id}}">
                            @else
                                <input type="hidden" name="id" value="0">
                            @endif
                            <input type="hidden" name="u_id" value="{{$w_id}}">
                            <fieldset class="form-group">
                                <div class="row">
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="name" id="validationCustom01"
                                               placeholder="نام" value="@if(isset($id)){{$r->name}}@endif" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="projectSite"
                                               id="validationCustom01"
                                               placeholder="رزومه" value="@if(isset($id)){{$r->projectSite}}@endif"
                                               required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="side"
                                               id="validationCustom01"
                                               placeholder="سمت کارگر"
                                               value="@if(isset($id)){{$r->side}}@endif"
                                               required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="cooperationDate"
                                               id="elementId" autocomplete="off"
                                               placeholder="تاریخ همکاری"
                                               value="@if(isset($id)){{$r->cooperationDate}}@endif"
                                               required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <div class="custom-file">
                                            <input type="file" name="certificateFile" class="custom-file-input"
                                                   id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">نامه تاییدیه همکاری
                                                (رزومه)</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        @if(isset($id))
                                            <button class="btn btn-success" type="submit" style="width: 100%">ویرایش
                                                رزومه
                                            </button>
                                        @else
                                            <button class="btn btn-primary" type="submit" style="width: 100%">افزودن
                                                رزومه
                                            </button>
                                        @endif

                                    </div>
                                </div>

                            </fieldset>
                        </form>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>شماره ردیف</th>
                                            <th>تصویر تاییدیه</th>
                                            <th>سمت کارگر</th>
                                            <th>نام پروژه</th>
                                            <th>محل اجرا</th>
                                            <th>تاریخ همکاری</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $r = 1; ?>

                                        @foreach($resumes as $resume)
                                            <tr>
                                                <td><?=$r++ ?></td>
                                                <td>
                                                    <img src="{{url("upload/user/resumes")}}/{{$resume->certificateFile}}"
                                                         style="width:50px;">
                                                </td>
                                                <td>{{$resume->side}}</td>
                                                <td>{{$resume->name}}</td>
                                                <td>{{$resume->projectSite}}</td>
                                                <td>{{$resume->cooperationDate}}</td>
                                                <td>
                                                    <a href="{{url('admin/worker/manage/resumes')}}/{{$w_id}}/{{$resume->id}}"
                                                       class="btn btn-success">ویرایش</a>
                                                    <a href="{{url('admin/worker/delete')}}/{{$resume->id}}"
                                                       class="btn btn-danger">حذف</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>شماره ردیف</th>
                                            <th>تصویر تاییدیه</th>
                                            <th>نام پروژه</th>
                                            <th>محل اجرا</th>
                                            <th>تاریخ همکاری</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
