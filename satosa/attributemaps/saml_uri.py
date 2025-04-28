from saml2.attributemaps.saml_uri import MAP


mfa_verified_name = "mfa_verified"
mfa_verified_friendly_name = "mfa_verified"
dc4eu = "http://dc4eu.eu/attributes/naturalperson/"

MAP["fro"][mfa_verified_name] = mfa_verified_friendly_name
MAP["to"][mfa_verified_friendly_name] = mfa_verified_name
MAP["fro"][f"{dc4eu}BirthFamilyName"] = "BirthFamilyName"
MAP["fro"][f"{dc4eu}BirthGivenName"] = "BirthGivenName"
MAP["fro"][f"{dc4eu}PlaceOfBirth"] = "PlaceOfBirth"
MAP["fro"][f"{dc4eu}Gender"] = "Gender"
MAP["fro"][f"{dc4eu}CountryOfBirth"] = "CountryOfBirth"
MAP["fro"][f"{dc4eu}StateOfBirth"] = "StateOfBirth"
MAP["fro"][f"{dc4eu}TownOfBirth"] = "TownOfBirth"
MAP["fro"][f"{dc4eu}CurrentAddress"] = "CurrentAddress"
MAP["fro"][f"{dc4eu}CountryOfResidence"] = "CountryOfResidence"
MAP["fro"][f"{dc4eu}StateOfResidence"] = "StateOfResidence"
MAP["fro"][f"{dc4eu}CityOfResidence"] = "CityOfResidence"
MAP["fro"][f"{dc4eu}PostalCodeOfResidence"] = "PostalCodeOfResidence"
MAP["fro"][f"{dc4eu}StreetOfResidence"] = "StreetOfResidence"
MAP["fro"][f"{dc4eu}HouseNumerOfResidence"] = "HouseNumerOfResidence"
