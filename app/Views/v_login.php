<section class="d-flex justify-content-center align-items-center legend" style="height: 100vh;">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-lg-6 d-none d-lg-block">
                <a href="<?= base_url(); ?>"><img src="img/Logo.png" alt="" class="img-fluid" style="width: 25vh;"></a>
                <div class="d-flex justify-content-center flex-column" style="height: 75%;">
                    <h1 class="display-3" style="font-weight: 500; ">Welcome,</h1>
                    <h1 class="display-1" style="font-weight: 500; color: #15C626;">Zenither's</h1>
                </div>
            </div>
            <div class="col-12 col-lg-6 bg-white shadow-lg-sm shadow-lg-none rounded p-5">
                <a href="<?= base_url(); ?>" class="d-flex justify-content-center mb-3 d-lg-none"><img src="img/Logo.png" alt="" class="img-fluid" style="width: 25vh;"></a>
                <h1 class="fw-bold fs-1 text-center text-lg-start">Login to AirZenith</h1>
                <h4 class="">Please input your account</h5>
                <p class="my-4 lebeng">Don't have an account? <a href="register" class="text-decoration-none"><br class="d-block d-lg-none">Register now</a></p>
                <form action="" method="post">
                    <div class="mb-4 rounded shadow-sm" style="border: 2px solid #A1A1A1">
                        <input type="text" class="form-control" id="email" placeholder="Username or Email">
                    </div>
                    <div class="mb-4 rounded shadow-sm" style="border: 2px solid #A1A1A1">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="my-4 form-check">
                        <input type="checkbox" class="form-check-input border border-dark" id="checkinfo">
                        <span class="d-flex align-items-center">
                            <label class="form-check-label lebeng" for="checkinfo">Remember Me</label>
                            <a href="#" class="text-decoration-none ms-auto">Forgot Password?</a>
                        </span>
                    </div>
                    <div class="d-flex flex-column gap-2">
                        <button type="submit" class="btn border-0 w-100 text-white py-2" style="background-color: #15C626;">Login</button>
                        <p class="mb-0 text-center">OR</p>
                        <button type="submit" class="btn rounded border border-dark py-2"><i class="p-2 py-1 bi bi-google text-white rounded-circle border-0 bg-danger me-2"></i>Login With Google Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>