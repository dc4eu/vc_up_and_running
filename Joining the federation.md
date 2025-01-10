# Joining the federation with this issuer.
After setting up the issuer with public certificated and being able to communitcate with it externally it can be joined in the federation as below:

Dowload trust_anchor.json (Text box on bottom) from [https://wiki.sunet.se/display/Projekt/EUDIW+pilot+setup](https://wiki.sunet.se/display/Projekt/EUDIW+pilot+setup)

```docker run --rm -i -v .:/workdir --entrypoint python3 docker.sunet.se/fedservice:latest fedservice/dc4eu_federation/convert_json_to_yaml.py workdir/trust_anchor.json ```

    config:             "
    echo "  op:               " 
    echo "    server_info:    "
    echo "      trust_anchors:"

On Satosa, copy satosa/public/pid_fed_keys.json from satosa and change corresponding parts in the document below:
    
    {
      "issuer.example.com: {
         "entity_types": [
          "federation_entity",
          "openid_credential_issuer",
          "oauth_authorization_server"
            ],
        "jwks": {
          "keys": [
            {
              "kty": "RSA",
              "use": "sig",
              "kid": "U1NGNDhZdGlqV0pXMk1VWEJpbi1XbzBiT0h2UUxZb0tUN2NobkRpbGoyaw",
              "n": "oLSybRKEuOQW3H86KzrkK4zoYv-9PyH3J_9fRPvJaiDTn7It5pTh4Jti2fXh6Ipd6hc_XRJXvQa6J-3pTli5tU9gNDiw24Q7e2K-xvybvp5kqlHIyuJQ87qrYYmfAaSiU6qFqItsJ1yZWt3S7mh0a5trczG_dJjmm8VGXTO9dCC7ou1RdWKA8qhVz_wJy12QdtPS1YVZrAe-fLxS3IiflHlNanSdL5fcJ-527SmczlhqCGnd_r8Evpq6RMePLdCH_k6rQDe69ilp0PFERnugS68MQAyDXUvElvG7W42ja0p1rBhiG1e3utjK5eZXBoodRe3-KgvBSv5226m2ly_Cqw",
              "e": "AQAB"
            },
            {
              "kty": "EC",
              "use": "sig",
              "kid": "SXBOWENCYVZVejZSWjQzRGRkTXZhTTBKQUp6YURmYmV3ZERiR08tNDVEYw",
              "crv": "P-256",
              "x": "SCQEWVjtAGhKSr_uYMU8YuPqhecuMOBQ6To-F-JHJNs",
              "y": "UQyp9-71BcUewQ8R6JrivlDRaa-1kNByAwPMjCmF3NE"
            }
          ]
        }
      }
    }

Send the document to support@dc4eu.eu
And we will run 

```docker run --rm -ti -v .:/workdir --entrypoint bash docker.sunet.se/fedservice:latest -c "cd workdir;/fedservice/dc4eu_federation/create_trust_mark.py -m http://dc4eu.example.com/PDA1Credential/se -d trust_mark_issuer -e https://issuer.example.com"```

```docker run --rm -ti -v .:/workdir --entrypoint bash docker.sunet.se/fedservice:latest -c "cd workdir;/fedservice/dc4eu_federation/create_trust_mark.py -m http://dc4eu.example.com/EHICCredential/se -d trust_mark_issuer -e https://issuer.example.com"```

```docker run --rm -i -v .:/workdir --entrypoint python3 docker.sunet.se/fedservice:latest fedservice/dc4eu_federation/add_info.py -s /workdir/credential_issuer_new.json -t workdir/trust_anchor/subordinates```
