<section style="margin-top: 17vh;">
    <div class="container d-flex flex-column">
        <div class="row mb-5">
            <div class="col-12 d-flex justify-content-center">
                <img src="img/dare.png" alt="" class="img-fluid" style="width: 100%;">
            </div>
        </div>
        <div class="row">
            <div class="d-flex align-items-center">
                <h1 class="fw-bold mb-0">Latest Challenges</h1>
                <a href="<?= base_url('/challenges/history'); ?>" class="btn border-0 rounded ms-auto fw-bold p-3" style="background-color: #DAEC6D;">Challenge History</a>
            </div>
            <span class="d-flex justify-content-center">
                <hr class="py-1 border-0" style="background-color: #959595; width: 99.9%;">
            </span>
        </div>
        <div class="row gap-4">
            <?php for ($n = 1; $n <= 3; $n++) : ?>
                <div class="col-12 shadow-sm">
                    <div class="bg-white w-100 p-4 ">
                        <div class="row justify-content-between align-items-stretch">

                            <div class="col-5">
                                <img src="img/framechal.png" alt="" class="img-fluid" style="width: 100%;">
                            </div>

                            <div class="col-7 d-flex">
                                <div class="d-flex flex-column">
                                    <h1 class="fw-bold" style="line-height: 1.4;">Let's green your neighborhood</h1>
                                    <p class="mb-0">Green your environment by planting many plants in your neighborhood</p>
                                    <span class="mt-auto">
                                        <i class="bi bi-flower3"></i>!
                                        <p class="mb-0">+500 Zen Point</p>
                                    </span>
                                </div>
                                <div class="d-flex mt-auto">
                                    <a href="#" class="btn border-0 rounded text-white" style="background-color: #15C626;">Do This Challenge</a>
                                </div>
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
</section>