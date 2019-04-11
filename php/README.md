# API 101 Workshop: PHP

## Getting started

To install all of the dependencies, please follow the next steps:

1. Install PHP [[Ubuntu](https://thishosting.rocks/install-php-on-ubuntu/) or [Mac](https://www.php.net/manual/en/install.macosx.php)]

## APIs

### MetaWeather

Current weather in different locations

```bash
php src/MetaWeather.php
```

This [script](src/MetaWeather.php) will interact with two endpoints of the same API. The first one, which is needed for getting the `id` of a location, has the following JSON structure:

```json
[
    {
        "title": "Barcelona",
        "location_type": "City",
        "woeid": 753692,
        "latt_long": "41.385578,2.168740"
    }
]
```

The second one, where you need the `woeid` parameter from the last API response, has the following JSON structure:

```json
{
    "consolidated_weather": [
        {
            "id": 5359211229741056,
            "weather_state_name": "Showers",
            "weather_state_abbr": "s",
            "wind_direction_compass": "SSW",
            "created": "2019-04-11T17:58:39.967613Z",
            "applicable_date": "2019-04-11",
            "min_temp": 6.165,
            "max_temp": 17.799999999999997,
            "the_temp": 16.884999999999998,
            "wind_speed": 2.0355806354595827,
            "wind_direction": 206.1558320132022,
            "air_pressure": 1011.0035,
            "humidity": 55,
            "visibility": 11.848616579177602,
            "predictability": 73
        }
    ],
    "time": "2019-04-11T20:15:20.219501+02:00",
    "sun_rise": "2019-04-11T07:18:46.688338+02:00",
    "sun_set": "2019-04-11T20:26:52.049175+02:00",
    "timezone_name": "LMT",
    "parent": {
        "title": "Spain",
        "location_type": "Country",
        "woeid": 23424950,
        "latt_long": "39.894890,-2.988310"
    },
    "sources": [
        {
            "title": "BBC",
            "slug": "bbc",
            "url": "http://www.bbc.co.uk/weather/",
            "crawl_rate": 180
        }
    ],
    "title": "Barcelona",
    "location_type": "City",
    "woeid": 753692,
    "latt_long": "41.385578,2.168740",
    "timezone": "Europe/Madrid"
}
```