@include('frontend.header')

      <!-- About Section Start -->
 <section id="about" class="section-padding">
    <button style="margin-left:1000px" type="button" class="btn btn-outline-dark"><a href="/qualification">Next</a></button>

    @foreach ($about as $data)
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
            <img class="img-fluid border-primary  " src="{{('assets/img/'.$data->aboutimg) }}" alt="me image" >
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
            <h3>{{$data->title}}</h3>
            <p>{{$data->aboutdesc}}</p>
            <div class="about-profile">
              <ul class="admin-profile">
                <li><span class="pro-title"> Name </span> <span class="pro-detail">{{$data->name}}</span></li>
                <li><span class="pro-title"> Age </span> <span class="pro-detail">{{$data->age}}</span></li>
                <li><span class="pro-title"> Location </span> <span class="pro-detail">{{$data->location}}</span></li>
                <li><span class="pro-title"> e-mail </span> <span class="pro-detail"><a href="mailto:e026656@siswa.upsi.edu.my">{{$data->email}}</a></span></li>
              </ul>
            </div>
        </div>
        </div>

      </div>
    </div>
    @endforeach
</section>
  <!-- About Section End -->

@include('frontend.footer')



