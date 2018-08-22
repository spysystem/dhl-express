<?php

namespace DHLExpress;

class docTypeRef_ContactInfoType
{

	/**
	 * @var docTypeRef_ContactType $Contact
	 */
	protected $Contact = null;

	/**
	 * @var docTypeRef_AddressType $Address
	 */
	protected $Address = null;

	/**
	 * @var docTypeRef_RegistrationNumbers $RegistrationNumbers
	 */
	protected $RegistrationNumbers = null;

	/**
	 * @param docTypeRef_ContactType $Contact
	 * @param docTypeRef_AddressType $Address
	 */
	public function __construct($Contact, $Address)
	{
		$this->Contact = $Contact;
		$this->Address = $Address;
	}

	/**
	 * @return docTypeRef_ContactType
	 */
	public function getContact()
	{
		return $this->Contact;
	}

	/**
	 * @param docTypeRef_ContactType $Contact
	 * @return \DHLExpress\docTypeRef_ContactInfoType
	 */
	public function setContact($Contact)
	{
		$this->Contact = $Contact;
		return $this;
	}

	/**
	 * @return docTypeRef_AddressType
	 */
	public function getAddress()
	{
		return $this->Address;
	}

	/**
	 * @param docTypeRef_AddressType $Address
	 * @return \DHLExpress\docTypeRef_ContactInfoType
	 */
	public function setAddress($Address)
	{
		$this->Address = $Address;
		return $this;
	}

	/**
	 * @return docTypeRef_RegistrationNumbers
	 */
	public function getRegistrationNumbers()
	{
		return $this->RegistrationNumbers;
	}

	/**
	 * @param docTypeRef_RegistrationNumbers $RegistrationNumbers
	 * @return \DHLExpress\docTypeRef_ContactInfoType
	 */
	public function setRegistrationNumbers($RegistrationNumbers)
	{
		$this->RegistrationNumbers = $RegistrationNumbers;
		return $this;
	}

}
