@include('frontend.header')

 <!--act.css-->
 <link rel="stylesheet" type="text/css" href="assets/css/act.css">



<!-- MAIN (Center website) -->
<div class="main">
    <button style="margin-left:1000px" type="button" class="btn btn-outline-dark">
        <a href="/interest">Next</a></button>


<h1 style="font-size: 25px;">MY ACTIVITIES</h1>
<hr>

<h4 style="color: black; font-size:35px;"> <i> "A picture is worth a thousand words, but the memories are priceless."</i></h4>


<!-- Portfolio Gallery Grid -->
<div class="row">
    <table>
        @foreach ($activity as $data)
  <div class="column">
    <div class="content">
      <img src="{{('assets/img/'.$data->actimg) }}" alt="image" style="width:85%; height:60%">

      <p style="font-size: 15px; color:rgb(8, 187, 241);"> {{$data->actdesc}}</p>
    </div>
  </div>
  @endforeach
</table>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>



@include('frontend.footer')
