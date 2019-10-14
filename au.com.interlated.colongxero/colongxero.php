<?php

require_once 'colongxero.civix.php';


use CRM_Colongxero_ExtensionUtil as E;

/**
 * 1. Listing contributions for processing.
 * web/files/civicrm/ext/nz.co.fuzion.accountsync/accountsync.php
 *
 * Adds items to the civicrm_account_invoice table.
 *
 * 2. Processing and mapping contributions
 *
 *
 */
/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function colongxero_civicrm_config(&$config) {
  _colongxero_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function colongxero_civicrm_xmlMenu(&$files) {
  _colongxero_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function colongxero_civicrm_install() {
  _colongxero_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function colongxero_civicrm_postInstall() {
  _colongxero_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function colongxero_civicrm_uninstall() {
  _colongxero_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function colongxero_civicrm_enable() {
  _colongxero_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function colongxero_civicrm_disable() {
  _colongxero_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function colongxero_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _colongxero_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function colongxero_civicrm_managed(&$entities) {
  _colongxero_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function colongxero_civicrm_caseTypes(&$caseTypes) {
  _colongxero_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function colongxero_civicrm_angularModules(&$angularModules) {
  _colongxero_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function colongxero_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _colongxero_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function colongxero_civicrm_entityTypes(&$entityTypes) {
  _colongxero_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function colongxero_civicrm_themes(&$themes) {
  _colongxero_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 *
 * function colongxero_civicrm_preProcess($formName, &$form) {
 *
 * } // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 *
 * function colongxero_civicrm_navigationMenu(&$menu) {
 * _colongxero_civix_insert_navigation_menu($menu, 'Mailings', array(
 * 'label' => E::ts('New subliminal message'),
 * 'name' => 'mailing_subliminal_message',
 * 'url' => 'civicrm/mailing/subliminal',
 * 'permission' => 'access CiviMail',
 * 'operator' => 'OR',
 * 'separator' => 0,
 * ));
 * _colongxero_civix_navigationMenu($menu);
 * } // */

/* Tracking categories
Admin = 0756e054-3b02-4113-ba54-3c654b2005a8
Gardens of Stone = 843225b8-4e73-49be-9669-5264cebf01e9
GIVE A DAM = 05a7f903-6d7d-403a-8b0e-0375198ca640
Wilderness - General = 05262604-ee14-407a-b592-6aa230e5d222

*/


/**
 * Maps to the XML API.
 *
 * @param $entity string invoice
 * @param $data array contribution data
 * @param $save boolean False to quit here.
 * @param $params array the invoice to be saved.
 */
function colongxero_civicrm_accountPushAlterMapped($entity, &$data, &$save, &$params) {

  // $trackingOptions = civicrm_api3('xerosync', 'trackingcategorypull', array());

  colongxero_set_display_name_from_label($params);

  // Hard code the tracking category mapping.
  $wild_rivers_account_code = 205;

  $defaultTrackingCategory = [
    'TrackingCategoryID' => '05262604-ee14-407a-b592-6aa230e5d222',
    'Name' => 'Campaign',
    'Option' => 'Wilderness - General'
  ];

  $tracking[] = $defaultTrackingCategory;

  // Tracking should be on financial type id
  switch ($data['financial_type_id']) {
    // Default is 1 - donation.
    case 2 :
      // Membership renewal;
      // Default tracking category.
      // Leading space from the lineItem.
      colongxero_set_account_code_line_item(["Contribution Amount","Ordinary Member"], 230, $params);
      break;
    // 3 is default donation
    case 4 :
      // Event fee;
      // Default tracking category
      colongxero_set_account_code_all(256, $params);
      break;
    case 5 :
      // Life member payment;
      // Default tracking category
      colongxero_set_account_code_line_item(["Life Member"], 230, $params);
      break;
    case 6 :
      // Bulletin subscription;
      // Default tracking category
      colongxero_set_account_code_line_item([
        "Bulletin Subscriber",
        "Contribution Amount",
      ], 240, $params);
      //     colongxero_set_tax_code_all('GSTONIMPORTS', $params);
      break;
    case 7 :
      // Join the Colong Foundation. Why different to membership renewal?;
      // Default tracking category
      colongxero_set_account_code_line_item(["Ordinary Member"], 230, $params);
      break;
    case 9 :
      // Membership dues. Why is this not renewal (2);
      // Default tracking category
      colongxero_set_account_code_line_item(["Contribution Amount"], 230, $params);
      break;
    case 10 :
      // Gardens of stone. Could be a campaign rather than a financial type.
      $gosTrackingCategory = clone((object) $defaultTrackingCategory);
      $gosTrackingCategory->Option = 'Gardens of Stone';
      $gosTrackingCategory->TrackingCategoryID = '843225b8-4e73-49be-9669-5264cebf01e9';

      $tracking = [];
      $tracking[] = (array) $gosTrackingCategory;
      // Default donation account
      break;
    case 11 :
      // Fundraiser purchase. Tax treatment might be slightly different.
      // Exhibition sales.
      // Default tracking category
      colongxero_set_account_code_all(255, $params);
      break;
    case 12 :
      // Shop purchase;
      // Default tracking category
      colongxero_set_account_code_all(295, $params);
      break;
    case 13:
      $gadTrackingCategory = clone((object) $defaultTrackingCategory);
      $gadTrackingCategory->Option = 'GIVE A DAM';
      $gadTrackingCategory->TrackingCategoryID = '05a7f903-6d7d-403a-8b0e-0375198ca640';

      $tracking = [];
      $tracking[] = (array) $gadTrackingCategory;

      //colongxero_set_account_code_all($wild_rivers_account_code, $params);
      break;
    default:
      // Default tracking category
      // Default donation account.
  }

  colongxero_map_tracking($tracking, $params);
  colongxero_map_payment_instrument($data, $params);
}

/**
 * Set all the line items to this account number.
 *
 * @param $account_code string the account number.
 * @param $params array
 */
function colongxero_set_account_code_all($account_code, &$params) {
  $lineItems = $params['LineItems']['LineItem'];
  $newLineItem = [];
  foreach ($lineItems as $lineItem) {
    $lineItem['AccountCode'] = "$account_code";
    $newLineItem[] = $lineItem;
  }
  $params['LineItems']['LineItem'] = $newLineItem;
}

function colongxero_set_tax_code_all($tax_code, &$params) {
  $lineItems = $params['LineItems']['LineItem'];
  $newLineItem = [];
  foreach ($lineItems as $lineItem) {
    $lineItem['TaxType'] = "$tax_code";
    $newLineItem[] = $lineItem;
  }
  $params['LineItems']['LineItem'] = $newLineItem;
}


/**
 * AccountCode according to the xero api is converted from accounting_code in
 * web/files/civicrm/ext/nz.co.fuzion.civixero/CRM/Civixero/Invoice.php
 *
 * @param $line_item_description array "Ordinary Member" to set account code
 *   on the membership line item
 * @param $account_code string the account number
 * @param $params
 */
function colongxero_set_account_code_line_item($line_item_descriptions, $account_code, &$params) {
  $lineItems = $params['LineItems']['LineItem'];
  $newLineItem = [];

  foreach ($lineItems as $lineItem) {
    if (matchDescription($lineItem['Description'], $line_item_descriptions)) {
      $lineItem['AccountCode'] = "$account_code";
    }
    $newLineItem[] = $lineItem;
  }
  $params['LineItems']['LineItem'] = $newLineItem;
}

function matchDescription($source_description, $descriptions) {
  return in_array(trim($source_description), $descriptions);
}

// This happens after the mapping in Invoice.php
function colongxero_set_display_name_from_label(&$params) {
  $lineItems = $params['LineItems']['LineItem'];
  $newLineItem = [];

  foreach ($lineItems as $lineItem) {
      if (!array_key_exists('Description', $lineItem)) {
      if (array_key_exists('label', $lineItem)) {
        $lineItem['Description'] = $lineItem['label'];
      }
    }
    $newLineItem[] = $lineItem;
  }
  $params['LineItems']['LineItem'] = $newLineItem;

}

/**
 * Map data to the item code. Probably should retrieve the item codes from xero
 * to check first.
 * /civicrm/admin/options/payment_instrument?reset=1
 *
 * @param $data
 * @param $params
 */
function colongxero_map_payment_instrument($data, &$params) {

  $lineItems = $params['LineItems']['LineItem'];
  $newLineItem = [];

  // No split payments
  $itemCode = mapItemCode($data['payment_instrument_id']);

  foreach ($lineItems as $lineItem) {
    $lineItem['ItemCode'] = $itemCode;
    $newLineItem[] = $lineItem;
  }
  $params['LineItems']['LineItem'] = $newLineItem;
}

/**
 * Map data to the item code. Probably should retrieve the item codes from xero
 * to check first.
 * /civicrm/admin/options/payment_instrument?reset=1
 *
 * @param $data
 * @param $params
 */
function colongxero_map_tracking($tracking, &$params) {

  $lineItems = $params['LineItems']['LineItem'];
  $newLineItem = [];

  foreach ($lineItems as $lineItem) {
    $trackingItem = [];
    $trackingItem['TrackingCategory'] = $tracking;
    $lineItem['Tracking'] = $trackingItem;

    $newLineItem[] = $lineItem;
  }
  $params['LineItems']['LineItem'] = $newLineItem;
}

/**
 * @param $paymentInstrumentId
 *
 * @return string
 *
 */
function mapItemCode($paymentInstrumentId) {
  $itemCode = 'EFT';
  switch ($paymentInstrumentId) {
    case  3:
      $itemCode = 'Cash';
      break;
    case  4:
      $itemCode = 'Check';
      break;
    default:
  }
  return $itemCode;
}

function colongxero_map_campaign($data) {
  $wild_rivers_account_code = 205;

  switch ($data['contribution_campaign_id']) {
    // 3 is colong 50 - general wilderness
    case 1 :
      $trackingCategory['Name'] = "Gardens of Stone";
      $trackingCategory['TrackingCategoryID'] = '843225b8-4e73-49be-9669-5264cebf01e9';
      break;
    case 2 :
      $trackingCategory['Name'] = "Wild Rivers";
      $trackingCategory['TrackingCategoryID'] = '05a7f903-6d7d-403a-8b0e-0375198ca640';
      colongxero_set_account_code_all($wild_rivers_account_code, $params);
      break;
    case 4 :
      $trackingCategory['Name'] = "Gardens of Stone";
      $trackingCategory['TrackingCategoryID'] = '843225b8-4e73-49be-9669-5264cebf01e9';
      break;
    default:
      $trackingCategory['Name'] = "Wilderness - General";
      $trackingCategory['TrackingCategoryID'] = '05262604-ee14-407a-b592-6aa230e5d222';
  }
  $params['TrackingCategory'] = $trackingCategory;
}

// web/files/civicrm/ext/nz.co.fuzion.civixero/CRM/Civixero/Invoice.php

/* 3) hooks civicrm_accountPullPreSave & civicrm_accountPushAlterMapped
 note that the civicrm_accountPullPreSave differs from a standard pre hook in that setting save to FALSE will cause the record to be skipped ie.

 hook_civicrm_accountPullPreSave($entity, &$data, &$save, &$params) {
   if (not_cool($entity)) {
     $save = FALSE;
   }
 }

 the accountPushAlterMapped hook also allows you to stop something from being pushed through although it's primary use is to change the mapping (e.g alter account codes based on client specific logic

 hook_accountPushAlterMapped($entity, &$data, &$save, &$params) {}
*/

/* standard donation only */
/* $data
 * {"contact_id":"4220","contact_type":"Individual","contact_sub_type":"","sort_name":"jrobens+1@interlated.com.au","display_name":"jrobens+1@interlated.com.au","contribution_id":"5711","currency":"AUD","payment_instrument_id":"3","receive_date":"2019-08-27 14:57:00","non_deductible_amount":"0.00","total_amount":"5.55","fee_amount":"0.00","net_amount":"5.55","trxn_id":"","invoice_id":"","invoice_number":"","cancel_date":"","cancel_reason":"","receipt_date":"2019-08-27 14:59:12","thankyou_date":"","contribution_source":"cheese","amount_level":"","contribution_recur_id":"","is_test":"0","is_pay_later":"0","contribution_status_id":"1","contribution_check_number":"","contribution_campaign_id":"4","financial_account_id":"1","accounting_code":"","campaign_id":"4","contribution_campaign_title":"Destination Pagoda","financial_type_id":"1","contribution_note":"","contribution_batch":"","civicrm_value_contributions_18_id":"772","custom_45":"","payment_instrument":"Cash","contribution_status":"Completed","financial_type":"Donation","check_number":"","instrument_id":"3","id":"5711","contribution_type_id":"1","api.participant_payment.get":{"is_error":0,"version":3,"count":0,"values":[]},"api.line_item.get":{"is_error":0,"version":3,"count":1,"id":7296,"values":{"7296":{"id":"7296","entity_table":"civicrm_contribution","entity_id":"5711","contribution_id":"5711","price_field_id":"1","label":"Contribution Amount","qty":"1.00","unit_price":"5.55","line_total":"5.55","participant_count":"0","price_field_value_id":"1","financial_type_id":"1","non_deductible_amount":"0.00","contribution_type_id":"1"}}},"line_items":{"7296":{"id":"7296","entity_table":"civicrm_contribution","entity_id":"5711","contribution_id":"5711","price_field_id":"1","label":"Contribution Amount","qty":"1.00","unit_price":"5.55","line_total":"5.55","participant_count":"0","price_field_value_id":"1","financial_type_id":"1","non_deductible_amount":"0.00","contribution_type_id":"1","accounting_code":null}},"payment_instrument_financial_account_id":"11","payment_instrument_accounting_code":"1100"}*/


/*
 * {"Type":"ACCREC","Contact":{"ContactNumber":"4220"},"Date":"2019-08-27","DueDate":"2019-09-06","Status":"SUBMITTED","InvoiceNumber":"5711","CurrencyCode":"AUD","Reference":"jrobens+1@interlated.com.au cheese","LineAmountTypes":"Inclusive","LineItems":{"LineItem":[{"Description":" Contribution Amount","Quantity":"1.00","UnitAmount":"5.55","AccountCode":"200"}]}}
 */
// https://developer.xero.com/documentation/api/invoices

// Line items with donation
// {"LineItem":[{"Description":" Ordinary Member","Quantity":"1.00","UnitAmount":"30.00","AccountCode":"200"},{"Description":" $5","Quantity":"1.00","UnitAmount":"5.00","AccountCode":"200"}]}
