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
            'mailLocalAddress' => ['stud123@qa.swamid.se', 'stud124@qa.swamid.se'],
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
        'deniro:deniro' => [
            'uid' => ['deniro'],
            'givenName' => 'Robert',
            'surname' => 'De Niro',
            'schacDateOfBirth' => '1982-01-15'
        ],
        'dench:dench' => [
            'uid' => ['dench'],
            'givenName' => 'Judi',
            'surname' => 'Dench',
            'schacDateOfBirth' => '1995-09-04'
        ],
        'depp:depp' => [
            'uid' => ['depp'],
            'givenName' => 'Johnny',
            'surname' => 'Depp',
            'schacDateOfBirth' => '1985-12-03'
        ],
        'dicaprio:dicaprio' => [
            'uid' => ['dicaprio'],
            'givenName' => 'Leonardo',
            'surname' => 'DiCaprio',
            'schacDateOfBirth' => '1972-08-28'
        ],
        'downey:downey' => [
            'uid' => ['downey'],
            'givenName' => 'Robert',
            'surname' => 'Downey Jr.',
            'schacDateOfBirth' => '1983-05-12'
        ],
        'driver:driver' => [
            'uid' => ['driver'],
            'givenName' => 'Adam',
            'surname' => 'Driver',
            'schacDateOfBirth' => '1988-09-27'
        ],
        'elba:elba' => [
            'uid' => ['elba'],
            'givenName' => 'Idris',
            'surname' => 'Elba',
            'schacDateOfBirth' => '1980-09-02'
        ],
        'farrell:farrell' => [
            'uid' => ['farrell'],
            'givenName' => 'Colin',
            'surname' => 'Farrell',
            'schacDateOfBirth' => '1977-04-25'
        ],
        'fassbender:fassbender' => [
            'uid' => ['fassbender'],
            'givenName' => 'Michael',
            'surname' => 'Fassbender',
            'schacDateOfBirth' => '1992-04-24'
        ],
        'foster:foster' => [
            'uid' => ['foster'],
            'givenName' => 'Jodie',
            'surname' => 'Foster',
            'schacDateOfBirth' => '1991-10-30'
        ],
        'foxx:foxx' => [
            'uid' => ['foxx'],
            'givenName' => 'Jamie',
            'surname' => 'Foxx',
            'schacDateOfBirth' => '1977-07-03'
        ],
        'freeman:freeman' => [
            'uid' => ['freeman'],
            'givenName' => 'Morgan',
            'surname' => 'Freeman',
            'schacDateOfBirth' => '1990-08-24'
        ],
        'glover:glover' => [
            'uid' => ['glover'],
            'givenName' => 'Donald',
            'surname' => 'Glover',
            'schacDateOfBirth' => '2007-03-17'
        ],
        'hanks:hanks' => [
            'uid' => ['hanks'],
            'givenName' => 'Tom',
            'surname' => 'Hanks',
            'schacDateOfBirth' => '1989-12-04'
        ],
        'saldana:saldana' => [
            'uid' => ['saldana'],
            'givenName' => 'Zoe',
            'surname' => 'Saldana',
            'schacDateOfBirth' => '1981-11-23'
        ],
        'hathaway:hathaway' => [
            'uid' => ['hathaway'],
            'givenName' => 'Anne',
            'surname' => 'Hathaway',
            'schacDateOfBirth' => '1987-05-06'
        ],
        'hayek:hayek' => [
            'uid' => ['hayek'],
            'givenName' => 'Salma',
            'surname' => 'Hayek',
            'schacDateOfBirth' => '1983-08-27'
        ],
        'hemsworth:hemsworth' => [
            'uid' => ['hemsworth'],
            'givenName' => 'Chris',
            'surname' => 'Hemsworth',
            'schacDateOfBirth' => '1992-01-19'
        ],
        'hopkins:hopkins' => [
            'uid' => ['hopkins'],
            'givenName' => 'Anthony',
            'surname' => 'Hopkins',
            'schacDateOfBirth' => '2006-08-16'
        ],
        'jackman:jackman' => [
            'uid' => ['jackman'],
            'givenName' => 'Hugh',
            'surname' => 'Jackman',
            'schacDateOfBirth' => '1972-06-28'
        ],
        'jackson:jackson' => [
            'uid' => ['jackson'],
            'givenName' => 'Samuel L.',
            'surname' => 'Jackson',
            'schacDateOfBirth' => '2007-01-27'
        ],
        'johansson:johansson' => [
            'uid' => ['johansson'],
            'givenName' => 'Scarlett',
            'surname' => 'Johansson',
            'schacDateOfBirth' => '1980-05-12'
        ],
        'johnson:johnson' => [
            'uid' => ['johnson'],
            'givenName' => 'Dakota',
            'surname' => 'Johnson',
            'schacDateOfBirth' => '1999-04-21'
        ],
        'kidman:kidman' => [
            'uid' => ['kidman'],
            'givenName' => 'Nicole',
            'surname' => 'Kidman',
            'schacDateOfBirth' => '1983-03-15'
        ],
        'kirby:kirby' => [
            'uid' => ['kirby'],
            'givenName' => 'Vanessa',
            'surname' => 'Kirby',
            'schacDateOfBirth' => '1993-06-28'
        ],
        'kunis:kunis' => [
            'uid' => ['kunis'],
            'givenName' => 'Mila',
            'surname' => 'Kunis',
            'schacDateOfBirth' => '1989-01-01'
        ],
        'lawrence:lawrence' => [
            'uid' => ['lawrence'],
            'givenName' => 'Jennifer',
            'surname' => 'Lawrence',
            'schacDateOfBirth' => '2006-02-14'
        ],
        'mcadams:mcadams' => [
            'uid' => ['mcadams'],
            'givenName' => 'Rachel',
            'surname' => 'McAdams',
            'schacDateOfBirth' => '1998-06-09'
        ],
        'mcconaughey:mcconaughey' => [
            'uid' => ['mcconaughey'],
            'givenName' => 'Matthew',
            'surname' => 'McConaughey',
            'schacDateOfBirth' => '1977-09-09'
        ],
        'mcgregor:mcgregor' => [
            'uid' => ['mcgregor'],
            'givenName' => 'Ewan',
            'surname' => 'McGregor',
            'schacDateOfBirth' => '1991-08-29'
        ],
        'mirren:mirren' => [
            'uid' => ['mirren'],
            'givenName' => 'Helen',
            'surname' => 'Mirren',
            'schacDateOfBirth' => '1996-01-30'
        ],
        'momoa:momoa' => [
            'uid' => ['momoa'],
            'givenName' => 'Jason',
            'surname' => 'Momoa',
            'schacDateOfBirth' => '1983-08-20'
        ],
        'oldman:oldman' => [
            'uid' => ['oldman'],
            'givenName' => 'Gary',
            'surname' => 'Oldman',
            'schacDateOfBirth' => '1988-09-09'
        ],
        'pacino:pacino' => [
            'uid' => ['pacino'],
            'givenName' => 'Al',
            'surname' => 'Pacino',
            'schacDateOfBirth' => '1984-06-11'
        ],
        'pfeiffer:pfeiffer' => [
            'uid' => ['pfeiffer'],
            'givenName' => 'Michelle',
            'surname' => 'Pfeiffer',
            'schacDateOfBirth' => '1992-12-15'
        ],
        'phoenix:phoenix' => [
            'uid' => ['phoenix'],
            'givenName' => 'Joaquin',
            'surname' => 'Phoenix',
            'schacDateOfBirth' => '1979-10-16'
        ],
        'pitt:pitt' => [
            'uid' => ['pitt'],
            'givenName' => 'Brad',
            'surname' => 'Pitt',
            'schacDateOfBirth' => '1974-12-07'
        ],
        'portman:portman' => [
            'uid' => ['portman'],
            'givenName' => 'Natalie',
            'surname' => 'Portman',
            'schacDateOfBirth' => '2005-09-01'
        ],
        'pratt:pratt' => [
            'uid' => ['pratt'],
            'givenName' => 'Chris',
            'surname' => 'Pratt',
            'schacDateOfBirth' => '1974-01-07'
        ],
        'reeves:reeves' => [
            'uid' => ['reeves'],
            'givenName' => 'Keanu',
            'surname' => 'Reeves',
            'schacDateOfBirth' => '1985-11-26'
        ],
        'reilly:reilly' => [
            'uid' => ['reilly'],
            'givenName' => 'John C.',
            'surname' => 'Reilly',
            'schacDateOfBirth' => '2005-11-19'
        ],
        'reynolds:reynolds' => [
            'uid' => ['reynolds'],
            'givenName' => 'Ryan',
            'surname' => 'Reynolds',
            'schacDateOfBirth' => '1988-12-05'
        ],
        'robbie:robbie' => [
            'uid' => ['robbie'],
            'givenName' => 'Margot',
            'surname' => 'Robbie',
            'schacDateOfBirth' => '1991-02-14'
        ],
        'roberts:roberts' => [
            'uid' => ['roberts'],
            'givenName' => 'Julia',
            'surname' => 'Roberts',
            'schacDateOfBirth' => '1982-07-30'
        ],
        'rudd:rudd' => [
            'uid' => ['rudd'],
            'givenName' => 'Paul',
            'surname' => 'Rudd',
            'schacDateOfBirth' => '2006-03-28'
        ],
        'smith:smith' => [
            'uid' => ['smith'],
            'givenName' => 'Will',
            'surname' => 'Smith',
            'schacDateOfBirth' => '1992-03-13'
        ],
        'spencer:spencer' => [
            'uid' => ['spencer'],
            'givenName' => 'Octavia',
            'surname' => 'Spencer',
            'schacDateOfBirth' => '1997-11-18'
        ],
        'stewart:stewart' => [
            'uid' => ['stewart'],
            'givenName' => 'Kristen',
            'surname' => 'Stewart',
            'schacDateOfBirth' => '1993-07-17'
        ],
        'stone:stone' => [
            'uid' => ['stone'],
            'givenName' => 'Emma',
            'surname' => 'Stone',
            'schacDateOfBirth' => '1985-01-27'
        ],
        'streep:streep' => [
            'uid' => ['streep'],
            'givenName' => 'Meryl',
            'surname' => 'Streep',
            'schacDateOfBirth' => '2005-07-29'
        ],
        'swinton:swinton' => [
            'uid' => ['swinton'],
            'givenName' => 'Tilda',
            'surname' => 'Swinton',
            'schacDateOfBirth' => '1984-04-14'
        ],
        'tatum:tatum' => [
            'uid' => ['tatum'],
            'givenName' => 'Channing',
            'surname' => 'Tatum',
            'schacDateOfBirth' => '2006-10-22'
        ],
        'theron:theron' => [
            'uid' => ['theron'],
            'givenName' => 'Charlize',
            'surname' => 'Theron',
            'schacDateOfBirth' => '1988-12-11',
            'schacCountryOfCitizenship' => ['sv'],
            'BirthFamilyName' => 'Rench',
            'BirthGivenName' => 'Rudi',
            'PlaceOfBirth' => 'Oslo',
            'Gender' => 'Male',
            'CountryOfBirth' => 'NO',
            'StateOfBirth' => 'Blekinge',
            'TownOfBirth' => 'Oslo',
            'CurrentAddress' => 'Norgevagen 3, Trondheim',
            'CountryOfResidence' => 'Norway',
            'StateOfResidence' => 'Smaland',
            'CityOfResidence' => 'Trondheim',
            'PostalCodeOfResidence' => '123456',
            'StreetOfResidence' => 'Norgevagen',
            'HouseNumerOfResidence' => '3',
        ],
        'vaughn:vaughn' => [
            'uid' => ['vaughn'],
            'givenName' => 'Vince',
            'surname' => 'Vaughn',
            'schacDateOfBirth' => '1988-02-19'
        ],
        'vikander:vikander' => [
            'uid' => ['vikander'],
            'givenName' => 'Alicia',
            'surname' => 'Vikander',
            'schacDateOfBirth' => '1985-11-09'
        ],
        'waltz:waltz' => [
            'uid' => ['waltz'],
            'givenName' => 'Christoph',
            'surname' => 'Waltz',
            'schacDateOfBirth' => '1986-03-23'
        ],
        'washington:washington' => [
            'uid' => ['washington'],
            'givenName' => 'Denzel',
            'surname' => 'Washington',
            'schacDateOfBirth' => '1981-10-28'
        ],
        'watts:watts' => [
            'uid' => ['watts'],
            'givenName' => 'Naomi',
            'surname' => 'Watts',
            'schacDateOfBirth' => '1990-07-24'
        ],
        'williams:williams' => [
            'uid' => ['williams'],
            'givenName' => 'Michelle',
            'surname' => 'Williams',
            'schacDateOfBirth' => '1992-03-29'
        ],
        'wilson:wilson' => [
            'uid' => ['wilson'],
            'givenName' => 'Owen',
            'surname' => 'Wilson',
            'schacDateOfBirth' => '2007-09-11'
        ],
        'winslet:winslet' => [
            'uid' => ['winslet'],
            'givenName' => 'Kate',
            'surname' => 'Winslet',
            'schacDateOfBirth' => '1986-06-19'
        ],
        'witherspoon:witherspoon' => [
            'uid' => ['witherspoon'],
            'givenName' => 'Reese',
            'surname' => 'Witherspoon',
            'schacDateOfBirth' => '1987-04-02'
        ],
        'adams:adams' => [
            'uid' => ['adams'],
            'givenName' => 'Amy',
            'surname' => 'Adams',
            'schacDateOfBirth' => '1990-10-05'
        ],
        'affleck:affleck' => [
            'uid' => ['affleck'],
            'givenName' => 'Ben',
            'surname' => 'Affleck',
            'schacDateOfBirth' => '1973-07-05'
        ],
        'bancroft:bancroft' => [
            'uid' => ['bancroft'],
            'givenName' => 'Anne',
            'surname' => 'Bancroft',
            'schacDateOfBirth' => '1980-12-30'
        ],
        'berry:berry' => [
            'uid' => ['berry'],
            'givenName' => 'Halle',
            'surname' => 'Berry',
            'schacDateOfBirth' => '1989-08-25'
        ],
        'biel:biel' => [
            'uid' => ['biel'],
            'givenName' => 'Jessica',
            'surname' => 'Biel',
            'schacDateOfBirth' => '1988-09-12'
        ],
        'blanchett:blanchett' => [
            'uid' => ['blanchett'],
            'givenName' => 'Cate',
            'surname' => 'Blanchett',
            'schacDateOfBirth' => '2006-11-08'
        ],
        'blunt:blunt' => [
            'uid' => ['blunt'],
            'givenName' => 'Emily',
            'surname' => 'Blunt',
            'schacDateOfBirth' => '2000-08-15'
        ],
        'boyega:boyega' => [
            'uid' => ['boyega'],
            'givenName' => 'John',
            'surname' => 'Boyega',
            'schacDateOfBirth' => '2005-12-05'
        ],
        'bullock:bullock' => [
            'uid' => ['bullock'],
            'givenName' => 'Sandra',
            'surname' => 'Bullock',
            'schacDateOfBirth' => '1984-09-08'
        ],
        'cage:cage' => [
            'uid' => ['cage'],
            'givenName' => 'Nicolas',
            'surname' => 'Cage',
            'schacDateOfBirth' => '2005-05-13'
        ],
        'carell:carell' => [
            'uid' => ['carell'],
            'givenName' => 'Steve',
            'surname' => 'Carell',
            'schacDateOfBirth' => '2005-06-04'
        ],
        'chastain:chastain' => [
            'uid' => ['chastain'],
            'givenName' => 'Jessica',
            'surname' => 'Chastain',
            'schacDateOfBirth' => '1982-10-19'
        ],
        'close:close' => [
            'uid' => ['close'],
            'givenName' => 'Glenn',
            'surname' => 'Close',
            'schacDateOfBirth' => '1981-02-05'
        ],
        'craig:craig' => [
            'uid' => ['craig'],
            'givenName' => 'Daniel',
            'surname' => 'Craig',
            'schacDateOfBirth' => '1988-10-29'
        ],
        'cruz:cruz' => [
            'uid' => ['cruz'],
            'givenName' => 'Penélope',
            'surname' => 'Cruz',
            'schacDateOfBirth' => '1994-05-22'
        ],
        'cumberbatch:cumberbatch' => [
            'uid' => ['cumberbatch'],
            'givenName' => 'Benedict',
            'surname' => 'Cumberbatch',
            'schacDateOfBirth' => '1987-10-24'
        ],
        'damon:damon' => [
            'uid' => ['damon'],
            'givenName' => 'Matt',
            'surname' => 'Damon',
            'schacDateOfBirth' => '1971-07-09'
        ],
        'davis:davis' => [
            'uid' => ['davis'],
            'givenName' => 'Viola',
            'surname' => 'Davis',
            'schacDateOfBirth' => '2007-04-20'
        ],
    ],
];
