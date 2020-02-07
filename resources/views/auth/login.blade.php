
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>authorization</title>
    <link rel="stylesheet" href="{{asset('tempfiles/style/reset.css')}}" />
    <link rel="stylesheet" href="{{asset('tempfiles/style/authorization.css')}}" />
    <link
      rel="stylesheet"
      href="//cdn.web-fonts.ge/fonts/bpg-nino-mtavruli/css/bpg-nino-mtavruli.min.css"
    />
  </head>
  <body>
    <div class="container">
      <section class="warning-registration">
        <div class="red-warning">
          <img class="warning" src="{{asset('tempfiles/icons/warning.jpg')}}" alt="warning" />
          <h5 class="warning-text">
            თუ ჯერ არ ხარ სამეზობლოს წევრი, გაიარე რეგისტრავია
          </h5>
        </div>
        <button
          class="registration"
          onclick="location.href='{{route('guest.create')}}'"
        >
          რეგისტრაცია
        </button>
      </section>

      <section class="authorization-title-form">
        <h3 class="authorization-title">ავტორიზაცია</h3>
        <div class="mobile-submit">
          <form action="{{ route('login') }}" method="POST">@csrf
              <label id="mobile-number" for="submit">ელექტრონული ფოსტა</label>
              <input
                class="submit"
                type="email" name="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                placeholder="მიუთითეთ ელექტრონული ფოსტა"
              />
            </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <div class="password-submit">
              <label id="password" for="submit">პარიოლი</label>
              <input class="submit" type="password" name="password" required autocomplete="current-password" placeholder="მიუთითეთ პაროლი" />
            </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <button style="text-align:center;" class="enter">შესვლა</button>
          </form>
      </section>

      <section class="security-system">
        <label id="security-system" for="submit"
          >ორნაბიჯიანი უსაფრთხოების სისტემა</label
        >
        <input
          id="security-system-input"
          class="submit"
          type="text"
          placeholder="მიუთითეთ ბილურ ნომერზე გამოგზავნილი კოდი"
        />
        <button style="text-align:center;" class="enter-code">
          კოდის დადასტურება
        </button>
      </section>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="./authorization.js"></script>
  </body>
</html>

