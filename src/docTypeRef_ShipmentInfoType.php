<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ShipmentInfoType
 */
class docTypeRef_ShipmentInfoType
{

	/**
	 * @var string|DropOffType $DropOffType
	 */
	protected $DropOffType;

	/**
	 * @var string $ServiceType
	 */
	protected $ServiceType;

	/**
	 * @var null|string $Account
	 */
	protected $Account;

	/**
	 * @var null|Billing $Billing
	 */
	protected $Billing;

	/**
	 * @var null|Services $SpecialServices
	 */
	protected $SpecialServices;

	/**
	 * @var string $Currency
	 */
	protected $Currency;

	/**
	 * @var string|UnitOfMeasurement $UnitOfMeasurement
	 */
	protected $UnitOfMeasurement;

	/**
	 * @var null|string $ShipmentIdentificationNumber
	 */
	protected $ShipmentIdentificationNumber;

	/**
	 * @var null|string $UseOwnShipmentIdentificationNumber
	 */
	protected $UseOwnShipmentIdentificationNumber;

	/**
	 * @var null|string $PackagesCount
	 */
	protected $PackagesCount;

	/**
	 * @var null|string $SendPackage
	 */
	protected $SendPackage;

	/**
	 * @var null|string|LabelType $LabelType
	 */
	protected $LabelType;

	/**
	 * @var null|string $LabelTemplate
	 */
	protected $LabelTemplate;

	/**
	 * @var null|string $ArchiveLabelTemplate
	 */
	protected $ArchiveLabelTemplate;

	/**
	 * @var null|bool $PaperlessTradeEnabled
	 */
	protected $PaperlessTradeEnabled;

	/**
	 * @var null|string $PaperlessTradeImage
	 */
	protected $PaperlessTradeImage;

	/**
	 * @param string|DropOffType $DropOffType
	 * @param string $ServiceType
	 * @param string $Currency
	 * @param string|UnitOfMeasurement $UnitOfMeasurement
	 */
	public function __construct($DropOffType, string $ServiceType, string $Currency, $UnitOfMeasurement)
	{
		$this->DropOffType = $DropOffType;
		$this->ServiceType = $ServiceType;
		$this->Currency = $Currency;
		$this->UnitOfMeasurement = $UnitOfMeasurement;
	}

	/**
	 * @return string|DropOffType
	 */
	public function getDropOffType()
	{
		return $this->DropOffType;
	}

	/**
	 * @param string|DropOffType $DropOffType
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setDropOffType($DropOffType): docTypeRef_ShipmentInfoType
	{
		$this->DropOffType = $DropOffType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getServiceType(): ?string
	{
		return $this->ServiceType;
	}

	/**
	 * @param string $ServiceType
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setServiceType(string $ServiceType): docTypeRef_ShipmentInfoType
	{
		$this->ServiceType = $ServiceType;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getAccount(): ?string
	{
		return $this->Account;
	}

	/**
	 * @param null|string $Account
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setAccount(?string $Account = null): docTypeRef_ShipmentInfoType
	{
		$this->Account = $Account;
		return $this;
	}

	/**
	 * @return null|Billing
	 */
	public function getBilling(): ?Billing
	{
		return $this->Billing;
	}

	/**
	 * @param null|Billing $Billing
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setBilling(?Billing $Billing = null): docTypeRef_ShipmentInfoType
	{
		$this->Billing = $Billing;
		return $this;
	}

	/**
	 * @return null|Services
	 */
	public function getSpecialServices(): ?Services
	{
		return $this->SpecialServices;
	}

	/**
	 * @param null|Services $SpecialServices
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setSpecialServices(?Services $SpecialServices = null): docTypeRef_ShipmentInfoType
	{
		$this->SpecialServices = $SpecialServices;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCurrency(): ?string
	{
		return $this->Currency;
	}

	/**
	 * @param string $Currency
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setCurrency(string $Currency): docTypeRef_ShipmentInfoType
	{
		$this->Currency = $Currency;
		return $this;
	}

	/**
	 * @return string|UnitOfMeasurement
	 */
	public function getUnitOfMeasurement()
	{
		return $this->UnitOfMeasurement;
	}

	/**
	 * @param string|UnitOfMeasurement $UnitOfMeasurement
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setUnitOfMeasurement($UnitOfMeasurement): docTypeRef_ShipmentInfoType
	{
		$this->UnitOfMeasurement = $UnitOfMeasurement;
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
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setShipmentIdentificationNumber(?string $ShipmentIdentificationNumber = null): docTypeRef_ShipmentInfoType
	{
		$this->ShipmentIdentificationNumber = $ShipmentIdentificationNumber;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getUseOwnShipmentIdentificationNumber(): ?string
	{
		return $this->UseOwnShipmentIdentificationNumber;
	}

	/**
	 * @param null|string $UseOwnShipmentIdentificationNumber
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setUseOwnShipmentIdentificationNumber(?string $UseOwnShipmentIdentificationNumber = null): docTypeRef_ShipmentInfoType
	{
		$this->UseOwnShipmentIdentificationNumber = $UseOwnShipmentIdentificationNumber;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPackagesCount(): ?string
	{
		return $this->PackagesCount;
	}

	/**
	 * @param null|string $PackagesCount
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setPackagesCount(?string $PackagesCount = null): docTypeRef_ShipmentInfoType
	{
		$this->PackagesCount = $PackagesCount;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getSendPackage(): ?string
	{
		return $this->SendPackage;
	}

	/**
	 * @param null|string $SendPackage
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setSendPackage(?string $SendPackage = null): docTypeRef_ShipmentInfoType
	{
		$this->SendPackage = $SendPackage;
		return $this;
	}

	/**
	 * @return null|string|LabelType
	 */
	public function getLabelType()
	{
		return $this->LabelType;
	}

	/**
	 * @param null|string|LabelType $LabelType
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setLabelType($LabelType): docTypeRef_ShipmentInfoType
	{
		$this->LabelType = $LabelType;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getLabelTemplate(): ?string
	{
		return $this->LabelTemplate;
	}

	/**
	 * @param null|string $LabelTemplate
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setLabelTemplate(?string $LabelTemplate = null): docTypeRef_ShipmentInfoType
	{
		$this->LabelTemplate = $LabelTemplate;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getArchiveLabelTemplate(): ?string
	{
		return $this->ArchiveLabelTemplate;
	}

	/**
	 * @param null|string $ArchiveLabelTemplate
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setArchiveLabelTemplate(?string $ArchiveLabelTemplate = null): docTypeRef_ShipmentInfoType
	{
		$this->ArchiveLabelTemplate = $ArchiveLabelTemplate;
		return $this;
	}

	/**
	 * @return null|bool
	 */
	public function getPaperlessTradeEnabled(): ?bool
	{
		return $this->PaperlessTradeEnabled;
	}

	/**
	 * @param null|bool $PaperlessTradeEnabled
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setPaperlessTradeEnabled(?bool $PaperlessTradeEnabled = null): docTypeRef_ShipmentInfoType
	{
		$this->PaperlessTradeEnabled = $PaperlessTradeEnabled;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPaperlessTradeImage(): ?string
	{
		return $this->PaperlessTradeImage;
	}

	/**
	 * @param null|string $PaperlessTradeImage
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function setPaperlessTradeImage(?string $PaperlessTradeImage = null): docTypeRef_ShipmentInfoType
	{
		$this->PaperlessTradeImage = $PaperlessTradeImage;
		return $this;
	}

}
