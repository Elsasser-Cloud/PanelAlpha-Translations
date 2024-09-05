<p>Liebe <strong>{{ $admin_name }}</strong>,</p>
<p>Die Erstellung des DNS-Eintrags A für <strong>{{ $domain }}</strong> gescheitert.</p>
<p>Mitteilung:{{ $exception_message }}</p>
<p>Details zur DNS-Zone:</p>
<table>
    <tbody>
    <tr>
        <th>Domäne</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>Dienstleistung</th>
        <td>#{{ $service_id }} {{ $service_main_domain }}</td>
    </tr>
    @if($dns_server_id)
        <tr>
            <th>DNS-Server</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>
        </tr>
    @endif
    </tbody>
</table>