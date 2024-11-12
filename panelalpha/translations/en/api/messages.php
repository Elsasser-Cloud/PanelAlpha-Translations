<?php

return [
    'error_404' => '404 Not Found',
    'error_405' => '405 Method Not Allowed',
    'error_uapi' => 'UAPI Errors: :error',
    'error_wpcli' => 'WP-CLI Error: :error',
    'error_unknown' => 'Unknown Error',
    'error_server' => 'Server responded with error:',
    'errors' => 'Error: :error',
    'http_error' => 'HTTP Error: :code',
    'cannot_parse_server_response' => 'Cannot parse server response',
    'cannot_parse_wpcli_response' => 'Cannot parse WPCLI response',
    'connect_lets_encrypt' => 'Error connecting to Let\'s Encrypt API',
    'connection_error' => "Connection Error: :error",
    'connection_failed' => 'Connection Failed',
    'connector_outdated' => 'Connector on the server is outdated, update is required',
    'connector_not_available' => 'WordPress connector plugin is not available',
    'invalid_application' => 'Invalid application',
    'invalid_invitation' => 'Invalid invitation',
    'invalid_user' => 'Invalid user',
    'invalid_value' => 'Invalid value',
    'not_supported' => 'Not Supported',
    'not_supported_dns_record_type' => 'Unsupported Update DNS Record Type',
    'not_supported_change_disk_quota' => 'Changing disk quota is not supported.',
    'cannot_find_server_matching_plan' => 'Cannot find server matching plan\'s criteria',
    'cannot_retry_installation_instance' => 'Cannot retry installation on this instance.',
    'cannot_generate_valid_username' => 'Cannot generate valid username',
    'cannot_generate_valid_database_name' => 'Cannot generate valid mysql database name',
    'cannot_generate_valid_database_username' => 'Cannot generate valid mysql database username',
    'cannot_rename_database' => 'Cannot rename mysql database name',
    'cannot_delete_domain_with_existing_email_addresses' => 'Cannot delete domain with existing email addresses',
    'cannot_chang_quota_for_email_account' => 'Cannot change quota for default email account',
    'cannot_get_available_updates' => 'Cannot get available updates',
    'cannot_get_admin_domain' => 'Cannot get admin domain',
    'cannot_create_staging_from_staging' => 'Cannot create staging instance from staging instance.',
    'sso_login_php_my_admin_error' => 'SSO Login to phpMyAdmin is disabled. Please contact with server administrator.',
    'operation_not_implemented' => 'Operation not implemented',
    'operation_not_implemented_for' => 'Operation not implemented for :name integration',
    'backup_directory_or_database_required' => 'Directory and/or database are required',
    'backup_directory_not_included_to_restore' => 'Backup does not include directory to restore',
    'backup_database_not_included_to_restore' => 'Backup does not include database to restore',
    'wordpress_already_exists' => 'Wordpress installation already exists in specified domain/dir.',
    'cannot_delete_main_domain' => 'Cannot delete main domain',
    'domain_not_found' => 'Domain not found',
    'domain_not_available' => 'The domain name is not available',
    'cannot_change_document_root_of_main_domain' => 'Cannot change document root of main domain',
    'cannot_change_document_root_of_addon_domain' => 'Cannot change document root of addon domain',
    'cannot_change_document_root_of_subdomain' => 'Cannot change document root of subdomain',
    'cannot_change_document_root_of_alias_domain' => 'Cannot change document root of domain alias',
    'cannot_add_redirect_to_subdomain' => 'Cannot add redirect do subdomain.',
    'cannot_add_redirect_to_alias' => 'Cannot add redirect do alias.',
    'dns_record_not_found' => 'Record not found',
    'sso_login_webmail_disabled' => 'SSO Login to Webmail is disabled. Please contact with server administrator.',
    'engine_or_user_template_outdated' => 'PanelAlpha Engine or user template is outdated, update is required',
    'parent_domain_required' => 'Parent domain is required',
    'not_matched_php_version' => 'Not matched php version',
    'invalid_plesk_edition' => 'Plesk Edition is invalid. Please read more in documentation',
    'ssl_no_order_model' => 'SSL order model not set',
    'ssl_certificate_not_ready' => 'Certificate is not ready',
    'ssl_cannot_fetch_certificate' => 'Cannot fetch certificate',
    'required_accept_licensing_terms' => 'Accepting licensing terms required.',
    'invalid_url' => 'The URL is invalid.',
    'cannot_connect_to_url' => 'Could not connect to the URL.',
    'invalid_response' => 'Something goes wrong. Please try again later.',
    'suspended_service' => 'Service is suspended',
    'invalid_account' => 'Invalid account',
    'cloudflare_cannot_purge_cache' => 'You cannot purge cache now. Check that nameservers are set up.',
    'cannot_connect_to_api' => 'Cannot connect to API. Server is not configured properly.',
    'error_137' => 'Error 137 (Out Of Memory)',
    'instance_has_already_has_staging' => 'This instance already has staging environment.',
    'cannot_remove_with_existing_staging' => 'Cannot remove instance with existing staging instance.',
    'user_job_failed' => 'An unexpected problem has occurred, please contact support.',
    'undefined' => 'Undefined',
    'cannot_validate_dns_propagation_after_maximum_time' => "Couldn't validate DNS propagation after maximum configured time",
    'error_connect_lets_encrypt' => "Error connecting to Let's Encrypt API",
    'invalid_ssl_order' => "SSL order model not set",
    'parent_zone_not_found' => 'Parent zone is not found',
    'new_site' => 'New Site',
    'report_provider' => [
        'unknown_after_created' => 'Monitoring is likely working, but the status will be confirmed within the next 24 hours.',
        'unknown' => 'Monitoring status unknown, as it has not been confirmed within the last 24 hours.',
        'error' => 'JavaScript tracking code not found. Click here and copy code to your WordPress.',
        'other_unknown' => 'There have been some unknown problems. Please contact support'
    ],
    'unauthorized' => 'Unauthorized',
    'license_overused' => 'License is overused',
    'access_denied' => 'Access denied',
    'unabled_to_get_zones' => 'Unable to get zones',
    'default_instance_name' => 'First Instance',
    'sso_php_my_admin_disabled' => 'SSO Login to phpMyAdmin is disabled. Please contact with admin.',
    'related_instance_not_found' => 'Related Instance #:id :name not found.',
    'related_plugin_not_found' => 'Related Plugin #:id :name not found.',
    'related_theme_not_found' => 'Related Theme #:id :name not found.',
    'related_package_not_found' => 'Related Package #:id :name not found.',
    'related_ssl_order_not_found' => 'Related SSL Order #:id :domain not found.',
    'related_backup_not_found' => 'Related Backup not found.',
    'related_plan_not_found' => 'Related Plan #:id :name not found.',
    'related_auto_backup_not_found' => 'Related Automatic Backup not found.',
    'related_user_not_found' => 'Related User #:id :first_name :last_name not found.',
    'related_template_not_found' => 'Related Instance Template #:id :name not found.',
    'retry_task_failed' => 'It is not possible to attempt the task again. Required data is missing.',
    'no_ipv4_assigned_to_server_account' => 'No IPv4 assigned to server account.',
    'no_ipv6_assigned_to_server_account' => 'No IPv6 assigned to server account.',
    'dns_records_already_exists' => 'Such a DNS record already exists on zone.',
    'hosting_account_not_found' => 'Hosting Account not found on the server',
    'main_domain_not_found' => 'Main Domain not found on the hosting account',
    'domain_not_found_on_hosting_account' => 'Domain :domain, not found on the hosting account.',
    'invalid_domain_document_root' => 'Invalid document root directory.',
    'invalid_domain_type' => 'Invalid domain type.',
    'invalid_local_data' => 'Invalid local data: :data.',
    'no_ips_assigned_to_server_account' => 'No IP addresses assigned to server account.',
    'domain_not_resolved' => 'Domain Not Resolved.',
    'no_access_to_dns_zone' => 'Not access to DNS Zone.',
    'wordpress_not_found' => 'WordPress instance not found.',
    'dns_zone_not_found' => 'DNS Zone not found.',
    'mx_record_not_found' => 'No MX DNS record has been assigned for this domain.',
    'could_not_check_mx_record' => 'Could not verify MX DNS Records',
    "invalid_dns_record" => 'MX DNS record is incorrectly configured.',
    "not_applicable" => "Not Applicable",
    "unable_delete_instance_on_hosting_server" => "Unable to delete the instance on the hosting server.",
    "removed_by_admin" => "Removed by admin.",
    "stopped_by_admin" => "Stopped by admin.",
    "invalid_import_step" => "Invalid import step :step.",
    "import_marked_as_successful" => "Import has been marked as successful.",
    "application_limit_exceeded" => "Application limit exceeded.",
    "cannot_create_ftp_account" => "Cannot create FTP account for copied instance.",
    "cancel_task_not_possible" => "Task cancellation is not possible.",
    "cannot_cancel_running_task" => "Cannot cancel running task.",
    "no_backup_container" => "No Assigned Backup Container",
    "data_unavailable" => "Data is not available.",
    "wp_cloud_domain_already_hosted" => "Domain is already hosted on WordPress.com or WP Cloud infrastructure.",
    "wordpress_version_not_available" => "WordPress version is not available.",
    "ssh_connect_failed" => "SSH connect failed.",
    "host_is_not_available" => "Host is not available.",
    "private_key_is_not_set" => "Private key is not set.",
    "no_backup_container" => "No Assigned Backup Container",
    "cannot_get_disk_usage" => "Cannot get disk usage with message: ",
    "email_domain_not_found" => "Email Domain Not Found",
    "server_account_exception_message" => "Something goes wrong. The error has been reported. Please contact the server administrator.",
];
