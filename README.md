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
	font-family: 'myanmarCensus';
	src: 	url('./fonts/myanmarCensus.eot');
	src: 	local('Myanmar Census'),
			url('./fonts/myanmarCensus.ttf') format('truetype'),
			url('./fonts/myanmarCensus.woff') format('woff');
}
@font-face {
	font-family: 'unicode';
	src: 	url('./fonts/ourunicode.eot');
	src: 	local('Ours-Unicode'),  url('./fonts/ourunicode.ttf') format('truetype');
}
@font-face {
	font-family: 'padauk';
	src: 	url('./fonts/padauk.eot');
	src: 	local('Padauk'),  url('./fonts/padauk.ttf') format('truetype');
}
@font-face {
	font-family: 'yunghkio';
	src: 	url('./fonts/yunghkio.eot');
	src: 	local('Yunghkio'),  url('./fonts/yunghkio.ttf') format('truetype');
}
@font-face {
	font-family: 'zawgyione';
	src: 	url('./fonts/zawgyione-webfont.eot');
	src: 	local('Zawgyi-One'),
        url('./fonts/zawgyione-webfont.ttf') format('truetype'),
        url('./fonts/zawgyione-webfont.woff') format('woff');;
}
```
