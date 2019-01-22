<?php
namespace DHLExpress;


/**
 * Class docTypeRef_PackagesType
 */
class docTypeRef_PackagesType
{

	/**
	 * @var docTypeRef_RequestedPackagesType[] $RequestedPackages
	 */
	protected $RequestedPackages;

	/**
	 * @param docTypeRef_RequestedPackagesType[] $RequestedPackages
	 */
	public function __construct(array $RequestedPackages)
	{
		$this->RequestedPackages = $RequestedPackages;
	}

	/**
	 * @return null|docTypeRef_RequestedPackagesType[]
	 */
	public function getRequestedPackages(): ?array
	{
		return $this->RequestedPackages;
	}

	/**
	 * @param null|docTypeRef_RequestedPackagesType[] $RequestedPackages
	 * @return docTypeRef_PackagesType
	 */
	public function setRequestedPackages(?array $RequestedPackages): docTypeRef_PackagesType
	{
		$this->RequestedPackages = $RequestedPackages;
		return $this;
	}

}
