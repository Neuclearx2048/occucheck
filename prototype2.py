import requests

# Define the URL of the PHP script
php_url = 'http://occucheck.great-site.net/receive_data.php'

# Define the number to send
number_to_send = 123

# Send a POST request to the PHP script with the number
response = requests.post(php_url, data={'number': number_to_send})

# Check if the request was successful
if response.status_code == 200:
    print('Number sent successfully.')
else:
    print('Failed to send number. Status code:', response.status_code)
