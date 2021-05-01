@include('component/nav')
<!-- map
============================================ -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="{{asset('assets/images/background/halls.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Hall</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Hall</li>
                        </ol>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #map end -->

<!-- properties-grid
============================================= -->
<section id="properties-grid">
    <div class="container">
        <div class="row">
            <!-- .col-md-4 end -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    @foreach ($HallSingle as $Hall)
                    <div class="properties properties-grid">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="{{asset('HallSingle/'.$Hall['id'])}}">
                                        <img src="{{asset("images/".$Hall->image)}}" alt="property image"
                                            class="img-responsive">
                                    </a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a
                                                href="{{asset('HallSingle/'.$Hall['id'])}}">{{$Hall->name}}</a></h5>
                                       @if ($Hall->discount != 0)
                                        <p class="property--price">
                                            {{$Hall->price - (($Hall->discount * $Hall->price)/100)}}
                                            JD</p>
                                        @else
                                        <p class="property--price">Price {{$Hall->price}} JD</p>
                                        @endif
                                                {{-- <p class="property--location">Price: {{$Hall->price}} JD</p> --}}
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                        </div>
                        <!-- .property item end -->
                    </div>
                    @endforeach
                    <!-- .col-md-12 end -->
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <div class="row pagination_box mt-70">
            <div class="col-12">
                {{$HallSingle->links()}}
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #properties-grid  end  -->

<!-- cta #1
============================================= -->
<section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
    <div class="bg-section"><img src="{{asset('assets/images/cta/bg-1.jpg')}}" alt="Background"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <h3>Join our professional team and agents to start renting your Halls</h3>
                <a href="contact" class="btn btn--primary">Contact</a>
            </div>
            <!-- .col-md-6 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #cta1 end -->
<!-- Footer #1
============================================= -->

@include('component/footer')