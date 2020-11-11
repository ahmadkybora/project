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
                        <form method="POST" enctype="multipart/form-data" action="{{ url("admin/update/skillList",$skillList->id) }}">
                            @csrf
                            <fieldset class="form-group">
                                <div class="row">
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="name" id="validationCustom01"
                                               placeholder="نام" value="{{$skillList->name}}" required="">
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
@endsection

