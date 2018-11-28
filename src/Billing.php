<?php
namespace DHLExpress;


/**
 * Class Billing
 */
class Billing
{

	/**
	 * @var string $ShipperAccountNumber
	 */
	protected $ShipperAccountNumber;

	/**
	 * @var string|ShipmentPaymentType $ShippingPaymentType
	 */
	protected $ShippingPaymentType;

	/**
	 * @var null|string $BillingAccountNumber
	 */
	protected $BillingAccountNumber;

	/**
	 * @param string $ShipperAccountNumber
	 * @param string|ShipmentPaymentType $ShippingPaymentType
	 */
	public function __construct(string $ShipperAccountNumber, $ShippingPaymentType)
	{
		$this->ShipperAccountNumber = $ShipperAccountNumber;
		$this->ShippingPaymentType = $ShippingPaymentType;
	}

	/**
	 * @return string
	 */
	public function getShipperAccountNumber(): ?string
	{
		return $this->ShipperAccountNumber;
	}

	/**
	 * @param string $ShipperAccountNumber
	 * @return Billing
	 */
	public function setShipperAccountNumber(string $ShipperAccountNumber): Billing
	{
		$this->ShipperAccountNumber = $ShipperAccountNumber;
		return $this;
	}

	/**
	 * @return string|ShipmentPaymentType
	 */
	public function getShippingPaymentType()
	{
		return $this->ShippingPaymentType;
	}

	/**
	 * @param string|ShipmentPaymentType $ShippingPaymentType
	 * @return Billing
	 */
	public function setShippingPaymentType($ShippingPaymentType): Billing
	{
		$this->ShippingPaymentType = $ShippingPaymentType;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getBillingAccountNumber(): ?string
	{
		return $this->BillingAccountNumber;
	}

	/**
	 * @param null|string $BillingAccountNumber
	 * @return Billing
	 */
	public function setBillingAccountNumber(?string $BillingAccountNumber = null): Billing
	{
		$this->BillingAccountNumber = $BillingAccountNumber;
		return $this;
	}

}
