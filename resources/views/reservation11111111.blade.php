@extends('master')
@section('meta')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('title','Reservation')
@section('externtCSS')
<link rel="stylesheet" href="../assets3/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=News+Cycle:400,700">
<link rel="stylesheet" href="../assets3/fonts/font-awesome.min.css">
<link rel="stylesheet" href="../assets3/fonts/ionicons.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
<link rel="stylesheet" href="../assets3/css/KD_Header.css">
<link rel="stylesheet" href="../assets3/css/user.css">
<link rel="stylesheet" href="../assets3/css/Pretty-Product-List.css">
<link rel="stylesheet" href="../assets3/css/Pretty-Footer.css">
<link rel="stylesheet" href="../assets3/css/KD_Header.css">
<link rel="stylesheet" href="../assets3/css/Article-List.css">
<link rel="stylesheet" href="../assets3/css/Contact-FormModal-Contact-Form-with-Google-Map.css">
<link rel="stylesheet" href="../assets3/css/Footer-Basic.css">
<link rel="stylesheet" href="../assets3/css/Footer-Dark.css">
<link rel="stylesheet" href="../assets3/css/FPE-Gentella-form-elements.css">
<link rel="stylesheet" href="../assets3/css/FPE-Gentella-form-elements.css">
<link rel="stylesheet" href="../assets3/css/Header--Menu--Sections.css">
<link rel="stylesheet" href="../assets3/css/Header-Dark.css">
<link rel="stylesheet" href="../assets3/css/header.css">
<link rel="stylesheet" href="../assets3/css/header.css">
<link rel="stylesheet" href="../assets3/css/header.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
<link rel="stylesheet" href="../assets3/css/KD_Header.css">
<link rel="stylesheet" href="../assets3/css/Login-Form-Dark.css">
<link rel="stylesheet" href="../assets3/css/PHP-Contact-Form-dark.css">
<link rel="stylesheet" href="../assets3/css/PHP-Contact-Form-dark.css">
<link rel="stylesheet" href="../assets3/css/Projects-Horizontal.css">
<link rel="stylesheet" href="../assets3/css/Registration-Form-with-Photo.css">
<link rel="stylesheet" href="../assets3/css/Simple-Slider.css">
<link rel="stylesheet" href="../assets3/css/sticky-dark-top-nav-with-dropdown.css">

<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../assets/css/product.css" rel="stylesheet">
<link href="../assets/css/album.css" rel="stylesheet">
@endsection
@section('interntscript')
@endsection
@section('navgation')
@parent
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div>
                <div class="col-md-3 col-sm-3 col-xs-12"></div>
                <h3>Reservation：</h3>
                <div class="clearfix"></div>
            </div>
            <div class="x_content" >
                <br>
                <form action="/reservation/submit" method="post" class="form-horizontal form-label-left input_mask">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input required="required" type="text" class="form-control has-feedback-left" id="firstname" name="firstname" placeholder="First Name">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input required="required" type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input required="required" type="text" class="form-control has-feedback-left" id="email" name="email" placeholder="Email">
                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input required="required" type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="color:black" class="control-label col-md-3 col-sm-3 col-xs-12">Restaurant Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input readonly="readonly" type="text" class="form-control" placeholder="Restaurant Name" id="restaurantName" name="restaurantName" value="<?php echo $restaurant->name; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="color:black" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input readonly="readonly" type="text" class="form-control" disabled="disabled" placeholder="Description" id="description" name="description" value="<?php echo $restaurant->description; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="color:black" class="control-label col-md-3 col-sm-3 col-xs-12">
                            Date<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="date-picker form-control col-md-6 col-xs-12" min="2018-04-25" type="date" id="resdate" name="resdate" required="required" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="color:black" class="control-label col-md-3 col-sm-3 col-xs-12">Time <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" required="required" id="restime" name="restime">
                                <option value="11:00AM - 03:00PM">11:00AM - 03:00PM</option>
                                <option value="05:00PM - 10:00PM">05:00PM - 10:00PM</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="color:black" class="control-label col-md-3 col-sm-3 col-xs-12">Guests number <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" required="required" id="numbers" name="numbers">
                                <option>1</option>
                                <option>2</option>
                                <option>4</option>
                                <option>6</option>
                                <option>8</option>
                                <option>10</option>
                                <option>12</option>
                                <option>14</option>
                                <option>16</option>
                                <option>18</option>
                                <option>20</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="color:black" class="control-label col-md-3 col-sm-3 col-xs-12">
                            Special requirement
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea class="form-control" rows="3" placeholder="Special requirement" id="requirement" name="requirement"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="col-md-3 col-sm-3 col-xs-12"></div>
                            <div class="checkbox col-md-6 col-sm-6 col-xs-12">
                                <label>
                                    <input type="checkbox" id="accept" name="accept" value="yes">Yes, I want to get email updates and reminders about my reservations
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="button" class="btn btn-primary" onclick="window.history.back();">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
@parent
@endsection
@section('externJS')
<script src="../assets3/js/jquery.min.js"></script>
<script src="../assets3/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets3/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="../assets3/js/PHP-Contact-Form-dark.js"></script>
<script src="../assets3/js/PHP-Contact-Form-dark.js"></script>
<script src="../assets3/js/Simple-Slider.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../assets/bootstrap/js/popper.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/holder.min.js"></script>
<script>
                                Holder.addTheme('thumb', {
                                    bg: '#55595c',
                                    fg: '#eceeef',
                                    text: 'Thumbnail'
                                });
</script>
@endsection