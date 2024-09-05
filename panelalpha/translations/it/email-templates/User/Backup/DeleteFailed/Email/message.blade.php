<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>L'eliminato del <strong>capitolo <strong>sono i nostri amici e amici.{{ $backup_name }}</strong> backup fallito.</p>
<p>Messaggio:{{ $exception_message }}</p>
<p>Dettagli del backup:</p>
<tabella>
    <tbody>
    <tr>
        <th>Nome</th>
        <td>{{ $backup_name  }}</td>.
    </tr>.
    <tr>
        <th>Tipo</th>
        <td>{{ $backup_type }}</td>.
    </tr>.
    <tr>
        <th>Dimensione</th>
        <td>{{ $backup_size  }} MB</td>
    </tr>.
    <tr>
        <th>Versione</th>
        <td>{{ $backup_version  }}</td>.
    </tr>.
    <tr>
        <th>Data</th>
        <td>{{ $backup_date  }}</td>.
    </tr>.
    </tbody>
</tab>.
<p>Dettagli dell'istanza:</p>
<tabella>
    <tbody>
    <tr>
        <th>Nome del sito</th>
        <td>{{ $instance_name }}</td>.
    </tr>.
    <tr>
        <th>Dominio</th>
        <td>{{ $instance_domain }}</td>.
    </tr>.
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>.
    </tbody>
</tab>.