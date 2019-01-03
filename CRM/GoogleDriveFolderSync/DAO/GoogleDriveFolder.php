<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2018
 *
 * Generated from /var/www/html/wp-content/uploads/civicrm/ext/com.hjed.civicrm.google-drive-folder-sync/xml/schema/CRM/GoogleDriveFolderSync/GoogleDriveFolder.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:995eb15f788555da132cb4a24b0ffd61)
 */

/**
 * Database access object for the GoogleDriveFolder entity.
 */
class CRM_GoogleDriveFolderSync_DAO_GoogleDriveFolder extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_google_drive_folder';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * Entity ID that civicrm requires to be an int
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Google Drive File ID
   *
   * @var string
   */
  public $google_id;

  /**
   * The google drive api role
   *
   * @var string
   */
  public $role;

  /**
   * @var string
   */
  public $folder_name_and_role;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_google_drive_folder';
    parent::__construct();
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'Entity ID that civicrm requires to be an int',
          'required' => TRUE,
          'table_name' => 'civicrm_google_drive_folder',
          'entity' => 'GoogleDriveFolder',
          'bao' => 'CRM_GoogleDriveFolderSync_DAO_GoogleDriveFolder',
          'localizable' => 0,
        ],
        'google_id' => [
          'name' => 'google_id',
          'type' => CRM_Utils_Type::T_STRING,
          'description' => 'Google Drive File ID',
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_google_drive_folder',
          'entity' => 'GoogleDriveFolder',
          'bao' => 'CRM_GoogleDriveFolderSync_DAO_GoogleDriveFolder',
          'localizable' => 0,
        ],
        'role' => [
          'name' => 'role',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Role'),
          'description' => 'The google drive api role',
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_google_drive_folder',
          'entity' => 'GoogleDriveFolder',
          'bao' => 'CRM_GoogleDriveFolderSync_DAO_GoogleDriveFolder',
          'localizable' => 0,
        ],
        'folder_name_and_role' => [
          'name' => 'folder_name_and_role',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Folder Name And Role'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_google_drive_folder',
          'entity' => 'GoogleDriveFolder',
          'bao' => 'CRM_GoogleDriveFolderSync_DAO_GoogleDriveFolder',
          'localizable' => 0,
          'pseudoconstant' => [
            'optionGroupName' => 'google_drive_folder_sync_groups_options',
            'optionEditPath' => 'civicrm/admin/options/google_drive_folder_sync_groups_options',
          ]
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'google_drive_folder', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'google_drive_folder', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}