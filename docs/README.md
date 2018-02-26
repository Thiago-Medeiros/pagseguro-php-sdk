# PagSeguro PHP SDK

## Table of Contents

* [Abandoned](#abandoned)
    * [search](#search)
* [Abandoned](#abandoned-1)
    * [getBaseUrl](#getbaseurl)
    * [getStaticUrl](#getstaticurl)
    * [getWebserviceUrl](#getwebserviceurl)
    * [getRequestUrl](#getrequesturl)
* [Accepted](#accepted)
    * [getGroups](#getgroups)
    * [setGroups](#setgroups)
    * [getNames](#getnames)
    * [setNames](#setnames)
* [Accepted](#accepted-1)
    * [__construct](#__construct)
    * [group](#group)
    * [groups](#groups)
    * [name](#name)
    * [names](#names)
* [Accession](#accession)
    * [getBaseUrl](#getbaseurl-1)
    * [getStaticUrl](#getstaticurl-1)
    * [getWebserviceUrl](#getwebserviceurl-1)
    * [getAccessionUrl](#getaccessionurl)
* [Accession](#accession-1)
    * [__construct](#__construct-1)
    * [setPlan](#setplan)
    * [setReference](#setreference)
    * [setPaymentMethod](#setpaymentmethod)
    * [setSender](#setsender)
    * [object_to_array](#object_to_array)
    * [register](#register)
* [AccessionParser](#accessionparser)
    * [error](#error)
    * [getData](#getdata)
    * [success](#success)
* [AccessionRequest](#accessionrequest)
    * [object_to_array](#object_to_array-1)
    * [__construct](#__construct-2)
    * [setPlan](#setplan-1)
    * [setReference](#setreference-1)
    * [setPaymentMethod](#setpaymentmethod-1)
    * [setSender](#setsender-1)
* [AccessionService](#accessionservice)
    * [create](#create)
* [Account](#account)
    * [getPublicKey](#getpublickey)
    * [setPublicKey](#setpublickey)
* [Account](#account-1)
    * [__construct](#__construct-3)
    * [getSeller](#getseller)
    * [getCompany](#getcompany)
    * [getPersonal](#getpersonal)
    * [getEmail](#getemail)
    * [getType](#gettype)
* [AccountCredentials](#accountcredentials)
    * [__construct](#__construct-4)
    * [getEmail](#getemail-1)
    * [setEmail](#setemail)
    * [getToken](#gettoken)
    * [setToken](#settoken)
    * [getAttributesMap](#getattributesmap)
    * [toString](#tostring)
* [Address](#address)
    * [getList](#getlist)
    * [getType](#gettype-1)
    * [getValue](#getvalue)
    * [isValidName](#isvalidname)
    * [isValidValue](#isvalidvalue)
* [Address](#address-1)
    * [withParameters](#withparameters)
* [Address](#address-2)
    * [__construct](#__construct-5)
    * [instance](#instance)
    * [withArray](#witharray)
    * [withParameters](#withparameters-1)
* [Address](#address-3)
    * [__construct](#__construct-6)
    * [instance](#instance-1)
    * [withArray](#witharray-1)
    * [withParameters](#withparameters-2)
* [Address](#address-4)
    * [__construct](#__construct-7)
    * [instance](#instance-2)
    * [withArray](#witharray-2)
    * [withParameters](#withparameters-3)
* [Address](#address-5)
    * [__construct](#__construct-8)
    * [getCity](#getcity)
    * [setCity](#setcity)
    * [getComplement](#getcomplement)
    * [setComplement](#setcomplement)
    * [getCountry](#getcountry)
    * [setCountry](#setcountry)
    * [getDistrict](#getdistrict)
    * [setDistrict](#setdistrict)
    * [getNumber](#getnumber)
    * [setNumber](#setnumber)
    * [getPostalCode](#getpostalcode)
    * [setPostalCode](#setpostalcode)
    * [getState](#getstate)
    * [setState](#setstate)
    * [getStreet](#getstreet)
    * [setStreet](#setstreet)
* [AddressRequired](#addressrequired)
    * [__construct](#__construct-9)
    * [instance](#instance-3)
    * [withParameters](#withparameters-4)
* [Application](#application)
    * [successor](#successor)
    * [handler](#handler)
* [Application](#application-1)
    * [getId](#getid)
    * [setId](#setid)
    * [getName](#getname)
    * [setName](#setname)
    * [getRole](#getrole)
    * [setRole](#setrole)
* [ApplicationCredentials](#applicationcredentials)
    * [__construct](#__construct-10)
    * [getAppId](#getappid)
    * [setAppId](#setappid)
    * [getAppKey](#getappkey)
    * [setAppKey](#setappkey)
    * [getAuthorizationCode](#getauthorizationcode)
    * [setAuthorizationCode](#setauthorizationcode)
    * [getAttributesMap](#getattributesmap-1)
    * [toString](#tostring-1)
* [Authorization](#authorization)
    * [create](#create-1)
* [Authorization](#authorization-1)
    * [getUrl](#geturl)
    * [setUrl](#seturl)
    * [addPermission](#addpermission)
    * [setPermissions](#setpermissions)
    * [getPermissions](#getpermissions)
    * [setReference](#setreference-2)
    * [getReference](#getreference)
    * [getAccount](#getaccount)
    * [setAccount](#setaccount)
    * [register](#register-1)
* [Authorization](#authorization-2)
    * [getBaseUrl](#getbaseurl-2)
    * [getStaticUrl](#getstaticurl-2)
    * [getWebserviceUrl](#getwebserviceurl-2)
    * [getRequestUrl](#getrequesturl-1)
    * [getResponseUrl](#getresponseurl)
* [Authorization](#authorization-3)
    * [__construct](#__construct-11)
    * [getReference](#getreference-1)
    * [getPermissions](#getpermissions-1)
    * [getRedirectURL](#getredirecturl)
    * [getNotificationURL](#getnotificationurl)
    * [getAccount](#getaccount-1)
* [BackwardCompatibility](#backwardcompatibility)
* [Billing](#billing)
    * [getAddress](#getaddress)
    * [setAddress](#setaddress)
* [Billing](#billing-1)
    * [getAddress](#getaddress-1)
    * [setAddress](#setaddress-1)
    * [__construct](#__construct-12)
* [BillingAddress](#billingaddress)
    * [withParameters](#withparameters-5)
* [Boleto](#boleto)
    * [setCurrency](#setcurrency)
    * [getCurrency](#getcurrency)
    * [setExtraAmount](#setextraamount)
    * [getExtraAmount](#getextraamount)
    * [addItems](#additems)
    * [setItems](#setitems)
    * [getItems](#getitems)
    * [itemLenght](#itemlenght)
    * [getMode](#getmode)
    * [setMode](#setmode)
    * [getUrl](#geturl-1)
    * [setUrl](#seturl-1)
    * [getReceiverEmail](#getreceiveremail)
    * [setReceiverEmail](#setreceiveremail)
    * [setSender](#setsender-2)
    * [getSender](#getsender)
    * [__construct](#__construct-13)
    * [setShipping](#setshipping)
    * [getShipping](#getshipping)
    * [setReference](#setreference-3)
    * [getReference](#getreference-2)
    * [register](#register-2)
* [Boleto](#boleto-1)
    * [checkout](#checkout)
* [Builder](#builder)
    * [getBaseUrl](#getbaseurl-3)
    * [getStaticUrl](#getstaticurl-3)
    * [getWebserviceUrl](#getwebserviceurl-3)
* [Cancel](#cancel)
    * [create](#create-2)
* [Cancel](#cancel-1)
    * [create](#create-3)
* [Cancel](#cancel-2)
    * [__construct](#__construct-14)
    * [setPreApprovalCode](#setpreapprovalcode)
    * [object_to_array](#object_to_array-2)
    * [register](#register-3)
* [Cancel](#cancel-3)
    * [getBaseUrl](#getbaseurl-4)
    * [getStaticUrl](#getstaticurl-4)
    * [getWebserviceUrl](#getwebserviceurl-4)
    * [getCancelUrl](#getcancelurl)
* [Cancel](#cancel-4)
    * [getBaseUrl](#getbaseurl-5)
    * [getStaticUrl](#getstaticurl-5)
    * [getWebserviceUrl](#getwebserviceurl-5)
    * [getCancelUrl](#getcancelurl-1)
* [Cancel](#cancel-5)
    * [getBaseUrl](#getbaseurl-6)
    * [getStaticUrl](#getstaticurl-6)
    * [getWebserviceUrl](#getwebserviceurl-6)
    * [getCancelUrl](#getcancelurl-2)
* [CancelParser](#cancelparser)
    * [error](#error-1)
    * [getPreApprovalCode](#getpreapprovalcode)
    * [getData](#getdata-1)
    * [success](#success-1)
* [CancelRequest](#cancelrequest)
    * [object_to_array](#object_to_array-3)
    * [__construct](#__construct-15)
    * [setPreApprovalCode](#setpreapprovalcode-1)
* [CancelService](#cancelservice)
    * [create](#create-4)
* [ChangePayment](#changepayment)
    * [__construct](#__construct-16)
    * [setCreditCard](#setcreditcard)
    * [setSender](#setsender-3)
    * [setPreApprovalCode](#setpreapprovalcode-2)
    * [object_to_array](#object_to_array-4)
    * [register](#register-4)
* [ChangePayment](#changepayment-1)
    * [getBaseUrl](#getbaseurl-7)
    * [getStaticUrl](#getstaticurl-7)
    * [getWebserviceUrl](#getwebserviceurl-7)
    * [getChangePaymentUrl](#getchangepaymenturl)
* [ChangePaymentParser](#changepaymentparser)
    * [error](#error-2)
    * [getPreApprovalCode](#getpreapprovalcode-1)
    * [getData](#getdata-2)
    * [success](#success-2)
* [ChangePaymentRequest](#changepaymentrequest)
    * [object_to_array](#object_to_array-5)
    * [__construct](#__construct-17)
    * [setCreditCard](#setcreditcard-1)
    * [setSender](#setsender-4)
    * [setPreApprovalCode](#setpreapprovalcode-3)
* [ChangePaymentService](#changepaymentservice)
    * [create](#create-5)
* [ChangePlanSender](#changeplansender)
    * [setIp](#setip)
    * [setHash](#sethash)
* [Characters](#characters)
    * [hasSpecialChars](#hasspecialchars)
    * [removeSpecialChars](#removespecialchars)
* [Charge](#charge)
    * [getBaseUrl](#getbaseurl-8)
    * [getStaticUrl](#getstaticurl-8)
    * [getWebserviceUrl](#getwebserviceurl-8)
    * [getRequestUrl](#getrequesturl-2)
    * [getResponseUrl](#getresponseurl-1)
* [Charge](#charge-1)
    * [create](#create-6)
* [Charge](#charge-2)
    * [setReference](#setreference-4)
    * [getReference](#getreference-3)
    * [addItems](#additems-1)
    * [setItems](#setitems-1)
    * [getItems](#getitems-1)
    * [itemLenght](#itemlenght-1)
    * [getCode](#getcode)
    * [setCode](#setcode)
    * [register](#register-5)
* [Charset](#charset)
    * [getEncoding](#getencoding)
    * [setEncoding](#setencoding)
* [Code](#code)
    * [search](#search-1)
* [Code](#code-1)
    * [search](#search-2)
* [Code](#code-2)
    * [search](#search-3)
* [Company](#company)
    * [__construct](#__construct-18)
    * [addDocuments](#adddocuments)
    * [addPhones](#addphones)
    * [getName](#getname-1)
    * [getAddress](#getaddress-2)
    * [getDocuments](#getdocuments)
    * [getPhones](#getphones)
    * [getWebsiteURL](#getwebsiteurl)
    * [getPartner](#getpartner)
* [CompanyService](#companyservice)
    * [__construct](#__construct-19)
    * [getAsXML](#getasxml)
* [Configure](#configure)
    * [getAccountCredentials](#getaccountcredentials)
    * [setAccountCredentials](#setaccountcredentials)
    * [getApplicationCredentials](#getapplicationcredentials)
    * [setApplicationCredentials](#setapplicationcredentials)
    * [getEnvironment](#getenvironment)
    * [setEnvironment](#setenvironment)
    * [getCharset](#getcharset)
    * [setCharset](#setcharset)
    * [getLog](#getlog)
    * [setLog](#setlog)
* [ContentManagementSystems](#contentmanagementsystems)
    * [setName](#setname-1)
    * [getName](#getname-2)
    * [setRelease](#setrelease)
    * [getRelease](#getrelease)
* [Cost](#cost)
    * [__construct](#__construct-20)
    * [instance](#instance-4)
    * [withParameters](#withparameters-6)
* [Credentials](#credentials)
    * [getEmail](#getemail-2)
    * [setEmail](#setemail-1)
    * [getToken](#gettoken-1)
    * [setToken](#settoken-1)
    * [getAppId](#getappid-1)
    * [setAppId](#setappid-1)
    * [getAppKey](#getappkey-1)
    * [setAppKey](#setappkey-1)
* [CreditCard](#creditcard)
    * [checkout](#checkout-1)
* [CreditCard](#creditcard-1)
    * [setBilling](#setbilling)
    * [getBilling](#getbilling)
    * [setCurrency](#setcurrency-1)
    * [getCurrency](#getcurrency-1)
    * [setExtraAmount](#setextraamount-1)
    * [getExtraAmount](#getextraamount-1)
    * [getInstallment](#getinstallment)
    * [setInstallment](#setinstallment)
    * [setHolder](#setholder)
    * [getHolder](#getholder)
    * [addItems](#additems-2)
    * [setItems](#setitems-2)
    * [getItems](#getitems-2)
    * [itemLenght](#itemlenght-2)
    * [getMode](#getmode-1)
    * [setMode](#setmode-1)
    * [getUrl](#geturl-2)
    * [setUrl](#seturl-2)
    * [getReceiverEmail](#getreceiveremail-1)
    * [setReceiverEmail](#setreceiveremail-1)
    * [setSender](#setsender-5)
    * [getSender](#getsender-1)
    * [__construct](#__construct-21)
    * [setShipping](#setshipping-1)
    * [getShipping](#getshipping-1)
    * [setReference](#setreference-5)
    * [getReference](#getreference-4)
    * [getToken](#gettoken-2)
    * [setToken](#settoken-2)
    * [register](#register-6)
* [CreditCard](#creditcard-2)
    * [__construct](#__construct-22)
    * [setToken](#settoken-3)
    * [setHolder](#setholder-1)
* [CreditorFees](#creditorfees)
    * [getIntermediationFeeAmount](#getintermediationfeeamount)
    * [setIntermediationFeeAmount](#setintermediationfeeamount)
    * [getIntermediationRateAmount](#getintermediationrateamount)
    * [setIntermediationRateAmount](#setintermediationrateamount)
* [Crypto](#crypto)
    * [encrypt](#encrypt)
* [Currency](#currency)
    * [toDecimal](#todecimal)
* [Current](#current)
* [Data](#data)
    * [buildAuthorizationRequestUrl](#buildauthorizationrequesturl)
    * [buildAuthorizationResponseUrl](#buildauthorizationresponseurl)
    * [buildSearchRequestUrl](#buildsearchrequesturl)
    * [buildPaymentRequestUrl](#buildpaymentrequesturl)
    * [buildPaymentResponseUrl](#buildpaymentresponseurl)
    * [getCredentials](#getcredentials)
    * [setCredentials](#setcredentials)
    * [buildCredentialsQuery](#buildcredentialsquery)
    * [buildDirectPaymentRequestUrl](#builddirectpaymentrequesturl)
    * [buildInstallmentRequestUrl](#buildinstallmentrequesturl)
    * [buildNotificationTransactionRequestUrl](#buildnotificationtransactionrequesturl)
    * [buildNotificationAuthorizationRequestUrl](#buildnotificationauthorizationrequesturl)
    * [buildNotificationPreApprovalRequestUrl](#buildnotificationpreapprovalrequesturl)
    * [buildPreApprovalCancelUrl](#buildpreapprovalcancelurl)
    * [buildPreApprovalChargeRequestUrl](#buildpreapprovalchargerequesturl)
    * [buildPreApprovalRequestUrl](#buildpreapprovalrequesturl)
    * [buildPreApprovalResponseUrl](#buildpreapprovalresponseurl)
    * [buildRefundRequestUrl](#buildrefundrequesturl)
    * [buildSessionRequestUrl](#buildsessionrequesturl)
    * [buildAbandonedRequestUrl](#buildabandonedrequesturl)
    * [buildCancelRequestUrl](#buildcancelrequesturl)
    * [buildDirectPreApprovalAccessionRequestUrl](#builddirectpreapprovalaccessionrequesturl)
    * [buildDirectPreApprovalPlanRequestUrl](#builddirectpreapprovalplanrequesturl)
    * [buildDirectPreApprovalEditPlanRequestUrl](#builddirectpreapprovaleditplanrequesturl)
    * [buildDirectPreApprovalQueryRequestUrl](#builddirectpreapprovalqueryrequesturl)
    * [buildDirectPreApprovalPaymentRequestUrl](#builddirectpreapprovalpaymentrequesturl)
    * [buildDirectPreApprovalStatusRequestUrl](#builddirectpreapprovalstatusrequesturl)
    * [buildDirectPreApprovalCancelRequestUrl](#builddirectpreapprovalcancelrequesturl)
    * [buildDirectPreApprovalDiscountRequestUrl](#builddirectpreapprovaldiscountrequesturl)
    * [buildDirectPreApprovalChangePaymentRequestUrl](#builddirectpreapprovalchangepaymentrequesturl)
    * [buildDirectPreApprovalQueryPaymentOrderRequestUrl](#builddirectpreapprovalquerypaymentorderrequesturl)
    * [buildDirectPreApprovalQueryNotificationRequestUrl](#builddirectpreapprovalquerynotificationrequesturl)
    * [buildDirectPreApprovalRetryPaymentOrderUrl](#builddirectpreapprovalretrypaymentorderurl)
    * [__construct](#__construct-23)
    * [buildHttpUrl](#buildhttpurl)
* [Date](#date)
    * [search](#search-4)
* [Date](#date-1)
    * [search](#search-5)
* [Date](#date-2)
    * [search](#search-6)
* [DefaultAuthorizationService](#defaultauthorizationservice)
    * [__construct](#__construct-24)
    * [getAsXML](#getasxml-1)
* [Description](#description)
    * [getList](#getlist-1)
    * [getType](#gettype-2)
    * [getValue](#getvalue-1)
    * [isValidName](#isvalidname-1)
    * [isValidValue](#isvalidvalue-1)
* [Discount](#discount)
    * [__construct](#__construct-25)
    * [setType](#settype)
    * [setValue](#setvalue)
    * [setPreApprovalCode](#setpreapprovalcode-4)
    * [object_to_array](#object_to_array-6)
    * [register](#register-7)
* [Discount](#discount-1)
    * [getBaseUrl](#getbaseurl-9)
    * [getStaticUrl](#getstaticurl-9)
    * [getWebserviceUrl](#getwebserviceurl-9)
    * [getDiscountUrl](#getdiscounturl)
* [DiscountParser](#discountparser)
    * [error](#error-3)
    * [getPreApprovalCode](#getpreapprovalcode-2)
    * [getData](#getdata-3)
    * [success](#success-3)
* [DiscountRequest](#discountrequest)
    * [object_to_array](#object_to_array-7)
    * [__construct](#__construct-26)
    * [setType](#settype-1)
    * [setValue](#setvalue-1)
    * [setPreApprovalCode](#setpreapprovalcode-5)
* [DiscountService](#discountservice)
    * [create](#create-7)
* [Document](#document)
    * [withParameters](#withparameters-7)
* [Document](#document-1)
    * [__construct](#__construct-27)
    * [instance](#instance-5)
    * [withArray](#witharray-3)
    * [withParameters](#withparameters-8)
* [Document](#document-2)
    * [__construct](#__construct-28)
    * [instance](#instance-6)
    * [withArray](#witharray-4)
    * [withParameters](#withparameters-9)
* [Document](#document-3)
    * [__construct](#__construct-29)
    * [instance](#instance-7)
    * [withArray](#witharray-5)
    * [withParameters](#withparameters-10)
* [Document](#document-4)
    * [__construct](#__construct-30)
    * [getIdentifier](#getidentifier)
    * [setIdentifier](#setidentifier)
    * [getType](#gettype-3)
    * [setType](#settype-2)
    * [toString](#tostring-2)
* [EditPlan](#editplan)
    * [__construct](#__construct-31)
    * [setPreApprovalRequestCode](#setpreapprovalrequestcode)
    * [setAmountPerPayment](#setamountperpayment)
    * [setUpdateSubscriptions](#setupdatesubscriptions)
    * [object_to_array](#object_to_array-8)
    * [register](#register-8)
* [EditPlan](#editplan-1)
    * [getBaseUrl](#getbaseurl-10)
    * [getStaticUrl](#getstaticurl-10)
    * [getWebserviceUrl](#getwebserviceurl-10)
    * [getEditPlanUrl](#geteditplanurl)
* [EditPlanParser](#editplanparser)
    * [error](#error-4)
    * [getPreApprovalRequestCode](#getpreapprovalrequestcode)
    * [getData](#getdata-4)
    * [success](#success-4)
* [EditPlanRequest](#editplanrequest)
    * [object_to_array](#object_to_array-9)
    * [__construct](#__construct-32)
    * [setPreApprovalRequestCode](#setpreapprovalrequestcode-1)
    * [setAmountPerPayment](#setamountperpayment-1)
    * [setUpdateSubscriptions](#setupdatesubscriptions-1)
* [EditPlanService](#editplanservice)
    * [edit](#edit)
* [Enum](#enum)
    * [isValidName](#isvalidname-2)
    * [isValidValue](#isvalidvalue-2)
    * [getList](#getlist-2)
    * [getType](#gettype-4)
    * [getValue](#getvalue-2)
* [Environment](#environment)
    * [getEnvironment](#getenvironment-1)
    * [setEnvironment](#setenvironment-1)
* [Environment](#environment-1)
    * [getList](#getlist-3)
    * [getType](#gettype-5)
    * [getValue](#getvalue-3)
    * [isValidName](#isvalidname-3)
    * [isValidValue](#isvalidvalue-3)
* [Environment](#environment-2)
    * [successor](#successor-1)
    * [handler](#handler-1)
* [Error](#error-5)
    * [getCode](#getcode-1)
    * [setCode](#setcode-1)
    * [getMessage](#getmessage)
    * [setMessage](#setmessage)
* [Error](#error-6)
* [Expiration](#expiration)
    * [withParameters](#withparameters-11)
* [Extensible](#extensible)
    * [successor](#successor-2)
    * [handler](#handler-2)
* [Factory](#factory)
    * [setName](#setname-2)
    * [getName](#getname-3)
    * [setRelease](#setrelease-1)
    * [getRelease](#getrelease-1)
* [File](#file)
    * [successor](#successor-3)
    * [handler](#handler-3)
* [Format](#format)
    * [getList](#getlist-4)
    * [getType](#gettype-6)
    * [getValue](#getvalue-4)
    * [isValidName](#isvalidname-4)
    * [isValidValue](#isvalidvalue-4)
* [GatewaySystem](#gatewaysystem)
    * [getNsu](#getnsu)
    * [getTid](#gettid)
    * [setNsu](#setnsu)
    * [setTid](#settid)
    * [getType](#gettype-7)
    * [getRawCode](#getrawcode)
    * [getRawMessage](#getrawmessage)
    * [getNormalizedCode](#getnormalizedcode)
    * [getAuthorizationCode](#getauthorizationcode-1)
    * [getEstablishmentCode](#getestablishmentcode)
    * [setType](#settype-3)
    * [setRawCode](#setrawcode)
    * [setRawMessage](#setrawmessage)
    * [setNormalizedCode](#setnormalizedcode)
    * [setAuthorizationCode](#setauthorizationcode-1)
    * [setEstablishmentCode](#setestablishmentcode)
    * [getNormalizedMessage](#getnormalizedmessage)
    * [setNormalizedMessage](#setnormalizedmessage)
* [Generic](#generic)
    * [successor](#successor-4)
    * [handler](#handler-4)
* [Group](#group-1)
* [Holder](#holder)
    * [__construct](#__construct-33)
    * [setName](#setname-3)
    * [setBirthDate](#setbirthdate)
    * [setDocuments](#setdocuments)
    * [setPhone](#setphone)
    * [setBillingAddress](#setbillingaddress)
* [Holder](#holder-1)
    * [getDocument](#getdocument)
    * [setDocument](#setdocument)
    * [getPhone](#getphone)
    * [setPhone](#setphone-1)
    * [__construct](#__construct-34)
    * [getBirthDate](#getbirthdate)
    * [setBirthDate](#setbirthdate-1)
    * [getName](#getname-4)
    * [setName](#setname-4)
* [Holder](#holder-2)
    * [getBirthDate](#getbirthdate-1)
    * [setBirthDate](#setbirthdate-2)
    * [getDocuments](#getdocuments-1)
    * [setDocuments](#setdocuments-1)
    * [getName](#getname-5)
    * [setName](#setname-5)
    * [getPhone](#getphone-1)
    * [setPhone](#setphone-2)
* [Http](#http)
    * [__construct](#__construct-35)
    * [getStatus](#getstatus)
    * [setStatus](#setstatus)
    * [getResponse](#getresponse)
    * [setResponse](#setresponse)
    * [post](#post)
    * [put](#put)
    * [get](#get)
* [InitializeObject](#initializeobject)
    * [initialize](#initialize)
* [Installment](#installment)
    * [getQuantity](#getquantity)
    * [getValue](#getvalue-5)
    * [getNoInterestInstallmentQuantity](#getnointerestinstallmentquantity)
    * [setQuantity](#setquantity)
    * [setValue](#setvalue-2)
    * [setNoInterestInstallmentQuantity](#setnointerestinstallmentquantity)
* [Installment](#installment-1)
    * [getBaseUrl](#getbaseurl-11)
    * [getStaticUrl](#getstaticurl-11)
    * [getWebserviceUrl](#getwebserviceurl-11)
    * [getRequestUrl](#getrequesturl-3)
* [Installment](#installment-2)
    * [__construct](#__construct-36)
    * [instance](#instance-8)
    * [withArray](#witharray-6)
    * [withParameters](#withparameters-12)
* [Installment](#installment-3)
    * [getCardBrand](#getcardbrand)
    * [getQuantity](#getquantity-1)
    * [getAmount](#getamount)
    * [getTotalAmount](#gettotalamount)
    * [getInterestFree](#getinterestfree)
    * [setCardBrand](#setcardbrand)
    * [setQuantity](#setquantity-1)
    * [setAmount](#setamount)
    * [setTotalAmount](#settotalamount)
    * [setInterestFree](#setinterestfree)
* [Installment](#installment-4)
    * [create](#create-8)
* [Installments](#installments)
    * [getInstallments](#getinstallments)
    * [setInstallments](#setinstallments)
* [Instance](#instance-9)
    * [successor](#successor-5)
    * [handler](#handler-5)
* [Interval](#interval)
    * [search](#search-7)
* [Item](#item)
    * [__construct](#__construct-37)
    * [instance](#instance-10)
    * [withArray](#witharray-7)
    * [withParameters](#withparameters-13)
* [Item](#item-1)
    * [getAmount](#getamount-1)
    * [setAmount](#setamount-1)
    * [getDescription](#getdescription)
    * [setDescription](#setdescription)
    * [getId](#getid-1)
    * [setId](#setid-1)
    * [getQuantity](#getquantity-2)
    * [setQuantity](#setquantity-2)
    * [getShippingCost](#getshippingcost)
    * [setShippingCost](#setshippingcost)
    * [getWeight](#getweight)
    * [setWeight](#setweight)
* [Item](#item-2)
    * [withParameters](#withparameters-14)
* [Keys](#keys)
* [Language](#language)
    * [getRelease](#getrelease-2)
* [Level](#level)
    * [getList](#getlist-5)
    * [getType](#gettype-8)
    * [getValue](#getvalue-6)
    * [isValidName](#isvalidname-5)
    * [isValidValue](#isvalidvalue-5)
* [Library](#library)
    * [initialize](#initialize-1)
    * [validate](#validate)
    * [libraryVersion](#libraryversion)
    * [phpVersion](#phpversion)
    * [moduleVersion](#moduleversion)
    * [cmsVersion](#cmsversion)
* [Log](#log)
    * [getActive](#getactive)
    * [setActive](#setactive)
    * [getLocation](#getlocation)
    * [setLocation](#setlocation)
* [Logger](#logger)
    * [emergency](#emergency)
    * [alert](#alert)
    * [critical](#critical)
    * [error](#error-7)
    * [warning](#warning)
    * [notice](#notice)
    * [info](#info)
    * [debug](#debug)
    * [log](#log-1)
* [Mask](#mask)
    * [getList](#getlist-6)
    * [getType](#gettype-9)
    * [getValue](#getvalue-7)
    * [isValidName](#isvalidname-6)
    * [isValidValue](#isvalidvalue-6)
* [Mask](#mask-1)
    * [cpf](#cpf)
    * [rg](#rg)
    * [birthDate](#birthdate)
    * [phone](#phone)
    * [mobile](#mobile)
* [Metadata](#metadata)
    * [__construct](#__construct-38)
    * [instance](#instance-11)
    * [withArray](#witharray-8)
    * [withParameters](#withparameters-15)
* [Metadata](#metadata-1)
    * [getKey](#getkey)
    * [setKey](#setkey)
    * [getValue](#getvalue-8)
    * [setValue](#setvalue-3)
    * [getGroup](#getgroup)
    * [setGroup](#setgroup)
* [Method](#method)
* [Module](#module)
    * [setName](#setname-6)
    * [getName](#getname-6)
    * [setRelease](#setrelease-2)
    * [getRelease](#getrelease-3)
* [Name](#name-1)
* [Notification](#notification)
    * [check](#check)
* [Notification](#notification-1)
    * [search](#search-8)
* [Notification](#notification-2)
    * [getBaseUrl](#getbaseurl-12)
    * [getStaticUrl](#getstaticurl-12)
    * [getWebserviceUrl](#getwebserviceurl-12)
    * [getTransactionRequestUrl](#gettransactionrequesturl)
    * [getAuthorizationRequestUrl](#getauthorizationrequesturl)
    * [getPreApprovalRequestUrl](#getpreapprovalrequesturl)
* [Notification](#notification-3)
    * [check](#check-1)
* [Notification](#notification-4)
    * [getCode](#getcode-2)
    * [setCode](#setcode-2)
    * [getType](#gettype-10)
    * [setType](#settype-4)
* [Notification](#notification-5)
    * [getList](#getlist-7)
    * [getType](#gettype-11)
    * [getValue](#getvalue-9)
    * [isValidName](#isvalidname-7)
    * [isValidValue](#isvalidvalue-7)
* [Notification](#notification-6)
    * [search](#search-9)
* [Notification](#notification-7)
    * [check](#check-2)
* [NotificationObject](#notificationobject)
    * [initialize](#initialize-2)
* [OnlineDebit](#onlinedebit)
    * [setCurrency](#setcurrency-2)
    * [getCurrency](#getcurrency-2)
    * [setExtraAmount](#setextraamount-2)
    * [getExtraAmount](#getextraamount-2)
    * [addItems](#additems-3)
    * [setItems](#setitems-3)
    * [getItems](#getitems-3)
    * [itemLenght](#itemlenght-3)
    * [getMode](#getmode-2)
    * [setMode](#setmode-2)
    * [getUrl](#geturl-3)
    * [setUrl](#seturl-3)
    * [getReceiverEmail](#getreceiveremail-2)
    * [setReceiverEmail](#setreceiveremail-2)
    * [setSender](#setsender-6)
    * [getSender](#getsender-2)
    * [__construct](#__construct-39)
    * [setShipping](#setshipping-2)
    * [getShipping](#getshipping-2)
    * [setReference](#setreference-6)
    * [getReference](#getreference-5)
    * [getBankName](#getbankname)
    * [setBankName](#setbankname)
    * [register](#register-9)
* [OnlineDebit](#onlinedebit-1)
    * [checkout](#checkout-2)
* [Parameter](#parameter)
    * [getKey](#getkey-1)
    * [setKey](#setkey-1)
    * [getValue](#getvalue-10)
    * [setValue](#setvalue-4)
    * [getIndex](#getindex)
    * [setIndex](#setindex)
* [Parameter](#parameter-1)
    * [__construct](#__construct-40)
    * [instance](#instance-12)
    * [withArray](#witharray-9)
    * [withParameters](#withparameters-16)
    * [index](#index)
* [Partner](#partner)
    * [__construct](#__construct-41)
    * [addDocuments](#adddocuments-1)
    * [addPhones](#addphones-1)
    * [getName](#getname-7)
    * [getDocuments](#getdocuments-2)
    * [getBirthDate](#getbirthdate-2)
    * [getPhones](#getphones-1)
* [Payment](#payment)
    * [create](#create-9)
* [Payment](#payment-1)
    * [getBaseUrl](#getbaseurl-13)
    * [getStaticUrl](#getstaticurl-13)
    * [getWebserviceUrl](#getwebserviceurl-13)
    * [getPaymentUrl](#getpaymenturl)
* [Payment](#payment-2)
    * [checkout](#checkout-3)
* [Payment](#payment-3)
    * [__construct](#__construct-42)
    * [setPreApprovalCode](#setpreapprovalcode-6)
    * [setReference](#setreference-7)
    * [setSenderHash](#setsenderhash)
    * [setSenderIp](#setsenderip)
    * [addItems](#additems-4)
    * [object_to_array](#object_to_array-10)
    * [register](#register-10)
* [Payment](#payment-4)
    * [getBaseUrl](#getbaseurl-14)
    * [getStaticUrl](#getstaticurl-14)
    * [getWebserviceUrl](#getwebserviceurl-14)
    * [getRequestUrl](#getrequesturl-4)
    * [getResponseUrl](#getresponseurl-2)
* [Payment](#payment-5)
    * [accept](#accept)
    * [exclude](#exclude)
    * [getAttributeMap](#getattributemap)
    * [setCurrency](#setcurrency-3)
    * [getCurrency](#getcurrency-3)
    * [setExtraAmount](#setextraamount-3)
    * [getExtraAmount](#getextraamount-3)
    * [addItems](#additems-5)
    * [setItems](#setitems-4)
    * [getItems](#getitems-4)
    * [itemLenght](#itemlenght-4)
    * [addMetadata](#addmetadata)
    * [setMetadata](#setmetadata)
    * [getMetadata](#getmetadata)
    * [metadataLenght](#metadatalenght)
    * [getUrl](#geturl-4)
    * [setUrl](#seturl-4)
    * [addParameter](#addparameter)
    * [setParameter](#setparameter)
    * [getParameter](#getparameter)
    * [parameterLenght](#parameterlenght)
    * [addPaymentMethod](#addpaymentmethod)
    * [setPaymentMethod](#setpaymentmethod-2)
    * [getPaymentMethod](#getpaymentmethod)
    * [paymentMethodLenght](#paymentmethodlenght)
    * [getPreApproval](#getpreapproval)
    * [setPreApproval](#setpreapproval)
    * [setSender](#setsender-7)
    * [getSender](#getsender-3)
    * [__construct](#__construct-43)
    * [setShipping](#setshipping-3)
    * [getShipping](#getshipping-3)
    * [setReference](#setreference-8)
    * [getReference](#getreference-6)
    * [getReceiverEmail](#getreceiveremail-3)
    * [setReceiverEmail](#setreceiveremail-3)
    * [register](#register-11)
* [Payment](#payment-6)
    * [getBaseUrl](#getbaseurl-15)
    * [getStaticUrl](#getstaticurl-15)
    * [getWebserviceUrl](#getwebserviceurl-15)
    * [getRequestUrl](#getrequesturl-5)
    * [getResponseUrl](#getresponseurl-3)
* [Payment](#payment-7)
    * [getBaseUrl](#getbaseurl-16)
    * [getStaticUrl](#getstaticurl-16)
    * [getWebserviceUrl](#getwebserviceurl-16)
    * [getRequestUrl](#getrequesturl-6)
* [PaymentMethod](#paymentmethod)
    * [getGroup](#getgroup-1)
    * [setGroup](#setgroup-1)
    * [getKey](#getkey-2)
    * [setKey](#setkey-2)
    * [getValue](#getvalue-11)
    * [setValue](#setvalue-5)
* [PaymentMethod](#paymentmethod-1)
    * [__construct](#__construct-44)
    * [setCreditCard](#setcreditcard-2)
* [PaymentMethod](#paymentmethod-2)
    * [getCode](#getcode-3)
    * [setCode](#setcode-3)
    * [getType](#gettype-12)
    * [setType](#settype-5)
* [PaymentMethod](#paymentmethod-3)
    * [instance](#instance-13)
    * [withArray](#witharray-10)
    * [withParameters](#withparameters-17)
* [PaymentParser](#paymentparser)
    * [error](#error-8)
    * [getData](#getdata-5)
    * [success](#success-5)
* [PaymentRequest](#paymentrequest)
    * [object_to_array](#object_to_array-11)
    * [__construct](#__construct-45)
    * [setPreApprovalCode](#setpreapprovalcode-7)
    * [setReference](#setreference-9)
    * [setSenderHash](#setsenderhash-1)
    * [setSenderIp](#setsenderip-1)
    * [addItems](#additems-6)
* [PaymentService](#paymentservice)
    * [create](#create-10)
* [Permission](#permission)
    * [getCode](#getcode-4)
    * [setCode](#setcode-4)
    * [getLastUpdate](#getlastupdate)
    * [setLastUpdate](#setlastupdate)
    * [getStatus](#getstatus-1)
    * [setStatus](#setstatus-1)
* [Permissions](#permissions)
    * [getList](#getlist-8)
    * [getType](#gettype-13)
    * [getValue](#getvalue-12)
    * [isValidName](#isvalidname-8)
    * [isValidValue](#isvalidvalue-8)
* [Personal](#personal)
    * [__construct](#__construct-46)
    * [addDocuments](#adddocuments-2)
    * [addPhones](#addphones-2)
    * [getName](#getname-8)
    * [getAddress](#getaddress-3)
    * [getDocuments](#getdocuments-3)
    * [getPhones](#getphones-2)
    * [getBirthDate](#getbirthdate-3)
* [PersonalService](#personalservice)
    * [__construct](#__construct-47)
    * [getAsXML](#getasxml-2)
* [Phone](#phone-1)
    * [__construct](#__construct-48)
    * [getAreaCode](#getareacode)
    * [setAreaCode](#setareacode)
    * [getNumber](#getnumber-1)
    * [setNumber](#setnumber-1)
    * [getType](#gettype-14)
* [Phone](#phone-2)
    * [withParameters](#withparameters-18)
* [Phone](#phone-3)
    * [__construct](#__construct-49)
    * [instance](#instance-14)
    * [withArray](#witharray-11)
    * [withParameters](#withparameters-19)
* [Phone](#phone-4)
    * [__construct](#__construct-50)
    * [instance](#instance-15)
    * [withArray](#witharray-12)
    * [withParameters](#withparameters-20)
* [Phone](#phone-5)
    * [__construct](#__construct-51)
    * [instance](#instance-16)
    * [withArray](#witharray-13)
    * [withParameters](#withparameters-21)
* [PhoneEnum](#phoneenum)
    * [getList](#getlist-9)
    * [getType](#gettype-15)
    * [getValue](#getvalue-13)
    * [isValidName](#isvalidname-9)
    * [isValidValue](#isvalidvalue-9)
* [Plan](#plan)
    * [getBaseUrl](#getbaseurl-17)
    * [getStaticUrl](#getstaticurl-17)
    * [getWebserviceUrl](#getwebserviceurl-17)
    * [getPlanUrl](#getplanurl)
* [Plan](#plan-1)
    * [__construct](#__construct-52)
    * [setRedirectURL](#setredirecturl)
    * [setReference](#setreference-10)
    * [setPreApproval](#setpreapproval-1)
    * [setReviewURL](#setreviewurl)
    * [setMaxUsers](#setmaxusers)
    * [setReceiver](#setreceiver)
* [Plan](#plan-2)
    * [__construct](#__construct-53)
    * [setRedirectURL](#setredirecturl-1)
    * [setReference](#setreference-11)
    * [setPreApproval](#setpreapproval-2)
    * [setReviewURL](#setreviewurl-1)
    * [setMaxUses](#setmaxuses)
    * [setReceiver](#setreceiver-1)
    * [object_to_array](#object_to_array-12)
    * [register](#register-12)
* [PlanParser](#planparser)
    * [error](#error-9)
    * [getData](#getdata-6)
    * [success](#success-6)
* [PlanRequest](#planrequest)
    * [object_to_array](#object_to_array-13)
    * [__construct](#__construct-54)
    * [setRedirectURL](#setredirecturl-2)
    * [setReference](#setreference-12)
    * [setPreApproval](#setpreapproval-3)
    * [setReviewURL](#setreviewurl-2)
    * [setMaxUses](#setmaxuses-1)
    * [setReceiver](#setreceiver-2)
* [PlanService](#planservice)
    * [create](#create-11)
* [PreApproval](#preapproval)
    * [getAmountPerPayment](#getamountperpayment)
    * [setAmountPerPayment](#setamountperpayment-2)
    * [getCharge](#getcharge)
    * [setCharge](#setcharge)
    * [getDetails](#getdetails)
    * [setDetails](#setdetails)
    * [getFinalDate](#getfinaldate)
    * [setFinalDate](#setfinaldate)
    * [getInitialDate](#getinitialdate)
    * [setInitialDate](#setinitialdate)
    * [getMaxAmountPerPeriod](#getmaxamountperperiod)
    * [setMaxAmountPerPeriod](#setmaxamountperperiod)
    * [getMaxAmountPerPayment](#getmaxamountperpayment)
    * [setMaxAmountPerPayment](#setmaxamountperpayment)
    * [getMaxPaymentsPerPeriod](#getmaxpaymentsperperiod)
    * [setMaxPaymentsPerPeriod](#setmaxpaymentsperperiod)
    * [getMaxTotalAmount](#getmaxtotalamount)
    * [setMaxTotalAmount](#setmaxtotalamount)
    * [getName](#getname-9)
    * [setName](#setname-7)
    * [getPeriod](#getperiod)
    * [setPeriod](#setperiod)
* [PreApproval](#preapproval-1)
    * [__construct](#__construct-55)
    * [setName](#setname-8)
    * [setCharge](#setcharge-1)
    * [setPeriod](#setperiod-1)
    * [setAmountPerPayment](#setamountperpayment-3)
    * [setMembershipFee](#setmembershipfee)
    * [setTrialPeriodDuration](#settrialperiodduration)
    * [setExpiration](#setexpiration)
    * [setDetails](#setdetails-1)
    * [setMaxAmountPerPeriod](#setmaxamountperperiod-1)
    * [setMaxAmountPerPayment](#setmaxamountperpayment-1)
    * [setMaxTotalAmount](#setmaxtotalamount-1)
    * [setMaxPaymentsPerPeriod](#setmaxpaymentsperperiod-1)
    * [setInitialDate](#setinitialdate-1)
    * [setFinalDate](#setfinaldate-1)
    * [setDayOfYear](#setdayofyear)
    * [setDayOfMonth](#setdayofmonth)
    * [setDayOfWeek](#setdayofweek)
    * [setCancelURL](#setcancelurl)
* [PreApproval](#preapproval-2)
    * [successor](#successor-6)
    * [handler](#handler-6)
* [PreApproval](#preapproval-3)
    * [setCurrency](#setcurrency-4)
    * [getCurrency](#getcurrency-4)
    * [setExtraAmount](#setextraamount-4)
    * [getExtraAmount](#getextraamount-4)
    * [getPreApproval](#getpreapproval-1)
    * [setPreApproval](#setpreapproval-4)
    * [setSender](#setsender-8)
    * [getSender](#getsender-4)
    * [__construct](#__construct-56)
    * [setShipping](#setshipping-4)
    * [getShipping](#getshipping-4)
    * [setReference](#setreference-13)
    * [getReference](#getreference-7)
    * [getUrl](#geturl-5)
    * [setUrl](#seturl-5)
    * [register](#register-13)
* [Query](#query)
    * [getBaseUrl](#getbaseurl-18)
    * [getStaticUrl](#getstaticurl-18)
    * [getWebserviceUrl](#getwebserviceurl-18)
    * [getQueryUrl](#getqueryurl)
* [Query](#query-1)
    * [__construct](#__construct-57)
    * [object_to_array](#object_to_array-14)
    * [register](#register-14)
* [QueryNotification](#querynotification)
    * [__construct](#__construct-58)
    * [object_to_array](#object_to_array-15)
    * [register](#register-15)
* [QueryNotification](#querynotification-1)
    * [getBaseUrl](#getbaseurl-19)
    * [getStaticUrl](#getstaticurl-19)
    * [getWebserviceUrl](#getwebserviceurl-19)
    * [getQueryNotificationUrl](#getquerynotificationurl)
* [QueryNotificationParser](#querynotificationparser)
    * [error](#error-10)
    * [getNotificationCode](#getnotificationcode)
    * [getData](#getdata-7)
    * [success](#success-7)
* [QueryNotificationRequest](#querynotificationrequest)
    * [object_to_array](#object_to_array-16)
    * [__construct](#__construct-59)
* [QueryNotificationService](#querynotificationservice)
    * [create](#create-12)
* [QueryParsers](#queryparsers)
    * [error](#error-11)
    * [getData](#getdata-8)
    * [success](#success-8)
* [QueryPaymentOrder](#querypaymentorder)
    * [__construct](#__construct-60)
    * [object_to_array](#object_to_array-17)
    * [register](#register-16)
* [QueryPaymentOrder](#querypaymentorder-1)
    * [getBaseUrl](#getbaseurl-20)
    * [getStaticUrl](#getstaticurl-20)
    * [getWebserviceUrl](#getwebserviceurl-20)
    * [getQueryPaymentOrderUrl](#getquerypaymentorderurl)
* [QueryPaymentOrderParsers](#querypaymentorderparsers)
    * [error](#error-12)
    * [getPreApprovalCode](#getpreapprovalcode-3)
    * [getData](#getdata-9)
    * [success](#success-9)
* [QueryPaymentOrderRequest](#querypaymentorderrequest)
    * [object_to_array](#object_to_array-18)
    * [__construct](#__construct-61)
* [QueryPaymentOrderService](#querypaymentorderservice)
    * [create](#create-13)
* [QueryRequest](#queryrequest)
    * [object_to_array](#object_to_array-19)
    * [__construct](#__construct-62)
* [QueryService](#queryservice)
    * [create](#create-14)
* [Receiver](#receiver)
    * [withParameters](#withparameters-22)
* [Reference](#reference)
    * [search](#search-10)
* [Reference](#reference-1)
    * [search](#search-11)
* [Refund](#refund)
    * [create](#create-15)
* [Refund](#refund-1)
    * [getBaseUrl](#getbaseurl-21)
    * [getStaticUrl](#getstaticurl-21)
    * [getWebserviceUrl](#getwebserviceurl-21)
    * [getRequestUrl](#getrequesturl-7)
* [Request](#request)
    * [error](#error-13)
    * [success](#success-10)
* [Request](#request-1)
    * [getData](#getdata-10)
    * [getKeyByDescription](#getkeybydescription)
    * [error](#error-14)
    * [success](#success-11)
* [Request](#request-2)
    * [successor](#successor-7)
    * [handler](#handler-7)
* [Request](#request-3)
    * [error](#error-15)
    * [success](#success-12)
* [Request](#request-4)
    * [getData](#getdata-11)
    * [error](#error-16)
    * [success](#success-13)
* [Request](#request-5)
    * [getUrl](#geturl-6)
    * [setUrl](#seturl-6)
    * [addPermission](#addpermission-1)
    * [setPermissions](#setpermissions-1)
    * [getPermissions](#getpermissions-2)
    * [setReference](#setreference-14)
    * [getReference](#getreference-8)
    * [getAccount](#getaccount-2)
    * [setAccount](#setaccount-1)
* [Request](#request-6)
    * [getData](#getdata-12)
    * [error](#error-17)
    * [success](#success-14)
* [Request](#request-7)
    * [error](#error-18)
    * [getData](#getdata-13)
    * [success](#success-15)
* [Request](#request-8)
    * [setCurrency](#setcurrency-5)
    * [getCurrency](#getcurrency-5)
    * [setExtraAmount](#setextraamount-5)
    * [getExtraAmount](#getextraamount-5)
    * [addItems](#additems-7)
    * [setItems](#setitems-5)
    * [getItems](#getitems-5)
    * [itemLenght](#itemlenght-5)
    * [getMode](#getmode-3)
    * [setMode](#setmode-3)
    * [getUrl](#geturl-7)
    * [setUrl](#seturl-7)
    * [getReceiverEmail](#getreceiveremail-4)
    * [setReceiverEmail](#setreceiveremail-4)
    * [setSender](#setsender-9)
    * [getSender](#getsender-5)
    * [__construct](#__construct-63)
    * [setShipping](#setshipping-5)
    * [getShipping](#getshipping-5)
    * [setReference](#setreference-15)
    * [getReference](#getreference-9)
* [Request](#request-9)
    * [getData](#getdata-14)
    * [error](#error-19)
    * [success](#success-16)
* [Request](#request-10)
    * [setCurrency](#setcurrency-6)
    * [getCurrency](#getcurrency-6)
    * [setExtraAmount](#setextraamount-6)
    * [getExtraAmount](#getextraamount-6)
    * [getPreApproval](#getpreapproval-2)
    * [setPreApproval](#setpreapproval-5)
    * [setSender](#setsender-10)
    * [getSender](#getsender-6)
    * [__construct](#__construct-64)
    * [setShipping](#setshipping-6)
    * [getShipping](#getshipping-6)
    * [setReference](#setreference-16)
    * [getReference](#getreference-10)
    * [getUrl](#geturl-8)
    * [setUrl](#seturl-8)
* [Request](#request-11)
    * [setReference](#setreference-17)
    * [getReference](#getreference-11)
    * [addItems](#additems-8)
    * [setItems](#setitems-6)
    * [getItems](#getitems-6)
    * [itemLenght](#itemlenght-6)
* [Request](#request-12)
    * [accept](#accept-1)
    * [exclude](#exclude-1)
    * [getAttributeMap](#getattributemap-1)
    * [setCurrency](#setcurrency-7)
    * [getCurrency](#getcurrency-7)
    * [setExtraAmount](#setextraamount-7)
    * [getExtraAmount](#getextraamount-7)
    * [addItems](#additems-9)
    * [setItems](#setitems-7)
    * [getItems](#getitems-7)
    * [itemLenght](#itemlenght-7)
    * [addMetadata](#addmetadata-1)
    * [setMetadata](#setmetadata-1)
    * [getMetadata](#getmetadata-1)
    * [metadataLenght](#metadatalenght-1)
    * [getUrl](#geturl-9)
    * [setUrl](#seturl-9)
    * [addParameter](#addparameter-1)
    * [setParameter](#setparameter-1)
    * [getParameter](#getparameter-1)
    * [parameterLenght](#parameterlenght-1)
    * [addPaymentMethod](#addpaymentmethod-1)
    * [setPaymentMethod](#setpaymentmethod-3)
    * [getPaymentMethod](#getpaymentmethod-1)
    * [paymentMethodLenght](#paymentmethodlenght-1)
    * [getPreApproval](#getpreapproval-3)
    * [setPreApproval](#setpreapproval-6)
    * [setSender](#setsender-11)
    * [getSender](#getsender-7)
    * [__construct](#__construct-65)
    * [setShipping](#setshipping-7)
    * [getShipping](#getshipping-7)
    * [setReference](#setreference-18)
    * [getReference](#getreference-12)
    * [getReceiverEmail](#getreceiveremail-5)
    * [setReceiverEmail](#setreceiveremail-5)
* [Request](#request-13)
    * [setBilling](#setbilling-1)
    * [getBilling](#getbilling-1)
    * [setCurrency](#setcurrency-8)
    * [getCurrency](#getcurrency-8)
    * [setExtraAmount](#setextraamount-8)
    * [getExtraAmount](#getextraamount-8)
    * [getInstallment](#getinstallment-1)
    * [setInstallment](#setinstallment-1)
    * [setHolder](#setholder-2)
    * [getHolder](#getholder-1)
    * [addItems](#additems-10)
    * [setItems](#setitems-8)
    * [getItems](#getitems-8)
    * [itemLenght](#itemlenght-8)
    * [getMode](#getmode-4)
    * [setMode](#setmode-4)
    * [getUrl](#geturl-10)
    * [setUrl](#seturl-10)
    * [getReceiverEmail](#getreceiveremail-6)
    * [setReceiverEmail](#setreceiveremail-6)
    * [setSender](#setsender-12)
    * [getSender](#getsender-8)
    * [__construct](#__construct-66)
    * [setShipping](#setshipping-8)
    * [getShipping](#getshipping-8)
    * [setReference](#setreference-19)
    * [getReference](#getreference-13)
    * [getToken](#gettoken-3)
    * [setToken](#settoken-4)
* [Request](#request-14)
    * [setCurrency](#setcurrency-9)
    * [getCurrency](#getcurrency-9)
    * [setExtraAmount](#setextraamount-9)
    * [getExtraAmount](#getextraamount-9)
    * [addItems](#additems-11)
    * [setItems](#setitems-9)
    * [getItems](#getitems-9)
    * [itemLenght](#itemlenght-9)
    * [getMode](#getmode-5)
    * [setMode](#setmode-5)
    * [getUrl](#geturl-11)
    * [setUrl](#seturl-11)
    * [getReceiverEmail](#getreceiveremail-7)
    * [setReceiverEmail](#setreceiveremail-7)
    * [setSender](#setsender-13)
    * [getSender](#getsender-9)
    * [__construct](#__construct-67)
    * [setShipping](#setshipping-9)
    * [getShipping](#getshipping-9)
    * [setReference](#setreference-20)
    * [getReference](#getreference-14)
* [Request](#request-15)
    * [error](#error-20)
    * [getData](#getdata-15)
    * [success](#success-17)
* [Request](#request-16)
    * [error](#error-21)
    * [success](#success-18)
* [Request](#request-17)
    * [error](#error-22)
    * [success](#success-19)
* [Request](#request-18)
    * [error](#error-23)
    * [getData](#getdata-16)
    * [success](#success-20)
* [Request](#request-19)
    * [error](#error-24)
    * [success](#success-21)
* [Request](#request-20)
    * [error](#error-25)
    * [success](#success-22)
* [Request](#request-21)
    * [getData](#getdata-17)
    * [error](#error-26)
    * [success](#success-23)
* [Request](#request-22)
    * [error](#error-27)
    * [getData](#getdata-18)
    * [success](#success-24)
* [Request](#request-23)
    * [error](#error-28)
    * [success](#success-25)
* [Request](#request-24)
    * [error](#error-29)
    * [success](#success-26)
* [Request](#request-25)
    * [error](#error-30)
    * [success](#success-27)
* [Request](#request-26)
    * [error](#error-31)
    * [getData](#getdata-19)
    * [success](#success-28)
* [Request](#request-27)
    * [getData](#getdata-20)
    * [error](#error-32)
    * [success](#success-29)
* [Request](#request-28)
    * [getData](#getdata-21)
    * [error](#error-33)
    * [success](#success-30)
* [Response](#response)
    * [getCode](#getcode-5)
    * [setCode](#setcode-5)
    * [getDate](#getdate)
    * [setDate](#setdate)
* [Response](#response-1)
    * [getApplication](#getapplication)
    * [setApplication](#setapplication)
    * [getCreditorFees](#getcreditorfees)
    * [setCreditorFees](#setcreditorfees)
    * [getPaymentLink](#getpaymentlink)
    * [setPaymentLink](#setpaymentlink)
    * [getRecoveryCode](#getrecoverycode)
    * [setRecoveryCode](#setrecoverycode)
    * [getCancelationSource](#getcancelationsource)
    * [setCancelationSource](#setcancelationsource)
    * [getInstallmentCount](#getinstallmentcount)
    * [setInstallmentCount](#setinstallmentcount)
    * [getCode](#getcode-6)
    * [setCode](#setcode-6)
    * [getDate](#getdate-1)
    * [setDate](#setdate-1)
    * [getLastEventDate](#getlasteventdate)
    * [setLastEventDate](#setlasteventdate)
    * [getReference](#getreference-15)
    * [setReference](#setreference-21)
    * [getStatus](#getstatus-2)
    * [setStatus](#setstatus-2)
    * [getType](#gettype-16)
    * [setType](#settype-6)
    * [getDiscountAmount](#getdiscountamount)
    * [setDiscountAmount](#setdiscountamount)
    * [getEscrowEndDate](#getescrowenddate)
    * [setEscrowEndDate](#setescrowenddate)
    * [getExtraAmount](#getextraamount-10)
    * [setExtraAmount](#setextraamount-10)
    * [getFeeAmount](#getfeeamount)
    * [setFeeAmount](#setfeeamount)
    * [getGrossAmount](#getgrossamount)
    * [setGrossAmount](#setgrossamount)
    * [getNetAmount](#getnetamount)
    * [setNetAmount](#setnetamount)
    * [getItemCount](#getitemcount)
    * [setItemCount](#setitemcount)
    * [getItems](#getitems-10)
    * [setItems](#setitems-10)
    * [addItems](#additems-12)
    * [getPaymentMethod](#getpaymentmethod-2)
    * [setPaymentMethod](#setpaymentmethod-4)
    * [getSender](#getsender-10)
    * [setSender](#setsender-14)
    * [getShipping](#getshipping-10)
    * [setShipping](#setshipping-10)
* [Response](#response-2)
    * [getResult](#getresult)
    * [setResult](#setresult)
* [Response](#response-3)
    * [getApplication](#getapplication-1)
    * [setApplication](#setapplication-1)
    * [getCreditorFees](#getcreditorfees-1)
    * [setCreditorFees](#setcreditorfees-1)
    * [getGatewaySystem](#getgatewaysystem)
    * [setGatewaySystem](#setgatewaysystem)
    * [getCancelationSource](#getcancelationsource-1)
    * [setCancelationSource](#setcancelationsource-1)
    * [getInstallmentCount](#getinstallmentcount-1)
    * [setInstallmentCount](#setinstallmentcount-1)
    * [getCode](#getcode-7)
    * [setCode](#setcode-7)
    * [getDate](#getdate-2)
    * [setDate](#setdate-2)
    * [getLastEventDate](#getlasteventdate-1)
    * [setLastEventDate](#setlasteventdate-1)
    * [getReference](#getreference-16)
    * [setReference](#setreference-22)
    * [getStatus](#getstatus-3)
    * [setStatus](#setstatus-3)
    * [getType](#gettype-17)
    * [setType](#settype-7)
    * [getDiscountAmount](#getdiscountamount-1)
    * [setDiscountAmount](#setdiscountamount-1)
    * [getEscrowEndDate](#getescrowenddate-1)
    * [setEscrowEndDate](#setescrowenddate-1)
    * [getExtraAmount](#getextraamount-11)
    * [setExtraAmount](#setextraamount-11)
    * [getFeeAmount](#getfeeamount-1)
    * [setFeeAmount](#setfeeamount-1)
    * [getGrossAmount](#getgrossamount-1)
    * [setGrossAmount](#setgrossamount-1)
    * [getNetAmount](#getnetamount-1)
    * [setNetAmount](#setnetamount-1)
    * [getItemCount](#getitemcount-1)
    * [setItemCount](#setitemcount-1)
    * [getItems](#getitems-11)
    * [setItems](#setitems-11)
    * [addItems](#additems-13)
    * [getPaymentMethod](#getpaymentmethod-3)
    * [setPaymentMethod](#setpaymentmethod-5)
    * [getSender](#getsender-11)
    * [setSender](#setsender-15)
    * [getShipping](#getshipping-11)
    * [setShipping](#setshipping-11)
* [Response](#response-4)
    * [getResult](#getresult-1)
    * [setResult](#setresult-1)
* [Response](#response-5)
    * [getCode](#getcode-8)
    * [setCode](#setcode-8)
    * [getDate](#getdate-3)
    * [setDate](#setdate-3)
* [Response](#response-6)
    * [getAccount](#getaccount-3)
    * [setAccount](#setaccount-2)
    * [getCode](#getcode-9)
    * [setCode](#setcode-9)
    * [getCreationDate](#getcreationdate)
    * [setCreationDate](#setcreationdate)
    * [getPermissions](#getpermissions-3)
    * [setPermissions](#setpermissions-2)
    * [getReference](#getreference-17)
    * [setReference](#setreference-23)
* [Response](#response-7)
    * [getCurrentPage](#getcurrentpage)
    * [setCurrentPage](#setcurrentpage)
    * [getDate](#getdate-4)
    * [setDate](#setdate-4)
    * [getResultsInThisPage](#getresultsinthispage)
    * [setResultsInThisPage](#setresultsinthispage)
    * [getTotalPages](#gettotalpages)
    * [setTotalPages](#settotalpages)
    * [getAuthorizations](#getauthorizations)
    * [setAuthorizations](#setauthorizations)
* [Response](#response-8)
    * [getCharge](#getcharge-1)
    * [setCharge](#setcharge-2)
    * [getCode](#getcode-10)
    * [setCode](#setcode-10)
    * [getDate](#getdate-5)
    * [setDate](#setdate-5)
    * [getLastEventDate](#getlasteventdate-2)
    * [setLastEventDate](#setlasteventdate-2)
    * [getName](#getname-10)
    * [setName](#setname-9)
    * [getReference](#getreference-18)
    * [setReference](#setreference-24)
    * [getStatus](#getstatus-4)
    * [setStatus](#setstatus-4)
    * [getTracker](#gettracker)
    * [setTracker](#settracker)
    * [getSender](#getsender-12)
    * [setSender](#setsender-16)
* [Response](#response-9)
    * [getCurrentPage](#getcurrentpage-1)
    * [setCurrentPage](#setcurrentpage-1)
    * [getDate](#getdate-6)
    * [setDate](#setdate-6)
    * [getResultsInThisPage](#getresultsinthispage-1)
    * [setResultsInThisPage](#setresultsinthispage-1)
    * [getTotalPages](#gettotalpages-1)
    * [setTotalPages](#settotalpages-1)
    * [getTransactions](#gettransactions)
    * [setTransactions](#settransactions)
    * [addTransactions](#addtransactions)
* [Response](#response-10)
    * [getCharge](#getcharge-2)
    * [setCharge](#setcharge-3)
    * [getCode](#getcode-11)
    * [setCode](#setcode-11)
    * [getDate](#getdate-7)
    * [setDate](#setdate-7)
    * [getLastEventDate](#getlasteventdate-3)
    * [setLastEventDate](#setlasteventdate-3)
    * [getName](#getname-11)
    * [setName](#setname-10)
    * [getReference](#getreference-19)
    * [setReference](#setreference-25)
    * [getStatus](#getstatus-5)
    * [setStatus](#setstatus-5)
    * [getTracker](#gettracker-1)
    * [setTracker](#settracker-1)
* [Response](#response-11)
    * [getPaymentLink](#getpaymentlink-1)
    * [setPaymentLink](#setpaymentlink-1)
    * [getCancelationSource](#getcancelationsource-2)
    * [setCancelationSource](#setcancelationsource-2)
    * [getInstallmentCount](#getinstallmentcount-2)
    * [setInstallmentCount](#setinstallmentcount-2)
    * [getCode](#getcode-12)
    * [setCode](#setcode-12)
    * [getDate](#getdate-8)
    * [setDate](#setdate-8)
    * [getLastEventDate](#getlasteventdate-4)
    * [setLastEventDate](#setlasteventdate-4)
    * [getReference](#getreference-20)
    * [setReference](#setreference-26)
    * [getStatus](#getstatus-6)
    * [setStatus](#setstatus-6)
    * [getType](#gettype-18)
    * [setType](#settype-8)
    * [getDiscountAmount](#getdiscountamount-2)
    * [setDiscountAmount](#setdiscountamount-2)
    * [getEscrowEndDate](#getescrowenddate-2)
    * [setEscrowEndDate](#setescrowenddate-2)
    * [getExtraAmount](#getextraamount-12)
    * [setExtraAmount](#setextraamount-12)
    * [getFeeAmount](#getfeeamount-2)
    * [setFeeAmount](#setfeeamount-2)
    * [getGrossAmount](#getgrossamount-2)
    * [setGrossAmount](#setgrossamount-2)
    * [getNetAmount](#getnetamount-2)
    * [setNetAmount](#setnetamount-2)
    * [getCreditorFees](#getcreditorfees-2)
    * [setCreditorFees](#setcreditorfees-2)
    * [getItemCount](#getitemcount-2)
    * [setItemCount](#setitemcount-2)
    * [getItems](#getitems-12)
    * [setItems](#setitems-12)
    * [addItems](#additems-14)
    * [getPaymentMethod](#getpaymentmethod-4)
    * [setPaymentMethod](#setpaymentmethod-6)
    * [getSender](#getsender-13)
    * [setSender](#setsender-17)
    * [getShipping](#getshipping-12)
    * [setShipping](#setshipping-12)
* [Response](#response-12)
    * [getResult](#getresult-2)
    * [setResult](#setresult-2)
* [Response](#response-13)
    * [getCurrentPage](#getcurrentpage-2)
    * [setCurrentPage](#setcurrentpage-2)
    * [getDate](#getdate-9)
    * [setDate](#setdate-9)
    * [getResultsInThisPage](#getresultsinthispage-2)
    * [setResultsInThisPage](#setresultsinthispage-2)
    * [getTotalPages](#gettotalpages-2)
    * [setTotalPages](#settotalpages-2)
    * [getTransactions](#gettransactions-1)
    * [setTransactions](#settransactions-1)
* [Response](#response-14)
    * [getCode](#getcode-13)
    * [setCode](#setcode-13)
    * [getDate](#getdate-10)
    * [setDate](#setdate-10)
* [Response](#response-15)
    * [getDiscountAmount](#getdiscountamount-3)
    * [setDiscountAmount](#setdiscountamount-3)
    * [getEscrowEndDate](#getescrowenddate-3)
    * [setEscrowEndDate](#setescrowenddate-3)
    * [getExtraAmount](#getextraamount-13)
    * [setExtraAmount](#setextraamount-13)
    * [getFeeAmount](#getfeeamount-3)
    * [setFeeAmount](#setfeeamount-3)
    * [getGrossAmount](#getgrossamount-3)
    * [setGrossAmount](#setgrossamount-3)
    * [getNetAmount](#getnetamount-3)
    * [setNetAmount](#setnetamount-3)
    * [getCreditorFees](#getcreditorfees-3)
    * [setCreditorFees](#setcreditorfees-3)
    * [getItemCount](#getitemcount-3)
    * [setItemCount](#setitemcount-3)
    * [getItems](#getitems-13)
    * [setItems](#setitems-13)
    * [addItems](#additems-15)
    * [getPaymentMethod](#getpaymentmethod-5)
    * [setPaymentMethod](#setpaymentmethod-7)
    * [getSender](#getsender-14)
    * [setSender](#setsender-18)
    * [getShipping](#getshipping-13)
    * [setShipping](#setshipping-13)
    * [getCancelationSource](#getcancelationsource-3)
    * [setCancelationSource](#setcancelationsource-3)
    * [getInstallmentCount](#getinstallmentcount-3)
    * [setInstallmentCount](#setinstallmentcount-3)
    * [getCode](#getcode-14)
    * [setCode](#setcode-14)
    * [getDate](#getdate-11)
    * [setDate](#setdate-11)
    * [getLastEventDate](#getlasteventdate-5)
    * [setLastEventDate](#setlasteventdate-5)
    * [getReference](#getreference-21)
    * [setReference](#setreference-27)
    * [getStatus](#getstatus-7)
    * [setStatus](#setstatus-7)
    * [getType](#gettype-19)
    * [setType](#settype-9)
* [Response](#response-16)
    * [getApplication](#getapplication-2)
    * [setApplication](#setapplication-2)
    * [getCreditorFees](#getcreditorfees-4)
    * [setCreditorFees](#setcreditorfees-4)
    * [getPaymentLink](#getpaymentlink-2)
    * [setPaymentLink](#setpaymentlink-2)
    * [getCancelationSource](#getcancelationsource-4)
    * [setCancelationSource](#setcancelationsource-4)
    * [getInstallmentCount](#getinstallmentcount-4)
    * [setInstallmentCount](#setinstallmentcount-4)
    * [getCode](#getcode-15)
    * [setCode](#setcode-15)
    * [getDate](#getdate-12)
    * [setDate](#setdate-12)
    * [getLastEventDate](#getlasteventdate-6)
    * [setLastEventDate](#setlasteventdate-6)
    * [getReference](#getreference-22)
    * [setReference](#setreference-28)
    * [getStatus](#getstatus-8)
    * [setStatus](#setstatus-8)
    * [getType](#gettype-20)
    * [setType](#settype-10)
    * [getDiscountAmount](#getdiscountamount-4)
    * [setDiscountAmount](#setdiscountamount-4)
    * [getEscrowEndDate](#getescrowenddate-4)
    * [setEscrowEndDate](#setescrowenddate-4)
    * [getExtraAmount](#getextraamount-14)
    * [setExtraAmount](#setextraamount-14)
    * [getFeeAmount](#getfeeamount-4)
    * [setFeeAmount](#setfeeamount-4)
    * [getGrossAmount](#getgrossamount-4)
    * [setGrossAmount](#setgrossamount-4)
    * [getNetAmount](#getnetamount-4)
    * [setNetAmount](#setnetamount-4)
    * [getItemCount](#getitemcount-4)
    * [setItemCount](#setitemcount-4)
    * [getItems](#getitems-14)
    * [setItems](#setitems-14)
    * [addItems](#additems-16)
    * [getPaymentMethod](#getpaymentmethod-6)
    * [setPaymentMethod](#setpaymentmethod-8)
    * [getSender](#getsender-15)
    * [setSender](#setsender-19)
    * [getShipping](#getshipping-14)
    * [setShipping](#setshipping-14)
* [Responsibility](#responsibility)
    * [http](#http-1)
    * [configuration](#configuration)
    * [notifications](#notifications)
* [Result](#result)
    * [getCurrentPage](#getcurrentpage-3)
    * [setCurrentPage](#setcurrentpage-3)
    * [getDate](#getdate-13)
    * [setDate](#setdate-13)
    * [getResultsInThisPage](#getresultsinthispage-3)
    * [setResultsInThisPage](#setresultsinthispage-3)
    * [getTotalPages](#gettotalpages-3)
    * [setTotalPages](#settotalpages-3)
    * [getPreApprovals](#getpreapprovals)
    * [setPreApprovals](#setpreapprovals)
* [RetryPaymentOrder](#retrypaymentorder)
    * [getBaseUrl](#getbaseurl-22)
    * [getStaticUrl](#getstaticurl-22)
    * [getWebserviceUrl](#getwebserviceurl-22)
    * [getRetryPaymentOrderUrl](#getretrypaymentorderurl)
* [RetryPaymentOrder](#retrypaymentorder-1)
    * [__construct](#__construct-68)
    * [setPreApprovalCode](#setpreapprovalcode-8)
    * [setPaymentOrderCode](#setpaymentordercode)
    * [object_to_array](#object_to_array-20)
    * [register](#register-17)
* [RetryPaymentOrderParser](#retrypaymentorderparser)
    * [error](#error-34)
    * [getData](#getdata-22)
    * [success](#success-31)
* [RetryPaymentOrderRequest](#retrypaymentorderrequest)
    * [object_to_array](#object_to_array-21)
    * [__construct](#__construct-69)
    * [setPreApprovalCode](#setpreapprovalcode-9)
    * [setPaymentOrderCode](#setpaymentordercode-1)
* [RetryPaymentOrderService](#retrypaymentorderservice)
    * [create](#create-16)
* [Search](#search-12)
    * [getBaseUrl](#getbaseurl-23)
    * [getStaticUrl](#getstaticurl-23)
    * [getWebserviceUrl](#getwebserviceurl-23)
    * [getSearchRequestUrl](#getsearchrequesturl)
* [Search](#search-13)
    * [getBaseUrl](#getbaseurl-24)
    * [getStaticUrl](#getstaticurl-24)
    * [getWebserviceUrl](#getwebserviceurl-24)
    * [getSearchRequestUrl](#getsearchrequesturl-1)
* [Search](#search-14)
    * [getBaseUrl](#getbaseurl-25)
    * [getStaticUrl](#getstaticurl-25)
    * [getWebserviceUrl](#getwebserviceurl-25)
    * [getSearchRequestUrl](#getsearchrequesturl-2)
* [Seller](#seller)
    * [__construct](#__construct-70)
    * [addDocuments](#adddocuments-3)
    * [addPhones](#addphones-3)
    * [getName](#getname-12)
    * [getAddress](#getaddress-4)
    * [getDocuments](#getdocuments-4)
    * [getPhones](#getphones-3)
    * [getBirthDate](#getbirthdate-4)
* [SellerService](#sellerservice)
    * [__construct](#__construct-71)
    * [getAsXML](#getasxml-3)
* [Sender](#sender)
    * [getEmail](#getemail-3)
    * [setEmail](#setemail-2)
    * [getName](#getname-13)
    * [setName](#setname-11)
    * [getDocument](#getdocument-1)
    * [setDocument](#setdocument-1)
    * [getPhone](#getphone-2)
    * [setPhone](#setphone-3)
    * [__construct](#__construct-72)
* [Sender](#sender-1)
    * [getEmail](#getemail-4)
    * [setEmail](#setemail-3)
    * [getName](#getname-14)
    * [setName](#setname-12)
    * [getDocument](#getdocument-2)
    * [setDocument](#setdocument-2)
    * [getHash](#gethash)
    * [setHash](#sethash-1)
    * [getIp](#getip)
    * [setIp](#setip-1)
    * [getPhone](#getphone-3)
    * [setPhone](#setphone-4)
    * [__construct](#__construct-73)
* [Sender](#sender-2)
    * [getAddress](#getaddress-5)
    * [setAddress](#setaddress-2)
    * [getEmail](#getemail-5)
    * [setEmail](#setemail-4)
    * [getName](#getname-15)
    * [setName](#setname-13)
    * [getPhone](#getphone-4)
    * [setPhone](#setphone-5)
    * [__construct](#__construct-74)
* [Sender](#sender-3)
    * [__construct](#__construct-75)
    * [instance](#instance-17)
    * [withArray](#witharray-14)
    * [withParameters](#withparameters-23)
    * [setHash](#sethash-2)
* [Sender](#sender-4)
    * [setName](#setname-14)
    * [setEmail](#setemail-5)
    * [setIp](#setip-2)
    * [setHash](#sethash-3)
    * [setPhone](#setphone-6)
    * [setDocuments](#setdocuments-2)
    * [setAddress](#setaddress-3)
* [Sender](#sender-5)
    * [__construct](#__construct-76)
    * [instance](#instance-18)
    * [withArray](#witharray-15)
    * [withParameters](#withparameters-24)
* [Sender](#sender-6)
    * [__construct](#__construct-77)
    * [getName](#getname-16)
    * [setName](#setname-15)
    * [getEmail](#getemail-6)
    * [setEmail](#setemail-6)
    * [getPhone](#getphone-5)
    * [setPhone](#setphone-7)
    * [getDocuments](#getdocuments-5)
    * [setDocuments](#setdocuments-3)
    * [addDocument](#adddocument)
* [Sender](#sender-7)
    * [__construct](#__construct-78)
    * [getName](#getname-17)
    * [setName](#setname-16)
    * [getEmail](#getemail-7)
    * [setEmail](#setemail-7)
    * [getPhone](#getphone-6)
    * [setPhone](#setphone-8)
    * [getDocuments](#getdocuments-6)
    * [setDocuments](#setdocuments-4)
    * [addDocument](#adddocument-1)
    * [getIp](#getip-1)
    * [setIp](#setip-3)
    * [getHash](#gethash-1)
    * [setHash](#sethash-4)
* [Sender](#sender-8)
    * [__construct](#__construct-79)
    * [getName](#getname-18)
    * [setName](#setname-17)
    * [getEmail](#getemail-8)
    * [setEmail](#setemail-8)
    * [getPhone](#getphone-7)
    * [setPhone](#setphone-9)
    * [getDocuments](#getdocuments-7)
    * [setDocuments](#setdocuments-5)
    * [addDocument](#adddocument-2)
    * [getAddress](#getaddress-6)
    * [setAddress](#setaddress-4)
* [Session](#session)
    * [getBaseUrl](#getbaseurl-26)
    * [getStaticUrl](#getstaticurl-26)
    * [getWebserviceUrl](#getwebserviceurl-26)
    * [getRequestUrl](#getrequesturl-8)
* [Session](#session-1)
    * [create](#create-17)
* [Shipping](#shipping)
    * [getAddress](#getaddress-7)
    * [setAddress](#setaddress-5)
    * [getCost](#getcost)
    * [setCost](#setcost)
    * [getType](#gettype-21)
    * [setType](#settype-11)
    * [getAddressRequired](#getaddressrequired)
    * [setAddressRequired](#setaddressrequired)
* [Shipping](#shipping-1)
    * [getAddress](#getaddress-8)
    * [setAddress](#setaddress-6)
    * [getCost](#getcost-1)
    * [setCost](#setcost-1)
    * [getType](#gettype-22)
    * [setType](#settype-12)
    * [getAddressRequired](#getaddressrequired-1)
    * [setAddressRequired](#setaddressrequired-1)
    * [__construct](#__construct-80)
* [ShippingAddressRequired](#shippingaddressrequired)
    * [getAddressRequired](#getaddressrequired-2)
    * [setAddressRequired](#setaddressrequired-2)
* [ShippingCost](#shippingcost)
    * [getCost](#getcost-2)
    * [setCost](#setcost-2)
* [ShippingType](#shippingtype)
    * [getType](#gettype-23)
    * [setType](#settype-13)
* [Status](#status)
    * [getStatus](#getstatus-9)
    * [getType](#gettype-24)
* [Status](#status-1)
    * [getBaseUrl](#getbaseurl-27)
    * [getStaticUrl](#getstaticurl-27)
    * [getWebserviceUrl](#getwebserviceurl-27)
    * [getStatusUrl](#getstatusurl)
* [Status](#status-2)
    * [getList](#getlist-10)
    * [getType](#gettype-25)
    * [getValue](#getvalue-14)
    * [isValidName](#isvalidname-10)
    * [isValidValue](#isvalidvalue-10)
* [Status](#status-3)
    * [__construct](#__construct-81)
    * [setStatus](#setstatus-9)
    * [setPreApprovalCode](#setpreapprovalcode-10)
    * [object_to_array](#object_to_array-22)
    * [register](#register-18)
* [StatusParser](#statusparser)
    * [error](#error-35)
    * [getPreApprovalCode](#getpreapprovalcode-4)
    * [getData](#getdata-23)
    * [success](#success-32)
* [StatusRequest](#statusrequest)
    * [object_to_array](#object_to_array-23)
    * [__construct](#__construct-82)
    * [setStatus](#setstatus-10)
    * [setPreApprovalCode](#setpreapprovalcode-11)
* [StatusService](#statusservice)
    * [create](#create-18)
* [StringFormat](#stringformat)
    * [getOnlyNumbers](#getonlynumbers)
    * [formatString](#formatstring)
    * [removeStringExtraSpaces](#removestringextraspaces)
    * [truncateValue](#truncatevalue)
* [Success](#success-33)
    * [successor](#successor-8)
    * [handler](#handler-8)
* [Transaction](#transaction)
    * [getCode](#getcode-16)
    * [setCode](#setcode-16)
    * [getDate](#getdate-14)
    * [setDate](#setdate-14)
    * [getReference](#getreference-23)
    * [setReference](#setreference-29)
    * [getType](#gettype-26)
    * [setType](#settype-14)
    * [getGrossAmount](#getgrossamount-5)
    * [setGrossAmount](#setgrossamount-5)
    * [getRecoveryCode](#getrecoverycode-1)
    * [setRecoveryCode](#setrecoverycode-1)
* [Transaction](#transaction-1)
    * [getDiscountAmount](#getdiscountamount-5)
    * [setDiscountAmount](#setdiscountamount-5)
    * [getEscrowEndDate](#getescrowenddate-5)
    * [setEscrowEndDate](#setescrowenddate-5)
    * [getExtraAmount](#getextraamount-15)
    * [setExtraAmount](#setextraamount-15)
    * [getFeeAmount](#getfeeamount-5)
    * [setFeeAmount](#setfeeamount-5)
    * [getGrossAmount](#getgrossamount-6)
    * [setGrossAmount](#setgrossamount-6)
    * [getNetAmount](#getnetamount-5)
    * [setNetAmount](#setnetamount-5)
    * [getPaymentMethod](#getpaymentmethod-7)
    * [setPaymentMethod](#setpaymentmethod-9)
    * [getCode](#getcode-17)
    * [setCode](#setcode-17)
    * [getDate](#getdate-15)
    * [setDate](#setdate-15)
    * [getReference](#getreference-24)
    * [setReference](#setreference-30)
    * [getType](#gettype-27)
    * [setType](#settype-15)
    * [getCancellationSource](#getcancellationsource)
    * [setCancellationSource](#setcancellationsource)
    * [getLastEventDate](#getlasteventdate-7)
    * [setLastEventDate](#setlasteventdate-7)
    * [getStatus](#getstatus-10)
    * [setStatus](#setstatus-11)
* [Transaction](#transaction-2)
    * [successor](#successor-9)
    * [handler](#handler-9)
* [Type](#type)
    * [__construct](#__construct-83)
    * [instance](#instance-19)
    * [withParameters](#withparameters-25)
* [Type](#type-1)
* [Unauthorized](#unauthorized)
    * [successor](#successor-10)
    * [handler](#handler-10)
* [Validate](#validate-1)
    * [cUrl](#curl)
    * [simpleXml](#simplexml)
* [Wrapper](#wrapper)
    * [successor](#successor-11)
    * [handler](#handler-11)
* [Wrapper](#wrapper-1)
* [Wrapper](#wrapper-2)
    * [environment](#environment-3)
    * [credentials](#credentials-1)
    * [charset](#charset-1)
    * [log](#log-2)
* [Xhr](#xhr)
    * [hasPost](#haspost)
    * [hasGet](#hasget)
    * [getInputCode](#getinputcode)
    * [getInputType](#getinputtype)

## Abandoned

Class Payment



* Full name: \PagSeguro\Services\Transactions\Search\Abandoned


### search



```php
Abandoned::search( \PagSeguro\Domains\Account\Credentials $credentials,  $options ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$options` | **** |  |




---

## Abandoned

Class Payment



* Full name: \PagSeguro\Resources\Builder\Transaction\Abandoned
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Abandoned::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Abandoned::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Abandoned::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getRequestUrl



```php
Abandoned::getRequestUrl(  ): string
```



* This method is **static**.



---

## Accepted

Class Accepted



* Full name: \PagSeguro\Domains\PaymentMethod\Accepted


### getGroups



```php
Accepted::getGroups(  ): array
```







---

### setGroups



```php
Accepted::setGroups( mixed $groups ): \PagSeguro\Domains\PaymentMethod\Accepted
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$groups` | **mixed** |  |




---

### getNames



```php
Accepted::getNames(  ): array
```







---

### setNames



```php
Accepted::setNames( mixed $names ): \PagSeguro\Domains\PaymentMethod\Accepted
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$names` | **mixed** |  |




---

## Accepted

Class Metadata



* Full name: \PagSeguro\Resources\Factory\Request\Accepted


### __construct



```php
Accepted::__construct(  )
```







---

### group



```php
Accepted::group(  $group ): \PagSeguro\Domains\PaymentMethod\Accepted
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **** |  |




---

### groups



```php
Accepted::groups(  ): \PagSeguro\Domains\PaymentMethod\Accepted
```







---

### name



```php
Accepted::name(  $name ): \PagSeguro\Domains\PaymentMethod\Accepted
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |




---

### names



```php
Accepted::names(  ): \PagSeguro\Domains\PaymentMethod\Accepted
```







---

## Accession

Class Accession



* Full name: \PagSeguro\Resources\Builder\DirectPreApproval\Accession
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Accession::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Accession::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Accession::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getAccessionUrl



```php
Accession::getAccessionUrl(  ): string
```



* This method is **static**.



---

## Accession

Class Accession



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\Accession
* Parent class: \PagSeguro\Domains\Requests\DirectPreApproval\AccessionRequest


### __construct

AccessionRequest constructor.

```php
Accession::__construct(  )
```







---

### setPlan



```php
Accession::setPlan(  $plan )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plan` | **** |  |




---

### setReference



```php
Accession::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### setPaymentMethod



```php
Accession::setPaymentMethod(  ): \PagSeguro\Domains\DirectPreApproval\PaymentMethod
```







---

### setSender



```php
Accession::setSender(  ): \PagSeguro\Domains\DirectPreApproval\Sender
```







---

### object_to_array



```php
Accession::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### register



```php
Accession::register(  $credentials ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## AccessionParser

Class AccessionParser



* Full name: \PagSeguro\Parsers\DirectPreApproval\AccessionParser
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
AccessionParser::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getData



```php
AccessionParser::getData( \PagSeguro\Domains\Requests\DirectPreApproval\Accession $directPreApproval ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directPreApproval` | **\PagSeguro\Domains\Requests\DirectPreApproval\Accession** |  |




---

### success



```php
AccessionParser::success( \PagSeguro\Resources\Http $http ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## AccessionRequest

Class AccessionRequest



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\AccessionRequest


### object_to_array



```php
AccessionRequest::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### __construct

AccessionRequest constructor.

```php
AccessionRequest::__construct(  )
```







---

### setPlan



```php
AccessionRequest::setPlan(  $plan )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plan` | **** |  |




---

### setReference



```php
AccessionRequest::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### setPaymentMethod



```php
AccessionRequest::setPaymentMethod(  ): \PagSeguro\Domains\DirectPreApproval\PaymentMethod
```







---

### setSender



```php
AccessionRequest::setSender(  ): \PagSeguro\Domains\DirectPreApproval\Sender
```







---

## AccessionService

Class AccessionService



* Full name: \PagSeguro\Services\DirectPreApproval\AccessionService


### create



```php
AccessionService::create( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\DirectPreApproval\Accession $directPreApproval ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$directPreApproval` | **\PagSeguro\Domains\Requests\DirectPreApproval\Accession** |  |




---

## Account

Class Account



* Full name: \PagSeguro\Domains\Account


### getPublicKey



```php
Account::getPublicKey(  ): mixed
```







---

### setPublicKey



```php
Account::setPublicKey( mixed $publicKey )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$publicKey` | **mixed** |  |




---

## Account

Class Account



* Full name: \PagSeguro\Domains\Authorization\Account


### __construct

Account constructor.

```php
Account::__construct( string $email,  $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **string** |  |
| `$type` | **** |  |




---

### getSeller



```php
Account::getSeller(  ): \PagSeguro\Domains\Authorization\Seller
```







---

### getCompany



```php
Account::getCompany(  ): \PagSeguro\Domains\Authorization\Company
```







---

### getPersonal



```php
Account::getPersonal(  ): \PagSeguro\Domains\Authorization\Company
```







---

### getEmail



```php
Account::getEmail(  ): string
```







---

### getType



```php
Account::getType(  ): string
```







---

## AccountCredentials

Class AccountCredentials



* Full name: \PagSeguro\Domains\AccountCredentials
* This class implements: \PagSeguro\Domains\Account\Credentials


### __construct

AccountCredentials constructor.

```php
AccountCredentials::__construct( null|string $email = null, null|string $token = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **null&#124;string** |  |
| `$token` | **null&#124;string** |  |




---

### getEmail



```php
AccountCredentials::getEmail(  ): string
```







---

### setEmail



```php
AccountCredentials::setEmail( string $email ): \PagSeguro\Domains\AccountCredentials
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **string** |  |




---

### getToken



```php
AccountCredentials::getToken(  ): string
```







---

### setToken



```php
AccountCredentials::setToken( string $token ): \PagSeguro\Domains\AccountCredentials
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** |  |




---

### getAttributesMap



```php
AccountCredentials::getAttributesMap(  ): array
```







---

### toString



```php
AccountCredentials::toString(  ): string
```







---

## Address

Class Address



* Full name: \PagSeguro\Enum\Address
* Parent class: \PagSeguro\Enum\Enum


### getList



```php
Address::getList(  ): array
```



* This method is **static**.



---

### getType



```php
Address::getType(  $key ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### getValue



```php
Address::getValue(  $value ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### isValidName



```php
Address::isValidName(  $name, boolean $strict = false ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |
| `$strict` | **boolean** |  |




---

### isValidValue



```php
Address::isValidValue(  $value, boolean $strict = true ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |
| `$strict` | **boolean** |  |




---

## Address

Class Address



* Full name: \PagSeguro\Domains\DirectPreApproval\Address


### withParameters



```php
Address::withParameters(  $street,  $number,  $district,  $postalCode,  $city,  $state,  $country, null $complement = null ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$street` | **** |  |
| `$number` | **** |  |
| `$district` | **** |  |
| `$postalCode` | **** |  |
| `$city` | **** |  |
| `$state` | **** |  |
| `$country` | **** |  |
| `$complement` | **null** |  |




---

## Address

Class Shipping



* Full name: \PagSeguro\Resources\Factory\Sender\Address


### __construct

Shipping constructor.

```php
Address::__construct(  $sender )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sender` | **** |  |




---

### instance



```php
Address::instance( \PagSeguro\Domains\Addres $address ): \PagSeguro\Domains\Shipping
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **\PagSeguro\Domains\Addres** |  |




---

### withArray



```php
Address::withArray(  $array ): \PagSeguro\Domains\Shipping
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
Address::withParameters(  $street,  $number,  $district,  $postalCode,  $city,  $state,  $country, null $complement = null ): \PagSeguro\Domains\Shipping
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$street` | **** |  |
| `$number` | **** |  |
| `$district` | **** |  |
| `$postalCode` | **** |  |
| `$city` | **** |  |
| `$state` | **** |  |
| `$country` | **** |  |
| `$complement` | **null** |  |




---

## Address

Class Shipping



* Full name: \PagSeguro\Resources\Factory\Request\DirectPayment\CreditCard\Billing\Address


### __construct

Shipping constructor.

```php
Address::__construct(  $billing )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$billing` | **** |  |




---

### instance



```php
Address::instance( \PagSeguro\Domains\Address $address ): \PagSeguro\Domains\DirectPayment\CreditCard\Billing
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **\PagSeguro\Domains\Address** |  |




---

### withArray



```php
Address::withArray(  $array ): \PagSeguro\Domains\DirectPayment\CreditCard\Billing
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
Address::withParameters(  $street,  $number,  $district,  $postalCode,  $city,  $state,  $country, null $complement = null ): \PagSeguro\Domains\DirectPayment\CreditCard\Billing
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$street` | **** |  |
| `$number` | **** |  |
| `$district` | **** |  |
| `$postalCode` | **** |  |
| `$city` | **** |  |
| `$state` | **** |  |
| `$country` | **** |  |
| `$complement` | **null** |  |




---

## Address

Class Shipping



* Full name: \PagSeguro\Resources\Factory\Shipping\Address


### __construct

Shipping constructor.

```php
Address::__construct(  $shipping )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shipping` | **** |  |




---

### instance



```php
Address::instance( \PagSeguro\Domains\Addres $address ): \PagSeguro\Domains\Shipping
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **\PagSeguro\Domains\Addres** |  |




---

### withArray



```php
Address::withArray(  $array ): \PagSeguro\Domains\Shipping
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
Address::withParameters(  $street,  $number,  $district,  $postalCode,  $city,  $state,  $country, null $complement = null ): \PagSeguro\Domains\Shipping
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$street` | **** |  |
| `$number` | **** |  |
| `$district` | **** |  |
| `$postalCode` | **** |  |
| `$city` | **** |  |
| `$state` | **** |  |
| `$country` | **** |  |
| `$complement` | **null** |  |




---

## Address

Class Address



* Full name: \PagSeguro\Domains\Address


### __construct

Address constructor.

```php
Address::__construct(  $street = null,  $number = null,  $complement = null,  $district = null,  $postalCode = null,  $city = null,  $state = null,  $country = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$street` | **** |  |
| `$number` | **** |  |
| `$complement` | **** |  |
| `$district` | **** |  |
| `$postalCode` | **** |  |
| `$city` | **** |  |
| `$state` | **** |  |
| `$country` | **** |  |




---

### getCity



```php
Address::getCity(  ): string
```







---

### setCity



```php
Address::setCity(  $city ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$city` | **** |  |




---

### getComplement



```php
Address::getComplement(  ): string
```







---

### setComplement



```php
Address::setComplement(  $complement ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$complement` | **** |  |




---

### getCountry



```php
Address::getCountry(  ): string
```







---

### setCountry



```php
Address::setCountry(  $country ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$country` | **** |  |




---

### getDistrict



```php
Address::getDistrict(  ): string
```







---

### setDistrict



```php
Address::setDistrict(  $district ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$district` | **** |  |




---

### getNumber



```php
Address::getNumber(  ): string
```







---

### setNumber



```php
Address::setNumber(  $number ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **** |  |




---

### getPostalCode



```php
Address::getPostalCode(  ): string
```







---

### setPostalCode



```php
Address::setPostalCode(  $postalCode ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postalCode` | **** |  |




---

### getState



```php
Address::getState(  ): string
```







---

### setState



```php
Address::setState(  $state ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$state` | **** |  |




---

### getStreet



```php
Address::getStreet(  ): string
```







---

### setStreet



```php
Address::setStreet(  $street ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$street` | **** |  |




---

## AddressRequired

Class Shipping



* Full name: \PagSeguro\Resources\Factory\Shipping\AddressRequired


### __construct

Shipping constructor.

```php
AddressRequired::__construct(  $shipping )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shipping` | **** |  |




---

### instance



```php
AddressRequired::instance( \PagSeguro\Domains\ShippingAddressRequired $addressRequired )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$addressRequired` | **\PagSeguro\Domains\ShippingAddressRequired** |  |




---

### withParameters



```php
AddressRequired::withParameters(  $addressRequired )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$addressRequired` | **** |  |




---

## Application

Class Application



* Full name: \PagSeguro\Resources\Responsibility\Notifications\Application
* This class implements: \PagSeguro\Resources\Responsibility\Notifications\Handler


### successor



```php
Application::successor(  $next ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$next` | **** |  |




---

### handler



```php
Application::handler(  ): mixed
```







---

## Application

Class Application



* Full name: \PagSeguro\Domains\Responses\Applications\Application


### getId



```php
Application::getId(  ): mixed
```







---

### setId



```php
Application::setId( mixed $id ): \PagSeguro\Domains\Responses\Applications\Application
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |




---

### getName



```php
Application::getName(  ): mixed
```







---

### setName



```php
Application::setName( mixed $name ): \PagSeguro\Domains\Responses\Applications\Application
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




---

### getRole



```php
Application::getRole(  ): mixed
```







---

### setRole



```php
Application::setRole( mixed $role ): \PagSeguro\Domains\Responses\Applications\Application
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$role` | **mixed** |  |




---

## ApplicationCredentials

Class ApplicationCredentials



* Full name: \PagSeguro\Domains\ApplicationCredentials
* This class implements: \PagSeguro\Domains\Account\Credentials


### __construct

ApplicationCredentials constructor.

```php
ApplicationCredentials::__construct( null $appId = null, null $appKey = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$appId` | **null** |  |
| `$appKey` | **null** |  |




---

### getAppId



```php
ApplicationCredentials::getAppId(  ): mixed
```







---

### setAppId



```php
ApplicationCredentials::setAppId( mixed $appId ): \PagSeguro\Domains\AccountCredentials
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$appId` | **mixed** |  |




---

### getAppKey



```php
ApplicationCredentials::getAppKey(  ): mixed
```







---

### setAppKey



```php
ApplicationCredentials::setAppKey( mixed $appKey ): \PagSeguro\Domains\AccountCredentials
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$appKey` | **mixed** |  |




---

### getAuthorizationCode



```php
ApplicationCredentials::getAuthorizationCode(  ): mixed
```







---

### setAuthorizationCode



```php
ApplicationCredentials::setAuthorizationCode( mixed $authorizationCode ): \PagSeguro\Domains\ApplicationCredentials
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$authorizationCode` | **mixed** |  |




---

### getAttributesMap



```php
ApplicationCredentials::getAttributesMap(  ): array
```







---

### toString



```php
ApplicationCredentials::toString(  ): string
```







---

## Authorization





* Full name: \PagSeguro\Services\Application\Authorization


### create



```php
Authorization::create( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\Authorization $authorization )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$authorization` | **\PagSeguro\Domains\Requests\Authorization** |  |




---

## Authorization

Class Payment



* Full name: \PagSeguro\Domains\Requests\Authorization
* Parent class: \PagSeguro\Domains\Requests\Application\Authorization\Request


### getUrl



```php
Authorization::getUrl(  )
```







---

### setUrl



```php
Authorization::setUrl(  $url )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |




---

### addPermission



```php
Authorization::addPermission(  $permission ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permission` | **** |  |




---

### setPermissions



```php
Authorization::setPermissions( array $permissions )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **array** |  |




---

### getPermissions



```php
Authorization::getPermissions(  ): mixed
```







---

### setReference



```php
Authorization::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### getReference



```php
Authorization::getReference(  )
```







---

### getAccount



```php
Authorization::getAccount(  ): \PagSeguro\Domains\Authorization\Account
```







---

### setAccount



```php
Authorization::setAccount( \PagSeguro\Domains\Authorization\Account $account )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$account` | **\PagSeguro\Domains\Authorization\Account** |  |




---

### register



```php
Authorization::register(  $credentials ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## Authorization

Class Payment



* Full name: \PagSeguro\Resources\Builder\Application\Authorization
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Authorization::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Authorization::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Authorization::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getRequestUrl



```php
Authorization::getRequestUrl(  ): string
```



* This method is **static**.



---

### getResponseUrl



```php
Authorization::getResponseUrl(  ): string
```



* This method is **static**.



---

## Authorization

Class Seller



* Full name: \PagSeguro\Domains\Authorization


### __construct

Seller constructor.

```php
Authorization::__construct(  $reference,  $permissions,  $redirectURL,  $notificationURL, \PagSeguro\Domains\Authorization\Account $account = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |
| `$permissions` | **** |  |
| `$redirectURL` | **** |  |
| `$notificationURL` | **** |  |
| `$account` | **\PagSeguro\Domains\Authorization\Account** |  |




---

### getReference



```php
Authorization::getReference(  ): mixed
```







---

### getPermissions



```php
Authorization::getPermissions(  ): mixed
```







---

### getRedirectURL



```php
Authorization::getRedirectURL(  ): mixed
```







---

### getNotificationURL



```php
Authorization::getNotificationURL(  ): mixed
```







---

### getAccount



```php
Authorization::getAccount(  ): \PagSeguro\Domains\Authorization\Account
```







---

## BackwardCompatibility

Class BackwardCompatibility



* Full name: \PagSeguro\Enum\Properties\BackwardCompatibility


## Billing





* Full name: \PagSeguro\Domains\DirectPayment\CreditCard\Billing


### getAddress



```php
Billing::getAddress(  ): \PagSeguro\Domains\DirectPayment\CreditCard\Address
```







---

### setAddress



```php
Billing::setAddress( \PagSeguro\Domains\DirectPayment\CreditCard\Address $address ): \PagSeguro\Domains\DirectPayment\CreditCard\Shipping
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **\PagSeguro\Domains\DirectPayment\CreditCard\Address** |  |




---

## Billing





* Full name: \PagSeguro\Domains\Requests\Adapter\DirectPayment\Billing


### getAddress



```php
Billing::getAddress(  )
```







---

### setAddress



```php
Billing::setAddress(  )
```







---

### __construct



```php
Billing::__construct(  $billing )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$billing` | **** |  |




---

## BillingAddress

Class BillingAddress



* Full name: \PagSeguro\Domains\DirectPreApproval\BillingAddress
* Parent class: \PagSeguro\Domains\DirectPreApproval\Address


### withParameters



```php
BillingAddress::withParameters(  $street,  $number,  $district,  $postalCode,  $city,  $state,  $country, null $complement = null ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$street` | **** |  |
| `$number` | **** |  |
| `$district` | **** |  |
| `$postalCode` | **** |  |
| `$city` | **** |  |
| `$state` | **** |  |
| `$country` | **** |  |
| `$complement` | **null** |  |




---

## Boleto

Class Payment



* Full name: \PagSeguro\Domains\Requests\DirectPayment\Boleto
* Parent class: \PagSeguro\Domains\Requests\DirectPayment\Boleto\Request


### setCurrency



```php
Boleto::setCurrency(  $currency )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currency` | **** |  |




---

### getCurrency



```php
Boleto::getCurrency(  ): mixed
```







---

### setExtraAmount



```php
Boleto::setExtraAmount(  $extraAmount )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getExtraAmount



```php
Boleto::getExtraAmount(  ): mixed
```







---

### addItems



```php
Boleto::addItems(  )
```







---

### setItems



```php
Boleto::setItems(  $items )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




---

### getItems



```php
Boleto::getItems(  )
```







---

### itemLenght



```php
Boleto::itemLenght(  )
```







---

### getMode



```php
Boleto::getMode(  ): mixed
```







---

### setMode



```php
Boleto::setMode(  $mode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **** |  |




---

### getUrl



```php
Boleto::getUrl(  )
```







---

### setUrl



```php
Boleto::setUrl(  $url )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |




---

### getReceiverEmail



```php
Boleto::getReceiverEmail(  )
```







---

### setReceiverEmail



```php
Boleto::setReceiverEmail(  $receiverEmail )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$receiverEmail` | **** |  |




---

### setSender



```php
Boleto::setSender(  )
```







---

### getSender



```php
Boleto::getSender(  )
```







---

### __construct



```php
Boleto::__construct(  )
```







---

### setShipping



```php
Boleto::setShipping(  )
```







---

### getShipping



```php
Boleto::getShipping(  )
```







---

### setReference



```php
Boleto::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### getReference



```php
Boleto::getReference(  )
```







---

### register



```php
Boleto::register(  $credentials ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## Boleto

Class Payment



* Full name: \PagSeguro\Services\DirectPayment\Boleto


### checkout



```php
Boleto::checkout( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\DirectPayment\Boleto $payment ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$payment` | **\PagSeguro\Domains\Requests\DirectPayment\Boleto** |  |




---

## Builder

Class Builder



* Full name: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Builder::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Builder::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Builder::getWebserviceUrl(  ): string
```



* This method is **static**.



---

## Cancel

Class Payment



* Full name: \PagSeguro\Services\Transactions\Cancel


### create



```php
Cancel::create( \PagSeguro\Domains\Account\Credentials $credentials,  $code ): \PagSeguro\Parsers\Cancel\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$code` | **** |  |




---

## Cancel

Class Payment



* Full name: \PagSeguro\Services\PreApproval\Cancel


### create



```php
Cancel::create( \PagSeguro\Domains\Account\Credentials $credentials,  $code ): \PagSeguro\Parsers\Cancel\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$code` | **** |  |




---

## Cancel

Class Cancel



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\Cancel
* Parent class: \PagSeguro\Domains\Requests\DirectPreApproval\CancelRequest


### __construct

CancelRequest constructor.

```php
Cancel::__construct(  )
```







---

### setPreApprovalCode



```php
Cancel::setPreApprovalCode(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

### object_to_array



```php
Cancel::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### register



```php
Cancel::register(  $credentials ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## Cancel

Class Cancel



* Full name: \PagSeguro\Resources\Builder\DirectPreApproval\Cancel
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Cancel::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Cancel::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Cancel::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getCancelUrl



```php
Cancel::getCancelUrl(  ): string
```



* This method is **static**.



---

## Cancel

Class Payment



* Full name: \PagSeguro\Resources\Builder\Transaction\Cancel
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Cancel::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Cancel::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Cancel::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getCancelUrl



```php
Cancel::getCancelUrl(  ): string
```



* This method is **static**.



---

## Cancel

Class Payment



* Full name: \PagSeguro\Resources\Builder\PreApproval\Cancel
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Cancel::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Cancel::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Cancel::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getCancelUrl



```php
Cancel::getCancelUrl(  ): string
```



* This method is **static**.



---

## CancelParser

Class CancelParser



* Full name: \PagSeguro\Parsers\DirectPreApproval\CancelParser
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
CancelParser::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getPreApprovalCode



```php
CancelParser::getPreApprovalCode( \PagSeguro\Domains\Requests\DirectPreApproval\Cancel $status ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **\PagSeguro\Domains\Requests\DirectPreApproval\Cancel** |  |




---

### getData



```php
CancelParser::getData( \PagSeguro\Domains\Requests\DirectPreApproval\Cancel $status ): array|\PagSeguro\Domains\Requests\DirectPreApproval\Cancel
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **\PagSeguro\Domains\Requests\DirectPreApproval\Cancel** |  |




---

### success



```php
CancelParser::success( \PagSeguro\Resources\Http $http ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## CancelRequest

Class CancelRequest



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\CancelRequest


### object_to_array



```php
CancelRequest::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### __construct

CancelRequest constructor.

```php
CancelRequest::__construct(  )
```







---

### setPreApprovalCode



```php
CancelRequest::setPreApprovalCode(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

## CancelService

Class CancelService



* Full name: \PagSeguro\Services\DirectPreApproval\CancelService


### create



```php
CancelService::create( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\DirectPreApproval\Cancel $cancel ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$cancel` | **\PagSeguro\Domains\Requests\DirectPreApproval\Cancel** |  |




---

## ChangePayment

Class ChangePayment



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\ChangePayment
* Parent class: \PagSeguro\Domains\Requests\DirectPreApproval\ChangePaymentRequest


### __construct

ChangePaymentRequest constructor.

```php
ChangePayment::__construct(  )
```







---

### setCreditCard



```php
ChangePayment::setCreditCard(  ): \PagSeguro\Domains\DirectPreApproval\CreditCard
```







---

### setSender



```php
ChangePayment::setSender(  ): \PagSeguro\Domains\DirectPreApproval\ChangePlanSender
```







---

### setPreApprovalCode



```php
ChangePayment::setPreApprovalCode(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

### object_to_array



```php
ChangePayment::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### register



```php
ChangePayment::register(  $credentials ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## ChangePayment

Class ChangePayment



* Full name: \PagSeguro\Resources\Builder\DirectPreApproval\ChangePayment
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
ChangePayment::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
ChangePayment::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
ChangePayment::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getChangePaymentUrl



```php
ChangePayment::getChangePaymentUrl(  ): string
```



* This method is **static**.



---

## ChangePaymentParser

Class ChangePaymentParser



* Full name: \PagSeguro\Parsers\DirectPreApproval\ChangePaymentParser
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
ChangePaymentParser::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getPreApprovalCode



```php
ChangePaymentParser::getPreApprovalCode( \PagSeguro\Domains\Requests\DirectPreApproval\ChangePayment $changePayment ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$changePayment` | **\PagSeguro\Domains\Requests\DirectPreApproval\ChangePayment** |  |




---

### getData



```php
ChangePaymentParser::getData( \PagSeguro\Domains\Requests\DirectPreApproval\ChangePayment $changePayment ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$changePayment` | **\PagSeguro\Domains\Requests\DirectPreApproval\ChangePayment** |  |




---

### success



```php
ChangePaymentParser::success( \PagSeguro\Resources\Http $http ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## ChangePaymentRequest

Class ChangePaymentRequest



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\ChangePaymentRequest


### object_to_array



```php
ChangePaymentRequest::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### __construct

ChangePaymentRequest constructor.

```php
ChangePaymentRequest::__construct(  )
```







---

### setCreditCard



```php
ChangePaymentRequest::setCreditCard(  ): \PagSeguro\Domains\DirectPreApproval\CreditCard
```







---

### setSender



```php
ChangePaymentRequest::setSender(  ): \PagSeguro\Domains\DirectPreApproval\ChangePlanSender
```







---

### setPreApprovalCode



```php
ChangePaymentRequest::setPreApprovalCode(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

## ChangePaymentService

Class ChangePaymentService



* Full name: \PagSeguro\Services\DirectPreApproval\ChangePaymentService


### create



```php
ChangePaymentService::create( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\DirectPreApproval\ChangePayment $changePayment ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$changePayment` | **\PagSeguro\Domains\Requests\DirectPreApproval\ChangePayment** |  |




---

## ChangePlanSender

Class ChangePlanSender



* Full name: \PagSeguro\Domains\DirectPreApproval\ChangePlanSender


### setIp



```php
ChangePlanSender::setIp(  $ip ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **** |  |




---

### setHash



```php
ChangePlanSender::setHash(  $hash ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hash` | **** |  |




---

## Characters





* Full name: \PagSeguro\Helpers\Characters


### hasSpecialChars



```php
Characters::hasSpecialChars(  $subject ): boolean|string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subject` | **** |  |




---

### removeSpecialChars



```php
Characters::removeSpecialChars(  $subject ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subject` | **** |  |




---

## Charge

Class Payment



* Full name: \PagSeguro\Resources\Builder\PreApproval\Charge
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Charge::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Charge::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Charge::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getRequestUrl



```php
Charge::getRequestUrl(  ): string
```



* This method is **static**.



---

### getResponseUrl



```php
Charge::getResponseUrl(  ): string
```



* This method is **static**.



---

## Charge





* Full name: \PagSeguro\Services\PreApproval\Charge


### create



```php
Charge::create( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\PreApproval\Charge $charge )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$charge` | **\PagSeguro\Domains\Requests\PreApproval\Charge** |  |




---

## Charge

Class Request



* Full name: \PagSeguro\Domains\Requests\PreApproval\Charge
* Parent class: \PagSeguro\Domains\Requests\PreApproval\Charge\Request


### setReference



```php
Charge::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### getReference



```php
Charge::getReference(  )
```







---

### addItems



```php
Charge::addItems(  )
```







---

### setItems



```php
Charge::setItems(  $items )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




---

### getItems



```php
Charge::getItems(  )
```







---

### itemLenght



```php
Charge::itemLenght(  )
```







---

### getCode



```php
Charge::getCode(  ): string
```





**Return Value:**

code



---

### setCode



```php
Charge::setCode( string $code )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **string** |  |




---

### register



```php
Charge::register(  $credentials ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## Charset





* Full name: \PagSeguro\Domains\Charset


### getEncoding



```php
Charset::getEncoding(  ): string
```







---

### setEncoding



```php
Charset::setEncoding(  $encoding )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encoding` | **** |  |




---

## Code

Class Payment



* Full name: \PagSeguro\Services\Transactions\Search\Code


### search



```php
Code::search( \PagSeguro\Domains\Account\Credentials $credentials,  $code ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$code` | **** |  |




---

## Code

Class Payment



* Full name: \PagSeguro\Services\PreApproval\Search\Code


### search



```php
Code::search( \PagSeguro\Domains\Account\Credentials $credentials,  $code ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$code` | **** |  |




---

## Code

Class Payment



* Full name: \PagSeguro\Services\Application\Search\Code


### search



```php
Code::search( \PagSeguro\Domains\Account\Credentials $credentials,  $code ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$code` | **** |  |




---

## Company

Class Company



* Full name: \PagSeguro\Domains\Authorization\Company


### __construct

Person constructor.

```php
Company::__construct( string $displayName = null, string $websiteURL = null, \PagSeguro\Domains\Document $document = null, \PagSeguro\Domains\Phone $phone = null, \PagSeguro\Domains\Address $address = null, \PagSeguro\Domains\Authorization\Partner $partner = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$displayName` | **string** |  |
| `$websiteURL` | **string** |  |
| `$document` | **\PagSeguro\Domains\Document** |  |
| `$phone` | **\PagSeguro\Domains\Phone** |  |
| `$address` | **\PagSeguro\Domains\Address** |  |
| `$partner` | **\PagSeguro\Domains\Authorization\Partner** |  |




---

### addDocuments



```php
Company::addDocuments( \PagSeguro\Domains\Document $document ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\PagSeguro\Domains\Document** |  |




---

### addPhones



```php
Company::addPhones( \PagSeguro\Domains\Phone $phone ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$phone` | **\PagSeguro\Domains\Phone** |  |




---

### getName



```php
Company::getName(  ): string
```







---

### getAddress



```php
Company::getAddress(  ): \PagSeguro\Domains\Address
```







---

### getDocuments



```php
Company::getDocuments(  ): array
```







---

### getPhones



```php
Company::getPhones(  ): array
```







---

### getWebsiteURL



```php
Company::getWebsiteURL(  ): null
```







---

### getPartner



```php
Company::getPartner(  ): \PagSeguro\Domains\Authorization\Partner
```







---

## CompanyService

Class CompanySeller



* Full name: \PagSeguro\Services\Authorization\CompanyService


### __construct

Seller constructor.

```php
CompanyService::__construct( \PagSeguro\Domains\Authorization $authorization )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$authorization` | **\PagSeguro\Domains\Authorization** |  |




---

### getAsXML



```php
CompanyService::getAsXML(  ): string
```







---

## Configure

Class Configure



* Full name: \PagSeguro\Configuration\Configure


### getAccountCredentials



```php
Configure::getAccountCredentials(  ): \PagSeguro\Domains\AccountCredentials
```



* This method is **static**.



---

### setAccountCredentials



```php
Configure::setAccountCredentials( string $email, string $token )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **string** |  |
| `$token` | **string** |  |




---

### getApplicationCredentials



```php
Configure::getApplicationCredentials(  ): \PagSeguro\Domains\ApplicationCredentials
```



* This method is **static**.



---

### setApplicationCredentials



```php
Configure::setApplicationCredentials( string $appId, string $appKey )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$appId` | **string** |  |
| `$appKey` | **string** |  |




---

### getEnvironment



```php
Configure::getEnvironment(  ): \PagSeguro\Domains\Environment
```



* This method is **static**.



---

### setEnvironment



```php
Configure::setEnvironment( string $environment )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$environment` | **string** |  |




---

### getCharset



```php
Configure::getCharset(  ): \PagSeguro\Domains\Charset
```



* This method is **static**.



---

### setCharset



```php
Configure::setCharset( string $charset )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$charset` | **string** |  |




---

### getLog



```php
Configure::getLog(  ): \PagSeguro\Domains\Log
```



* This method is **static**.



---

### setLog



```php
Configure::setLog( boolean $active, string $location )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$active` | **boolean** |  |
| `$location` | **string** |  |




---

## ContentManagementSystems

Class ContentManagementSystems



* Full name: \PagSeguro\Resources\Framework\ContentManagementSystems
* Parent class: \PagSeguro\Resources\Framework\Platform\Factory


### setName



```php
ContentManagementSystems::setName(  $name ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |




---

### getName



```php
ContentManagementSystems::getName(  ): string
```







---

### setRelease



```php
ContentManagementSystems::setRelease(  $release ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$release` | **** |  |




---

### getRelease



```php
ContentManagementSystems::getRelease(  ): string
```







---

## Cost

Class Shipping



* Full name: \PagSeguro\Resources\Factory\Shipping\Cost


### __construct

Shipping constructor.

```php
Cost::__construct(  $shipping )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shipping` | **** |  |




---

### instance



```php
Cost::instance( \PagSeguro\Domains\ShippingCost $cost )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cost` | **\PagSeguro\Domains\ShippingCost** |  |




---

### withParameters



```php
Cost::withParameters(  $cost )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cost` | **** |  |




---

## Credentials





* Full name: \PagSeguro\Domains\Credentials


### getEmail



```php
Credentials::getEmail(  ): string
```







---

### setEmail



```php
Credentials::setEmail( string $email )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **string** |  |




---

### getToken



```php
Credentials::getToken(  ): string
```







---

### setToken



```php
Credentials::setToken( string $token )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** |  |




---

### getAppId



```php
Credentials::getAppId(  ): string
```







---

### setAppId



```php
Credentials::setAppId( string $appId )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$appId` | **string** |  |




---

### getAppKey



```php
Credentials::getAppKey(  ): string
```







---

### setAppKey



```php
Credentials::setAppKey( string $appKey )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$appKey` | **string** |  |




---

## CreditCard

Class Payment



* Full name: \PagSeguro\Services\DirectPayment\CreditCard


### checkout



```php
CreditCard::checkout( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\DirectPayment\OnlineDebit $payment ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$payment` | **\PagSeguro\Domains\Requests\DirectPayment\OnlineDebit** |  |




---

## CreditCard

Class Payment



* Full name: \PagSeguro\Domains\Requests\DirectPayment\CreditCard
* Parent class: \PagSeguro\Domains\Requests\DirectPayment\CreditCard\Request


### setBilling



```php
CreditCard::setBilling(  ): \PagSeguro\Domains\Requests\Adapter\DirectPayment\Billing
```







---

### getBilling



```php
CreditCard::getBilling(  ): \PagSeguro\Domains\Requests\DirectPayment\CreditCard\billing
```







---

### setCurrency



```php
CreditCard::setCurrency(  $currency )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currency` | **** |  |




---

### getCurrency



```php
CreditCard::getCurrency(  ): mixed
```







---

### setExtraAmount



```php
CreditCard::setExtraAmount(  $extraAmount )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getExtraAmount



```php
CreditCard::getExtraAmount(  ): mixed
```







---

### getInstallment



```php
CreditCard::getInstallment(  )
```







---

### setInstallment



```php
CreditCard::setInstallment(  )
```







---

### setHolder



```php
CreditCard::setHolder(  ): \PagSeguro\Domains\Requests\Adapter\DirectPayment\Holder
```







---

### getHolder



```php
CreditCard::getHolder(  ): \PagSeguro\Domains\DirectPayment\CreditCard\Holder
```







---

### addItems



```php
CreditCard::addItems(  )
```







---

### setItems



```php
CreditCard::setItems(  $items )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




---

### getItems



```php
CreditCard::getItems(  )
```







---

### itemLenght



```php
CreditCard::itemLenght(  )
```







---

### getMode



```php
CreditCard::getMode(  ): mixed
```







---

### setMode



```php
CreditCard::setMode(  $mode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **** |  |




---

### getUrl



```php
CreditCard::getUrl(  )
```







---

### setUrl



```php
CreditCard::setUrl(  $url )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |




---

### getReceiverEmail



```php
CreditCard::getReceiverEmail(  )
```







---

### setReceiverEmail



```php
CreditCard::setReceiverEmail(  $receiverEmail )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$receiverEmail` | **** |  |




---

### setSender



```php
CreditCard::setSender(  )
```







---

### getSender



```php
CreditCard::getSender(  )
```







---

### __construct



```php
CreditCard::__construct(  )
```







---

### setShipping



```php
CreditCard::setShipping(  )
```







---

### getShipping



```php
CreditCard::getShipping(  )
```







---

### setReference



```php
CreditCard::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### getReference



```php
CreditCard::getReference(  )
```







---

### getToken



```php
CreditCard::getToken(  )
```







---

### setToken



```php
CreditCard::setToken(  $token )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **** |  |




---

### register



```php
CreditCard::register(  $credentials ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## CreditCard

Class CreditCard



* Full name: \PagSeguro\Domains\DirectPreApproval\CreditCard


### __construct

CreditCard constructor.

```php
CreditCard::__construct(  )
```







---

### setToken



```php
CreditCard::setToken(  $token )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **** |  |




---

### setHolder



```php
CreditCard::setHolder(  ): \PagSeguro\Domains\DirectPreApproval\Holder
```







---

## CreditorFees

Class CreditorFees



* Full name: \PagSeguro\Domains\CreditorFees


### getIntermediationFeeAmount



```php
CreditorFees::getIntermediationFeeAmount(  ): mixed
```







---

### setIntermediationFeeAmount



```php
CreditorFees::setIntermediationFeeAmount( mixed $intermediationFeeAmount ): \PagSeguro\Domains\CreditorFees
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$intermediationFeeAmount` | **mixed** |  |




---

### getIntermediationRateAmount



```php
CreditorFees::getIntermediationRateAmount(  ): mixed
```







---

### setIntermediationRateAmount



```php
CreditorFees::setIntermediationRateAmount( mixed $intermediationRateAmount ): \PagSeguro\Domains\CreditorFees
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$intermediationRateAmount` | **mixed** |  |




---

## Crypto





* Full name: \PagSeguro\Helpers\Crypto


### encrypt



```php
Crypto::encrypt(  $parameters )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parameters` | **** |  |




---

## Currency

Class Currency



* Full name: \PagSeguro\Helpers\Currency


### toDecimal



```php
Currency::toDecimal(  $value ): float|string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

## Current

Class Current



* Full name: \PagSeguro\Enum\Properties\Current


## Data

Class Data



* Full name: \PagSeguro\Resources\Connection\Data


### buildAuthorizationRequestUrl



```php
Data::buildAuthorizationRequestUrl(  ): string
```







---

### buildAuthorizationResponseUrl



```php
Data::buildAuthorizationResponseUrl(  ): string
```







---

### buildSearchRequestUrl



```php
Data::buildSearchRequestUrl(  ): string
```







---

### buildPaymentRequestUrl



```php
Data::buildPaymentRequestUrl(  ): string
```







---

### buildPaymentResponseUrl



```php
Data::buildPaymentResponseUrl(  ): string
```







---

### getCredentials



```php
Data::getCredentials(  ): \PagSeguro\Domains\Account\Credentials
```







---

### setCredentials



```php
Data::setCredentials( \PagSeguro\Domains\Account\Credentials $credentials ): \PagSeguro\Resources\Connection\Base\Credentials
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |




---

### buildCredentialsQuery



```php
Data::buildCredentialsQuery(  ): string
```







---

### buildDirectPaymentRequestUrl



```php
Data::buildDirectPaymentRequestUrl(  ): string
```







---

### buildInstallmentRequestUrl



```php
Data::buildInstallmentRequestUrl(  ): string
```







---

### buildNotificationTransactionRequestUrl



```php
Data::buildNotificationTransactionRequestUrl(  ): string
```







---

### buildNotificationAuthorizationRequestUrl



```php
Data::buildNotificationAuthorizationRequestUrl(  ): string
```







---

### buildNotificationPreApprovalRequestUrl



```php
Data::buildNotificationPreApprovalRequestUrl(  ): string
```







---

### buildPreApprovalCancelUrl



```php
Data::buildPreApprovalCancelUrl(  ): string
```







---

### buildPreApprovalChargeRequestUrl



```php
Data::buildPreApprovalChargeRequestUrl(  ): string
```







---

### buildPreApprovalRequestUrl



```php
Data::buildPreApprovalRequestUrl(  ): string
```







---

### buildPreApprovalResponseUrl



```php
Data::buildPreApprovalResponseUrl(  ): string
```







---

### buildRefundRequestUrl



```php
Data::buildRefundRequestUrl(  ): string
```







---

### buildSessionRequestUrl



```php
Data::buildSessionRequestUrl(  ): string
```







---

### buildAbandonedRequestUrl



```php
Data::buildAbandonedRequestUrl(  ): string
```







---

### buildCancelRequestUrl



```php
Data::buildCancelRequestUrl(  ): string
```







---

### buildDirectPreApprovalAccessionRequestUrl



```php
Data::buildDirectPreApprovalAccessionRequestUrl(  ): string
```







---

### buildDirectPreApprovalPlanRequestUrl



```php
Data::buildDirectPreApprovalPlanRequestUrl(  ): string
```







---

### buildDirectPreApprovalEditPlanRequestUrl



```php
Data::buildDirectPreApprovalEditPlanRequestUrl(  $preApprovalRequestCode ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalRequestCode` | **** |  |




---

### buildDirectPreApprovalQueryRequestUrl



```php
Data::buildDirectPreApprovalQueryRequestUrl(  ): string
```







---

### buildDirectPreApprovalPaymentRequestUrl



```php
Data::buildDirectPreApprovalPaymentRequestUrl(  ): string
```







---

### buildDirectPreApprovalStatusRequestUrl



```php
Data::buildDirectPreApprovalStatusRequestUrl(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

### buildDirectPreApprovalCancelRequestUrl



```php
Data::buildDirectPreApprovalCancelRequestUrl(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

### buildDirectPreApprovalDiscountRequestUrl



```php
Data::buildDirectPreApprovalDiscountRequestUrl(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

### buildDirectPreApprovalChangePaymentRequestUrl



```php
Data::buildDirectPreApprovalChangePaymentRequestUrl(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

### buildDirectPreApprovalQueryPaymentOrderRequestUrl



```php
Data::buildDirectPreApprovalQueryPaymentOrderRequestUrl(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

### buildDirectPreApprovalQueryNotificationRequestUrl



```php
Data::buildDirectPreApprovalQueryNotificationRequestUrl(  $preApprovalCode = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

### buildDirectPreApprovalRetryPaymentOrderUrl



```php
Data::buildDirectPreApprovalRetryPaymentOrderUrl(  $preApprovalCode,  $paymentOrderCode ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |
| `$paymentOrderCode` | **** |  |




---

### __construct

Data constructor.

```php
Data::__construct( \PagSeguro\Domains\Account\Credentials $credentials )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |




---

### buildHttpUrl



```php
Data::buildHttpUrl(  $data ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

## Date

Class Payment



* Full name: \PagSeguro\Services\Transactions\Search\Date


### search



```php
Date::search( \PagSeguro\Domains\Account\Credentials $credentials,  $options ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$options` | **** |  |




---

## Date

Class Payment



* Full name: \PagSeguro\Services\PreApproval\Search\Date


### search



```php
Date::search( \PagSeguro\Domains\Account\Credentials $credentials,  $options ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$options` | **** |  |




---

## Date

Class Payment



* Full name: \PagSeguro\Services\Application\Search\Date


### search



```php
Date::search( \PagSeguro\Domains\Account\Credentials $credentials,  $options ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$options` | **** |  |




---

## DefaultAuthorizationService

Class CompanySeller



* Full name: \PagSeguro\Services\Authorization\DefaultAuthorizationService


### __construct

Seller constructor.

```php
DefaultAuthorizationService::__construct( \PagSeguro\Domains\Authorization $authorization )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$authorization` | **\PagSeguro\Domains\Authorization** |  |




---

### getAsXML



```php
DefaultAuthorizationService::getAsXML(  ): string
```







---

## Description

Class Description



* Full name: \PagSeguro\Enum\Metadata\Description
* Parent class: \PagSeguro\Enum\Enum


### getList



```php
Description::getList(  ): array
```



* This method is **static**.



---

### getType



```php
Description::getType(  $key ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### getValue



```php
Description::getValue(  $value ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### isValidName



```php
Description::isValidName(  $name, boolean $strict = false ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |
| `$strict` | **boolean** |  |




---

### isValidValue



```php
Description::isValidValue(  $value, boolean $strict = true ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |
| `$strict` | **boolean** |  |




---

## Discount

Class Discount



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\Discount
* Parent class: \PagSeguro\Domains\Requests\DirectPreApproval\DiscountRequest


### __construct

DiscountRequest constructor.

```php
Discount::__construct(  )
```







---

### setType



```php
Discount::setType(  $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **** |  |




---

### setValue



```php
Discount::setValue(  $value )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### setPreApprovalCode



```php
Discount::setPreApprovalCode(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

### object_to_array



```php
Discount::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### register



```php
Discount::register(  $credentials ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## Discount

Class Discount



* Full name: \PagSeguro\Resources\Builder\DirectPreApproval\Discount
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Discount::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Discount::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Discount::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getDiscountUrl



```php
Discount::getDiscountUrl(  ): string
```



* This method is **static**.



---

## DiscountParser

Class DiscountParser



* Full name: \PagSeguro\Parsers\DirectPreApproval\DiscountParser
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
DiscountParser::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getPreApprovalCode



```php
DiscountParser::getPreApprovalCode( \PagSeguro\Domains\Requests\DirectPreApproval\Discount $discount ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$discount` | **\PagSeguro\Domains\Requests\DirectPreApproval\Discount** |  |




---

### getData



```php
DiscountParser::getData( \PagSeguro\Domains\Requests\DirectPreApproval\Discount $discount ): array|\PagSeguro\Domains\Requests\DirectPreApproval\Discount
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$discount` | **\PagSeguro\Domains\Requests\DirectPreApproval\Discount** |  |




---

### success



```php
DiscountParser::success( \PagSeguro\Resources\Http $http ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## DiscountRequest

Class DiscountRequest



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\DiscountRequest


### object_to_array



```php
DiscountRequest::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### __construct

DiscountRequest constructor.

```php
DiscountRequest::__construct(  )
```







---

### setType



```php
DiscountRequest::setType(  $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **** |  |




---

### setValue



```php
DiscountRequest::setValue(  $value )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### setPreApprovalCode



```php
DiscountRequest::setPreApprovalCode(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

## DiscountService

Class DiscountService



* Full name: \PagSeguro\Services\DirectPreApproval\DiscountService


### create



```php
DiscountService::create( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\DirectPreApproval\Discount $discount ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$discount` | **\PagSeguro\Domains\Requests\DirectPreApproval\Discount** |  |




---

## Document

Class Document



* Full name: \PagSeguro\Domains\DirectPreApproval\Document


### withParameters



```php
Document::withParameters(  $type,  $value ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **** |  |
| `$value` | **** |  |




---

## Document

Class Document



* Full name: \PagSeguro\Resources\Factory\Document


### __construct

Document constructor.

```php
Document::__construct(  )
```







---

### instance



```php
Document::instance( \PagSeguro\Domains\Document $document ): \PagSeguro\Domains\Document
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\PagSeguro\Domains\Document** |  |




---

### withArray



```php
Document::withArray(  $array ): \PagSeguro\Domains\Document|\PagSeguro\Resources\Factory\Document
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
Document::withParameters(  $type,  $identifier ): \PagSeguro\Domains\Document
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **** |  |
| `$identifier` | **** |  |




---

## Document

Class Document



* Full name: \PagSeguro\Resources\Factory\Request\DirectPayment\CreditCard\Holder\Document


### __construct

Document constructor.

```php
Document::__construct(  $holder )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$holder` | **** |  |




---

### instance



```php
Document::instance( \PagSeguro\Domains\Document $document ): \PagSeguro\Domains\DirectPayment\CreditCard\Holder
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\PagSeguro\Domains\Document** |  |




---

### withArray



```php
Document::withArray(  $array ): \PagSeguro\Domains\DirectPayment\CreditCard\Holder
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
Document::withParameters(  $type,  $identifier ): \PagSeguro\Domains\DirectPayment\CreditCard\Holder
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **** |  |
| `$identifier` | **** |  |




---

## Document

Class Document



* Full name: \PagSeguro\Resources\Factory\Sender\Document


### __construct

Document constructor.

```php
Document::__construct(  $sender )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sender` | **** |  |




---

### instance



```php
Document::instance( \PagSeguro\Domains\Document $document ): \PagSeguro\Domains\Document
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\PagSeguro\Domains\Document** |  |




---

### withArray



```php
Document::withArray(  $array ): \PagSeguro\Domains\Document|\PagSeguro\Resources\Factory\Sender\Document
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
Document::withParameters(  $type,  $identifier ): \PagSeguro\Domains\Document
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **** |  |
| `$identifier` | **** |  |




---

## Document

Class Document



* Full name: \PagSeguro\Domains\Document


### __construct

Document constructor.

```php
Document::__construct(  $type = null,  $identifier = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **** |  |
| `$identifier` | **** |  |




---

### getIdentifier



```php
Document::getIdentifier(  ): string
```







---

### setIdentifier



```php
Document::setIdentifier( string $identifier ): \PagSeguro\Domains\Document
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$identifier` | **string** |  |




---

### getType



```php
Document::getType(  ): string
```







---

### setType



```php
Document::setType( mixed $type ): \PagSeguro\Domains\Document
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




---

### toString



```php
Document::toString(  ): string
```







---

## EditPlan

Class EditPlan



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\EditPlan
* Parent class: \PagSeguro\Domains\Requests\DirectPreApproval\EditPlanRequest


### __construct

EditPlanRequest constructor.

```php
EditPlan::__construct(  )
```







---

### setPreApprovalRequestCode



```php
EditPlan::setPreApprovalRequestCode(  $preApprovalRequestCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalRequestCode` | **** |  |




---

### setAmountPerPayment



```php
EditPlan::setAmountPerPayment(  $amountPerPayment )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$amountPerPayment` | **** |  |




---

### setUpdateSubscriptions



```php
EditPlan::setUpdateSubscriptions(  $updateSubscriptions )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$updateSubscriptions` | **** |  |




---

### object_to_array



```php
EditPlan::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### register



```php
EditPlan::register(  $credentials ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## EditPlan

Class EditPlan



* Full name: \PagSeguro\Resources\Builder\DirectPreApproval\EditPlan
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
EditPlan::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
EditPlan::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
EditPlan::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getEditPlanUrl



```php
EditPlan::getEditPlanUrl(  ): string
```



* This method is **static**.



---

## EditPlanParser

Class EditPlanParser



* Full name: \PagSeguro\Parsers\DirectPreApproval\EditPlanParser
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
EditPlanParser::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getPreApprovalRequestCode



```php
EditPlanParser::getPreApprovalRequestCode( \PagSeguro\Domains\Requests\DirectPreApproval\EditPlan $editPlan ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$editPlan` | **\PagSeguro\Domains\Requests\DirectPreApproval\EditPlan** |  |




---

### getData



```php
EditPlanParser::getData( \PagSeguro\Domains\Requests\DirectPreApproval\EditPlan $editPlan ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$editPlan` | **\PagSeguro\Domains\Requests\DirectPreApproval\EditPlan** |  |




---

### success



```php
EditPlanParser::success( \PagSeguro\Resources\Http $http ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## EditPlanRequest

Class EditPlanRequest



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\EditPlanRequest


### object_to_array



```php
EditPlanRequest::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### __construct

EditPlanRequest constructor.

```php
EditPlanRequest::__construct(  )
```







---

### setPreApprovalRequestCode



```php
EditPlanRequest::setPreApprovalRequestCode(  $preApprovalRequestCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalRequestCode` | **** |  |




---

### setAmountPerPayment



```php
EditPlanRequest::setAmountPerPayment(  $amountPerPayment )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$amountPerPayment` | **** |  |




---

### setUpdateSubscriptions



```php
EditPlanRequest::setUpdateSubscriptions(  $updateSubscriptions )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$updateSubscriptions` | **** |  |




---

## EditPlanService

Class EditPlanService



* Full name: \PagSeguro\Services\DirectPreApproval\EditPlanService


### edit



```php
EditPlanService::edit( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\DirectPreApproval\EditPlan $editPlan ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$editPlan` | **\PagSeguro\Domains\Requests\DirectPreApproval\EditPlan** |  |




---

## Enum

Class Enum



* Full name: \PagSeguro\Enum\Enum
* Parent class: \PagSeguro\Enum\BaseEnum


### isValidName



```php
Enum::isValidName(  $name, boolean $strict = false ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |
| `$strict` | **boolean** |  |




---

### isValidValue



```php
Enum::isValidValue(  $value, boolean $strict = true ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |
| `$strict` | **boolean** |  |




---

### getList



```php
Enum::getList(  ): array
```



* This method is **static**.



---

### getType



```php
Enum::getType(  $key ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### getValue



```php
Enum::getValue(  $value ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

## Environment





* Full name: \PagSeguro\Domains\Environment


### getEnvironment



```php
Environment::getEnvironment(  ): string
```







---

### setEnvironment



```php
Environment::setEnvironment( string $environment )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$environment` | **string** |  |




---

## Environment

Class Enum



* Full name: \PagSeguro\Enum\Configuration\Environment
* Parent class: \PagSeguro\Enum\Enum


### getList



```php
Environment::getList(  ): array
```



* This method is **static**.



---

### getType



```php
Environment::getType(  $key ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### getValue



```php
Environment::getValue(  $value ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### isValidName



```php
Environment::isValidName(  $name, boolean $strict = false ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |
| `$strict` | **boolean** |  |




---

### isValidValue



```php
Environment::isValidValue(  $value, boolean $strict = true ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |
| `$strict` | **boolean** |  |




---

## Environment





* Full name: \PagSeguro\Resources\Responsibility\Configuration\Environment
* This class implements: \PagSeguro\Resources\Responsibility\Handler


### successor



```php
Environment::successor(  $next ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$next` | **** |  |




---

### handler



```php
Environment::handler(  $action,  $class ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$action` | **** |  |
| `$class` | **** |  |




---

## Error

Class Error



* Full name: \PagSeguro\Domains\Error


### getCode



```php
Error::getCode(  ): string
```







---

### setCode



```php
Error::setCode( string $code ): \PagSeguro\Domains\Error
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **string** |  |




---

### getMessage



```php
Error::getMessage(  ): string
```







---

### setMessage



```php
Error::setMessage( string $message ): \PagSeguro\Domains\Error
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |




---

## Error

Class Error



* Full name: \PagSeguro\Parsers\Error


## Expiration

Class Expiration



* Full name: \PagSeguro\Domains\DirectPreApproval\Expiration


### withParameters



```php
Expiration::withParameters(  $value,  $unit ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |
| `$unit` | **** |  |




---

## Extensible





* Full name: \PagSeguro\Resources\Responsibility\Configuration\Extensible
* This class implements: \PagSeguro\Resources\Responsibility\Handler


### successor



```php
Extensible::successor(  $next ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$next` | **** |  |




---

### handler



```php
Extensible::handler(  $action,  $class ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$action` | **** |  |
| `$class` | **** |  |




---

## Factory

Class Factory



* Full name: \PagSeguro\Resources\Framework\Platform\Factory


### setName



```php
Factory::setName(  $name ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |




---

### getName



```php
Factory::getName(  ): string
```







---

### setRelease



```php
Factory::setRelease(  $release ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$release` | **** |  |




---

### getRelease



```php
Factory::getRelease(  ): string
```







---

## File





* Full name: \PagSeguro\Resources\Responsibility\Configuration\File
* This class implements: \PagSeguro\Resources\Responsibility\Handler


### successor



```php
File::successor(  $next ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$next` | **** |  |




---

### handler



```php
File::handler(  $action,  $class ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$action` | **** |  |
| `$class` | **** |  |




---

## Format

Class Format

Describes each format expected by each parameter of the metadata

* Full name: \PagSeguro\Enum\Metadata\Format
* Parent class: \PagSeguro\Enum\Enum


### getList



```php
Format::getList(  ): array
```



* This method is **static**.



---

### getType



```php
Format::getType(  $key ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### getValue



```php
Format::getValue(  $value ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### isValidName



```php
Format::isValidName(  $name, boolean $strict = false ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |
| `$strict` | **boolean** |  |




---

### isValidValue



```php
Format::isValidValue(  $value, boolean $strict = true ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |
| `$strict` | **boolean** |  |




---

## GatewaySystem

Class PaymentMethod



* Full name: \PagSeguro\Domains\Responses\GatewaySystem


### getNsu



```php
GatewaySystem::getNsu(  )
```







---

### getTid



```php
GatewaySystem::getTid(  )
```







---

### setNsu



```php
GatewaySystem::setNsu(  $nsu )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nsu` | **** |  |




---

### setTid



```php
GatewaySystem::setTid(  $tid )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tid` | **** |  |




---

### getType



```php
GatewaySystem::getType(  )
```







---

### getRawCode



```php
GatewaySystem::getRawCode(  )
```







---

### getRawMessage



```php
GatewaySystem::getRawMessage(  )
```







---

### getNormalizedCode



```php
GatewaySystem::getNormalizedCode(  )
```







---

### getAuthorizationCode



```php
GatewaySystem::getAuthorizationCode(  )
```







---

### getEstablishmentCode



```php
GatewaySystem::getEstablishmentCode(  )
```







---

### setType



```php
GatewaySystem::setType(  $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **** |  |




---

### setRawCode



```php
GatewaySystem::setRawCode(  $rawCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rawCode` | **** |  |




---

### setRawMessage



```php
GatewaySystem::setRawMessage(  $rawMessage )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rawMessage` | **** |  |




---

### setNormalizedCode



```php
GatewaySystem::setNormalizedCode(  $normalizedCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedCode` | **** |  |




---

### setAuthorizationCode



```php
GatewaySystem::setAuthorizationCode(  $authorizationCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$authorizationCode` | **** |  |




---

### setEstablishmentCode



```php
GatewaySystem::setEstablishmentCode(  $establishmentCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$establishmentCode` | **** |  |




---

### getNormalizedMessage



```php
GatewaySystem::getNormalizedMessage(  )
```







---

### setNormalizedMessage



```php
GatewaySystem::setNormalizedMessage(  $normalizedMessage )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizedMessage` | **** |  |




---

## Generic

Class Generic



* Full name: \PagSeguro\Resources\Responsibility\Http\Methods\Generic
* This class implements: \PagSeguro\Resources\Responsibility\Handler


### successor



```php
Generic::successor(  $successor ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$successor` | **** |  |




---

### handler



```php
Generic::handler( \PagSeguro\Resources\Http $http,  $class ): \PagSeguro\Resources\Responsibility\Http\Methods\bool;
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |
| `$class` | **** |  |




---

## Group

Class Group



* Full name: \PagSeguro\Enum\PaymentMethod\Group


## Holder

Class Holder



* Full name: \PagSeguro\Domains\DirectPreApproval\Holder


### __construct

Holder constructor.

```php
Holder::__construct(  )
```







---

### setName



```php
Holder::setName(  $name ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |




---

### setBirthDate



```php
Holder::setBirthDate(  $birthDate ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$birthDate` | **** |  |




---

### setDocuments



```php
Holder::setDocuments( \PagSeguro\Domains\DirectPreApproval\Document $document ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\PagSeguro\Domains\DirectPreApproval\Document** |  |




---

### setPhone



```php
Holder::setPhone(  ): \PagSeguro\Domains\DirectPreApproval\Phone
```







---

### setBillingAddress



```php
Holder::setBillingAddress(  ): \PagSeguro\Domains\DirectPreApproval\BillingAddress
```







---

## Holder





* Full name: \PagSeguro\Domains\Requests\Adapter\DirectPayment\Holder


### getDocument



```php
Holder::getDocument(  )
```







---

### setDocument



```php
Holder::setDocument(  )
```







---

### getPhone



```php
Holder::getPhone(  )
```







---

### setPhone



```php
Holder::setPhone(  )
```







---

### __construct



```php
Holder::__construct(  $holder )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$holder` | **** |  |




---

### getBirthDate



```php
Holder::getBirthDate(  ): mixed
```







---

### setBirthDate



```php
Holder::setBirthDate( mixed $birthdate )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$birthdate` | **mixed** |  |




---

### getName



```php
Holder::getName(  ): mixed
```







---

### setName



```php
Holder::setName( mixed $name )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




---

## Holder

Class Holder



* Full name: \PagSeguro\Domains\DirectPayment\CreditCard\Holder


### getBirthDate



```php
Holder::getBirthDate(  ): mixed
```







---

### setBirthDate



```php
Holder::setBirthDate( mixed $birthDate ): \PagSeguro\Domains\DirectPayment\CreditCard\Holder
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$birthDate` | **mixed** |  |




---

### getDocuments



```php
Holder::getDocuments(  ): mixed
```







---

### setDocuments



```php
Holder::setDocuments( mixed $documents ): \PagSeguro\Domains\DirectPayment\CreditCard\Holder
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$documents` | **mixed** |  |




---

### getName



```php
Holder::getName(  ): mixed
```







---

### setName



```php
Holder::setName( mixed $name ): \PagSeguro\Domains\DirectPayment\CreditCard\Holder
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




---

### getPhone



```php
Holder::getPhone(  ): mixed
```







---

### setPhone



```php
Holder::setPhone( mixed $phone ): \PagSeguro\Domains\DirectPayment\CreditCard\Holder
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$phone` | **mixed** |  |




---

## Http

Class Http



* Full name: \PagSeguro\Resources\Http


### __construct

Http constructor.

```php
Http::__construct( string $contentType = null, null $accept = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$contentType` | **string** |  |
| `$accept` | **null** |  |




---

### getStatus



```php
Http::getStatus(  ): mixed
```







---

### setStatus



```php
Http::setStatus(  $status )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **** |  |




---

### getResponse



```php
Http::getResponse(  ): mixed
```







---

### setResponse



```php
Http::setResponse(  $response )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$response` | **** |  |




---

### post



```php
Http::post(  $url, array|string $data = null, integer $timeout = 20, string $charset = &#039;ISO-8859-1&#039; ): boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |
| `$data` | **array&#124;string** |  |
| `$timeout` | **integer** |  |
| `$charset` | **string** |  |




---

### put



```php
Http::put(  $url,  $data, integer $timeout = 20, string $charset = &#039;ISO-8859-1&#039; ): boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |
| `$data` | **** |  |
| `$timeout` | **integer** |  |
| `$charset` | **string** |  |




---

### get



```php
Http::get(  $url, integer $timeout = 20, string $charset = &#039;ISO-8859-1&#039; ): boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |
| `$timeout` | **integer** |  |
| `$charset` | **string** |  |




---

## InitializeObject

Class InitializeObject



* Full name: \PagSeguro\Helpers\InitializeObject


### initialize

Check if $attr is started, if not instatiate it

```php
InitializeObject::initialize( object $attr, \PagSeguro\Helpers\class $instantiateClass ): object
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attr` | **object** |  |
| `$instantiateClass` | **\PagSeguro\Helpers\class** |  |


**Return Value:**

from $instantiateClass



---

## Installment

Description of Installment



* Full name: \PagSeguro\Domains\DirectPayment\CreditCard\Installment


### getQuantity



```php
Installment::getQuantity(  )
```







---

### getValue



```php
Installment::getValue(  )
```







---

### getNoInterestInstallmentQuantity



```php
Installment::getNoInterestInstallmentQuantity(  )
```







---

### setQuantity



```php
Installment::setQuantity(  $quantity )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$quantity` | **** |  |




---

### setValue



```php
Installment::setValue(  $value )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### setNoInterestInstallmentQuantity



```php
Installment::setNoInterestInstallmentQuantity(  $noInterestQuantity )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$noInterestQuantity` | **** |  |




---

## Installment

Installment



* Full name: \PagSeguro\Resources\Builder\Installment
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Installment::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Installment::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Installment::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getRequestUrl

Class Installment

```php
Installment::getRequestUrl(  ): string
```



* This method is **static**.



---

## Installment

Description of Installment



* Full name: \PagSeguro\Resources\Factory\Request\DirectPayment\CreditCard\Installment


### __construct



```php
Installment::__construct(  )
```







---

### instance



```php
Installment::instance( \PagSeguro\Domains\DirectPayment\CreditCard\Installment $installment )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$installment` | **\PagSeguro\Domains\DirectPayment\CreditCard\Installment** |  |




---

### withArray



```php
Installment::withArray(  $array )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
Installment::withParameters(  $quantity,  $value,  $noInterestInstallmentQuantity = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$quantity` | **** |  |
| `$value` | **** |  |
| `$noInterestInstallmentQuantity` | **** |  |




---

## Installment

Domain class for Installment



* Full name: \PagSeguro\Domains\Responses\Installment


### getCardBrand

Get the cardBrand attribute

```php
Installment::getCardBrand(  ): \PagSeguro\Domains\Responses\Installment
```







---

### getQuantity

Get the quantity attribute

```php
Installment::getQuantity(  ): \PagSeguro\Domains\Responses\Installment
```







---

### getAmount

Get the amount attribute

```php
Installment::getAmount(  ): \PagSeguro\Domains\Responses\Installment
```







---

### getTotalAmount

Get the totalAmount attribute

```php
Installment::getTotalAmount(  ): \PagSeguro\Domains\Responses\Installment
```







---

### getInterestFree

Get the cardBrand attribute

```php
Installment::getInterestFree(  ): \PagSeguro\Domains\Responses\Installment
```







---

### setCardBrand

Get the cardBrand attribute

```php
Installment::setCardBrand(  $cardBrand ): \PagSeguro\Domains\Responses\Installment
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cardBrand` | **** |  |




---

### setQuantity

Get the quantity attribute

```php
Installment::setQuantity(  $quantity ): \PagSeguro\Domains\Responses\Installment
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$quantity` | **** |  |




---

### setAmount

Get the amount attribute

```php
Installment::setAmount(  $amount ): \PagSeguro\Domains\Responses\Installment
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$amount` | **** |  |




---

### setTotalAmount

Get the totalAmount attribute

```php
Installment::setTotalAmount(  $totalAmount ): \PagSeguro\Domains\Responses\Installment
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$totalAmount` | **** |  |




---

### setInterestFree

Get the setInterestFree attribute

```php
Installment::setInterestFree(  $interestFree ): \PagSeguro\Domains\Responses\Installment
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$interestFree` | **** |  |




---

## Installment

Description of Installment



* Full name: \PagSeguro\Services\Installment


### create



```php
Installment::create( \PagSeguro\Domains\Account\Credentials $credentials, mixed $params ): \PagSeguro\Services\Pagseguro\Domains\Responses\Installments
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$params` | **mixed** |  |




---

## Installments

Domain class for Installments



* Full name: \PagSeguro\Domains\Responses\Installments


### getInstallments



```php
Installments::getInstallments(  ): array
```







---

### setInstallments



```php
Installments::setInstallments( \PagSeguro\Domains\Responses\PagSeguro\Domains\Responses\Installment $installments )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$installments` | **\PagSeguro\Domains\Responses\PagSeguro\Domains\Responses\Installment** |  |




---

## Instance

Class Generic



* Full name: \PagSeguro\Resources\Responsibility\Factory\Request\Instance
* This class implements: \PagSeguro\Resources\Responsibility\Handler


### successor



```php
Instance::successor(  $successor ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$successor` | **** |  |




---

### handler



```php
Instance::handler(  $instance,  $class ): \PagSeguro\Resources\Responsibility\Factory\Request\bool;
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$instance` | **** |  |
| `$class` | **** |  |




---

## Interval

Class Payment



* Full name: \PagSeguro\Services\PreApproval\Search\Interval


### search



```php
Interval::search( \PagSeguro\Domains\Account\Credentials $credentials,  $days ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$days` | **** |  |




---

## Item

Class Shipping



* Full name: \PagSeguro\Resources\Factory\Item


### __construct

Item constructor.

```php
Item::__construct(  )
```







---

### instance



```php
Item::instance( \PagSeguro\Domains\Item $item ): \PagSeguro\Domains\Item
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item` | **\PagSeguro\Domains\Item** |  |




---

### withArray



```php
Item::withArray(  $array ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
Item::withParameters(  $id,  $description,  $quantity,  $amount, null $weight = null, null $shippingCost = null ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **** |  |
| `$description` | **** |  |
| `$quantity` | **** |  |
| `$amount` | **** |  |
| `$weight` | **null** |  |
| `$shippingCost` | **null** |  |




---

## Item

Class Item



* Full name: \PagSeguro\Domains\Item


### getAmount



```php
Item::getAmount(  ): double
```







---

### setAmount



```php
Item::setAmount( double $amount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$amount` | **double** |  |




---

### getDescription



```php
Item::getDescription(  ): string
```







---

### setDescription



```php
Item::setDescription( string $description ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$description` | **string** |  |




---

### getId



```php
Item::getId(  ): string
```







---

### setId



```php
Item::setId( string $id ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### getQuantity



```php
Item::getQuantity(  ): integer
```







---

### setQuantity



```php
Item::setQuantity( integer $quantity ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$quantity` | **integer** |  |




---

### getShippingCost



```php
Item::getShippingCost(  ): double
```







---

### setShippingCost



```php
Item::setShippingCost( double $shippingCost ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shippingCost` | **double** |  |




---

### getWeight



```php
Item::getWeight(  ): float
```







---

### setWeight



```php
Item::setWeight( float $weight ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$weight` | **float** |  |




---

## Item

Class Item



* Full name: \PagSeguro\Domains\DirectPreApproval\Item


### withParameters



```php
Item::withParameters(  $id,  $description,  $quantity,  $amount, null $weight = null, null $shippingCost = null ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **** |  |
| `$description` | **** |  |
| `$quantity` | **** |  |
| `$amount` | **** |  |
| `$weight` | **null** |  |
| `$shippingCost` | **null** |  |




---

## Keys

Class Keys



* Full name: \PagSeguro\Enum\PaymentMethod\Config\Keys


## Language

Class Language



* Full name: \PagSeguro\Resources\Framework\Language


### getRelease



```php
Language::getRelease(  ): string
```







---

## Level

Describes log levels.



* Full name: \PagSeguro\Enum\Log\Level
* Parent class: \PagSeguro\Enum\Enum


### getList



```php
Level::getList(  ): array
```



* This method is **static**.



---

### getType



```php
Level::getType(  $key ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### getValue



```php
Level::getValue(  $value ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### isValidName



```php
Level::isValidName(  $name, boolean $strict = false ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |
| `$strict` | **boolean** |  |




---

### isValidValue



```php
Level::isValidValue(  $value, boolean $strict = true ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |
| `$strict` | **boolean** |  |




---

## Library

Class Library



* Full name: \PagSeguro\Library


### initialize



```php
Library::initialize(  )
```



* This method is **static**.



---

### validate



```php
Library::validate(  ): boolean
```



* This method is **static**.



---

### libraryVersion



```php
Library::libraryVersion(  ): string
```



* This method is **static**.



---

### phpVersion



```php
Library::phpVersion(  ): string
```



* This method is **static**.



---

### moduleVersion



```php
Library::moduleVersion(  ): \PagSeguro\Resources\Framework\Module
```



* This method is **static**.



---

### cmsVersion



```php
Library::cmsVersion(  ): \PagSeguro\Resources\Framework\ContentManagementSystems
```



* This method is **static**.



---

## Log





* Full name: \PagSeguro\Domains\Log


### getActive



```php
Log::getActive(  ): boolean
```







---

### setActive



```php
Log::setActive( boolean $active )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$active` | **boolean** |  |




---

### getLocation



```php
Log::getLocation(  ): string
```







---

### setLocation



```php
Log::setLocation( string $location )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |




---

## Logger

It simply delegates all log-level-specific methods to the `log` method to
reduce boilerplate code that a simple Logger that does the same thing with
messages regardless of the error level has to implement.



* Full name: \PagSeguro\Resources\Log\Logger
* This class implements: \PagSeguro\Resources\Log\LoggerInterface


### emergency

System is unusable.

```php
Logger::emergency( string $message, array $context = array() ): null
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




---

### alert

Action must be taken immediately.

```php
Logger::alert( string $message, array $context = array() ): null
```

Example: Entire website down, database unavailable, etc. This should
trigger the SMS alerts and wake you up.

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




---

### critical

Critical conditions.

```php
Logger::critical( string $message, array $context = array() ): null
```

Example: Application component unavailable, unexpected exception.

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




---

### error

Runtime errors that do not require immediate action but should typically
be logged and monitored.

```php
Logger::error( string $message, array $context = array() ): null
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




---

### warning

Exceptional occurrences that are not errors.

```php
Logger::warning( string $message, array $context = array() ): null
```

Example: Use of deprecated APIs, poor use of an API, undesirable things
that are not necessarily wrong.

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




---

### notice

Normal but significant events.

```php
Logger::notice( string $message, array $context = array() ): null
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




---

### info

Interesting events.

```php
Logger::info( string $message, array $context = array() ): null
```

Example: User logs in, SQL logs.

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




---

### debug

Detailed debug information.

```php
Logger::debug( string $message, array $context = array() ): null
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




---

### log

Logs with an arbitrary level.

```php
Logger::log( mixed $level, string $message, array $context = array() ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |
| `$message` | **string** |  |
| `$context` | **array** |  |




---

## Mask

Class Mask



* Full name: \PagSeguro\Enum\Mask
* Parent class: \PagSeguro\Enum\Enum


### getList



```php
Mask::getList(  ): array
```



* This method is **static**.



---

### getType



```php
Mask::getType(  $key ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### getValue



```php
Mask::getValue(  $value ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### isValidName



```php
Mask::isValidName(  $name, boolean $strict = false ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |
| `$strict` | **boolean** |  |




---

### isValidValue



```php
Mask::isValidValue(  $value, boolean $strict = true ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |
| `$strict` | **boolean** |  |




---

## Mask

Class Mask



* Full name: \PagSeguro\Helpers\Mask


### cpf



```php
Mask::cpf(  $subject, array $options ): boolean|string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subject` | **** |  |
| `$options` | **array** |  |




---

### rg



```php
Mask::rg(  $subject, array $options ): boolean|string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subject` | **** |  |
| `$options` | **array** |  |




---

### birthDate



```php
Mask::birthDate(  $subject, array $options ): boolean|string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subject` | **** |  |
| `$options` | **array** |  |




---

### phone



```php
Mask::phone(  $subject, array $options )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subject` | **** |  |
| `$options` | **array** |  |




---

### mobile



```php
Mask::mobile(  $subject, array $options ): boolean|string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subject` | **** |  |
| `$options` | **array** |  |




---

## Metadata

Class Metadata



* Full name: \PagSeguro\Resources\Factory\Request\Metadata


### __construct



```php
Metadata::__construct(  )
```







---

### instance



```php
Metadata::instance( \PagSeguro\Domains\Metadata $metadata )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\PagSeguro\Domains\Metadata** |  |




---

### withArray



```php
Metadata::withArray(  $array )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
Metadata::withParameters(  $key,  $value,  $group = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |
| `$value` | **** |  |
| `$group` | **** |  |




---

## Metadata

Class Metadata



* Full name: \PagSeguro\Domains\Metadata


### getKey



```php
Metadata::getKey(  )
```







---

### setKey



```php
Metadata::setKey(  $key )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### getValue



```php
Metadata::getValue(  )
```







---

### setValue



```php
Metadata::setValue(  $value )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### getGroup



```php
Metadata::getGroup(  )
```







---

### setGroup



```php
Metadata::setGroup(  $group )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **** |  |




---

## Method

Lists all the available payment methods for direct payment



* Full name: \PagSeguro\Enum\DirectPayment\Method


## Module

Class Module



* Full name: \PagSeguro\Resources\Framework\Module
* Parent class: \PagSeguro\Resources\Framework\Platform\Factory


### setName



```php
Module::setName(  $name ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |




---

### getName



```php
Module::getName(  ): string
```







---

### setRelease



```php
Module::setRelease(  $release ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$release` | **** |  |




---

### getRelease



```php
Module::getRelease(  ): string
```







---

## Name

Class Name



* Full name: \PagSeguro\Enum\PaymentMethod\Name


## Notification

Class Notifications



* Full name: \PagSeguro\Services\Transactions\Notification


### check



```php
Notification::check( \PagSeguro\Domains\Account\Credentials $credentials ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |




---

## Notification

Class Payment



* Full name: \PagSeguro\Services\Application\Search\Notification


### search



```php
Notification::search( \PagSeguro\Domains\Account\Credentials $credentials,  $code ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$code` | **** |  |




---

## Notification

Class Payment



* Full name: \PagSeguro\Resources\Builder\Notification
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Notification::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Notification::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Notification::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getTransactionRequestUrl



```php
Notification::getTransactionRequestUrl(  ): string
```



* This method is **static**.



---

### getAuthorizationRequestUrl



```php
Notification::getAuthorizationRequestUrl(  ): string
```



* This method is **static**.



---

### getPreApprovalRequestUrl



```php
Notification::getPreApprovalRequestUrl(  ): string
```



* This method is **static**.



---

## Notification

Class Notifications



* Full name: \PagSeguro\Services\Application\Notification


### check



```php
Notification::check( \PagSeguro\Domains\Account\Credentials $credentials ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |




---

## Notification

Class Notification



* Full name: \PagSeguro\Domains\Notification


### getCode



```php
Notification::getCode(  ): mixed
```







---

### setCode



```php
Notification::setCode(  $code ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **** |  |




---

### getType



```php
Notification::getType(  ): mixed
```







---

### setType



```php
Notification::setType(  $type ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **** |  |




---

## Notification

Class Notification



* Full name: \PagSeguro\Enum\Notification
* Parent class: \PagSeguro\Enum\Enum


### getList



```php
Notification::getList(  ): array
```



* This method is **static**.



---

### getType



```php
Notification::getType(  $key ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### getValue



```php
Notification::getValue(  $value ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### isValidName



```php
Notification::isValidName(  $name, boolean $strict = false ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |
| `$strict` | **boolean** |  |




---

### isValidValue



```php
Notification::isValidValue(  $value, boolean $strict = true ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |
| `$strict` | **boolean** |  |




---

## Notification

Class Payment



* Full name: \PagSeguro\Services\PreApproval\Search\Notification


### search



```php
Notification::search( \PagSeguro\Domains\Account\Credentials $credentials,  $code ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$code` | **** |  |




---

## Notification

Class Notifications



* Full name: \PagSeguro\Services\PreApproval\Notification


### check



```php
Notification::check( \PagSeguro\Domains\Account\Credentials $credentials ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |




---

## NotificationObject

Class NotificationObject



* Full name: \PagSeguro\Helpers\NotificationObject


### initialize



```php
NotificationObject::initialize(  ): $this
```



* This method is **static**.



---

## OnlineDebit

Class Payment



* Full name: \PagSeguro\Domains\Requests\DirectPayment\OnlineDebit
* Parent class: \PagSeguro\Domains\Requests\DirectPayment\OnlineDebit\Request


### setCurrency



```php
OnlineDebit::setCurrency(  $currency )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currency` | **** |  |




---

### getCurrency



```php
OnlineDebit::getCurrency(  ): mixed
```







---

### setExtraAmount



```php
OnlineDebit::setExtraAmount(  $extraAmount )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getExtraAmount



```php
OnlineDebit::getExtraAmount(  ): mixed
```







---

### addItems



```php
OnlineDebit::addItems(  )
```







---

### setItems



```php
OnlineDebit::setItems(  $items )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




---

### getItems



```php
OnlineDebit::getItems(  )
```







---

### itemLenght



```php
OnlineDebit::itemLenght(  )
```







---

### getMode



```php
OnlineDebit::getMode(  ): mixed
```







---

### setMode



```php
OnlineDebit::setMode(  $mode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **** |  |




---

### getUrl



```php
OnlineDebit::getUrl(  )
```







---

### setUrl



```php
OnlineDebit::setUrl(  $url )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |




---

### getReceiverEmail



```php
OnlineDebit::getReceiverEmail(  )
```







---

### setReceiverEmail



```php
OnlineDebit::setReceiverEmail(  $receiverEmail )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$receiverEmail` | **** |  |




---

### setSender



```php
OnlineDebit::setSender(  )
```







---

### getSender



```php
OnlineDebit::getSender(  )
```







---

### __construct



```php
OnlineDebit::__construct(  )
```







---

### setShipping



```php
OnlineDebit::setShipping(  )
```







---

### getShipping



```php
OnlineDebit::getShipping(  )
```







---

### setReference



```php
OnlineDebit::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### getReference



```php
OnlineDebit::getReference(  )
```







---

### getBankName



```php
OnlineDebit::getBankName(  ): string
```





**Return Value:**

bank name



---

### setBankName



```php
OnlineDebit::setBankName(  $bankName ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bankName` | **** |  |




---

### register



```php
OnlineDebit::register(  $credentials ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## OnlineDebit

Class Payment



* Full name: \PagSeguro\Services\DirectPayment\OnlineDebit


### checkout



```php
OnlineDebit::checkout( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\DirectPayment\OnlineDebit $payment ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$payment` | **\PagSeguro\Domains\Requests\DirectPayment\OnlineDebit** |  |




---

## Parameter





* Full name: \PagSeguro\Domains\Parameter


### getKey



```php
Parameter::getKey(  )
```







---

### setKey



```php
Parameter::setKey(  $key )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### getValue



```php
Parameter::getValue(  )
```







---

### setValue



```php
Parameter::setValue(  $value )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### getIndex



```php
Parameter::getIndex(  )
```







---

### setIndex



```php
Parameter::setIndex(  $index )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **** |  |




---

## Parameter

Description of Parameter



* Full name: \PagSeguro\Resources\Factory\Request\Parameter


### __construct



```php
Parameter::__construct(  )
```







---

### instance



```php
Parameter::instance( \PagSeguro\Domains\Parameter $parameter )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parameter` | **\PagSeguro\Domains\Parameter** |  |




---

### withArray



```php
Parameter::withArray(  $array )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
Parameter::withParameters(  $key,  $value )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |
| `$value` | **** |  |




---

### index



```php
Parameter::index(  $index )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **** |  |




---

## Partner

Class Partner



* Full name: \PagSeguro\Domains\Authorization\Partner


### __construct

Partner constructor.

```php
Partner::__construct( string $name = null, \DateTime $birthDate = null, \PagSeguro\Domains\Document $document = null, \PagSeguro\Domains\Phone $phone = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$birthDate` | **\DateTime** |  |
| `$document` | **\PagSeguro\Domains\Document** |  |
| `$phone` | **\PagSeguro\Domains\Phone** |  |




---

### addDocuments



```php
Partner::addDocuments( \PagSeguro\Domains\Document $document ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\PagSeguro\Domains\Document** |  |




---

### addPhones



```php
Partner::addPhones( \PagSeguro\Domains\Phone $phone ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$phone` | **\PagSeguro\Domains\Phone** |  |




---

### getName



```php
Partner::getName(  ): string
```







---

### getDocuments



```php
Partner::getDocuments(  ): array
```







---

### getBirthDate



```php
Partner::getBirthDate(  ): null|string
```







---

### getPhones



```php
Partner::getPhones(  ): array
```







---

## Payment





* Full name: \PagSeguro\Services\PreApproval\Payment


### create



```php
Payment::create( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\PreApproval $preApproval )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$preApproval` | **\PagSeguro\Domains\Requests\PreApproval** |  |




---

## Payment

Class Payment



* Full name: \PagSeguro\Resources\Builder\DirectPreApproval\Payment
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Payment::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Payment::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Payment::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getPaymentUrl



```php
Payment::getPaymentUrl(  ): string
```



* This method is **static**.



---

## Payment

Class Payment



* Full name: \PagSeguro\Services\Checkout\Payment


### checkout



```php
Payment::checkout( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\Payment $payment, boolean $onlyCode ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$payment` | **\PagSeguro\Domains\Requests\Payment** |  |
| `$onlyCode` | **boolean** |  |




---

## Payment

Class Payment



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\Payment
* Parent class: \PagSeguro\Domains\Requests\DirectPreApproval\PaymentRequest


### __construct

PaymentRequest constructor.

```php
Payment::__construct(  )
```







---

### setPreApprovalCode



```php
Payment::setPreApprovalCode(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

### setReference



```php
Payment::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### setSenderHash



```php
Payment::setSenderHash(  $senderHash )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$senderHash` | **** |  |




---

### setSenderIp



```php
Payment::setSenderIp(  $senderIp )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$senderIp` | **** |  |




---

### addItems



```php
Payment::addItems( \PagSeguro\Domains\DirectPreApproval\Item $item ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item` | **\PagSeguro\Domains\DirectPreApproval\Item** |  |




---

### object_to_array



```php
Payment::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### register



```php
Payment::register(  $credentials ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## Payment

Class Payment



* Full name: \PagSeguro\Resources\Builder\PreApproval\Payment
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Payment::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Payment::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Payment::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getRequestUrl



```php
Payment::getRequestUrl(  ): string
```



* This method is **static**.



---

### getResponseUrl



```php
Payment::getResponseUrl(  ): string
```



* This method is **static**.



---

## Payment

Class Payment



* Full name: \PagSeguro\Domains\Requests\Payment
* Parent class: \PagSeguro\Domains\Requests\Checkout\Payment\Request


### accept



```php
Payment::accept(  ): \PagSeguro\Resources\Factory\Request\Accepted
```







---

### exclude



```php
Payment::exclude(  ): \PagSeguro\Resources\Factory\Request\Accepted
```







---

### getAttributeMap



```php
Payment::getAttributeMap(  )
```







---

### setCurrency



```php
Payment::setCurrency(  $currency )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currency` | **** |  |




---

### getCurrency



```php
Payment::getCurrency(  ): mixed
```







---

### setExtraAmount



```php
Payment::setExtraAmount(  $extraAmount )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getExtraAmount



```php
Payment::getExtraAmount(  ): mixed
```







---

### addItems



```php
Payment::addItems(  )
```







---

### setItems



```php
Payment::setItems(  $items )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




---

### getItems



```php
Payment::getItems(  )
```







---

### itemLenght



```php
Payment::itemLenght(  )
```







---

### addMetadata



```php
Payment::addMetadata(  )
```







---

### setMetadata



```php
Payment::setMetadata(  $metadata )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **** |  |




---

### getMetadata



```php
Payment::getMetadata(  )
```







---

### metadataLenght



```php
Payment::metadataLenght(  )
```







---

### getUrl



```php
Payment::getUrl(  )
```







---

### setUrl



```php
Payment::setUrl(  $url )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |




---

### addParameter



```php
Payment::addParameter(  )
```







---

### setParameter



```php
Payment::setParameter(  $parameter )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parameter` | **** |  |




---

### getParameter



```php
Payment::getParameter(  )
```







---

### parameterLenght



```php
Payment::parameterLenght(  )
```







---

### addPaymentMethod



```php
Payment::addPaymentMethod(  )
```







---

### setPaymentMethod



```php
Payment::setPaymentMethod(  $paymentMethod )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paymentMethod` | **** |  |




---

### getPaymentMethod



```php
Payment::getPaymentMethod(  )
```







---

### paymentMethodLenght



```php
Payment::paymentMethodLenght(  )
```







---

### getPreApproval



```php
Payment::getPreApproval(  ): \PagSeguro\Domains\PreApproval
```







---

### setPreApproval



```php
Payment::setPreApproval(  ): \PagSeguro\Domains\PreApproval
```







---

### setSender



```php
Payment::setSender(  ): \PagSeguro\Domains\Requests\Adapter\Sender
```







---

### getSender



```php
Payment::getSender(  ): \PagSeguro\Domains\Sender
```







---

### __construct



```php
Payment::__construct(  )
```







---

### setShipping



```php
Payment::setShipping(  )
```







---

### getShipping



```php
Payment::getShipping(  )
```







---

### setReference



```php
Payment::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### getReference



```php
Payment::getReference(  )
```







---

### getReceiverEmail



```php
Payment::getReceiverEmail(  )
```







---

### setReceiverEmail



```php
Payment::setReceiverEmail(  $receiverEmail )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$receiverEmail` | **** |  |




---

### register



```php
Payment::register(  $credentials, boolean $onlyCode = false ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |
| `$onlyCode` | **boolean** |  |




---

## Payment

Class Payment



* Full name: \PagSeguro\Resources\Builder\Checkout\Payment
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Payment::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Payment::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Payment::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getRequestUrl



```php
Payment::getRequestUrl(  ): string
```



* This method is **static**.



---

### getResponseUrl



```php
Payment::getResponseUrl(  ): string
```



* This method is **static**.



---

## Payment

Class Payment



* Full name: \PagSeguro\Resources\Builder\DirectPayment\Payment
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Payment::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Payment::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Payment::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getRequestUrl



```php
Payment::getRequestUrl(  ): string
```



* This method is **static**.



---

## PaymentMethod

Class PaymentMethod



* Full name: \PagSeguro\Domains\PaymentMethod


### getGroup



```php
PaymentMethod::getGroup(  ): mixed
```







---

### setGroup



```php
PaymentMethod::setGroup( mixed $group ): \PagSeguro\Domains\PaymentMethod
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **mixed** |  |




---

### getKey



```php
PaymentMethod::getKey(  ): mixed
```







---

### setKey



```php
PaymentMethod::setKey( mixed $key ): \PagSeguro\Domains\PaymentMethod
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




---

### getValue



```php
PaymentMethod::getValue(  ): mixed
```







---

### setValue



```php
PaymentMethod::setValue( mixed $value ): \PagSeguro\Domains\PaymentMethod
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




---

## PaymentMethod

Class PaymentMethod



* Full name: \PagSeguro\Domains\DirectPreApproval\PaymentMethod


### __construct

PaymentMethod constructor.

```php
PaymentMethod::__construct(  )
```







---

### setCreditCard



```php
PaymentMethod::setCreditCard(  ): \PagSeguro\Domains\DirectPreApproval\CreditCard
```







---

## PaymentMethod

Class PaymentMethod



* Full name: \PagSeguro\Domains\Responses\PaymentMethod


### getCode



```php
PaymentMethod::getCode(  ): mixed
```







---

### setCode



```php
PaymentMethod::setCode( mixed $code ): \PagSeguro\Domains\Responses\PaymentMethod
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




---

### getType



```php
PaymentMethod::getType(  ): mixed
```







---

### setType



```php
PaymentMethod::setType( mixed $type ): \PagSeguro\Domains\Responses\PaymentMethod
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




---

## PaymentMethod

Class PaymentMethod



* Full name: \PagSeguro\Resources\Factory\Request\PaymentMethod


### instance



```php
PaymentMethod::instance( \PagSeguro\Domains\PaymentMethod $paymentMethod )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paymentMethod` | **\PagSeguro\Domains\PaymentMethod** |  |




---

### withArray



```php
PaymentMethod::withArray(  $array )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
PaymentMethod::withParameters(  $group,  $key,  $value )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **** |  |
| `$key` | **** |  |
| `$value` | **** |  |




---

## PaymentParser

Class PaymentParser



* Full name: \PagSeguro\Parsers\DirectPreApproval\PaymentParser
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
PaymentParser::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getData



```php
PaymentParser::getData( \PagSeguro\Domains\Requests\DirectPreApproval\Payment $directPreApproval ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directPreApproval` | **\PagSeguro\Domains\Requests\DirectPreApproval\Payment** |  |




---

### success



```php
PaymentParser::success( \PagSeguro\Resources\Http $http ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## PaymentRequest

Class PaymentRequest



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\PaymentRequest


### object_to_array



```php
PaymentRequest::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### __construct

PaymentRequest constructor.

```php
PaymentRequest::__construct(  )
```







---

### setPreApprovalCode



```php
PaymentRequest::setPreApprovalCode(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

### setReference



```php
PaymentRequest::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### setSenderHash



```php
PaymentRequest::setSenderHash(  $senderHash )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$senderHash` | **** |  |




---

### setSenderIp



```php
PaymentRequest::setSenderIp(  $senderIp )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$senderIp` | **** |  |




---

### addItems



```php
PaymentRequest::addItems( \PagSeguro\Domains\DirectPreApproval\Item $item ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item` | **\PagSeguro\Domains\DirectPreApproval\Item** |  |




---

## PaymentService

Class PaymentService



* Full name: \PagSeguro\Services\DirectPreApproval\PaymentService


### create



```php
PaymentService::create( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\DirectPreApproval\Payment $payment ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$payment` | **\PagSeguro\Domains\Requests\DirectPreApproval\Payment** |  |




---

## Permission

Class Permission



* Full name: \PagSeguro\Domains\Permission


### getCode



```php
Permission::getCode(  ): mixed
```







---

### setCode



```php
Permission::setCode( mixed $code ): \PagSeguro\Domains\Permission
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




---

### getLastUpdate



```php
Permission::getLastUpdate(  ): mixed
```







---

### setLastUpdate



```php
Permission::setLastUpdate( mixed $lastUpdate ): \PagSeguro\Domains\Permission
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lastUpdate` | **mixed** |  |




---

### getStatus



```php
Permission::getStatus(  ): mixed
```







---

### setStatus



```php
Permission::setStatus( mixed $status ): \PagSeguro\Domains\Permission
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **mixed** |  |




---

## Permissions

Class Permissions



* Full name: \PagSeguro\Enum\Authorization\Permissions
* Parent class: \PagSeguro\Enum\Enum


### getList



```php
Permissions::getList(  ): array
```



* This method is **static**.



---

### getType



```php
Permissions::getType(  $key ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### getValue



```php
Permissions::getValue(  $value ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### isValidName



```php
Permissions::isValidName(  $name, boolean $strict = false ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |
| `$strict` | **boolean** |  |




---

### isValidValue



```php
Permissions::isValidValue(  $value, boolean $strict = true ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |
| `$strict` | **boolean** |  |




---

## Personal

Class Person



* Full name: \PagSeguro\Domains\Authorization\Personal


### __construct

Person constructor.

```php
Personal::__construct( string $name = null, \DateTime $birthDate = null, \PagSeguro\Domains\Document $document = null, \PagSeguro\Domains\Phone $phone = null, \PagSeguro\Domains\Address $address = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$birthDate` | **\DateTime** |  |
| `$document` | **\PagSeguro\Domains\Document** |  |
| `$phone` | **\PagSeguro\Domains\Phone** |  |
| `$address` | **\PagSeguro\Domains\Address** |  |




---

### addDocuments



```php
Personal::addDocuments( \PagSeguro\Domains\Document $document ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\PagSeguro\Domains\Document** |  |




---

### addPhones



```php
Personal::addPhones( \PagSeguro\Domains\Phone $phone ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$phone` | **\PagSeguro\Domains\Phone** |  |




---

### getName



```php
Personal::getName(  ): string
```







---

### getAddress



```php
Personal::getAddress(  ): \PagSeguro\Domains\Address
```







---

### getDocuments



```php
Personal::getDocuments(  ): array
```







---

### getPhones



```php
Personal::getPhones(  ): array
```







---

### getBirthDate



```php
Personal::getBirthDate(  ): null|string
```







---

## PersonalService

Class PersonSeller



* Full name: \PagSeguro\Services\Authorization\PersonalService


### __construct

Seller constructor.

```php
PersonalService::__construct( \PagSeguro\Domains\Authorization $authorization )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$authorization` | **\PagSeguro\Domains\Authorization** |  |




---

### getAsXML



```php
PersonalService::getAsXML(  ): string
```







---

## Phone

Class Phone



* Full name: \PagSeguro\Domains\Phone


### __construct

Phone constructor.

```php
Phone::__construct( null $areaCode = null, null $number = null, \PagSeguro\Enum\Authorization\PhoneEnum $type = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$areaCode` | **null** |  |
| `$number` | **null** |  |
| `$type` | **\PagSeguro\Enum\Authorization\PhoneEnum** |  |




---

### getAreaCode



```php
Phone::getAreaCode(  ): integer
```







---

### setAreaCode



```php
Phone::setAreaCode( integer $areaCode ): \PagSeguro\Domains\Phone
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$areaCode` | **integer** |  |




---

### getNumber



```php
Phone::getNumber(  ): integer
```







---

### setNumber



```php
Phone::setNumber( integer $number ): \PagSeguro\Domains\Phone
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **integer** |  |




---

### getType



```php
Phone::getType(  ): string
```







---

## Phone

Class Phone



* Full name: \PagSeguro\Domains\DirectPreApproval\Phone


### withParameters



```php
Phone::withParameters(  $areaCode,  $number ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$areaCode` | **** |  |
| `$number` | **** |  |




---

## Phone

Class Phone



* Full name: \PagSeguro\Resources\Factory\Phone


### __construct

Phone constructor.

```php
Phone::__construct(  )
```







---

### instance



```php
Phone::instance( \PagSeguro\Domains\Phone $phone ): \PagSeguro\Domains\Phone
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$phone` | **\PagSeguro\Domains\Phone** |  |




---

### withArray



```php
Phone::withArray(  $array )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
Phone::withParameters(  $areaCode,  $number ): \PagSeguro\Domains\Phone
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$areaCode` | **** |  |
| `$number` | **** |  |




---

## Phone

Class Document



* Full name: \PagSeguro\Resources\Factory\Request\DirectPayment\CreditCard\Holder\Phone


### __construct

Document constructor.

```php
Phone::__construct(  $holder )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$holder` | **** |  |




---

### instance



```php
Phone::instance( \PagSeguro\Domains\Phone $phone ): \PagSeguro\Domains\DirectPayment\CreditCard\Holder
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$phone` | **\PagSeguro\Domains\Phone** |  |




---

### withArray



```php
Phone::withArray(  $array ): \PagSeguro\Domains\DirectPayment\CreditCard\Holder
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
Phone::withParameters(  $areaCode,  $number ): \PagSeguro\Domains\DirectPayment\CreditCard\Holder
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$areaCode` | **** |  |
| `$number` | **** |  |




---

## Phone

Class Document



* Full name: \PagSeguro\Resources\Factory\Sender\Phone


### __construct

Document constructor.

```php
Phone::__construct(  $sender )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sender` | **** |  |




---

### instance



```php
Phone::instance( \PagSeguro\Domains\Phone $phone ): \PagSeguro\Domains\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$phone` | **\PagSeguro\Domains\Phone** |  |




---

### withArray



```php
Phone::withArray(  $array ): \PagSeguro\Domains\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
Phone::withParameters(  $areaCode,  $number ): \PagSeguro\Domains\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$areaCode` | **** |  |
| `$number` | **** |  |




---

## PhoneEnum

Class PhoneEnum



* Full name: \PagSeguro\Enum\Authorization\PhoneEnum
* Parent class: \PagSeguro\Enum\Enum


### getList



```php
PhoneEnum::getList(  ): array
```



* This method is **static**.



---

### getType



```php
PhoneEnum::getType(  $key ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### getValue



```php
PhoneEnum::getValue(  $value ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### isValidName



```php
PhoneEnum::isValidName(  $name, boolean $strict = false ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |
| `$strict` | **boolean** |  |




---

### isValidValue



```php
PhoneEnum::isValidValue(  $value, boolean $strict = true ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |
| `$strict` | **boolean** |  |




---

## Plan

Class Plan



* Full name: \PagSeguro\Resources\Builder\DirectPreApproval\Plan
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Plan::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Plan::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Plan::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getPlanUrl



```php
Plan::getPlanUrl(  ): string
```



* This method is **static**.



---

## Plan

Class Plan



* Full name: \PagSeguro\Domains\DirectPreApproval\Plan


### __construct

Plan constructor.

```php
Plan::__construct(  )
```







---

### setRedirectURL



```php
Plan::setRedirectURL(  $redirectURL )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$redirectURL` | **** |  |




---

### setReference



```php
Plan::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### setPreApproval



```php
Plan::setPreApproval(  ): \PagSeguro\Domains\DirectPreApproval\PreApproval
```







---

### setReviewURL



```php
Plan::setReviewURL(  $reviewURL )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reviewURL` | **** |  |




---

### setMaxUsers



```php
Plan::setMaxUsers(  $maxUsers )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxUsers` | **** |  |




---

### setReceiver



```php
Plan::setReceiver(  ): \PagSeguro\Domains\DirectPreApproval\Receiver
```







---

## Plan

Class Plan



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\Plan
* Parent class: \PagSeguro\Domains\Requests\DirectPreApproval\PlanRequest


### __construct

PlanRequest constructor.

```php
Plan::__construct(  )
```







---

### setRedirectURL



```php
Plan::setRedirectURL(  $redirectURL )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$redirectURL` | **** |  |




---

### setReference



```php
Plan::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### setPreApproval



```php
Plan::setPreApproval(  ): \PagSeguro\Domains\DirectPreApproval\PreApproval
```







---

### setReviewURL



```php
Plan::setReviewURL(  $reviewURL )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reviewURL` | **** |  |




---

### setMaxUses



```php
Plan::setMaxUses(  $maxUsers )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxUsers` | **** |  |




---

### setReceiver



```php
Plan::setReceiver(  ): \PagSeguro\Domains\DirectPreApproval\Receiver
```







---

### object_to_array



```php
Plan::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### register



```php
Plan::register(  $credentials ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## PlanParser

Class PlanParser



* Full name: \PagSeguro\Parsers\DirectPreApproval\PlanParser
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
PlanParser::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getData



```php
PlanParser::getData( \PagSeguro\Domains\Requests\DirectPreApproval\Plan $data ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\PagSeguro\Domains\Requests\DirectPreApproval\Plan** |  |




---

### success



```php
PlanParser::success( \PagSeguro\Resources\Http $http ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## PlanRequest

Class PlanRequest



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\PlanRequest


### object_to_array



```php
PlanRequest::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### __construct

PlanRequest constructor.

```php
PlanRequest::__construct(  )
```







---

### setRedirectURL



```php
PlanRequest::setRedirectURL(  $redirectURL )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$redirectURL` | **** |  |




---

### setReference



```php
PlanRequest::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### setPreApproval



```php
PlanRequest::setPreApproval(  ): \PagSeguro\Domains\DirectPreApproval\PreApproval
```







---

### setReviewURL



```php
PlanRequest::setReviewURL(  $reviewURL )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reviewURL` | **** |  |




---

### setMaxUses



```php
PlanRequest::setMaxUses(  $maxUsers )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxUsers` | **** |  |




---

### setReceiver



```php
PlanRequest::setReceiver(  ): \PagSeguro\Domains\DirectPreApproval\Receiver
```







---

## PlanService

Class PlanService



* Full name: \PagSeguro\Services\DirectPreApproval\PlanService


### create



```php
PlanService::create( \PagSeguro\Domains\Account\Credentials $credentials,  $data ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$data` | **** |  |




---

## PreApproval





* Full name: \PagSeguro\Domains\PreApproval


### getAmountPerPayment



```php
PreApproval::getAmountPerPayment(  ): mixed
```







---

### setAmountPerPayment



```php
PreApproval::setAmountPerPayment( mixed $amountPerPayment ): \PagSeguro\Domains\PreApproval
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$amountPerPayment` | **mixed** |  |




---

### getCharge



```php
PreApproval::getCharge(  ): mixed
```







---

### setCharge



```php
PreApproval::setCharge( mixed $charge ): \PagSeguro\Domains\PreApproval
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$charge` | **mixed** |  |




---

### getDetails



```php
PreApproval::getDetails(  ): mixed
```







---

### setDetails



```php
PreApproval::setDetails( mixed $details ): \PagSeguro\Domains\PreApproval
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$details` | **mixed** |  |




---

### getFinalDate



```php
PreApproval::getFinalDate(  ): mixed
```







---

### setFinalDate



```php
PreApproval::setFinalDate( mixed $finalDate ): \PagSeguro\Domains\PreApproval
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$finalDate` | **mixed** |  |




---

### getInitialDate



```php
PreApproval::getInitialDate(  ): mixed
```







---

### setInitialDate



```php
PreApproval::setInitialDate( mixed $initialDate ): \PagSeguro\Domains\PreApproval
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$initialDate` | **mixed** |  |




---

### getMaxAmountPerPeriod



```php
PreApproval::getMaxAmountPerPeriod(  ): mixed
```







---

### setMaxAmountPerPeriod



```php
PreApproval::setMaxAmountPerPeriod( mixed $maxAmountPerPeriod ): \PagSeguro\Domains\PreApproval
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxAmountPerPeriod` | **mixed** |  |




---

### getMaxAmountPerPayment



```php
PreApproval::getMaxAmountPerPayment(  ): mixed
```







---

### setMaxAmountPerPayment



```php
PreApproval::setMaxAmountPerPayment( mixed $maxAmountPerPayment ): \PagSeguro\Domains\PreApproval
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxAmountPerPayment` | **mixed** |  |




---

### getMaxPaymentsPerPeriod



```php
PreApproval::getMaxPaymentsPerPeriod(  ): mixed
```







---

### setMaxPaymentsPerPeriod



```php
PreApproval::setMaxPaymentsPerPeriod(  $maxPaymentsPerPeriod ): \PagSeguro\Domains\PreApproval
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxPaymentsPerPeriod` | **** |  |




---

### getMaxTotalAmount



```php
PreApproval::getMaxTotalAmount(  ): mixed
```







---

### setMaxTotalAmount



```php
PreApproval::setMaxTotalAmount( mixed $maxTotalAmount ): \PagSeguro\Domains\PreApproval
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxTotalAmount` | **mixed** |  |




---

### getName



```php
PreApproval::getName(  ): mixed
```







---

### setName



```php
PreApproval::setName( mixed $name ): \PagSeguro\Domains\PreApproval
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




---

### getPeriod



```php
PreApproval::getPeriod(  ): mixed
```







---

### setPeriod



```php
PreApproval::setPeriod( mixed $period ): \PagSeguro\Domains\PreApproval
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$period` | **mixed** |  |




---

## PreApproval

Class PreApproval



* Full name: \PagSeguro\Domains\DirectPreApproval\PreApproval


### __construct

PreApproval constructor.

```php
PreApproval::__construct(  )
```







---

### setName



```php
PreApproval::setName(  $name )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |




---

### setCharge



```php
PreApproval::setCharge(  $charge )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$charge` | **** |  |




---

### setPeriod



```php
PreApproval::setPeriod(  $period )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$period` | **** |  |




---

### setAmountPerPayment



```php
PreApproval::setAmountPerPayment(  $amountPerPayment )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$amountPerPayment` | **** |  |




---

### setMembershipFee



```php
PreApproval::setMembershipFee(  $membershipFee )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$membershipFee` | **** |  |




---

### setTrialPeriodDuration



```php
PreApproval::setTrialPeriodDuration(  $trialPeriodDuration )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$trialPeriodDuration` | **** |  |




---

### setExpiration



```php
PreApproval::setExpiration(  ): \PagSeguro\Domains\DirectPreApproval\Expiration
```







---

### setDetails



```php
PreApproval::setDetails(  $details )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$details` | **** |  |




---

### setMaxAmountPerPeriod



```php
PreApproval::setMaxAmountPerPeriod(  $maxAmountPerPeriod )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxAmountPerPeriod` | **** |  |




---

### setMaxAmountPerPayment



```php
PreApproval::setMaxAmountPerPayment(  $maxAmountPerPayment )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxAmountPerPayment` | **** |  |




---

### setMaxTotalAmount



```php
PreApproval::setMaxTotalAmount(  $maxTotalAmount )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxTotalAmount` | **** |  |




---

### setMaxPaymentsPerPeriod



```php
PreApproval::setMaxPaymentsPerPeriod(  $maxPaymentsPerPeriod )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxPaymentsPerPeriod` | **** |  |




---

### setInitialDate



```php
PreApproval::setInitialDate(  $initialDate )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$initialDate` | **** |  |




---

### setFinalDate



```php
PreApproval::setFinalDate(  $finalDate )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$finalDate` | **** |  |




---

### setDayOfYear



```php
PreApproval::setDayOfYear(  $dayOfYear )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dayOfYear` | **** |  |




---

### setDayOfMonth



```php
PreApproval::setDayOfMonth(  $dayOfMonth )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dayOfMonth` | **** |  |




---

### setDayOfWeek



```php
PreApproval::setDayOfWeek(  $dayOfWeek )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dayOfWeek` | **** |  |




---

### setCancelURL



```php
PreApproval::setCancelURL(  $cancelURL )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cancelURL` | **** |  |




---

## PreApproval

Class PreApproval



* Full name: \PagSeguro\Resources\Responsibility\Notifications\PreApproval
* This class implements: \PagSeguro\Resources\Responsibility\Notifications\Handler


### successor



```php
PreApproval::successor(  $next ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$next` | **** |  |




---

### handler



```php
PreApproval::handler(  ): mixed
```







---

## PreApproval

Class Request



* Full name: \PagSeguro\Domains\Requests\PreApproval
* Parent class: \PagSeguro\Domains\Requests\PreApproval\Request


### setCurrency



```php
PreApproval::setCurrency(  $currency )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currency` | **** |  |




---

### getCurrency



```php
PreApproval::getCurrency(  ): mixed
```







---

### setExtraAmount



```php
PreApproval::setExtraAmount(  $extraAmount )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getExtraAmount



```php
PreApproval::getExtraAmount(  ): mixed
```







---

### getPreApproval



```php
PreApproval::getPreApproval(  ): \PagSeguro\Domains\PreApproval
```







---

### setPreApproval



```php
PreApproval::setPreApproval(  ): \PagSeguro\Domains\PreApproval
```







---

### setSender



```php
PreApproval::setSender(  ): \PagSeguro\Domains\Requests\Adapter\Sender
```







---

### getSender



```php
PreApproval::getSender(  ): \PagSeguro\Domains\PreApproval\Sender
```







---

### __construct



```php
PreApproval::__construct(  )
```







---

### setShipping



```php
PreApproval::setShipping(  )
```







---

### getShipping



```php
PreApproval::getShipping(  )
```







---

### setReference



```php
PreApproval::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### getReference



```php
PreApproval::getReference(  )
```







---

### getUrl



```php
PreApproval::getUrl(  )
```







---

### setUrl



```php
PreApproval::setUrl(  $url )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |




---

### register



```php
PreApproval::register(  $credentials ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## Query

Class Query



* Full name: \PagSeguro\Resources\Builder\DirectPreApproval\Query
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Query::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Query::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Query::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getQueryUrl



```php
Query::getQueryUrl(  ): string
```



* This method is **static**.



---

## Query

Class Query



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\Query
* Parent class: \PagSeguro\Domains\Requests\DirectPreApproval\QueryRequest


### __construct

QueryRequest constructor.

```php
Query::__construct( integer $page = 1, integer $maxPageResults = 50,  $initialDate,  $finalDate = null,  $status = null,  $preApprovalRequest = null,  $senderEmail = null, null $preApprovalCode = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **integer** |  |
| `$maxPageResults` | **integer** |  |
| `$initialDate` | **** |  |
| `$finalDate` | **** |  |
| `$status` | **** |  |
| `$preApprovalRequest` | **** |  |
| `$senderEmail` | **** |  |
| `$preApprovalCode` | **null** |  |




---

### object_to_array



```php
Query::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### register



```php
Query::register(  $credentials ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## QueryNotification

Class QueryNotification



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\QueryNotification
* Parent class: \PagSeguro\Domains\Requests\DirectPreApproval\QueryNotificationRequest


### __construct

QueryNotificationRequest constructor.

```php
QueryNotification::__construct( integer $page = 1, integer $maxPageResults = 50,  $interval, null $notificationCode = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **integer** |  |
| `$maxPageResults` | **integer** |  |
| `$interval` | **** |  |
| `$notificationCode` | **null** |  |




---

### object_to_array



```php
QueryNotification::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### register



```php
QueryNotification::register(  $credentials ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## QueryNotification

Class QueryNotification



* Full name: \PagSeguro\Resources\Builder\DirectPreApproval\QueryNotification
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
QueryNotification::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
QueryNotification::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
QueryNotification::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getQueryNotificationUrl



```php
QueryNotification::getQueryNotificationUrl(  ): string
```



* This method is **static**.



---

## QueryNotificationParser

Class QueryNotificationParser



* Full name: \PagSeguro\Parsers\DirectPreApproval\QueryNotificationParser
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
QueryNotificationParser::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getNotificationCode



```php
QueryNotificationParser::getNotificationCode( \PagSeguro\Domains\Requests\DirectPreApproval\QueryNotification $queryNotification ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$queryNotification` | **\PagSeguro\Domains\Requests\DirectPreApproval\QueryNotification** |  |




---

### getData



```php
QueryNotificationParser::getData( \PagSeguro\Domains\Requests\DirectPreApproval\QueryNotification $directPreApproval ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directPreApproval` | **\PagSeguro\Domains\Requests\DirectPreApproval\QueryNotification** |  |




---

### success



```php
QueryNotificationParser::success( \PagSeguro\Resources\Http $http ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## QueryNotificationRequest

Class QueryNotificationRequest



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\QueryNotificationRequest


### object_to_array



```php
QueryNotificationRequest::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### __construct

QueryNotificationRequest constructor.

```php
QueryNotificationRequest::__construct( integer $page = 1, integer $maxPageResults = 50,  $interval, null $notificationCode = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **integer** |  |
| `$maxPageResults` | **integer** |  |
| `$interval` | **** |  |
| `$notificationCode` | **null** |  |




---

## QueryNotificationService

Class QueryNotificationService



* Full name: \PagSeguro\Services\DirectPreApproval\QueryNotificationService


### create



```php
QueryNotificationService::create( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\DirectPreApproval\QueryNotification $queryNotification ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$queryNotification` | **\PagSeguro\Domains\Requests\DirectPreApproval\QueryNotification** |  |




---

## QueryParsers

Class QueryParsers



* Full name: \PagSeguro\Parsers\DirectPreApproval\QueryParsers
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
QueryParsers::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getData



```php
QueryParsers::getData( \PagSeguro\Domains\Requests\DirectPreApproval\Query $directPreApproval ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directPreApproval` | **\PagSeguro\Domains\Requests\DirectPreApproval\Query** |  |




---

### success



```php
QueryParsers::success( \PagSeguro\Resources\Http $http ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## QueryPaymentOrder

Class QueryPaymentOrder



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\QueryPaymentOrder
* Parent class: \PagSeguro\Domains\Requests\DirectPreApproval\QueryPaymentOrderRequest


### __construct

QueryPaymentOrderRequest constructor.

```php
QueryPaymentOrder::__construct(  $preApprovalCode,  $status,  $page = 1,  $maxPageResults = 50 )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |
| `$status` | **** |  |
| `$page` | **** |  |
| `$maxPageResults` | **** |  |




---

### object_to_array



```php
QueryPaymentOrder::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### register



```php
QueryPaymentOrder::register(  $credentials ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## QueryPaymentOrder

Class QueryPaymentOrder



* Full name: \PagSeguro\Resources\Builder\DirectPreApproval\QueryPaymentOrder
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
QueryPaymentOrder::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
QueryPaymentOrder::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
QueryPaymentOrder::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getQueryPaymentOrderUrl



```php
QueryPaymentOrder::getQueryPaymentOrderUrl(  ): string
```



* This method is **static**.



---

## QueryPaymentOrderParsers

Class QueryPaymentOrderParsers



* Full name: \PagSeguro\Parsers\DirectPreApproval\QueryPaymentOrderParsers
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
QueryPaymentOrderParsers::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getPreApprovalCode



```php
QueryPaymentOrderParsers::getPreApprovalCode( \PagSeguro\Domains\Requests\DirectPreApproval\QueryPaymentOrder $queryPaymentOrder ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$queryPaymentOrder` | **\PagSeguro\Domains\Requests\DirectPreApproval\QueryPaymentOrder** |  |




---

### getData



```php
QueryPaymentOrderParsers::getData( \PagSeguro\Domains\Requests\DirectPreApproval\QueryPaymentOrder $queryPaymentOrder ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$queryPaymentOrder` | **\PagSeguro\Domains\Requests\DirectPreApproval\QueryPaymentOrder** |  |




---

### success



```php
QueryPaymentOrderParsers::success( \PagSeguro\Resources\Http $http ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## QueryPaymentOrderRequest

Class QueryPaymentOrderRequest



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\QueryPaymentOrderRequest


### object_to_array



```php
QueryPaymentOrderRequest::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### __construct

QueryPaymentOrderRequest constructor.

```php
QueryPaymentOrderRequest::__construct(  $preApprovalCode,  $status,  $page = 1,  $maxPageResults = 50 )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |
| `$status` | **** |  |
| `$page` | **** |  |
| `$maxPageResults` | **** |  |




---

## QueryPaymentOrderService

Class QueryPaymentOrderService



* Full name: \PagSeguro\Services\DirectPreApproval\QueryPaymentOrderService


### create



```php
QueryPaymentOrderService::create( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\DirectPreApproval\QueryPaymentOrder $queryPaymentOrder ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$queryPaymentOrder` | **\PagSeguro\Domains\Requests\DirectPreApproval\QueryPaymentOrder** |  |




---

## QueryRequest

Class QueryRequest



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\QueryRequest


### object_to_array



```php
QueryRequest::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### __construct

QueryRequest constructor.

```php
QueryRequest::__construct( integer $page = 1, integer $maxPageResults = 50,  $initialDate,  $finalDate = null,  $status = null,  $preApprovalRequest = null,  $senderEmail = null, null $preApprovalCode = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **integer** |  |
| `$maxPageResults` | **integer** |  |
| `$initialDate` | **** |  |
| `$finalDate` | **** |  |
| `$status` | **** |  |
| `$preApprovalRequest` | **** |  |
| `$senderEmail` | **** |  |
| `$preApprovalCode` | **null** |  |




---

## QueryService

Class QueryService



* Full name: \PagSeguro\Services\DirectPreApproval\QueryService


### create



```php
QueryService::create( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\DirectPreApproval\Query $directPreApproval ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$directPreApproval` | **\PagSeguro\Domains\Requests\DirectPreApproval\Query** |  |




---

## Receiver

Class Receiver



* Full name: \PagSeguro\Domains\DirectPreApproval\Receiver


### withParameters



```php
Receiver::withParameters(  $email ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **** |  |




---

## Reference

Class Payment



* Full name: \PagSeguro\Services\Transactions\Search\Reference


### search



```php
Reference::search( \PagSeguro\Domains\Account\Credentials $credentials,  $reference, array $options ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$reference` | **** |  |
| `$options` | **array** |  |




---

## Reference

Class Payment



* Full name: \PagSeguro\Services\Application\Search\Reference


### search



```php
Reference::search( \PagSeguro\Domains\Account\Credentials $credentials,  $reference,  $options ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$reference` | **** |  |
| `$options` | **** |  |




---

## Refund

Class Payment



* Full name: \PagSeguro\Services\Transactions\Refund


### create



```php
Refund::create( \PagSeguro\Domains\Account\Credentials $credentials,  $code,  $value = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$code` | **** |  |
| `$value` | **** |  |




---

## Refund

Class Payment



* Full name: \PagSeguro\Resources\Builder\Refund
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Refund::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Refund::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Refund::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getRequestUrl



```php
Refund::getRequestUrl(  ): string
```



* This method is **static**.



---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\PreApproval\Search\Date\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\PreApproval\Search\Date\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\Checkout\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### getData



```php
Request::getData( \PagSeguro\Domains\Requests\Payment $payment ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payment` | **\PagSeguro\Domains\Requests\Payment** |  |




---

### getKeyByDescription



```php
Request::getKeyByDescription(  $itemDescription )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$itemDescription` | **** |  |




---

### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Checkout\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Request



* Full name: \PagSeguro\Resources\Responsibility\Http\Methods\Request
* This class implements: \PagSeguro\Resources\Responsibility\Handler


### successor



```php
Request::successor(  $successor ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$successor` | **** |  |




---

### handler



```php
Request::handler( \PagSeguro\Resources\Http $http,  $class ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |
| `$class` | **** |  |




---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\PreApproval\Notification\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\PreApproval\Search\Code\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Request class



* Full name: \PagSeguro\Parsers\PreApproval\Charge\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### getData



```php
Request::getData(  $request ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **** |  |




---

### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\PreApproval\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Request



* Full name: \PagSeguro\Domains\Requests\Application\Authorization\Request
* This class implements: \PagSeguro\Domains\Requests\Requests


### getUrl



```php
Request::getUrl(  )
```







---

### setUrl



```php
Request::setUrl(  $url )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |




---

### addPermission



```php
Request::addPermission(  $permission ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permission` | **** |  |




---

### setPermissions



```php
Request::setPermissions( array $permissions )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **array** |  |




---

### getPermissions



```php
Request::getPermissions(  ): mixed
```







---

### setReference



```php
Request::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### getReference



```php
Request::getReference(  )
```







---

### getAccount



```php
Request::getAccount(  ): \PagSeguro\Domains\Authorization\Account
```







---

### setAccount



```php
Request::setAccount( \PagSeguro\Domains\Authorization\Account $account )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$account` | **\PagSeguro\Domains\Authorization\Account** |  |




---

## Request

Request class



* Full name: \PagSeguro\Parsers\PreApproval\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### getData



```php
Request::getData( \PagSeguro\Domains\Requests\Requests $request ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\PagSeguro\Domains\Requests\Requests** |  |




---

### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\PreApproval\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\PreApproval\Search\Code\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getData



```php
Request::getData(  $code ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\PreApproval\Search\Code\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Request



* Full name: \PagSeguro\Domains\Requests\DirectPayment\OnlineDebit\Request
* This class implements: \PagSeguro\Domains\Requests\Requests


### setCurrency



```php
Request::setCurrency(  $currency )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currency` | **** |  |




---

### getCurrency



```php
Request::getCurrency(  ): mixed
```







---

### setExtraAmount



```php
Request::setExtraAmount(  $extraAmount )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getExtraAmount



```php
Request::getExtraAmount(  ): mixed
```







---

### addItems



```php
Request::addItems(  )
```







---

### setItems



```php
Request::setItems(  $items )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




---

### getItems



```php
Request::getItems(  )
```







---

### itemLenght



```php
Request::itemLenght(  )
```







---

### getMode



```php
Request::getMode(  ): mixed
```







---

### setMode



```php
Request::setMode(  $mode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **** |  |




---

### getUrl



```php
Request::getUrl(  )
```







---

### setUrl



```php
Request::setUrl(  $url )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |




---

### getReceiverEmail



```php
Request::getReceiverEmail(  )
```







---

### setReceiverEmail



```php
Request::setReceiverEmail(  $receiverEmail )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$receiverEmail` | **** |  |




---

### setSender



```php
Request::setSender(  )
```







---

### getSender



```php
Request::getSender(  )
```







---

### __construct



```php
Request::__construct(  )
```







---

### setShipping



```php
Request::setShipping(  )
```







---

### getShipping



```php
Request::getShipping(  )
```







---

### setReference



```php
Request::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### getReference



```php
Request::getReference(  )
```







---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\Authorization\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### getData



```php
Request::getData( \PagSeguro\Domains\Requests\Authorization $authorization ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$authorization` | **\PagSeguro\Domains\Requests\Authorization** |  |




---

### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Authorization\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Request



* Full name: \PagSeguro\Domains\Requests\PreApproval\Request
* This class implements: \PagSeguro\Domains\Requests\Requests


### setCurrency



```php
Request::setCurrency(  $currency )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currency` | **** |  |




---

### getCurrency



```php
Request::getCurrency(  ): mixed
```







---

### setExtraAmount



```php
Request::setExtraAmount(  $extraAmount )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getExtraAmount



```php
Request::getExtraAmount(  ): mixed
```







---

### getPreApproval



```php
Request::getPreApproval(  ): \PagSeguro\Domains\PreApproval
```







---

### setPreApproval



```php
Request::setPreApproval(  ): \PagSeguro\Domains\PreApproval
```







---

### setSender



```php
Request::setSender(  ): \PagSeguro\Domains\Requests\Adapter\Sender
```







---

### getSender



```php
Request::getSender(  ): \PagSeguro\Domains\PreApproval\Sender
```







---

### __construct



```php
Request::__construct(  )
```







---

### setShipping



```php
Request::setShipping(  )
```







---

### getShipping



```php
Request::getShipping(  )
```







---

### setReference



```php
Request::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### getReference



```php
Request::getReference(  )
```







---

### getUrl



```php
Request::getUrl(  )
```







---

### setUrl



```php
Request::setUrl(  $url )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |




---

## Request

Class Request



* Full name: \PagSeguro\Domains\Requests\PreApproval\Charge\Request
* This class implements: \PagSeguro\Domains\Requests\Requests


### setReference



```php
Request::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### getReference



```php
Request::getReference(  )
```







---

### addItems



```php
Request::addItems(  )
```







---

### setItems



```php
Request::setItems(  $items )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




---

### getItems



```php
Request::getItems(  )
```







---

### itemLenght



```php
Request::itemLenght(  )
```







---

## Request

Class Request



* Full name: \PagSeguro\Domains\Requests\Checkout\Payment\Request
* This class implements: \PagSeguro\Domains\Requests\Requests


### accept



```php
Request::accept(  ): \PagSeguro\Resources\Factory\Request\Accepted
```







---

### exclude



```php
Request::exclude(  ): \PagSeguro\Resources\Factory\Request\Accepted
```







---

### getAttributeMap



```php
Request::getAttributeMap(  )
```







---

### setCurrency



```php
Request::setCurrency(  $currency )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currency` | **** |  |




---

### getCurrency



```php
Request::getCurrency(  ): mixed
```







---

### setExtraAmount



```php
Request::setExtraAmount(  $extraAmount )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getExtraAmount



```php
Request::getExtraAmount(  ): mixed
```







---

### addItems



```php
Request::addItems(  )
```







---

### setItems



```php
Request::setItems(  $items )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




---

### getItems



```php
Request::getItems(  )
```







---

### itemLenght



```php
Request::itemLenght(  )
```







---

### addMetadata



```php
Request::addMetadata(  )
```







---

### setMetadata



```php
Request::setMetadata(  $metadata )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **** |  |




---

### getMetadata



```php
Request::getMetadata(  )
```







---

### metadataLenght



```php
Request::metadataLenght(  )
```







---

### getUrl



```php
Request::getUrl(  )
```







---

### setUrl



```php
Request::setUrl(  $url )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |




---

### addParameter



```php
Request::addParameter(  )
```







---

### setParameter



```php
Request::setParameter(  $parameter )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parameter` | **** |  |




---

### getParameter



```php
Request::getParameter(  )
```







---

### parameterLenght



```php
Request::parameterLenght(  )
```







---

### addPaymentMethod



```php
Request::addPaymentMethod(  )
```







---

### setPaymentMethod



```php
Request::setPaymentMethod(  $paymentMethod )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paymentMethod` | **** |  |




---

### getPaymentMethod



```php
Request::getPaymentMethod(  )
```







---

### paymentMethodLenght



```php
Request::paymentMethodLenght(  )
```







---

### getPreApproval



```php
Request::getPreApproval(  ): \PagSeguro\Domains\PreApproval
```







---

### setPreApproval



```php
Request::setPreApproval(  ): \PagSeguro\Domains\PreApproval
```







---

### setSender



```php
Request::setSender(  ): \PagSeguro\Domains\Requests\Adapter\Sender
```







---

### getSender



```php
Request::getSender(  ): \PagSeguro\Domains\Sender
```







---

### __construct



```php
Request::__construct(  )
```







---

### setShipping



```php
Request::setShipping(  )
```







---

### getShipping



```php
Request::getShipping(  )
```







---

### setReference



```php
Request::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### getReference



```php
Request::getReference(  )
```







---

### getReceiverEmail



```php
Request::getReceiverEmail(  )
```







---

### setReceiverEmail



```php
Request::setReceiverEmail(  $receiverEmail )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$receiverEmail` | **** |  |




---

## Request

Class Request



* Full name: \PagSeguro\Domains\Requests\DirectPayment\CreditCard\Request
* This class implements: \PagSeguro\Domains\Requests\Requests


### setBilling



```php
Request::setBilling(  ): \PagSeguro\Domains\Requests\Adapter\DirectPayment\Billing
```







---

### getBilling



```php
Request::getBilling(  ): \PagSeguro\Domains\Requests\DirectPayment\CreditCard\billing
```







---

### setCurrency



```php
Request::setCurrency(  $currency )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currency` | **** |  |




---

### getCurrency



```php
Request::getCurrency(  ): mixed
```







---

### setExtraAmount



```php
Request::setExtraAmount(  $extraAmount )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getExtraAmount



```php
Request::getExtraAmount(  ): mixed
```







---

### getInstallment



```php
Request::getInstallment(  )
```







---

### setInstallment



```php
Request::setInstallment(  )
```







---

### setHolder



```php
Request::setHolder(  ): \PagSeguro\Domains\Requests\Adapter\DirectPayment\Holder
```







---

### getHolder



```php
Request::getHolder(  ): \PagSeguro\Domains\DirectPayment\CreditCard\Holder
```







---

### addItems



```php
Request::addItems(  )
```







---

### setItems



```php
Request::setItems(  $items )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




---

### getItems



```php
Request::getItems(  )
```







---

### itemLenght



```php
Request::itemLenght(  )
```







---

### getMode



```php
Request::getMode(  ): mixed
```







---

### setMode



```php
Request::setMode(  $mode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **** |  |




---

### getUrl



```php
Request::getUrl(  )
```







---

### setUrl



```php
Request::setUrl(  $url )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |




---

### getReceiverEmail



```php
Request::getReceiverEmail(  )
```







---

### setReceiverEmail



```php
Request::setReceiverEmail(  $receiverEmail )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$receiverEmail` | **** |  |




---

### setSender



```php
Request::setSender(  )
```







---

### getSender



```php
Request::getSender(  )
```







---

### __construct



```php
Request::__construct(  )
```







---

### setShipping



```php
Request::setShipping(  )
```







---

### getShipping



```php
Request::getShipping(  )
```







---

### setReference



```php
Request::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### getReference



```php
Request::getReference(  )
```







---

### getToken



```php
Request::getToken(  )
```







---

### setToken



```php
Request::setToken(  $token )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **** |  |




---

## Request

Class Request



* Full name: \PagSeguro\Domains\Requests\DirectPayment\Boleto\Request
* This class implements: \PagSeguro\Domains\Requests\Requests


### setCurrency



```php
Request::setCurrency(  $currency )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currency` | **** |  |




---

### getCurrency



```php
Request::getCurrency(  ): mixed
```







---

### setExtraAmount



```php
Request::setExtraAmount(  $extraAmount )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getExtraAmount



```php
Request::getExtraAmount(  ): mixed
```







---

### addItems



```php
Request::addItems(  )
```







---

### setItems



```php
Request::setItems(  $items )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




---

### getItems



```php
Request::getItems(  )
```







---

### itemLenght



```php
Request::itemLenght(  )
```







---

### getMode



```php
Request::getMode(  ): mixed
```







---

### setMode



```php
Request::setMode(  $mode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **** |  |




---

### getUrl



```php
Request::getUrl(  )
```







---

### setUrl



```php
Request::setUrl(  $url )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **** |  |




---

### getReceiverEmail



```php
Request::getReceiverEmail(  )
```







---

### setReceiverEmail



```php
Request::setReceiverEmail(  $receiverEmail )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$receiverEmail` | **** |  |




---

### setSender



```php
Request::setSender(  )
```







---

### getSender



```php
Request::getSender(  )
```







---

### __construct



```php
Request::__construct(  )
```







---

### setShipping



```php
Request::setShipping(  )
```







---

### getShipping



```php
Request::getShipping(  )
```







---

### setReference



```php
Request::setReference(  $reference )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **** |  |




---

### getReference



```php
Request::getReference(  )
```







---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\Transaction\Refund\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getData



```php
Request::getData(  $code,  $value ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **** |  |
| `$value` | **** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Transaction\Refund\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\Authorization\Notification\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Authorization\Search\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Request class



* Full name: \PagSeguro\Parsers\Session\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Session\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\Authorization\Search\Code\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getData



```php
Request::getData(  $code ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Authorization\Search\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\Transaction\Search\Date\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Transaction\Search\Date\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Installment



* Full name: \PagSeguro\Parsers\Installment\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Installment\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\DirectPayment\CreditCard\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### getData



```php
Request::getData( \PagSeguro\Domains\Requests\DirectPayment\CreditCard $creditCard ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$creditCard` | **\PagSeguro\Domains\Requests\DirectPayment\CreditCard** |  |




---

### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Transaction\CreditCard\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\Transaction\Search\Code\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getData



```php
Request::getData(  $code ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Transaction\Search\Code\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\Authorization\Search\Date\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Authorization\Search\Date\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\Transaction\Notification\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Transaction\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\Transaction\Search\Abandoned\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Transaction\Search\Abandoned\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\Cancel\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getData



```php
Request::getData(  $code ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Cancel\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\DirectPayment\OnlineDebit\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### getData



```php
Request::getData( \PagSeguro\Domains\Requests\DirectPayment\OnlineDebit $onlineDebit ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$onlineDebit` | **\PagSeguro\Domains\Requests\DirectPayment\OnlineDebit** |  |




---

### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Transaction\OnlineDebit\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Request

Class Payment



* Full name: \PagSeguro\Parsers\DirectPayment\Boleto\Request
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### getData



```php
Request::getData( \PagSeguro\Domains\Requests\DirectPayment\Boleto $boleto ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$boleto` | **\PagSeguro\Domains\Requests\DirectPayment\Boleto** |  |




---

### error



```php
Request::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### success



```php
Request::success( \PagSeguro\Resources\Http $http ): \PagSeguro\Parsers\Transaction\Boleto\Response
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\Authorization\Response


### getCode



```php
Response::getCode(  ): string
```







---

### setCode



```php
Response::setCode( string $code ): \PagSeguro\Parsers\Authorization\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **string** |  |




---

### getDate



```php
Response::getDate(  ): \DateTime
```







---

### setDate



```php
Response::setDate( \DateTime $date ): \PagSeguro\Parsers\Authorization\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **\DateTime** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\Transaction\OnlineDebit\Response
* Parent class: \PagSeguro\Parsers\Transaction\Response


### getApplication



```php
Response::getApplication(  ): mixed
```







---

### setApplication



```php
Response::setApplication(  $applications ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$applications` | **** |  |




---

### getCreditorFees



```php
Response::getCreditorFees(  ): mixed
```







---

### setCreditorFees



```php
Response::setCreditorFees(  $creditorFees ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$creditorFees` | **** |  |




---

### getPaymentLink



```php
Response::getPaymentLink(  )
```







---

### setPaymentLink



```php
Response::setPaymentLink(  $paymentLink )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paymentLink` | **** |  |




---

### getRecoveryCode



```php
Response::getRecoveryCode(  )
```







---

### setRecoveryCode



```php
Response::setRecoveryCode(  $recoveryCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$recoveryCode` | **** |  |




---

### getCancelationSource



```php
Response::getCancelationSource(  )
```







---

### setCancelationSource



```php
Response::setCancelationSource(  $cancelationSource )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cancelationSource` | **** |  |




---

### getInstallmentCount



```php
Response::getInstallmentCount(  ): mixed
```







---

### setInstallmentCount



```php
Response::setInstallmentCount( mixed $installmentCount ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$installmentCount` | **mixed** |  |




---

### getCode



```php
Response::getCode(  ): mixed
```







---

### setCode



```php
Response::setCode( mixed $code ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




---

### getDate



```php
Response::getDate(  ): mixed
```







---

### setDate



```php
Response::setDate( mixed $date ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **mixed** |  |




---

### getLastEventDate



```php
Response::getLastEventDate(  ): mixed
```







---

### setLastEventDate



```php
Response::setLastEventDate( mixed $lastEventDate ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lastEventDate` | **mixed** |  |




---

### getReference



```php
Response::getReference(  ): mixed
```







---

### setReference



```php
Response::setReference( mixed $reference ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **mixed** |  |




---

### getStatus



```php
Response::getStatus(  ): mixed
```







---

### setStatus



```php
Response::setStatus( mixed $status ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **mixed** |  |




---

### getType



```php
Response::getType(  ): mixed
```







---

### setType



```php
Response::setType( mixed $type ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




---

### getDiscountAmount



```php
Response::getDiscountAmount(  ): mixed
```







---

### setDiscountAmount



```php
Response::setDiscountAmount(  $discountAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$discountAmount` | **** |  |




---

### getEscrowEndDate



```php
Response::getEscrowEndDate(  ): mixed
```







---

### setEscrowEndDate



```php
Response::setEscrowEndDate(  $escrowEndDate ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$escrowEndDate` | **** |  |




---

### getExtraAmount



```php
Response::getExtraAmount(  ): mixed
```







---

### setExtraAmount



```php
Response::setExtraAmount(  $extraAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getFeeAmount



```php
Response::getFeeAmount(  ): mixed
```







---

### setFeeAmount



```php
Response::setFeeAmount(  $feeAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feeAmount` | **** |  |




---

### getGrossAmount



```php
Response::getGrossAmount(  ): mixed
```







---

### setGrossAmount



```php
Response::setGrossAmount(  $grossAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$grossAmount` | **** |  |




---

### getNetAmount



```php
Response::getNetAmount(  ): mixed
```







---

### setNetAmount



```php
Response::setNetAmount(  $netAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$netAmount` | **** |  |




---

### getItemCount



```php
Response::getItemCount(  ): mixed
```







---

### setItemCount



```php
Response::setItemCount(  $itemCount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$itemCount` | **** |  |




---

### getItems



```php
Response::getItems(  ): mixed
```







---

### setItems



```php
Response::setItems(  $items ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




---

### addItems



```php
Response::addItems(  ): object
```







---

### getPaymentMethod



```php
Response::getPaymentMethod(  ): mixed
```







---

### setPaymentMethod



```php
Response::setPaymentMethod(  $paymentMethod ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paymentMethod` | **** |  |




---

### getSender



```php
Response::getSender(  ): mixed
```







---

### setSender



```php
Response::setSender(  $sender ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sender` | **** |  |




---

### getShipping



```php
Response::getShipping(  ): mixed
```







---

### setShipping



```php
Response::setShipping( mixed $shipping ): \PagSeguro\Parsers\Response\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shipping` | **mixed** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\Cancel\Response


### getResult



```php
Response::getResult(  ): mixed
```







---

### setResult



```php
Response::setResult( mixed $result ): \PagSeguro\Parsers\Cancel\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **mixed** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\Transaction\CreditCard\Response
* Parent class: \PagSeguro\Parsers\Transaction\Response


### getApplication



```php
Response::getApplication(  ): mixed
```







---

### setApplication



```php
Response::setApplication(  $applications ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$applications` | **** |  |




---

### getCreditorFees



```php
Response::getCreditorFees(  ): mixed
```







---

### setCreditorFees



```php
Response::setCreditorFees(  $creditorFees ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$creditorFees` | **** |  |




---

### getGatewaySystem



```php
Response::getGatewaySystem(  ): \PagSeguro\Domains\Responses\GatewaySystem
```







---

### setGatewaySystem



```php
Response::setGatewaySystem( \PagSeguro\Parsers\Response\xmlObject $gatewaySystem ): \Pagseguro\Parsers\Response\GatewaySystem
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$gatewaySystem` | **\PagSeguro\Parsers\Response\xmlObject** |  |




---

### getCancelationSource



```php
Response::getCancelationSource(  )
```







---

### setCancelationSource



```php
Response::setCancelationSource(  $cancelationSource )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cancelationSource` | **** |  |




---

### getInstallmentCount



```php
Response::getInstallmentCount(  ): mixed
```







---

### setInstallmentCount



```php
Response::setInstallmentCount( mixed $installmentCount ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$installmentCount` | **mixed** |  |




---

### getCode



```php
Response::getCode(  ): mixed
```







---

### setCode



```php
Response::setCode( mixed $code ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




---

### getDate



```php
Response::getDate(  ): mixed
```







---

### setDate



```php
Response::setDate( mixed $date ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **mixed** |  |




---

### getLastEventDate



```php
Response::getLastEventDate(  ): mixed
```







---

### setLastEventDate



```php
Response::setLastEventDate( mixed $lastEventDate ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lastEventDate` | **mixed** |  |




---

### getReference



```php
Response::getReference(  ): mixed
```







---

### setReference



```php
Response::setReference( mixed $reference ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **mixed** |  |




---

### getStatus



```php
Response::getStatus(  ): mixed
```







---

### setStatus



```php
Response::setStatus( mixed $status ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **mixed** |  |




---

### getType



```php
Response::getType(  ): mixed
```







---

### setType



```php
Response::setType( mixed $type ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




---

### getDiscountAmount



```php
Response::getDiscountAmount(  ): mixed
```







---

### setDiscountAmount



```php
Response::setDiscountAmount(  $discountAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$discountAmount` | **** |  |




---

### getEscrowEndDate



```php
Response::getEscrowEndDate(  ): mixed
```







---

### setEscrowEndDate



```php
Response::setEscrowEndDate(  $escrowEndDate ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$escrowEndDate` | **** |  |




---

### getExtraAmount



```php
Response::getExtraAmount(  ): mixed
```







---

### setExtraAmount



```php
Response::setExtraAmount(  $extraAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getFeeAmount



```php
Response::getFeeAmount(  ): mixed
```







---

### setFeeAmount



```php
Response::setFeeAmount(  $feeAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feeAmount` | **** |  |




---

### getGrossAmount



```php
Response::getGrossAmount(  ): mixed
```







---

### setGrossAmount



```php
Response::setGrossAmount(  $grossAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$grossAmount` | **** |  |




---

### getNetAmount



```php
Response::getNetAmount(  ): mixed
```







---

### setNetAmount



```php
Response::setNetAmount(  $netAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$netAmount` | **** |  |




---

### getItemCount



```php
Response::getItemCount(  ): mixed
```







---

### setItemCount



```php
Response::setItemCount(  $itemCount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$itemCount` | **** |  |




---

### getItems



```php
Response::getItems(  ): mixed
```







---

### setItems



```php
Response::setItems(  $items ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




---

### addItems



```php
Response::addItems(  ): object
```







---

### getPaymentMethod



```php
Response::getPaymentMethod(  ): mixed
```







---

### setPaymentMethod



```php
Response::setPaymentMethod(  $paymentMethod ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paymentMethod` | **** |  |




---

### getSender



```php
Response::getSender(  ): mixed
```







---

### setSender



```php
Response::setSender(  $sender ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sender` | **** |  |




---

### getShipping



```php
Response::getShipping(  ): mixed
```







---

### setShipping



```php
Response::setShipping( mixed $shipping ): \PagSeguro\Parsers\Response\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shipping` | **mixed** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\Transaction\Refund\Response


### getResult



```php
Response::getResult(  ): mixed
```







---

### setResult



```php
Response::setResult( mixed $result ): \PagSeguro\Parsers\Transaction\Refund\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **mixed** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\PreApproval\Response


### getCode



```php
Response::getCode(  ): string
```







---

### setCode



```php
Response::setCode( string $code ): \PagSeguro\Parsers\PreApproval\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **string** |  |




---

### getDate



```php
Response::getDate(  ): \DateTime
```







---

### setDate



```php
Response::setDate( \DateTime $date ): \PagSeguro\Parsers\PreApproval\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **\DateTime** |  |




---

## Response

Class Authorization



* Full name: \PagSeguro\Parsers\Authorization\Search\Response


### getAccount



```php
Response::getAccount(  ): mixed
```







---

### setAccount



```php
Response::setAccount( mixed $account ): \PagSeguro\Parsers\Authorization\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$account` | **mixed** |  |




---

### getCode



```php
Response::getCode(  ): mixed
```







---

### setCode



```php
Response::setCode( mixed $code ): \PagSeguro\Parsers\Authorization\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




---

### getCreationDate



```php
Response::getCreationDate(  ): mixed
```







---

### setCreationDate



```php
Response::setCreationDate( mixed $creationDate ): \PagSeguro\Parsers\Authorization\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$creationDate` | **mixed** |  |




---

### getPermissions



```php
Response::getPermissions(  ): mixed
```







---

### setPermissions



```php
Response::setPermissions( mixed $permissions ): \PagSeguro\Parsers\Authorization\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **mixed** |  |




---

### getReference



```php
Response::getReference(  ): mixed
```







---

### setReference



```php
Response::setReference( mixed $reference ): \PagSeguro\Parsers\Authorization\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **mixed** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\Authorization\Search\Date\Response


### getCurrentPage



```php
Response::getCurrentPage(  ): mixed
```







---

### setCurrentPage



```php
Response::setCurrentPage( mixed $currentPage ): \PagSeguro\Parsers\Authorization\Search\Date\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currentPage` | **mixed** |  |




---

### getDate



```php
Response::getDate(  ): mixed
```







---

### setDate



```php
Response::setDate( mixed $date ): \PagSeguro\Parsers\Authorization\Search\Date\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **mixed** |  |




---

### getResultsInThisPage



```php
Response::getResultsInThisPage(  ): mixed
```







---

### setResultsInThisPage



```php
Response::setResultsInThisPage( mixed $resultsInThisPage ): \PagSeguro\Parsers\Authorization\Search\Date\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resultsInThisPage` | **mixed** |  |




---

### getTotalPages



```php
Response::getTotalPages(  ): mixed
```







---

### setTotalPages



```php
Response::setTotalPages( mixed $totalPages ): \PagSeguro\Parsers\Authorization\Search\Date\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$totalPages` | **mixed** |  |




---

### getAuthorizations



```php
Response::getAuthorizations(  ): mixed
```







---

### setAuthorizations



```php
Response::setAuthorizations(  $authorizations ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$authorizations` | **** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\PreApproval\Search\Code\Response
* Parent class: \PagSeguro\Parsers\PreApproval\Search\Response


### getCharge



```php
Response::getCharge(  ): mixed
```







---

### setCharge



```php
Response::setCharge( mixed $charge ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$charge` | **mixed** |  |




---

### getCode



```php
Response::getCode(  ): mixed
```







---

### setCode



```php
Response::setCode( mixed $code ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




---

### getDate



```php
Response::getDate(  ): mixed
```







---

### setDate



```php
Response::setDate( mixed $date ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **mixed** |  |




---

### getLastEventDate



```php
Response::getLastEventDate(  ): mixed
```







---

### setLastEventDate



```php
Response::setLastEventDate( mixed $lastEventDate ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lastEventDate` | **mixed** |  |




---

### getName



```php
Response::getName(  ): mixed
```







---

### setName



```php
Response::setName( mixed $name ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




---

### getReference



```php
Response::getReference(  ): mixed
```







---

### setReference



```php
Response::setReference( mixed $reference ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **mixed** |  |




---

### getStatus



```php
Response::getStatus(  ): mixed
```







---

### setStatus



```php
Response::setStatus( mixed $status ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **mixed** |  |




---

### getTracker



```php
Response::getTracker(  ): mixed
```







---

### setTracker



```php
Response::setTracker( mixed $tracker ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tracker` | **mixed** |  |




---

### getSender



```php
Response::getSender(  ): mixed
```







---

### setSender



```php
Response::setSender( mixed $sender ): \PagSeguro\Parsers\PreApproval\Search\Code\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sender` | **mixed** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\Transaction\Search\Date\Response


### getCurrentPage



```php
Response::getCurrentPage(  ): mixed
```







---

### setCurrentPage



```php
Response::setCurrentPage( mixed $currentPage ): \PagSeguro\Parsers\Transaction\Search\Date\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currentPage` | **mixed** |  |




---

### getDate



```php
Response::getDate(  ): mixed
```







---

### setDate



```php
Response::setDate( mixed $date ): \PagSeguro\Parsers\Transaction\Search\Date\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **mixed** |  |




---

### getResultsInThisPage



```php
Response::getResultsInThisPage(  ): mixed
```







---

### setResultsInThisPage



```php
Response::setResultsInThisPage( mixed $resultsInThisPage ): \PagSeguro\Parsers\Transaction\Search\Date\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resultsInThisPage` | **mixed** |  |




---

### getTotalPages



```php
Response::getTotalPages(  ): mixed
```







---

### setTotalPages



```php
Response::setTotalPages( mixed $totalPages ): \PagSeguro\Parsers\Transaction\Search\Date\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$totalPages` | **mixed** |  |




---

### getTransactions



```php
Response::getTransactions(  ): mixed
```







---

### setTransactions



```php
Response::setTransactions( mixed $transactions ): \PagSeguro\Parsers\Transaction\Search\Date\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transactions` | **mixed** |  |




---

### addTransactions



```php
Response::addTransactions(  $transaction )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transaction` | **** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\PreApproval\Search\Response


### getCharge



```php
Response::getCharge(  ): mixed
```







---

### setCharge



```php
Response::setCharge( mixed $charge ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$charge` | **mixed** |  |




---

### getCode



```php
Response::getCode(  ): mixed
```







---

### setCode



```php
Response::setCode( mixed $code ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




---

### getDate



```php
Response::getDate(  ): mixed
```







---

### setDate



```php
Response::setDate( mixed $date ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **mixed** |  |




---

### getLastEventDate



```php
Response::getLastEventDate(  ): mixed
```







---

### setLastEventDate



```php
Response::setLastEventDate( mixed $lastEventDate ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lastEventDate` | **mixed** |  |




---

### getName



```php
Response::getName(  ): mixed
```







---

### setName



```php
Response::setName( mixed $name ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




---

### getReference



```php
Response::getReference(  ): mixed
```







---

### setReference



```php
Response::setReference( mixed $reference ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **mixed** |  |




---

### getStatus



```php
Response::getStatus(  ): mixed
```







---

### setStatus



```php
Response::setStatus( mixed $status ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **mixed** |  |




---

### getTracker



```php
Response::getTracker(  ): mixed
```







---

### setTracker



```php
Response::setTracker( mixed $tracker ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tracker` | **mixed** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\Transaction\Search\Code\Response
* Parent class: \PagSeguro\Parsers\Transaction\Response


### getPaymentLink



```php
Response::getPaymentLink(  )
```







---

### setPaymentLink



```php
Response::setPaymentLink(  $paymentLink )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paymentLink` | **** |  |




---

### getCancelationSource



```php
Response::getCancelationSource(  )
```







---

### setCancelationSource



```php
Response::setCancelationSource(  $cancelationSource )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cancelationSource` | **** |  |




---

### getInstallmentCount



```php
Response::getInstallmentCount(  ): mixed
```







---

### setInstallmentCount



```php
Response::setInstallmentCount( mixed $installmentCount ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$installmentCount` | **mixed** |  |




---

### getCode



```php
Response::getCode(  ): mixed
```







---

### setCode



```php
Response::setCode( mixed $code ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




---

### getDate



```php
Response::getDate(  ): mixed
```







---

### setDate



```php
Response::setDate( mixed $date ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **mixed** |  |




---

### getLastEventDate



```php
Response::getLastEventDate(  ): mixed
```







---

### setLastEventDate



```php
Response::setLastEventDate( mixed $lastEventDate ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lastEventDate` | **mixed** |  |




---

### getReference



```php
Response::getReference(  ): mixed
```







---

### setReference



```php
Response::setReference( mixed $reference ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **mixed** |  |




---

### getStatus



```php
Response::getStatus(  ): mixed
```







---

### setStatus



```php
Response::setStatus( mixed $status ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **mixed** |  |




---

### getType



```php
Response::getType(  ): mixed
```







---

### setType



```php
Response::setType( mixed $type ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




---

### getDiscountAmount



```php
Response::getDiscountAmount(  ): mixed
```







---

### setDiscountAmount



```php
Response::setDiscountAmount(  $discountAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$discountAmount` | **** |  |




---

### getEscrowEndDate



```php
Response::getEscrowEndDate(  ): mixed
```







---

### setEscrowEndDate



```php
Response::setEscrowEndDate(  $escrowEndDate ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$escrowEndDate` | **** |  |




---

### getExtraAmount



```php
Response::getExtraAmount(  ): mixed
```







---

### setExtraAmount



```php
Response::setExtraAmount(  $extraAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getFeeAmount



```php
Response::getFeeAmount(  ): mixed
```







---

### setFeeAmount



```php
Response::setFeeAmount(  $feeAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feeAmount` | **** |  |




---

### getGrossAmount



```php
Response::getGrossAmount(  ): mixed
```







---

### setGrossAmount



```php
Response::setGrossAmount(  $grossAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$grossAmount` | **** |  |




---

### getNetAmount



```php
Response::getNetAmount(  ): mixed
```







---

### setNetAmount



```php
Response::setNetAmount(  $netAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$netAmount` | **** |  |




---

### getCreditorFees



```php
Response::getCreditorFees(  ): mixed
```







---

### setCreditorFees



```php
Response::setCreditorFees(  $creditorFees ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$creditorFees` | **** |  |




---

### getItemCount



```php
Response::getItemCount(  ): mixed
```







---

### setItemCount



```php
Response::setItemCount(  $itemCount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$itemCount` | **** |  |




---

### getItems



```php
Response::getItems(  ): mixed
```







---

### setItems



```php
Response::setItems(  $items ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




---

### addItems



```php
Response::addItems(  ): object
```







---

### getPaymentMethod



```php
Response::getPaymentMethod(  ): mixed
```







---

### setPaymentMethod



```php
Response::setPaymentMethod(  $paymentMethod ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paymentMethod` | **** |  |




---

### getSender



```php
Response::getSender(  ): mixed
```







---

### setSender



```php
Response::setSender(  $sender ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sender` | **** |  |




---

### getShipping



```php
Response::getShipping(  ): mixed
```







---

### setShipping



```php
Response::setShipping( mixed $shipping ): \PagSeguro\Parsers\Response\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shipping` | **mixed** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\Session\Response


### getResult



```php
Response::getResult(  ): mixed
```







---

### setResult



```php
Response::setResult( mixed $result ): \PagSeguro\Parsers\Session\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **mixed** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\Transaction\Search\Abandoned\Response


### getCurrentPage



```php
Response::getCurrentPage(  ): mixed
```







---

### setCurrentPage



```php
Response::setCurrentPage( mixed $currentPage ): \PagSeguro\Parsers\Transaction\Search\Abandoned\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currentPage` | **mixed** |  |




---

### getDate



```php
Response::getDate(  ): mixed
```







---

### setDate



```php
Response::setDate( mixed $date ): \PagSeguro\Parsers\Transaction\Search\Abandoned\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **mixed** |  |




---

### getResultsInThisPage



```php
Response::getResultsInThisPage(  ): mixed
```







---

### setResultsInThisPage



```php
Response::setResultsInThisPage( mixed $resultsInThisPage ): \PagSeguro\Parsers\Transaction\Search\Abandoned\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resultsInThisPage` | **mixed** |  |




---

### getTotalPages



```php
Response::getTotalPages(  ): mixed
```







---

### setTotalPages



```php
Response::setTotalPages( mixed $totalPages ): \PagSeguro\Parsers\Transaction\Search\Abandoned\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$totalPages` | **mixed** |  |




---

### getTransactions



```php
Response::getTransactions(  ): mixed
```







---

### setTransactions



```php
Response::setTransactions( mixed $transactions ): \PagSeguro\Parsers\Transaction\Search\Abandoned\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transactions` | **mixed** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\Checkout\Response


### getCode



```php
Response::getCode(  ): string
```







---

### setCode



```php
Response::setCode( string $code ): \PagSeguro\Parsers\Checkout\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **string** |  |




---

### getDate



```php
Response::getDate(  ): \DateTime
```







---

### setDate



```php
Response::setDate( \DateTime $date ): \PagSeguro\Parsers\Checkout\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **\DateTime** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\Transaction\Response


### getDiscountAmount



```php
Response::getDiscountAmount(  ): mixed
```







---

### setDiscountAmount



```php
Response::setDiscountAmount(  $discountAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$discountAmount` | **** |  |




---

### getEscrowEndDate



```php
Response::getEscrowEndDate(  ): mixed
```







---

### setEscrowEndDate



```php
Response::setEscrowEndDate(  $escrowEndDate ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$escrowEndDate` | **** |  |




---

### getExtraAmount



```php
Response::getExtraAmount(  ): mixed
```







---

### setExtraAmount



```php
Response::setExtraAmount(  $extraAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getFeeAmount



```php
Response::getFeeAmount(  ): mixed
```







---

### setFeeAmount



```php
Response::setFeeAmount(  $feeAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feeAmount` | **** |  |




---

### getGrossAmount



```php
Response::getGrossAmount(  ): mixed
```







---

### setGrossAmount



```php
Response::setGrossAmount(  $grossAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$grossAmount` | **** |  |




---

### getNetAmount



```php
Response::getNetAmount(  ): mixed
```







---

### setNetAmount



```php
Response::setNetAmount(  $netAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$netAmount` | **** |  |




---

### getCreditorFees



```php
Response::getCreditorFees(  ): mixed
```







---

### setCreditorFees



```php
Response::setCreditorFees(  $creditorFees ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$creditorFees` | **** |  |




---

### getItemCount



```php
Response::getItemCount(  ): mixed
```







---

### setItemCount



```php
Response::setItemCount(  $itemCount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$itemCount` | **** |  |




---

### getItems



```php
Response::getItems(  ): mixed
```







---

### setItems



```php
Response::setItems(  $items ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




---

### addItems



```php
Response::addItems(  ): object
```







---

### getPaymentMethod



```php
Response::getPaymentMethod(  ): mixed
```







---

### setPaymentMethod



```php
Response::setPaymentMethod(  $paymentMethod ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paymentMethod` | **** |  |




---

### getSender



```php
Response::getSender(  ): mixed
```







---

### setSender



```php
Response::setSender(  $sender ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sender` | **** |  |




---

### getShipping



```php
Response::getShipping(  ): mixed
```







---

### setShipping



```php
Response::setShipping( mixed $shipping ): \PagSeguro\Parsers\Response\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shipping` | **mixed** |  |




---

### getCancelationSource



```php
Response::getCancelationSource(  )
```







---

### setCancelationSource



```php
Response::setCancelationSource(  $cancelationSource )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cancelationSource` | **** |  |




---

### getInstallmentCount



```php
Response::getInstallmentCount(  ): mixed
```







---

### setInstallmentCount



```php
Response::setInstallmentCount( mixed $installmentCount ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$installmentCount` | **mixed** |  |




---

### getCode



```php
Response::getCode(  ): mixed
```







---

### setCode



```php
Response::setCode( mixed $code ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




---

### getDate



```php
Response::getDate(  ): mixed
```







---

### setDate



```php
Response::setDate( mixed $date ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **mixed** |  |




---

### getLastEventDate



```php
Response::getLastEventDate(  ): mixed
```







---

### setLastEventDate



```php
Response::setLastEventDate( mixed $lastEventDate ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lastEventDate` | **mixed** |  |




---

### getReference



```php
Response::getReference(  ): mixed
```







---

### setReference



```php
Response::setReference( mixed $reference ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **mixed** |  |




---

### getStatus



```php
Response::getStatus(  ): mixed
```







---

### setStatus



```php
Response::setStatus( mixed $status ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **mixed** |  |




---

### getType



```php
Response::getType(  ): mixed
```







---

### setType



```php
Response::setType( mixed $type ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




---

## Response

Class Response



* Full name: \PagSeguro\Parsers\Transaction\Boleto\Response
* Parent class: \PagSeguro\Parsers\Transaction\Response


### getApplication



```php
Response::getApplication(  ): mixed
```







---

### setApplication



```php
Response::setApplication(  $applications ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$applications` | **** |  |




---

### getCreditorFees



```php
Response::getCreditorFees(  ): mixed
```







---

### setCreditorFees



```php
Response::setCreditorFees(  $creditorFees ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$creditorFees` | **** |  |




---

### getPaymentLink



```php
Response::getPaymentLink(  )
```







---

### setPaymentLink



```php
Response::setPaymentLink(  $paymentLink )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paymentLink` | **** |  |




---

### getCancelationSource



```php
Response::getCancelationSource(  )
```







---

### setCancelationSource



```php
Response::setCancelationSource(  $cancelationSource )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cancelationSource` | **** |  |




---

### getInstallmentCount



```php
Response::getInstallmentCount(  ): mixed
```







---

### setInstallmentCount



```php
Response::setInstallmentCount( mixed $installmentCount ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$installmentCount` | **mixed** |  |




---

### getCode



```php
Response::getCode(  ): mixed
```







---

### setCode



```php
Response::setCode( mixed $code ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




---

### getDate



```php
Response::getDate(  ): mixed
```







---

### setDate



```php
Response::setDate( mixed $date ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **mixed** |  |




---

### getLastEventDate



```php
Response::getLastEventDate(  ): mixed
```







---

### setLastEventDate



```php
Response::setLastEventDate( mixed $lastEventDate ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lastEventDate` | **mixed** |  |




---

### getReference



```php
Response::getReference(  ): mixed
```







---

### setReference



```php
Response::setReference( mixed $reference ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **mixed** |  |




---

### getStatus



```php
Response::getStatus(  ): mixed
```







---

### setStatus



```php
Response::setStatus( mixed $status ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **mixed** |  |




---

### getType



```php
Response::getType(  ): mixed
```







---

### setType



```php
Response::setType( mixed $type ): \PagSeguro\Parsers\Transaction\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




---

### getDiscountAmount



```php
Response::getDiscountAmount(  ): mixed
```







---

### setDiscountAmount



```php
Response::setDiscountAmount(  $discountAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$discountAmount` | **** |  |




---

### getEscrowEndDate



```php
Response::getEscrowEndDate(  ): mixed
```







---

### setEscrowEndDate



```php
Response::setEscrowEndDate(  $escrowEndDate ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$escrowEndDate` | **** |  |




---

### getExtraAmount



```php
Response::getExtraAmount(  ): mixed
```







---

### setExtraAmount



```php
Response::setExtraAmount(  $extraAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getFeeAmount



```php
Response::getFeeAmount(  ): mixed
```







---

### setFeeAmount



```php
Response::setFeeAmount(  $feeAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feeAmount` | **** |  |




---

### getGrossAmount



```php
Response::getGrossAmount(  ): mixed
```







---

### setGrossAmount



```php
Response::setGrossAmount(  $grossAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$grossAmount` | **** |  |




---

### getNetAmount



```php
Response::getNetAmount(  ): mixed
```







---

### setNetAmount



```php
Response::setNetAmount(  $netAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$netAmount` | **** |  |




---

### getItemCount



```php
Response::getItemCount(  ): mixed
```







---

### setItemCount



```php
Response::setItemCount(  $itemCount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$itemCount` | **** |  |




---

### getItems



```php
Response::getItems(  ): mixed
```







---

### setItems



```php
Response::setItems(  $items ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




---

### addItems



```php
Response::addItems(  ): object
```







---

### getPaymentMethod



```php
Response::getPaymentMethod(  ): mixed
```







---

### setPaymentMethod



```php
Response::setPaymentMethod(  $paymentMethod ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paymentMethod` | **** |  |




---

### getSender



```php
Response::getSender(  ): mixed
```







---

### setSender



```php
Response::setSender(  $sender ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sender` | **** |  |




---

### getShipping



```php
Response::getShipping(  ): mixed
```







---

### setShipping



```php
Response::setShipping( mixed $shipping ): \PagSeguro\Parsers\Response\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shipping` | **mixed** |  |




---

## Responsibility

class Handler



* Full name: \PagSeguro\Resources\Responsibility


### http



```php
Responsibility::http(  $http,  $class ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **** |  |
| `$class` | **** |  |




---

### configuration



```php
Responsibility::configuration(  )
```



* This method is **static**.



---

### notifications



```php
Responsibility::notifications(  )
```



* This method is **static**.



---

## Result

Class Response



* Full name: \PagSeguro\Parsers\PreApproval\Search\Result


### getCurrentPage



```php
Result::getCurrentPage(  ): mixed
```







---

### setCurrentPage



```php
Result::setCurrentPage( mixed $currentPage ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currentPage` | **mixed** |  |




---

### getDate



```php
Result::getDate(  ): mixed
```







---

### setDate



```php
Result::setDate( mixed $date ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **mixed** |  |




---

### getResultsInThisPage



```php
Result::getResultsInThisPage(  ): mixed
```







---

### setResultsInThisPage



```php
Result::setResultsInThisPage( mixed $resultsInThisPage ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resultsInThisPage` | **mixed** |  |




---

### getTotalPages



```php
Result::getTotalPages(  ): mixed
```







---

### setTotalPages



```php
Result::setTotalPages( mixed $totalPages ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$totalPages` | **mixed** |  |




---

### getPreApprovals



```php
Result::getPreApprovals(  ): mixed
```







---

### setPreApprovals



```php
Result::setPreApprovals( mixed $preApprovals ): \PagSeguro\Parsers\PreApproval\Search\Response
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovals` | **mixed** |  |




---

## RetryPaymentOrder

Class RetryPaymentOrder



* Full name: \PagSeguro\Resources\Builder\DirectPreApproval\RetryPaymentOrder
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
RetryPaymentOrder::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
RetryPaymentOrder::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
RetryPaymentOrder::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getRetryPaymentOrderUrl



```php
RetryPaymentOrder::getRetryPaymentOrderUrl(  ): string
```



* This method is **static**.



---

## RetryPaymentOrder

Class Payment



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\RetryPaymentOrder
* Parent class: \PagSeguro\Domains\Requests\DirectPreApproval\RetryPaymentOrderRequest


### __construct

PaymentRequest constructor.

```php
RetryPaymentOrder::__construct(  )
```







---

### setPreApprovalCode



```php
RetryPaymentOrder::setPreApprovalCode(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

### setPaymentOrderCode



```php
RetryPaymentOrder::setPaymentOrderCode( mixed $paymentOrderCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paymentOrderCode` | **mixed** |  |




---

### object_to_array



```php
RetryPaymentOrder::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### register



```php
RetryPaymentOrder::register(  $credentials ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## RetryPaymentOrderParser

Class RetryPaymentOrderParser



* Full name: \PagSeguro\Parsers\DirectPreApproval\RetryPaymentOrderParser
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
RetryPaymentOrderParser::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getData



```php
RetryPaymentOrderParser::getData( \PagSeguro\Domains\Requests\DirectPreApproval\RetryPaymentOrder $retryPaymentOrder ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$retryPaymentOrder` | **\PagSeguro\Domains\Requests\DirectPreApproval\RetryPaymentOrder** |  |




---

### success



```php
RetryPaymentOrderParser::success( \PagSeguro\Resources\Http $http ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## RetryPaymentOrderRequest

Class PaymentRequest



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\RetryPaymentOrderRequest


### object_to_array



```php
RetryPaymentOrderRequest::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### __construct

PaymentRequest constructor.

```php
RetryPaymentOrderRequest::__construct(  )
```







---

### setPreApprovalCode



```php
RetryPaymentOrderRequest::setPreApprovalCode(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

### setPaymentOrderCode



```php
RetryPaymentOrderRequest::setPaymentOrderCode( mixed $paymentOrderCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paymentOrderCode` | **mixed** |  |




---

## RetryPaymentOrderService

Class RetryPaymentOrderService



* Full name: \PagSeguro\Services\DirectPreApproval\RetryPaymentOrderService


### create



```php
RetryPaymentOrderService::create( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\DirectPreApproval\RetryPaymentOrder $retryPaymentOrder ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$retryPaymentOrder` | **\PagSeguro\Domains\Requests\DirectPreApproval\RetryPaymentOrder** |  |




---

## Search

Class Payment



* Full name: \PagSeguro\Resources\Builder\Transaction\Search
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Search::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Search::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Search::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getSearchRequestUrl



```php
Search::getSearchRequestUrl(  ): string
```



* This method is **static**.



---

## Search

Class Payment



* Full name: \PagSeguro\Resources\Builder\Application\Authorization\Search
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Search::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Search::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Search::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getSearchRequestUrl



```php
Search::getSearchRequestUrl(  ): string
```



* This method is **static**.



---

## Search

Class Payment



* Full name: \PagSeguro\Resources\Builder\PreApproval\Search
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Search::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Search::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Search::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getSearchRequestUrl



```php
Search::getSearchRequestUrl(  ): string
```



* This method is **static**.



---

## Seller

Class Seller



* Full name: \PagSeguro\Domains\Authorization\Seller


### __construct

Person constructor.

```php
Seller::__construct( string $name = null, \DateTime $birthDate = null, \PagSeguro\Domains\Document $document = null, \PagSeguro\Domains\Phone $phone = null, \PagSeguro\Domains\Address $address = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$birthDate` | **\DateTime** |  |
| `$document` | **\PagSeguro\Domains\Document** |  |
| `$phone` | **\PagSeguro\Domains\Phone** |  |
| `$address` | **\PagSeguro\Domains\Address** |  |




---

### addDocuments



```php
Seller::addDocuments( \PagSeguro\Domains\Document $document ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\PagSeguro\Domains\Document** |  |




---

### addPhones



```php
Seller::addPhones( \PagSeguro\Domains\Phone $phone ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$phone` | **\PagSeguro\Domains\Phone** |  |




---

### getName



```php
Seller::getName(  ): string
```







---

### getAddress



```php
Seller::getAddress(  ): \PagSeguro\Domains\Address
```







---

### getDocuments



```php
Seller::getDocuments(  ): array
```







---

### getPhones



```php
Seller::getPhones(  ): array
```







---

### getBirthDate



```php
Seller::getBirthDate(  ): null
```







---

## SellerService

Class BusinessService



* Full name: \PagSeguro\Services\Authorization\SellerService


### __construct

Seller constructor.

```php
SellerService::__construct( \PagSeguro\Domains\Authorization $authorization )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$authorization` | **\PagSeguro\Domains\Authorization** |  |




---

### getAsXML



```php
SellerService::getAsXML(  ): string
```







---

## Sender





* Full name: \PagSeguro\Domains\Requests\Adapter\Sender


### getEmail



```php
Sender::getEmail(  ): mixed
```







---

### setEmail



```php
Sender::setEmail( mixed $email ): \PagSeguro\Domains\Requests\Sender\Customer
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **mixed** |  |




---

### getName



```php
Sender::getName(  ): mixed
```







---

### setName



```php
Sender::setName( mixed $name ): \PagSeguro\Domains\Requests\Sender\Customer
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




---

### getDocument



```php
Sender::getDocument(  )
```







---

### setDocument



```php
Sender::setDocument(  )
```







---

### getPhone



```php
Sender::getPhone(  )
```







---

### setPhone



```php
Sender::setPhone(  )
```







---

### __construct



```php
Sender::__construct(  $sender )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sender` | **** |  |




---

## Sender





* Full name: \PagSeguro\Domains\Requests\Adapter\DirectPayment\Sender


### getEmail



```php
Sender::getEmail(  ): mixed
```







---

### setEmail



```php
Sender::setEmail( mixed $email ): \PagSeguro\Domains\Requests\Sender\Customer
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **mixed** |  |




---

### getName



```php
Sender::getName(  ): mixed
```







---

### setName



```php
Sender::setName( mixed $name ): \PagSeguro\Domains\Requests\Sender\Customer
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




---

### getDocument



```php
Sender::getDocument(  )
```







---

### setDocument



```php
Sender::setDocument(  )
```







---

### getHash



```php
Sender::getHash(  ): mixed
```







---

### setHash



```php
Sender::setHash(  $hash ): \PagSeguro\Domains\Requests\Sender\Customer
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hash` | **** |  |




---

### getIp



```php
Sender::getIp(  ): mixed
```







---

### setIp



```php
Sender::setIp(  $ip ): \PagSeguro\Domains\Requests\Sender\Customer
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **** |  |




---

### getPhone



```php
Sender::getPhone(  )
```







---

### setPhone



```php
Sender::setPhone(  )
```







---

### __construct



```php
Sender::__construct(  $sender )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sender` | **** |  |




---

## Sender





* Full name: \PagSeguro\Domains\Requests\Adapter\PreApproval\Sender


### getAddress



```php
Sender::getAddress(  )
```







---

### setAddress



```php
Sender::setAddress(  )
```







---

### getEmail



```php
Sender::getEmail(  ): mixed
```







---

### setEmail



```php
Sender::setEmail( mixed $email ): \PagSeguro\Domains\Requests\Sender\Customer
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **mixed** |  |




---

### getName



```php
Sender::getName(  ): mixed
```







---

### setName



```php
Sender::setName( mixed $name ): \PagSeguro\Domains\Requests\Sender\Customer
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




---

### getPhone



```php
Sender::getPhone(  )
```







---

### setPhone



```php
Sender::setPhone(  )
```







---

### __construct



```php
Sender::__construct(  $sender )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sender` | **** |  |




---

## Sender

Class Sender from Direct Payment



* Full name: \PagSeguro\Resources\Factory\Request\DirectPayment\Sender


### __construct

Sender constructor.

```php
Sender::__construct(  )
```







---

### instance



```php
Sender::instance( \PagSeguro\Domains\Sender $sender ): \PagSeguro\Domains\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sender` | **\PagSeguro\Domains\Sender** |  |




---

### withArray



```php
Sender::withArray(  $array ): \PagSeguro\Domains\Shipping
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
Sender::withParameters(  $name,  $email, \PagSeguro\Domains\Phone $phone, \PagSeguro\Domains\Document $document,  $ip ): \PagSeguro\Domains\DirectPayment\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |
| `$email` | **** |  |
| `$phone` | **\PagSeguro\Domains\Phone** |  |
| `$document` | **\PagSeguro\Domains\Document** |  |
| `$ip` | **** |  |




---

### setHash



```php
Sender::setHash(  $hash )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hash` | **** |  |




---

## Sender

Class Sender



* Full name: \PagSeguro\Domains\DirectPreApproval\Sender


### setName



```php
Sender::setName(  $name ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |




---

### setEmail



```php
Sender::setEmail(  $email ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **** |  |




---

### setIp



```php
Sender::setIp(  $ip ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **** |  |




---

### setHash



```php
Sender::setHash(  $hash ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hash` | **** |  |




---

### setPhone



```php
Sender::setPhone(  ): \PagSeguro\Domains\DirectPreApproval\Phone
```







---

### setDocuments



```php
Sender::setDocuments( \PagSeguro\Domains\DirectPreApproval\Document $document ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\PagSeguro\Domains\DirectPreApproval\Document** |  |




---

### setAddress



```php
Sender::setAddress(  ): \PagSeguro\Domains\DirectPreApproval\Address
```







---

## Sender

Class Shipping



* Full name: \PagSeguro\Resources\Factory\Sender


### __construct

Sender constructor.

```php
Sender::__construct(  )
```







---

### instance



```php
Sender::instance( \PagSeguro\Domains\Sender $sender ): \PagSeguro\Domains\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sender` | **\PagSeguro\Domains\Sender** |  |




---

### withArray



```php
Sender::withArray(  $array ): \PagSeguro\Domains\Shipping
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




---

### withParameters



```php
Sender::withParameters(  $name,  $email, \PagSeguro\Domains\Phone $phone, \PagSeguro\Domains\Document $document ): \PagSeguro\Domains\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |
| `$email` | **** |  |
| `$phone` | **\PagSeguro\Domains\Phone** |  |
| `$document` | **\PagSeguro\Domains\Document** |  |




---

## Sender

Class Sender



* Full name: \PagSeguro\Domains\Sender


### __construct

Sender constructor.

```php
Sender::__construct(  )
```







---

### getName



```php
Sender::getName(  ): string
```







---

### setName



```php
Sender::setName( string $name ): \PagSeguro\Domains\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




---

### getEmail



```php
Sender::getEmail(  ): string
```







---

### setEmail



```php
Sender::setEmail( string $email ): \PagSeguro\Domains\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **string** |  |




---

### getPhone



```php
Sender::getPhone(  ): integer
```







---

### setPhone



```php
Sender::setPhone( \PagSeguro\Domains\Phone $phone ): \PagSeguro\Domains\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$phone` | **\PagSeguro\Domains\Phone** |  |




---

### getDocuments



```php
Sender::getDocuments(  ): string
```







---

### setDocuments



```php
Sender::setDocuments( \PagSeguro\Domains\Document $document ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\PagSeguro\Domains\Document** |  |




---

### addDocument



```php
Sender::addDocument(  $type,  $value )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **** |  |
| `$value` | **** |  |




---

## Sender

Direct Payment Sender



* Full name: \PagSeguro\Domains\DirectPayment\Sender
* Parent class: \PagSeguro\Domains\Sender


### __construct

Sender constructor.

```php
Sender::__construct(  )
```







---

### getName



```php
Sender::getName(  ): string
```







---

### setName



```php
Sender::setName( string $name ): \PagSeguro\Domains\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




---

### getEmail



```php
Sender::getEmail(  ): string
```







---

### setEmail



```php
Sender::setEmail( string $email ): \PagSeguro\Domains\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **string** |  |




---

### getPhone



```php
Sender::getPhone(  ): integer
```







---

### setPhone



```php
Sender::setPhone( \PagSeguro\Domains\Phone $phone ): \PagSeguro\Domains\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$phone` | **\PagSeguro\Domains\Phone** |  |




---

### getDocuments



```php
Sender::getDocuments(  ): string
```







---

### setDocuments



```php
Sender::setDocuments( \PagSeguro\Domains\Document $document ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\PagSeguro\Domains\Document** |  |




---

### addDocument



```php
Sender::addDocument(  $type,  $value )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **** |  |
| `$value` | **** |  |




---

### getIp



```php
Sender::getIp(  ): string
```







---

### setIp



```php
Sender::setIp( string $ip ): \PagSeguro\Domains\DirectPayment\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **string** |  |




---

### getHash



```php
Sender::getHash(  ): string
```







---

### setHash



```php
Sender::setHash(  $hash ): \PagSeguro\Domains\DirectPayment\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hash` | **** |  |




---

## Sender

Class Sender



* Full name: \PagSeguro\Domains\PreApproval\Sender
* Parent class: \PagSeguro\Domains\Sender


### __construct

Sender constructor.

```php
Sender::__construct(  )
```







---

### getName



```php
Sender::getName(  ): string
```







---

### setName



```php
Sender::setName( string $name ): \PagSeguro\Domains\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




---

### getEmail



```php
Sender::getEmail(  ): string
```







---

### setEmail



```php
Sender::setEmail( string $email ): \PagSeguro\Domains\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **string** |  |




---

### getPhone



```php
Sender::getPhone(  ): integer
```







---

### setPhone



```php
Sender::setPhone( \PagSeguro\Domains\Phone $phone ): \PagSeguro\Domains\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$phone` | **\PagSeguro\Domains\Phone** |  |




---

### getDocuments



```php
Sender::getDocuments(  ): string
```







---

### setDocuments



```php
Sender::setDocuments( \PagSeguro\Domains\Document $document ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\PagSeguro\Domains\Document** |  |




---

### addDocument



```php
Sender::addDocument(  $type,  $value )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **** |  |
| `$value` | **** |  |




---

### getAddress



```php
Sender::getAddress(  ): mixed
```







---

### setAddress



```php
Sender::setAddress( mixed $address ): \PagSeguro\Domains\PreApproval\Sender
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **mixed** |  |




---

## Session

Class Session



* Full name: \PagSeguro\Resources\Builder\Session
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Session::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Session::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Session::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getRequestUrl



```php
Session::getRequestUrl(  )
```



* This method is **static**.



---

## Session

The Session Service class



* Full name: \PagSeguro\Services\Session


### create



```php
Session::create( \PagSeguro\Domains\Account\Credentials $credentials )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |




---

## Shipping





* Full name: \PagSeguro\Domains\Shipping


### getAddress



```php
Shipping::getAddress(  ): \PagSeguro\Domains\Address
```







---

### setAddress



```php
Shipping::setAddress( \PagSeguro\Domains\Address $address ): \PagSeguro\Domains\Shipping
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **\PagSeguro\Domains\Address** |  |




---

### getCost



```php
Shipping::getCost(  ): string
```







---

### setCost



```php
Shipping::setCost( string $cost ): \PagSeguro\Domains\Shipping
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cost` | **string** |  |




---

### getType



```php
Shipping::getType(  ): \PagSeguro\Domains\ShippingType
```







---

### setType



```php
Shipping::setType( \PagSeguro\Domains\ShippingType $type ): \PagSeguro\Domains\Shipping
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\PagSeguro\Domains\ShippingType** |  |




---

### getAddressRequired



```php
Shipping::getAddressRequired(  ): \PagSeguro\Domains\ShippingAddressRequired
```







---

### setAddressRequired



```php
Shipping::setAddressRequired( \PagSeguro\Domains\ShippingAddressRequired $addressRequired ): \PagSeguro\Domains\Shipping
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$addressRequired` | **\PagSeguro\Domains\ShippingAddressRequired** |  |




---

## Shipping





* Full name: \PagSeguro\Domains\Requests\Adapter\Shipping


### getAddress



```php
Shipping::getAddress(  )
```







---

### setAddress



```php
Shipping::setAddress(  )
```







---

### getCost



```php
Shipping::getCost(  )
```







---

### setCost



```php
Shipping::setCost(  )
```







---

### getType



```php
Shipping::getType(  )
```







---

### setType



```php
Shipping::setType(  )
```







---

### getAddressRequired



```php
Shipping::getAddressRequired(  )
```







---

### setAddressRequired



```php
Shipping::setAddressRequired(  )
```







---

### __construct



```php
Shipping::__construct(  $shipping )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shipping` | **** |  |




---

## ShippingAddressRequired

Class ShippingAddressRequired



* Full name: \PagSeguro\Domains\ShippingAddressRequired


### getAddressRequired



```php
ShippingAddressRequired::getAddressRequired(  ): string
```







---

### setAddressRequired



```php
ShippingAddressRequired::setAddressRequired( string $addressRequired )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$addressRequired` | **string** |  |




---

## ShippingCost

Class ShippingCost



* Full name: \PagSeguro\Domains\ShippingCost


### getCost



```php
ShippingCost::getCost(  ): mixed
```







---

### setCost



```php
ShippingCost::setCost( mixed $cost ): \PagSeguro\Domains\ShippingCost
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cost` | **mixed** |  |




---

## ShippingType

Class ShippingType



* Full name: \PagSeguro\Domains\ShippingType


### getType



```php
ShippingType::getType(  ): string
```







---

### setType



```php
ShippingType::setType( string $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |




---

## Status

Class Status



* Full name: \PagSeguro\Domains\Http\Status


### getStatus



```php
Status::getStatus(  $status ): integer
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **** |  |




---

### getType



```php
Status::getType(  $type ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **** |  |




---

## Status

Class Status



* Full name: \PagSeguro\Resources\Builder\DirectPreApproval\Status
* Parent class: \PagSeguro\Resources\Builder


### getBaseUrl



```php
Status::getBaseUrl(  ): string
```



* This method is **static**.



---

### getStaticUrl



```php
Status::getStaticUrl(  ): string
```



* This method is **static**.



---

### getWebserviceUrl



```php
Status::getWebserviceUrl(  ): string
```



* This method is **static**.



---

### getStatusUrl



```php
Status::getStatusUrl(  ): string
```



* This method is **static**.



---

## Status

Class Status



* Full name: \PagSeguro\Enum\Http\Status
* Parent class: \PagSeguro\Enum\Enum


### getList



```php
Status::getList(  ): array
```



* This method is **static**.



---

### getType



```php
Status::getType(  $key ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




---

### getValue



```php
Status::getValue(  $value ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### isValidName



```php
Status::isValidName(  $name, boolean $strict = false ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |
| `$strict` | **boolean** |  |




---

### isValidValue



```php
Status::isValidValue(  $value, boolean $strict = true ): boolean
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |
| `$strict` | **boolean** |  |




---

## Status

Class Status



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\Status
* Parent class: \PagSeguro\Domains\Requests\DirectPreApproval\StatusRequest


### __construct

StatusRequest constructor.

```php
Status::__construct(  )
```







---

### setStatus



```php
Status::setStatus(  $status )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **** |  |




---

### setPreApprovalCode



```php
Status::setPreApprovalCode(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

### object_to_array



```php
Status::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### register



```php
Status::register(  $credentials ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **** |  |




---

## StatusParser

Class StatusParser



* Full name: \PagSeguro\Parsers\DirectPreApproval\StatusParser
* Parent class: \PagSeguro\Parsers\Error
* This class implements: \PagSeguro\Parsers\Parser


### error



```php
StatusParser::error( \PagSeguro\Resources\Http $http ): \PagSeguro\Domains\Error
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

### getPreApprovalCode



```php
StatusParser::getPreApprovalCode( \PagSeguro\Domains\Requests\DirectPreApproval\Status $status ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **\PagSeguro\Domains\Requests\DirectPreApproval\Status** |  |




---

### getData



```php
StatusParser::getData( \PagSeguro\Domains\Requests\DirectPreApproval\Status $status ): array|\PagSeguro\Domains\Requests\DirectPreApproval\Status
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **\PagSeguro\Domains\Requests\DirectPreApproval\Status** |  |




---

### success



```php
StatusParser::success( \PagSeguro\Resources\Http $http ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |




---

## StatusRequest

Class StatusRequest



* Full name: \PagSeguro\Domains\Requests\DirectPreApproval\StatusRequest


### object_to_array



```php
StatusRequest::object_to_array(  $data ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **** |  |




---

### __construct

StatusRequest constructor.

```php
StatusRequest::__construct(  )
```







---

### setStatus



```php
StatusRequest::setStatus(  $status )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **** |  |




---

### setPreApprovalCode



```php
StatusRequest::setPreApprovalCode(  $preApprovalCode )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preApprovalCode` | **** |  |




---

## StatusService

Class StatusService



* Full name: \PagSeguro\Services\DirectPreApproval\StatusService


### create



```php
StatusService::create( \PagSeguro\Domains\Account\Credentials $credentials, \PagSeguro\Domains\Requests\DirectPreApproval\Status $status ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentials` | **\PagSeguro\Domains\Account\Credentials** |  |
| `$status` | **\PagSeguro\Domains\Requests\DirectPreApproval\Status** |  |




---

## StringFormat

Class with helper functions to format strings



* Full name: \PagSeguro\Helpers\StringFormat


### getOnlyNumbers



```php
StringFormat::getOnlyNumbers(  $value )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




---

### formatString



```php
StringFormat::formatString(  $string,  $limit,  $endchars = &#039;...&#039; )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **** |  |
| `$limit` | **** |  |
| `$endchars` | **** |  |




---

### removeStringExtraSpaces



```php
StringFormat::removeStringExtraSpaces(  $string )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **** |  |




---

### truncateValue



```php
StringFormat::truncateValue(  $string,  $limit,  $endchars = &#039;...&#039; )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **** |  |
| `$limit` | **** |  |
| `$endchars` | **** |  |




---

## Success

Class Success



* Full name: \PagSeguro\Resources\Responsibility\Http\Methods\Success
* This class implements: \PagSeguro\Resources\Responsibility\Handler


### successor



```php
Success::successor(  $successor ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$successor` | **** |  |




---

### handler



```php
Success::handler( \PagSeguro\Resources\Http $http,  $class ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |
| `$class` | **** |  |




---

## Transaction

Class Transaction



* Full name: \PagSeguro\Parsers\Transaction\Search\Abandoned\Transaction
* Parent class: \PagSeguro\Parsers\Transaction\Search\Transactions


### getCode



```php
Transaction::getCode(  ): mixed
```







---

### setCode



```php
Transaction::setCode( mixed $code ): \PagSeguro\Parsers\Transaction\Search\Transactions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




---

### getDate



```php
Transaction::getDate(  ): mixed
```







---

### setDate



```php
Transaction::setDate( mixed $date ): \PagSeguro\Parsers\Transaction\Search\Transactions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **mixed** |  |




---

### getReference



```php
Transaction::getReference(  ): mixed
```







---

### setReference



```php
Transaction::setReference( mixed $reference ): \PagSeguro\Parsers\Transaction\Search\Transactions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **mixed** |  |




---

### getType



```php
Transaction::getType(  ): mixed
```







---

### setType



```php
Transaction::setType( mixed $type ): \PagSeguro\Parsers\Transaction\Search\Transactions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




---

### getGrossAmount



```php
Transaction::getGrossAmount(  ): mixed
```







---

### setGrossAmount



```php
Transaction::setGrossAmount( mixed $grossAmount ): \PagSeguro\Parsers\Transaction\Search\Abandoned\Transaction
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$grossAmount` | **mixed** |  |




---

### getRecoveryCode



```php
Transaction::getRecoveryCode(  ): mixed
```







---

### setRecoveryCode



```php
Transaction::setRecoveryCode( mixed $recoveryCode ): \PagSeguro\Parsers\Transaction\Search\Abandoned\Transaction
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$recoveryCode` | **mixed** |  |




---

## Transaction

Class Response



* Full name: \PagSeguro\Parsers\Transaction\Search\Date\Transaction
* Parent class: \PagSeguro\Parsers\Transaction\Search\Transactions


### getDiscountAmount



```php
Transaction::getDiscountAmount(  ): mixed
```







---

### setDiscountAmount



```php
Transaction::setDiscountAmount(  $discountAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$discountAmount` | **** |  |




---

### getEscrowEndDate



```php
Transaction::getEscrowEndDate(  ): mixed
```







---

### setEscrowEndDate



```php
Transaction::setEscrowEndDate(  $escrowEndDate ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$escrowEndDate` | **** |  |




---

### getExtraAmount



```php
Transaction::getExtraAmount(  ): mixed
```







---

### setExtraAmount



```php
Transaction::setExtraAmount(  $extraAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraAmount` | **** |  |




---

### getFeeAmount



```php
Transaction::getFeeAmount(  ): mixed
```







---

### setFeeAmount



```php
Transaction::setFeeAmount(  $feeAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feeAmount` | **** |  |




---

### getGrossAmount



```php
Transaction::getGrossAmount(  ): mixed
```







---

### setGrossAmount



```php
Transaction::setGrossAmount(  $grossAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$grossAmount` | **** |  |




---

### getNetAmount



```php
Transaction::getNetAmount(  ): mixed
```







---

### setNetAmount



```php
Transaction::setNetAmount(  $netAmount ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$netAmount` | **** |  |




---

### getPaymentMethod



```php
Transaction::getPaymentMethod(  ): mixed
```







---

### setPaymentMethod



```php
Transaction::setPaymentMethod(  $paymentMethod ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paymentMethod` | **** |  |




---

### getCode



```php
Transaction::getCode(  ): mixed
```







---

### setCode



```php
Transaction::setCode( mixed $code ): \PagSeguro\Parsers\Transaction\Search\Transactions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




---

### getDate



```php
Transaction::getDate(  ): mixed
```







---

### setDate



```php
Transaction::setDate( mixed $date ): \PagSeguro\Parsers\Transaction\Search\Transactions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **mixed** |  |




---

### getReference



```php
Transaction::getReference(  ): mixed
```







---

### setReference



```php
Transaction::setReference( mixed $reference ): \PagSeguro\Parsers\Transaction\Search\Transactions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **mixed** |  |




---

### getType



```php
Transaction::getType(  ): mixed
```







---

### setType



```php
Transaction::setType( mixed $type ): \PagSeguro\Parsers\Transaction\Search\Transactions
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




---

### getCancellationSource



```php
Transaction::getCancellationSource(  ): mixed
```







---

### setCancellationSource



```php
Transaction::setCancellationSource( mixed $cancellationSource ): \PagSeguro\Parsers\Transaction\Search\Date\Transaction
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cancellationSource` | **mixed** |  |




---

### getLastEventDate



```php
Transaction::getLastEventDate(  ): mixed
```







---

### setLastEventDate



```php
Transaction::setLastEventDate( mixed $lastEventDate ): \PagSeguro\Parsers\Transaction\Search\Date\Transaction
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lastEventDate` | **mixed** |  |




---

### getStatus



```php
Transaction::getStatus(  ): mixed
```







---

### setStatus



```php
Transaction::setStatus( mixed $status ): \PagSeguro\Parsers\Transaction\Search\Date\Transaction
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **mixed** |  |




---

## Transaction

Class Transaction



* Full name: \PagSeguro\Resources\Responsibility\Notifications\Transaction
* This class implements: \PagSeguro\Resources\Responsibility\Notifications\Handler


### successor



```php
Transaction::successor(  $next ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$next` | **** |  |




---

### handler



```php
Transaction::handler(  ): mixed
```







---

## Type

Class Shipping



* Full name: \PagSeguro\Resources\Factory\Shipping\Type


### __construct

Shipping constructor.

```php
Type::__construct(  $shipping )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shipping` | **** |  |




---

### instance



```php
Type::instance( \PagSeguro\Domains\ShippingType $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\PagSeguro\Domains\ShippingType** |  |




---

### withParameters



```php
Type::withParameters(  $type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **** |  |




---

## Type





* Full name: \PagSeguro\Enum\Shipping\Type


## Unauthorized

Class Unauthorized



* Full name: \PagSeguro\Resources\Responsibility\Http\Methods\Unauthorized
* This class implements: \PagSeguro\Resources\Responsibility\Handler


### successor



```php
Unauthorized::successor(  $successor ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$successor` | **** |  |




---

### handler



```php
Unauthorized::handler( \PagSeguro\Resources\Http $http,  $class ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http` | **\PagSeguro\Resources\Http** |  |
| `$class` | **** |  |




---

## Validate





* Full name: \PagSeguro\Helpers\Validate


### cUrl



```php
Validate::cUrl(  )
```



* This method is **static**.



---

### simpleXml



```php
Validate::simpleXml(  )
```



* This method is **static**.



---

## Wrapper





* Full name: \PagSeguro\Resources\Responsibility\Configuration\Wrapper
* This class implements: \PagSeguro\Resources\Responsibility\Handler


### successor



```php
Wrapper::successor(  $next ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$next` | **** |  |




---

### handler



```php
Wrapper::handler(  $action,  $class ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$action` | **** |  |
| `$class` | **** |  |




---

## Wrapper





* Full name: \PagSeguro\Configuration\Wrapper


## Wrapper





* Full name: \PagSeguro\Helpers\Wrapper


### environment



```php
Wrapper::environment(  $config )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **** |  |




---

### credentials



```php
Wrapper::credentials(  $config )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **** |  |




---

### charset



```php
Wrapper::charset(  $config )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **** |  |




---

### log



```php
Wrapper::log(  $config )
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **** |  |




---

## Xhr

Class Xhr



* Full name: \PagSeguro\Helpers\Xhr


### hasPost

Validate if the request is a POST http method

```php
Xhr::hasPost(  ): boolean
```



* This method is **static**.



---

### hasGet

Validate if the request is a GET http method

```php
Xhr::hasGet(  ): boolean
```



* This method is **static**.



---

### getInputCode

Get input code post value

```php
Xhr::getInputCode(  ): integer|null
```



* This method is **static**.



---

### getInputType

Get input type post value

```php
Xhr::getInputType(  ): string|null
```



* This method is **static**.



---



--------
> This document was automatically generated from source code comments on 
Warning: date_default_timezone_get(): Invalid date.timezone value 'America\Sao_paulo', we selected the timezone 'UTC' for now. in /var/www/vendor/twig/twig/lib/Twig/Extension/Core.php on line 92
2018-02-26 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
