@include('frontend.header')

  <!-- Portfolio Section -->
  <section id="portfolios" class="section-padding">
    <button style="margin-left:100px" type="button" class="btn btn-outline-dark"><a href="/activities">Back</a></button>

    <!-- Container Starts -->
    <div class="container">
      <h2 class="section-title wow flipInX" data-wow-delay="0.4s">MY INTEREST
        <i>
            <br><br><p style="font-size: 15px"> ` ~ If you're interested, you'll do what's convenient.</p>
         <p style="font-size: 15px">If you're committed, you'll do whatever it takes.  ~ `</p>
        </i>
    </h2>
      <div class="row">



        <!-- Portfolio Recent Projects -->

        <div id="portfolio" class="row wow fadeInDown" data-wow-delay="0.4s">
            @foreach ($interest as $data)
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix ">

            <div class="portfolio-item">

              <div class="shot-item">

                <img src="{{('assets/img/'.$data->intimg) }}" alt="" />
                <div class="overlay">
                  <div class="icons">
                    <a class="lightbox preview" href="{{('assets/img/'.$data->intimg) }}">
                      <i class="icon-eye"></i>
                    </a>
                  </div>
                </div>

              </div>

            </div>

          </div>
          @endforeach
        </div>

      </div>

    </div>
    <!-- Container Ends -->

  </section>
  <!-- Portfolio Section Ends -->


@include('frontend.footer')
