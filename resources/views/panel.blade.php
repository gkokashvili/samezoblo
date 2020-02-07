@extends('layouts.samezoblo')

@section('styles')
<link rel="stylesheet" href='{{ asset('tempfiles/style/page8.css')}}'>
@stop

@section('rightbutton')
    <form id="logout-form" action="{{ route('logout') }}" method="POST"> @csrf
        <button style="background: none!important; border:none; padding: 0!important; color:white; font-size:18px;" type="submit" value="submit">გასვლა</button>
    </form>
@stop

@section('maincontent')
        <div class="main-contant">
            <section class="message-container">
                <div class="separate-section">
                    <div class="info-wrapper">
                        <h4 class="user-info">{{$user->name}} {{$user->surname}}</h4>
                        <h4 class="user-info">{{$address->name}} {{$address->number}}</h4>
                        <h4 class="user-info">სამეზობლოს ნომერი: {{$user->address->id}} </h4>
                    </div>
                </div>
                <div class="message-box">
                    <div class="comment-1">
                        <div class="user-img-div">
                            <img src="{{ asset('tempfiles/new icons/customer1.png')}}" alt="" class="user-img">
                        </div>
                        <div class="title-div">
                            <div class="title">
                                <h4 class="main-name">სათაური</h4>
                                <img class="warning-icon" src="{{ asset('tempfiles/new icons/warning.png')}}" alt="" class="warning">
                            </div>
                            <div class="write-comment-here">
                                <h4 class="user-text">ძირითადი ტექსტი...</h4>
                            </div>
                            <div class="icons-container">
                                <div class="few-icon">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/img-chooser.png')}}" alt="">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/speaker.png')}}" alt="">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/download.png')}}" alt="">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/tag.png')}}" alt="">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/cheeck-icon.png')}}" alt="">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/emojis.png')}}" alt="">
                                </div>
                                <img src="{{ asset('tempfiles/new icons/]send.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="comment-2">
                        <div class="user-img-div2">
                            <img src="{{ asset('tempfiles/new icons/customer1.png')}}" alt="" class="user-img2">
                            <img src="{{ asset('tempfiles/new icons/customer1.png')}}" alt="" class="user-img">
                        </div>
                        <div class="title-div">
                            <div class="title">
                                <h4 class="main-name">ლიფტში ვარ გაჭედილი!!!</h4>
                                <img class="warning-icon" src="{{ asset('tempfiles/new icons/warning.png')}}" alt="" class="warning">
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
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/img-chooser.png')}}" alt="">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/speaker.png')}}" alt="">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/download.png')}}" alt="">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/tag.png')}}" alt="">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/cheeck-icon.png')}}" alt="">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/emojis.png')}}" alt="">
                                </div>
                                <img src="{{ asset('tempfiles/new icons/]send.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="comment-3">
                        <div class="user-img-div2">
                            <img src="{{ asset('tempfiles/new icons/customer3.png')}}" alt="" class="user-img3">
                            <img src="{{ asset('tempfiles/new icons/customer1.png')}}" alt="" class="user-img">
                        </div>
                        <div class="title-div">
                            <div class="title">
                                <h4 class="main-name">მთავარი პრიორიტეტი 2020?</h4>
                                <img class="warning-icon" src="{{ asset('tempfiles/new icons/warning.png')}}" alt="" class="warning">
                            </div>
                            <div class="vote">
                                <div class="vote-here">
                                    <div class="check-mark">
                                        <img src="{{ asset('tempfiles/new icons/check-mark.png')}}" alt="" class="check-mark-img">
                                    </div>
                                    <div class="subject">
                                        <h4 class="question">გამწვანება</h4>
                                    </div>
                                </div>
                                <img src="{{ asset('tempfiles/new icons/customer1.png')}}" alt="" class="customers">
                                <img src="{{ asset('tempfiles/new icons/customer2.png')}}" alt="" class="customers">
                                <img src="{{ asset('tempfiles/new icons/customer3.png')}}" alt="" class="customers">
                            </div>
                            <div class="vote">
                                <div class="vote-here">
                                    <div class="check-mark">
                                        <img src="{{ asset('tempfiles/new icons/check-mark.png')}}" alt="" class="check-mark-img">
                                    </div>
                                    <div class="subject2">
                                        <h4 class="question">სადარბაზოს კეთილ მოწყობა</h4>
                                    </div>
                                </div>
                                <img src="{{ asset('tempfiles/new icons/customer1.png')}}" alt="" class="customers">
                                <img src="{{ asset('tempfiles/new icons/customer2.png')}}" alt="" class="customers">
                                <img src="{{ asset('tempfiles/new icons/customer3.png')}}" alt="" class="customers">
                            </div>
                            <div class="vote">
                                <div class="vote-here">

                                    <div class="check-mark">
                                        <img src="{{ asset('tempfiles/new icons/check-mark.png')}}" alt="" class="check-mark-img">
                                    </div>
                                    <div class="subject">
                                        <h4 class="question">გარე ფასადი</h4>
                                    </div>
                                </div>
                                <img src="{{ asset('tempfiles/new icons/customer1.png')}}" alt="" class="customers">
                                <img src="{{ asset('tempfiles/new icons/customer2.png')}}" alt="" class="customers">
                                <img src="{{ asset('tempfiles/new icons/customer3.png')}}" alt="" class="customers">
                            </div>
                            <div class="comment-descrip">
                                <h4 class="date">29.12.2019 2:11</h4>
                                <h4 class="num-of-comment">0 კომენტარი</h4>
                            </div>
                            <div class="write-comment-here"></div>
                            <div class="icons-container">
                                <div class="few-icon">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/img-chooser.png')}}" alt="">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/speaker.png')}}" alt="">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/download.png')}}" alt="">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/tag.png')}}" alt="">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/cheeck-icon.png')}}" alt="">
                                    <img class="symbols" src="{{ asset('tempfiles/new icons/emojis.png')}}" alt="">
                                </div>
                                <img src="{{ asset('tempfiles/new icons/]send.png')}}" alt="">
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
                    <h4 class="member-title">{{count($address->users)}} მეზობელი</h4>
                    @foreach($address->users as $user)
	                    <div class="individual-member">
	                        <img src="{{ asset('tempfiles/new icons/customer3.png')}}" alt="" class="member-img">
	                        <p>{{$user->name}} {{$user->surname}}, სართული:{{$user->floor}}</p>
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
@stop







   