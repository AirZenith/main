<section style="margin-top: 20vh;">
    <div class="container d-flex flex-column gap-5 ">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 fw-bold text-center text-dark">Hello, Good Morning</h1>
            </div>
        </div>
        <div class="row align-items-stretch justify-content-between gap-4">
            <div class="col-lg-6 col-12 rounded p-4 shadow-lg" style="background-color: #E1E1E1;">
                <h5>Average Today's Air <br>Quality</h5>
                <h5 class="fw-bold">124 AQI</h5>
            </div>
            <div class="col-12 col-lg-5 rounded p-4 shadow-lg" style="background-color: #E1E1E1;">
                <span class="d-flex">
                    <p class="fw-bold mb-1">Jakarta, Indonesia</p>
                    <p class="ms-auto mb-1">05.00 PM</p>
                </span>
                <p>15 June 2023</p>
                <div class="mt-auto">
                    <h1 class="fw-bold display-2 mb-0">28°c</h1>
                    <p class="fw-bold">32°c/26°c</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="margin-top: 13vh;">
    <div class="container">
        <div class="row">
            <span class="d-flex px-0">
                <h2 class="border-bottom border-dark border-3">Upcoming Events</h2>
            </span>
        </div>
        <div class="row align-items-stretch justify-content-between mt-4">
            <?php for ($n = 1; $n <= 4; $n++) : ?>
                <div class="mt-4 d-flex align-items-stretch shadow-lg bg-white p-4" style="width: 49%; border-radius: 18px">
                    <div style="width: 49%;" class="">
                        <span class="m-2 bg-white rounded d-flex flex-column p-2 px-3 text-center fw-bold" style="position: absolute; z-index: 1; font-size: 8px;">
                            <p class="mb-0">July</p>
                            <h5 class="mb-0">8</h4>
                        </span>
                        <img src="img/cover.png" class="img-fluid rounded w-100 h-100" alt="">
                    </div>
                    <div style="width: 49%; gap: 15px;" class="ms-auto d-flex flex-column justify-content-center py-2">
                        <h5>Hackaton Nasa</h5>
                        <span style="font-size: 12px;" class="d-flex flex-row gap-2 fw-bold align-items-center"><i class="bi bi-people"></i>
                            <p class="mb-0">1000+ People Join</p>
                        </span>
                        <span style="font-size: 12px;" class="d-flex flex-row gap-2 fw-bold align-items-center"><i class="bi bi-geo-alt"></i>
                            <p class="mb-0">Jakarta, Indonesia</p>
                        </span>
                        <a href="#" class="btn border-0 w-100 text-white" style="background-color: #15C626; border-radius: 8px;">Detail</a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>