@extends("layouts.tamkeen-home")

@section("title","مثال اجاكس")

@section("homeActive","active")

@section("content")
<section id="heading-breadcrumbs" class="brder-top-0 border-bottom-0"
    style="background-image:linear-gradient(rgba(255, 255, 255 ,70%), rgba(255, 255, 255 ,70%)), url(/tamkeen-proj/assets/imgs/gallery_item_1.jpg)">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <h1 class="h2 text-right">خدماتنا</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb d-flex justify-content-end">
                    <li class="breadcrumb-item"><a href="{{asset('/')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active">خدماتنا</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="inner-page-services">
    <div class="container py-5">
        <div class='row'>
            <div class='col-sm-2'>الدولة</div>
            <div class='col-sm-6'>
                <select id='country' name='country' class='form-control'>
                    @foreach($countries as $country)
                        <option value='{{$country->id}}'>{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class='row mt-5'>
            <div class='col-sm-2'>المدينة</div>
            <div class='col-sm-6'>
                <select id='city' name='city' class='form-control'>
                    
                </select>
            </div>
        </div>
    </div>

</section>



@endsection
@section("js")
<script>
    $(function(){
        $("#country").change(function(){
            var id=$(this).val();
            $("#city").prop("disabled",true);
            $.get("/country-cities/"+id,function(json){
                $("#city").children().remove();//امحي القديم
                $(json).each(function(){
                    $("#city").append("<option value='"+this.id+"'>"+this.name+"</option>")
                })
                $("#city").prop("disabled",false);
            })
        }).change()
    })
</script>
@endsection
