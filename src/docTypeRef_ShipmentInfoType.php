<?php

namespace DHLExpress;

/**
 * Class docTypeRef_ShipmentInfoType
 *
 * @package DHLExpress
 */
class docTypeRef_ShipmentInfoType
{

	/**
	 * @var DropOffType $DropOffType
	 */
	protected $DropOffType;

	/**
	 * @var string $ServiceType
	 */
	protected $ServiceType;

	/**
	 * @var string $Account
	 */
	protected $Account;

	/**
	 * @var Billing $Billing
	 */
	protected $Billing;

	/**
	 * @var Services $SpecialServices
	 */
	protected $SpecialServices;

	/**
	 * @var string $Currency
	 */
	protected $Currency;

	/**
	 * @var UnitOfMeasurement $UnitOfMeasurement
	 */
	protected $UnitOfMeasurement;

	/**
	 * @var ShipmentIdentificationNumber2 $ShipmentIdentificationNumber
	 */
	protected $ShipmentIdentificationNumber;

	/**
	 * @var UseOwnShipmentIdentificationNumber $UseOwnShipmentIdentificationNumber
	 */
	protected $UseOwnShipmentIdentificationNumber;

	/**
	 * @var PackagesCount $PackagesCount
	 */
	protected $PackagesCount;

	/**
	 * @var SendPackage $SendPackage
	 */
	protected $SendPackage;

	/**
	 * @var LabelType $LabelType
	 */
	protected $LabelType;

	/**
	 * @var LabelTemplate $LabelTemplate
	 */
	protected $LabelTemplate;

	/**
	 * @var ArchiveLabelTemplate $ArchiveLabelTemplate
	 */
	protected $ArchiveLabelTemplate;

	/**
	 * @var boolean $PaperlessTradeEnabled
	 */
	protected $PaperlessTradeEnabled;

	/**
	 * @var base64Binary $PaperlessTradeImage
	 */
	protected $PaperlessTradeImage;

	/**
	 * @param DropOffType $DropOffType
	 * @param string $ServiceType
	 * @param string $Currency
	 * @param UnitOfMeasurement $UnitOfMeasurement
	 */
	public function __construct($DropOffType, $ServiceType, $Currency, $UnitOfMeasurement)
	{
		$this->DropOffType = $DropOffType;
		$this->ServiceType = $ServiceType;
		$this->Currency = $Currency;
		$this->UnitOfMeasurement = $UnitOfMeasurement;
	}

	/**
	 * @return DropOffType
	 */
	public function getDropOffType()
	{
		return $this->DropOffType;
	}

	/**
	 * @param DropOffType $DropOffType
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setDropOffType($DropOffType)
	{
		$this->DropOffType = $DropOffType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getServiceType()
	{
		return $this->ServiceType;
	}

	/**
	 * @param string $ServiceType
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setServiceType($ServiceType)
	{
		$this->ServiceType = $ServiceType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAccount()
	{
		return $this->Account;
	}

	/**
	 * @param string $Account
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setAccount($Account)
	{
		$this->Account = $Account;
		return $this;
	}

	/**
	 * @return Billing
	 */
	public function getBilling()
	{
		return $this->Billing;
	}

	/**
	 * @param Billing $Billing
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setBilling($Billing)
	{
		$this->Billing = $Billing;
		return $this;
	}

	/**
	 * @return Services
	 */
	public function getSpecialServices()
	{
		return $this->SpecialServices;
	}

	/**
	 * @param Services $SpecialServices
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setSpecialServices($SpecialServices)
	{
		$this->SpecialServices = $SpecialServices;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}

	/**
	 * @param string $Currency
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setCurrency($Currency)
	{
		$this->Currency = $Currency;
		return $this;
	}

	/**
	 * @return UnitOfMeasurement
	 */
	public function getUnitOfMeasurement()
	{
		return $this->UnitOfMeasurement;
	}

	/**
	 * @param UnitOfMeasurement $UnitOfMeasurement
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setUnitOfMeasurement($UnitOfMeasurement)
	{
		$this->UnitOfMeasurement = $UnitOfMeasurement;
		return $this;
	}

	/**
	 * @return ShipmentIdentificationNumber2
	 */
	public function getShipmentIdentificationNumber()
	{
		return $this->ShipmentIdentificationNumber;
	}

	/**
	 * @param ShipmentIdentificationNumber2 $ShipmentIdentificationNumber
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setShipmentIdentificationNumber($ShipmentIdentificationNumber)
	{
		$this->ShipmentIdentificationNumber = $ShipmentIdentificationNumber;
		return $this;
	}

	/**
	 * @return UseOwnShipmentIdentificationNumber
	 */
	public function getUseOwnShipmentIdentificationNumber()
	{
		return $this->UseOwnShipmentIdentificationNumber;
	}

	/**
	 * @param UseOwnShipmentIdentificationNumber $UseOwnShipmentIdentificationNumber
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setUseOwnShipmentIdentificationNumber($UseOwnShipmentIdentificationNumber)
	{
		$this->UseOwnShipmentIdentificationNumber = $UseOwnShipmentIdentificationNumber;
		return $this;
	}

	/**
	 * @return PackagesCount
	 */
	public function getPackagesCount()
	{
		return $this->PackagesCount;
	}

	/**
	 * @param PackagesCount $PackagesCount
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setPackagesCount($PackagesCount)
	{
		$this->PackagesCount = $PackagesCount;
		return $this;
	}

	/**
	 * @return SendPackage
	 */
	public function getSendPackage()
	{
		return $this->SendPackage;
	}

	/**
	 * @param SendPackage $SendPackage
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setSendPackage($SendPackage)
	{
		$this->SendPackage = $SendPackage;
		return $this;
	}

	/**
	 * @return LabelType
	 */
	public function getLabelType()
	{
		return $this->LabelType;
	}

	/**
	 * @param LabelType $LabelType
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setLabelType($LabelType)
	{
		$this->LabelType = $LabelType;
		return $this;
	}

	/**
	 * @return LabelTemplate
	 */
	public function getLabelTemplate()
	{
		return $this->LabelTemplate;
	}

	/**
	 * @param LabelTemplate $LabelTemplate
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setLabelTemplate($LabelTemplate)
	{
		$this->LabelTemplate = $LabelTemplate;
		return $this;
	}

	/**
	 * @return ArchiveLabelTemplate
	 */
	public function getArchiveLabelTemplate()
	{
		return $this->ArchiveLabelTemplate;
	}

	/**
	 * @param ArchiveLabelTemplate $ArchiveLabelTemplate
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setArchiveLabelTemplate($ArchiveLabelTemplate)
	{
		$this->ArchiveLabelTemplate = $ArchiveLabelTemplate;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function getPaperlessTradeEnabled()
	{
		return $this->PaperlessTradeEnabled;
	}

	/**
	 * @param boolean $PaperlessTradeEnabled
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setPaperlessTradeEnabled($PaperlessTradeEnabled)
	{
		$this->PaperlessTradeEnabled = $PaperlessTradeEnabled;
		return $this;
	}

	/**
	 * @return base64Binary
	 */
	public function getPaperlessTradeImage()
	{
		return $this->PaperlessTradeImage;
	}

	/**
	 * @param base64Binary $PaperlessTradeImage
	 * @return \DHLExpress\docTypeRef_ShipmentInfoType
	 */
	public function setPaperlessTradeImage($PaperlessTradeImage)
	{
		$this->PaperlessTradeImage = $PaperlessTradeImage;
		return $this;
	}

}
