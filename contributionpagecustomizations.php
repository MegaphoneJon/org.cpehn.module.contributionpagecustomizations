<?php

require_once 'contributionpagecustomizations.civix.php';

/**
 * Implementation of hook_civicrm_buildForm
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_buildForm
 */
function contributionpagecustomizations_civicrm_buildForm($formName, &$form) {
  if($formName == 'CRM_Contribute_Form_Contribution_Main'){
    CRM_Core_Resources::singleton()->addScriptFile('org.cpehn.module.contributionpagecustomizations', 'customize_contribform.js');
  }
}

/**
 * Implementation of hook_civicrm_config
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function contributionpagecustomizations_civicrm_config(&$config) {
  _contributionpagecustomizations_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function contributionpagecustomizations_civicrm_xmlMenu(&$files) {
  _contributionpagecustomizations_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function contributionpagecustomizations_civicrm_install() {
  return _contributionpagecustomizations_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function contributionpagecustomizations_civicrm_uninstall() {
  return _contributionpagecustomizations_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function contributionpagecustomizations_civicrm_enable() {
  return _contributionpagecustomizations_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function contributionpagecustomizations_civicrm_disable() {
  return _contributionpagecustomizations_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function contributionpagecustomizations_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _contributionpagecustomizations_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function contributionpagecustomizations_civicrm_managed(&$entities) {
  return _contributionpagecustomizations_civix_civicrm_managed($entities);
}

/**
 * Implementation of hook_civicrm_caseTypes
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function contributionpagecustomizations_civicrm_caseTypes(&$caseTypes) {
  _contributionpagecustomizations_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implementation of hook_civicrm_alterSettingsFolders
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function contributionpagecustomizations_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _contributionpagecustomizations_civix_civicrm_alterSettingsFolders($metaDataFolders);
}
