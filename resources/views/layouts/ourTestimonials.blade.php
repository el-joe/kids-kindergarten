            <div class="container ourTestimonials">
                <h3 class="text-center" style="font-weight: 900">- Our Testimonials -</h3>
                <h1 class="text-center best">What parents say</h1>

                <div class="row">
                    <div id="demo1" class="carousel slide  mx-auto text-center" data-ride="carousel">
                      <div class="carousel-inner gallery">
                        @foreach($contacts as $contact)
                        <div class="carousel-item">
                            <h3 class="text-center">"{{ $contact->comment }}".</h3>
                            <div class=" text-center">
                                <img src="../public/images/{{ $contact->avatar }}" class="rounded-circle"  width="200" height="200">
                                <div class="text-center">- {{ $contact->name }} -</div>
                            </div>
                        </div>
                        @endforeach
                      </div>
                      <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#demo1" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
                    </div>
                </div>
            </div>