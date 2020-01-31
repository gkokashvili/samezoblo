<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href='{{ asset('tempfiles/style/reset.css')}}'>
    <link rel="stylesheet" href='{{ asset('tempfiles/style/page8.css')}}'>
</head>

<body>
    <header class="header">
        <div class="logos-div">
            <img src="new icons/main-logo.png" alt="" class="main-logo">
            <h4 class="logo-text">სამეზობლო</h4>
        </div>
        <div class="nav">
            <div class="user-div">
                <h4 class="user">მომხმარებელი</h4>
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
                <img class="icons-building" src="new icons/building.png" alt="">

            </div>
            <div class="icon-container">
                <img class="icons" src="new icons/bell.png" alt="">
            </div>
            <div class="icon-container">
                <img class="icons" src="new icons/email.png" alt="">
            </div>
            <div class="icon-container">
                <img class="icons" src="new icons/card.png" alt="">
            </div>
            <div class="icon-container">
                <img class="icons" src="new icons/tools.png" alt="">
            </div>
        </div>

        <div class="main-contant">
            <section class="message-container">
                <div class="separate-section">
                    <div class="info-wrapper">
                        <h4 class="user-info">{{$user->name}}</h4>
                        <h4 class="user-info">{{$address->name}} {{$address->number}}</h4>
                        <h4 class="user-info">სამეზობლოს ნომერი: {{$user->getAddress()->id}} </h4>
                    </div>
                </div>

                <div class="message-box">
                    <div class="comment-1">
                        <div class="user-img-div">
                            <img src="new icons/customer1.png" alt="" class="user-img">
                        </div>
                        <div class="title-div">
                            <div class="title">
                                <h4 class="main-name">სათაური</h4>
                                <img class="warning-icon" src="new icons/warning.png" alt="" class="warning">
                            </div>
                            <div class="write-comment-here">
                                <h4 class="user-text">ძირითადი ტექსტი...</h4>
                            </div>
                            <div class="icons-container">
                                <div class="few-icon">
                                    <img class="symbols" src="new icons/img-chooser.png" alt="">
                                    <img class="symbols" src="new icons/speaker.png" alt="">
                                    <img class="symbols" src="new icons/download.png" alt="">
                                    <img class="symbols" src="new icons/tag.png" alt="">
                                    <img class="symbols" src="new icons/cheeck-icon.png" alt="">
                                    <img class="symbols" src="new icons/emojis.png" alt="">
                                </div>
                                <img src="new icons/]send.png" alt="">
                            </div>
                        </div>

                    </div>





                    <div class="comment-2">
                        <div class="user-img-div2">
                            <img src="new icons/customer1.png" alt="" class="user-img2">
                            <img src="new icons/customer1.png" alt="" class="user-img">
                        </div>
                        <div class="title-div">
                            <div class="title">
                                <h4 class="main-name">ლიფტში ვარ გაჭედილი!!!</h4>
                                <img class="warning-icon" src="new icons/warning.png" alt="" class="warning">
                            </div>
                            <div class="write-comment-here">
                                <h4 class="user-text">მაკა ჯორბენაძე (ბინა 9,სართული 8) შუქი წავიდა,ლიფტში ვარ გაჭედილი
                                    ,მიშველეთ!!</h4>
                            </div>
                            <div class="comment-descrip">
                                <h4 class="date">29.12.2019 2:11</h4>
                                <h4 class="num-of-comment">0 კომენტარი</h4>
                            </div>
                            <div class="write-comment-here">
                                <h4 class="user-text">დააკომენტარე...</h4>
                            </div>
                            <div class="icons-container">
                                <div class="few-icon">
                                    <img class="symbols" src="new icons/img-chooser.png" alt="">
                                    <img class="symbols" src="new icons/speaker.png" alt="">
                                    <img class="symbols" src="new icons/download.png" alt="">
                                    <img class="symbols" src="new icons/tag.png" alt="">
                                    <img class="symbols" src="new icons/cheeck-icon.png" alt="">
                                    <img class="symbols" src="new icons/emojis.png" alt="">
                                </div>
                                <img src="new icons/]send.png" alt="">
                            </div>
                        </div>

                    </div>

                    <div class="comment-3">

                        <div class="user-img-div2">
                            <img src="new icons/customer3.png" alt="" class="user-img3">
                            <img src="new icons/customer1.png" alt="" class="user-img">
                        </div>
                        <div class="title-div">
                            <div class="title">
                                <h4 class="main-name">მთავარი პრიორიტეტი 2020?</h4>
                                <img class="warning-icon" src="new icons/warning.png" alt="" class="warning">
                            </div>
                            <div class="vote">
                                <div class="vote-here">
                                    <div class="check-mark">
                                        <img src="new icons/check-mark.png" alt="" class="check-mark-img">
                                    </div>
                                    <div class="subject">
                                        <h4 class="question">გამწვანება</h4>
                                    </div>
                                </div>
                                <img src="new icons/customer1.png" alt="" class="customers">
                                <img src="new icons/customer2.png" alt="" class="customers">
                                <img src="new icons/customer3.png" alt="" class="customers">
                            </div>
                            <div class="vote">
                                <div class="vote-here">
                                    <div class="check-mark">
                                        <img src="new icons/check-mark.png" alt="" class="check-mark-img">
                                    </div>
                                    <div class="subject2">
                                        <h4 class="question">სადარბაზოს კეთილ მოწყობა</h4>
                                    </div>
                                </div>
                                <img src="new icons/customer1.png" alt="" class="customers">
                                <img src="new icons/customer2.png" alt="" class="customers">
                                <img src="new icons/customer3.png" alt="" class="customers">
                            </div>
                            <div class="vote">
                                <div class="vote-here">

                                    <div class="check-mark">
                                        <img src="new icons/check-mark.png" alt="" class="check-mark-img">
                                    </div>
                                    <div class="subject">
                                        <h4 class="question">გარე ფასადი</h4>
                                    </div>

                                </div>
                                <img src="new icons/customer1.png" alt="" class="customers">
                                <img src="new icons/customer2.png" alt="" class="customers">
                                <img src="new icons/customer3.png" alt="" class="customers">
                            </div>
                            <div class="comment-descrip">
                                <h4 class="date">29.12.2019 2:11</h4>
                                <h4 class="num-of-comment">0 კომენტარი</h4>
                            </div>
                            <div class="write-comment-here"></div>
                            <div class="icons-container">
                                <div class="few-icon">
                                    <img class="symbols" src="new icons/img-chooser.png" alt="">
                                    <img class="symbols" src="new icons/speaker.png" alt="">
                                    <img class="symbols" src="new icons/download.png" alt="">
                                    <img class="symbols" src="new icons/tag.png" alt="">
                                    <img class="symbols" src="new icons/cheeck-icon.png" alt="">
                                    <img class="symbols" src="new icons/emojis.png" alt="">
                                </div>
                                <img src="new icons/]send.png" alt="">
                            </div>
                        </div>





                    </div>



            </section>

            <section class="promotional">
                <div class="form-container">
                    <form class="main-form" action="">
                        <input class="input" type="text" placeholder="ძებნა">
                    </form>
                </div>
                <div class="members">
                    <h4 class="member-title">6 მეზობელი</h4>

                    @foreach($address->getUsers() as $user)
	                    <div class="individual-member">
	                        <img src="new icons/customer3.png" alt="" class="member-img">
	                        <p>{{$user->name}} {{$user->floor}}</p>
	                    </div>
                    @endforeach
                    
                    <div class="member-plus">
                        <h4 class="">+1 მეზობელი</h4>
                    </div>
                </div>

                <div class="commercial-banner">
                    <h3>რეკლამა</h3>
                </div>

                <div class="commercial-banner2"></div>

            </section>








        </div>








    </div>

















</body>

</html>