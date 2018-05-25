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

SOAP
----

#### WSDL
```
GET /animals-service?wsdl
``` 
#### SOAP service
```
POST /animals-service
```

#### Create animal
```
<?xml version="1.0" encoding="UTF-8"?>
<env:Envelope xmlns:env="http://www.w3.org/2003/05/soap-envelope" xmlns:ns1="http://nginx/animals-service">
    <env:Header/>
    <env:Body>
        <ns1:createAnimal>
            <species>dog</species>
            <breed>akita</breed>
        </ns1:createAnimal>
    </env:Body>
</env:Envelope>
```

#### Update animal
```
<?xml version="1.0" encoding="UTF-8"?>
<env:Envelope xmlns:env="http://www.w3.org/2003/05/soap-envelope" xmlns:ns1="http://nginx/animals-service">
    <env:Header/>
    <env:Body>
        <ns1:updateAnimal>
            <id>1</id>
            <species>cat</species>
            <breed>abyssinian</breed>
            <embedded>true</embedded>
        </ns1:updateAnimal>
    </env:Body>
</env:Envelope>
```

#### Update animal species
```
<?xml version="1.0" encoding="UTF-8"?>
<env:Envelope xmlns:env="http://www.w3.org/2003/05/soap-envelope" xmlns:ns1="http://nginx/animals-service">
    <env:Header/>
    <env:Body>
        <ns1:updateAnimalSpecies>
            <id>1</id>
            <species>dog</species>
            <embedded>true</embedded>
        </ns1:updateAnimalSpecies>
    </env:Body>
</env:Envelope>
```

#### Update animal breed
```
<?xml version="1.0" encoding="UTF-8"?>
<env:Envelope xmlns:env="http://www.w3.org/2003/05/soap-envelope" xmlns:ns1="http://nginx/animals-service">
    <env:Header/>
    <env:Body>
        <ns1:updateAnimalBreed>
            <id>1</id>
            <breed>akita</breed>
            <embedded>true</embedded>
        </ns1:updateAnimalBreed>
    </env:Body>
</env:Envelope>
```

#### Show animals
```
<env:Envelope xmlns:env="http://www.w3.org/2003/05/soap-envelope" xmlns:ns1="http://nginx/animals-service">
    <env:Header/>
    <env:Body>
        <ns1:showAnimals>
            <embedded>true</embedded>  
            <speciesFilter>a</speciesFilter>         
        </ns1:showAnimals>
    </env:Body>
</env:Envelope>
```

#### Show animal
```
<?xml version="1.0" encoding="UTF-8"?>
<env:Envelope xmlns:env="http://www.w3.org/2003/05/soap-envelope" xmlns:ns1="http://nginx/animals-service">
    <env:Header/>
    <env:Body>
        <ns1:showAnimal>
            <id>1</id>
            <embedded>true</embedded>
        </ns1:showAnimal>
    </env:Body>
</env:Envelope>
```

#### Delete animal
```
<?xml version="1.0" encoding="UTF-8"?>
<env:Envelope xmlns:env="http://www.w3.org/2003/05/soap-envelope" xmlns:ns1="http://nginx/animals-service">
    <env:Header/>
    <env:Body>
        <ns1:deleteAnimal>
            <id>1</id>
        </ns1:deleteAnimal>
    </env:Body>
</env:Envelope>
```

#### Assign program to animal
```
<?xml version="1.0" encoding="UTF-8"?><env:Envelope xmlns:env="http://www.w3.org/2003/05/soap-envelope" xmlns:ns1="http://nginx/animals-service">
    <env:Header/>
    <env:Body>
        <ns1:assignProgramToAnimal>
            <id>1</id>
            <title>title</title>
            <television>television</television>
            <startTime>start time</startTime>
            <info>
                <item>
                    <key>description</key>
                    <value>description</value>
                </item>
                <item>
                    <key>legalAge</key>
                    <value>14</value>
                </item>
                <item>
                    <key>releaseYear</key>
                    <value>release year</value>
                </item>
                <item>
                    <key>type</key>
                    <value>type</value>
                </item>
            </info>
            <embedded>true</embedded>
        </ns1:assignProgramToAnimal>
    </env:Body>
</env:Envelope>
```

#### Update animal programs
```
<?xml version="1.0" encoding="UTF-8"?><env:Envelope xmlns:env="http://www.w3.org/2003/05/soap-envelope" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:ns1="http://nginx/animals-service">
    <env:Header/>
    <env:Body>
        <ns1:updateAnimalPrograms>
        <id>1</id>
        <programIds>
            <xsd:string>1</xsd:string>
            <xsd:string>2</xsd:string>
        </programIds>
        <embedded>true</embedded>
        </ns1:updateAnimalPrograms>
    </env:Body>
</env:Envelope>
```

Servisai
--------
```bash
Animals API: localhost:80
TV programs API: localhost:5000 (https://github.com/DovilePatiejunaite/WebServices)
```

REST pavyzdys
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
