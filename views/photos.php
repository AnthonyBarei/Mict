<?php require_once('base.php'); ?>

<div class="panel-group" id="accordion">
<span class="text-center" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1" style="font-size:18px">
  <span class="btn btn-info col-md-offset-3 col-md-2">
    Les créations des membres
  </span>
</span>

<span class="text-center" data-toggle="collapse" data-parent="#accordion" data-target="#collapse2" style="font-size:18px">
  <span class="btn btn-info col-md-2">
    Ambiances
  </span>

</span>

<span class="text-center" data-toggle="collapse" data-parent="#accordion" data-target="#collapse3" style="font-size:18px">
  <span class="btn btn-info col-md-2">
    Partenaires
  </span>
</span>


<div class="container">
    <div class="panel-group" id="accordion">
    <div class="panel panel-default">

<div class="panel-body"><div class="tz-gallery">
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="row">
          <h3>Les créations des membres :</h3>
            <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/1.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/1.jpg') }}">
                </a>
            </div>
            <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/2.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/2.jpg') }}">
                </a>
            </div>
        </div>
        </div>



      <div id="collapse2" class="panel-collapse collapse">

        <div class="row">
          <h3>Ambiances :</h3>
            <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/1.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/1.jpg') }}">
                </a>
            </div>
            <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/2.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/2.jpg') }}">
                </a>
            </div>
                     <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/1.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/1.jpg') }}">
                </a>
            </div>
            <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/2.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/2.jpg') }}">
                </a>
            </div>
                     <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/1.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/1.jpg') }}">
                </a>
            </div>
            <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/2.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/2.jpg') }}">
                </a>
            </div>
                     <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/1.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/1.jpg') }}">
                </a>
            </div>
            <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/2.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/2.jpg') }}">
                </a>
            </div>
        </div>
      </div>


      <div id="collapse3" class="panel-collapse collapse">

        <div class="row">
          <h3>Partenaires :</h3>
            <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/1.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/1.jpg') }}">
                </a>
            </div>
            <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/2.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/2.jpg') }}">
                </a>
            </div>
                       <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/1.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/1.jpg') }}">
                </a>
            </div>
            <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/2.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/2.jpg') }}">
                </a>
            </div>
                       <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/1.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/1.jpg') }}">
                </a>
            </div>
            <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/2.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/2.jpg') }}">
                </a>
            </div>
                       <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/1.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/1.jpg') }}">
                </a>
            </div>
            <div class="col-sm-3 col-md-2">
                <a class="lightbox" href="{{ asset('images/MICT/photos/2.jpg') }}">
                    <img src="{{ asset('images/MICT/photos/thumbs/2.jpg') }}">
                </a>
            </div>
        </div>
      </div>

  </div>

  </div></div></div>



<script>
    baguetteBox.run('.tz-gallery');
</script>
