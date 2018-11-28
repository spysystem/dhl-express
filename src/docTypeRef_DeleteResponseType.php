<?php
namespace DHLExpress;


/**
 * Class docTypeRef_DeleteResponseType
 */
class docTypeRef_DeleteResponseType
{

	/**
	 * @var docTypeRef_NotificationType $Notification
	 */
	protected $Notification;

	/**
	 * @param docTypeRef_NotificationType $Notification
	 */
	public function __construct(docTypeRef_NotificationType $Notification)
	{
		$this->Notification = $Notification;
	}

	/**
	 * @return docTypeRef_NotificationType
	 */
	public function getNotification(): ?docTypeRef_NotificationType
	{
		return $this->Notification;
	}

	/**
	 * @param docTypeRef_NotificationType $Notification
	 * @return docTypeRef_DeleteResponseType
	 */
	public function setNotification(docTypeRef_NotificationType $Notification): docTypeRef_DeleteResponseType
	{
		$this->Notification = $Notification;
		return $this;
	}

}
