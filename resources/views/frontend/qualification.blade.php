@include('frontend.header')

  <!-- Services Section Start -->
<section id="services" class="services section-padding">
    <button style="margin-left:1000px" type="button" class="btn btn-outline-dark"><a href="/education">Next</a></button>


      <h2 class="section-title wow flipInX" data-wow-delay="0.4s">MY QUALIFICATION</h2>


      <div class="container" >
        <div class="row" >
            @foreach ($qualification as $data)
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="0.3s">
              <div class="icon">
                <img src="{{('assets/img/'.$data->qualimg) }}" alt="icon" width="100px" height="70px">
              </div>
              <div class="services-content">
                <h3><a href="#">{{$data->qualtitle}}</a></h3>
                <p>{{$data->qualdesc}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </div>



</section>
    <!-- Services Section End -->


    @include('frontend.footer')
