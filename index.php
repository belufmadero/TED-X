<!DOCTYPE html>
<html lang="en">
<head>
  <title>TEDx</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img class="c-logo" src="Assets/Logos/Hamburg.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-center">
            <li><a href="#">EVENTS</a></li>
            <li><a href="#">TICKETS</a></li>
            <li><a href="#">REVIEW</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">APPLY</a></li>
            <li><a href="#">PARTNERS</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a class=" " href="#">Newsletter</a></li>
        <li><a class=" " href="#">Contact</a></li>
        <li><a class=" " href="#">Imprint</a></li>
        <li><a class=" " href="#">Privacy</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">

<!-- Carrusel 1 Video -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner carousel-inner1" role="listbox">
      <div class="item active">
        <img src="Assets/HeroSlider/Slide1.png">
        <div class="carousel-caption carousel-caption1">
          <h3>Rock the Boat</h3>
          <p>June 24, 2017</p>
          <span class="btn-see-more"><a href="#"><h5>See more  > </h5></a></span>
        </div>  
          <div class="text-right location">
            <span class="label"><img src="Assets/Icons/Ico-Location.png"></span>
          <a href="#">Laeiszhalle</a> 
        | <a href="#">Johannes-Brahams-Platz</a>
          </div>
      </div>

      <div class="item">
        <img src="Assets/HeroSlider/Slide2.png">
        <div class="carousel-caption carousel-caption1">
          <h3>Rock the Boat</h3>
          <p>June 24, 2017</p>
        <span class="btn-see-more"><a href="#"><h5>See more  > </h5></a></span>
        </div>  
          <div class="text-right location">
            <span class="label"><img src="Assets/Icons/Ico-Location.png"></span>
          <a href="#">Laeiszhalle</a> 
        | <a href="#">Johannes-Brahams-Platz</a>
          </div>
      </div>
    
      <div class="item">
        <img src="Assets/HeroSlider/Slide3.png" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption carousel-caption1">
          <h3>Rock the Boat</h3>
          <p>June 24, 2017</p>
        <span class="btn-see-more"><a href="#"><h5>See more  > </h5></a></span>
        </div>  
           <div class="text-right location">
            <span class="label"><img src="Assets/Icons/Ico-Location.png"></span>
          <a href="#">Laeiszhalle</a> 
        | <a href="#">Johannes-Brahams-Platz</a>
          </div>
      </div>
    </div>

    <!-- Controles del slider  -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <div class="col-md-2 social-slider">
      <img src="Assets/Social/Facebook.png">
      <img src="Assets/Social/Tumblr.png">
      <img src="Assets/Social/Youtube.png">
      <img src="Assets/Social/Flickr.png">
    </div>
  </div>

<!-- Carrusel 2 Video -->

<div id="myCarousel2" class="carousel slide carusel2" data-ride="carousel">
    <div class="carousel-inner carousel-inner2" role="listbox">
      <div class="item active">
        <img src="Assets/VideoSlider/VideoSlider1.png" class="float-right" >
        <div class="carousel-caption carousel-caption2">
           <h3>Latest TEDxHamburg Videos</h3>
          <span class="btn-see-more"><a href="#"><h5>See more  > </h5></a></span>
        </div>  
      </div>

      <div class="item">
        <img src="Assets/VideoSlider/VideoSlider2.png"  >
        <div class="carousel-caption carousel-caption2 pull-left" >
           <h3>Latest TEDxHamburg Videos</h3>
        <span class="btn-see-more"><a href="#"><h5>See more  > </h5></a></span>
        </div>  
      </div>
    
      <div class="item">
        <img src="Assets/VideoSlider/VideoSlider3.png" >
        <div class="carousel-caption carousel-caption2">
           <h3>Latest TEDxHamburg Videos</h3>
        <span class="btn-see-more"><a href="#"><h5>See more  > </h5></a></span>
        </div>  
      </div>
    </div>


    <!-- Controles del slider -->
    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
      <span class="glyphicon indicator-slide" aria-hidden="true"><img src="Assets/Arrows/HeroSlider-ArrowLeft.png" alt="algo"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>



<!-- Latest Other Videos -->

