@extends('layouts.app')
@section('style')
<style>
    .strong1{
        font: italic bold 30px/70px Courier New, serif;
        color: #FF7300;
    }
    .strong2{
        font-size: 40px;
        text-align: left;
        color: white;
    }
    .btn{
        border-radius: 15px;
    }
    .more{
        padding:0px 80px 80px 80px;
        padding-top: 50px;
        position: relative;
        color: white;
    }
    .logo{
        font-size: 40px;
        border-radius: 50%;
        position: absolute;
        margin-top: -100px;
        margin-left: -50px;
    }
    .logo1{
        border: 30px solid #F1C22E;
        background-color: #F1C22E;
    }
    .logo2{
        border: 30px solid rgb(225,20,20);
        background-color: rgb(225,20,20);
    }
    .logo3{
        border: 30px solid rgb(51, 51, 255);
        background-color: rgb(51, 51, 255);
    }

    .more:nth-child(2){
        border-left: 2px solid white;
        border-right: 2px solid white;
    }
    .more strong{
        font:small-caps 20px 0 Impact;
        font-weight: 900;
    }
    .more p:nth-child(3){
        letter-spacing: 3px;
    }
    .number{
        border: 20px solid gray;
        background-color: gray;
        font-size: 30px;
        width: 100px;
        height: 100px;
        color: white;
        -webkit-transform: rotate(45deg);
        margin-left: 60px;
        margin-top: 30px;
    }
    .number p{
        -webkit-transform: rotate(-45deg);
        padding-bottom: 22px;
        font-weight: 900;
        font-family: italic;
    }
    .pop{
        font: italic bold 30px/70px Courier New, serif;
        color: rgb(225,20,20);
    }
    .body1{
        padding-left: 30px;
        font:italic bold 15px/30px Georgia, serif;
        color: rgb(225,20,20);
        font-weight: 900 bolder;
    }
    .body2{
        text-align: right;
        padding-right: 30px;
        padding-top: 2px;
    }
    .panel{
        background-color: #e6e6e6;
        border-radius: 5px;
        padding: 1px;
        border-radius: 10px;

    }
    .panel-heading img{
        border-radius: 10px 10px 0 0;
    }
    .panel-footer1{
        background-color: rgb(225,20,20);
        border-radius: 0 0 0 10px;
    }
    .panel-footer2{
        background-color: #F1C22E;
        border-radius: 0 0 10px 0;
    }
    .panel-footer1,.panel-footer2{
        padding: 10px;
        color: white;
    }
    .fas.fa-check-circle{
        color: skyblue;
        font-size: 25px;
    }
    .best{
        font:italic bold 30px/45px Georgia, serif;
        color: rgb(225,20,20);
    }

