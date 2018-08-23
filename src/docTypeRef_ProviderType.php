<?php

namespace DHLExpress;

/**
 * Class docTypeRef_ProviderType
 *
 * @package DHLExpress
 */
class docTypeRef_ProviderType
{

	/**
	 * @var docTypeRef_NotificationType3 $Notification
	 */
	protected $Notification;

	/**
	 * @var docTypeRef_ServiceType[] $Service
	 */
	protected $Service;

	/**
	 * @var int $code
	 */
	protected $code;

	/**
	 * @param docTypeRef_NotificationType3 $Notification
	 * @param int $code
	 */
	public function __construct($Notification, $code)
	{
		$this->Notification = $Notification;
		$this->code = $code;
	}

	/**
	 * @return docTypeRef_NotificationType3
	 */
	public function getNotification()
	{
		return $this->Notification;
	}

	/**
	 * @param docTypeRef_NotificationType3 $Notification
	 * @return \DHLExpress\docTypeRef_ProviderType
	 */
	public function setNotification($Notification)
	{
		$this->Notification = $Notification;
		return $this;
	}

	/**
	 * @return docTypeRef_ServiceType[]
	 */
	public function getService()
	{
		return $this->Service;
	}

	/**
	 * @param docTypeRef_ServiceType[] $Service
	 * @return \DHLExpress\docTypeRef_ProviderType
	 */
	public function setService(array $Service = null)
	{
		$this->Service = $Service;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * @param int $code
	 * @return \DHLExpress\docTypeRef_ProviderType
	 */
	public function setCode($code)
	{
		$this->code = $code;
		return $this;
	}

}
