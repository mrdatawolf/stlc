Initial steps taken

1. Install Docker Desktop
2. Install Git client and add the cmd line tools
3. Install composer globally
4. Create a new folder (maybe stlc)
5. Create sub-folders src, php, nginx
6. In the main folder run: git clone https://github.com/laravel/laravel.git src 
7. Cd to src and run composer install
9. You need to make a local.ini file in php with 2 line upload_max_filesize=40M and post_max_size=40M
10. You also need to make default.conf in the nginx folder.
11. Laravel needs a .env file in it's main directory (src) so make that. 
12. Make directory db in src/database
13. Touch core.sqlite in the new folder
14. Make a DOCKERFILE in the root directory of the project.  You will need to set it up from online resources or use the one I made.
15. Go into src/config and edit database.php change default connection from mysql to sqlite. Also change env('DB_DATABASE', database_path('database.sqlite')) to database_path(env('DB_DATABASE'))
16. In STLC run: docker-compose up -d
17. In src run composer require laravel/sanctum
18. Still in src run php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
19. Still in src run composer require laravel/jetstream
20. Still in src run php artisan jetstream:install livewire --teams
21. In an admin console run Set-ExecutionPolicy Unrestricted (make sure you are doign this in powershell)
22. Still in src run npm install then npm run dev
23. In the admin console run Set-ExecutionPolicy Restricted to return it to default. (make sure you are doign this in powershell)
24. Create docker-compose.yml 
25. Fix any errors shown.
26. Go into docker desktop and start webserver.  There is an issue with the order the docker instances come up so you have to manually start this one for now
27. Goto 127.0.0.1:8089 and you should see a laravel welcome screen.

There is no .env in this repo.  You take the example env and copy it to .env .  Also you will need to create an app key.


# for stlc
make sure your php.ini has extension=php_gd2.dll uncommented
then add "maatwebsite/excel": "^3.1" to your composer.json in src 
