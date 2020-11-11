@extends("admin.master")

@section("content")
    {{----------------------------------------------------------------------------------------}}
    <div class="row match-height">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="card-body">
                        <fieldset class="form-group">
                            <div class="row">
                                <label style="padding-top: 25px">نام و نام خانوادگی : </label>
                                <div class="col-sm-3 paddingtop15px">
                                    <input type="text" class="form-control" name="name" id="validationCustom01"
                                           placeholder="نام و نام خانوادگی" required=""
                                           value="{{$req->user->name.' '.$req->user->family}}" disabled>
                                </div>
                                <label style="padding-top: 25px">کد ملی : </label>
                                <div class="col-sm-3 paddingtop15px">
                                    <input type="text" class="form-control" name="name" id="validationCustom01"
                                           placeholder="کد ملی" required="" value="{{$req->user->nationalCode}}"
                                           disabled>
                                </div>
                                <label style="padding-top: 25px">تلفن همراه : </label>
                                <div class="col-sm-3 paddingtop15px">
                                    <input type="text" class="form-control" name="name" id="validationCustom01"
                                           placeholder="تلفن همراه" required="" value="{{$req->user->phone}}"
                                           disabled>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                {{----------------------------------------------------------------------------------------}}
                <div class="card-header">
                    <h4 class="card-title">نمایش سفارش ها</h4>
                </div>
                <div class="card-block">
                    <div class="card-body">
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table
                                        class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>شماره ردیف</th>
                                            <th>قیمت</th>
                                            <th>ساعت شروع</th>
                                            <th>ساعت پایان</th>
                                            <th>روز</th>
                                            <th>وضعیت</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $r = 1; ?>
                                        <?php $tp = 0; ?>
                                        @foreach($orders as $order)
                                            <?php $tp += $order->price; ?>
                                            <tr>
                                                <td><?=$r++ ?></td>
                                                <td>{{$order->price}}</td>
                                                <td>{{$order->startTime}}</td>
                                                <td>{{$order->endTime}}</td>
                                                <td>{{$order->date}}</td>
                                                <td>
                                                    @if($order->status == 0)
                                                        <button class="btn btn-sm btn-success">درخواست تایید شده
                                                        </button>
                                                    @elseif($order->status == 1)
                                                        <button class="btn btn-sm btn-danger">درخواست تایید نشده
                                                        </button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>شماره ردیف</th>
                                            <th>قیمت</th>
                                            <th>ساعت شروع</th>
                                            <th>ساعت پایان</th>
                                            <th>روز</th>
                                            <th>وضعیت</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{----------------------------------------------------------------------------------------}}
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data"
                          action="{{url('admin//worker/manage/requests/post')}}/{{$req->id}}">
                        @csrf
                        <fieldset class="form-group">
                            <div class="row">
                                <label style="padding-top: 25px">تعداد سفارشات : </label>
                                <div class="col-sm-3 paddingtop15px">
                                    <input type="text" class="form-control" name="qty" id="qty"
                                           value="{{$r-1}}" disabled>
                                </div>
                                <label style="padding-top: 25px">مجموع قیمت : </label>
                                <div class="col-sm-3 paddingtop15px">
                                    <input type="text" class="form-control" name="totalPrice" id="totalPrice"
                                           value="{{number_format($tp)}}" disabled>
                                </div>
                                <div class="col-sm-3 paddingtop15px">
                                    <button class="btn btn-primary" id="" type="submit" style="width: 100%">
                                        نهایی کردن سفارش
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
{{----------------------------------------------------script----------------------------------------------------------}}
<script>
</script>
