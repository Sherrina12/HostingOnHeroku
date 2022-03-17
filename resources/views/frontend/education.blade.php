@include('frontend.header')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">





      <!-- Resume Section Start -->
    <div id="resume" class="section-padding">
        <button style="margin-left:1050px" type="button" class="btn btn-outline-dark"><a href="/activities">Next</a></button>


        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="education wow fadeInRight" data-wow-delay="0.3s">
                <ul class="timeline">
                    <li>
                    <i class="icon-graduation"></i>
                    <h2 class="timelin-title">MY EDUCATION</h2>
                  </li>
                  @foreach ($edu as $edudata )
                  <li>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{ $edudata->edutitle }}
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $edudata->edudesc }}
                            </div>
                          </div>
                        </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="experience wow fadeInRight" data-wow-delay="0.6s">
                    <img class="shadow" src="assets/img/me4.jpg" alt="image" style="width:400px; height:500px">



                </div>
              </div>



          </div>
        </div>
      </div>
      <!-- Resume Section End -->

@include('frontend.footer')



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


