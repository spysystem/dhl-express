<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ItemsType
 */
class docTypeRef_ItemsType
{

	/**
	 * @var null|docTypeRef_ItemType[] $Item
	 */
	protected $Item;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|docTypeRef_ItemType[]
	 */
	public function getItem(): ?array
	{
		return $this->Item;
	}

	/**
	 * @param null|docTypeRef_ItemType[] $Item
	 * @return docTypeRef_ItemsType
	 */
	public function setItem(?array $Item = null): docTypeRef_ItemsType
	{
		$this->Item = $Item;
		return $this;
	}

}
