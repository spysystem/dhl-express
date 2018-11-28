<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ShipmentDetailType
 */
class docTypeRef_ShipmentDetailType
{

	/**
	 * @var docTypeRef_NotificationType2[] $Notification
	 */
	protected $Notification;

	/**
	 * @var null|docTypeRef_PackagesResultsType $PackagesResult
	 */
	protected $PackagesResult;

	/**
	 * @var null|docTypeRef_LabelImageType[] $LabelImage
	 */
	protected $LabelImage;

	/**
	 * @var null|string $ShipmentIdentificationNumber
	 */
	protected $ShipmentIdentificationNumber;

	/**
	 * @var null|string $DispatchConfirmationNumber
	 */
	protected $DispatchConfirmationNumber;

	/**
	 * @param docTypeRef_NotificationType2[] $Notification
	 */
	public function __construct(array $Notification)
	{
		$this->Notification = $Notification;
	}

	/**
	 * @return docTypeRef_NotificationType2[]
	 */
	public function getNotification(): ?array
	{
		return $this->Notification;
	}

	/**
	 * @param docTypeRef_NotificationType2[] $Notification
	 * @return docTypeRef_ShipmentDetailType
	 */
	public function setNotification(array $Notification): docTypeRef_ShipmentDetailType
	{
		$this->Notification = $Notification;
		return $this;
	}

	/**
	 * @return null|docTypeRef_PackagesResultsType
	 */
	public function getPackagesResult(): ?docTypeRef_PackagesResultsType
	{
		return $this->PackagesResult;
	}

	/**
	 * @param null|docTypeRef_PackagesResultsType $PackagesResult
	 * @return docTypeRef_ShipmentDetailType
	 */
	public function setPackagesResult(?docTypeRef_PackagesResultsType $PackagesResult = null): docTypeRef_ShipmentDetailType
	{
		$this->PackagesResult = $PackagesResult;
		return $this;
	}

	/**
	 * @return null|docTypeRef_LabelImageType[]
	 */
	public function getLabelImage(): ?array
	{
		return $this->LabelImage;
	}

	/**
	 * @param null|docTypeRef_LabelImageType[] $LabelImage
	 * @return docTypeRef_ShipmentDetailType
	 */
	public function setLabelImage(?array $LabelImage = null): docTypeRef_ShipmentDetailType
	{
		$this->LabelImage = $LabelImage;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getShipmentIdentificationNumber(): ?string
	{
		return $this->ShipmentIdentificationNumber;
	}

	/**
	 * @param null|string $ShipmentIdentificationNumber
	 * @return docTypeRef_ShipmentDetailType
	 */
	public function setShipmentIdentificationNumber(?string $ShipmentIdentificationNumber = null): docTypeRef_ShipmentDetailType
	{
		$this->ShipmentIdentificationNumber = $ShipmentIdentificationNumber;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getDispatchConfirmationNumber(): ?string
	{
		return $this->DispatchConfirmationNumber;
	}

	/**
	 * @param null|string $DispatchConfirmationNumber
	 * @return docTypeRef_ShipmentDetailType
	 */
	public function setDispatchConfirmationNumber(?string $DispatchConfirmationNumber = null): docTypeRef_ShipmentDetailType
	{
		$this->DispatchConfirmationNumber = $DispatchConfirmationNumber;
		return $this;
	}

}
