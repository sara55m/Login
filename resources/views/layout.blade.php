<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
          <div class="card login-card">
            <div class="row no-gutters">
              <div class="col-md-5">
                <img src="assets/images/login2.jpg" alt="login" class="login-card-img">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <div class="brand-wrapper">
                    <img src="assets/images/email.svg" alt="logo" class="logo">
                  </div>
                  @yield('content')
                  
                </div>
            </div>
          </div>
        </div>
      </div>
    </main>
      </body>
  </html>