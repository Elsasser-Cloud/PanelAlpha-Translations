</p> <p>Cher <strong>Chez nous</strong>{{ $client_first_name }}</strong>,</p> <p>
{{ $theme_title }}</strong> theme failed.</p>
<p>Message :{{ $exception_message }}</p>
</p> <p>Détails de l'instance:</p> <p>Les détails de l'instance
<b>Tableau>
    <tbody>
    <tr>
        <th>Nom du site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domaine</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</tableau>