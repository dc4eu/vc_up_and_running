<?php
$config = [
    'example-userpass' => [
        'exampleauth:UserPass',

        'student:password' => [
            'uid' => ['stud123'],
                'eduPersonPrincipalName' => ['stud123@qa.swamid.se'],
                'mail' => 'stud123@example.swamid.se',
                'givenName' => 'Stina',
                'sn' => 'Student',
                'cn' => 'Stina Student',
                'displayName' => 'Stina Student',
                'schacHomeOrganization' => 'knappologiska.se',
                'eduPersonAffiliation' => ['member', 'student'],
                'eduPersonScopedAffiliation' => ['member@qa.swamid.se', 'student@qa.swamid.se'],
                'eduPersonAssurance' => [
                'http://www.swamid.se/policy/assurance/al1',
                'https://refeds.org/assurance',
                'https://refeds.org/assurance/ID/unique',
                'https://refeds.org/assurance/ID/eppn-unique-no-reassign',
                'https://refeds.org/assurance/IAP/low',
                        'https://refeds.org/assurance/ATP/ePA-1m',
                ],
            'eduPersonOrcid' => 'https://orcid.org/0000-0002-1825-0097',
            'norEduPersonNIN' => '197912162398',
            'personalIdentityNumber' => '197912162398',
            'schacDateOfBirth' => '12345678',
            'mailLocalAddress' => ['stud123@qa.swamid.se','stud124@qa.swamid.se'],
            'o' => 'Swedish Academic Identity Federation',
            'norEduOrgAcronym' => 'SWAMID',
            'c' => 'SE',
            'co' => 'Sweden',
            'schacHomeOrganizationType' => 'urn:schac:homeOrganizationType:int:NREN',
        ],
        'Carlos:1234' => [
            'subject-id' => '10',
	    'schacDateOfBirth' => '1970-01-10',
            'givenName' => 'Carlos',
            'surname' => 'Castaneda',
        ],
    ],
];
