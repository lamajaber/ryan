@extends("layouts.admin")
@section("title","اضافة عميل جديد")

@section("content")
    <div class="m-portlet m-portlet--mobile">
        <form method='post' action='{{route("customer-details.index")}}'>
            @csrf
            <div class='m-form'>
                <div class="m-portlet__body">
                    <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">الاسم كاملاً</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-input" placeholder="ادخل اسمك كاملاً" name="name"
                                       value='{{ old("name") }}'>
                                <span class="m-form__help">من فضلك ادخل اسمك </span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">المحافظة </label>
                            <div class="col-lg-6">
                                <input type="text"class="form-control m-input" placeholder="ادخل المحافظة" name="city"
                                       value='{{ old("city") }}'>
                                                   </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">العنوان  </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-input" placeholder="ادخل العنوانة" name="address"
                                       value='{{ old("address") }}'>
                            </div>
               </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">رقم الهاتف </label>
                            <div class="col-lg-6">
                                <input type=" integer" class="form-control m-input" placeholder="ادخل رقم الهاتف "
                                       name="phone" value='{{ old("phone") }}'>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <button class="btn btn-primary" type="submit">إضافة</button>
                                <a href='{{route("customer-details.index")}}' class="btn btn-secondary">الغاء الامر</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
