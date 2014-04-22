import oauth2 as oauth
import urllib2 as urllib
import json
from pprint import pprint
import MySQLdb as mdb
import sys

# Fill in these values
consumer_key = 'get'
consumer_secret = 'your'
token = 'own'
token_secret = 'key'

_debug = 0

oauth_token    = oauth.Token(key=token, secret=token_secret)
oauth_consumer = oauth.Consumer(key=consumer_key, secret=consumer_secret)

signature_method_hmac_sha1 = oauth.SignatureMethod_HMAC_SHA1()

http_method = "GET"


http_handler  = urllib.HTTPHandler(debuglevel=_debug)
https_handler = urllib.HTTPSHandler(debuglevel=_debug)

'''
Construct, sign, and open a twitter request
using the hard-coded credentials above.
'''
def yelpreq(url, method, terms, ll):
  consumer = oauth.Consumer(consumer_key, consumer_secret)
  req = oauth.Request('GET', url+"?term="+terms+"&ll="+ll)
  req.update({'oauth_nonce': oauth.generate_nonce(),
                      'oauth_timestamp': oauth.generate_timestamp(),
                      'oauth_token': token,
                      'oauth_consumer_key': consumer_key})

  tokens = oauth.Token(token, token_secret)

  req.sign_request(oauth.SignatureMethod_HMAC_SHA1(), consumer, tokens)

  url = req.to_url()

  headers = req.to_header()

  if http_method == "POST":
    encoded_post_data = req.to_postdata()
  else:
    encoded_post_data = None
    url = req.to_url()

  opener = urllib.OpenerDirector()
  opener.add_handler(http_handler)
  opener.add_handler(https_handler)

  response = opener.open(url, encoded_post_data)

  return response

def proc_samples(terms, location):
	terms ="food"
	location="Burr+Ridge"
	response= yelpreq("http://api.yelp.com/v2/search", "GET", terms, location)
  
	try:
		con = mdb.connect('www.quiando.com', 'quia', 'Q|_|!ando', 'quiando');

		with con:
			data = json.load(response)
			for i in range(len(data['businesses'])):
				restid=data['businesses'][i]['id']
				name=data['businesses'][i]['name']
				rating=data['businesses'][i]['rating']
				rating=rating*2
				rating2=int(rating)
				print type(rating2)
				
				cur = con.cursor()
				cur.execute("INSERT INTO restaurants (restid, name, rating) VALUES (%s, %s, %s)", (restid, name, rating2))
				#print "restid "+str(restid)+" name "+ str(name) + " rating "+str(rating)
		
	except mdb.Error, e:
	  
		 print "Error %d: %s" % (e.args[0],e.args[1])
		 sys.exit(1)
		
	finally:    
			
		if con:    
			con.close()


		


  #businesses=[]
  #for line in response:
#	businesses.append(json.loads(line.encode('utf-8')))
  #print len(businesses)

if __name__ == '__main__':
  terms =sys.argv[1]
  ll=sys.argv[2]
  data=json.load(yelpreq("http://api.yelp.com/v2/search", "GET", terms, ll))
  print json.dumps(data)
  #proc_samples(terms, location)
