from saml2.attributemaps import __all__ as __saml2_builtin_all__


__all__ = [*__saml2_builtin_all__]
if "unspecified" not in __all__:
    __all__.append("unspecified")
