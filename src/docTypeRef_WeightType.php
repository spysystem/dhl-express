<?php

namespace DHLExpress;

class docTypeRef_WeightType
{

	/**
	 * @var Value $Value
	 */
	protected $Value = null;

	/**
	 * @param Value $Value
	 */
	public function __construct($Value)
	{
		$this->Value = $Value;
	}

	/**
	 * @return Value
	 */
	public function getValue()
	{
		return $this->Value;
	}

	/**
	 * @param Value $Value
	 * @return \DHLExpress\docTypeRef_WeightType
	 */
	public function setValue($Value)
	{
		$this->Value = $Value;
		return $this;
	}

}