<div class="container text-center other-videos">
  <div class="row">
    <h3 class="text-left">Latest Other Videos</h3>
    <div class="col-sm-4 box-video">
      <a href="#">
        <img src="Assets/CardsImg/card01.png" class="img-thumball person" alt="Cards Image" >
        <div class="overlay">
          <div class="text text-left">
            <img src="Assets/Avatar/Avatar.png" class="img-circle avatar pull-left" alt="Cards Image" >
            <h4>Wingham Rowan</h4>
            <p>Plenty of people need jobs with...</p>
          </div>
        </div>
        <div class="category-block">
          <p>TEDTalk</p>
        </div>
        
      </a>
      
    </div>
    <div class="col-sm-4">
      <a href="#">
        <img src="Assets/CardsImg/card02.png" class="img-thumball person" alt="Cards Image" >
        <div class="category-block">
          <p>Education</p>
        </div>
        <div class="text-block">
          <img src="Assets/Play/PlaySmall.png" class="pull-left" alt="Cards Image" >
          <p>"A School in the Cloud"</p>
        </div> 
      </a>
      
    </div>
    <div class="col-sm-4 box-video">
        <img src="Assets/CardsImg/card03.png" class="img-thumball person" alt="Cards Image" >
        <div class="category-block">
          <p>Technology</p>
        </div>
        <div class="text-block">
          <img src="Assets/Play/PlaySmall.png" class="pull-left" alt="Cards Image" >
          <p>“Artificial Intelligence”</p>
        </div>  
    </div>

    <div class="col-sm-4">
      <a href="#">
        <img src="Assets/CardsImg/card04.png" class="img-thumball person" alt="Cards Image" >
        <div class="category-block">
          <p>Design</p>
        </div>
        <div class="text-block">
          <img src="Assets/Play/PlaySmall.png" class="pull-left" alt="Cards Image" >
          <p>“Matching the human mind”</p>
        </div>       
      </a>
      
    </div>
    <div class="col-sm-4">
      <a href="#d">
        <img src="Assets/CardsImg/card05.png" class="img-thumball person" alt="Cards Image" >
        <div class="category-block">
          <p>Science</p>
        </div>
        <div class="text-block">
          <img src="Assets/Play/PlaySmall.png" class="pull-left" alt="Cards Image" >
          <p>“Exploring New Territories”</p>
        </div> 
      </a>
      
    </div>
    <div class="col-sm-4">
      <a href="#d">
        <img src="Assets/CardsImg/card06.png" class="img-thumball person" alt="Cards Image" >
        <div class="category-block">
          <p>Education</p>
        </div>
        <div class="text-block">
          <img src="Assets/Play/PlaySmall.png" class="pull-left" alt="Cards Image" >
          <p>“Urban Connectors“</p>
        </div> 
      </a>
    </div>
    <div class="text-more">
        <a href="#">
          <p>Show more</p>
          <img src="Assets/Play/PlayRed.png" class=" " alt="Cards Image" >
        </a>
    </div> 
    </div>
</div>

<!-- Texto -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">About TEDxHamburg</h3>
    <h4>This independent TEDx event is operated under license from TED.</h4>
    <p>TED is a nonpartisan nonprofit devoted to spreading ideas, usually in the form of short, powerful talks. TED began in 1984 as a conference where Technology, Entertainment and Design converged, and today covers almost all topics from science to business to global issues — in more than 110 languages. Meanwhile, independently run TEDx events help share ideas in communities around the world.</p>
  </div>
</div>

<!-- Footer -->
<footer class="text-center">
  <div class="col-md-2 footer">
      <img src="Assets/Social/Facebook.png">
      <img src="Assets/Social/Tumblr.png">
      <img src="Assets/Social/Youtube.png">
      <img src="Assets/Social/Flickr.png">

  </div>
  <div class="col-md-5 widget">
    <p>This independent TEDx event is operated under license from TED.</p>
  </div>
  <div class="text-right col-md-5 widget-right navbar-right">
       <a href="#">Check our partners:</a> 
       <span class="label"><img src="Assets/Logos/Berlin.png"></span>
       <span class="label"><img src="Assets/Logos/München.png"></span>
   </div>
  
</footer>


</body>
</html>