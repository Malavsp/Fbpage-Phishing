# Fbpage-Phishing
This is a project for websecurity . This is based on languages PHP(HTML) , CSS and few lines coding of Javascript. 
Phishing attack is one of the famous Credential attacks and cause of credential theft , in these attack the attacker tries to create a same login interface and disguise themselves as one of the reputed Website (as facebook here)
I have created a login page of the facebook which the user might thing is the real one as an official website and may enter there login Credentials which when entered will be directly stored in my data base but the user will think he is trying to login facebook .
I made a Login Interface when user provides his credentials and clicks login , one alert will be popped up showing Entered password /email is wrong Enter it again  , And page will refresh user would think he might had entered something worng ,let's try agian now 
, he will be able to enter his facebook account. You might think how > In between fraction of seconds many things happened .
.1>The Credentials are stored in my SQL database which I can use wherever I Want ,
..2>The Alert message popped up and refreshed the page.
...3>The user was redirected to the official Facebook login webpage which the user might had not noticed  with the help of header() function.
That's the Phishing attack . We can do it with many other websites .
