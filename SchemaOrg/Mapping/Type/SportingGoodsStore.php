<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SportingGoodsStore.
 * 
 * @method SportingGoodsStore setAddress(Property\Address $address)
 * @method SportingGoodsStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method SportingGoodsStore setAlumni(Property\Alumni $alumni)
 * @method SportingGoodsStore setAreaServed(Property\AreaServed $areaServed)
 * @method SportingGoodsStore setAward(Property\Award $award)
 * @method SportingGoodsStore setBrand(Property\Brand $brand)
 * @method SportingGoodsStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method SportingGoodsStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method SportingGoodsStore setDepartment(Property\Department $department)
 * @method SportingGoodsStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method SportingGoodsStore setDuns(Property\Duns $duns)
 * @method SportingGoodsStore setEmail(Property\Email $email)
 * @method SportingGoodsStore setEmployee(Property\Employee $employee)
 * @method SportingGoodsStore setEvent(Property\Event $event)
 * @method SportingGoodsStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method SportingGoodsStore setFounder(Property\Founder $founder)
 * @method SportingGoodsStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method SportingGoodsStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method SportingGoodsStore setFunder(Property\Funder $funder)
 * @method SportingGoodsStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method SportingGoodsStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method SportingGoodsStore setHasPOS(Property\HasPOS $hasPOS)
 * @method SportingGoodsStore setIsicV4(Property\IsicV4 $isicV4)
 * @method SportingGoodsStore setLegalName(Property\LegalName $legalName)
 * @method SportingGoodsStore setLeiCode(Property\LeiCode $leiCode)
 * @method SportingGoodsStore setLocation(Property\Location $location)
 * @method SportingGoodsStore setLogo(Property\Logo $logo)
 * @method SportingGoodsStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method SportingGoodsStore setMember(Property\Member $member)
 * @method SportingGoodsStore setMemberOf(Property\MemberOf $memberOf)
 * @method SportingGoodsStore setNaics(Property\Naics $naics)
 * @method SportingGoodsStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method SportingGoodsStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method SportingGoodsStore setOwns(Property\Owns $owns)
 * @method SportingGoodsStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method SportingGoodsStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method SportingGoodsStore setPriceRange(Property\PriceRange $priceRange)
 * @method SportingGoodsStore setReview(Property\Review $review)
 * @method SportingGoodsStore setSeeks(Property\Seeks $seeks)
 * @method SportingGoodsStore setSponsor(Property\Sponsor $sponsor)
 * @method SportingGoodsStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method SportingGoodsStore setTaxID(Property\TaxID $taxID)
 * @method SportingGoodsStore setTelephone(Property\Telephone $telephone)
 * @method SportingGoodsStore setVatID(Property\VatID $vatID)
 */
class SportingGoodsStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportingGoodsStore';
	}
}