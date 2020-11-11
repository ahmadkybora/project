@extends("admin.master")
@section('افزودن آموزش')
@section("content")
    <div class="row match-height">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{__('افزودن آموزش')}}</h4>
                </div>
                <div class="card-block">
                    <div class="card-body">

                        <form method="POST" enctype="multipart/form-data"
                              action="{{ url("admin/worker/manage/learns") }}">
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
                                               placeholder="نام" value="@if(isset($id)){{$l->name}}@endif" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="date" id="elementId"
                                               placeholder="روز" value="@if(isset($id)){{$l->date}}@endif"
                                               autocomplete="disable" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="address"
                                               placeholder="آدرس" value="@if(isset($id)){{$l->address}}@endif"
                                               required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="organizer"
                                               id="validationCustom01"
                                               placeholder="برگزار کننده"
                                               value="@if(isset($id)){{$l->organizer}}@endif"
                                               required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <div class="custom-file">
                                            <input type="file" name="certificateFile" class="custom-file-input"
                                                   id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">تصویر
                                                گواهینامه</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        @if(isset($id))
                                            <button class="btn btn-success" type="submit" style="width: 100%">ویرایش
                                                آشنا
                                            </button>
                                        @else
                                            <button class="btn btn-primary" type="submit" style="width: 100%">افزودن
                                                آشنا
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
                                            <th>تصویر گواهینامه</th>
                                            <th>نام آموزش</th>
                                            <th>زمان آموزش</th>
                                            <th>برگزار کننده</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $r = 1; ?>

                                        @foreach($learns as $learn)
                                            <tr>
                                                <td>
                                                    <img src="{{url("upload/user/learns")}}/{{$learn->certificateFile}}"
                                                         style="width:50px;">
                                                </td>
                                                <td><?=$r++ ?></td>
                                                <td>{{$learn->name}}</td>
                                                <td>{{$learn->date}}</td>
                                                <td>{{$learn->organizer}}</td>
                                                <td>
                                                    <a href="{{url('admin/worker/manage/learns')}}/{{$w_id}}/{{$learn->id}}"
                                                       class="btn btn-success">ویرایش</a>
                                                    <a href="{{url('admin/worker/delete')}}/{{$learn->id}}"
                                                       class="btn btn-danger">حذف</a>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>شماره ردیف</th>
                                            <th>تصویر گواهینامه</th>
                                            <th>نام آموزش</th>
                                            <th>زمان آموزش</th>
                                            <th>برگزار کننده</th>
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
