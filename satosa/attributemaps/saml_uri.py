from saml2.attributemaps.saml_uri import MAP


mfa_verified_name = "mfa_verified"
mfa_verified_friendly_name = "mfa_verified"

MAP["fro"][mfa_verified_name] = mfa_verified_friendly_name
MAP["to"][mfa_verified_friendly_name] = mfa_verified_name
