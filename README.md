# Myanmar Typeface Examples

This is for beginners who are trying to use Myanmar Fonts in their webpages and databases.
Though I am keen to write with javascript and NoSQL, I wrote this examples using php and MySQL database.
I dont know too much about Myanmar Unicode in details but I see them generally in two main groups: unicode and non-unicode.
I consider Myanmar 3, Census, MyUnicode, Padauk, Yunghkio as unicode and ZawgyiOne as non-unicode.


##Using Myanmar Typeface in General Components
It is very simple, I assume that everybody has this knowledge too.
We just need to configure in our stylesheets using our preferred style sheet language.
In this example, I use CSS as following:

```
@font-face {
	font-family: 'myanmar3';
	src: 	url('./fonts/myanmar3.eot');
	src: 	local('Myanmar3'),  url('./fonts/myanmar3.ttf') format('truetype');
}
@font-face {
	font-family: 'unicode';
	src: 	url('./fonts/ourunicode.eot');
	src: 	local('Ours-Unicode'),  url('./fonts/ourunicode.ttf') format('truetype');
}
@font-face {
	font-family: 'zawgyione';
	src: 	url('./fonts/zawgyione-webfont.eot');
	src: 	local('Zawgyi-One'),
        url('./fonts/zawgyione-webfont.ttf') format('truetype'),
        url('./fonts/zawgyione-webfont.woff') format('woff');;
}
```

Declare **font-face** for each font that you want to use by defining their appropriate *font-family* and *src*.
Then you can define either **class** or **id** based styles with your own font-faces.

```
/*-- for Myanmar 3 Font ---*/
.mm-myanmar3{
	font-family: myanmar3;
	font-weight: normal;
	font-style: normal;
}
/*-- for Myanmar unicode Font ---*/
.mm-unicode{
	font-family: unicode;
	font-weight: normal;
	font-style: normal;
}
/*-- for zawgyione Font ---*/
.mm-zawgyione{
	font-family: zawgyione;
	font-weight: normal;
	font-style: normal;
}
```

##Using Myanmar Typeface in MySQL Database
The first thing we need to take care for using Myanmar Fonts in MySQL database is to use **utf-8**
whatever possible. Later versions of MySQL include **utf8mb4_unicode_...** collation.
In order to use with example: the database name is **mm-typeface-examples** and table name is **tblMyanmarTypefaces** containing
six fields in total: **Myanmar3**, **MyanmarCensus**, **Unicode**, **Padauk**, **ZawgyiOne**, **id** with all *tinytext* type
expect **id** for primary key with *smallint(2)*.

Another important one is in connection.php. This following line is needed to enable utf-8 conenction with our database.

```
	mysqli_set_charset($con,"utf8") or die('Could not connect: ' . mysqli_connect_error());
```








































sdf
