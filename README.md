Mapa de Puntos en CartoDB
======================================================

---

###Backend

+ Apache 2.22.2 - http://www.apache.org/
+ [PHP >5.2](http://es2.php.net/manual/en/function.json-decode.php) por json_decode
+ Api PHP para [CartoDB](http://www.cartodb.com/) - https://github.com/Vizzuality/cartodbclient-php

Testeado usando
+ [WAMP server](http://www.wampserver.com/en/)

---

###FrontEnd
+ Jquery 1.11.1 - http://jquery.com/ (para compatibilidad con IE8)

---

##### Instalación dev:
	
	npm install

---

##### Bugs conocidos:

En Firefox no carga el mapa y por consola se observan los siguientes errores:
	ReferenceError: rd is not defined
	ReferenceError: jl is not defined main.js
	ReferenceError: HO is not defined main.js

Fix:
Desactivar Firebug y regargar la página.


Licencia 
--------

MIT



