@extends("admin.master")

@section("content")
    <div class="row match-height">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">افزودن آشنا</h4>
                </div>
                <div class="card-block">
                    <div class="card-body">

                            <form method="POST" enctype="multipart/form-data" action="{{ url("admin/worker/manage/families") }}">
                                @if(isset($id))
                                    <input type="hidden" name="id" value="{{$id}}">
                                @else
                                    <input type="hidden" name="id" value="0">
                                @endif
                            <input type="hidden" name="u_id" value="{{$w_id}}">
                            @csrf
                            <fieldset class="form-group">
                                <div class="row">
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="nameFamily" id="validationCustom01"
                                               placeholder="نام و نام خانوادگی" value="@if(isset($id)){{$f->nameFamily}}@endif" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="ratio" id="validationCustom01"
                                               placeholder="نسبت" value="@if(isset($id)){{$f->ratio}}@endif" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="address" id="validationCustom01"
                                               placeholder="آدرس" value="@if(isset($id)){{$f->address}}@endif" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="workPhone" id="validationCustom01"
                                               placeholder="تلفن محل کار" value="@if(isset($id)){{$f->workPhone}}@endif" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="homePhone" id="validationCustom01"
                                               placeholder="تلفن منزل" value="@if(isset($id)){{$f->homePhone}}@endif" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" value="@if(isset($id)){{$f->phone}}@endif" name="phone" id="validationCustom01"
                                               placeholder="همراه" required="">
                                    </div>


                                    <div class="col-sm-3 paddingtop15px">
                                        @if(isset($id))
                                            <button class="btn btn-success" type="submit" style="width: 100%">ویرایش آشنا</button>
                                        @else
                                            <button class="btn btn-primary" type="submit" style="width: 100%">افزودن آشنا</button>
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
                                                <th>نام و نام خانوادگی</th>
                                                <th>نسبت</th>
                                                <th>آدرس</th>
                                                <th>تلفن محل کار</th>
                                                <th>تلفن منزل</th>
                                                <th>همراه</th>
                                                <th>عملیات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $r = 1; ?>

                                            @foreach($families as $family)
                                                <tr>
                                                    <td><?=$r++ ?></td>
                                                    <td>{{$family->nameFamily}}</td>
                                                    <td>{{$family->ratio}}</td>
                                                    <td>{{$family->address}}</td>
                                                    <td>{{$family->workPhone}}</td>
                                                    <td>{{$family->homePhone}}</td>
                                                    <td>{{$family->phone}}</td>
                                                    <td>
                                                        <a href="{{url('admin/worker/manage/families')}}/{{$w_id}}/{{$family->id}}" class="btn btn-success">ویرایش</a>
                                                        <a href="{{url('admin/worker/delete')}}/{{$family->id}}" class="btn btn-danger">حذف</a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>شماره ردیف</th>
                                                <th>نام و نام خانوادگی</th>
                                                <th>نسبت</th>
                                                <th>آدرس</th>
                                                <th>تلفن محل کار</th>
                                                <th>تلفن منزل</th>
                                                <th>همراه</th>
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