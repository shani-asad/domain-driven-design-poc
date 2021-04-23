##### First create a database named ddd_poc

##### Then run:
```
$ php artisan migrate
$ php artisan db:seed --class="App\Http\Clinic\ClinicSeeder"
$ php artisan db:seed --class="App\Http\ClinicService\ClinicServiceSeeder"
```
