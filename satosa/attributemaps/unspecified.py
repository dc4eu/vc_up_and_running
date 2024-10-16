IDENTIFIER = "urn:oasis:names:tc:SAML:2.0:attrname-format:unspecified"


mfa_verified_name = "mfa_verified"
mfa_verified_friendly_name = "mfa_verified"


MAP = {
    "identifier": IDENTIFIER,
    "fro": {
        mfa_verified_name: mfa_verified_friendly_name,
    },
    "to": {
        mfa_verified_friendly_name: mfa_verified_name,
    },
}
