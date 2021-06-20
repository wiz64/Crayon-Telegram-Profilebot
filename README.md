### ReadMe | Crayon TGMagic Profilebot
####  Description
This is a nice show-off Telegram bot written in PHP.
What can this script do ?

- `Write Time to Profile Picture at the middle, Name & Bio`
 - `Update Telegram Profile Picture every hour out of chosen pics 😎`
 - `UPDATE Name & Bio`
 - `Fake last seen time`
 - `Do More Automated Stuff !`
 ### CAUTION !!!❌❗
 Please don't run it too many times or Telegram will BAN your account !
 Based on MadelineProto Telegram API.
 Also consider keeping the hosted URL "PRIVATE", Someone can abuse it!
 
> ITS FULLY SAFE TO USE  ! BUT USE AT OWN RISK ! 
> I WILL NOT BE RESPONSIBLE IF YOUR ACCOUNT IS BANNED OR SOMETHING ELSE HAPPENS !
### INSTALLATION
Requirements :
- `PHP 7.2+ Webserver that can run MadlineProto API (Almost Any), FreeHosts work too but they are really terrible and you souldn't use them for the sake of your data but they do the job at least.`
- `Domain or Sub-Domain pointing to your Server (optional)`

Create a new directory of any name anywhere, on a PHP Webserver
then go to that directory
### FTP Method
1) Place All the files within a folder inside document root in your hosting server.
2) Edit the `index.php` file manually and configure as per your needs.

3) Then visit the page using any browser, then login for app-id and again for Session. Then the script should work after refresh.

4) setup a cron-job (cron-job.org) to run as per your need (once in an hour) to run the php script automatically. Now Enjoy !
##### SSH METHOD
1)
> Clone using GIT :

SSH : `git clone <repo address>`

or Download and place all the files there from this repo.
NOTE* - Please delete the .git folder and ALSO Fix permissions by chmod.

2)
Open the Script URL and Login to create an AppID for API Access.
>  NOW VISIT THE SCRIPT AGAIN TO CHECK IF IT IS RUNNING WELL
3) 
> Configure the Script, Open Main php file using any text editor, Also replace the pictures there

SSH `nano index.php`

BINGE ! Now setup a cron job to run the PHP File according to your needs `(like once every hour)`  then it will work fine.
you can also try cron-job.org

`The .htaccess file prevents outsiders from downloading session data, If you are using Nginx or other webserver that doesn't support .htaccess please look into the code and try to add it to your server configuration.`

## Credits
Developer - `WIZ64 / MrCrayon / Sumit K Sharma `
Based on `MadelineProto PHP Telegram API Library`
Concept by `@PHP_New`

Love from INDIA 🇮🇳 
