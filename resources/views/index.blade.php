<x-layout>
    <div>
        <div id="myCarousel" class="carousel slide z-n1" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('./assets/img/photo_2023-11-24_09-44-54.jpg') }}" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('./assets/img/photo_2023-11-24_09-45-23.jpg') }}" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('./assets/img/photo_2023-11-24_09-45-14.jpg') }}" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('./assets/img/photo_2023-11-24_09-45-28.jpg') }}" class="d-block w-100"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="col-md-12 my-3">
        <div class="d-flex flex-row flex-md-row flex-sm-column">
            <div class="flex-grow-1 bg-primary me-2 text-center text-white py-3 rounded-3 info-card">
                <span>12:00 PM</span>
                <div class="w-100 py-2 fs-5 fw-bold" type="button">26</div>
            </div>
            <div class="flex-grow-1 bg-primary ms-2 text-center text-white py-3 rounded-3 info-card">
                <span>2:45 PM</span>
                <div class="w-100 py-2 fs-5 fw-bold" type="button">05</div>
            </div>
        </div>
    </div>
    <div class="col-md-12 my-3">
        <div class="d-flex flex-row flex-md-row flex-sm-column bg-primary rounded-3 info-card">
            <div class="flex-grow-1 me-md-2 mb-sm-2 text-center text-white py-3">
                <span>Thailand 2D</span>
                <div class="w-100 py-2 fs-5 fw-bold" type="button">26</div>
            </div>
            <div class="flex-grow-1 ms-md-2 mb-sm-2 text-center text-white py-3 px-2">
                <div class="d-flex flex-column">
                    <div>
                        <span class="fs-5">Value</span>
                        <span class="w-100 fs-5 fw-bold ms-3">14,522</span>
                    </div>
                    <div>
                        <span class="fs-5">TAIEX</span>
                        <span class="w-100 fs-5 fw-bold ms-3">32,511</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-3 p-3 text-center text-white bg-primary rounded-3 info-card">
        <div class="d-flex flex-row justify-content-between">
            <h3 class="text-warning">Modern</h3>
            <h3 class="text-warning">Internet</h3>
        </div>
        <div class="d-flex flex-row justify-content-between border-bottom border-dark">
            <h3 class="text-info fw-bold fs-2">68</h3>
            <span>12:00 PM</span>
            <h3 class="text-info fw-bold fs-2">26</h3>
        </div>
        <div class="d-flex flex-row justify-content-between py-2">
            <h3 class="text-info fw-bold fs-2">02</h3>
            <span>3:00 PM</span>
            <h3 class="text-info fw-bold fs-2">17</h3>
        </div>
    </div>
    <div class="my-3">
        <div class="col-lg-12 my-3">
            <div class="row row-cols-2">
                <div class="col-md-6 my-1">
                    <div class="bg-primary p-2 rounded-3 info-card">
                        <a href="/wallet"
                            class="d-flex flex-row justify-content-between text-decoration-none text-white">
                            <img src="{{ asset('./assets/img/wallet.svg') }}" class="img-fluid rounded-top"
                                alt="">
                            <span>Wallet</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 my-1">
                    <div class="bg-primary p-2 rounded-3 info-card">
                        <a href="#!"
                            class="d-flex flex-row justify-content-between text-decoration-none text-white">
                            <img src="{{ asset('./assets/img/calendar.svg') }}" class="img-fluid rounded-top"
                                alt="">
                            <span>Calendar</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 my-1">
                    <div class="bg-primary p-2 rounded-3 info-card">
                        <a href="./pages/2d_3d_lottery_play.html"
                            class="d-flex flex-row justify-content-between text-decoration-none text-white">
                            <span class="fw-bold" style="border:1px solid white; border-radius: 50%;">2D</span>
                            <span class="text-white">2D</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 my-1">
                    <div class="bg-primary p-2 rounded-3 info-card">
                        <a href="./pages/3d_history.html"
                            class="d-flex flex-row justify-content-between text-decoration-none text-white">
                            <span class="fw-bold" style="border:1px solid white; border-radius: 50%;">3D</span>
                            <span class="text-white">3D</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 my-1">
                    <div class="bg-primary p-2 rounded-3 info-card">
                        <a href="#!"
                            class="d-flex flex-row justify-content-between text-decoration-none text-white">
                            <img src="{{ asset('./assets/img/wallet.svg') }}" class="img-fluid rounded-top"
                                alt="">
                            <span>Thai Lottery</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 my-1">
                    <div class="bg-primary p-2 rounded-3 info-card">
                        <a href="#!"
                            class="d-flex flex-row justify-content-between text-decoration-none text-white">
                            <img src="{{ asset('./assets/img/wallet.svg') }}" class="img-fluid rounded-top"
                                alt="">
                            <span>Wallet</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
