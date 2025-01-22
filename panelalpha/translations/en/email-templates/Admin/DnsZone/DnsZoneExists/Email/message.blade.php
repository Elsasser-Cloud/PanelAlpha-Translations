<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>DNS Zone for <strong>{{ $zone_name }}</strong> domain already exists in the DNS Server.</p>
<p>DNS Zone details:</p>
<table>
    <tbody>
    <tr>
        <th>DNS Zone</th>
        <td>{{ $zone_name }}</td>
    </tr>
    <tr>
        <th>Service</th>
        <td># {{ $service_id }}{{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>DNS Server</th>
        <td># {{ $dns_server_id }}{{ $dns_server_name }}</td>
    </tr>
    </tbody>
</table>
