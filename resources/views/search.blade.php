@extends('layouts.samezoblo')

@section('styles')
<link rel="stylesheet" href="{{asset('tempfiles/style/chart.css')}}">
@stop

@section('rightbutton')
<h4 class="change-language">ქართ</h4>
@stop

@section('maincontent')
        <div class="main-contant">
            <div class="separate-section">
                <div class="info-wrapper">
                    <a href="{{route('guest.create')}}">
                    	<h5>ახალი მისამართის რეგისტრაცია</h5>
                    </a>
                </div>


                <div class="form-container">
                    <form class="main-form" action="">
                        <input class="input" type="text" placeholder="ძებნა">
                    </form>
                </div>



            </div>

            <div class="main-wrapper">
                <div class="main-wrapper-text">
                    <h4 class="main-text-info">ძიების შედეგები</h4>
                </div>
                <div class="chart-wrapper">
                    <div class="second-wrapper">
                    	<ul>
                    	@if(count($addresses) == 0)
                    	<h5>შესაბამისი მისამართი ვერ მოიძებნა</h5>
                    	<a href="">დაარეგისტრირეთ თავად</a>
                    	@else
							@foreach($addresses as $address)
								<li><b>მისამართი:</b>
								 {{$address->name}}, {{$address->number}}
								 <a href="{{route('guest.create', ['name' => $address->name, 'number' => $address->number])}}">ამ მისამართზე რეგისტრაცია</a>
								</li>
							@endforeach
						@endif
						</ul>
                    </div>
                </div>
            </div>
        </div>
@stop