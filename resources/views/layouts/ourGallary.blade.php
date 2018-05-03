                <br><br><br><br>
                <div class="row">
                    <div class="col-sm-6 mx-auto">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner gallery">
                            @foreach($galleries as $gallery)
                            <div class="carousel-item">
                              <img class="d-block w-100" style="height: 300px" src="../public{{ Storage::url($gallery->avatar) }}" alt="First slide">
                              <div class="carousel-caption d-none d-md-block">
                                <h5>...</h5>
                                <p>...</p>
                              </div>
                            </div>
                            @endforeach
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
                <br><br><br><br>