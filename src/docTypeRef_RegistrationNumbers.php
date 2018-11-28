<?php
namespace DHLExpress;


/**
 * Class docTypeRef_RegistrationNumbers
 */
class docTypeRef_RegistrationNumbers
{

	/**
	 * @var docTypeRef_RegistrationNumber[] $RegistrationNumber
	 */
	protected $RegistrationNumber;

	/**
	 * @param docTypeRef_RegistrationNumber[] $RegistrationNumber
	 */
	public function __construct(array $RegistrationNumber)
	{
		$this->RegistrationNumber = $RegistrationNumber;
	}

	/**
	 * @return docTypeRef_RegistrationNumber[]
	 */
	public function getRegistrationNumber(): ?array
	{
		return $this->RegistrationNumber;
	}

	/**
	 * @param docTypeRef_RegistrationNumber[] $RegistrationNumber
	 * @return docTypeRef_RegistrationNumbers
	 */
	public function setRegistrationNumber(array $RegistrationNumber): docTypeRef_RegistrationNumbers
	{
		$this->RegistrationNumber = $RegistrationNumber;
		return $this;
	}

}
