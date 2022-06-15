@extends('master')
@section('content')
    <div class="all-content-wrapper">
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcomb-wp">
                                        <div class="breadcomb-icon">
                                            <i class="icon nalika-home"></i>
                                        </div>
                                        <div class="breadcomb-ctn">
                                            <h2>Product List</h2>
                                            <p>Welcome to Nalika <span class="bread-ntd">Admin Template</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcomb-report">
                                        <button data-toggle="tooltip" data-placement="left" title="Download Report"
                                            class="btn"><i class="icon nalika-download"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product">
                                <a href="{{ route('pekerjaan.create') }}">Tambah Pekerjaan</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Judul Pekerjaan</th>
                                    <th>Detail Pekerjaan</th>
                                    <th>Files</th>
                                    <th>Status</th>
                                    <th>Setting</th>
                                    <!-- <th>Product sales</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Setting</th> -->
                                </tr>
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
                                            <form id="frm{{$item->id}}"
                                                action="{{ route('pekerjaan.destroy', $item->id) }}" method="Delete">
                                                <a href="{{ route('pekerjaan.edit', $item->id) }}"
                                                    class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <a href="javascript:$('frm{{$item->id}}').submit();" >Hapus</a>
                                                {{-- <button type="submit">HAPUS</button> --}}
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
                            {{-- <div class="custom-pagination">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
