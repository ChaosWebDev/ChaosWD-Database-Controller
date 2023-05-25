A Very Simple Database Controller.

To Install:

```
composer require chaoswd/database_controller
```

You'll need 4 $\_ENV variables set:

```
$_ENV['DB_HOST'] = 'localhost';
$_ENV['DB_NAME'] = 'database_name';
$_ENV['DB_USER'] = 'username';
$_ENV['DB_PASS'] = 'password';
```

You can initialize it with:

```
use ChaosWD\Controllers\DatabaseController;
$db = new DatabaseController();
```

There are 2 methods in it, `query` and `execute`

query requires the SQL be sent to it:

```
$results = $db->query("SELECT * FROM `test`")->fetchAll();
```

execute requires the SQL with placeholders and an array of parameters be sent:

```
$params = ['test'];
$results = $db->execute("SELECT * FROM `test` WHERE `column` = ?", $params)->fetch();
```
