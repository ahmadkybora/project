@extends("admin.master")

@section("content")
    <div class="row match-height">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">لیست ایستگاه ها</h4>
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
                                    <th>تصویر</th>
                                    <th>نام و نام خانوادگی</th>
                                    <th>کد ملی</th>
                                    <th>شماره همراه</th>
                                    <th>موجودی</th>
                                    <th>عملیات</th>
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
                                @foreach($workers as $worker)
                                    <tr>
                                        <td><?=$r++ ?></td>
                                        <td>
                                            <img src="{{url('upload/user')}}/{{$worker->profileImage}}"
                                                 class="img-circle" style="height:50px;">
                                        </td>
                                        <td>{{$worker->first_name.' '.$worker->last_name}}</td>
                                        <td>{{$worker->nationalCode}}</td>
                                        <td>{{$worker->phone}}</td>
                                        <td>{{$worker->wallet}}</td>
                                        <td>
                                            <a href="{{url('admin/worker/toggle/active')}}/{{$worker->id}}" class="btn btn-warning">غیر فعال</a>
                                            <a href="{{url('admin/worker/update')}}/{{$worker->id}}" class="btn btn-success">ویرایش</a>
                                            <a href="{{url('admin/worker/manage/skills')}}/{{$worker->id}}" class="btn btn-success">مهارت</a>
                                            <a href="{{url('admin/worker/manage/learns')}}/{{$worker->id}}" class="btn btn-success">آموزش</a>
                                            <a href="{{url('admin/worker/manage/families')}}/{{$worker->id}}" class="btn btn-success">آشنایان</a>
                                            <a href="{{url('admin/worker/manage/requests')}}/{{$worker->id}}" class="btn btn-success">درخواست تسویه</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>شماره ردیف</th>
                                    <th>تصویر</th>
                                    <th>نام و نام خانوادگی</th>
                                    <th>کد ملی</th>
                                    <th>شماره همراه</th>
                                    <th>موجودی</th>
                                    <th>عملیات</th>
                                </tr>
                                </tfoot>
                            </table>
                            {{ $workers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

