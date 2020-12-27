# Dynamic Menu for Codeigniter
### Installation

Just clone or fork this repository and copy into your Codeigniter 3 project and configure the configuration at application/config/dynamic_menu.php file.

Before use this menu you need to make a table structure like this : 
| Column | Type |Legth|Other|
| ------ | ------ | ------ | ------ |
| id | int4 | - |auto_increment|
| controller | varchar | 100 | - |
| method | varchar[] | - | - |
| url | varchar | 100 | - |
| type | varchar | 100 | - |
| level | int4[] | - | - |
| title | varchar | 100 | - |
| icon | varchar | 100 | - |
| parent | int4 | - | - |
| position | int4 | - | - |
| isjson | int4 | - | - |
| status | int4 | - | - |

I am using postgresql for the database. You need to change model and library code if you change table structure.

### Config You Need To Configure
If you change model name or model function you need to change this code : 
```php
$config['db_model'] = 'm_acl';
$config['db_function'] = '_acl_menu';
```
If you change session level name change this code : 
```php
$config['session_level_name'] = 'users_level';
```
If you want to make a different menu type template change this code on every template configuration : 
```php
$config['cidm_default']['db_menu_type'] = 'sidebar_menu';
```
