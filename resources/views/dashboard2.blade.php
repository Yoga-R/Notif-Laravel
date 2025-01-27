@extends('master2')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="add-product">
        <a href="{{ route('pekerjaan.create') }}">Tambah Pekerjaan</a>
    <div class="col-lg-12 grid-margin stretch-card">
        @foreach ($pekerjaan as $item)
        <tr>
            {{-- <td><img src="img/new-product/5-small.jpg" alt="" /></td> --}}
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
                {{-- <form onsubmit="return confirm('apakah anda yakin?????????');" action="{{route('pekerjaan.destroy',$item->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" data-toggle="tooltip" title="Delete" class="pd-setting-ed"><i class="fa fa-erase-square-o" aria-hidden="true"></i></button>
    </form> --}}
            </td>
        </tr>
    @endforeach
</table>
        <div class="card">
        <div class="card-body">
          <h4 class="card-title">Bordered table</h4>
          <p class="card-description">
            Add class <code>.table-bordered</code>
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
                  <td>
                    1
                  </td>
                  <td>
                    Herman Beck
                  </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                  <td>
                    $ 77.99
                  </td>
                  <td>
                    May 15, 2015
                  </td>
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
