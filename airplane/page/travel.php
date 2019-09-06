<style type="">
  .travel-grid{
  background: #FFF;
  transition: .4s;
  border-radius: 5px;
}

.travel-grid:hover{
  transform: scale(1.05);
  opacity: 0.5;
}


.travel-btn{
  margin: auto;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  height: 40px;
  display: none;
}
</style>


<section class="sectionbody">
  <div class="container">

    <div class="row">
      <div class="col-md-4">
        <div class="travel-grid">
          <a class="btn btn-primary travel-btn" href="#" id="btn1" onmouseover="showbtn1()" onmouseout="hidebtn1()">Book This</a>
          <img src="img/travels/t1.jpg" alt="" style="width:100%;height:200px;" class="img-rounded" onmouseover="showbtn1()" onmouseout="hidebtn1()">
        </div>
      </div>
      <div class="col-md-4">
        <div class="travel-grid">
          <a class="btn btn-primary travel-btn" href="#" id="btn2" onmouseover="showbtn2()" onmouseout="hidebtn2()">Book This</a>
          <img src="img/travels/t2.jpg" alt="" style="width:100%;height:200px;" class="img-rounded" onmouseover="showbtn2()" onmouseout="hidebtn2()">
        </div>
      </div>
      <div class="col-md-4">
        <div class="travel-grid">
          <a class="btn btn-primary travel-btn" href="#" id="btn3" onmouseover="showbtn3()" onmouseout="hidebtn3()">Book This</a>
          <img src="img/travels/t3.jpg" alt="" style="width:100%;height:200px;" class="img-rounded" onmouseover="showbtn3()" onmouseout="hidebtn3()">
        </div>
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-4">
        <div class="travel-grid">
          <a class="btn btn-primary travel-btn" href="#" id="btn4" onmouseover="showbtn4()" onmouseout="hidebtn4()">Book This</a>
          <img src="img/travels/t4.jpg" alt="" style="width:100%;height:200px;" class="img-rounded" onmouseover="showbtn4()" onmouseout="hidebtn4()">
        </div>
      </div>
      <div class="col-md-4">
        <div class="travel-grid">
          <a class="btn btn-primary travel-btn" href="#" id="btn5" onmouseover="showbtn5()" onmouseout="hidebtn5()">Book This</a>
          <img src="img/travels/t5.jpg" alt="" style="width:100%;height:200px;" class="img-rounded" onmouseover="showbtn5()" onmouseout="hidebtn5()">
        </div>
      </div>
      <div class="col-md-4">
        <div class="travel-grid">
          <a class="btn btn-primary travel-btn" href="#" id="btn6" onmouseover="showbtn6()" onmouseout="hidebtn6()">Book This</a>
          <img src="img/travels/t6.jpg" alt="" style="width:100%;height:200px;" class="img-rounded" onmouseover="showbtn6()" onmouseout="hidebtn6()">
        </div>
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-4">
        <div class="travel-grid">
          <a class="btn btn-primary travel-btn" href="#" id="btn7" onmouseover="showbtn7()" onmouseout="hidebtn7()">Book This</a>
          <img src="img/travels/t7.jpg" alt="" style="width:100%;height:200px;" class="img-rounded" onmouseover="showbtn7()" onmouseout="hidebtn7()">
        </div>
      </div>
      <div class="col-md-4">
        <div class="travel-grid">
          <a class="btn btn-primary travel-btn" href="#" id="btn8" onmouseover="showbtn8()" onmouseout="hidebtn8()">Book This</a>
          <img src="img/travels/t8.jpg" alt="" style="width:100%;height:200px;" class="img-rounded" onmouseover="showbtn8()" onmouseout="hidebtn8()">
        </div>
      </div>
      <div class="col-md-4">
        <div class="travel-grid">
          <a class="btn btn-primary travel-btn" href="#" id="btn9" onmouseover="showbtn9()" onmouseout="hidebtn9()">Book This</a>
          <img src="img/travels/t9.jpg" alt="" style="width:100%;height:200px;" class="img-rounded" onmouseover="showbtn9()" onmouseout="hidebtn9()">
        </div>
      </div>
    </div>

  </div><br>
</section>

<script type="text/javascript">
  function showbtn1(){
    document.getElementById("btn1").style.display = "block";
  }
  function hidebtn1(){
    document.getElementById("btn1").style.display = "none";
  }

  function showbtn2(){
    document.getElementById("btn2").style.display = "block";
  }
  function hidebtn2(){
    document.getElementById("btn2").style.display = "none";
  }
  function showbtn3(){
    document.getElementById("btn3").style.display = "block";
  }
  function hidebtn3(){
    document.getElementById("btn3").style.display = "none";
  }
  function showbtn4(){
    document.getElementById("btn4").style.display = "block";
  }
  function hidebtn4(){
    document.getElementById("btn4").style.display = "none";
  }
  function showbtn5(){
    document.getElementById("btn5").style.display = "block";
  }
  function hidebtn5(){
    document.getElementById("btn5").style.display = "none";
  }
  function showbtn6(){
    document.getElementById("btn6").style.display = "block";
  }
  function hidebtn6(){
    document.getElementById("btn6").style.display = "none";
  }
  function showbtn7(){
    document.getElementById("btn7").style.display = "block";
  }
  function hidebtn7(){
    document.getElementById("btn7").style.display = "none";
  }
  function showbtn8(){
    document.getElementById("btn8").style.display = "block";
  }
  function hidebtn8(){
    document.getElementById("btn8").style.display = "none";
  }
  function showbtn9(){
    document.getElementById("btn9").style.display = "block";
  }
  function hidebtn9(){
    document.getElementById("btn9").style.display = "none";
  }
</script>
