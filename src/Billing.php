<?php

namespace DHLExpress;

/**
 * Class Billing
 *
 * @package DHLExpress
 */
class Billing
{

	/**
	 * @var string $ShipperAccountNumber
	 */
	protected $ShipperAccountNumber;

	/**
	 * @var ShipmentPaymentType $ShippingPaymentType
	 */
	protected $ShippingPaymentType;

	/**
	 * @var string $BillingAccountNumber
	 */
	protected $BillingAccountNumber;

	/**
	 * @param string $ShipperAccountNumber
	 * @param ShipmentPaymentType $ShippingPaymentType
	 */
	public function __construct($ShipperAccountNumber, $ShippingPaymentType)
	{
		$this->ShipperAccountNumber = $ShipperAccountNumber;
		$this->ShippingPaymentType = $ShippingPaymentType;
	}

	/**
	 * @return string
	 */
	public function getShipperAccountNumber()
	{
		return $this->ShipperAccountNumber;
	}

	/**
	 * @param string $ShipperAccountNumber
	 * @return \DHLExpress\Billing
	 */
	public function setShipperAccountNumber($ShipperAccountNumber)
	{
		$this->ShipperAccountNumber = $ShipperAccountNumber;
		return $this;
	}

	/**
	 * @return ShipmentPaymentType
	 */
	public function getShippingPaymentType()
	{
		return $this->ShippingPaymentType;
	}

	/**
	 * @param ShipmentPaymentType $ShippingPaymentType
	 * @return \DHLExpress\Billing
	 */
	public function setShippingPaymentType($ShippingPaymentType)
	{
		$this->ShippingPaymentType = $ShippingPaymentType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getBillingAccountNumber()
	{
		return $this->BillingAccountNumber;
	}

	/**
	 * @param string $BillingAccountNumber
	 * @return \DHLExpress\Billing
	 */
	public function setBillingAccountNumber($BillingAccountNumber)
	{
		$this->BillingAccountNumber = $BillingAccountNumber;
		return $this;
	}

}
