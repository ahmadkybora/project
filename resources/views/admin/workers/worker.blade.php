@extends("admin.master")

@section("content")
    <div class="row match-height">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">افزودن کارگر</h4>
                </div>
                <div class="card-block">
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ url("admin/add/worker") }}">
                            @csrf
                            <fieldset class="form-group">
                                <div class="row">
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="name" id="validationCustom01"
                                               placeholder="نام" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="family" id="validationCustom01"
                                               placeholder="نام خانوادگی" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="number" class="form-control" name="phone" id="validationCustom01"
                                               placeholder="شماره همراه" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="number" class="form-control" name="tell" id="validationCustom01"
                                               placeholder="تلفن ثابت" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="nationalCode"
                                               id="validationCustom01" placeholder="کدملی" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="birthdate" id="elementId"
                                               autocomplete="disable" placeholder="تاریخ تولد" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="fatherName"
                                               autocomplete="disable" placeholder="نام پدر" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="placeIssue"
                                               autocomplete="disable" placeholder="محل صدور" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="placeBirth"
                                               autocomplete="disable" placeholder="محل تولد" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="countChild" autocomplete="disable"
                                               placeholder="تعداد فرزندان" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <select class="select2 form-control" name="gender" id="default-select">
                                            <optgroup label="جنسیت">
                                                <option value="1">مرد</option>
                                                <option value="0">زن</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <select class="select2 form-control" name="Religion" id="default-select">
                                            <optgroup label="دین">
                                                <option value="1">اسلام</option>
                                                <option value="2">مسیحی</option>
                                                <option value="3">کلیمی</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <select class="select2 form-control" name="Religion2" id="default-select">
                                            <optgroup label="مذهب">
                                                <option value="1">شیعه</option>
                                                <option value="2">سنی</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <select class="select2 form-control" name="bloodType" id="default-select">
                                            <optgroup label="گروه خونی">
                                                <option value="1">A+</option>
                                                <option value="2">O+</option>
                                                <option value="3">O-</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <select class="select2 form-control search" name="education" id="default-select">
                                            <optgroup label="تحصیلات">
                                                <option value="1">بی سواد</option>
                                                <option value="2">دیپلم</option>
                                                <option value="3">فوق دیپلم</option>
                                                <option value="4">کارشناسی</option>
                                                <option value="5">کارشناسی ارشد</option>
                                                <option value="6">دکترا</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-2 paddingtop15px">
                                        <select class="select2 form-control" name="isMarital" id="default-select">
                                            <optgroup label="وضعیت تاهل">
                                                <option value="1">مجرد</option>
                                                <option value="2">متاهل</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 paddingtop15px">
                                        <input type="text" class="form-control" name="address" id="validationCustom01"
                                               placeholder="آدرس" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <div class="custom-file">
                                            <input type="file" name="profileImage" class="custom-file-input"
                                                   id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">تصویر کاربر</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <div class="custom-file">
                                            <input type="file" name="imageBirthCertificate" class="custom-file-input"
                                                   id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">تصویر
                                                شناسنامه</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <div class="custom-file">
                                            <input type="file" name="imageNationalCard" class="custom-file-input"
                                                   id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">تصویر کارت
                                                ملی</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <div class="custom-file">
                                            <input type="file" name="imageCardService" class="custom-file-input"
                                                   id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">تصویر کارت پایان
                                                خدمت</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 paddingtop15px">
                                        <select class="form-control" name="militaryServiceStatus">
                                            <optgroup label="وضعیت خدمت سربازی">
                                                <option value="1">انجام شده</option>
                                                <option value="2">انجام نشده</option>
                                                <option value="3">معافیت</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-2 paddingtop15px">
                                        <select class="form-control" name="militaryServiceStatus">
                                            <optgroup label="وضعیت نظام وظیفه">
                                                <option value="1">معافیت</option>
                                                <option value="2">خدمت انجام شده</option>
                                                <option value="3">خدمت انجام نشده</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-2 paddingtop15px">
                                        <select class="form-control" name="housingSitutation">
                                            <optgroup label="وضعیت مسکن">
                                                <option value="1">استیجاری</option>
                                                <option value="2">شخصی</option>
                                                <option value="3">سایر</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-2 paddingtop15px">
                                        <select class="form-control" name="physicalCondition">
                                            <optgroup label="وضعیت مسکن">
                                                <option value="1">سالم</option>
                                                <option value="2">نا سالم</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 paddingtop15px">
                                        <input type="text" class="form-control" name="physicalConditionComment" id="validationCustom01"
                                               placeholder="توضیحات وضعیت جسمانی" required="">
                                    </div>
                                    <div class="col-sm-4 paddingtop15px">
                                        <input type="text" class="form-control" name="dutyService" id="validationCustom01"
                                               placeholder="محل خدمت وظیفه" required="">
                                    </div>
                                    <div class="col-sm-4 paddingtop15px">
                                        <input type="text" class="form-control" name="BcNumber" id="validationCustom01"
                                               placeholder="شماره شناسنامه" required="">
                                    </div>
                                    <div class="col-sm-4 paddingtop15px">
                                        <input type="text" class="form-control" name="cardNumber" id="validationCustom01"
                                               placeholder="شماره کارت" required="">
                                    </div>
                                    <div class="col-sm-4 paddingtop15px">
                                        <input type="text" class="form-control" name="paymentNumber" id="validationCustom01"
                                               placeholder="شماره حساب" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="number" class="form-control" name="historyWar" autocomplete="disable"
                                               placeholder="مدت جبهه (به ماه)" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="number" class="form-control" name="historyInjury" autocomplete="disable"
                                               placeholder="درصد مجروحیت" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="number" class="form-control" name="captivity" autocomplete="disable"
                                               placeholder="مدت اسارت" required="">
                                    </div>
                                    <div class="col-sm-2 paddingtop15px">
                                        <select class="form-control" name="typeOfExemption">
                                            <optgroup label="نوع معافیت">
                                                <option value="1">تحصیلی</option>
                                                <option value="2">کفالت</option>
                                                <option value="3">پزشکی</option>
                                                <option value="4">سایر</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-2 paddingtop15px">
                                        <select class="form-control" name="socialSecurityInsurance">
                                            <optgroup label="بیمه تامین اجتماعی">
                                                <option value="1">بیمه شده</option>
                                                <option value="0">بیمه نشده</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="insuranceCode"
                                               autocomplete="disable" placeholder="کد بیمه" required="">
                                    </div>
                                    <div class="col-sm-2 paddingtop15px">
                                        <select class="form-control" name="isSkillCard">
                                            <optgroup label="کارت مهارت">
                                                <option value="1">دارد</option>
                                                <option value="0">ندارد</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <select class="form-control" name="degreeOfSkillCard">
                                            <optgroup label="درجه کارت مهارت">
                                                <option value="0">ساده</option>
                                                <option value="1">نیمه ماهر</option>
                                                <option value="2">ماهر</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <div class="custom-file">
                                            <input type="file" name="imageSkillCard" class="custom-file-input"
                                                   id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">تصویر کارت
                                                مهارت</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="skillCardNumber"
                                               id="validationCustom01" placeholder="شماره کارت مهارت" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <input type="text" class="form-control" name="price"
                                               id="validationCustom01" placeholder="مزد پیشنهادی کارگر" required="">
                                    </div>
                                    <div class="col-sm-3 paddingtop15px">
                                        <button class="btn btn-primary" type="submit" style="width: 100%">افزودن کارگر
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

    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">لیست کارگران</h4>
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
                                    <?php $r = 0;?>

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
    </section>
@endsection

