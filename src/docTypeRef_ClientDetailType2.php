<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ClientDetailType2
 */
class docTypeRef_ClientDetailType2
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
	 * @return docTypeRef_ClientDetailType2
	 */
	public function setSso(string $sso = null): docTypeRef_ClientDetailType2
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
	 * @return docTypeRef_ClientDetailType2
	 */
	public function setPlant(string $plant = null): docTypeRef_ClientDetailType2
	{
		$this->plant = $plant;
		return $this;
	}

}
