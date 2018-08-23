<?php
namespace DHLExpress;

use SimpleXMLElement;
use SoapHeader;
use SoapVar;

/**
 * Class GblExpressRateBook
 *
 * @package DHLExpress
 */
class GblExpressRateBook extends \SoapClient
{
	public const WsdlUrl						= 'https://wsbexpress.dhl.com/sndpt/expressRateBook?WSDL';
	private const NS_WSS_WSSecurity_SecExt		= 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
	private const NS_WSS_WSSecurity_Utility		= 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd';
	private const NS_WSS_UsernameTokenProfile	= 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText';
	private const NS_WSS_SOAPMessageSecurity	= 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-soap-message-security-1.0#Base64Binary';

	/**
	 * @var array $arrClassMap The defined classes
	 */
	private static $arrClassMap = [
		'docTypeRef_ProcessShipmentRequestType'	=> docTypeRef_ProcessShipmentRequestType::class,
		'docTypeRef_ClientDetailType2'			=> docTypeRef_ClientDetailType2::class,
		'docTypeRef_Content'					=> docTypeRef_Content::class,
		'docTypeRef_DangerousGoods'				=> docTypeRef_DangerousGoods::class,
		'docTypeRef_RequestedShipmentType'		=> docTypeRef_RequestedShipmentType::class,
		'docTypeRef_ShipmentInfoType'			=> docTypeRef_ShipmentInfoType::class,
		'docTypeRef_InternationDetailType'		=> docTypeRef_InternationDetailType::class,
		'docTypeRef_CommoditiesType'			=> docTypeRef_CommoditiesType::class,
		'docTypeRef_OnDemandDeliveryOptions'	=> docTypeRef_OnDemandDeliveryOptions::class,
		'docTypeRef_ShipType'					=> docTypeRef_ShipType::class,
		'docTypeRef_ContactInfoType'			=> docTypeRef_ContactInfoType::class,
		'docTypeRef_ContactInfoType1'			=> docTypeRef_ContactInfoType1::class,
		'docTypeRef_ContactType'				=> docTypeRef_ContactType::class,
		'docTypeRef_ContactType1'				=> docTypeRef_ContactType1::class,
		'docTypeRef_AddressType'				=> docTypeRef_AddressType::class,
		'docTypeRef_AddressType1'				=> docTypeRef_AddressType1::class,
		'docTypeRef_RegistrationNumbers'		=> docTypeRef_RegistrationNumbers::class,
		'docTypeRef_RegistrationNumber'			=> docTypeRef_RegistrationNumber::class,
		'docTypeRef_PackagesType'				=> docTypeRef_PackagesType::class,
		'docTypeRef_RequestedPackagesType'		=> docTypeRef_RequestedPackagesType::class,
		'docTypeRef_DimensionsType'				=> docTypeRef_DimensionsType::class,
		'Billing'								=> Billing::class,
		'Services'								=> Services::class,
		'Service'								=> Service::class,
		'docTypeRef_RateRequestType'			=> docTypeRef_RateRequestType::class,
		'docTypeRef_ClientDetailType3'			=> docTypeRef_ClientDetailType3::class,
		'docTypeRef_RequestedShipmentType2'		=> docTypeRef_RequestedShipmentType2::class,
		'docTypeRef_ShipType2'					=> docTypeRef_ShipType2::class,
		'docTypeRef_AddressType2'				=> docTypeRef_AddressType2::class,
		'docTypeRef_PackagesType2'				=> docTypeRef_PackagesType2::class,
		'docTypeRef_RequestedPackagesType2'		=> docTypeRef_RequestedPackagesType2::class,
		'docTypeRef_WeightType'					=> docTypeRef_WeightType::class,
		'docTypeRef_DimensionsType2'			=> docTypeRef_DimensionsType2::class,
		'Billing2'								=> Billing2::class,
		'Services2'								=> Services2::class,
		'Service2'								=> Service2::class,
		'docTypeRef_DeleteResponseType'			=> docTypeRef_DeleteResponseType::class,
		'docTypeRef_NotificationType'			=> docTypeRef_NotificationType::class,
		'docTypeRef_DeleteRequestType'			=> docTypeRef_DeleteRequestType::class,
		'docTypeRef_ClientDetailType'			=> docTypeRef_ClientDetailType::class,
		'docTypeRef_RateResponseType'			=> docTypeRef_RateResponseType::class,
		'docTypeRef_ProviderType'				=> docTypeRef_ProviderType::class,
		'docTypeRef_NotificationType3'			=> docTypeRef_NotificationType3::class,
		'docTypeRef_ServiceType'				=> docTypeRef_ServiceType::class,
		'docTypeRef_TotalNetType'				=> docTypeRef_TotalNetType::class,
		'docTypeRef_ChargesType'				=> docTypeRef_ChargesType::class,
		'docTypeRef_ChargeType'					=> docTypeRef_ChargeType::class,
		'docTypeRef_ShipmentDetailType'			=> docTypeRef_ShipmentDetailType::class,
		'docTypeRef_NotificationType2'			=> docTypeRef_NotificationType2::class,
		'docTypeRef_PackagesResultsType'		=> docTypeRef_PackagesResultsType::class,
		'docTypeRef_PackageResultType'			=> docTypeRef_PackageResultType::class,
		'docTypeRef_LabelImageType'				=> docTypeRef_LabelImageType::class,
	];

