<footer class="pt-4" style="background-color: #50A83A; margin-top: 15vh;">
    <div class="container pt-5 pb-3">
        <div class="row justify-content-between align-items-center gap-4 gap-lg-0">
            <a href="#" class="d-flex col-lg-2 col-12 justify-content-center"><img src="img/Logo2.png" class="img-fluid pb-2" alt="" style="width: 205px;"></a>
            <div class="d-flex gap-5 col-lg-7 col-12 flex-lg-row flex-column text-center justify-content-around">
                <a href="#" class="<?= ($url == "") ? 'text-decoration-underline' : 'text-decoration-none' ; ?> text-white">Home</a>
                <a href="#" class="<?= ($url == "challenges") ? 'text-decoration-underline' : 'text-decoration-none' ; ?> text-white">Challenge</a>
                <a href="#" class="<?= ($url == "reward") ? 'text-decoration-underline' : 'text-decoration-none' ; ?> text-white">Reward</a>
                <a href="#" class="<?= ($url == "learn") ? 'text-decoration-underline' : 'text-decoration-none' ; ?> text-white">Learn</a>
                <a href="#" class="<?= ($url == "community") ? 'text-decoration-underline' : 'text-decoration-none' ; ?> text-white">Community</a>
            </div>
            <div class="d-flex gap-3 col-lg-2 col-12 justify-content-center">
                <a href="#" class="btn rounded-circle btn-warning text-white p-2">
                    <h5 class="mb-0"><i class="bi bi-google"></i></h5>
                </a>
                <a href="#" class="btn rounded-circle btn-dark p-2">
                    <h5 class="mb-0"><i class="bi bi-github"></i></h5>
                </a>
                <a href="#" class="btn rounded-circle btn-danger p-2">
                    <h5 class="mb-0"><i class="bi bi-instagram"></i></h5>
                </a>
                <a href="#" class="btn rounded-circle btn-primary p-2">
                    <h5 class="mb-0"><i class="bi bi-facebook"></i></h5>
                </a>
            </div>
        </div>
        <span class="d-flex justify-content-center w-100 my-5"><span class="bg-white border-2 border" style="border-color: white !important; width: 80%;"></span></span>
        <span class="d-flex justify-content-center">
            <p class="text-white text-center">&copy; Copyright <?= date('Y'); ?>, All Rights Reserved by AirZenith</p>
        </span>
    </div>
</footer>