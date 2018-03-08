<?php require('base.php'); ?>

<link rel="stylesheet" href="{{ asset('css/agency.css') }}"/>
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 ><a href="{{ path('livreor_new') }}">C'est toi qui en parles le mieux !</a></h2>
          </div>
        </div>
        <!-- About -->
    <section id="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
                <li class="timeline-inverted">
                <div class="timeline-image">
                  <a href="{{ path('livreor_new') }}"><h4>Laissez
                    <br>Votre Avis
                    <br>ICI !</a></h4>
                </div>
              </li>

                {% for livreOr in livreOrs %}
              <li>
                <div class="timeline-image">
                 <!--  <img src="{{ asset('images/MICT/1.jpg') }}" class="rounded-circle img-fluid" alt=""> -->
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>{{ livreOr.pseudo }}</</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">{{ livreOr.message }}</p>
                  </div>
                </div>
              </li>
              {% endfor %}


              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Une Part
                    <br>De Votre
                    <br>Histoire !</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
