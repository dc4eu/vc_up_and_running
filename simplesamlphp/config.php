<?php
$httpUtils = new \SimpleSAML\Utils\HTTP();

$config = [

    'baseurlpath' => 'simplesaml/',

    'application' => [
    ],

    /*
     * The following settings are *filesystem paths* which define where
     * SimpleSAMLphp can find or write the following things:
     * - 'loggingdir': Where to write logs. MUST be set to NULL when using a logging
     *                 handler other than `file`.
     * - 'datadir': Storage of general data.
     * - 'tempdir': Saving temporary files. SimpleSAMLphp will attempt to create
     *   this directory if it doesn't exist.
     * When specified as a relative path, this is relative to the SimpleSAMLphp
     * root directory.
     */
    //'loggingdir' => '/var/log/',
    //'datadir' => '/var/data/',
    'tempdir' => '/tmp/simplesaml',

    'certdir' => 'cert/',

    'technicalcontact_name' => 'Administrator',
    'technicalcontact_email' => 'na@example.org',
    'timezone' => 'Europe/Stockholm',



    'secretsalt' => '1234567890',

    'auth.adminpassword' => 'VCadmin',

    'admin.protectmetadata' => false,

    'admin.checkforupdates' => true,

    'trusted.url.domains' => [],

    'trusted.url.regex' => false,

    'enable.http_post' => false,

    'assertion.allowed_clock_skew' => 180,


    'showerrors' => true,
    'errorreporting' => true,

    'logging.level' => SimpleSAML\Logger::DEBUG,
    'logging.handler' => 'stderr',

    'logging.facility' => defined('LOG_LOCAL5') ? constant('LOG_LOCAL5') : LOG_USER,

    /*
     * The process name that should be used when logging to syslog.
     * The value is also written out by the other logging handlers.
     */
    'logging.processname' => 'simplesamlphp',

    /*
     * Logging: file - Logfilename in the loggingdir from above.
     */
    'logging.logfile' => 'simplesamlphp.log',

    /*
     * This is an array of outputs. Each output has at least a 'class' option, which
     * selects the output.
     */
    'statistics.out' => [
    ],

    'proxy' => null,
    'database.dsn' => 'mysql:host=localhost;dbname=saml',

    'database.username' => 'simplesamlphp',
    'database.password' => 'secret',
    'database.options' => [],

    'database.prefix' => '',

    'database.driver_options' => [],

    'database.persistent' => false,

    'database.secondaries' => [
    ],

    'enable.saml20-idp' => true,
    'enable.adfs-idp' => false,


    'module.enable' => [
        'exampleauth' => true,
        'core' => true,
        'admin' => true,
        'swamid' => true,
	'saml' => true,
	'entitycategories' => true,
    ],

    'session.duration' => 8 * (60 * 60), // 8 hours.
    'session.datastore.timeout' => (4 * 60 * 60), // 4 hours
    'session.state.timeout' => (60 * 60), // 1 hour
    'session.cookie.name' => 'SimpleSAMLSessionID',
    'session.cookie.lifetime' => 0,
    'session.cookie.path' => '/',
    'session.cookie.domain' => '',
    'session.cookie.secure' => true,
    'session.cookie.samesite' => $httpUtils->canSetSameSiteNone() ? 'None' : null,
    'session.phpsession.cookiename' => 'SimpleSAML',
    'session.phpsession.savepath' => null,
    'session.phpsession.httponly' => true,
    'session.authtoken.cookiename' => 'SimpleSAMLAuthToken',
    'session.rememberme.enable' => false,
    'session.rememberme.checked' => false,
    'session.rememberme.lifetime' => (14 * 86400),

    'memcache_store.servers' => [
        [
            ['hostname' => 'localhost'],
        ],
    ],

    'memcache_store.prefix' => '',
    'memcache_store.expires' => 36 * (60 * 60), // 36 hours.
    'language.available' => [
        'en'
    ],
    'language.rtl' => ['ar', 'dv', 'fa', 'ur', 'he'],
    'language.default' => 'en',
    'language.parameter.name' => 'language',
    'language.parameter.setcookie' => true,
    'language.cookie.name' => 'language',
    'language.cookie.domain' => '',
    'language.cookie.path' => '/',
    'language.cookie.secure' => true,
    'language.cookie.httponly' => false,
    'language.cookie.lifetime' => (60 * 60 * 24 * 900),
    'language.cookie.samesite' => $httpUtils->canSetSameSiteNone() ? 'None' : null,

    'theme.use' => 'swamid:swamid',
    'theme.controller' => '\SimpleSAML\Module\swamid\FancyThemeController',
    'template.auto_reload' => false,
    'production' => false,
    'assets' => [
        'caching' => [
            'max_age' => 300,
            'etag' => false,
        ],
    ],

    'idpdisco.enableremember' => true,
    'idpdisco.rememberchecked' => true,
    'idpdisco.validate' => true,
    'idpdisco.extDiscoveryStorage' => null,
    'idpdisco.layout' => 'dropdown',

    'authproc.idp' => [
        10 => [
            'class' => 'core:AttributeMap', 'name2oid'
        ],
        30 => 'core:LanguageAdaptor',

        45 => [
            'class'         => 'core:StatisticsWithAttribute',
            'attributename' => 'realm',
            'type'          => 'saml20-idp-SSO',
        ],
        48 => [
            'class' => 'saml:PairwiseID',
            'identifyingAttribute' => 'urn:oid:0.9.2342.19200300.100.1.1',
            'scopeAttribute' => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.6',
        ],
        49 => [
            'class' => 'saml:SubjectID',
            'identifyingAttribute' => 'urn:oid:0.9.2342.19200300.100.1.1',
            'scopeAttribute' => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.6',
        ],
        50 => [
            'class' => 'entitycategories:EntityCategory',
            'default' => true,
            'strict' => false,
            'allowRequestedAttributes' => false,
            'http://refeds.org/category/research-and-scholarship' => [
                'urn:oid:1.3.6.1.4.1.5923.1.1.1.6', #eduPersonPrincipalName
                'urn:oid:0.9.2342.19200300.100.1.3', #mail
                'urn:oid:2.16.840.1.113730.3.1.241', #displayName
                'urn:oid:2.5.4.42', #givenName
                'urn:oid:2.5.4.4', #sn (aka surname)
                'urn:oid:1.3.6.1.4.1.5923.1.1.1.11', #eduPersonAssurance
                'urn:oid:1.3.6.1.4.1.5923.1.1.1.9', #eduPersonScopedAffiliation
	    ],
            //Copied also to 'http://www.geant.net/uri/dataprotection-code-of-conduct/v1'
            'https://refeds.org/category/code-of-conduct/v2' => [
                'urn:oid:1.3.6.1.4.1.5923.1.1.1.10', #eduPersonTargetedID
                'urn:oid:1.3.6.1.4.1.5923.1.1.1.6', #eduPersonPrincipalName
                'urn:oid:1.3.6.1.4.1.5923.1.1.1.16', #eduPersonOrcid
                'urn:oid:1.3.6.1.4.1.2428.90.1.5', #norEduPersonNIN
                'urn:oid:1.2.752.29.4.13', #personalIdentityNumber
                'urn:oid:1.3.6.1.4.1.25178.1.2.3', #schacDateOfBirth
                'urn:oid:0.9.2342.19200300.100.1.3', #mail
                'urn:oid:2.16.840.1.113730.3.1.13', #mailLocalAddress
                'urn:oid:2.16.840.1.113730.3.1.241', #displayName
                'urn:oid:2.5.4.3', #cn (aka commonName)
                'urn:oid:2.5.4.42', #givenName
                'urn:oid:2.5.4.4', #sn (aka surname)
                'urn:oid:1.3.6.1.4.1.5923.1.1.1.11', #eduPersonAssurance
                'urn:oid:1.3.6.1.4.1.5923.1.1.1.9', #eduPersonScopedAffiliation
                'urn:oid:1.3.6.1.4.1.5923.1.1.1.1', #eduPersonAffiliation
                'urn:oid:2.5.4.10', #o (aka organizationName)
                'urn:oid:1.3.6.1.4.1.2428.90.1.6', #norEduOrgAcronym
                'urn:oid:2.5.4.6', #c (aka countryName)
                'urn:oid:0.9.2342.19200300.100.1.43', #co (aka friendlyCountryName)
                'urn:oid:1.3.6.1.4.1.25178.1.2.9', #schacHomeOrganization
                'urn:oid:1.3.6.1.4.1.25178.1.2.10', #schacHomeOrganizationType
	    ],
            'https://refeds.org/category/anonymous' => [
                'urn:oid:1.3.6.1.4.1.25178.1.2.9', #schacHomeOrganization
                'urn:oid:1.3.6.1.4.1.5923.1.1.1.9', #eduPersonScopedAffiliation
	    ],
            'https://refeds.org/category/pseudonymous' => [
                'urn:oasis:names:tc:SAML:attribute:pairwise-id', #pairwise-id
                'urn:oid:1.3.6.1.4.1.5923.1.1.1.11', #eduPersonAssurance
                'urn:oid:1.3.6.1.4.1.25178.1.2.9', #schacHomeOrganization
                'urn:oid:1.3.6.1.4.1.5923.1.1.1.9', #eduPersonScopedAffiliation
	    ],
            'https://refeds.org/category/personalized' => [
                'urn:oasis:names:tc:SAML:attribute:subject-id', #subject-id
                'urn:oid:0.9.2342.19200300.100.1.3', #mail
                'urn:oid:2.16.840.1.113730.3.1.241', #displayName
                'urn:oid:2.5.4.42', #givenName
                'urn:oid:2.5.4.4', #sn (aka surname)
                'urn:oid:1.3.6.1.4.1.5923.1.1.1.11', #eduPersonAssurance
                'urn:oid:1.3.6.1.4.1.25178.1.2.9', #schacHomeOrganization
                'urn:oid:1.3.6.1.4.1.5923.1.1.1.9', #eduPersonScopedAffiliation
	    ],
            'https://myacademicid.org/entity-categories/esi' => [
	    ],
	],
	51 => [
            'class' => 'core:AttributeLimit',
            'default' => true,
	],
    ],

    'metadatadir' => 'metadata',
    'metadata.sources' => [
	    ['type' => 'flatfile'],
	    [
            'type' => 'xml',
            'file' => '/var/simplesamlphp/metadata/satosa-issuer.xml',
	    'validateCertificate' => ['/var/simplesamlphp/samlcert/satosa-issuer.pem'],
           ],
    ],

    'metadata.sign.enable' => false,

    'metadata.sign.privatekey' => null,
    'metadata.sign.privatekey_pass' => null,
    'metadata.sign.certificate' => null,
    'store.type'                    => 'phpsession',
    'store.sql.dsn'                 => 'sqlite:/path/to/sqlitedatabase.sq3',
    'store.sql.username' => null,
    'store.sql.password' => null,
    'store.sql.prefix' => 'SimpleSAMLphp',
    'store.sql.options' => [],
    'store.redis.host' => 'localhost',
    'store.redis.port' => 6379,
    'store.redis.username' => '',
    'store.redis.password' => '',
    'store.redis.prefix' => 'SimpleSAMLphp',
    'store.redis.mastergroup' => 'mymaster',
    'store.redis.sentinels' => [],
    'proxymode.passAuthnContextClassRef' => false,
];
$config['authproc.idp'][50]['http://www.geant.net/uri/dataprotection-code-of-conduct/v1'] = $config['authproc.idp'][50][ 'https://refeds.org/category/code-of-conduct/v2'];
