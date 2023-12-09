<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Website Laundry</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/login.css">

</head>
<body>
    <div class="box">
		<div class="box-content">
			<div class="col box__left">
				<div class="box__left-title">
					<h4>Login untuk akunmu</h4>
				</div>
                <hr>
                @if(session('error'))
                <div class="alert alert-danger">
                    <b>Opps!</b> {{session('error')}}
                </div>
                @endif
                <form action="{{ route('actionlogin') }}" method="post">
                @csrf
				<div class="box__left-form">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="">
                        </div>

						<div class="box__left-form-group">
							<button type="submit" name="login" class="btn-login mt-1">Login</button>
						</div>
                        <hr>
                        <p class="text-center">Belum punya akun? <a href="register">Register</a> sekarang!</p>
					</form>
				</div>
			</div>

			<div class="col box__right">
				<div class="box__right-content">
					<div class="text__right">
						<h1>Website Laundry</h1>
					</div>

					<img src=" <?=url('/img/orang.png')?>" alt="" class="box-img-orang">
					<img src=" <?=url('/img/celana.png')?>" alt="" class="box-img-celana">
					<img src=" <?=url('/img/kaos.png')?>" alt="" class="box-img-kaos">
					<img src=" <?=url('/img/kemeja.png')?>" alt="" class="box-img-kemeja">

					<!-- Bubble Variasi -->
					<div class="bubble-1"></div>
					<div class="bubble-2"></div>
					<div class="bubble-3"></div>
					<div class="bubble-4"></div>
					<div class="bubble-5"></div>
					<div class="bubble-6"></div>

					<!-- Garis Variasi -->
					<div class="garis garis-sm garis-1"></div>
					<div class="garis garis-md garis-2"></div>
					<div class="garis garis-sm garis-3"></div>
					<div class="garis garis-md garis-4"></div>
					<div class="garis garis-md garis-5"></div>
					<div class="garis garis-lg garis-6"></div>
					<div class="garis garis-lg garis-7"></div>
					<div class="garis garis-xl garis-8"></div>
					<div class="garis garis-sm garis-9"></div>
					<div class="garis garis-md garis-10"></div>
					<div class="garis garis-sm garis-11"></div>
					<div class="garis garis-md garis-12"></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>