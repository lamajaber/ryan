@extends("layouts.tamkeen-home")

@section("title","اتصل بنا ")

<!-- @section("homeActive","active") -->
@section("css")

@endsection
@section("content")

<div id="all">
    <div id="content">
        <div id="contact" class="container">
            <section class="bar">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>نحن هنا لمساعدتك</h2>
                        </div>
                        <p class="lead">هل تشعر بالفضول حيال شيء ما؟ هل لديك مشكلة ما مع منتجاتنا؟ كما دعيت على عجل استقر في ثروة مدنية محدودة لي. حقا الربيع في مدى. لذلك أنا أتذكر رغم أنه مطلوب. أن تكون متقدمة في تفكيك البكالوريوس.</p>
                        <p class="text-sm">لا تتردد في الاتصال بنا ، يعمل مركز خدمة العملاء لدينا على مدار الساعة طوال أيام الأسبوع.</p>
                    </div>
                </div>
            </section>
            <section>
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="box-simple">
                            <div class="icon-outlined"><i class="fa fa-map-marker"></i></div>
                            <h3 class="h4">عنوان</h3>
                            <p>13/25 الجادة الجديدة<br>نيو هافن ، 45Y 73J<br> England, <strong> إنجلترا ، بريطانيا العظمى</strong></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple">
                            <div class="icon-outlined"><i class="fa fa-phone"></i></div>
                            <h3 class="h4"> مركز الاتصال</h3>
                            <p>هذا الرقم مجاني في حالة الاتصال من بريطانيا العظمى وإلا فإننا ننصحك باستخدام الشكل الإلكتروني للاتصال.</p>
                            <p><strong>+33 555 444 333</strong></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple">
                            <div class="icon-outlined"><i class="fa fa-envelope"></i></div>
                            <h3 class="h4"> دعم إلكتروني</h3>
                            <p>لا تتردد في إرسال بريد إلكتروني إلينا أو استخدام نظام التذاكر الإلكتروني الخاص بنا.</p>
                            <ul class="list-unstyled text-sm">
                                <li><strong><a href="mailto:">info@fakeemail.com</a></strong></li>
                                <li><strong><a href="#">Ticketio</a></strong> - منصة دعم التذاكر الخاصة بنا</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bar pt-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2> استمارة الاتصال</h2>
                        </div>
                    </div>
                    <div class="col-md-8 mx-auto">
                        <form enctype='multipart/form-data' method='post'>
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname"> الاسم الاول</label>
                                        <input id="firstname" name="firstname" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname"> الكنية</label>
                                        <input id="lastname" name="lastname" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">البريد الإلكتروني</label>
                                        <input id="email" name="email" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">موضوع</label>
                                        <input id="subject" name="subject" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">رسالة</label>
                                        <textarea id="message" name="message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-template-outlined"><i
                                            class="fa fa-envelope-o"></i>  إرسال رسالة</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <!-- <div id="map"></div> -->
    </div>
    <!-- GET IT-->
    <!-- <div class="get-it">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 text-center p-3">
                <h3>Do you want cool website like this one?</h3>
              </div>
              <div class="col-lg-4 text-center p-3">   <a href="#" class="btn btn-template-outlined-white">Buy this template now</a></div>
            </div>
          </div>
        </div> -->

</div>

@endsection