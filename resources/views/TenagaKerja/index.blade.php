@extends('master2')

@section('content')
    <div class="content-wrapper">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Menu Tenaga Kerja</h4>
                    <p class="card-description">
                        <a href="{{ route('tenagakerja.create') }}">Tambah Tenaga Kerja</a>
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                <tr>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>No Telpon</td>
                                    <td>Keahlian</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td><a href="{{ Storage::url('public/blogs/') . $item->File }}"
                                                class="btn">File</a></td>
                                        <td>
                                            @if ($item->status == 0)
                                                <a href="/send-email/{{ $item->id }}" class="btn btn-danger">Pending</a>
                                            @else
                                                <button class="pd-setting">Active</button>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('pekerjaan.destroy', $item->id) }}" method="POST">
                                                <a href="{{ route('pekerjaan.edit', $item->id) }}"
                                                    class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="pd-setting-ed">HAPUS</button>
                                            </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
