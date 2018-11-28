<?php
namespace DHLExpress;


/**
 * Class docTypeRef_InternationDetailType
 */
class docTypeRef_InternationDetailType
{

	/**
	 * @var docTypeRef_CommoditiesType $Commodities
	 */
	protected $Commodities;

	/**
	 * @var null|string|Content $Content
	 */
	protected $Content;

	/**
	 * @var null|string $ExportReference
	 */
	protected $ExportReference;

	/**
	 * @param docTypeRef_CommoditiesType $Commodities
	 */
	public function __construct(docTypeRef_CommoditiesType $Commodities)
	{
		$this->Commodities = $Commodities;
	}

	/**
	 * @return docTypeRef_CommoditiesType
	 */
	public function getCommodities(): ?docTypeRef_CommoditiesType
	{
		return $this->Commodities;
	}

	/**
	 * @param docTypeRef_CommoditiesType $Commodities
	 * @return docTypeRef_InternationDetailType
	 */
	public function setCommodities(docTypeRef_CommoditiesType $Commodities): docTypeRef_InternationDetailType
	{
		$this->Commodities = $Commodities;
		return $this;
	}

	/**
	 * @return null|string|Content
	 */
	public function getContent()
	{
		return $this->Content;
	}

	/**
	 * @param null|string|Content $Content
	 * @return docTypeRef_InternationDetailType
	 */
	public function setContent($Content): docTypeRef_InternationDetailType
	{
		$this->Content = $Content;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getExportReference(): ?string
	{
		return $this->ExportReference;
	}

	/**
	 * @param null|string $ExportReference
	 * @return docTypeRef_InternationDetailType
	 */
	public function setExportReference(?string $ExportReference = null): docTypeRef_InternationDetailType
	{
		$this->ExportReference = $ExportReference;
		return $this;
	}

}
