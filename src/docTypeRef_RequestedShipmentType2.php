<?php
namespace DHLExpress;


/**
 * Class docTypeRef_RequestedShipmentType2
 */
class docTypeRef_RequestedShipmentType2
{

	/**
	 * @var string|DropOffType2 $DropOffType
	 */
	protected $DropOffType;

	/**
	 * @var null|string|NextBusinessDay2 $NextBusinessDay
	 */
	protected $NextBusinessDay;

	/**
	 * @var docTypeRef_ShipType2 $Ship
	 */
	protected $Ship;

	/**
	 * @var docTypeRef_PackagesType2 $Packages
	 */
	protected $Packages;

	/**
	 * @var string $ShipTimestamp
	 */
	protected $ShipTimestamp;

	/**
	 * @var string|UnitOfMeasurement2 $UnitOfMeasurement
	 */
	protected $UnitOfMeasurement;

	/**
	 * @var null|string|Content2 $Content
	 */
	protected $Content;

	/**
	 * @var null|string $DeclaredValue
	 */
	protected $DeclaredValue;

	/**
	 * @var null|string $DeclaredValueCurrencyCode
	 */
	protected $DeclaredValueCurrencyCode;

	/**
	 * @var null|string|PaymentInfo2 $PaymentInfo
	 */
	protected $PaymentInfo;

	/**
	 * @var null|string $Account
	 */
	protected $Account;

	/**
	 * @var null|Billing2 $Billing
	 */
	protected $Billing;

	/**
	 * @var null|Services2 $SpecialServices
	 */
	protected $SpecialServices;

	/**
	 * @var null|string $RequestValueAddedServices
	 */
	protected $RequestValueAddedServices;

	/**
	 * @var null|string $ServiceType
	 */
	protected $ServiceType;

	/**
	 * @var null|string $LocalServiceType
	 */
	protected $LocalServiceType;

	/**
	 * @var null|LandedCostType $LandedCost
	 */
	protected $LandedCost;

	/**
	 * @param string|DropOffType2 $DropOffType
	 * @param docTypeRef_ShipType2 $Ship
	 * @param docTypeRef_PackagesType2 $Packages
	 * @param string $ShipTimestamp
	 * @param string|UnitOfMeasurement2 $UnitOfMeasurement
	 */
	public function __construct($DropOffType, docTypeRef_ShipType2 $Ship, docTypeRef_PackagesType2 $Packages, string $ShipTimestamp, $UnitOfMeasurement)
	{
		$this->DropOffType = $DropOffType;
		$this->Ship = $Ship;
		$this->Packages = $Packages;
		$this->ShipTimestamp = $ShipTimestamp;
		$this->UnitOfMeasurement = $UnitOfMeasurement;
	}

	/**
	 * @return string|DropOffType2
	 */
	public function getDropOffType()
	{
		return $this->DropOffType;
	}

	/**
	 * @param string|DropOffType2 $DropOffType
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setDropOffType($DropOffType): docTypeRef_RequestedShipmentType2
	{
		$this->DropOffType = $DropOffType;
		return $this;
	}

	/**
	 * @return null|string|NextBusinessDay2
	 */
	public function getNextBusinessDay()
	{
		return $this->NextBusinessDay;
	}

	/**
	 * @param null|string|NextBusinessDay2 $NextBusinessDay
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setNextBusinessDay($NextBusinessDay): docTypeRef_RequestedShipmentType2
	{
		$this->NextBusinessDay = $NextBusinessDay;
		return $this;
	}

	/**
	 * @return docTypeRef_ShipType2
	 */
	public function getShip(): ?docTypeRef_ShipType2
	{
		return $this->Ship;
	}

	/**
	 * @param docTypeRef_ShipType2 $Ship
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setShip(docTypeRef_ShipType2 $Ship): docTypeRef_RequestedShipmentType2
	{
		$this->Ship = $Ship;
		return $this;
	}

	/**
	 * @return docTypeRef_PackagesType2
	 */
	public function getPackages(): ?docTypeRef_PackagesType2
	{
		return $this->Packages;
	}

