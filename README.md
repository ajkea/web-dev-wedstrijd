# web-dev-wedstrijd

login als admin:
email: sam@sam.be
wachtwoord: sam123

Github project;
https://github.com/ajkea/web-dev-wedstrijd

C9 project IDE
https://ide.c9.io/ajkea/competition

Online versie project:
http://hendrik.vandijck.mtantwerp.eu

Filmpje usability test:

https://wetransfer.com/downloads/5165d6438ea08bff96a10e4962d9ab6920171108203003/0bf02a5028ef1d00c75ffcb0b389470820171108203003/5d4073 



deploy doc

Installeer PHP7, in je linux server voer je dit commando uit:
sudo apt-get install php7.0 

in de map public pas je eventueel de index.php aan zodat deze linkt naar de juiste files:


Om automatisch een winnaar te kiezen maak je een cronjob aan in je linux server.
dit doe je als volgt:
crontab -l 
crontab -e

onderaan voeg je volgende lijn toe:
* 0 * * * ~/competition/artisan schedule: run /dev/null 2>&1


.env file aanpassen voor de databank (deze staat reeds online):

DB_CONNECTION=mysql
DB_HOST=URL_DATABASE
DB_PORT=3306
DB_DATABASE=DATABASE_NAME
DB_USERNAME=USERNAME
DB_PASSWORD=PASSWORD

