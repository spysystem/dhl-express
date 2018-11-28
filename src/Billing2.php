<?php
namespace DHLExpress;


/**
 * Class Billing2
 */
class Billing2
{

	/**
	 * @var string $ShipperAccountNumber
	 */
	protected $ShipperAccountNumber;

	/**
	 * @var string|ShipmentPaymentType2 $ShippingPaymentType
	 */
	protected $ShippingPaymentType;

	/**
	 * @var null|string $BillingAccountNumber
	 */
	protected $BillingAccountNumber;

	/**
	 * @param string $ShipperAccountNumber
	 * @param string|ShipmentPaymentType2 $ShippingPaymentType
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
	 * @return Billing2
	 */
	public function setShipperAccountNumber(string $ShipperAccountNumber): Billing2
	{
		$this->ShipperAccountNumber = $ShipperAccountNumber;
		return $this;
	}

	/**
	 * @return string|ShipmentPaymentType2
	 */
	public function getShippingPaymentType()
	{
		return $this->ShippingPaymentType;
	}

	/**
	 * @param string|ShipmentPaymentType2 $ShippingPaymentType
	 * @return Billing2
	 */
	public function setShippingPaymentType($ShippingPaymentType): Billing2
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
	 * @return Billing2
	 */
	public function setBillingAccountNumber(?string $BillingAccountNumber = null): Billing2
	{
		$this->BillingAccountNumber = $BillingAccountNumber;
		return $this;
	}

}
