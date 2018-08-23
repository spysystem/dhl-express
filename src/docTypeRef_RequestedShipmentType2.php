<?php

namespace DHLExpress;

/**
 * Class docTypeRef_RequestedShipmentType2
 *
 * @package DHLExpress
 */
class docTypeRef_RequestedShipmentType2
{

	/**
	 * @var DropOffType2 $DropOffType
	 */
	protected $DropOffType;

	/**
	 * @var NextBusinessDay2 $NextBusinessDay
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
	 * @var ShipTimestamp2 $ShipTimestamp
	 */
	protected $ShipTimestamp;

	/**
	 * @var UnitOfMeasurement2 $UnitOfMeasurement
	 */
	protected $UnitOfMeasurement;

	/**
	 * @var Content2 $Content
	 */
	protected $Content;

	/**
	 * @var DeclaredValue $DeclaredValue
	 */
	protected $DeclaredValue;

	/**
	 * @var DeclaredValueCurrencyCode $DeclaredValueCurrencyCode
	 */
	protected $DeclaredValueCurrencyCode;

	/**
	 * @var PaymentInfo2 $PaymentInfo
	 */
	protected $PaymentInfo;

	/**
	 * @var string $Account
	 */
	protected $Account;

	/**
	 * @var Billing2 $Billing
	 */
	protected $Billing;

	/**
	 * @var Services2 $SpecialServices
	 */
	protected $SpecialServices;

	/**
	 * @var RequestValueAddedServices $RequestValueAddedServices
	 */
	protected $RequestValueAddedServices;

	/**
	 * @param DropOffType2 $DropOffType
	 * @param docTypeRef_ShipType2 $Ship
	 * @param docTypeRef_PackagesType2 $Packages
	 * @param ShipTimestamp2 $ShipTimestamp
	 * @param UnitOfMeasurement2 $UnitOfMeasurement
	 */
	public function __construct($DropOffType, $Ship, $Packages, $ShipTimestamp, $UnitOfMeasurement)
	{
		$this->DropOffType = $DropOffType;
		$this->Ship = $Ship;
		$this->Packages = $Packages;
		$this->ShipTimestamp = $ShipTimestamp;
		$this->UnitOfMeasurement = $UnitOfMeasurement;
	}

	/**
	 * @return DropOffType2
	 */
	public function getDropOffType()
	{
		return $this->DropOffType;
	}

	/**
	 * @param DropOffType2 $DropOffType
	 * @return \DHLExpress\docTypeRef_RequestedShipmentType2
	 */
	public function setDropOffType($DropOffType)
	{
		$this->DropOffType = $DropOffType;
		return $this;
	}

	/**
	 * @return NextBusinessDay2
	 */
	public function getNextBusinessDay()
	{
		return $this->NextBusinessDay;
	}

	/**
	 * @param NextBusinessDay2 $NextBusinessDay
	 * @return \DHLExpress\docTypeRef_RequestedShipmentType2
	 */
	public function setNextBusinessDay($NextBusinessDay)
	{
		$this->NextBusinessDay = $NextBusinessDay;
		return $this;
	}

	/**
	 * @return docTypeRef_ShipType2
	 */
	public function getShip()
	{
		return $this->Ship;
	}

	/**
	 * @param docTypeRef_ShipType2 $Ship
	 * @return \DHLExpress\docTypeRef_RequestedShipmentType2
	 */
	public function setShip($Ship)
	{
		$this->Ship = $Ship;
		return $this;
	}

	/**
	 * @return docTypeRef_PackagesType2
	 */
	public function getPackages()
	{
		return $this->Packages;
	}

	/**
	 * @param docTypeRef_PackagesType2 $Packages
	 * @return \DHLExpress\docTypeRef_RequestedShipmentType2
	 */
	public function setPackages($Packages)
	{
		$this->Packages = $Packages;
		return $this;
	}

	/**
	 * @return ShipTimestamp2
	 */
	public function getShipTimestamp()
	{
		return $this->ShipTimestamp;
	}

