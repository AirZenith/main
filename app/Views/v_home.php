<section style="margin-top: 20vh;">
    <div class="container d-flex flex-column gap-5">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 fw-bold  text-dark">Hi, Good
                    <?php
                    $todeh = date('G');
                    if ($todeh >= 4 and $todeh <= 10) {
                        echo 'Morning';
                    } elseif ($todeh > 10 and $todeh <= 17) {
                        echo 'Afternoon';
                    } elseif (($todeh > 17 and $todeh <= 23) || ($todeh >= 0 and $todeh < 4)) {
                        echo 'Evening';
                    }
                    ?>!
                </h1>
                <?= $message ?>
            </div>
        </div>
        <div class="row align-items-stretch justify-content-between hero gap-5 gap-xl-0">
            <a href="#" role="button" class="col-lg-7 col-12 text-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#modalcuaca">
                <div class="rounded p-4 shadow-lg" style="background-color: #E1E1E1; height: 100%;">
                    <div class="d-flex justify-content-between">
                        <div class="d-block">
                            <h5>Air Quality Right Now</h5>
                            <h5 class="fw-bold"><?= $aqi ?> AQI</h5>
                        </div>
                        <div class="d-block">
                            More info click here 👈
                        </div>
                    </div>
                    <canvas id="chartaqi"></canvas>
                </div>
            </a>
            <a href="#" class="col-12 col-lg-5 text-dark text-decoration-none">
                <div class="rounded p-4 shadow-lg d-flex flex-column" style="background-color: #E1E1E1; height: 100%;">
                    <span class="d-flex">
                        <p class="fw-bold mb-1"><?= $city ?>, <?= $country ?></p>
                        <p class="ms-auto mb-1 fw-bold"><?= $time ?></p>
                    </span>
                    <p><?= $date ?></p>
                    <div class="mt-auto">
                        <h1 class="fw-bold display-2 mb-0"><?= $tempC ?>°c</h1>
                        <p class="fw-bold"><?= $tempC ?>°c | <?= $tempF ?>°F | uv <?= $uv ?> | humidity <?= $humidity ?></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<div class="modal fade" id="modalcuaca" tabindex="-1" aria-labelledby="modalcuacatext" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="modalcuacatext"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 d-flex flex-column gap-4">
                <h1 class="fw-bold text-center">AQI</h1>
                <h1 class="display-4 fw-bold text-center"><?= $aqi ?></h1>
                <div class="py-5 px-4 d-flex justify-content-around rounded" style="background-color: #D8D8D8;">
                    <div class="d-flex flex-column align-items-center fw-bolder">
                        <h4 class="mb-4">PM2.5</h4>
                        <h1 class="display-3"><?= $pm25 ?></h1>
                    </div>
                    <div class="d-flex flex-column align-items-center fw-bolder">
                        <h4 class="mb-4">PM10</h4>
                        <h1 class="display-3"><?= $pm10 ?></h1>
                    </div>
                    <div class="d-flex flex-column align-items-center fw-bolder">
                        <h4 class="mb-4">Humidity</h4>
                        <h1 class="display-3"><?= $humidity ?></h1>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 text-center mx-auto">
                <span class="d-flex gap-2 fw-bold">
                    <i class="bi bi-geo-alt"></i>
                    <p class="mb-0"><?= $city ?>, <?= $country ?></p>
                </span>
            </div>
        </div>
    </div>
</div>

<section style="margin-top: 13vh;">
    <div class="container">
        <a href="https://cmr.earthdata.nasa.gov/search/collections.json?doi=10.5067/EMIT/EMITL2ARFL.001" class="btn btn-success w-100 d-flex">EMIT L2A Data</a>
        <div class="row mt-5">
            <span class="d-flex px-lg-0">
                <h2 class="border-bottom border-dark border-3">Upcoming Events</h2>
            </span>
        </div>
        <div class="row align-items-stretch justify-content-between mt-4">
            <?php for ($n = 1; $n <= 4; $n++) : ?>
                <div class="mt-4 d-flex align-items-stretch shadow-lg bg-white p-4 w-49" style="border-radius: 18px">
                    <div style="width: 49%;" class="">
                        <span class="m-2 bg-white rounded d-flex flex-column p-2 px-3 text-center fw-bold" style="position: absolute; z-index: 1; font-size: 8px;">
                            <p class="mb-0">July</p>
                            <h5 class="mb-0">8</h4>
                        </span>
                        <img src="img/cover.png" class="img-fluid rounded w-100 h-100" alt="">
                    </div>
                    <div style="width: 48%; gap: 15px;" class="ms-auto d-flex flex-column justify-content-center py-2">
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