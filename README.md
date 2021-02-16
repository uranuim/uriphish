# uriphish
RASPBARRY PI 4 AS PHISHING SERVER HEADLESS

This is a set of phishing pages,which can be hosted on raspberry to make fullyloaded phishing server.

REQUIREMENTS =>

1) PHP     ( apt install php )
2) APACHE2 ( apt install apache2 )
3) GIT     ( apt install git )

STEP TO SETUP =>

1) Clone this repository in /var/www/html/
2) Change permission of urifish from None to Everyone.
3) Now forward the port 80 using portmap(openvpn), serveo, localhost.run as you wish.
4) Now replace the "replace_link" from link.html to the link you got after port forwarding.

example = (replace_link ----> https://egeo.serveo.net)
4) Open the http://localhost:80/link.html
5) Click on the green button to copy the link of specific website.
DELETE [facebbok-mail.php gmail-mail.php instagram-mail.php snapchat-mail.php yahoo-mail.php mail.html and folder mail]

Now you can get credentials by send link.
