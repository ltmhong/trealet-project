@extends('layouts.app')

@section('page-title', '360 Trealet')
@section('page-heading', 'Streamline Edit')

@section('breadcrumbs')
<li class="breadcrumb-item active">
  This is a 360view trealet.
</li>
@stop

@section('content')
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Interactive 3D Carousel With jQuery And GSAP Example</title>
</head>
<style type="text/css">
  html,
  body {
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  }

  body {
    background-image: url('../images/background.jpg');
    background-repeat: no-repeat;
    background-position: top center;
    width: 100%;
    background-size: cover;
    height: 100%;
    min-height: 1000px;
    overflow: hidden;
    font-family: 'quicksandlight', Helvetica, Arial;
    color: #FFFFFF;
    text-shadow: -1px -1px 4px rgba(0, 0, 0, .35);
    filter: dropshadow(color=#000000, offx=1, offy=1);
  }

  header {

    margin-top: 30px;
    position: absolute;
    z-index: 5;
    width: 420px;
    padding-top: 10px;
    padding-bottom: 10px;

  }

  h1 {

    font-size: 36px;
    letter-spacing: -2.5px;
    margin-left: 30px;
  }

  h3 {

    font-size: 16px;
    letter-spacing: -1.5px;
    margin-top: 5px;
    margin-left: 35px;
  }

  #fps {
    margin-top: 5px;
    margin-left: 35px;
  }

  a {
    color: rgba(255, 255, 255, .65);
    text-decoration: none;
  }

  a:hover {
    color: rgba(255, 255, 255, 1);
  }

  /* hardware accelatator class */
  .trans3d {
    -webkit-transform-style: preserve-3d;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform-style: preserve-3d;
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform-style: preserve-3d;
    -ms-transform: translate3d(0, 0, 0);
    transform-style: preserve-3d;
    transform: translate3d(0, 0, 0);

    /*-webkit-backface-visibility: hidden;
		-moz-backface-visibility: hidden;
		-ms-backface-visibility:hidden;
		backface-visibility:hidden;*/
  }

  #contentContainer {
    position: absolute;
    margin-left: -500px;
    margin-top: -500px;
    left: 50%;
    top: 50%;
    width: 1000px;
    height: 1000px;
  }

  #carouselContainer {
    position: absolute;
    margin-left: -500px;
    margin-top: -500px;
    left: 50%;
    top: 50%;
    width: 1000px;
    height: 1000px;
  }

  .carouselItem {
    width: 320px;
    height: 130px;
    position: absolute;
    left: 50%;
    top: 50%;
    /* margin-left: -160px;
      margin-top: -90px; */
    visibility: hidden;
  }

  .carouselItemInner {
    width: 320px;
    height: 130px;
    position: absolute;
    background-color: rgba(255, 255, 255, 0.75);
    border: 10px solid rgba(255, 255, 255, 0.5);
    color: #222;
    font-size: 72px;
    left: 50%;
    top: 50%;
    margin-left: -160px;
    margin-top: -90px;
    text-align: center;
    /* padding-top: 50px; */
  }
</style>

