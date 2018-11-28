<?php
namespace DHLExpress;


/**
 * Class GoodsCharacteristicsType
 */
class GoodsCharacteristicsType
{

	/**
	 * @var GoodsCharacteristicType[] $GoodsCharacteristic
	 */
	protected $GoodsCharacteristic;

	/**
	 * @param GoodsCharacteristicType[] $GoodsCharacteristic
	 */
	public function __construct(array $GoodsCharacteristic)
	{
		$this->GoodsCharacteristic = $GoodsCharacteristic;
	}

	/**
	 * @return GoodsCharacteristicType[]
	 */
	public function getGoodsCharacteristic(): ?array
	{
		return $this->GoodsCharacteristic;
	}

	/**
	 * @param GoodsCharacteristicType[] $GoodsCharacteristic
	 * @return GoodsCharacteristicsType
	 */
	public function setGoodsCharacteristic(array $GoodsCharacteristic): GoodsCharacteristicsType
	{
		$this->GoodsCharacteristic = $GoodsCharacteristic;
		return $this;
	}

}
