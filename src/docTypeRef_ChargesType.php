<?php

namespace DHLExpress;

/**
 * Class docTypeRef_ChargesType
 *
 * @package DHLExpress
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
	public function __construct($Currency, array $Charge)
	{
		$this->Currency = $Currency;
		$this->Charge = $Charge;
	}

	/**
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}

	/**
	 * @param string $Currency
	 * @return \DHLExpress\docTypeRef_ChargesType
	 */
	public function setCurrency($Currency)
	{
		$this->Currency = $Currency;
		return $this;
	}

	/**
	 * @return docTypeRef_ChargeType[]
	 */
	public function getCharge()
	{
		return $this->Charge;
	}

	/**
	 * @param docTypeRef_ChargeType[] $Charge
	 * @return \DHLExpress\docTypeRef_ChargesType
	 */
	public function setCharge(array $Charge)
	{
		$this->Charge = $Charge;
		return $this;
	}

}
