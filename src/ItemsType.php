<?php
namespace DHLExpress;


/**
 * Class ItemsType
 */
class ItemsType
{

	/**
	 * @var ItemType[] $Item
	 */
	protected $Item;

	/**
	 * @param ItemType[] $Item
	 */
	public function __construct(array $Item)
	{
		$this->Item = $Item;
	}

	/**
	 * @return ItemType[]
	 */
	public function getItem(): ?array
	{
		return $this->Item;
	}

	/**
	 * @param ItemType[] $Item
	 * @return ItemsType
	 */
	public function setItem(array $Item): ItemsType
	{
		$this->Item = $Item;
		return $this;
	}

}
