function searchBreweriesByCity(city)
{
    var XMLHttpRequest = require("xmlhttprequest").XMLHttpRequest;
    var xmlHttp = new XMLHttpRequest();
    var url = "https://api.openbrewerydb.org/breweries?by_city=" + city;
    xmlHttp.open("GET", url, false);  // false for synchronous request
    xmlHttp.send(null);

    var jsonResponse = JSON.parse(xmlHttp.responseText);

    console.log("Names:")
    jsonResponse.forEach(element => {
        if (element.name) {
            console.log("\t" + element.name);
        }
    });
    console.log("")

    console.log("Address:")
    jsonResponse.forEach(element => {
        if (element.street) {
            console.log("\t" + element.street + ", " + element.city + ", " + element.state);
        }
    });
    console.log("")

    console.log("Websites:")
    jsonResponse.forEach(element => {
        if (element.website_url) {
            console.log("\t" + element.website_url)
        }
    });
    console.log("")
}

searchBreweriesByCity("San Francisco");