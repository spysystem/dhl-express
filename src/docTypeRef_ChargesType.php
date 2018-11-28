<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ChargesType
 */
class docTypeRef_ChargesType
{

	/**
	 * @var string $Currency
	 */
	protected $Currency;

	/**
	 * @var docTypeRef_ChargeType[] $Charge
	 */
	protected $Charge;

	/**
	 * @param string $Currency
	 * @param docTypeRef_ChargeType[] $Charge
	 */
	public function __construct(string $Currency, array $Charge)
	{
		$this->Currency = $Currency;
		$this->Charge = $Charge;
	}

	/**
	 * @return string
	 */
	public function getCurrency(): ?string
	{
		return $this->Currency;
	}

	/**
	 * @param string $Currency
	 * @return docTypeRef_ChargesType
	 */
	public function setCurrency(string $Currency): docTypeRef_ChargesType
	{
		$this->Currency = $Currency;
		return $this;
	}

	/**
	 * @return docTypeRef_ChargeType[]
	 */
	public function getCharge(): ?array
	{
		return $this->Charge;
	}

	/**
	 * @param docTypeRef_ChargeType[] $Charge
	 * @return docTypeRef_ChargesType
	 */
	public function setCharge(array $Charge): docTypeRef_ChargesType
	{
		$this->Charge = $Charge;
		return $this;
	}

}
