<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['account_suffix'] = "@mydomain.local";
$config['base_dn'] = "DC=mydomain,DC=local";
$config['domain_controllers'] = array("dc01.mydomain.local");
$config['admin_username'] = NULL;
$config['admin_password'] = NULL;
$config['real_primarygroup'] = true;
$config['use_ssl'] = false;
$config['use_tls'] = false;
$config['recursive_groups'] = false;

/* End of file config_ldap.php */
/* Location: ./application/config/config_ldap.php */