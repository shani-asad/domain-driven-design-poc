#### Create a database named ddd_poc

```
$ php artisan migrate
$ php artisan db:seed --class="App\Http\Clinic\ClinicSeeder"
$ php artisan db:seed --class="App\Http\ClinicService\ClinicServiceSeeder"
```
