@extends ('_layouts.app')

@section('content')

    <section class="py-5">
        <div class="container" style="border-radius: 20px;">
            <div class="row my-5">
                <div class="col-md-6 mt-md-0 mt-4">
                    <p>Selamat! kamu telah menjadi member Perpustakaan Nasional<br>Berikut kartu member anda :</p><hr><br><br>
                    <center>
                    <div class="card">
                        <div class="card-header d-flex justify-content-start">
                            <img src="{{ asset('assets/images/perpus.png') }}" class="img-fluid" width="40">
                            <p class="mb-0 ms-3 d-flex align-items-center" style="letter-spacing: 1px">KARTU MEMBER IPUSNAS RI</p>
                        </div>
                        <div class="card-body">
                                <h2><b>{{ Auth::user()->name }}</b></h2>
                                <p class="text-secondary mb-0">{{ Auth::user()->email }}</p>
                                <hr class="text-secondary">
                                <small class="text-secondary mb-0">Bergabung sejak <b>{{ Auth::user()->created_at }}</b></small>
                        </div>
                    </div>
                </center>
                </div>
            </div>
        </div>
    </section>

    @endsection
