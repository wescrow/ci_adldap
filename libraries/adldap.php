<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include dirname(__FILE__).'/adLDAP/_adLDAP.php';

class Adldap extends _Adldap
{
   public function __construct()
   {
      $_adldap = NULL;
      $CI =& get_instance();
      $CI->load->config('config_ldap');
      
      $this->accountSuffix = $CI->config->item('account_suffix');
      $this->baseDn = $CI->config->item('base_dn');
      $this->domainControllers = $CI->config->item('domain_controllers');
      $this->adminUsername = $CI->config->item('admin_username');
      $this->adminPassword = $CI->config->item('admin_password');
      $this->realPrimaryGroup = $CI->config->item('real_primarygroup');
      $this->useSSL = $CI->config->item('use_ssl');
      $this->useTLS = $CI->config->item('use_tls');
      $this->recursiveGroups = $CI->config->item('recursive_groups');
      
      parent::__construct();
   }
}