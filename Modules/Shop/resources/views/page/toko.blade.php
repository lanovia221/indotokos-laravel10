@extends('shop::index')
@section('content')
    <div class="row mt-4">
        <!-- Kolom Kiri -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Category
                </div>
                <div class="card-body">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Pria
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-column gap-4">
                                        <a href="#" class="page-link"><i class="fas fa-plus"></i>Baju Pria</a>
                                        <a href="#" class="page-link"><i class="fas fa-plus"></i>Celana Pria</a>
                                        <a href="#" class="page-link"><i class="fas fa-plus"></i>Acessories Pria</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Wanita
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body p-0">
                                        <div class="d-flex flex-column gap-4">
                                            <a href="#" class="page-link"><i class="fas fa-plus"></i>Baju Wanita</a>
                                            <a href="#" class="page-link"><i class="fas fa-plus"></i>Celana Wanita</a>
                                            <a href="#" class="page-link"><i class="fas fa-plus"></i>Acessories Wanita</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Anak-anak
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body p-0">
                                        <div class="d-flex flex-column gap-4">
                                            <a href="#" class="page-link"><i class="fas fa-plus"></i>Baju Anak</a>
                                            <a href="#" class="page-link"><i class="fas fa-plus"></i>Celana Anak</a>
                                            <a href="#" class="page-link"><i class="fas fa-plus"></i>Acessories Anak</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- Kolom Utama -->
        <div class="col-md-9 d-flex flex-wrap gap-2 mb-4">
            <div class="card" style="width: 195px;">
                <div class="card-header m-auto" style="border-radius: 5px;">
                    <img src="{{ asset('assets/images/baju.png') }}" alt="baju 1" style="width: 100%;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Catton warna hitam US</p>
                    <p class="m-0">
                        <i class="fa-regular fa-star"></i> 5+
                    </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp. 200.000</p>
                    <button class="btn btn-outline-primary" style="font-size: 24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 195px;">
                <div class="card-header m-auto" style="border-radius: 5px;">
                    <img src="{{ asset('assets/images/baju.png') }}" alt="baju 1" style="width: 100%;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Catton warna hitam US</p>
                    <p class="m-0">
                        <i class="fa-regular fa-star"></i> 5+
                    </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp. 200.000</p>
                    <button class="btn btn-outline-primary" style="font-size: 24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 195px;">
                <div class="card-header m-auto" style="border-radius: 5px;">
                    <img src="{{ asset('assets/images/baju.png') }}" alt="baju 1" style="width: 100%;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Catton warna hitam US</p>
                    <p class="m-0">
                        <i class="fa-regular fa-star"></i> 5+
                    </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp. 200.000</p>
                    <button class="btn btn-outline-primary" style="font-size: 24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 195px;">
                <div class="card-header m-auto" style="border-radius: 5px;">
                    <img src="{{ asset('assets/images/baju.png') }}" alt="baju 1" style="width: 100%;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Catton warna hitam US</p>
                    <p class="m-0">
                        <i class="fa-regular fa-star"></i> 5+
                    </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp. 200.000</p>
                    <button class="btn btn-outline-primary" style="font-size: 24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 195px;">
                <div class="card-header m-auto" style="border-radius: 5px;">
                    <img src="{{ asset('assets/images/baju.png') }}" alt="baju 1" style="width: 100%;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Catton warna hitam US</p>
                    <p class="m-0">
                        <i class="fa-regular fa-star"></i> 5+
                    </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp. 200.000</p>
                    <button class="btn btn-outline-primary" style="font-size: 24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    @endsection
