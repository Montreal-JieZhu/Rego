@extends('master')
@section('meta')
@parent
@endsection
@if($_SESSION['language']=='En')
@section('title','Welcome to Rego')
@elseif($_SESSION['language']=='Fr')
@section('title','Bienvenue à Rego')
@endif
@section('externtCSS')
@parent
@endsection
@section('interntscript')
@parent
@endsection
@section('navgation')
@parent
@endsection
@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php
            $counter = 0;
            foreach ($restaurants as $r):
                ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <!--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">-->
                        <img class="card-img-top" width="225px" height="200px" src="public\images\restaurant-img\{{$r->logo}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 style="font-weight: bolder"><?php echo $r->name ?></h5>
                            <p class="card-text"><?php echo $r->description ?> </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button onclick="if (this.value == 0) {
                                                this.style.backgroundColor = 'blue';
                                                this.style.color = 'red';
                                                this.value = 1;
                                            } else {
                                                this.style.backgroundColor = '';
                                                this.style.color = '';
                                                this.value = 0;
                                            }" type="button" class="btn btn-sm btn-outline-secondary" value="0">Mark</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href = '/reservation/<?php echo $r->id ?>'">Reserve</button>
                                </div>
                                <small class="text-muted"><?php echo $r->city ?></small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $counter++; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
@endsection
@section('footer')
@parent
@endsection
@section('externJS')
@parent
@endsection