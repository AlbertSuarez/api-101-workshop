# API 101 Workshop: Python

## Getting started

To install all of the dependencies, please follow the next steps:

1. Install Python [[Ubuntu](http://ubuntuhandbook.org/index.php/2017/07/install-python-3-6-1-in-ubuntu-16-04-lts/) or [Mac](http://www.pyladies.com/blog/Get-Your-Mac-Ready-for-Python-Programming/)]
2. Install `requests` dependency.
    
    ```bash
    pip install requests
    ```

## APIs

### I can haz Dad joke

The largest selection of dad jokes on the internet

```bash
python src/i_can_haz_dad_joke.py JOKES_AMOUNT
```

This [script](src/i_can_haz_dad_joke.py) will use a JSON response like this one:

```json
{
  "id": "R7UfaahVfFd",
  "joke": "My dog used to chase people on a bike a lot. It got so bad I had to take his bike away.",
  "status": 200
}
```

for printing a random Dad joke (and saving it as an image as well) as many times as `JOKES_AMOUNT` specifies.