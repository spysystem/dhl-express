<?php

namespace DHLExpress;

/**
 * Class docTypeRef_ShipType
 *
 * @package DHLExpress
 */
class docTypeRef_ShipType
{

	/**
	 * @var docTypeRef_ContactInfoType $Shipper
	 */
	protected $Shipper;

	/**
	 * @var docTypeRef_ContactInfoType $Pickup
	 */
	protected $Pickup;

	/**
	 * @var docTypeRef_ContactInfoType $BookingRequestor
	 */
	protected $BookingRequestor;

	/**
	 * @var docTypeRef_ContactInfoType1 $Buyer
	 */
	protected $Buyer;

	/**
	 * @var docTypeRef_ContactInfoType $Recipient
	 */
	protected $Recipient;

	/**
	 * @param docTypeRef_ContactInfoType $Shipper
	 * @param docTypeRef_ContactInfoType $Recipient
	 */
	public function __construct($Shipper, $Recipient)
	{
		$this->Shipper = $Shipper;
		$this->Recipient = $Recipient;
	}

	/**
	 * @return docTypeRef_ContactInfoType
	 */
	public function getShipper()
	{
		return $this->Shipper;
	}

	/**
	 * @param docTypeRef_ContactInfoType $Shipper
	 * @return \DHLExpress\docTypeRef_ShipType
	 */
	public function setShipper($Shipper)
	{
		$this->Shipper = $Shipper;
		return $this;
	}

	/**
	 * @return docTypeRef_ContactInfoType
	 */
	public function getPickup()
	{
		return $this->Pickup;
	}

	/**
	 * @param docTypeRef_ContactInfoType $Pickup
	 * @return \DHLExpress\docTypeRef_ShipType
	 */
	public function setPickup($Pickup)
	{
		$this->Pickup = $Pickup;
		return $this;
	}

	/**
	 * @return docTypeRef_ContactInfoType
	 */
	public function getBookingRequestor()
	{
		return $this->BookingRequestor;
	}

	/**
	 * @param docTypeRef_ContactInfoType $BookingRequestor
	 * @return \DHLExpress\docTypeRef_ShipType
	 */
	public function setBookingRequestor($BookingRequestor)
	{
		$this->BookingRequestor = $BookingRequestor;
		return $this;
	}

	/**
	 * @return docTypeRef_ContactInfoType1
	 */
	public function getBuyer()
	{
		return $this->Buyer;
	}

	/**
	 * @param docTypeRef_ContactInfoType1 $Buyer
	 * @return \DHLExpress\docTypeRef_ShipType
	 */
	public function setBuyer($Buyer)
	{
		$this->Buyer = $Buyer;
		return $this;
	}

	/**
	 * @return docTypeRef_ContactInfoType
	 */
	public function getRecipient()
	{
		return $this->Recipient;
	}

	/**
	 * @param docTypeRef_ContactInfoType $Recipient
	 * @return \DHLExpress\docTypeRef_ShipType
	 */
	public function setRecipient($Recipient)
	{
		$this->Recipient = $Recipient;
		return $this;
	}

}
