<heade>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite(['resources/css/app.css','resources/scss/layouts/app.css', 'resources/js/app.js'])
</heade>
<body>
<header>
    <nav style="background-color: #1a202c;color: white">
        <ul class="navbar "style="width: 30%">
            <li class="nav-item"><a href="{{route('login.create')}}" class="nav-link">ثبت نام</a></li>
            <li class="nav-item"><a href="{{route('login.login')}}" class="nav-link">ورود</a></li>
            <li class="nav-item"><a href="" class="nav-link">لیست کارها</a></li>
            <li class="nav-item"><a href="" class="nav-link">لیست کارهای انجام شده</a></li>
        </ul>
    </nav>
    <img src="assets/images/task2.jpeg" style="width: 90%;height: 50%;margin-top: -.9%;margin-left: 5%" alt="">
</header>
<main>
    @yield('content')
</main>
<section id="footer" style="margin-top: 5%">
    <footer>
        <footer class="bg-body-tertiary text-center text-lg-start">

  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">


        <p style="font-size: 1.5rem">
            می توان در ظرف دو سال یک کارخانه ذوب آهن ساخت، ولی برای تربیت یک مدیر برای این صنعت باید بیست سال وقت صرف کرد.
            <br>
           <em> جواهر لعل نهرو</em>
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">


        <p style="font-size: 1.5rem">
            یک دانشمند حتی برای عشق زمینی هم وقت ندارد! او نه رهبر است نه فرمانبردار؛ او کمال بخش نیست، سرآغاز هم نیست؛ او فردی بی خویشتن است.
            <br>
           <em> فریدریش نیچه</em>
        </p>
      </div>
    </div>

  </div>


</footer>
    </footer>
</section>
</body>
