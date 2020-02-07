<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('styles')
    <link rel="stylesheet" href='{{ asset('tempfiles/style/reset.css')}}'>
</head>

<body>
    <header class="header">
        <div class="logos-div">
            <a href="{{route('guest.index')}}">
            <img src="{{ asset('tempfiles/new icons/main-logo.png')}}" alt="" class="main-logo">
            </a>
            <h4 class="logo-text">სამეზობლო</h4>
        </div>
        <div class="nav">
            <div class="user-div">
                <a href="{{route('login')}}">
                <h4 class="user">მომხმარებელი</h4>
                </a>
            </div>
            <div class="language-div">
            	@yield('rightbutton')
            </div>
        </div>
    </header>


    <div class="main-section">
        <!-- ////////////SIDE BAR/////////////// -->
        <div class="side-block">
            <div class="icon-container">
                <img class="icons-building" src="{{asset('tempfiles/new icons/building.png')}}" alt="">

            </div>
            <div class="icon-container">
                <img class="icons" src="{{asset('tempfiles/new icons/bell.png')}}" alt="">
            </div>
            <div class="icon-container">
                <img class="icons" src="{{asset('tempfiles/new icons/email.png')}}" alt="">
            </div>
            <div class="icon-container">
                <img class="icons" src="{{asset('tempfiles/new icons/card.png')}}" alt="">
            </div>
            <div class="icon-container">
                <img class="icons" src="{{asset('tempfiles/new icons/tools.png')}}" alt="">
            </div>
        </div>
        	@yield('maincontent');
        </div>
	</body>
</html>