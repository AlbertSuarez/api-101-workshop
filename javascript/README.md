# API 101 Workshop: JavaScript

## Getting started

To install all of the dependencies, please follow the next steps:

1. Install Node [[Ubuntu](https://www.digitalocean.com/community/tutorials/how-to-install-node-js-on-ubuntu-16-04) or [Mac](https://blog.teamtreehouse.com/install-node-js-npm-mac)]

2. Install XMLHttpRequest dependency.

   ```bash
   npm install xmlhttprequest
   ```

   

## APIs

### Open Brewery DB

Breweries, Cideries and Craft Beer Bottle Shops.

```bash
node src/OpenBreweryDB.js
```

This [script](src/OpenBreweryDB.js) will use a JSON response like this one:

```json
[ { 
    "id": 385,
    "name": "Black Hammer Brewing",
    "brewery_type": "micro",
    "street": "544 Bryant St",
    "city": "San Francisco",
    "state": "California",
    "postal_code": "94107-1217",
    "country": "United States",
    "longitude": "-122.3969947",
    "latitude": "37.780655",
    "phone": "4155002273",
    "website_url": "http://www.blackhammerbrewing.com",
    "updated_at": "2018-08-23T23:25:33.033Z",
    "tag_list": []
  }
]
```

for printing all the names, addresses and website URLs of all the breweries in `San Francisco`.