</style>
@endsection
@section('content')
<div style="padding-top: 72px;">
    <div class="jumbotron bg-dark">
      <div class="col-sm-4"><strong class="strong1">Welcome to Kids</strong></div>     
      <p class="col-sm-4 "><strong class="strong2">Fun Learning Program For Your Child</strong></p>
      <div class="col-sm-4"><a class="btn btn-danger">LEARN MORE</a></div>
    </div>
    <div class="container" style="padding-top: 20px">
        <div class="row">
            <div class="more col-sm-4 text-center" style="background-color: #F1C22E;">
                <i class="far fa-clock logo logo1"></i>
                <p><STRONG>Full Day Programs</STRONG></p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p><br>
                <a class="btn btn1 btn-primary">LEARN MORE</a>
            </div>
            <div class="more col-sm-4 text-center" style="background-color: rgb(225,20,20);">
                <i class="fas fa-home logo logo2"></i>
                <p><STRONG>Strategi Location</STRONG></p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p><br>
                <a class="btn btn2 btn-primary">LEARN MORE</a>
            </div>
            <div class="more col-sm-4 text-center" style="background-color: rgb(51, 51, 255);">
                <i class="fas fa-trophy logo logo3"></i>
                <p><STRONG>Expert Teachers</STRONG></p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p><br>
                <a class="btn btn3 btn-primary">LEARN MORE</a>
            </div>
        </div>
        <br><br><br>
        <div class="row">
                <div class="col-sm-6"  style="padding: 0;">
                    <img src="http://placehold.it/600x400" class="img-responsive col-sm-12">
                </div>
                <div class="col-sm-5" style="padding: 0;">
                    <div class="container" >
                        <p><strong style="color: rgb(225,20,20);font-size: 20px;">Welcome to Kids</strong></p>
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
    <div class="jumbotron bg-dark">
        <div class="row text-center">
            <div class="col-sm-3"><p style="font-size: 20px;font-weight: bolder;color: white">Teachers</p> <div class="number"><p>22</p></div></div>
            <div class="col-sm-3"><p style="font-size: 20px;font-weight: bolder;color: white">Students</p> <div class="number"><p>222</p></div></div>
            <div class="col-sm-3"><p style="font-size: 20px;font-weight: bolder;color: white">Class Rooms</p> <div class="number"><p>21</p></div></div>
            <div class="col-sm-3"><p style="font-size: 20px;font-weight: bolder;color: white">Bus Schools</p> <div class="number"><p>15</p></div></div>
        </div>
    </div>
    <br>

    <h4 class="text-center">-Our Programs-</h4>
    <h2 class="text-center pop">Popular Classes</h2>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel">
                  <div class="panel-heading">
                    <img src="http://placehold.it/500x350" class="img-thumbnail img-responsive">
                  </div>
                  <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6 body1"><strong>Drawing Classes</strong></div>
                        <div class="col-sm-6 body2"><strong>$20</strong></div>
                    </div>
                    <div class="col" style="font-size: 12px">Open Class : 08:00am - 10:00 am</div>
                    <br>
                    <div class="col-sm-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</div>
                    <div class="container-fluid">
                        <div class="row text-center">
                            <div class="col-sm-6 panel-footer1"><b>Age 2-5 years</b></div>
                            <div class="col-sm-6 panel-footer2"><b>Class Size 20</b></div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel">
                  <div class="panel-heading">
                    <img src="http://placehold.it/500x350" class="img-thumbnail img-responsive">
                  </div>
                  <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6 body1"><strong>Gaming Classes</strong></div>
                        <div class="col-sm-6 body2"><strong>$20</strong></div>
                    </div>
                    <div class="col" style="font-size: 12px">Open Class : 08:00am - 10:00 am</div>
                    <br>
                    <div class="col-sm-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</div>
                    <div class="container-fluid">
                        <div class="row text-center">
                            <div class="col-sm-6 panel-footer1"><b>Age 2-5 years</b></div>
                            <div class="col-sm-6 panel-footer2"><b>Class Size 20</b></div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel">
                  <div class="panel-heading">
                    <img src="http://placehold.it/500x350" class="img-thumbnail img-responsive">
                  </div>
                  <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6 body1"><strong>Learning Classes</strong></div>
                        <div class="col-sm-6 body2"><strong>$20</strong></div>
                    </div>
                    <div class="col" style="font-size: 12px">Open Class : 08:00am - 10:00 am</div>
                    <br>
                    <div class="col-sm-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</div>
                    <div class="container-fluid">
                        <div class="row text-center">
                            <div class="col-sm-6 panel-footer1"><b>Age 2-5 years</b></div>
                            <div class="col-sm-6 panel-footer2"><b>Class Size 20</b></div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col"  align="center">
                <a class="btn btn-warning col-sm-2" style="padding: 10px;">SEE MORE CLASSES</a>
            </div>
        </div>
    </div>
    <br><br>
    <div class="jumbotron" style="background-color: rgb(38, 38, 38);">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8" style="color: white;">
                        <p style="font-size: 20px;"><strong>Why Choose Us</strong></p>
                        <h2 class="best">Best Kindergarten</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.  Praesent interdum est gravida vehicula est node maecenas loareet morbi a dosis luctus novum est praesent.  Praesent interdum est gravida vehicula est node maecenas loareet morbi a dosis luctus novum est praesent.</p>
                        <br>

                        <p><i class="fas fa-check-circle"></i> 100% education, for your kids, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                        <p><i class="fas fa-check-circle"></i> More programs activities, sed diam nonummy nibh euismod. Lorem ipsum dolor sit amet.</p>
                        <p><i class="fas fa-check-circle"></i> More benefit nonummy nibh euismod. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="http://placehold.it/400x500" class="img-responsive img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
            <div class="container">
                <center><h3>- Our Gallery -</h3></center>
                <center><h2 class="best">Moment from kids</h2></center>
                <br>
                <div class="row">
                    <div class="col-sm-6 mx-auto">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="http://placehold.it/300x300" alt="First slide">
                              <div class="carousel-caption d-none d-md-block">
                                <h5>...</h5>
                                <p>...</p>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="http://placehold.it/300x300" alt="Second slide">
                              <div class="carousel-caption d-none d-md-block">
                                <h5>...</h5>
                                <p>...</p>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="http://placehold.it/300x300" alt="Third slide">
                              <div class="carousel-caption d-none d-md-block">
                                <h5>...</h5>
                                <p>...</p>
                              </div>
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>
                </div>
            </div>
</div>
<br><br><br>
@include('layouts.footer')
@endsection