<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ClientDetailType
 */
class docTypeRef_ClientDetailType
{

	/**
	 * @var null|string $sso
	 */
	protected $sso;

	/**
	 * @var null|string $plant
	 */
	protected $plant;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|string
	 */
	public function getSso(): ?string
	{
		return $this->sso;
	}

	/**
	 * @param null|string $sso
	 * @return docTypeRef_ClientDetailType
	 */
	public function setSso(string $sso = null): docTypeRef_ClientDetailType
	{
		$this->sso = $sso;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPlant(): ?string
	{
		return $this->plant;
	}

	/**
	 * @param null|string $plant
	 * @return docTypeRef_ClientDetailType
	 */
	public function setPlant(string $plant = null): docTypeRef_ClientDetailType
	{
		$this->plant = $plant;
		return $this;
	}

}
