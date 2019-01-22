<?php
namespace DHLExpress;


/**
 * Class docTypeRef_PackagesType
 */
class docTypeRef_PackagesType
{

	/**
	 * @var docTypeRef_RequestedPackagesType $RequestedPackages
	 */
	protected $RequestedPackages;

	/**
	 * @param docTypeRef_RequestedPackagesType $RequestedPackages
	 */
	public function __construct($RequestedPackages)
	{
		$this->RequestedPackages = $RequestedPackages;
	}

	/**
	 * @return null|docTypeRef_RequestedPackagesType
	 */
	public function getRequestedPackages(): ?docTypeRef_RequestedPackagesType
	{
		return $this->RequestedPackages;
	}

	/**
	 * @param null|docTypeRef_RequestedPackagesType $RequestedPackages
	 * @return docTypeRef_PackagesType
	 */
	public function setRequestedPackages(?docTypeRef_RequestedPackagesType $RequestedPackages): docTypeRef_PackagesType
	{
		$this->RequestedPackages = $RequestedPackages;
		return $this;
	}

}
