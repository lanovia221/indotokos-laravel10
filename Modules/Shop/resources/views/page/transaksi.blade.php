@extends('shop::index')

@section('content')
    <h3 class="mt-5">Keranjang Belanja</h3>
    <div class="card">
        <div class="card-body d-flex">
            <img src="{{ asset('assets/images/baju.png') }}" alt="baju 1">
            <div class="desc">
                <p style="font-size: 24px; font-weight:700">Baju Cotton warna hitam US</p>
                <h3>Rp.200.000</h3>
                <p>Quantity :
                <div class="d-flex border border-1">
                    <button class="rounded-start bg-secondary p-2" id="plus">+</button>
                    <input type="number" name="qty" class="form-control w-25 text-center border border-0" id="qty" min="0"
                        max="9999" value=1>
                    <button class="rounded-end bg-secondary p-2" id="minus">-</button>
                </div>
                </p>
            </div>
        </div>
    </div>
@endsection
