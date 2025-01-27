@extends('master2')

@section('content')
<div class="content-wrapper">
    {{-- <div class="row">
        <div class="card">
            <div class="card-body"> --}}
                {{-- <h4 class="card-title">Menu Pekerjaan</h4>
                <p class="card-description">
                    <div class="col-12 grid-margin stretch-card">
                        <form action="{{route('pekerjaan.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="icon nalika-user"
                                                    aria-hidden="true"></i></span>
                                            <input name="judul" type="text" name="judulpekerjaan" class="form-control" placeholder="Judul Pekerjaan">
                                        </div>
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="icon nalika-edit"
                                                    aria-hidden="true"></i></span>
                                            <textarea name="detail"class="form-control" placeholder="Detail Pekerjaan"></textarea>
                                        </div>
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-usd"
                                                    aria-hidden="true"></i></span>
                                            <input name="file"type="file" name="inputfile" class="form-control" placeholder="Input File">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tambah Pekerjaan</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" action="{{ route('pekerjaan.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Judul Pekerjaan</label>
                                        <input name="judul" type="text" name="judulpekerjaan" class="form-control" placeholder="Judul Pekerjaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Detail Pekerjaan</label>
                                        <textarea name="detail"class="form-control" rows="4"placeholder="Detail Pekerjaan"></textarea>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="exampleInputPassword4">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                                    </div> --}}
                                    {{-- <div class="form-group">
                                        <label for="exampleSelectGender">Gender</label>
                                        <select class="form-control" id="exampleSelectGender">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div> --}}
                                    <div class="form-group">
                                        <label>File upload</label>
                                        {{-- <input type="file" name="img[]" class="file-upload-default"> --}}
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="img[]" class="file-upload-default">
                                            <input name="file"type="file" name="inputfile" class="form-control" placeholder="Input File">
                                            {{-- <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                            </span> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="exampleInputCity1">City</label>
                                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Textarea</label>
                                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                    </div> --}}
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


                    {{-- <div class="product-tab-list tab-pane fade active in" id="description">
                        <form action="{{ route('pekerjaan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                            <input name="judul" type="text" name="judulpekerjaan" class="form-control" placeholder="Judul Pekerjaan">
                                        </div>
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                            <textarea name="detail" class="form-control" placeholder="Detail Pekerjaan"></textarea>
                                        </div>
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                            <input name="file" type="file" name="inputfile" class="form-control" placeholder="Input File">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="text-center custom-pro-edt-ds">
                                        <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                                        </button>
                                        <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Discard
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> --}}
@endsection
