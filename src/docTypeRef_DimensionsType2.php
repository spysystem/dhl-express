<?php
namespace DHLExpress;


/**
 * Class docTypeRef_DimensionsType2
 */
class docTypeRef_DimensionsType2
{

	/**
	 * @var string $Length
	 */
	protected $Length;

	/**
	 * @var string $Width
	 */
	protected $Width;

	/**
	 * @var string $Height
	 */
	protected $Height;

	/**
	 * @param string $Length
	 * @param string $Width
	 * @param string $Height
	 */
	public function __construct(string $Length, string $Width, string $Height)
	{
		$this->Length = $Length;
		$this->Width = $Width;
		$this->Height = $Height;
	}

	/**
	 * @return string
	 */
	public function getLength(): ?string
	{
		return $this->Length;
	}

	/**
	 * @param string $Length
	 * @return docTypeRef_DimensionsType2
	 */
	public function setLength(string $Length): docTypeRef_DimensionsType2
	{
		$this->Length = $Length;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getWidth(): ?string
	{
		return $this->Width;
	}

	/**
	 * @param string $Width
	 * @return docTypeRef_DimensionsType2
	 */
	public function setWidth(string $Width): docTypeRef_DimensionsType2
	{
		$this->Width = $Width;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getHeight(): ?string
	{
		return $this->Height;
	}

	/**
	 * @param string $Height
	 * @return docTypeRef_DimensionsType2
	 */
	public function setHeight(string $Height): docTypeRef_DimensionsType2
	{
		$this->Height = $Height;
		return $this;
	}

}
