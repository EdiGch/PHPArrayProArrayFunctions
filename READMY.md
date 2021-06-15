### Composer init
In file composer.json 
```
"autoload": {
    "psr-4": {
        "App\\": "app/"
    }
},
```
#### In file index.php 
```
require_once 'vendor/autoload.php';
```
#### Init autoload
```composer dump-autoload -o```