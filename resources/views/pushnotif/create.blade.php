@extends('master')

@section('content')
<div class="all-content-wrapper">
        @include('tools.header')
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit"
                                                aria-hidden="true"></i> Product Edit</a></li>
                                    <!-- <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i>
                                            Picture</a></li>
                                    <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i>
                                            Review</a></li> -->
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">

                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                       <form action="{{route('notif.store')}}" method="POST" enctype="multipart/form-data">
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
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit"
                                                        class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-ctl-bt waves-effect waves-light">Discard
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="pro-edt-img">
                                                                <img src="img/new-product/5-small.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="product-edt-pix-wrap">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">TT</span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Label Name">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-radio">
                                                                                    <form>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="radio"><i
                                                                                                    class="helper"></i>Largest
                                                                                                Image
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="radio"><i
                                                                                                    class="helper"></i>Medium
                                                                                                Image
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="radio"><i
                                                                                                    class="helper"></i>Small
                                                                                                Image
                                                                                            </label>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="product-edt-remove">
                                                                                    <button type="button"
                                                                                        class="btn btn-ctl-bt waves-effect waves-light">Remove
                                                                                        <i class="fa fa-times"
                                                                                            aria-hidden="true"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="pro-edt-img">
                                                                <img src="img/new-product/6-small.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="product-edt-pix-wrap">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">TT</span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Label Name">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-radio">
                                                                                    <form>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="radio"><i
                                                                                                    class="helper"></i>Largest
                                                                                                Image
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="radio"><i
                                                                                                    class="helper"></i>Medium
                                                                                                Image
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="radio"><i
                                                                                                    class="helper"></i>Small
                                                                                                Image
                                                                                            </label>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="product-edt-remove">
                                                                                    <button type="button"
                                                                                        class="btn btn-ctl-bt waves-effect waves-light">Remove
                                                                                        <i class="fa fa-times"
                                                                                            aria-hidden="true"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="pro-edt-img mg-b-0">
                                                                <img src="img/new-product/7-small.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="product-edt-pix-wrap">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">TT</span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Label Name">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-radio">
                                                                                    <form>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="radio"><i
                                                                                                    class="helper"></i>Largest
                                                                                                Image
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="radio"><i
                                                                                                    class="helper"></i>Medium
                                                                                                Image
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="radio"><i
                                                                                                    class="helper"></i>Small
                                                                                                Image
                                                                                            </label>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="product-edt-remove">
                                                                                    <button type="button"
                                                                                        class="btn btn-ctl-bt waves-effect waves-light">Remove
                                                                                        <i class="fa fa-times"
                                                                                            aria-hidden="true"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="card-block">
                                                        <div class="text-muted f-w-400">
                                                            <p>No reviews yet.</p>
                                                        </div>
                                                        <div class="m-t-10">
                                                            <div class="txt-primary f-18 f-w-600">
                                                                <p>Your Rating</p>
                                                            </div>
                                                            <div class="stars stars-example-css detail-stars">
                                                                <div class="review-rating">
                                                                    <fieldset class="rating">
                                                                        <input type="radio" id="star5" name="rating"
                                                                            value="5">
                                                                        <label class="full" for="star5"></label>
                                                                        <input type="radio" id="star4half" name="rating"
                                                                            value="4 and a half">
                                                                        <label class="half" for="star4half"></label>
                                                                        <input type="radio" id="star4" name="rating"
                                                                            value="4">
                                                                        <label class="full" for="star4"></label>
                                                                        <input type="radio" id="star3half" name="rating"
                                                                            value="3 and a half">
                                                                        <label class="half" for="star3half"></label>
                                                                        <input type="radio" id="star3" name="rating"
                                                                            value="3">
                                                                        <label class="full" for="star3"></label>
                                                                        <input type="radio" id="star2half" name="rating"
                                                                            value="2 and a half">
                                                                        <label class="half" for="star2half"></label>
                                                                        <input type="radio" id="star2" name="rating"
                                                                            value="2">
                                                                        <label class="full" for="star2"></label>
                                                                        <input type="radio" id="star1half" name="rating"
                                                                            value="1 and a half">
                                                                        <label class="half" for="star1half"></label>
                                                                        <input type="radio" id="star1" name="rating"
                                                                            value="1">
                                                                        <label class="full" for="star1"></label>
                                                                        <input type="radio" id="starhalf" name="rating"
                                                                            value="half">
                                                                        <label class="half" for="starhalf"></label>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('tools.footer')
    </div>
@endsection