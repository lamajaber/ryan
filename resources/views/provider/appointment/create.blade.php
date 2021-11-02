@extends("layouts.admin")
@section("title","اضافة منتج جديد")



@section("content")
    <div class="m-portlet m-portlet--mobile">
        <form method='post' action='{{route("appointment.index")}}'>
            @csrf
            <div class='m-form'>
                <div class="m-portlet__body">
                    <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">

                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">اسم العميل </label>
                                <div class="col-lg-6">
                                    <select class="form-control" name='customer_id' id='city_id'>
                                        <option selected>-اختر الاسم- </option>
                                        @foreach($customers as $customer)
                                            <option {{old('customer_name')==$customer->name?'selected':''}} value='{{$customer->name}}'>
                                                {{$customer->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <label class=" col-form-label">اليوم</label>
                            <div class="col-lg-2">
                                <input type="date" class="form-control m-input" placeholder="ادخل الموعد" name="day"
                                       value='{{ old("day") }}'>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div clas="card-body">
                        <table class="table table-bordered table-left">
                            <thead>
                            <tr>
                                <th></th>
                                <th >من</th>
                                <th >الى</th>
                                <th >ملاحظات</th>
                                <th> الحالة</th>


                                <th><a href="#" class="btn btn-success add_more rounded-circle"> <i class="fa fa-plus"></i></a>
                                </th>
                            </tr>

                            </thead>
                            <tbody class="addMoreProduct">

                            <tr>
                                <td class="no">1</td>

                                <td> <input type="time" name="from" id="quantity"  placeholder="من" class="form-control quantity"/>


                                </td>

                                <td>
                                    <input type="time" name="to" id="quantity" class="form-control quantity" placeholder="الى"/></td>
                                <td><input type="text" name="notes" id="price" class="form-control price"/></td>
                                <td> <label class="m-radio m-radio--solid m-radio--brand">
                                        @foreach($status as $status)
                                            <input {{old('status_id')=='$status->name'?"checked":""}} type="radio" name="status_id" checked=""
                                                   value="{{$status->name}}" aria-describedby="account_group-error"> '{{$status->name}}'<span></span>
                                    </label>
                                    @endforeach
                                </td>



                            </tr>

                            </tbody>
                        </table>
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
                    <a href='' class="btn btn-secondary">الغاء الامر</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </form>
    </div>



@endsection
@section('js')
    <script>

        $('.add_more').on('click',function(){
            var product = $('.product_id').html();
            var numberofrow=($('.addMoreProduct tr').length-0)+1;
            var tr='<tr> <td class="no">' +numberofrow+'</td>'+
                '<td> <input type="time" name="from[]" class="form-control quantity "></td>'+
                '<td> <input type="time" name="to[]" class="form-control price"></td>'+
                '<td> <input type="text" name="notes[]" class="form-control discount"></td>'+
                '<td> <input type="radio" name="status_id[]" class="m-radio m-radio--solid m-radio--brand mb-7"> متاح <input type="radio" name="status[]" class="m-radio m-radio--solid m-radio--brand mb-7">غير متاح</td> '+
                '<td> <a class="btn btn-danger delete rounded-circle"> <i class="fa fa-times" aria-hidden="true"></i></a></td>'



            $('.addMoreProduct').append(tr);
        });
        $('.addMoreProduct').delegate('.delete','click',function(){
            $(this).parent().parent().remove();

        })
    </script>
@endsection

