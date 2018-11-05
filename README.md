# Simple-Email-SENDGRID-API
Here will teach you about create simple API request to send email via SENDGRID API for free.

1. git clone https://github.com/dns2012/Simple-Email-SENDGRID-API.git
2. Open index.php inside directory Simple-Email-SENDGRID-API.
3. Change variable with follow by # mark, for example :
    - #EMAIL-SENDER, change by your email sender like foo@gmail.com, bar@yahoo.com etc.
    - #SENDER-NAME, it will show as sender name from your email
    - #EMAIL-SUBJECT, it use for title/subject from the email
    - #EMAIL-RECEIVER, change this to receiver from your email
    - #RECEIVER-NAME, receiver name is not too important, but you can fill this using receiver name of your email
    - #API-KEY-SENDGRID, this is API KEY that you can get from https://sendgrid.com/ there will be pricing but you can choose free which limited by sendgrid.
4. Change the content of email in this part $email->addContent("text/html", "<strong><u>and easy to do anywhere, even with PHP</u></strong>" );
5. You can start send your email via sendgrid by accesing index.php file in your browser.
6. Enjoy it, thanks.
