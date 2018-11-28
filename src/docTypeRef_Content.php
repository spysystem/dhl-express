<?php
namespace DHLExpress;


/**
 * Class docTypeRef_Content
 */
class docTypeRef_Content
{

	/**
	 * @var string $ContentID
	 */
	protected $ContentID;

	/**
	 * @var string $DryIceTotalNetWeight
	 */
	protected $DryIceTotalNetWeight;

	/**
	 * @var string $UNCode
	 */
	protected $UNCode;

	/**
	 * @param string $ContentID
	 * @param string $DryIceTotalNetWeight
	 * @param string $UNCode
	 */
	public function __construct(string $ContentID, string $DryIceTotalNetWeight, string $UNCode)
	{
		$this->ContentID = $ContentID;
		$this->DryIceTotalNetWeight = $DryIceTotalNetWeight;
		$this->UNCode = $UNCode;
	}

	/**
	 * @return string|null
	 */
	public function getContentID(): ?string
	{
		return $this->ContentID;
	}

	/**
	 * @param string $ContentID
	 * @return docTypeRef_Content
	 */
	public function setContentID(string $ContentID): docTypeRef_Content
	{
		$this->ContentID = $ContentID;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getDryIceTotalNetWeight(): ?string
	{
		return $this->DryIceTotalNetWeight;
	}

	/**
	 * @param string $DryIceTotalNetWeight
	 * @return docTypeRef_Content
	 */
	public function setDryIceTotalNetWeight(string $DryIceTotalNetWeight): docTypeRef_Content
	{
		$this->DryIceTotalNetWeight = $DryIceTotalNetWeight;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUNCode(): ?string
	{
		return $this->UNCode;
	}

	/**
	 * @param string $UNCode
	 * @return docTypeRef_Content
	 */
	public function setUNCode(string $UNCode): docTypeRef_Content
	{
		$this->UNCode = $UNCode;
		return $this;
	}

}
