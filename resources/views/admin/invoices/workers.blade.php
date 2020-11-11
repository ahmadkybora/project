@extends("admin.master")
@section('title','نمایش لیست سفارش ها')
@section("content")
    <div class="row match-height">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{__('نمایش لیست سفارش ها')}}</h4>
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
                                            <th>زمان شروع</th>
                                            <th>زمان پایان</th>
                                            <th>روز</th>
                                            <th>قیمت</th>
                                            <th>عملیات</th>
                                            <th>وضعیت</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $r = 1; ?>
                                        @foreach($orders as $order)
                                            <tr>
                                                <td><?=$r++ ?></td>
                                                {{--                                                <td>{{$order->user->first_name.' '.$invoice->user->last_name}}</td>--}}
                                                <td>{{$order->price}}</td>
                                                <td>{{$order->endTime}}</td>
                                                <td>{{$order->startTime}}</td>
                                                <td>
                                                    <a href="{{url('admin/show/order')}}/{{$order->id}}"
                                                       class="btn btn-sm btn-success">نمایش</a>
                                                    <a href="{{url('admin/delete/order')}}/{{$order->id}}"
                                                       class="btn btn-sm btn-danger">حذف</a>
                                                </td>
                                                <td>
                                                    @if($order->status == 0)
                                                        <button class="btn btn-sm btn-success">ارسال شده</button>
                                                    @elseif($order->status == 1)
                                                        <button class="btn btn-sm btn-warning">ارسال نشده</button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>شماره ردیف</th>
                                            <th>نام و نام خانوادگی</th>
                                            <th>زمان شروع</th>
                                            <th>زمان پایان</th>
                                            <th>روز</th>
                                            <th>قیمت</th>
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
