<?php

namespace DHLExpress;

/**
 * Class docTypeRef_TotalNetType
 *
 * @package DHLExpress
 */
class docTypeRef_TotalNetType
{

	/**
	 * @var string $Currency
	 */
	protected $Currency;

	/**
	 * @var string $Amount
	 */
	protected $Amount;

	/**
	 * @param string $Currency
	 * @param string $Amount
	 */
	public function __construct($Currency, $Amount)
	{
		$this->Currency = $Currency;
		$this->Amount = $Amount;
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
	 * @return \DHLExpress\docTypeRef_TotalNetType
	 */
	public function setCurrency($Currency)
	{
		$this->Currency = $Currency;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAmount()
	{
		return $this->Amount;
	}

	/**
	 * @param string $Amount
	 * @return \DHLExpress\docTypeRef_TotalNetType
	 */
	public function setAmount($Amount)
	{
		$this->Amount = $Amount;
		return $this;
	}

}
