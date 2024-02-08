# Fbpage-Phishing
This is a WebSecurity Project describing Phishing Attack. It's  based on languages like PHP(HTML) , CSS and Javascript. 

**Project Description**

Phishing attack is one of the famous Credential attacks and cause of credential theft , in these attack the attacker tries to create a same login interface and disguise themselves as one of the reputed Website (as facebook here)

 **Project Breakdown**
 
I have created a login page of the facebook which the user might thing is the real one as an official website and may enter there login Credentials which when entered will be directly stored in my data base but the user will think he is trying to login facebook .

I made a Login Interface when user provides his credentials and Clicks login , one alert will be popped up showing Entered password /email is wrong Enter it again  and page will refresh, user would think he might had entered something wrong ,let's try again now 
,he will be able to enter his facebook account. You might think how > In between fraction of seconds many things happened. Let's look over it...

_**.1->**_
_The Credentials are stored in my SQL database which I can use wherever I Want ,_

_**..2->**_
_The Alert message popped up and refreshed the page._

**_...3->_**
_The user was redirected to the official Facebook login webpage which the user might had not noticed  with the help of header() function._

That's the Phishing attack . We can do it with many other websites .
