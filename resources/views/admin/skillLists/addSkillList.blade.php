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
                        <form method="POST" enctype="multipart/form-data" action="{{ url("admin/add/skillList") }}">
                            @csrf
                            <fieldset class="form-group">
                                <div class="row">
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="name" id="validationCustom01"
                                               placeholder="نام" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <button class="btn btn-primary" type="submit" style="width: 100%">افزودن مهارت
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
                                    <th>نام</th>
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
                                @foreach($skillLists as $skillList)
                                    <tr>
                                        <td><?=$r++ ?></td>
                                        <td>{{$skillList->name}}</td>
                                        <td>
                                            <a href="{{url('/admin/update/skillList',$skillList->id)}}"
                                               class="btn btn-success">ویرایش</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>شماره ردیف</th>
                                    <th>نام</th>
                                    <th>عملیات</th>
                                </tr>
                                </tfoot>
                            </table>
                            {{ $skillLists->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

