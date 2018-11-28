<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ContactInfoType
 */
class docTypeRef_ContactInfoType
{

	/**
	 * @var docTypeRef_ContactType $Contact
	 */
	protected $Contact;

	/**
	 * @var docTypeRef_AddressType $Address
	 */
	protected $Address;

	/**
	 * @var null|docTypeRef_RegistrationNumbers $RegistrationNumbers
	 */
	protected $RegistrationNumbers;

	/**
	 * @param docTypeRef_ContactType $Contact
	 * @param docTypeRef_AddressType $Address
	 */
	public function __construct(docTypeRef_ContactType $Contact, docTypeRef_AddressType $Address)
	{
		$this->Contact = $Contact;
		$this->Address = $Address;
	}

	/**
	 * @return docTypeRef_ContactType
	 */
	public function getContact(): ?docTypeRef_ContactType
	{
		return $this->Contact;
	}

	/**
	 * @param docTypeRef_ContactType $Contact
	 * @return docTypeRef_ContactInfoType
	 */
	public function setContact(docTypeRef_ContactType $Contact): docTypeRef_ContactInfoType
	{
		$this->Contact = $Contact;
		return $this;
	}

	/**
	 * @return docTypeRef_AddressType
	 */
	public function getAddress(): ?docTypeRef_AddressType
	{
		return $this->Address;
	}

	/**
	 * @param docTypeRef_AddressType $Address
	 * @return docTypeRef_ContactInfoType
	 */
	public function setAddress(docTypeRef_AddressType $Address): docTypeRef_ContactInfoType
	{
		$this->Address = $Address;
		return $this;
	}

	/**
	 * @return null|docTypeRef_RegistrationNumbers
	 */
	public function getRegistrationNumbers(): ?docTypeRef_RegistrationNumbers
	{
		return $this->RegistrationNumbers;
	}

	/**
	 * @param null|docTypeRef_RegistrationNumbers $RegistrationNumbers
	 * @return docTypeRef_ContactInfoType
	 */
	public function setRegistrationNumbers(?docTypeRef_RegistrationNumbers $RegistrationNumbers = null): docTypeRef_ContactInfoType
	{
		$this->RegistrationNumbers = $RegistrationNumbers;
		return $this;
	}

}
