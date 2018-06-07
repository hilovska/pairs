# pairs

## Installation

1. Install the package to your Laravel project:
   ```sh
   composer require hilovska/pairs
   ```
   
   
## Usage
In root directory of your Laravel project run command
   ```sh
   php artisan pairs:print {args}
   ```
   
If you want print combination pairs with only unique args (i.e. removing identical arguments), add option ```-U```

### Example without -U option

```
php artisan pairs:print a b b
```
will return:
```
a b
a b
b b
```

### Example with -U option

```
php artisan pairs:print a b b -U
```
will return:
```
a b
```