<body>
  <header>

    <!-- <div id="fps">Framerate: 0/60 FPS</div> -->
  </header>

  <div id="contentContainer" class="trans3d">
    <section id="carouselContainer" class="trans3d">
      <figure id="item1" class="carouselItem trans3d">
        <a href="/play360view/1">
          <img class="carouselItemInner" src="{{ url('assets/img/360/Capture.PNG') }}" alt="" />
        </a>
      </figure>
      <figure id="item2" class="carouselItem trans3d">
        <a href="/play360view/2">
          <img class="carouselItemInner" src="{{ url('assets/img/360/Capture2.PNG') }}" alt="" />
        </a>
      </figure>
      <figure id="item3" class="carouselItem trans3d">
        <a href="/play360view/3">
          <img class="carouselItemInner" src="{{ url('assets/img/360/Capture3.PNG') }}" alt="" />
        </a>
      </figure>
      <figure id="item4" class="carouselItem trans3d">
        <a href="/play360view/4">
          <img class="carouselItemInner" src="{{ url('assets/img/360/Capture4.PNG') }}" alt="" />
        </a>
      </figure>
      <figure id="item5" class="carouselItem trans3d">
        <a href="/play360view/5">
          <img class="carouselItemInner" src="{{ url('assets/img/360/Capture5.PNG') }}" alt="" />
        </a>
      </figure>
      <figure id="item6" class="carouselItem trans3d">
        <a href="/play360view/6">
          <img class="carouselItemInner" src="{{ url('assets/img/360/Capture6.PNG') }}" alt="" />
        </a>
      </figure>
      <figure id="item7" class="carouselItem trans3d">
        <a href="/play360view/7">
          <img class="carouselItemInner" src="{{ url('assets/img/360/Capture7.PNG') }}" alt="" />
        </a>
      </figure>
      <figure id="item8" class="carouselItem trans3d">
        <a href="/play360view/8">
          <img class="carouselItemInner" src="{{ url('assets/img/360/Capture8.PNG') }}" alt="" />
        </a>
      </figure>
      <figure id="item9" class="carouselItem trans3d">
        <a href="/play360view/9">
          <img class="carouselItemInner" src="{{ url('assets/img/360/Capture9.PNG') }}" alt="" />
        </a>
      </figure>
      <figure id="item10" class="carouselItem trans3d">
        <a href="/play360view/10">
          <img class="carouselItemInner" src="{{ url('assets/img/360/Capture10.PNG') }}" alt="" />
        </a>
      </figure>
      <figure id="item11" class="carouselItem trans3d">
        <a href="/play360view/11">
          <img class="carouselItemInner" src="{{ url('assets/img/360/Capture11.PNG') }}" alt="" />
        </a>
      </figure>
      <figure id="item12" class="carouselItem trans3d">
        <a href="/play360view/12">
          <img class="carouselItemInner" src="{{ url('assets/img/360/Capture12.PNG') }}" alt="" />
        </a>
      </figure>
      <figure id="item13" class="carouselItem trans3d">
        <a href="/play360view/13">
          <img class="carouselItemInner" src="{{ url('assets/img/360/Capture13.PNG') }}" alt="" />
        </a>
      </figure>
      <figure id="item14" class="carouselItem trans3d">
        <a href="/play360view/14">
          <img class="carouselItemInner" src="{{ url('assets/img/360/Capture14.PNG') }}" alt="" />
        </a>
      </figure>
    </section>
  </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
  // set and cache variables
  var w, container, carousel, item, radius, itemLength, rY, ticker, fps;
  var mouseX = 0;
  var mouseY = 0;
  var mouseZ = 0;
  var addX = 0;

  // fps counter created by: https://gist.github.com/sharkbrainguy/1156092,
  // no need to create my own :)
  var fps_counter = {
    tick: function() {
      // this has to clone the array every tick so that
      // separate instances won't share state
      this.times = this.times.concat(+new Date());
      var seconds,
        times = this.times;

      if (times.length > this.span + 1) {
        times.shift(); // ditch the oldest time
        seconds = (times[times.length - 1] - times[0]) / 1000;
        return Math.round(this.span / seconds);
      } else return null;
    },

    times: [],
    span: 20,
  };
  var counter = Object.create(fps_counter);

  $(document).ready(init);

  function init() {
    w = $(window);
    container = $("#contentContainer");
    carousel = $("#carouselContainer");
    item = $(".carouselItem");
    itemLength = $(".carouselItem").length;
    fps = $("#fps");
    rY = 360 / itemLength;
    radius = Math.round(250 / Math.tan(Math.PI / itemLength));

    // set container 3d props
    TweenMax.set(container, {
      perspective: 600
    });
    TweenMax.set(carousel, {
      z: -radius
    });

    // create carousel item props

    for (var i = 0; i < itemLength; i++) {
      var $item = item.eq(i);
      var $block = $item.find(".carouselItemInner");

      //thanks @chrisgannon!
      TweenMax.set($item, {
        rotationY: rY * i,
        z: radius,
        transformOrigin: "50% 50% " + -radius + "px",
      });

      animateIn($item, $block);
    }

    // set mouse x and y props and looper ticker
    window.addEventListener("mousemove", onMouseMove, false);
    ticker = setInterval(looper, 1000 / 60);
  }

  function animateIn($item, $block) {
    var $nrX = 360 * getRandomInt(2);
    var $nrY = 360 * getRandomInt(2);

    var $nx = -2000 + getRandomInt(4000);
    var $ny = -2000 + getRandomInt(4000);
    var $nz = -4000 + getRandomInt(4000);

    var $s = 1.5 + getRandomInt(10) * 0.1;
    var $d = 1 - getRandomInt(8) * 0.1;

    TweenMax.set($item, {
      autoAlpha: 1,
      delay: $d
    });
    TweenMax.set($block, {
      z: $nz,
      rotationY: $nrY,
      rotationX: $nrX,
      x: $nx,
      y: $ny,
      autoAlpha: 0,
    });
    TweenMax.to($block, $s, {
      delay: $d,
      rotationY: 0,
      rotationX: 0,
      z: 0,
      ease: Expo.easeInOut,
    });
    TweenMax.to($block, $s - 0.5, {
      delay: $d,
      x: 0,
      y: 0,
      autoAlpha: 1,
      ease: Expo.easeInOut,
    });
  }

  function onMouseMove(event) {
    mouseX = -(-(window.innerWidth * 0.5) + event.pageX) * 0.0015;
    mouseY = -(-(window.innerHeight * 0.5) + event.pageY) * 0.01;
    mouseZ = -radius - (Math.abs(-(window.innerHeight * 0.5) + event.pageY) - 200);
  }

  // loops and sets the carousel 3d properties
  function looper() {
    addX += mouseX;
    TweenMax.to(carousel, 1, {
      rotationY: addX,
      rotationX: mouseY,
      ease: Quint.easeOut,
    });
    TweenMax.set(carousel, {
      z: mouseZ
    });
    fps.text("Framerate: " + counter.tick() + "/60 FPS");
  }

  function getRandomInt($n) {
    return Math.floor(Math.random() * $n + 1);
  }
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(["_setAccount", "UA-36251023-1"]);
  _gaq.push(["_setDomainName", "jqueryscript.net"]);
  _gaq.push(["_trackPageview"]);

  (function() {
    var ga = document.createElement("script");
    ga.type = "text/javascript";
    ga.async = true;
    ga.src =
      ("https:" == document.location.protocol ?
        "https://ssl" :
        "http://www") + ".google-analytics.com/ga.js";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(ga, s);
  })();
</script>

</html>





@stop