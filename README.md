# Fira CMS

## What is Fira CMS?

Fira cms is a content management system built for dynamic website management. Inside there is a dashboard to update articles 
regularly and a template to display articles 

## How to Installation

- Open folder `\database\firacms.sql`
- If you are using phpmyadmin, please create a database with the name `firacms` and import the sql file into it.
- It is not recommended to directly use the command `php spark migrate -all` because some tables have not been added to it. 
- Open terminal `cd public\template` run `yarn install`
- directory root run `php spark serve`

## Change default user to admin after register account

- Open folder `vendor\myth\auth\src\Config\Auth.php`
- find `public $defaultUserGroup = 'user'; ` change to `public $defaultUserGroup = 'admin'; ` 


## Account activation using email after register account

- open `app\Config` . folder
- find `public $fromEmail = 'example@gmail.com'; ` replace `example@gmail.com` to the email to use
- find `public $fromName = 'codeigniter'; ` replace `codeigniter` to your name or company
- find `public $SMTPUser = 'example@gmail.com'; ` replace `example@gmail.com` to the email to use
- look for `public $SMTPPass = 'password'; ` change `password` and enter password in email

## Login access

- User : `admin`
- Password : `fira@1234`

