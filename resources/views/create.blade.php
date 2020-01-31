{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container">
	<form class="mt-3" method="post" action="{{ route('guest.store') }}">@csrf
		  <div class="form-group">
		    <input type="text" name="name" class="form-control" placeholder="Full Name">
		  </div>
		  <div class="form-group">
		    <input type="text" name="Email" class="form-control" placeholder="E Mail">
		  </div>
		  <div class="form-group">
		    <input type="password" name="password" class="form-control" placeholder="Password">
		  </div>
		  <div class="form-group">
		    <input type="password" name="verifyPassword" class="form-control" placeholder="Repeat Password">
		  </div>
		  <div class="form-group">
		    <input type="text" name="streetName" class="form-control" placeholder="Street Name">
		  </div>
		  <div class="form-group">
		    <input type="text" name="streetNumber" class="form-control" placeholder="Street number">
		  </div>
		  <div class="form-group">
		    <input type="text" name="personalId" class="form-control" placeholder="Personal Identification number">
		  </div>
		  <div class="form-group">
		    <input type="text" name="adultsInFamily" class="form-control" placeholder="Adults in Family">
		  </div>
		  <div class="form-group">
		    <input type="text" name="floor" class="form-control" placeholder="Floor Number">
		  </div>
		  <div class="form-group">
		    <input type="text" name="squareMeters" class="form-control" placeholder="Square Meters">
		  </div>
		  <button value="submit" type="submit" class="btn btn-primary">Register</button>
	</form>
</div> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>რეგისტრაცია</title>
    <link rel="stylesheet" href="{{ asset('tempfiles/style/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('tempfiles/style/registration.css')}}" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="//cdn.web-fonts.ge/fonts/bpg-nino-mtavruli/css/bpg-nino-mtavruli.min.css"
    />
  </head>
  <body>
    <div class="container">
      <div class="warning-authorization">
        <div class="red-warning">
          <img class="warning" src="{{ asset('tempfiles/icons/warning.jpg') }}" alt="warning" />
          <h5 class="warning-text">
            თუ უკვე ხარ სამეზობლოს წევრი, გაიარე ავტორიზაცია
          </h5>
        </div>
        <button
          class="authorization"
          onclick="location.href='authorization.html'"
        >
          ავტორიზაცია
        </button>
      </div>

      <div class="go-back back-address">
        <i class="material-icons" id="back-arrow">keyboard_arrow_left</i> უკან
      </div>
      <div class="go-back back-info">
        <i class="material-icons" id="back-arrow">keyboard_arrow_left</i> უკან
      </div>
      <div class="go-back back-private-info">
        <i class="material-icons" id="back-arrow">keyboard_arrow_left</i> უკან
      </div>

      <h5 class="registration-form">რეგისტრაციის ფორმა</h5>

      <section class="needed-info">
        <h6 class="border address">მისამართი</h6>
        <h6 class="border more-info">დამატებითი ინფორმაცია</h6>
        <h6 class="border private-info">პირადი მონაცემები</h6>
        <h6 class="border activating">ანგარიშის გააქტიურება</h6>
      </section>
	<form method="post" action="{{ route('guest.store') }}">@csrf
      <section class="needed-info-form-address">
        <div class="address-submit">
          <label id="address" for="submit"
            >ქუჩის სახელი <samp class="red-star">*</samp></label
          >
          <input
            class="submit" name="streetName"
            type="text"
            placeholder="მიუთითეთ ქუჩის სახელი  მაგ: ი.აბაშიძე"
          />
        </div>

        <div class="address-submit">
          <label id="address" for="submit"
            >ქუჩის ნომერი <samp class="red-star">*</samp></label
          >
          <input
            class="submit" name="streetNumber"
            type="text"
            placeholder="მიუთითეთ ქუჩის ნომერი  მაგ: 16ა"
          />
        </div>

        <div class="map-mark">
          <h6 id="mark">
            მონიშნეთ თქვენი მისამართი რუკაზე <samp class="red-star">*</samp>
          </h6>
          <img id="map" src="{{ asset('tempfiles/img/map.jpg') }}" alt="map" />
        </div>

        <h6 class="important">
          <samp class="red-star">*</samp> სავალდებულო ინფორმაცია
        </h6>
      </section>

      <section class="needed-info-form-more-info">
        <div class="area-submit submits">
          <label id="area" for="submit">ფართობი</label>
          <div class="submit-metric">
            <input
              class="submit" name="squareMeters"
              type="text"
              placeholder="ბინის ფართობი კვადრატულუ მეტრი  მაგ: 135"
            />
            <h5 class="metric">კვ.მ.</h5>
          </div>
        </div>
        <div class="floor-submit submits">
          <label id="floor" for="submit">სართული</label>
          <input
            class="submit" name="floor"
            type="text"
            placeholder="სართული მაგ: 2"
          />
        </div>
        <div class="flat-submit submits">
          <label id="flat" for="submit">ბინა</label>
          <input
            class="submit" name="homeNumber"
            type="text"
            placeholder="მიუთითეთ თქვენი ბინის ნომერი მაგ: 4"
          />
        </div>
        <div class="adult-submit submits">
          <label id="adult" for="submit"
            >სრულწლოვანი ადამიანების რაოდენობა</label
          >
          <input
            class="submit" name="adultsInFamily"
            type="text"
            placeholder="მიუთითეთ თქვენი ბინის მცხოვრები სრულწლოვანი ადამიანების რაოდენობა"
          />
        </div>
        <div class="under-age-submit submits">
          <label id="under-age" for="submit"
            >არასრულწლოვანი ადამიანების რაოდენობა
            <samp class="red-font">(6-დან 18 წლამდე)</samp></label
          >
          <input
            class="submit" name="childsInFamily"
            type="text"
            placeholder="მიუთითეთ თქვენი ბინის მცხოვრები არასრულწლოვანი ადამიანების რაოდენობა"
          />
        </div>
        <div class="red-text">
          <h6 class="important">
            <samp class="red-star">*</samp> სავალდებულო ინფორმაცია
          </h6>
          <p class="red-font">
            აღნიშნული ინფორმაცია რელევანტურია, თუ კორპუსის კომუნალურების
            დაანგარიშება მითითებული ინფორმაციების საშუალებით ხდება
          </p>
        </div>
      </section>

      <section class="needed-info-form-private-info">
        <div class="name-submit submits">
          <label id="name" for="submit">სახელი *</label>
          <input
            class="submit" name="name"
            type="text"
            placeholder="მიუთითეთ თქვენი სახელი"
          />
        </div>
        <div class="last-name-submit submits">
          <label id="last-name" for="submit">გვარი *</label>
          <input
            class="submit" name="surname"
            type="text"
            placeholder="მიუთითეთ თქვენი გვარი"
          />
        </div>
        <div class="email-name-submit submits">
          <label id="email" for="submit">ელ-ფოსტა *</label>
          <input
            class="submit" name="email"
            type="text"
            placeholder="მიუთითეთ თქვენი ელ-ფოსტა"
          />
        </div>
        <div class="personalid-name-submit submits">
          <label id="personalid" for="submit">პირადი ნომერი *</label>
          <input
            class="submit" name="personalId"
            type="text"
            placeholder="მიუთითეთ პირადი ნომერი"
          />
        </div>
        <div class="date-submit submits">
          <label id="date" for="submit">დაბადების დღე</label>
          <div class="data-inputs">
            <input id="day" class="submit" type="text" placeholder="დღე" />
            <input id="month" class="submit" type="text" placeholder="თვე" />
            <input id="year" class="submit" type="text" placeholder="წელი" />
            <input type="date" style="width: 400px">
          </div>
        </div>
        <div class="password-submit submits">
          <label id="password" for="submit">პაროლი *</label>
          <input class="submit" type="password" name="password" placeholder="მიუთითეთ პაროლი" />
        </div>
        <div class="password-repeat-submit submits">
          <label id="password-repeat" for="submit">პაროლი განმეორებით *</label>
          <input
            class="submit" name="verifyPassword"
            type="text"
            placeholder="მიუთითეთ თქვენი პაროლი განმეორებით"
          />
        </div>
        <div class="code-name-submit submits">
          <label id="code-name" for="submit">კოდური სიტყვა *</label>
          <input
            class="submit"
            type="text"
            placeholder="მიუთითეთ კოდური სიტყვა"
          />
        </div>
        <div class="code-hint-submit submits">
          <label id="code-hint" for="submit">კოდური სიტყვის მინიშნება *</label>
          <input
            class="submit"
            type="text"
            placeholder="მიუთითეთ კოდური სიტყვის მინიშნება"
          />
        </div>
        <div class="red-text">
          <h6 class="important">
            <samp class="red-star">*</samp> სავალდებულო ინფორმაცია
          </h6>
        </div>
      </section>

      <section class="needed-info-form-activating">
        <div class="code-hint-submit submits">
          <label id="phone-code" for="submit"
            >კოდი <samp class="red-star">*</samp></label
          >
          <input
            class="submit"
            type="text"
            placeholder="მიუთითეთ მობილურის ნომერზე გამოგზავნილი კოდი"
          />
          <div class="sent-code">
            <h5>კოდის ხელახლა გამოგზავნა</h5>
            <h5>ტელეფონი ნომრის შეცვლა</h5>
          </div>
        </div>
        <button action="submit" value="submit" class="code-validation">კოდის დადასტურება</button>
      </section>
  </form>

      <section id="success-registration">
        <i id="clear-icon" class="material-icons">clear</i><br />
        <div id="success-registration-text">
          <h2>თქვენ</h2>
          <h2>წარმატებით</h2>
          <h2>დარეგისტრირდით!</h2>
        </div>
      </section>

      <button class="next next-address">
        შემდეგი <i class="material-icons  arrow">arrow_forward</i>
      </button>
      <button class="next next-info">
        შემდეგი <i class="material-icons  arrow">arrow_forward</i>
      </button>
      <button class="next next-private-info">
        შემდეგი <i class="material-icons  arrow">arrow_forward</i>
      </button>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="{{ asset('tempfiles/registration.js') }}"></script>
  </body>
</html>
