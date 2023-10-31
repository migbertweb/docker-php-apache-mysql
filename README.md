# docker-php-apache-mysql

# PHP-MySQL connection test

So we have confirmation that Apache and PHP are active. The first container
therefore does the job well. We will therefore now, to go around the subject,
check that the MySQL container is indeed active, and that the first can connect
to it.

We are going to do this by connecting to MySQL from our terminal, to insert some
data into a table that we are going to create, then try to display this same
data from our index.php.

You need the name of your MySQL container to get started. Nothing could be
simpler: Execute the command

```
$ docker ps --format '{{.Names}}'
```

in a terminal. Copy the output that mentions the word “mysql”. Then, we will
perform this sequence of commands to initialize our dataset:

# Connection to the MySQL container

```
docker exec -ti test-php-mysql-docker-mysql-1 bash
```

# Connect to MySQL server

```
mysql -uroot -psuper-secret-password
```

# We go to the database created when the container is launched

```sql
use my-wonderful-website;
```

# Creation of a "Persons" Table, with a few columns

```sql
CREATE TABLE Persons (PersonID int, LastName varchar(255), FirstName varchar(255), Address varchar(255), City varchar(255));
```

# Insert some data into this table

```sql
INSERT INTO Persons VALUES (1, 'John', 'Doe', '51 Birchpond St.', 'New York');
INSERT INTO Persons VALUES (2, 'Jack', 'Smith', '24 Stuck St.', 'Los Angeles');
INSERT INTO Persons VALUES (3, 'Michele', 'Sparrow', '23 Lawyer St.', 'San Diego');
```

These few data now saved in the database, we just have to try to display them
from our Apache server. So let’s modify the content of our index.php accordingly
in order to do this:

```php
<?php

$host = "mysql"; // Le host est le nom du service, présent dans le docker-compose.yml
$dbname = "my-wonderful-website";
$charset = "utf8";
$port = "3306";

try {
    $pdo = new PDO(
        dsn: "mysql:host=$host;dbname=$dbname;charset=$charset;port=$port",
        username: "root",
        password: "super-secret-password",
    );

    $persons = $pdo->query("SELECT * FROM Persons");

    echo '<pre>';
    foreach ($persons->fetchAll(PDO::FETCH_ASSOC) as $person) {
        print_r($person);
    }
    echo '</pre>';

} catch (PDOException $e) {
    throw new PDOException(
        message: $e->getMessage(),
        code: (int)$e->getCode()
    );
}
```

## Direction our browser…. and BINGO!
