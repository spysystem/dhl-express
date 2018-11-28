<?php
namespace DHLExpress;


/**
 * Class docTypeRef_WeightType
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
	public function __construct(string $Value)
	{
		$this->Value = $Value;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string
	{
		return $this->Value;
	}

	/**
	 * @param string $Value
	 * @return docTypeRef_WeightType
	 */
	public function setValue(string $Value): docTypeRef_WeightType
	{
		$this->Value = $Value;
		return $this;
	}

}
