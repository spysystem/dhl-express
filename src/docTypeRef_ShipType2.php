<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ShipType2
 */
class docTypeRef_ShipType2
{

	/**
	 * @var docTypeRef_AddressType2 $Shipper
	 */
	protected $Shipper;

	/**
	 * @var docTypeRef_AddressType2 $Recipient
	 */
	protected $Recipient;

	/**
	 * @param docTypeRef_AddressType2 $Shipper
	 * @param docTypeRef_AddressType2 $Recipient
	 */
	public function __construct(docTypeRef_AddressType2 $Shipper, docTypeRef_AddressType2 $Recipient)
	{
		$this->Shipper = $Shipper;
		$this->Recipient = $Recipient;
	}

	/**
	 * @return docTypeRef_AddressType2
	 */
	public function getShipper(): ?docTypeRef_AddressType2
	{
		return $this->Shipper;
	}

	/**
	 * @param docTypeRef_AddressType2 $Shipper
	 * @return docTypeRef_ShipType2
	 */
	public function setShipper(docTypeRef_AddressType2 $Shipper): docTypeRef_ShipType2
	{
		$this->Shipper = $Shipper;
		return $this;
	}

	/**
	 * @return docTypeRef_AddressType2
	 */
	public function getRecipient(): ?docTypeRef_AddressType2
	{
		return $this->Recipient;
	}

	/**
	 * @param docTypeRef_AddressType2 $Recipient
	 * @return docTypeRef_ShipType2
	 */
	public function setRecipient(docTypeRef_AddressType2 $Recipient): docTypeRef_ShipType2
	{
		$this->Recipient = $Recipient;
		return $this;
	}

}
