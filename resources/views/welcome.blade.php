@extends('main')
@section('stylesheets')

  
@endsection


@section('title',' | Home Page')

@section('content')
      <div class="row">
        <div class="col-md-14">
          <div class="jumbotron  ">
            <h1>Bienvenue sur mon blog !</h1>
            <p class="lead">  Ce blog est créé par Mohamed Derkaoui comme projet de stage SIP à WebPick. <hr> Cliquez ci-dessous pour acceder au blog et voir nos posts populaires ! </p>
            <p><a class="btn btn-primary btn-lg hvr-grow-shadow " href="/blog" role="button">Go To Blog !</a></p>
          </div>
        </div>


      </div>
      <!-- end of header .row -->

      <div class="row">

        <div class="col-md-8">

        @foreach($posts as $post)


            <div class="post jumbotron  ">
              <h3>{{ $post->title }}</h3>
              <p>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : ""}}</p>
              <a href=" {{ url('blog/'.$post->slug)}}  " class="btn btn-primary hvr-grow-shadow">Read More</a>
            </div>

        
          @endforeach
        </div>

         <div class=" col-sm-4 jumbotron "> <h2>  <center> Some Widgets ! </center> </h2> </div>
         <br>
<div class="col-sm-4">
  

<div style="margin: 15px 0px 0px; display: inline-block; text-align: center; width: 376px;"><div style="display: inline-block; padding: 2px 4px; margin: 0px 0px 5px; border: 1px solid rgb(204, 204, 204); text-align: center; background-color: rgb(255, 255, 255);"><a href="http://localtimes.info/Africa/Morocco/Marrakech/" style="text-decoration: none; font-size: 13px; color: rgb(0, 0, 0);"><img src="http://localtimes.info/images/countries/ma.png"="" border=0="" style="border:0;margin:0;padding:0"=""> Marrakech</a></div><script type="text/javascript" src="http://localtimes.info/clock.php?continent=Africa&country=Morocco&city=Marrakech&cp1_Hex=000000&cp2_Hex=FFFFFF&cp3_Hex=000000&fwdt=376&ham=0&hbg=0&hfg=0&sid=1&mon=0&wek=0&wkf=0&sep=0&widget_number=1000"></script></div>
<hr>

</div>


 <div class="col-md-2">
         

          <a href="http://www.accuweather.com/en/ma/marrakesh/244231/weather-forecast/244231" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1468342237915" class="aw-widget-current"  data-locationkey="244231" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1468342237915"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
        </div>

<div class="col-md-2">
  
  <a id="onlineRadioLink" href="http://radiotuna.com/">internet radio</a><script type="text/javascript" src="http://radiotuna.com/OnlineRadioPlayer/EmbedRadio?playerParams=%7B%22styleSelection0%22%3A100%2C%22styleSelection1%22%3A58%2C%22styleSelection2%22%3A85%2C%22textColor%22%3A0%2C%22backgroundColor%22%3A15592941%2C%22buttonColor%22%3A16744626%2C%22glowColor%22%3A16744626%2C%22playerSize%22%3A200%2C%22playerType%22%3A%22style%22%7D&width=200&height=244"></script>
</div>

<hr>
 



@endsection