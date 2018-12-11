<?php


namespace Apc\RetsRabbit\Core\TransferObjects;


/**
 * Class Listing
 *
 * @package Apc\RetsRabbit\Core\TransferObjects
 * @property string $odata_context
 * @property array $data
 * @property int $odata_count
 * @property int $server_id
 * @property int $rets_rabbit_total_results
 * @property int $id
 * @property string $ListingKey
 * @property string $ListingId
 * @property string $ListAOR
 * @property string $OriginatingSystemKey
 * @property string $OriginatingSystemName
 * @property string $ListingService
 * @property string $ListingAgreement
 * @property string $LeaseConsideredYN
 * @property string $HomeWarrantyYN
 * @property string $CopyrightNotice
 * @property string $Disclaimer
 * @property string $StandardStatus
 * @property string $MlsStatus
 * @property string $ApprovalStatus
 * @property string $ListingContractDate
 * @property string $ContractStatusChangeDate
 * @property string $ExpirationDate
 * @property string $CancelationDate
 * @property string $ContingentDate
 * @property string $WithdrawnDate
 * @property string $PurchaseContractDate
 * @property string $CloseDate
 * @property string $OnMarketDate
 * @property string $OffMarketDate
 * @property string $PendingTimestamp
 * @property string $ModificationTimestamp
 * @property string $StatusChangeTimestamp
 * @property string $PriceChangeTimestamp
 * @property string $MajorChangeType
 * @property string $MajorChangeTimestamp
 * @property string $OriginalEntryTimestamp
 * @property string $OnMarketTimestamp
 * @property string $OffMarketTimestamp
 * @property string $DaysOnMarket
 * @property string $CumulativeDaysOnMarket
 * @property string $ClosePrice
 * @property string $ListPrice
 * @property string $OriginalListPrice
 * @property string $ListPriceLow
 * @property string $PreviousListPrice
 * @property string $BuyerAgencyCompensation
 * @property string $BuyerAgencyCompensationType
 * @property string $SubAgencyCompensation
 * @property string $SubAgencyCompensationType
 * @property string $TransactionBrokerCompensation
 * @property string $TransactionBrokerCompensationType
 * @property string $DualVariableCompensationYN
 * @property string $LeaseRenewalCompensation
 * @property string $SignOnPropertyYN
 * @property string $InternetEntireListingDisplayYN
 * @property string $InternetAddressDisplayYN
 * @property string $InternetConsumerCommentYN
 * @property string $InternetAutomatedValuationDisplayYN
 * @property string $SyndicateTo
 * @property string $PhotosCount
 * @property string $PhotosChangeTimestamp
 * @property string $VideosCount
 * @property string $VideosChangeTimestamp
 * @property string $DocumentsCount
 * @property string $DocumentsChangeTimestamp
 * @property string $DocumentsAvailable
 * @property string $VirtualTourURLUnbranded
 * @property string $VirtualTourURLBranded
 * @property string $PublicRemarks
 * @property string $SyndicationRemarks
 * @property string $PrivateRemarks
 * @property string $PrivateOfficeRemarks
 * @property string $ShowingInstructions
 * @property string $ShowingContactPhone
 * @property string $ShowingContactPhoneExt
 * @property string $ShowingContactName
 * @property string $ShowingContactType
 * @property string $LockBoxLocation
 * @property string $LockBoxType
 * @property string $LockBoxSerialNumber
 * @property string $AccessCode
 * @property string $Exclusions
 * @property string $Inclusions
 * @property string $Disclosures
 * @property string $Ownership
 * @property string $SpecialListingConditions
 * @property string $ListingTerms
 * @property string $CurrentFinancing
 * @property string $BuyerFinancing
 * @property string $Concessions
 * @property string $ConcessionsComments
 * @property string $ConcessionsAmount
 * @property string $Contingency
 * @property string $Possession
 * @property string $AvailabilityDate
 * @property string $StreetNumber
 * @property string $StreetNumberNumeric
 * @property string $StreetDirPrefix
 * @property string $StreetName
 * @property string $StreetAdditionalInfo
 * @property string $StreetSuffix
 * @property string $StreetSuffixModifier
 * @property string $StreetDirSuffix
 * @property string $UnitNumber
 * @property string $City
 * @property string $StateOrProvince
 * @property string $Country
 * @property string $PostalCode
 * @property string $PostalCodePlus4
 * @property string $CarrierRoute
 * @property string $UnparsedAddress
 * @property string $PostalCity
 * @property string $CountyOrParish
 * @property string $Township
 * @property string $MLSAreaMajor
 * @property string $MLSAreaMinor
 * @property string $SubdivisionName
 * @property string $Latitude
 * @property string $Longitude
 * @property string $Elevation
 * @property string $ElevationUnits
 * @property string $Directions
 * @property string $MapCoordinate
 * @property string $MapCoordinateSource
 * @property string $MapURL
 * @property string $CrossStreet
 * @property string $ElementarySchool
 * @property string $ElementarySchoolDistrict
 * @property string $MiddleOrJuniorSchool
 * @property string $MiddleOrJuniorSchoolDistrict
 * @property string $HighSchool
 * @property string $HighSchoolDistrict
 * @property string $ListAgentNamePrefix
 * @property string $ListAgentFirstName
 * @property string $ListAgentMiddleName
 * @property string $ListAgentLastName
 * @property string $ListAgentNameSuffix
 * @property string $ListAgentFullName
 * @property string $ListAgentPreferredPhone
 * @property string $ListAgentPreferredPhoneExt
 * @property string $ListAgentOfficePhone
 * @property string $ListAgentOfficePhoneExt
 * @property string $ListAgentCellPhone
 * @property string $ListAgentDirectPhone
 * @property string $ListAgentHomePhone
 * @property string $ListAgentFax
 * @property string $ListAgentPager
 * @property string $ListAgentVoiceMail
 * @property string $ListAgentVoiceMailExt
 * @property string $ListAgentTollFreePhone
 * @property string $ListAgentEmail
 * @property string $ListAgentURL
 * @property string $ListAgentKey
 * @property string $ListAgentAOR
 * @property string $ListAgentMlsId
 * @property string $ListAgentStateLicense
 * @property string $ListAgentDesignation
 * @property string $ListOfficeName
 * @property string $ListOfficePhone
 * @property string $ListOfficePhoneExt
 * @property string $ListOfficeFax
 * @property string $ListOfficeEmail
 * @property string $ListOfficeURL
 * @property string $ListOfficeKey
 * @property string $ListOfficeAOR
 * @property string $ListOfficeMlsId
 * @property string $CoListAgentNamePrefix
 * @property string $CoListAgentFirstName
 * @property string $CoListAgentMiddleName
 * @property string $CoListAgentLastName
 * @property string $CoListAgentNameSuffix
 * @property string $CoListAgentFullName
 * @property string $CoListAgentPreferredPhone
 * @property string $CoListAgentPreferredPhoneExt
 * @property string $CoListAgentOfficePhone
 * @property string $CoListAgentOfficePhoneExt
 * @property string $CoListAgentCellPhone
 * @property string $CoListAgentDirectPhone
 * @property string $CoListAgentHomePhone
 * @property string $CoListAgentFax
 * @property string $CoListAgentPager
 * @property string $CoListAgentVoiceMail
 * @property string $CoListAgentVoiceMailExt
 * @property string $CoListAgentTollFreePhone
 * @property string $CoListAgentEmail
 * @property string $CoListAgentURL
 * @property string $CoListAgentKey
 * @property string $CoListAgentAOR
 * @property string $CoListAgentMlsId
 * @property string $CoListAgentStateLicense
 * @property string $CoListAgentDesignation
 * @property string $CoListOfficeName
 * @property string $CoListOfficePhone
 * @property string $CoListOfficePhoneExt
 * @property string $CoListOfficeFax
 * @property string $CoListOfficeEmail
 * @property string $CoListOfficeURL
 * @property string $CoListOfficeKey
 * @property string $CoListOfficeAOR
 * @property string $CoListOfficeMlsId
 * @property string $BuyerAgentNamePrefix
 * @property string $BuyerAgentFirstName
 * @property string $BuyerAgentMiddleName
 * @property string $BuyerAgentLastName
 * @property string $BuyerAgentNameSuffix
 * @property string $BuyerAgentFullName
 * @property string $BuyerAgentPreferredPhone
 * @property string $BuyerAgentPreferredPhoneExt
 * @property string $BuyerAgentOfficePhone
 * @property string $BuyerAgentOfficePhoneExt
 * @property string $BuyerAgentCellPhone
 * @property string $BuyerAgentDirectPhone
 * @property string $BuyerAgentHomePhone
 * @property string $BuyerAgentFax
 * @property string $BuyerAgentPager
 * @property string $BuyerAgentVoiceMail
 * @property string $BuyerAgentVoiceMailExt
 * @property string $BuyerAgentTollFreePhone
 * @property string $BuyerAgentEmail
 * @property string $BuyerAgentURL
 * @property string $BuyerAgentKey
 * @property string $BuyerAgentAOR
 * @property string $BuyerAgentMlsId
 * @property string $BuyerAgentStateLicense
 * @property string $BuyerAgentDesignation
 * @property string $BuyerOfficeName
 * @property string $BuyerOfficePhone
 * @property string $BuyerOfficePhoneExt
 * @property string $BuyerOfficeFax
 * @property string $BuyerOfficeEmail
 * @property string $BuyerOfficeURL
 * @property string $BuyerOfficeKey
 * @property string $BuyerOfficeAOR
 * @property string $BuyerOfficeMlsId
 * @property string $CoBuyerAgentNamePrefix
 * @property string $CoBuyerAgentFirstName
 * @property string $CoBuyerAgentMiddleName
 * @property string $CoBuyerAgentLastName
 * @property string $CoBuyerAgentNameSuffix
 * @property string $CoBuyerAgentFullName
 * @property string $CoBuyerAgentPreferredPhone
 * @property string $CoBuyerAgentPreferredPhoneExt
 * @property string $CoBuyerAgentOfficePhone
 * @property string $CoBuyerAgentOfficePhoneExt
 * @property string $CoBuyerAgentCellPhone
 * @property string $CoBuyerAgentDirectPhone
 * @property string $CoBuyerAgentHomePhone
 * @property string $CoBuyerAgentFax
 * @property string $CoBuyerAgentPager
 * @property string $CoBuyerAgentVoiceMail
 * @property string $CoBuyerAgentVoiceMailExt
 * @property string $CoBuyerAgentTollFreePhone
 * @property string $CoBuyerAgentEmail
 * @property string $CoBuyerAgentURL
 * @property string $CoBuyerAgentKey
 * @property string $CoBuyerAgentAOR
 * @property string $CoBuyerAgentMlsId
 * @property string $CoBuyerAgentStateLicense
 * @property string $CoBuyerAgentDesignation
 * @property string $CoBuyerOfficeName
 * @property string $CoBuyerOfficePhone
 * @property string $CoBuyerOfficePhoneExt
 * @property string $CoBuyerOfficeFax
 * @property string $CoBuyerOfficeEmail
 * @property string $CoBuyerOfficeURL
 * @property string $CoBuyerOfficeKey
 * @property string $CoBuyerOfficeAOR
 * @property string $CoBuyerOfficeMlsId
 * @property string $ListTeamName
 * @property string $ListTeamKey
 * @property string $BuyerTeamName
 * @property string $BuyerTeamKey
 * @property string $PropertyType
 * @property string $PropertySubType
 * @property string $AssociationYN
 * @property string $AssociationName
 * @property string $AssociationPhone
 * @property string $AssociationFee
 * @property string $AssociationFeeFrequency
 * @property string $AssociationName2
 * @property string $AssociationPhone2
 * @property string $AssociationFee2
 * @property string $AssociationFee2Frequency
 * @property string $AssociationFeeIncludes
 * @property string $AssociationAmenities
 * @property string $PetsAllowed
 * @property string $LotSizeArea
 * @property string $LotSizeSource
 * @property string $LotSizeUnits
 * @property string $LotSizeDimensions
 * @property string $LotDimensionsSource
 * @property string $LotSizeAcres
 * @property string $LotSizeSquareFeet
 * @property string $FrontageType
 * @property string $FrontageLength
 * @property string $RoadFrontageType
 * @property string $RoadSurfaceType
 * @property string $RoadResponsibility
 * @property string $OccupantName
 * @property string $OccupantPhone
 * @property string $OccupantType
 * @property string $OwnerName
 * @property string $OwnerPhone
 * @property string $AnchorsCoTenants
 * @property string $LeaseTerm
 * @property string $LandLeaseYN
 * @property string $LandLeaseAmount
 * @property string $LandLeaseAmountFrequency
 * @property string $LandLeaseExpirationDate
 * @property string $View
 * @property string $ViewYN
 * @property string $LotFeatures
 * @property string $CurrentUse
 * @property string $PossibleUse
 * @property string $DevelopmentStatus
 * @property string $NumberOfLots
 * @property string $Topography
 * @property string $HorseYN
 * @property string $HorseAmenities
 * @property string $CommunityFeatures
 * @property string $SeniorCommunityYN
 * @property string $PoolFeatures
 * @property string $PoolPrivateYN
 * @property string $SpaFeatures
 * @property string $SpaYN
 * @property string $WaterfrontYN
 * @property string $WaterfrontFeatures
 * @property string $WaterBodyName
 * @property string $GrossScheduledIncome
 * @property string $GrossIncome
 * @property string $IncomeIncludes
 * @property string $OperatingExpense
 * @property string $OperatingExpenseIncludes
 * @property string $NetOperatingIncome
 * @property string $CapRate
 * @property string $NumberOfUnitsLeased
 * @property string $NumberOfUnitsMoMo
 * @property string $NumberOfUnitsVacant
 * @property string $ExistingLeaseType
 * @property string $UnitsFurnished
 * @property string $TotalActualRent
 * @property string $RentControlYN
 * @property string $NumberOfUnitsTotal
 * @property string $NumberOfBuildings
 * @property string $OwnerPays
 * @property string $TenantPays
 * @property string $VacancyAllowance
 * @property string $VacancyAllowanceRate
 * @property string $CableTvExpense
 * @property string $ElectricExpense
 * @property string $GardnerExpense
 * @property string $FurnitureReplacementExpense
 * @property string $FuelExpense
 * @property string $InsuranceExpense
 * @property string $OtherExpense
 * @property string $LicensesExpense
 * @property string $MaintenanceExpense
 * @property string $NewTaxesExpense
 * @property string $PestControlExpense
 * @property string $PoolExpense
 * @property string $SuppliesExpense
 * @property string $TrashExpense
 * @property string $WaterSewerExpense
 * @property string $WorkmansCompensationExpense
 * @property string $ProfessionalManagementExpense
 * @property string $ManagerExpense
 * @property string $FinancialDataSource
 * @property string $RentIncludes
 * @property string $Furnished
 * @property string $BusinessName
 * @property string $BusinessType
 * @property string $OwnershipType
 * @property string $SpecialLicenses
 * @property string $NumberOfFullTimeEmployees
 * @property string $NumberOfPartTimeEmployees
 * @property string $LeaseAmount
 * @property string $LeaseAmountFrequency
 * @property string $LeaseExpiration
 * @property string $LeaseRenewalOptionYN
 * @property string $LeaseAssignableYN
 * @property string $HoursDaysofOperation
 * @property string $HoursDaysofOperationDescription
 * @property string $YearEstablished
 * @property string $SeatingCapacity
 * @property string $YearsCurrentOwner
 * @property string $LaborInformation
 * @property string $Utilities
 * @property string $Electric
 * @property string $Gas
 * @property string $Telephone
 * @property string $IrrigationWaterRightsYN
 * @property string $IrrigationWaterRightsAcres
 * @property string $IrrigationSource
 * @property string $WaterSource
 * @property string $DistanceToWater
 * @property string $ElectricOnPropertyYN
 * @property string $DistanceToElectric
 * @property string $Sewer
 * @property string $DistanceToSewer
 * @property string $DistanceToGas
 * @property string $DistanceToPhoneService
 * @property string $DistanceToStreet
 * @property string $DistanceToSchools
 * @property string $DistanceFromShopping
 * @property string $DistanceToPlaceofWorship
 * @property string $DistanceToBus
 * @property string $DistanceFromSchoolBus
 * @property string $DistanceToFreeway
 * @property string $CropsIncludedYN
 * @property string $GrazingPermitsBlmYN
 * @property string $GrazingPermitsForestServiceYN
 * @property string $GrazingPermitsPrivateYN
 * @property string $CultivatedArea
 * @property string $PastureArea
 * @property string $RangeArea
 * @property string $WoodedArea
 * @property string $Vegetation
 * @property string $Fencing
 * @property string $FarmCreditServiceInclYN
 * @property string $FarmLandAreaUnits
 * @property string $FarmLandAreaSource
 * @property string $BedroomsTotal
 * @property string $BedroomsPossible
 * @property string $MainLevelBedrooms
 * @property string $BathroomsTotalInteger
 * @property string $BathroomsFull
 * @property string $BathroomsHalf
 * @property string $BathroomsThreeQuarter
 * @property string $BathroomsOneQuarter
 * @property string $BathroomsPartial
 * @property string $MainLevelBathrooms
 * @property string $LivingArea
 * @property string $LivingAreaUnits
 * @property string $PropertyAttachedYN
 * @property string $GarageYN
 * @property string $GarageSpaces
 * @property string $StoriesTotal
 * @property string $Stories
 * @property string $Levels
 * @property string $YearBuilt
 * @property string $MobileLength
 * @property string $MobileWidth
 * @property string $Make
 * @property string $Model
 * @property string $ParcelNumber
 * @property string $LivingAreaSource
 * @property string $AboveGradeFinishedArea
 * @property string $AboveGradeFinishedAreaSource
 * @property string $AboveGradeFinishedAreaUnits
 * @property string $BelowGradeFinishedArea
 * @property string $BelowGradeFinishedAreaSource
 * @property string $BelowGradeFinishedAreaUnits
 * @property string $BuildingAreaTotal
 * @property string $BuildingAreaSource
 * @property string $BuildingAreaUnits
 * @property string $LeasableArea
 * @property string $LeasableAreaUnits
 * @property string $CommonWalls
 * @property string $FoundationArea
 * @property string $AttachedGarageYN
 * @property string $CarportSpaces
 * @property string $CarportYN
 * @property string $OpenParkingYN
 * @property string $OpenParkingSpaces
 * @property string $CoveredSpaces
 * @property string $ParkingFeatures
 * @property string $OtherParking
 * @property string $ParkingTotal
 * @property string $RVParkingDimensions
 * @property string $EntryLocation
 * @property string $EntryLevel
 * @property string $YearBuiltEffective
 * @property string $YearBuiltDetails
 * @property string $YearBuiltSource
 * @property string $NewConstructionYN
 * @property string $GreenBuildingVerificationType
 * @property string $BuilderName
 * @property string $BuilderModel
 * @property string $BuildingName
 * @property string $BuildingFeatures
 * @property string $Heating
 * @property string $HeatingYN
 * @property string $Cooling
 * @property string $CoolingYN
 * @property string $InteriorFeatures
 * @property string $ExteriorFeatures
 * @property string $PatioAndPorchFeatures
 * @property string $ArchitecturalStyle
 * @property string $PropertyCondition
 * @property string $FireplaceFeatures
 * @property string $FireplacesTotal
 * @property string $FireplaceYN
 * @property string $DoorFeatures
 * @property string $WindowFeatures
 * @property string $Roof
 * @property string $ConstructionMaterials
 * @property string $FoundationDetails
 * @property string $Basement
 * @property string $Flooring
 * @property string $OtherStructures
 * @property string $DirectionFaces
 * @property string $OtherEquipment
 * @property string $Appliances
 * @property string $LaundryFeatures
 * @property string $SecurityFeatures
 * @property string $NumberOfSeparateElectricMeters
 * @property string $NumberOfSeparateGasMeters
 * @property string $NumberOfSeparateWaterMeters
 * @property string $GreenEnergyEfficient
 * @property string $GreenEnergyGeneration
 * @property string $GreenSustainability
 * @property string $GreenWaterConservation
 * @property string $GreenIndoorAirQuality
 * @property string $GreenLocation
 * @property string $WalkScore
 * @property string $HabitableResidenceYN
 * @property string $BodyType
 * @property string $Skirt
 * @property string $MobileDimUnits
 * @property string $ParkName
 * @property string $ParkManagerName
 * @property string $ParkManagerPhone
 * @property string $MobileHomeRemainsYN
 * @property string $NumberOfPads
 * @property string $SerialU
 * @property string $DOH1
 * @property string $License1
 * @property string $SerialX
 * @property string $DOH2
 * @property string $License2
 * @property string $SerialXX
 * @property string $DOH3
 * @property string $License3
 * @property string $AccessibilityFeatures
 * @property string $RoomsTotal
 * @property string $RoomType
 * @property string $UnitTypeType
 * @property string $Zoning
 * @property string $ZoningDescription
 * @property string $AdditionalParcelsYN
 * @property string $AdditionalParcelsDescription
 * @property string $PublicSurveySection
 * @property string $PublicSurveyTownship
 * @property string $PublicSurveyRange
 * @property string $TaxLot
 * @property string $TaxBlock
 * @property string $TaxTract
 * @property string $TaxLegalDescription
 * @property string $TaxAnnualAmount
 * @property string $TaxYear
 * @property string $TaxAssessedValue
 * @property string $TaxExemptions
 * @property string $TaxOtherAnnualAssessmentAmount
 * @property string $TaxBookNumber
 * @property string $TaxMapNumber
 * @property string $TaxParcelLetter
 * @property string $TaxStatusCurrent
 * @property string $BathroomsTotalDecimal
 * @property string $BathroomsTotalNotational
 * @property string $ListingUrl
 * @property InnerListing $listing
 * @property array $rooms
 * @property array $unit_types
 */
