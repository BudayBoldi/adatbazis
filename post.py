import requests
from lxml import html

url = "http://localhost/Connect/lekerdez.php"

data = {
    "name": "Kel Jani"
}

req = requests.post(url, data=data)

root = html.fromstring(req.text)
para = root.xpath('//res/text()')

if para[0] ==  'Biztos hogy helyesen irtad be?':
    print("Nincs benne")
else:
    print(para)
