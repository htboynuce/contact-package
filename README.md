# Contact Form Package

#Package Contact - Save name, email, message to admin contact and send email

### Installation ###
You can add this library as a local, per-project dependency to your project using [Composer](https://getcomposer.org/):

    composer require thuanvh/contact
    
Copy the package config to your local config with the publish command:

    php artisan vendor:publish --tag=public    

Run migration

    php artisan migrate  

In file config/contact.php, edit key 'send_mail_to' by your email. configure mail server to send mail 

    php artisan serve 

to start the app on http://localhost:8000/contact

### Features ###

* Contact Form 

    If you are a person who regularly surfs the web and notices, then surely you will see that many websites have entries to leave customer contact information. Customers wishing to leave their information like email, personal phone number or Facebook here. This package to perform this function.
    
