<div class="container">
 <div class="row">
   <h1>Mon commentaire :</h1>

   {{ form_start(form) }}


   <ul>
       <li>
           {{ form_widget(form) }}
           <input type="submit" value="Valider" />
           {{ form_end(form) }}
       </li>
       <li>
           <button><a href="{{ path('livreor_index') }}">Retour</a></button>
       </li>
   </ul>
</div>
</div>
