<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ExerciseGym.
 * 
 * @method ExerciseGym setAddress(Property\Address $address)
 * @method ExerciseGym setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ExerciseGym setAlumni(Property\Alumni $alumni)
 * @method ExerciseGym setAreaServed(Property\AreaServed $areaServed)
 * @method ExerciseGym setAward(Property\Award $award)
 * @method ExerciseGym setBrand(Property\Brand $brand)
 * @method ExerciseGym setContactPoint(Property\ContactPoint $contactPoint)
 * @method ExerciseGym setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method ExerciseGym setDepartment(Property\Department $department)
 * @method ExerciseGym setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method ExerciseGym setDuns(Property\Duns $duns)
 * @method ExerciseGym setEmail(Property\Email $email)
 * @method ExerciseGym setEmployee(Property\Employee $employee)
 * @method ExerciseGym setEvent(Property\Event $event)
 * @method ExerciseGym setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ExerciseGym setFounder(Property\Founder $founder)
 * @method ExerciseGym setFoundingDate(Property\FoundingDate $foundingDate)
 * @method ExerciseGym setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method ExerciseGym setFunder(Property\Funder $funder)
 * @method ExerciseGym setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ExerciseGym setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method ExerciseGym setHasPOS(Property\HasPOS $hasPOS)
 * @method ExerciseGym setIsicV4(Property\IsicV4 $isicV4)
 * @method ExerciseGym setLegalName(Property\LegalName $legalName)
 * @method ExerciseGym setLeiCode(Property\LeiCode $leiCode)
 * @method ExerciseGym setLocation(Property\Location $location)
 * @method ExerciseGym setLogo(Property\Logo $logo)
 * @method ExerciseGym setMakesOffer(Property\MakesOffer $makesOffer)
 * @method ExerciseGym setMember(Property\Member $member)
 * @method ExerciseGym setMemberOf(Property\MemberOf $memberOf)
 * @method ExerciseGym setNaics(Property\Naics $naics)
 * @method ExerciseGym setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method ExerciseGym setOpeningHours(Property\OpeningHours $openingHours)
 * @method ExerciseGym setOwns(Property\Owns $owns)
 * @method ExerciseGym setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method ExerciseGym setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method ExerciseGym setPriceRange(Property\PriceRange $priceRange)
 * @method ExerciseGym setReview(Property\Review $review)
 * @method ExerciseGym setSeeks(Property\Seeks $seeks)
 * @method ExerciseGym setSponsor(Property\Sponsor $sponsor)
 * @method ExerciseGym setSubOrganization(Property\SubOrganization $subOrganization)
 * @method ExerciseGym setTaxID(Property\TaxID $taxID)
 * @method ExerciseGym setTelephone(Property\Telephone $telephone)
 * @method ExerciseGym setVatID(Property\VatID $vatID)
 */
class ExerciseGym extends SportsActivityLocation {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ExerciseGym';
	}
}