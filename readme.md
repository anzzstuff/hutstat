# NHL HUT Stat Tracker

This is (going to be) a web app for tracking a HUT team's player statistic in EA Sports' NHL Hockey Ultimate Team.

Planned techniques: Laravel & AngularJS

Set up: 
- git clone https://github.com/anzzstuff/hutstat.git hutstat
- Add hutstat.app to Homestead.yaml
- Add hutstat.app to /etc/hosts
- vagrant up --provision
- SSH to vm
- composer update
- cp .env.example .env
- php artisan key:generate
- touch database/database.sqlite
- php artisan migrate