class Listing extends RetsRabbitTransferObject
{
    /**
     * @var array
     */
    protected $ignore_fields = ['@odata.context', '@odata.count', '@retsrabbit.total_results', 'listing'];

    /**
     * Strings
     *
     * @var
     */
    protected $odata_context;

    /**
     * Integers
     *
     * @var
     */
    protected $odata_count, $rets_rabbit_total_results, $server_id;

    /**
     * Arrays
     *
     * @var
     */
    protected $listing, $rooms, $unit_types;

    /**
     * RESo fields
     *
     * @var
     */
    protected $id, $ListingKey, $ListingId, $ListAOR, $OriginatingSystemKey, $OriginatingSystemName, $ListingService, $ListingAgreement, $LeaseConsideredYN, $HomeWarrantyYN,
        $CopyrightNotice, $Disclaimer, $StandardStatus, $MlsStatus, $ApprovalStatus, $ListingContractDate, $ContractStatusChangeDate, $ExpirationDate, $CancelationDate,
        $ContingentDate,
        $WithdrawnDate,
        $PurchaseContractDate,
        $CloseDate,
        $OnMarketDate,
        $OffMarketDate,
        $PendingTimestamp,
        $ModificationTimestamp,
        $StatusChangeTimestamp,
        $PriceChangeTimestamp,
        $MajorChangeType,
        $MajorChangeTimestamp,
        $OriginalEntryTimestamp,
        $OnMarketTimestamp,
        $OffMarketTimestamp,
        $DaysOnMarket,
        $CumulativeDaysOnMarket,
        $ClosePrice,
        $ListPrice,
        $OriginalListPrice,
        $ListPriceLow,
        $PreviousListPrice,
        $BuyerAgencyCompensation,
        $BuyerAgencyCompensationType,
        $SubAgencyCompensation,
        $SubAgencyCompensationType,
        $TransactionBrokerCompensation,
        $TransactionBrokerCompensationType,
        $DualVariableCompensationYN,
        $LeaseRenewalCompensation,
        $SignOnPropertyYN,
        $InternetEntireListingDisplayYN,
        $InternetAddressDisplayYN,
        $InternetConsumerCommentYN,
        $InternetAutomatedValuationDisplayYN,
        $SyndicateTo,
        $PhotosCount,
        $PhotosChangeTimestamp,
        $VideosCount,
        $VideosChangeTimestamp,
        $DocumentsCount,
        $DocumentsChangeTimestamp,
        $DocumentsAvailable,
        $VirtualTourURLUnbranded,
        $VirtualTourURLBranded,
        $PublicRemarks,
        $SyndicationRemarks,
        $PrivateRemarks,
        $PrivateOfficeRemarks,
        $ShowingInstructions,
        $ShowingContactPhone,
        $ShowingContactPhoneExt,
        $ShowingContactName,
        $ShowingContactType,
        $LockBoxLocation,
        $LockBoxType,
        $LockBoxSerialNumber,
        $AccessCode,
        $Exclusions,
        $Inclusions,
        $Disclosures,
        $Ownership,
        $SpecialListingConditions,
        $ListingTerms,
        $CurrentFinancing,
        $BuyerFinancing,
        $Concessions,
        $ConcessionsComments,
        $ConcessionsAmount,
        $Contingency,
        $Possession,
        $AvailabilityDate,
        $StreetNumber,
        $StreetNumberNumeric,
        $StreetDirPrefix,
        $StreetName,
        $StreetAdditionalInfo,
        $StreetSuffix,
        $StreetSuffixModifier,
        $StreetDirSuffix,
        $UnitNumber,
        $City,
        $StateOrProvince,
        $Country,
        $PostalCode,
        $PostalCodePlus4,
        $CarrierRoute,
        $UnparsedAddress,
        $PostalCity,
        $CountyOrParish,
        $Township,
        $MLSAreaMajor,
        $MLSAreaMinor,
        $SubdivisionName,
        $Latitude,
        $Longitude,
        $Elevation,
        $ElevationUnits,
        $Directions,
        $MapCoordinate,
        $MapCoordinateSource,
        $MapURL,
        $CrossStreet,
        $ElementarySchool,
        $ElementarySchoolDistrict,
        $MiddleOrJuniorSchool,
        $MiddleOrJuniorSchoolDistrict,
        $HighSchool,
        $HighSchoolDistrict,
        $ListAgentNamePrefix,
        $ListAgentFirstName,
        $ListAgentMiddleName,
        $ListAgentLastName,
        $ListAgentNameSuffix,
        $ListAgentFullName,
        $ListAgentPreferredPhone,
        $ListAgentPreferredPhoneExt,
        $ListAgentOfficePhone,
        $ListAgentOfficePhoneExt,
        $ListAgentCellPhone,
        $ListAgentDirectPhone,
        $ListAgentHomePhone,
        $ListAgentFax,
        $ListAgentPager,
        $ListAgentVoiceMail,
        $ListAgentVoiceMailExt,
        $ListAgentTollFreePhone,
        $ListAgentEmail,
        $ListAgentURL,
        $ListAgentKey,
        $ListAgentAOR,
        $ListAgentMlsId,
        $ListAgentStateLicense,
        $ListAgentDesignation,
        $ListOfficeName,
        $ListOfficePhone,
        $ListOfficePhoneExt,
        $ListOfficeFax,
        $ListOfficeEmail,
        $ListOfficeURL,
        $ListOfficeKey,
        $ListOfficeAOR,
        $ListOfficeMlsId,
        $CoListAgentNamePrefix,
        $CoListAgentFirstName,
        $CoListAgentMiddleName,
        $CoListAgentLastName,
        $CoListAgentNameSuffix,
        $CoListAgentFullName,
        $CoListAgentPreferredPhone,
        $CoListAgentPreferredPhoneExt,
        $CoListAgentOfficePhone,
        $CoListAgentOfficePhoneExt,
        $CoListAgentCellPhone,
        $CoListAgentDirectPhone,
        $CoListAgentHomePhone,
        $CoListAgentFax,
        $CoListAgentPager,
        $CoListAgentVoiceMail,
        $CoListAgentVoiceMailExt,
        $CoListAgentTollFreePhone,
        $CoListAgentEmail,
        $CoListAgentURL,
        $CoListAgentKey,
        $CoListAgentAOR,
        $CoListAgentMlsId,
        $CoListAgentStateLicense,
        $CoListAgentDesignation,
        $CoListOfficeName,
        $CoListOfficePhone,
        $CoListOfficePhoneExt,
        $CoListOfficeFax,
        $CoListOfficeEmail,
        $CoListOfficeURL,
        $CoListOfficeKey,
        $CoListOfficeAOR,
        $CoListOfficeMlsId,
        $BuyerAgentNamePrefix,
        $BuyerAgentFirstName,
        $BuyerAgentMiddleName,
        $BuyerAgentLastName,
        $BuyerAgentNameSuffix,
        $BuyerAgentFullName,
        $BuyerAgentPreferredPhone,
        $BuyerAgentPreferredPhoneExt,
        $BuyerAgentOfficePhone,
        $BuyerAgentOfficePhoneExt,
        $BuyerAgentCellPhone,
        $BuyerAgentDirectPhone,
        $BuyerAgentHomePhone,
        $BuyerAgentFax,
        $BuyerAgentPager,
        $BuyerAgentVoiceMail,
        $BuyerAgentVoiceMailExt,
        $BuyerAgentTollFreePhone,
        $BuyerAgentEmail,
        $BuyerAgentURL,
        $BuyerAgentKey,
        $BuyerAgentAOR,
        $BuyerAgentMlsId,
        $BuyerAgentStateLicense,
        $BuyerAgentDesignation,
        $BuyerOfficeName,
        $BuyerOfficePhone,
        $BuyerOfficePhoneExt,
        $BuyerOfficeFax,
        $BuyerOfficeEmail,
        $BuyerOfficeURL,
        $BuyerOfficeKey,
        $BuyerOfficeAOR,
        $BuyerOfficeMlsId,
        $CoBuyerAgentNamePrefix,
        $CoBuyerAgentFirstName,
        $CoBuyerAgentMiddleName,
        $CoBuyerAgentLastName,
        $CoBuyerAgentNameSuffix,
        $CoBuyerAgentFullName,
        $CoBuyerAgentPreferredPhone,
        $CoBuyerAgentPreferredPhoneExt,
        $CoBuyerAgentOfficePhone,
        $CoBuyerAgentOfficePhoneExt,
        $CoBuyerAgentCellPhone,
        $CoBuyerAgentDirectPhone,
        $CoBuyerAgentHomePhone,
        $CoBuyerAgentFax,
        $CoBuyerAgentPager,
        $CoBuyerAgentVoiceMail,
        $CoBuyerAgentVoiceMailExt,
        $CoBuyerAgentTollFreePhone,
        $CoBuyerAgentEmail,
        $CoBuyerAgentURL,
        $CoBuyerAgentKey,
        $CoBuyerAgentAOR,
        $CoBuyerAgentMlsId,
        $CoBuyerAgentStateLicense,
        $CoBuyerAgentDesignation,
        $CoBuyerOfficeName,
        $CoBuyerOfficePhone,
        $CoBuyerOfficePhoneExt,
        $CoBuyerOfficeFax,
        $CoBuyerOfficeEmail,
        $CoBuyerOfficeURL,
        $CoBuyerOfficeKey,
        $CoBuyerOfficeAOR,
        $CoBuyerOfficeMlsId,
        $ListTeamName,
        $ListTeamKey,
        $BuyerTeamName,
        $BuyerTeamKey,
        $PropertyType,
        $PropertySubType,
        $AssociationYN,
        $AssociationName,
        $AssociationPhone,
        $AssociationFee,
        $AssociationFeeFrequency,
        $AssociationName2,
        $AssociationPhone2,
        $AssociationFee2,
        $AssociationFee2Frequency,
        $AssociationFeeIncludes,
        $AssociationAmenities,
        $PetsAllowed,
        $LotSizeArea,
        $LotSizeSource,
        $LotSizeUnits,
        $LotSizeDimensions,
        $LotDimensionsSource,
        $LotSizeAcres,
        $LotSizeSquareFeet,
        $FrontageType,
        $FrontageLength,
        $RoadFrontageType,
        $RoadSurfaceType,
        $RoadResponsibility,
        $OccupantName,
        $OccupantPhone,
        $OccupantType,
        $OwnerName,
        $OwnerPhone,
        $AnchorsCoTenants,
        $LeaseTerm,
        $LandLeaseYN,
        $LandLeaseAmount,
        $LandLeaseAmountFrequency,
        $LandLeaseExpirationDate,
        $View,
        $ViewYN,
        $LotFeatures,
        $CurrentUse,
        $PossibleUse,
        $DevelopmentStatus,
        $NumberOfLots,
        $Topography,
        $HorseYN,
        $HorseAmenities,
        $CommunityFeatures,
        $SeniorCommunityYN,
        $PoolFeatures,
        $PoolPrivateYN,
        $SpaFeatures,
        $SpaYN,
        $WaterfrontYN,
        $WaterfrontFeatures,
        $WaterBodyName,
        $GrossScheduledIncome,
        $GrossIncome,
        $IncomeIncludes,
        $OperatingExpense,
        $OperatingExpenseIncludes,
        $NetOperatingIncome,
        $CapRate,
        $NumberOfUnitsLeased,
        $NumberOfUnitsMoMo,
        $NumberOfUnitsVacant,
        $ExistingLeaseType,
        $UnitsFurnished,
        $TotalActualRent,
        $RentControlYN,
        $NumberOfUnitsTotal,
        $NumberOfBuildings,
        $OwnerPays,
        $TenantPays,
        $VacancyAllowance,
        $VacancyAllowanceRate,
        $CableTvExpense,
        $ElectricExpense,
        $GardnerExpense,
        $FurnitureReplacementExpense,
        $FuelExpense,
        $InsuranceExpense,
        $OtherExpense,
        $LicensesExpense,
        $MaintenanceExpense,
        $NewTaxesExpense,
        $PestControlExpense,
        $PoolExpense,
        $SuppliesExpense,
        $TrashExpense,
        $WaterSewerExpense,
        $WorkmansCompensationExpense,
        $ProfessionalManagementExpense,
        $ManagerExpense,
        $FinancialDataSource,
        $RentIncludes,
        $Furnished,
        $BusinessName,
        $BusinessType,
        $OwnershipType,
        $SpecialLicenses,
        $NumberOfFullTimeEmployees,
        $NumberOfPartTimeEmployees,
        $LeaseAmount,
        $LeaseAmountFrequency,
        $LeaseExpiration,
        $LeaseRenewalOptionYN,
        $LeaseAssignableYN,
        $HoursDaysofOperation,
        $HoursDaysofOperationDescription,
        $YearEstablished,
        $SeatingCapacity,
        $YearsCurrentOwner,
        $LaborInformation,
        $Utilities,
        $Electric,
        $Gas,
        $Telephone,
        $IrrigationWaterRightsYN,
        $IrrigationWaterRightsAcres,
        $IrrigationSource,
        $WaterSource,
        $DistanceToWater,
        $ElectricOnPropertyYN,
        $DistanceToElectric,
        $Sewer,
        $DistanceToSewer,
        $DistanceToGas,
        $DistanceToPhoneService,
        $DistanceToStreet,
        $DistanceToSchools,
        $DistanceFromShopping,
        $DistanceToPlaceofWorship,
        $DistanceToBus,
        $DistanceFromSchoolBus,
        $DistanceToFreeway,
        $CropsIncludedYN,
        $GrazingPermitsBlmYN,
        $GrazingPermitsForestServiceYN,
        $GrazingPermitsPrivateYN,
        $CultivatedArea,
        $PastureArea,
        $RangeArea,
        $WoodedArea,
        $Vegetation,
        $Fencing,
        $FarmCreditServiceInclYN,
        $FarmLandAreaUnits,
        $FarmLandAreaSource,
        $BedroomsTotal,
        $BedroomsPossible,
        $MainLevelBedrooms,
        $BathroomsTotalInteger,
        $BathroomsFull,
        $BathroomsHalf,
        $BathroomsThreeQuarter,
        $BathroomsOneQuarter,
        $BathroomsPartial,
        $MainLevelBathrooms,
        $LivingArea,
        $LivingAreaUnits,
        $PropertyAttachedYN,
        $GarageYN,
        $GarageSpaces,
        $StoriesTotal,
        $Stories,
        $Levels,
        $YearBuilt,
        $MobileLength,
        $MobileWidth,
        $Make,
        $Model,
        $ParcelNumber,
        $LivingAreaSource,
        $AboveGradeFinishedArea,
        $AboveGradeFinishedAreaSource,
        $AboveGradeFinishedAreaUnits,
        $BelowGradeFinishedArea,
        $BelowGradeFinishedAreaSource,
        $BelowGradeFinishedAreaUnits,
        $BuildingAreaTotal,
        $BuildingAreaSource,
        $BuildingAreaUnits,
        $LeasableArea,
        $LeasableAreaUnits,
        $CommonWalls,
        $FoundationArea,
        $AttachedGarageYN,
        $CarportSpaces,
        $CarportYN,
        $OpenParkingYN,
        $OpenParkingSpaces,
        $CoveredSpaces,
        $ParkingFeatures,
        $OtherParking,
        $ParkingTotal,
        $RVParkingDimensions,
        $EntryLocation,
        $EntryLevel,
        $YearBuiltEffective,
        $YearBuiltDetails,
        $YearBuiltSource,
        $NewConstructionYN,
        $GreenBuildingVerificationType,
        $BuilderName,
        $BuilderModel,
        $BuildingName,
        $BuildingFeatures,
        $Heating,
        $HeatingYN,
        $Cooling,
        $CoolingYN,
        $InteriorFeatures,
        $ExteriorFeatures,
        $PatioAndPorchFeatures,
        $ArchitecturalStyle,
        $PropertyCondition,
        $FireplaceFeatures,
        $FireplacesTotal,
        $FireplaceYN,
        $DoorFeatures,
        $WindowFeatures,
        $Roof,
        $ConstructionMaterials,
        $FoundationDetails,
        $Basement,
        $Flooring,
        $OtherStructures,
        $DirectionFaces,
        $OtherEquipment,
        $Appliances,
        $LaundryFeatures,
        $SecurityFeatures,
        $NumberOfSeparateElectricMeters,
        $NumberOfSeparateGasMeters,
        $NumberOfSeparateWaterMeters,
        $GreenEnergyEfficient,
        $GreenEnergyGeneration,
        $GreenSustainability,
        $GreenWaterConservation,
        $GreenIndoorAirQuality,
        $GreenLocation,
        $WalkScore,
        $HabitableResidenceYN,
        $BodyType,
        $Skirt,
        $MobileDimUnits,
        $ParkName,
        $ParkManagerName,
        $ParkManagerPhone,
        $MobileHomeRemainsYN,
        $NumberOfPads,
        $SerialU,
        $DOH1,
        $License1,
        $SerialX,
        $DOH2,
        $License2,
        $SerialXX,
        $DOH3,
        $License3,
        $AccessibilityFeatures,
        $RoomsTotal,
        $RoomType,
        $UnitTypeType,
        $Zoning,
        $ZoningDescription,
        $AdditionalParcelsYN,
        $AdditionalParcelsDescription,
        $PublicSurveySection,
        $PublicSurveyTownship,
        $PublicSurveyRange,
        $TaxLot,
        $TaxBlock,
        $TaxTract,
        $TaxLegalDescription,
        $TaxAnnualAmount,
        $TaxYear,
        $TaxAssessedValue,
        $TaxExemptions,
        $TaxOtherAnnualAssessmentAmount,
        $TaxBookNumber,
        $TaxMapNumber,
        $TaxParcelLetter,
        $TaxStatusCurrent,
        $BathroomsTotalDecimal,
        $BathroomsTotalNotational,
        $ListingUrl;
}