
<style type="text/css">
	
.item{
  height: 90vh;
  background-repeat: no-repeat;
  border: none;
  margin:none;
}

.carousel-indicators li{
  border-color: #09162E !important;
}

.carousel-indicators li:hover{
  background-color: #09162E !important;
}

.carousel-indicators li.active{
  background-color: #09162E !important;
}

.carousel-caption{
  position: absolute;
  top: 30%;
  text-transform: uppercase;
}

</style>
<div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="6000">
  <ol class="carousel-indicators">
    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselIndicators" data-slide-to="1"></li>
    <li data-target="#carouselIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">

    <div class="item active">
      <img src="img/5.jpg" alt="" style="width:100%;">
      <div class="carousel-caption text-center">
        <h1>Welcome to Rainbow Airlines</h1>
        <h3>Book your flight now</h3>
        <a class="btn btn-primary btn-lg" href="index.php?page=searchflight">Search Flight</a>
      </div>
    </div>

    <div class="item">
      <img src="img/6.jpg" alt="" style="width:100%; ">
      <div class="carousel-caption text-center">
        <h1>Learn the history of rainbow airlines</h1>
        <h3></h3>
        <a class="btn btn-primary btn-lg" href="index.php?page=about">about us</a>
      </div>
    </div>

    <div class="item">
      <img src="img/four.jpg" alt="" style="width:100%;">
      <div class="carousel-caption text-center">
        <h1>Create your account today!</h1>
        <h3>Booking is so simple and travelling is so fun</h3>
        <a class="btn btn-primary btn-lg" href="signup.php">Create an account</a>
      </div>
    </div>

    <a class="left carousel-control" href="#carouselIndicators" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carouselIndicators" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</div>