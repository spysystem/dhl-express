<?php

namespace DHLExpress;

/**
 * Class Billing2
 *
 * @package DHLExpress
 */
class Billing2
{

	/**
	 * @var string $ShipperAccountNumber
	 */
	protected $ShipperAccountNumber;

	/**
	 * @var ShipmentPaymentType2 $ShippingPaymentType
	 */
	protected $ShippingPaymentType;

	/**
	 * @var string $BillingAccountNumber
	 */
	protected $BillingAccountNumber;

	/**
	 * @param string $ShipperAccountNumber
	 * @param ShipmentPaymentType2 $ShippingPaymentType
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
	 * @return \DHLExpress\Billing2
	 */
	public function setShipperAccountNumber($ShipperAccountNumber)
	{
		$this->ShipperAccountNumber = $ShipperAccountNumber;
		return $this;
	}

	/**
	 * @return ShipmentPaymentType2
	 */
	public function getShippingPaymentType()
	{
		return $this->ShippingPaymentType;
	}

	/**
	 * @param ShipmentPaymentType2 $ShippingPaymentType
	 * @return \DHLExpress\Billing2
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
	 * @return \DHLExpress\Billing2
	 */
	public function setBillingAccountNumber($BillingAccountNumber)
	{
		$this->BillingAccountNumber = $BillingAccountNumber;
		return $this;
	}

}