	/**
	 * @param docTypeRef_PackagesType2 $Packages
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setPackages(docTypeRef_PackagesType2 $Packages): docTypeRef_RequestedShipmentType2
	{
		$this->Packages = $Packages;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getShipTimestamp(): ?string
	{
		return $this->ShipTimestamp;
	}

	/**
	 * @param string $ShipTimestamp
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setShipTimestamp(string $ShipTimestamp): docTypeRef_RequestedShipmentType2
	{
		$this->ShipTimestamp = $ShipTimestamp;
		return $this;
	}

	/**
	 * @return string|UnitOfMeasurement2
	 */
	public function getUnitOfMeasurement()
	{
		return $this->UnitOfMeasurement;
	}

	/**
	 * @param string|UnitOfMeasurement2 $UnitOfMeasurement
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setUnitOfMeasurement($UnitOfMeasurement): docTypeRef_RequestedShipmentType2
	{
		$this->UnitOfMeasurement = $UnitOfMeasurement;
		return $this;
	}

	/**
	 * @return null|string|Content2
	 */
	public function getContent()
	{
		return $this->Content;
	}

	/**
	 * @param null|string|Content2 $Content
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setContent($Content): docTypeRef_RequestedShipmentType2
	{
		$this->Content = $Content;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getDeclaredValue(): ?string
	{
		return $this->DeclaredValue;
	}

	/**
	 * @param null|string $DeclaredValue
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setDeclaredValue(?string $DeclaredValue = null): docTypeRef_RequestedShipmentType2
	{
		$this->DeclaredValue = $DeclaredValue;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getDeclaredValueCurrencyCode(): ?string
	{
		return $this->DeclaredValueCurrencyCode;
	}

	/**
	 * @param null|string $DeclaredValueCurrencyCode
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setDeclaredValueCurrencyCode(?string $DeclaredValueCurrencyCode = null): docTypeRef_RequestedShipmentType2
	{
		$this->DeclaredValueCurrencyCode = $DeclaredValueCurrencyCode;
		return $this;
	}

	/**
	 * @return null|string|PaymentInfo2
	 */
	public function getPaymentInfo()
	{
		return $this->PaymentInfo;
	}

	/**
	 * @param null|string|PaymentInfo2 $PaymentInfo
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setPaymentInfo($PaymentInfo): docTypeRef_RequestedShipmentType2
	{
		$this->PaymentInfo = $PaymentInfo;
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
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setAccount(?string $Account = null): docTypeRef_RequestedShipmentType2
	{
		$this->Account = $Account;
		return $this;
	}

	/**
	 * @return null|Billing2
	 */
	public function getBilling(): ?Billing2
	{
		return $this->Billing;
	}

	/**
	 * @param null|Billing2 $Billing
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setBilling(?Billing2 $Billing = null): docTypeRef_RequestedShipmentType2
	{
		$this->Billing = $Billing;
		return $this;
	}

	/**
	 * @return null|Services2
	 */
	public function getSpecialServices(): ?Services2
	{
		return $this->SpecialServices;
	}

	/**
	 * @param null|Services2 $SpecialServices
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setSpecialServices(?Services2 $SpecialServices = null): docTypeRef_RequestedShipmentType2
	{
		$this->SpecialServices = $SpecialServices;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getRequestValueAddedServices(): ?string
	{
		return $this->RequestValueAddedServices;
	}

	/**
	 * @param null|string $RequestValueAddedServices
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setRequestValueAddedServices(?string $RequestValueAddedServices = null): docTypeRef_RequestedShipmentType2
	{
		$this->RequestValueAddedServices = $RequestValueAddedServices;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getServiceType(): ?string
	{
		return $this->ServiceType;
	}

	/**
	 * @param null|string $ServiceType
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setServiceType(?string $ServiceType = null): docTypeRef_RequestedShipmentType2
	{
		$this->ServiceType = $ServiceType;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getLocalServiceType(): ?string
	{
		return $this->LocalServiceType;
	}

	/**
	 * @param null|string $LocalServiceType
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setLocalServiceType(?string $LocalServiceType = null): docTypeRef_RequestedShipmentType2
	{
		$this->LocalServiceType = $LocalServiceType;
		return $this;
	}

	/**
	 * @return null|LandedCostType
	 */
	public function getLandedCost(): ?LandedCostType
	{
		return $this->LandedCost;
	}

	/**
	 * @param null|LandedCostType $LandedCost
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function setLandedCost(?LandedCostType $LandedCost = null): docTypeRef_RequestedShipmentType2
	{
		$this->LandedCost = $LandedCost;
		return $this;
	}

}
