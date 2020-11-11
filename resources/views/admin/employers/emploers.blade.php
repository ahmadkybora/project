@extends("admin.master")
@section('title','افزودن مهارت')
@section("content")
    <div class="row match-height">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{__('افزودن مهارت')}}</h4>
                </div>
                <div class="card-block">
                    <div class="card-body">

                        <form method="POST" enctype="multipart/form-data"
                              action="{{ url("admin/worker/manage/skills") }}">
                            @csrf
                            @if(isset($id))
                                <input type="hidden" name="id" value="{{$id}}">
                            @else
                                <input type="hidden" name="id" value="0">
                            @endif
                            <input type="hidden" name="u_id" value="{{$w_id}}">
                            <fieldset class="form-group">
                                <div class="row">
                                    <div class="col-sm-2 paddingtop15px">
                                        <select class="form-control select2" name="sl_id" id="select2">
                                            <optgroup label="لیست مهارت ها">
                                                @foreach($skillLists as $skillList)
                                                    <option value="{{$skillList->id}}">{{$skillList->name}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-2 paddingtop15px">
                                        <select class="form-control" name="level">
                                            <optgroup label="سطح">
                                                <option value="1">ساده</option>
                                                <option value="2">نیمه ماهر</option>
                                                <option value="3">ماهر</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        @if(isset($id))
                                            <button class="btn btn-success" type="submit" style="width: 100%">ویرایش
                                                مهارت
                                            </button>
                                        @else
                                            <button class="btn btn-primary" type="submit" style="width: 100%">افزودن
                                                مهارت
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
                                            <th>لیست مهارت ها</th>
                                            <th>سطح مهارت</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $r = 1; ?>

                                        @foreach($skills as $skill)
                                            <tr>
                                                <td><?=$r++ ?></td>
                                                <td>{{$skill->skill_list->name}}</td>

                                                <td>@if($skill->level == 1) ساده @elseif($skill->level == 2) نیمه
                                                    ماهر @elseif($skill->level == 3) ماهر @else خطا @endif </td>
                                                <td>
                                                    <a href="{{url('admin/worker/delete/skills')}}/{{$skill->id}}"
                                                       class="btn btn-danger">حذف</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>شماره ردیف</th>
                                            <th>لیست مهارت ها</th>
                                            <th>سطح مهارت</th>
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
