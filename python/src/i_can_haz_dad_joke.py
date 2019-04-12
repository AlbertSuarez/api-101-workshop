import argparse
import requests



def _parse_args():
    parser = argparse.ArgumentParser()
    parser.add_argument('jokes_amount', type=int)
    return parser.parse_args()


def print_jokes(jokes_amount):
    api_url = 'https://icanhazdadjoke.com/'
    headers = {
        'Accept': 'application/json'
    }
    for i in range(0, jokes_amount):
        response = requests.get(api_url, headers=headers)
        response_json = response.json()
        joke_id = response_json['id']
        joke_text = response_json['joke']
        print('{idx} [{joke_id}]: {joke_text}'.format(
            idx=i + 1, 
            joke_id=joke_id, 
            joke_text=joke_text
        ))

        joke_image_url = 'https://icanhazdadjoke.com/j/{joke_id}.png'.format(joke_id=joke_id)
        joke_image_path = 'img/{joke_id}.png'.format(joke_id=joke_id)
        response = requests.get(joke_image_url)
        with open(joke_image_path, 'wb') as f:
            f.write(response.content)



if __name__ == '__main__':
    args = _parse_args()
    print_jokes(args.jokes_amount)
