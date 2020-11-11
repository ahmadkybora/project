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
                                    <th>عنوان دسته بندی</th>
                                    <th>دسته بندی پدر</th>
                                    <th>ویرایش/حذف</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $r=0;?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>شماره ردیف</th>
                                    <th>تصویر</th>
                                    <th>عنوان دسته بندی</th>
                                    <th>دسته بندی پدر</th>
                                    <th>ویرایش/حذف</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

