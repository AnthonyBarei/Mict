<div class="page-header text-center">
 <div class="container">
  <div class="row">
    <h1>Verification :</h1>

    <table>
        <tbody>

            <tr>
                <th>Pseudo :</th>
                <td>{{ livreOr.pseudo }}</td>
            </tr>
            <tr>
                <th>Mail :</th>
                <td>{{ livreOr.mail }}</td>
            </tr>
            <tr>
                <th>Message :</th>
                <td>{{ livreOr.message }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <button><a href="{{ path('livreor_index') }}">Je confirme mon commentaire</a></button>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type="submit" value="Supprimer">
            {{ form_end(delete_form) }}
        </li>
    </ul>
    </div>
  </div>
</div>
