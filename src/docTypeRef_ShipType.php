<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ShipType
 */
class docTypeRef_ShipType
{

	/**
	 * @var docTypeRef_ContactInfoType $Shipper
	 */
	protected $Shipper;

	/**
	 * @var null|docTypeRef_ContactInfoType $Pickup
	 */
	protected $Pickup;

	/**
	 * @var null|docTypeRef_ContactInfoType $BookingRequestor
	 */
	protected $BookingRequestor;

	/**
	 * @var null|docTypeRef_ContactInfoType1 $Buyer
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
	public function __construct(docTypeRef_ContactInfoType $Shipper, docTypeRef_ContactInfoType $Recipient)
	{
		$this->Shipper = $Shipper;
		$this->Recipient = $Recipient;
	}

	/**
	 * @return docTypeRef_ContactInfoType
	 */
	public function getShipper(): ?docTypeRef_ContactInfoType
	{
		return $this->Shipper;
	}

	/**
	 * @param docTypeRef_ContactInfoType $Shipper
	 * @return docTypeRef_ShipType
	 */
	public function setShipper(docTypeRef_ContactInfoType $Shipper): docTypeRef_ShipType
	{
		$this->Shipper = $Shipper;
		return $this;
	}

	/**
	 * @return null|docTypeRef_ContactInfoType
	 */
	public function getPickup(): ?docTypeRef_ContactInfoType
	{
		return $this->Pickup;
	}

	/**
	 * @param null|docTypeRef_ContactInfoType $Pickup
	 * @return docTypeRef_ShipType
	 */
	public function setPickup(?docTypeRef_ContactInfoType $Pickup = null): docTypeRef_ShipType
	{
		$this->Pickup = $Pickup;
		return $this;
	}

	/**
	 * @return null|docTypeRef_ContactInfoType
	 */
	public function getBookingRequestor(): ?docTypeRef_ContactInfoType
	{
		return $this->BookingRequestor;
	}

	/**
	 * @param null|docTypeRef_ContactInfoType $BookingRequestor
	 * @return docTypeRef_ShipType
	 */
	public function setBookingRequestor(?docTypeRef_ContactInfoType $BookingRequestor = null): docTypeRef_ShipType
	{
		$this->BookingRequestor = $BookingRequestor;
		return $this;
	}

	/**
	 * @return null|docTypeRef_ContactInfoType1
	 */
	public function getBuyer(): ?docTypeRef_ContactInfoType1
	{
		return $this->Buyer;
	}

	/**
	 * @param null|docTypeRef_ContactInfoType1 $Buyer
	 * @return docTypeRef_ShipType
	 */
	public function setBuyer(?docTypeRef_ContactInfoType1 $Buyer = null): docTypeRef_ShipType
	{
		$this->Buyer = $Buyer;
		return $this;
	}

	/**
	 * @return docTypeRef_ContactInfoType
	 */
	public function getRecipient(): ?docTypeRef_ContactInfoType
	{
		return $this->Recipient;
	}

	/**
	 * @param docTypeRef_ContactInfoType $Recipient
	 * @return docTypeRef_ShipType
	 */
	public function setRecipient(docTypeRef_ContactInfoType $Recipient): docTypeRef_ShipType
	{
		$this->Recipient = $Recipient;
		return $this;
	}

}
