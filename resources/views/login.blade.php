<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Penjadwalan DTEDI</title>

    <!-- Bootstrap CSS -->
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/logincss.css">
    <script src="https://kit.fontawesome.com/b9ab364a49.js" crossorigin="anonymous"></script>
    </head>

    <body>
    @include('navbar/navbarlogin')
        <div class="col-md-4 middle mt-4 card">
            <div class="loginatas rounded-top p-3 text-center">
                <img src="img/logougm.png" class="logougm middle m-3 mx-auto">
                <p class="card-title fw-bold">SISTEM PENJADWALAN DTEDI</h5>
                <p class="card-text">UNIVERSITAS GADJAH MADA</p>
            </div>
            <div class="card-body m-3">
                <form class="d-flex col justify-content-center">
                    <div class="d-flex flex-row me-3">
                        <div class="rounded ugmacid">
                            <!-- <button class="btn btnloginsso fw-bold" type="submit"> -->
                            <a class="btn btnloginsso" href="/lampiran1" role="button">
                                <i class="fa-solid fa-user me-2"></i>
                                <strong>Sign In - SSO UGM</strong>
                            </a>
                            <!-- </button> -->
                            <!-- <p class="py-2 px-3 fw-bold top-50 start-50 translate middle">@*.ugm.ac.id</p> -->
                        </div>
                    </div>
                    <!-- <button class="px-4 btn fwbold loginbtn" type="submit">Login</button> -->
                </form>
            </div>
        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>

<!-- Login dengan button -->
<!-- <form class="d-flex col justify-content-center">
        <div class="d-flex flex-row me-3">
            <input class="form-control loginbawah border-2" type="text" placeholder="UGM ID" aria-label="UGM ID">
            <div class="border rounded ugmacid">
                <p class="py-2 px-3 fw-bold top-50 start-50 translate middle">@*.ugm.ac.id</p>
            </div>
        </div>
        <button class="px-4 btn fwbold loginbtn" type="submit">Login</button>
    </form> -->