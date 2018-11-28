<?php
namespace DHLExpress;


/**
 * Class docTypeRef_AddressType2
 */
class docTypeRef_AddressType2
{

	/**
	 * @var null|string $StreetLines
	 */
	protected $StreetLines;

	/**
	 * @var null|string $StreetLines2
	 */
	protected $StreetLines2;

	/**
	 * @var null|string $StreetLines3
	 */
	protected $StreetLines3;

	/**
	 * @var null|string $StreetName
	 */
	protected $StreetName;

	/**
	 * @var null|string $StreetNumber
	 */
	protected $StreetNumber;

	/**
	 * @var string $City
	 */
	protected $City;

	/**
	 * @var null|string $CityDistrict
	 */
	protected $CityDistrict;

	/**
	 * @var null|string $StateOrProvinceCode
	 */
	protected $StateOrProvinceCode;

	/**
	 * @var string $PostalCode
	 */
	protected $PostalCode;

	/**
	 * @var string $CountryCode
	 */
	protected $CountryCode;

	/**
	 * @var null|docTypeRef_ContactType $Contact
	 */
	protected $Contact;

	/**
	 * @param string $City
	 * @param string $PostalCode
	 * @param string $CountryCode
	 */
	public function __construct(string $City, string $PostalCode, string $CountryCode)
	{
		$this->City = $City;
		$this->PostalCode = $PostalCode;
		$this->CountryCode = $CountryCode;
	}

	/**
	 * @return null|string
	 */
	public function getStreetLines(): ?string
	{
		return $this->StreetLines;
	}

	/**
	 * @param null|string $StreetLines
	 * @return docTypeRef_AddressType2
	 */
	public function setStreetLines(?string $StreetLines = null): docTypeRef_AddressType2
	{
		$this->StreetLines = $StreetLines;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getStreetLines2(): ?string
	{
		return $this->StreetLines2;
	}

	/**
	 * @param null|string $StreetLines2
	 * @return docTypeRef_AddressType2
	 */
	public function setStreetLines2(?string $StreetLines2 = null): docTypeRef_AddressType2
	{
		$this->StreetLines2 = $StreetLines2;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getStreetLines3(): ?string
	{
		return $this->StreetLines3;
	}

	/**
	 * @param null|string $StreetLines3
	 * @return docTypeRef_AddressType2
	 */
	public function setStreetLines3(?string $StreetLines3 = null): docTypeRef_AddressType2
	{
		$this->StreetLines3 = $StreetLines3;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getStreetName(): ?string
	{
		return $this->StreetName;
	}

	/**
	 * @param null|string $StreetName
	 * @return docTypeRef_AddressType2
	 */
	public function setStreetName(?string $StreetName = null): docTypeRef_AddressType2
	{
		$this->StreetName = $StreetName;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getStreetNumber(): ?string
	{
		return $this->StreetNumber;
	}

	/**
	 * @param null|string $StreetNumber
	 * @return docTypeRef_AddressType2
	 */
	public function setStreetNumber(?string $StreetNumber = null): docTypeRef_AddressType2
	{
		$this->StreetNumber = $StreetNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCity(): ?string
	{
		return $this->City;
	}

	/**
	 * @param string $City
	 * @return docTypeRef_AddressType2
	 */
	public function setCity(string $City): docTypeRef_AddressType2
	{
		$this->City = $City;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCityDistrict(): ?string
	{
		return $this->CityDistrict;
	}

	/**
	 * @param null|string $CityDistrict
	 * @return docTypeRef_AddressType2
	 */
	public function setCityDistrict(?string $CityDistrict = null): docTypeRef_AddressType2
	{
		$this->CityDistrict = $CityDistrict;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getStateOrProvinceCode(): ?string
	{
		return $this->StateOrProvinceCode;
	}

	/**
	 * @param null|string $StateOrProvinceCode
	 * @return docTypeRef_AddressType2
	 */
	public function setStateOrProvinceCode(?string $StateOrProvinceCode = null): docTypeRef_AddressType2
	{
		$this->StateOrProvinceCode = $StateOrProvinceCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPostalCode(): ?string
	{
		return $this->PostalCode;
	}

	/**
	 * @param string $PostalCode
	 * @return docTypeRef_AddressType2
	 */
	public function setPostalCode(string $PostalCode): docTypeRef_AddressType2
	{
		$this->PostalCode = $PostalCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountryCode(): ?string
	{
		return $this->CountryCode;
	}

	/**
	 * @param string $CountryCode
	 * @return docTypeRef_AddressType2
	 */
	public function setCountryCode(string $CountryCode): docTypeRef_AddressType2
	{
		$this->CountryCode = $CountryCode;
		return $this;
	}

	/**
	 * @return null|docTypeRef_ContactType
	 */
	public function getContact(): ?docTypeRef_ContactType
	{
		return $this->Contact;
	}

	/**
	 * @param null|docTypeRef_ContactType $Contact
	 * @return docTypeRef_AddressType2
	 */
	public function setContact(?docTypeRef_ContactType $Contact = null): docTypeRef_AddressType2
	{
		$this->Contact = $Contact;
		return $this;
	}

}
