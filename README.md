# Contact Form Package

#Package Contact - Save name, email, message to admin contact and send email

##Installation
You can add this library as a local, per-project dependency to your project using [Composer](https://getcomposer.org/):

    composer require thuanvh/contact
    
Copy the package config to your local config with the publish command:

    php artisan vendor:publish --tag=public    

In file config/contact.php, edit key 'send_mail_to' by your email. configure mail server to send mail 