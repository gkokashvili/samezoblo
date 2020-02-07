<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <link rel="stylesheet" href="{{ asset('tempfiles/style/reset.css')}}">
      <link rel="stylesheet" href="{{ asset('tempfiles/style/style.css') }}">
</head>

<body>
      <header class="header">
            <div class="logos-div">
                  <img src="{{asset('tempfiles/new icons/main-logo.png')}}" alt="" class="main-logo">
                  <h4 class="logo-text">სამეზობლო</h4>
            </div>
            <div class="nav">
                  <div class="user-div">
                        <a href="{{route('login')}}"><h4 class="user">მომხმარებელი</h4></a>
                  </div>
                  <div class="language-div">
                        <h4 class="change-language">ქართ</h4>
                  </div>
            </div>
      </header>



      <div class="main-section">
            <!-- ////////////SIDE BAR/////////////// -->
            <div class="side-block">
                  <div class="icon-container">
                        <img class="icons" src="new icons/fb.png" alt="">

                  </div>
                  <div class="icon-container">
                        <img class="icons" src="{{ asset('tempfiles/new icons/youtube.png') }}" alt="">
                  </div>
                  <div class="icon-container">
                        <img class="icons" src="{{ asset('tempfiles/new icons/insta.png') }}" alt="">
                  </div>
                  <div class="icon-container">
                        <img class="icons" src="{{ asset('tempfiles/new icons/in.png') }}" alt="">
                  </div>

            </div>
            <div class="back-image">
                  <div class="gradient">
                        <!-- ////////////////INPUT SECTION///////////// -->
                        <div class="search-text-wrapper">
                              <div class="text-box1">
                                    <h4 class="text1">დაზოგე დრო და</h4>
                              </div>
                        </div>
                        <div class="search-text-wrapper">
                              <div class="text-box2">
                                    <h4 class="text2">ეკონტაქტე მეზობლებს მარტივად</h4>
                              </div>
                        </div>
                        <div class="form-wrapper">
                              <form class="main-form" method="get" action="{{route('guest.search')}}">
                                    <input class="input" name="addressname" type="text" placeholder="იპოვე შენი სამეზობლო">
                                    <i class="fa fa-search"></i>
                              </form>

                        </div>
                  </div>
            </div>
      </div>


      <!-- /////////FOOTER////////// -->
      <footer class="footer">
            <ul>
                  <li class="display-flex footer-texts">საკონტაქტო:</li>
                  <li class="display-flex footer-texts">info@samezoblo.ge</li>
                  <li class="display-flex ">(+995) 555 000 000</li>
            </ul>
      </footer>

</body>

</html>