@extends("_layouts.app")

@section('content')
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <a href="" class="btn btn-outline-warning mb-4">Kembali ke halaman sebelumnya</a>
                    
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-4">Daftar Member</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Jenis Uers</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ ($data->type ==0)? "Member" : "Admin" }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
