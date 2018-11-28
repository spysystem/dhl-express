<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ContactInfoType1
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
	public function __construct(docTypeRef_ContactType1 $Contact, docTypeRef_AddressType1 $Address)
	{
		$this->Contact = $Contact;
		$this->Address = $Address;
	}

	/**
	 * @return docTypeRef_ContactType1
	 */
	public function getContact(): ?docTypeRef_ContactType1
	{
		return $this->Contact;
	}

	/**
	 * @param docTypeRef_ContactType1 $Contact
	 * @return docTypeRef_ContactInfoType1
	 */
	public function setContact(docTypeRef_ContactType1 $Contact): docTypeRef_ContactInfoType1
	{
		$this->Contact = $Contact;
		return $this;
	}

	/**
	 * @return docTypeRef_AddressType1
	 */
	public function getAddress(): ?docTypeRef_AddressType1
	{
		return $this->Address;
	}

	/**
	 * @param docTypeRef_AddressType1 $Address
	 * @return docTypeRef_ContactInfoType1
	 */
	public function setAddress(docTypeRef_AddressType1 $Address): docTypeRef_ContactInfoType1
	{
		$this->Address = $Address;
		return $this;
	}

}
