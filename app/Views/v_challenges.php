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
                                <a href="#" class="btn border-0 rounded text-white px-4" style="background-color: #15C626;">Do This Challenge</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 shadow-sm">
                <div class="bg-white w-100 p-4 ">
                    <div class="row justify-content-between align-items-stretch">

                        <div class="col-5">
                            <img src="img/framechal.png" alt="" class="img-fluid" style="width: 100%;">
                        </div>

                        <div class="col-7 d-flex">
                            <div class="d-flex flex-column">
                                <h1 class="fw-bold" style="line-height: 1.4;">Eco-firendly by taking public transportation</h1>
                                <p class="mb-0">Let's reduce air pollution by taking the public transpaortation provided</p>
                                <span class="mt-auto">
                                    <i class="bi bi-flower3"></i>!
                                    <p class="mb-0">+600 Zen Point</p>
                                </span>
                            </div>
                            <div class="d-flex mt-auto">
                                <a role="button" data-bs-toggle="modal" data-bs-target="#modal1" class="btn border-0 rounded text-white px-5" style="background-color: #15C626;">Do This Challenge</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 shadow-sm">
                <div class="bg-white w-100 p-4 ">
                    <div class="row justify-content-between align-items-stretch">

                        <div class="col-5">
                            <img src="img/framechal.png" alt="" class="img-fluid" style="width: 100%;">
                        </div>

                        <div class="col-7 d-flex">
                            <div class="d-flex flex-column">
                                <h1 class="fw-bold" style="line-height: 1.4;">Free the world from plastic waste</h1>
                                <p class="mb-0">By reducing non-biodegradable plastic waste, you;re making your owrld a friendlier place</p>
                                <span class="mt-auto">
                                    <i class="bi bi-flower3"></i>!
                                    <p class="mb-0">+200 Zen Point</p>
                                </span>
                            </div>
                            <div class="d-flex mt-auto">
                                <a role="button" data-bs-toggle="modal" data-bs-target="#modal2" class="btn border-0 rounded text-white px-5" style="background-color: #15C626;">Do This Challenge</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
</section>

<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1text" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="modal1text"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body border-0 d-flex flex-column gap-4">
                    <h2 class="fw-bold text-center">Fill the form below to approve the challenge</h2>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Your number card">
                    </div>
                </div>
                <div class="modal-footer border-0 d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-success px-4 py-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2text" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="modal2text"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body border-0 d-flex flex-column gap-4">
                    <h2 class="fw-bold text-center">Fill the form below to approve the challenge</h2>
                    <div class="mb-3 mt-4">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="mb-4">
                        <p class="fw-bold">Upload challenge proof</p>
                        <span class="d-flex"><a href="" class="btn btn-success rounded ">Choose File</a></span>
                    </div>
                </div>
                <div class="modal-footer border-0 d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-success px-4 py-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>