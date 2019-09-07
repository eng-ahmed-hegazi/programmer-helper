
@extends('layouts.application')
@section('content')

    <div class="tab" style="min-height:450px">
        <div class="row">
            <div class="card__header">
                <h3>CONTACT US</h3>
            </div>
        </div>
        <div class="row" id="">
            <div class="col-lg-6">
                <div class="card widget-contacts">
                    <div class="card__header card__header--highlight">
                        <h2>Contact Information <small>Fusce eget dolor id justo luctus commodo vel pharetra nisi</small></h2>
                    </div>
                    <div class="card__body">
                        <ul class="icon-list">
                            <li><i class="zmdi zmdi-phone"></i> 011 17835 451</li>
                            <li><i class="zmdi zmdi-email"></i> ahmedhegazy214@gmail.com</li>
                            <li><i class="zmdi zmdi-facebook-box"></i> ahmed.hegazy</li>
                            <li><i class="zmdi zmdi-twitter"></i> @heagzy (twitter.com/hegazy)</li>
                            <li><i class="zmdi zmdi-pin"></i>
                                <address>
                                    9 streat / Al Moqatm <br>
                                    Cairo <br>
                                    Egypt
                                </address>
                            </li>
                        </ul>
                    </div>
                    <p class="card__header card__header--highlight">FIND USON GOOGLE MAP</p>
                    <a class="widget-contacts__map" href="#">
                        <img src="demo/img/map.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="card">
                    <div class="card__header card__header--highlight">
                        <h2>Mailing Form<small>Pellentesque ac lectus sed elit dictum vehicula</small></h2>
                    </div>

                    <div class="card__body p-t-0">
                        <div class="form-group">
                            <input type="text" class="form-control input" placeholder="Enter Name">
                            <i class="form-group__bar"></i>
                        </div>

                        <div class="form-group ">
                            <input type="text" class="form-control input" placeholder="Enter Email Address">
                            <i class="form-group__bar"></i>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control input" placeholder="Enter Contact Number">
                            <i class="form-group__bar"></i>
                        </div>

                        <div class="form-group ">
                            <textarea class="form-control textarea-autosize input" style="overflow: hidden; word-wrap: break-word; height: 150px;" placeholder="Enter The Massage "></textarea>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="card__footer">
                        <button class="btn btn-default">Submit</button>
                        <button class="btn btn-link">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection