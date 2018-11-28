<?php
namespace DHLExpress;


/**
 * Class docTypeRef_LabelImageType
 */
class docTypeRef_LabelImageType
{

	/**
	 * @var string $LabelImageFormat
	 */
	protected $LabelImageFormat;

	/**
	 * @var string $GraphicImage
	 */
	protected $GraphicImage;

	/**
	 * @var null|string $HTMLImage
	 */
	protected $HTMLImage;

	/**
	 * @param string $LabelImageFormat
	 * @param string $GraphicImage
	 */
	public function __construct(string $LabelImageFormat, string $GraphicImage)
	{
		$this->LabelImageFormat = $LabelImageFormat;
		$this->GraphicImage = $GraphicImage;
	}

	/**
	 * @return string
	 */
	public function getLabelImageFormat(): ?string
	{
		return $this->LabelImageFormat;
	}

	/**
	 * @param string $LabelImageFormat
	 * @return docTypeRef_LabelImageType
	 */
	public function setLabelImageFormat(string $LabelImageFormat): docTypeRef_LabelImageType
	{
		$this->LabelImageFormat = $LabelImageFormat;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getGraphicImage(): ?string
	{
		return $this->GraphicImage;
	}

	/**
	 * @param string $GraphicImage
	 * @return docTypeRef_LabelImageType
	 */
	public function setGraphicImage(string $GraphicImage): docTypeRef_LabelImageType
	{
		$this->GraphicImage = $GraphicImage;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getHTMLImage(): ?string
	{
		return $this->HTMLImage;
	}

	/**
	 * @param null|string $HTMLImage
	 * @return docTypeRef_LabelImageType
	 */
	public function setHTMLImage(?string $HTMLImage = null): docTypeRef_LabelImageType
	{
		$this->HTMLImage = $HTMLImage;
		return $this;
	}

}
