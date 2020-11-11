@extends("admin.master")

@section("content")
    <div class="row match-height">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">افزودن مهارتها</h4>
                </div>
                <div class="card-block">
                    <div class="card-body">
                        @if((isset($skill->id)))
                            <form method="POST" enctype="multipart/form-data"
                                  action="{{ url("admin/update/skill",$skill->id) }}">
                                @else
                                    <form method="POST" enctype="multipart/form-data"
                                          action="{{ url("admin/add/skill") }}">
                                        @endif
                                        @csrf
                                        @if(!isset($skill->id))
                                            <input type="hidden" name="id" value="0">
                                        @else
                                            <input type="hidden" name="id" value="{{$skill->id}}">
                                        @endif
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 paddingtop15px">
                                                    <select class="select2 form-control" name=""
                                                            id="default-select">
                                                        <optgroup label="لیست مهارتها">
                                                            <option
                                                                value=""></option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3 paddingtop15px">
                                                    <select class="select2 form-control" name=""
                                                            id="default-select">
                                                        <optgroup label="لیست کارگران">
                                                            <option
                                                                value=""></option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3 paddingtop15px">
                                                    <select class="select2 form-control" name=""
                                                            id="default-select">
                                                        <optgroup label="سطح">
                                                            <option
                                                                value=""></option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3 paddingtop15px">
                                                    <button class="btn btn-primary" type="submit"
                                                            style="width: 100%">افزودن
                                                        مهارت
                                                    </button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row match-height">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">لیست مهارت ها</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                <tr>
                                    <th>شماره ردیف</th>
                                    <th>نام مهارت</th>
                                    <th>نام و نام خانوادگی کارگر</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($_GET["page"]))
                                    @if($_GET["page"]!=1)
                                        <?php $r = 9 + $_GET["page"]; ?>
                                    @else
                                        <?php $r = 1; ?>
                                    @endif
                                @else
                                    <?php $r = 1; ?>
                                @endif
                                @foreach($skills as $skill)
                                    <tr>
                                        <td><?=$r++ ?></td>
                                        <td>{{$skill->name}}</td>
                                        <td>
                                            <a href="{{url('/admin/update/skill',$skill->id)}}"
                                               class="btn btn-success">ویرایش</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>شماره ردیف</th>
                                    <th>نام مهارت</th>
                                    <th>نام و نام خانوادگی کارگر</th>
                                </tr>
                                </tfoot>
                            </table>
                            {{ $skills->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

