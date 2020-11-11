@extends("admin.master")
@section('title','نمایش لیست فاکتورها')
@section("content")
    <div class="row match-height">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{__('نمایش لیست فاکتورها')}}</h4>
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
                                            <th>کد فاکتور</th>
                                            <th>نام</th>
                                            <th>روز</th>
                                            <th>ساعت</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $r = 1; ?>

                                        @foreach($invoices as $invoice)

                                            <tr>
                                                <td><?=$r++ ?></td>
                                                <td>{{$invoice->code}}</td>
                                                <td>{{$invoice->user->first_name.' '.$invoice->user->last_name}}</td>
                                                <td>{{$invoice->date}}</td>
                                                <td>{{$invoice->time}}</td>
                                                <td>
                                                    <a href="{{url('admin/invoices/show/')}}/{{$invoice->id}}"
                                                       class="btn btn-success">نمایش</a>
                                                    @if($invoice->status == 0)
                                                        <button class="btn btn-sm btn-success">پرداخت شده</button>
                                                    @elseif($invoice->status == 1)
                                                        <button class="btn btn-sm btn-warning">پرداخت نشده</button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>شماره ردیف</th>
                                            <th>کد فاکتور</th>
                                            <th>نام</th>
                                            <th>روز</th>
                                            <th>ساعت</th>
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
