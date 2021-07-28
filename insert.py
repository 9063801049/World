import mysql.connector

mydb = mysql.connector.connect (

  host=“fdb32.awardspace.net”

  user=“3865939_db”

 passwd=“db@123456”

 database=“3865939_db”

)
servername = "fdb32.awardspace.net";
$username = "3865939_db";
$password = "db123456";
$dbname = "3865939_db";


mycursor = mydb.cursor ( )
sql = “INSERT INTO covidcases (Country,Total Cases,,Active cases,Deceased,Recovered) VALUES (%s, %d, %d, %d, %d)”
val=[
("India",123456,123,456,012),

]

mycursor.execute ( sql, val )

mydb.commit ( )

print ( mycursor.rowcount, “was inserted.” )