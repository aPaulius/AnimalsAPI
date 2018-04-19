Animals API
=====================

Informacija
-----------
```bash
Naudojant kolegų TV programų servisą gyvūnams galima priskirti TV programas. 
```

Paleidimas
------------
```bash
$ docker-compose up
```

Servisai
--------
```bash
Animals API: localhost:80
TV programs API: localhost:5000 (https://github.com/DovilePatiejunaite/WebServices)
```

Pavyzdys
--------
```bash
PUT /animals/{id}/programs
{
    "programs": [
        {
            "id": 1
        },
        {
            "id": 2
        }
    ]
}
```

Dokumentacija
-------------
```bash
localhost:80/doc
```
