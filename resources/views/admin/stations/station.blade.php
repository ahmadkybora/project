@extends("admin.master")

@section("content")
    <div class="row match-height">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">افزودن ایستگاه</h4>
                </div>
                <div class="card-block">
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ url("admin/add/station") }}">
                            @csrf
                            @if(isset($station->id))
                                <input type="hidden" name="id" value="{{$station->id}}">
                            @else
                                <input type="hidden" name="id" value="0">
                            @endif
                            <fieldset class="form-group">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="title" id="validationCustom01" value="@if(isset($station->id)){{$station->title}}@endif" placeholder="نام ایستگاه" required="">
                                    </div>
                                    <div class="col-sm-3">
                                        @if(isset($station->id))
                                            <button class="btn btn-dark" type="submit" style="width: 100%">ویرایش ایستگاه</button>
                                        @else
                                            <button class="btn btn-primary" type="submit" style="width: 100%">افزودن ایستگاه</button>
                                        @endif

                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="configuration">
        <div class="row">
            <div class="col-12">
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
                                        <th>نام ایستگاه</th>
                                        <th>ویرایش</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $r=1;?>
                                        @foreach($stations as $station)
                                            <tr>
                                                <td>{{$r++}}</td>
                                                <td>{{$station->title}}</td>
                                                <td><a href="{{url("admin/update/station")}}/{{$station->id}}" class="btn btn-success" type="submit" style="width: 100%">ویرایش ایستگاه</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>شماره ردیف</th>
                                        <th>نام ایستگاه</th>
                                        <th>ویرایش</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

