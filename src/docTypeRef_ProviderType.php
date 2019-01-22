<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ProviderType
 */
class docTypeRef_ProviderType
{

	/**
	 * @var null|ServiceHeaderType $ServiceHeader
	 */
	protected $ServiceHeader;

	/**
	 * @var docTypeRef_NotificationType3|docTypeRef_NotificationType3[]|null $Notification
	 */
	protected $Notification;

	/**
	 * @var null|docTypeRef_ServiceType[] $Service
	 */
	protected $Service;

	/**
	 * @var string $code
	 */
	protected $code;

	/**
	 * @param docTypeRef_NotificationType3|docTypeRef_NotificationType3[]|null $Notification
	 * @param string $code
	 */
	public function __construct($Notification, string $code)
	{
		$this->Notification = $Notification;
		$this->code = $code;
	}

	/**
	 * @return null|ServiceHeaderType
	 */
	public function getServiceHeader(): ?ServiceHeaderType
	{
		return $this->ServiceHeader;
	}

	/**
	 * @param null|ServiceHeaderType $ServiceHeader
	 * @return docTypeRef_ProviderType
	 */
	public function setServiceHeader(?ServiceHeaderType $ServiceHeader = null): docTypeRef_ProviderType
	{
		$this->ServiceHeader = $ServiceHeader;
		return $this;
	}

	/**
	 * @return docTypeRef_NotificationType3|docTypeRef_NotificationType3[]|null
	 */
	public function getNotification()
	{
		return $this->Notification;
	}

	/**
	 * @param docTypeRef_NotificationType3|docTypeRef_NotificationType3[]|null $Notification
	 * @return docTypeRef_ProviderType
	 */
	public function setNotification($Notification): docTypeRef_ProviderType
	{
		$this->Notification = $Notification;
		return $this;
	}

	/**
	 * @return null|docTypeRef_ServiceType[]
	 */
	public function getService(): ?array
	{
		return $this->Service;
	}

	/**
	 * @param null|docTypeRef_ServiceType[] $Service
	 * @return docTypeRef_ProviderType
	 */
	public function setService(?array $Service = null): docTypeRef_ProviderType
	{
		$this->Service = $Service;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCode(): ?string
	{
		return $this->code;
	}

	/**
	 * @param string $code
	 * @return docTypeRef_ProviderType
	 */
	public function setCode(string $code): docTypeRef_ProviderType
	{
		$this->code = $code;
		return $this;
	}

}
