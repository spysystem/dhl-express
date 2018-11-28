<?php
namespace DHLExpress;


/**
 * Class ChargesType
 */
class ChargesType
{

	/**
	 * @var string $ChargeType
	 */
	protected $ChargeType;

	/**
	 * @var string $ChargeAmount
	 */
	protected $ChargeAmount;

	/**
	 * @var string $CurrencyCode
	 */
	protected $CurrencyCode;

	/**
	 * @param string $ChargeType
	 * @param string $ChargeAmount
	 * @param string $CurrencyCode
	 */
	public function __construct(string $ChargeType, string $ChargeAmount, string $CurrencyCode)
	{
		$this->ChargeType = $ChargeType;
		$this->ChargeAmount = $ChargeAmount;
		$this->CurrencyCode = $CurrencyCode;
	}

	/**
	 * @return string
	 */
	public function getChargeType(): ?string
	{
		return $this->ChargeType;
	}

	/**
	 * @param string $ChargeType
	 * @return ChargesType
	 */
	public function setChargeType(string $ChargeType): ChargesType
	{
		$this->ChargeType = $ChargeType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getChargeAmount(): ?string
	{
		return $this->ChargeAmount;
	}

	/**
	 * @param string $ChargeAmount
	 * @return ChargesType
	 */
	public function setChargeAmount(string $ChargeAmount): ChargesType
	{
		$this->ChargeAmount = $ChargeAmount;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCurrencyCode(): ?string
	{
		return $this->CurrencyCode;
	}

	/**
	 * @param string $CurrencyCode
	 * @return ChargesType
	 */
	public function setCurrencyCode(string $CurrencyCode): ChargesType
	{
		$this->CurrencyCode = $CurrencyCode;
		return $this;
	}

}
