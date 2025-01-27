@extends('master2')

@section('content')
<div class="content-wrapper">
  <div class="row">

        <div class="card">
        <div class="card-body">
          <h4 class="card-title">Bordered table</h4>
          <p class="card-description">
            <a href="{{ route('pekerjaan.create') }}">Tambah Pekerjaan</a>
          </p>
          <div class="table-responsive pt-3">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>
                    No
                  </th>
                  <th>
                    Judul Pekerjaan
                  </th>
                  <th>
                    Detail Pekerjaan
                  </th>
                  <th>
                    Dibutuhkan
                  </th>
                  <th>
                    File
                  </th>
                  <th>
                    Status
                  </th>
                  <th>
                    Form
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pekerjaan as $item)
                <tr>
                    <td>{{ $item->Judul_Pekerjaan }}</td>
                    <td>{{ $item->Detail_Pekerjaan }}</td>
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
                        {{-- <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> --}}
                        {{-- <form action="{{ route('pekerjaan.destroy', $item->id) }}" method="POST"> --}}
                            <form action="{{ route('pekerjaan.destroy',$item->id) }}" method="POST">
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
