@extends("admin.master")

@section("content")
    <div class="row match-height">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">نمایش درخواست ها</h4>
                </div>
                <div class="card-block">
                    <div class="card-body">
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>شماره ردیف</th>
                                            <th>نام و نام خانوادگی</th>
                                            <th>قیمت</th>
                                            <th>روز درخواست</th>
                                            <th>ساعت درخواست</th>
                                            <th>عملیات</th>
                                            <th>وضعیت</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $r = 1; ?>

                                        @foreach($requests as $request)
                                            <tr>
                                                <td><?=$r++ ?></td>
                                                <td>{{$request->user->name.' '.$request->user->family}}</td>
                                                <td>{{$request->price}}</td>
                                                <td>{{$request->date}}</td>
                                                <td>{{$request->time}}</td>
                                                <td>
                                                    <a href="{{url('admin/worker/manage/requests/{w_id}/')}}/{{$request->id}}"
                                                       class="btn btn-sm btn-success">مشاهده جزئیات</a>
                                                </td>
                                                <td>
                                                    @if($request->status == 0)
                                                        <button class="btn btn-sm btn-success">درخواست انجام شده
                                                        </button>
                                                    @elseif($request->status == 1)
                                                        <button class="btn btn-sm btn-danger">درخواست انجام نشده
                                                        </button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>شماره ردیف</th>
                                            <th>نام و نام خانوادگی</th>
                                            <th>قیمت</th>
                                            <th>روز درخواست</th>
                                            <th>ساعت درخواست</th>
                                            <th>عملیات</th>
                                            <th>وضعیت</th>
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
