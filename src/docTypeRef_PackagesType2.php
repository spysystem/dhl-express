<?php
namespace DHLExpress;


/**
 * Class docTypeRef_PackagesType2
 */
class docTypeRef_PackagesType2
{

	/**
	 * @var docTypeRef_RequestedPackagesType2[] $RequestedPackages
	 */
	protected $RequestedPackages;

	/**
	 * @param docTypeRef_RequestedPackagesType2[] $RequestedPackages
	 */
	public function __construct(array $RequestedPackages)
	{
		$this->RequestedPackages = $RequestedPackages;
	}

	/**
	 * @return null|docTypeRef_RequestedPackagesType2[]
	 */
	public function getRequestedPackages(): ?array
	{
		return $this->RequestedPackages;
	}

	/**
	 * @param null|docTypeRef_RequestedPackagesType2[] $RequestedPackages
	 * @return docTypeRef_PackagesType2
	 */
	public function setRequestedPackages(?array $RequestedPackages): docTypeRef_PackagesType2
	{
		$this->RequestedPackages = $RequestedPackages;
		return $this;
	}

}