	/**
	 * @param ShipTimestamp2 $ShipTimestamp
	 * @return \DHLExpress\docTypeRef_RequestedShipmentType2
	 */
	public function setShipTimestamp($ShipTimestamp)
	{
		$this->ShipTimestamp = $ShipTimestamp;
		return $this;
	}

	/**
	 * @return UnitOfMeasurement2
	 */
	public function getUnitOfMeasurement()
	{
		return $this->UnitOfMeasurement;
	}

	/**
	 * @param UnitOfMeasurement2 $UnitOfMeasurement
	 * @return \DHLExpress\docTypeRef_RequestedShipmentType2
	 */
	public function setUnitOfMeasurement($UnitOfMeasurement)
	{
		$this->UnitOfMeasurement = $UnitOfMeasurement;
		return $this;
	}

	/**
	 * @return Content2
	 */
	public function getContent()
	{
		return $this->Content;
	}

	/**
	 * @param Content2 $Content
	 * @return \DHLExpress\docTypeRef_RequestedShipmentType2
	 */
	public function setContent($Content)
	{
		$this->Content = $Content;
		return $this;
	}

	/**
	 * @return DeclaredValue
	 */
	public function getDeclaredValue()
	{
		return $this->DeclaredValue;
	}

	/**
	 * @param DeclaredValue $DeclaredValue
	 * @return \DHLExpress\docTypeRef_RequestedShipmentType2
	 */
	public function setDeclaredValue($DeclaredValue)
	{
		$this->DeclaredValue = $DeclaredValue;
		return $this;
	}

	/**
	 * @return DeclaredValueCurrencyCode
	 */
	public function getDeclaredValueCurrencyCode()
	{
		return $this->DeclaredValueCurrencyCode;
	}

	/**
	 * @param DeclaredValueCurrencyCode $DeclaredValueCurrencyCode
	 * @return \DHLExpress\docTypeRef_RequestedShipmentType2
	 */
	public function setDeclaredValueCurrencyCode($DeclaredValueCurrencyCode)
	{
		$this->DeclaredValueCurrencyCode = $DeclaredValueCurrencyCode;
		return $this;
	}

	/**
	 * @return PaymentInfo2
	 */
	public function getPaymentInfo()
	{
		return $this->PaymentInfo;
	}

	/**
	 * @param PaymentInfo2 $PaymentInfo
	 * @return \DHLExpress\docTypeRef_RequestedShipmentType2
	 */
	public function setPaymentInfo($PaymentInfo)
	{
		$this->PaymentInfo = $PaymentInfo;
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
	 * @return \DHLExpress\docTypeRef_RequestedShipmentType2
	 */
	public function setAccount($Account)
	{
		$this->Account = $Account;
		return $this;
	}

	/**
	 * @return Billing2
	 */
	public function getBilling()
	{
		return $this->Billing;
	}

	/**
	 * @param Billing2 $Billing
	 * @return \DHLExpress\docTypeRef_RequestedShipmentType2
	 */
	public function setBilling($Billing)
	{
		$this->Billing = $Billing;
		return $this;
	}

	/**
	 * @return Services2
	 */
	public function getSpecialServices()
	{
		return $this->SpecialServices;
	}

	/**
	 * @param Services2 $SpecialServices
	 * @return \DHLExpress\docTypeRef_RequestedShipmentType2
	 */
	public function setSpecialServices($SpecialServices)
	{
		$this->SpecialServices = $SpecialServices;
		return $this;
	}

	/**
	 * @return RequestValueAddedServices
	 */
	public function getRequestValueAddedServices()
	{
		return $this->RequestValueAddedServices;
	}

	/**
	 * @param RequestValueAddedServices $RequestValueAddedServices
	 * @return \DHLExpress\docTypeRef_RequestedShipmentType2
	 */
	public function setRequestValueAddedServices($RequestValueAddedServices)
	{
		$this->RequestValueAddedServices = $RequestValueAddedServices;
		return $this;
	}

}
