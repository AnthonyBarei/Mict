<h1>Edition :</h1>

{{ form_start(edit_form) }}


<ul>
    <li href="{{ path('livreor_index') }}">
        {{ form_widget(edit_form) }}
        <input type="submit" value="Enregister l'édition" />
        {{ form_end(edit_form) }}S
    </li>
    <li>
        {{ form_start(delete_form) }}
            <input type="submit" value="Supprimer mon commentaire">
        {{ form_end(delete_form) }}
    </li>
</ul>
