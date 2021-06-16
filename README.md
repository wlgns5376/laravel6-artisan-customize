# Laravel6 Artisan command list customize

Laravel CLI 명령툴인 Artisan에 명령어 목록을 필요한 것만 사용할 수 있게 customize를 했습니다.

자세한 설명은 아래 주소에 있습니다.

https://velog.io/@wlgns5376/Laravel-6-Artisan-command-list-customize

## Edit command list

`app/Providers/MyArtisanCommandServiceProvider.php`
```php
class MyArtisanCommandServiceProvider extends ArtisanServiceProvider
{
    /**
     * The commands to be registered.
     *
     * @var array
     */
    protected $commands = [
        'CacheClear' => 'command.cache.clear',
        'ConfigCache' => 'command.config.cache',
        'ConfigClear' => 'command.config.clear',
        'Down' => 'command.down',
        'Up' => 'command.up',
        // 여기에 필요한 기본 명령들을 ArtisanServiceProvider 에서 가져와서 추가합니다.
    ];
```

## Run

`.env` 파일에서 `APP_ENV=local`를 `APP_ENV=production`으로 변경 후 명령을 실행합니다.
```sh
$ php artisan list
```
