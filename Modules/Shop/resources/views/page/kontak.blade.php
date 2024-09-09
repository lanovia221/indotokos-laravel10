@extends('shop::index')

@section('content')
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="context-text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, voluptate sint ipsum doloribus commodi
                esse officia repellendus excepturi enim qui minima, soluta vel tempore necessitatibus sapiente aperiam cum
                adipisci maxime? Est, rerum cupiditate. Dicta tenetur beatae dolore numquam nisi. Laborum expedita sit quam
                nesciunt, eius provident alias! Fuga corrupti ipsum porro nam, cupiditate doloribus molestiae labore,
                quibusdam quae libero tenetur numquam, provident amet tempore eum voluptatem dignissimos qui! Nobis
                molestias temporibus voluptatibus. Quis aperiam ex laudantium sapiente veniam nulla mollitia, possimus
                veritatis ad dolor exercitationem consequuntur eveniet qui harum eligendi quasi odit sint tempore iste
                commodi eum. Ea, ex! Aliquid quis quo vel ratione, cum officiis magni explicabo quae, corporis inventore
                voluptatem laudantium quas. Dolorem sapiente voluptatibus ad saepe dolorum.
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/baju.png') }}" style="100%" alt="">
        </div>
    </div>

    <div class="d-flex justify-content-lg-between mt-5">
        <div class="d-flex align-items-center gap 4">
            <i class="fa fa-users fa-2x"></i>
            <p class="m-0 fs-5">+ 300 Seller</p>
        </div>
        <div class="d-flex align-items-center gap 4">
            <i class="fa fa-shirt fa-2x"></i>
            <p class="m-0 fs-5"> +500 Pelanggan</p>
        </div>
        <div class="d-flex align-items-center gap 4">
            <i class="fa fa-home fa-2x"></i>
            <p class="m-0 fs-5">+ 300 Product</p>
        </div>
    </div>

    <h4 class="text-center mt-md-5 mb-md-2"></h4>
    <hr>
    <div class="row mb-md-5">
        <div class="col-md-5">
            <div class="bg-secondary" style="width: 100%; height:50vh; border-radius:10px"></div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h4>Kritik dan Saran</h4>
                </div>
                <div class="card-body">
                    <p class="text-lg-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet inventore quas quos odit id eaque
                        iusto suscipit maiores voluptatem nisi.</p>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="email"
                                value="email@example.com">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pesan" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Masukan Pesan Anda">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
