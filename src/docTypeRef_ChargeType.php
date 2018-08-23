<?php

namespace DHLExpress;

/**
 * Class docTypeRef_ChargeType
 *
 * @package DHLExpress
 */
class docTypeRef_ChargeType
{

	/**
	 * @var string $ChargeCode
	 */
	protected $ChargeCode;

	/**
	 * @var string $ChargeType
	 */
	protected $ChargeType;

	/**
	 * @var string $ChargeAmount
	 */
	protected $ChargeAmount;

	/**
	 * @param string $ChargeType
	 * @param string $ChargeAmount
	 */
	public function __construct($ChargeType, $ChargeAmount)
	{
		$this->ChargeType = $ChargeType;
		$this->ChargeAmount = $ChargeAmount;
	}

	/**
	 * @return string
	 */
	public function getChargeCode()
	{
		return $this->ChargeCode;
	}

	/**
	 * @param string $ChargeCode
	 * @return \DHLExpress\docTypeRef_ChargeType
	 */
	public function setChargeCode($ChargeCode)
	{
		$this->ChargeCode = $ChargeCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getChargeType()
	{
		return $this->ChargeType;
	}

	/**
	 * @param string $ChargeType
	 * @return \DHLExpress\docTypeRef_ChargeType
	 */
	public function setChargeType($ChargeType)
	{
		$this->ChargeType = $ChargeType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getChargeAmount()
	{
		return $this->ChargeAmount;
	}

	/**
	 * @param string $ChargeAmount
	 * @return \DHLExpress\docTypeRef_ChargeType
	 */
	public function setChargeAmount($ChargeAmount)
	{
		$this->ChargeAmount = $ChargeAmount;
		return $this;
	}

}
