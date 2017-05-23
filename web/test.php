<?php
echo 'FFFFFF';
postgres://postgres:root@localhost:5432/wordpress-csv
$dbopts = parse_url(getenv('DATABASE_URL'));
$dbname = ltrim($dbopts["path"],'/');
$dbconn = pg_connect("host={$dbopts["host"]} port={$dbopts["port"]} dbname={$dbname} user={$dbopts["user"]} password={$dbopts["pass"]}");

 if($dbconn)
 {

   echo "the database is connected";

 }else

 {

   echo "the databse isn't connected";

 }exit();

$dbopts = parse_url(getenv('DATABASE_URL'));
$app->register(new Herrera\Pdo\PdoServiceProvider(),
               array(
                   'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
                   'pdo.username' => $dbopts["user"],
                   'pdo.password' => $dbopts["pass"]
               )
);