<?php

/**
 * MailSmtp module model class
 * @package YetiForce.Settings.Module
 * @license licenses/License.html
 * @author Adrian Koń <a.kon@yetiforce.com>
 */
class Settings_MailSmtp_Module_Model extends Settings_Vtiger_Module_Model
{

	public $baseTable = 's_yf_mail_smtp';
	public $baseIndex = 'id';
	public $listFields = ['name' => 'LBL_NAME', 'host' => 'LBL_HOST', 'port' => 'LBL_PORT' , 'username' => 'LBL_USERNAME', 'from_email' => 'LBL_FROM_EMAIL'];
	public $name = 'MailSmtp';

	/**
	 * Function to get the url for default view of the module
	 * @return string URL
	 */
	public function getDefaultUrl()
	{
		return 'index.php?module=MailSmtp&parent=Settings&view=List';
	}
	
	/**
	 * Function to get the url for create view of the module
	 * @return string URL
	*/ 
	public function getCreateRecordUrl()
	{
		return 'index.php?module=MailSmtp&parent=Settings&view=Create';
	}
	
	public static function getSmtpNames()
	{
		return (new \App\Db\Query())->select(['id', 'name'])->from('s_#__mail_smtp')->all();
	}

}