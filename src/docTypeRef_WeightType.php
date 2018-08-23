<?php

namespace DHLExpress;

/**
 * Class docTypeRef_WeightType
 *
 * @package DHLExpress
 */
class docTypeRef_WeightType
{

	/**
	 * @var string $Value
	 */
	protected $Value;

	/**
	 * @param string $Value
	 */
	public function __construct($Value)
	{
		$this->Value = $Value;
	}

	/**
	 * @return string
	 */
	public function getValue()
	{
		return $this->Value;
	}

	/**
	 * @param string $Value
	 * @return \DHLExpress\docTypeRef_WeightType
	 */
	public function setValue($Value)
	{
		$this->Value = $Value;
		return $this;
	}

}
