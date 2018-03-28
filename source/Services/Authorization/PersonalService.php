<?php

namespace PagSeguro\Services\Authorization;

use PagSeguro\Domains\Authorization;
use PagSeguro\Domains\Document;
use PagSeguro\Domains\Phone;

/**
 * Class PersonSeller
 *
 * @package PagSeguro\Services\Authorization
 */
class PersonalService
{
    /**
     * @var Authorization
     */
    private $authorization;

    /**
     * @var \DOMDocument
     */
    private $dom;

    /**
     * Seller constructor.
     *
     * @param Authorization $authorization
     */
    public function __construct(Authorization $authorization)
    {
        $this->authorization = $authorization;
        $this->dom = new \DOMDocument('1.0', 'UTF-8');
        $this->dom->xmlStandalone = true;
        $authorizationNode = $this->makeAuthorizationNode();
        $accountNode = $this->makeAccountNode($authorizationNode);
        $personNode = $this->makePersonNode($accountNode);
        $this->makePhonesNode($personNode);
        $this->makeDocumentsNode($personNode);
        $this->makeAddressNode($personNode);
    }

    /**
     * @return \DOMNode
     */
    private function makeAuthorizationNode()
    {
        $authorizationRequestElement = $this->dom->createElement('authorizationRequest');
        $authorizationRequestDom = $this->dom->appendChild($authorizationRequestElement);

        $referenceElement = $this->dom->createElement('reference', $this->authorization->getReference());
        $authorizationRequestDom->appendChild($referenceElement);

        $permissionsElement = $this->dom->createElement('permissions');
        $permissionsDom = $authorizationRequestDom->appendChild($permissionsElement);

        $permissions = $this->authorization->getPermissions();
        $permissions = explode(',', $permissions);

        foreach ($permissions as $permission) {
            $codeElement = $this->dom->createElement('code', $permission);
            $permissionsDom->appendChild($codeElement);
        }
        $redirectURLElement = $this->dom->createElement('redirectURL', $this->authorization->getRedirectURL());
        $authorizationRequestDom->appendChild($redirectURLElement);

        $notificationURLElement = $this->dom->createElement(
            'notificationURL',
            $this->authorization->getNotificationURL()
        );
        $authorizationRequestDom->appendChild($notificationURLElement);

        $accountElement = $this->dom->createElement('account');
        $accountDom = $authorizationRequestDom->appendChild($accountElement);

        return $accountDom;
    }

    /**
     * @param \DOMNode $accountDom
     *
     * @return \DOMNode
     */
    private function makeAccountNode(\DOMNode $accountDom)
    {
        $emailElement = $this->dom->createElement('email', $this->authorization->getAccount()->getEmail());
        $accountDom->appendChild($emailElement);

        $typeElement = $this->dom->createElement('type', $this->authorization->getAccount()->getType());
        $accountDom->appendChild($typeElement);

        return $accountDom;
    }

    /**
     * @param \DOMNode $accountDom
     *
     * @return \DOMNode
     */
    private function makePersonNode(\DOMNode $accountDom)
    {
        $personElement = $this->dom->createElement('person');
        $personDom = $accountDom->appendChild($personElement);

        $nameElement = $this->dom->createElement('name', $this->authorization->getAccount()->getPersonal()->getName());
        $personDom->appendChild($nameElement);

        $birthDateElement = $this->dom->createElement(
            'birthDate',
            $this->authorization->getAccount()->getPersonal()->getBirthDate()
        );
        $personDom->appendChild($birthDateElement);

        return $personDom;
    }

    /**
     * @param \DOMNode $personDom
     */
    private function makePhonesNode(\DOMNode $personDom)
    {
        $phonesElement = $this->dom->createElement('phones');
        $phonesDom = $personDom->appendChild($phonesElement);
        $phones = $this->authorization->getAccount()->getPersonal()->getPhones();

        $phoneElement = $this->dom->createElement('phone');
        $phoneDom = $phonesDom->appendChild($phoneElement);

        /**
         * @var Phone $phone
         */
        foreach ($phones as $phone) {
            $typeElement = $this->dom->createElement('type', $phone->getType());
            $phoneDom->appendChild($typeElement);

            $areaCodeElement = $this->dom->createElement('areaCode', $phone->getAreaCode());
            $phoneDom->appendChild($areaCodeElement);

            $numberElement = $this->dom->createElement('number', $phone->getNumber());
            $phoneDom->appendChild($numberElement);
        }
    }

    /**
     * @param \DOMNode $personDom
     */
    private function makeDocumentsNode(\DOMNode $personDom)
    {
        $documentsElement = $this->dom->createElement('documents');
        $documentsDom = $personDom->appendChild($documentsElement);
        $documents = $this->authorization->getAccount()->getPersonal()->getDocuments();

        $documentElement = $this->dom->createElement('document');
        $documentDom = $documentsDom->appendChild($documentElement);

        /**
         * @var Document $document
         */
        foreach ($documents as $document) {
            $typeElement = $this->dom->createElement('type', $document->getType());
            $documentDom->appendChild($typeElement);

            $valueElement = $this->dom->createElement('value', $document->getIdentifier());
            $documentDom->appendChild($valueElement);
        }
    }

    /**
     * @param \DOMNode $personDom
     */
    private function makeAddressNode(\DOMNode $personDom)
    {
        $addressElement = $this->dom->createElement('address');
        $addressDom = $personDom->appendChild($addressElement);

        $postalCodeElement = $this->dom->createElement(
            'postalCode',
            $this->authorization->getAccount()->getPersonal()->getAddress()->getPostalCode()
        );
        $addressDom->appendChild($postalCodeElement);

        $streetElement = $this->dom->createElement(
            'street',
            $this->authorization->getAccount()->getPersonal()->getAddress()->getStreet()
        );
        $addressDom->appendChild($streetElement);

        $numberElement = $this->dom->createElement(
            'number',
            $this->authorization->getAccount()->getPersonal()->getAddress()->getNumber()
        );
        $addressDom->appendChild($numberElement);

        $complementElement = $this->dom->createElement(
            'complement',
            $this->authorization->getAccount()->getPersonal()->getAddress()->getComplement()
        );
        $addressDom->appendChild($complementElement);

        $districtElement = $this->dom->createElement(
            'district',
            $this->authorization->getAccount()->getPersonal()->getAddress()->getDistrict()
        );
        $addressDom->appendChild($districtElement);

        $cityElement = $this->dom->createElement(
            'city',
            $this->authorization->getAccount()->getPersonal()->getAddress()->getCity()
        );
        $addressDom->appendChild($cityElement);

        $stateElement = $this->dom->createElement(
            'state',
            $this->authorization->getAccount()->getPersonal()->getAddress()->getState()
        );
        $addressDom->appendChild($stateElement);

        $countryElement = $this->dom->createElement(
            'country',
            $this->authorization->getAccount()->getPersonal()->getAddress()->getCountry()
        );
        $addressDom->appendChild($countryElement);
    }

    /**
     * @return string
     */
    public function getAsXML()
    {
        return $this->dom->saveXML();
    }
}
