@extends('layouts.app')
@section('title','Main')
@section('style')

<style type="text/css">
    .jumbotron{
        margin-bottom: 30px;
    }
</style>

@endsection

@section('content')
    <div class="jumbotron bg-dark">
      <div class="col-sm-4"><strong class="strong1">Welcome to Kids</strong></div>     
      <p class="col-sm-4 "><strong class="strong2">Fun Learning Program For Your Child</strong></p>
      <div class="col-sm-4"><a class="btn btn-danger">LEARN MORE</a></div>
    </div>
    <div class="container" style="padding-top: 20px">
        @include('layouts.about-us')
        <br><br><br>
        <p class="text-center welcome"><strong>Welcome to Kids</strong></p>

        <div class="row">
                <div class="col-sm-6"  style="padding: 0;">
                    <img src="http://placehold.it/600x400" class="img-responsive col-sm-12">
                </div>
                <div class="col-sm-5" style="padding: 0;margin:10px;">
                    <div class="container" >
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.  Praesent interdum est gravida vehicula est node maecenas loareet morbi a dosis luctus novum est praesent. <br>
                         Magna est consectetur interdum modest dictum.<br>
                          Curabitur est faucibus, malesuada esttincidunt etos et mauris, nunc a libero govum est cuprum.Praesent interdum est gravida vehicula est node maecenas loareet morbi a dosis luctus novum est praesent.<br>
                           Magna est consectetur interdum modest dictum.<br>
                            Curabitur est faucibus.</p>
                        <a class="btn btn-warning">DISCOVER MORE</a>
                    </div>
                </div>
        </div>
        <br><br><br>
    </div>
    @include('layouts.numbers')
    <br>
    <h4 class="text-center">-Our Programs-</h4>
    <h2 class="text-center pop">Popular Classes</h2>
    @include('layouts.ourPrograms')
    <br><br>
            @include('layouts.whyChooseUs')
            <div class="container">
                <center><h3>- Our Gallery -</h3></center>
                <center><h2 class="best">Moment from kids</h2></center>
            @include('layouts.ourGallary')
            </div>

            <div class="jumbotron our-events">
                <h2 class="text-center">- Our Events -</h2>
                <h1 class="text-center best">Don't miss our event</h1>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="panel">
                              <div class="panel-heading">
                                <img src="http://placehold.it/500x350" class="img-thumbnail img-responsive">
                              </div>
                              <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12 body1"><strong>English Day on Carfree day</strong></div>
                                </div>
                                <div class="col" style="font-size: 12px">March 19, 2016 / 08:00 am - 10:00 am</div>
                                <br>
                                <div class="col-sm-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</div>
                                <div class="container-fluid">
                                    <div class="row text-center">
                                        <a class="btn btn-danger col-sm-6 mx-auto ourevents-btn">JOIN NOW</a>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="panel">
                              <div class="panel-heading">
                                <img src="http://placehold.it/500x350" class="img-thumbnail img-responsive">
                              </div>
                              <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12 body1"><strong>English Day on Carfree day</strong></div>
                                </div>
                                <div class="col" style="font-size: 12px">March 19, 2016 / 08:00 am - 10:00 am</div>
                                <br>
                                <div class="col-sm-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</div>
                                <div class="container-fluid">
                                    <div class="row text-center">
                                        <a class="btn btn-danger col-sm-6 mx-auto ourevents-btn">JOIN NOW</a>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="panel">
                              <div class="panel-heading">
                                <img src="http://placehold.it/500x350" class="img-thumbnail img-responsive">
                              </div>
                              <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12 body1"><strong>English Day on Carfree day</strong></div>
                                </div>
                                <div class="col" style="font-size: 12px">March 19, 2016 / 08:00 am - 10:00 am</div>
                                <br>
                                <div class="col-sm-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</div>
                                <div class="container-fluid">
                                    <div class="row text-center">
                                        <a class="btn btn-danger col-sm-6 mx-auto ourevents-btn">JOIN NOW</a>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @include('layouts.ourTestimonials')
<br><br><br>
@include('layouts.contactUs')
@include('layouts.footer')
@endsection