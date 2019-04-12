# API 101 Workshop: Shell

## Getting started

To install all of the dependencies, please follow the next steps:

1. Install Curl [[Ubuntu](https://www.cyberciti.biz/faq/how-to-install-curl-command-on-a-ubuntu-linux/) or [Mac](http://macappstore.org/curl/)]
2. Install jq

    ```bash
    sudo apt-get install jq  # Ubuntu
    brew install jq  # Mac
    ```

## APIs

### UI Names

Generate random fake names

```bash
sh src/ui_names.sh AMOUNT
```

This [script](src/ui_names.sh) will use a JSON response like this one:

```json
{
    "name": "Katherine",
    "surname": "Baker",
    "gender": "female",
    "region": "United States"
}
```

for printing a random personality as many times as `AMOUNT` specifies.
