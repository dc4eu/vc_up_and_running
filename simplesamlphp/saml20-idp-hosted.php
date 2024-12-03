<?php

$metadata['https://simplesamlphp/simplesaml/saml2/idp/metadata.php'] = [
    'host' => '__DEFAULT__',

    'privatekey' => 'saml_metadata.key',
    'certificate' => 'saml_metadata.pem',

    'auth' => 'example-userpass',

    'attributes.NameFormat' => 'urn:oasis:names:tc:SAML:2.0:attrname-format:uri',
    'authproc' => [
        100 => ['class' => 'core:AttributeMap', 'name2oid'],
    ],
];
