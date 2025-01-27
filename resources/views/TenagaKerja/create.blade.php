@extends('master2')

@section('content')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Tenaga Kerja</h4>
                <p class="card-description">

                </p>
                <form class="forms-sample" action="{{ route('tenagakerja.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword4">Nama</label>
                        <input name="nama" type="text" name="nama" class="form-control" placeholder="Nama Pekerja">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Email</label>
                        <input name="email"class="form-control" rows="4"placeholder="Email"></input>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">No Telepon</label>
                        <input name="no_telepon"class="form-control" rows="4"placeholder="No Telepon"></textare>
                    </div>
                    <label for="exampleInputPassword4">Keahlian</label>
                    <select name="keahlian" class="form-control pro-edt-select form-control-primary">
                        <option value="opt1">Pilih Keahlian</option>
                        @foreach ($keahlian as $item)
                            <option value="{{ $item->id }}">{{ $item->keahlian }}</option>
                        @endforeach
                    </select>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
    </div>
    </p>
    </div>
    </div>
    </div>
    </div>
@endsection
