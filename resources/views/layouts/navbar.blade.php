<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="{{url('fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{url('fonts/flaticon/font/flaticon.css')}}">

	<link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}">

	<link rel="stylesheet" href="{{url('css/tiny-slider.css')}}">
	<link rel="stylesheet" href="{{url('css/aos.css')}}">
	<link rel="stylesheet" href="{{url('css/glightbox.min.css')}}">
	<link rel="stylesheet" href="{{url('css/style.css')}}">

	<link rel="stylesheet" href="{{url('css/flatpickr.min.css')}}">


	<title>Blogy &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="index.html" class="logo m-0 float-start">مقالي<span class="text-primary">.</span></a>
						</div>
						<div class="col-10 text-end">
							

							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li class="active"><a href="{{route('home')}}">الصحه الرئيسية</a></li>
								@if (Auth::check())
									<li class="has-children">
									<a href="#">حسابي</a>
									<ul class="dropdown">
										<li><a href="{{route('dashboard')}}">لوحه التحكم</a></li>
										<li><a href="{{route('profile.edit')}}">الصفحه الشخصيه</a></li>
										<li  ><form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <input
										style="background: none;color:black; border: none;padding-left:15px" 
                                           
											type="submit"value=" تسجيل الخروج">
                                           

                                  
                                    </form></li>
									</ul>
								</li>
						

								@else
					      <li ><a href="{{route('login')}}"> تسجيل الدخول</a></li>
					      <li ><a href="{{route('register')}}">انشاء حساب </a></li>

								@endif
								
								
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</nav>


    @yield('content')




    
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">تعرف علينا</h3>
						<p>بعيدًا جدًا، خلف جبال الكلمة، بعيدًا عن بلاد فوكاليا وكونسونانتيا، هناك تعيش النصوص العمياء.</p>
					</div> <!-- /.widget -->
					<div class="widget">
						<h3>Social</h3>
						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4 ps-lg-5">
					<div class="widget">
    <h3 class="mb-4">شركة دروب الإعلامية</h3>
    <ul class="list-unstyled float-start links">
        <li><a href="{{route('home')}}">من نحن</a></li>
        <li><a href="{{route('home')}}">الخدمات</a></li>
        <li><a href="{{route('home')}}">الرؤية</a></li>
        <li><a href="{{route('home')}}">الرسالة</a></li>
        <li><a href="{{route('home')}}">الشروط</a></li>
        <li><a href="{{route('home')}}">الخصوصية</a></li>
    </ul>
    <ul class="list-unstyled float-start links">
        <li><a href="{{route('home')}}">الشركاء</a></li>
        <li><a href="{{route('home')}}">الأعمال</a></li>
        <li><a href="{{route('home')}}">وظائف</a></li>
        <li><a href="{{route('home')}}">المدونة</a></li>
        <li><a href="{{route('home')}}">الأسئلة الشائعة</a></li>
        <li><a href="{{route('home')}}">الإبداع</a></li>
    </ul>
</div> <!-- /.widget -->

				</div> <!-- /.col-lg-4 -->
				


				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->

			
      </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>

    <script src="js/flatpickr.min.js"></script>


    <script src="js/aos.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

    
  </body>
  </html>