	/**
	 * @param string $strUserName
	 * @param string $strPassword
	 * @param string $strAccountNo
	 *
	 * @return GblExpressRateBook
	 * @throws NoWsdlUrlFoundException
	 */
	public static function Create(string $strUserName, string $strPassword, string $strAccountNo): GblExpressRateBook
	{
		$oClient	= new static([
			'trace'			=> true,
			'exceptions'	=> true,
			'soap_version'	=> 2,
			'encoding'		=> 'UTF-8',
			'features'		=> 1,
		]);

		return $oClient->setAuthenticationHeader($strUserName, $strPassword, $strAccountNo);
	}

	/**
	 * @param string $strWsdl The wsdl file to use
	 * @param array $arrOptions A array of config values
	 * @throws NoWsdlUrlFoundException
	 */
	public function __construct(array $arrOptions = [], string $strWsdl = self::WsdlUrl)
	{
		if ($strWsdl === '')
		{
			throw new NoWsdlUrlFoundException('Missing WSDL!');
		}
		foreach (self::$arrClassMap as $strKey => $mValue)
		{
			if (!isset($arrOptions['classmap'][$strKey]))
			{
				$arrOptions['classmap'][$strKey]	= $mValue;
			}
		}
		parent::__construct($strWsdl, $arrOptions);
	}

	/**
	 * @param docTypeRef_ProcessShipmentRequestType $oParameters
	 *
	 * @return docTypeRef_ShipmentDetailType
	 */
	public function createShipmentRequest(docTypeRef_ProcessShipmentRequestType $oParameters): docTypeRef_ShipmentDetailType
	{
		return $this->__soapCall('createShipmentRequest', [$oParameters]);
	}

	/**
	 * @param docTypeRef_RateRequestType $oParameters
	 *
	 * @return docTypeRef_RateResponseType
	 */
	public function getRateRequest(docTypeRef_RateRequestType $oParameters): docTypeRef_RateResponseType
	{
		return $this->__soapCall('getRateRequest', [$oParameters]);
	}

	/**
	 * @param docTypeRef_DeleteRequestType $oParameters
	 *
	 * @return docTypeRef_DeleteResponseType
	 */
	public function deleteShipmentRequest(docTypeRef_DeleteRequestType $oParameters): docTypeRef_DeleteResponseType
	{
		return $this->__soapCall('deleteShipmentRequest', [$oParameters]);
	}

	/**
	 * @param string $strUserName
	 * @param string $strPassword
	 * @param string $strAccountNo
	 *
	 * @return GblExpressRateBook
	 */
	private function setAuthenticationHeader(string $strUserName, string $strPassword, string $strAccountNo): GblExpressRateBook
	{
		$strCreatedDateTime	= gmdate('Y-m-d\TH:i:s\Z');
		$strExpiresDateTime	= gmdate('Y-m-d\TH:i:s\Z', gmdate('U') + 180); //only necessary if using the timestamp element

		// Generating and encoding a random number
		$iSimpleNonce		= mt_rand();
		$strEncodedNonce	= base64_encode($iSimpleNonce);

		// Creating WSS identification header using SimpleXML
		$oXML		= new SimpleXMLElement('<root/>');

		$oSecurity	= $oXML->addChild('wsse:Security', null, self::NS_WSS_WSSecurity_SecExt);

		//the timestamp element is not required by all servers
		$oTimeStamp	= $oSecurity->addChild('wsu:Timestamp', null, self::NS_WSS_WSSecurity_Utility);
		$oTimeStamp->addChild('wsu:Created', $strCreatedDateTime, self::NS_WSS_WSSecurity_Utility);
		$oTimeStamp->addChild('wsu:Expires', $strExpiresDateTime, self::NS_WSS_WSSecurity_Utility);

		$oUserNameToken	= $oSecurity->addChild('wsse:UsernameToken', null, self::NS_WSS_WSSecurity_SecExt);
		$oUserNameToken->addAttribute('wsu:Id', $strAccountNo, self::NS_WSS_WSSecurity_Utility);
		$oUserNameToken->addChild('wsse:Username', $strUserName, self::NS_WSS_WSSecurity_SecExt);
		$oUserNameToken->addChild('wsse:Password', $strPassword, self::NS_WSS_WSSecurity_SecExt)->addAttribute('Type', self::NS_WSS_UsernameTokenProfile);
		$oUserNameToken->addChild('wsse:Nonce', $strEncodedNonce, self::NS_WSS_WSSecurity_SecExt)->addAttribute('EncodingType', self::NS_WSS_SOAPMessageSecurity);
		$oUserNameToken->addChild('wsu:Created', $strCreatedDateTime, self::NS_WSS_WSSecurity_Utility);

		// Recovering XML value from that object
		$oXML->registerXPathNamespace('wsse', self::NS_WSS_WSSecurity_SecExt);
		$full	= $oXML->xpath('/root/wsse:Security');
		$auth = $full[0]->asXML();

		$oSoapHeader	= new SoapHeader(self::NS_WSS_WSSecurity_SecExt, 'Security', new SoapVar($auth, XSD_ANYXML), true);

		$this->__setSoapHeaders([$oSoapHeader]);

		return $this;
	}
}
