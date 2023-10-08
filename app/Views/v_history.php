<section style="margin-top: 20vh;">
    <div class="container">
        <div class="row">
            <div class="d-flex align-items-center">
                <h1 class="fw-bold mb-0">Latest Challenges</h1>
                <a href="<?= base_url('/challenges'); ?>" class="btn text-white border-0 rounded ms-auto fw-bold px-5 py-3" style="background-color: #15C626;"><span class="px-4">Back</span></a>
            </div>
            <span class="d-flex justify-content-center">
                <hr class="py-1 border-0" style="background-color: #959595; width: 99.9%;">
            </span>
        </div>

        <div class="d-flex flex-column gap-5">

            <div class="row gap-3">
                <h3 class="mb-0 py-3 fw-bold">Today</h3>
                <?php for ($n = 1; $n <= 3; $n++) : ?>
                    <div class="col-12 shadow-sm">
                        <div class="bg-white w-100 px-4 py-3">
                            <div class="row">
    
                                <div class="col-5" style="background-image: url(<?= base_url('/img/framechal.png'); ?>); background-position: center center;">
                                    <!-- <img src="<?= base_url('/img/framechal.png'); ?>" alt="" class="img-fluid" style="width: inherit; object-fit: cover;"> -->
                                </div>
    
                                <div class="col-7 d-flex">
                                    <span style="width: 50%" class="ms-2">
                                        <h3 class="fw-bold" style="line-height: 1.4;">Let's green up your neighborhood</h3>
                                    </span>
                                    <span class="mt-auto ms-auto text-end" style="width: 50%;">
                                        <i class="bi bi-flower3"></i>2
                                        <p class="mb-0">+1000 Zen Point</p>
                                    </span>
                                    <!-- <div class="d-flex align-items-center mt-auto">
                                        <div>
                                            <i class="bi bi-flower"></i>!
                                            <p class="mb-0">+500 Zen Point</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="#" class="btn border-0 rounded text-white" style="background-color: #15C626;">Do This Challenge</a>
                                        </div>
                                        </d>
                                    </div> -->
                                </div>
    
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
    
            <div class="row gap-3">
                <h3 class="mb-0 py-3 fw-bold">Yesterday</h3>
                <?php for ($n = 1; $n <= 4; $n++) : ?>
                    <div class="col-12 shadow-sm">
                        <div class="bg-white w-100 px-4 py-3">
                            <div class="row">
    
                                <div class="col-5" style="background-image: url(<?= base_url('/img/framechal.png'); ?>); background-position: center center;">

                                </div>
    
                                <div class="col-7 d-flex">
                                    <span style="width: 50%" class="ms-2">
                                        <h3 class="fw-bold" style="line-height: 1.4;">Let's green up your neighborhood</h3>
                                    </span>
                                    <span class="mt-auto ms-auto text-end" style="width: 50%;">
                                        <i class="bi bi-flower3"></i>2
                                        <p class="mb-0">+1000 Zen Point</p>
                                    </span>
                                </div>
    
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

            <div class="d-flex align-items-center justify-content-center gap-3">
                <a href="#" class="text-decoration-none text-dark"><h1 class="mb-0"><i class="bi bi-arrow-left"></i></h1></a>
                <?php for($n=1;$n<=3;$n++): ?>
                    <a href="#" class="text-decoration-none text-dark"><h1 class="mb-0"><i class="bi bi-<?= $n; ?>-circle<?= ($n == 1) ? '-fill' : ''; ?>"></i></h1></a>
                <?php endfor; ?>
                <a href="#" class="text-decoration-none text-dark"><h1 class="mb-0"><i class="bi bi-arrow-right"></i></h1></a>
            </div>

        </div>

    </div>
</section>