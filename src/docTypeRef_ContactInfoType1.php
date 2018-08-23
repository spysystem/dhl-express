<?php

namespace DHLExpress;

/**
 * Class docTypeRef_ContactInfoType1
 *
 * @package DHLExpress
 */
class docTypeRef_ContactInfoType1
{

	/**
	 * @var docTypeRef_ContactType1 $Contact
	 */
	protected $Contact;

	/**
	 * @var docTypeRef_AddressType1 $Address
	 */
	protected $Address;

	/**
	 * @param docTypeRef_ContactType1 $Contact
	 * @param docTypeRef_AddressType1 $Address
	 */
	public function __construct($Contact, $Address)
	{
		$this->Contact = $Contact;
		$this->Address = $Address;
	}

	/**
	 * @return docTypeRef_ContactType1
	 */
	public function getContact()
	{
		return $this->Contact;
	}

	/**
	 * @param docTypeRef_ContactType1 $Contact
	 * @return \DHLExpress\docTypeRef_ContactInfoType1
	 */
	public function setContact($Contact)
	{
		$this->Contact = $Contact;
		return $this;
	}

	/**
	 * @return docTypeRef_AddressType1
	 */
	public function getAddress()
	{
		return $this->Address;
	}

	/**
	 * @param docTypeRef_AddressType1 $Address
	 * @return \DHLExpress\docTypeRef_ContactInfoType1
	 */
	public function setAddress($Address)
	{
		$this->Address = $Address;
		return $this;
	}

}
