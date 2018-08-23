<?php

namespace DHLExpress;

/**
 * Class docTypeRef_ShipType2
 *
 * @package DHLExpress
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
	public function __construct($Shipper, $Recipient)
	{
		$this->Shipper = $Shipper;
		$this->Recipient = $Recipient;
	}

	/**
	 * @return docTypeRef_AddressType2
	 */
	public function getShipper()
	{
		return $this->Shipper;
	}

	/**
	 * @param docTypeRef_AddressType2 $Shipper
	 * @return \DHLExpress\docTypeRef_ShipType2
	 */
	public function setShipper($Shipper)
	{
		$this->Shipper = $Shipper;
		return $this;
	}

	/**
	 * @return docTypeRef_AddressType2
	 */
	public function getRecipient()
	{
		return $this->Recipient;
	}

	/**
	 * @param docTypeRef_AddressType2 $Recipient
	 * @return \DHLExpress\docTypeRef_ShipType2
	 */
	public function setRecipient($Recipient)
	{
		$this->Recipient = $Recipient;
		return $this;
	}

}
