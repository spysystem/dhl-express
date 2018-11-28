<?php
namespace DHLExpress;


/**
 * Class GoodsCharacteristicType
 */
class GoodsCharacteristicType
{

	/**
	 * @var string $CharacteristicCode
	 */
	protected $CharacteristicCode;

	/**
	 * @var string $CharacteristicValue
	 */
	protected $CharacteristicValue;

	/**
	 * @param string $CharacteristicCode
	 * @param string $CharacteristicValue
	 */
	public function __construct(string $CharacteristicCode, string $CharacteristicValue)
	{
		$this->CharacteristicCode = $CharacteristicCode;
		$this->CharacteristicValue = $CharacteristicValue;
	}

	/**
	 * @return string
	 */
	public function getCharacteristicCode(): ?string
	{
		return $this->CharacteristicCode;
	}

	/**
	 * @param string $CharacteristicCode
	 * @return GoodsCharacteristicType
	 */
	public function setCharacteristicCode(string $CharacteristicCode): GoodsCharacteristicType
	{
		$this->CharacteristicCode = $CharacteristicCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCharacteristicValue(): ?string
	{
		return $this->CharacteristicValue;
	}

	/**
	 * @param string $CharacteristicValue
	 * @return GoodsCharacteristicType
	 */
	public function setCharacteristicValue(string $CharacteristicValue): GoodsCharacteristicType
	{
		$this->CharacteristicValue = $CharacteristicValue;
		return $this;
	}

}
