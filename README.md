# Breadcrumb-Dynamic-with-Laravel

DASHBOARD / USUARIOS / CREAR

<?php $uri= Route::current()->getUri(); ?>
<br>
Esto me trae la ruta donde estoy.

<?phph $ruta_explode = explode('/',$uri); ?>
<br>
Hago un explode para poder segmentizar y poder mostrar mis rutas en el breadcrumb.

<?php $last_array = last($ruta_explode); ?><br>
Guardo en un variable $last_array el valor del ultimo array.
last() === es un helper que usa laravel para traer el ultimo valor del array.
Esto es similar a la funcion end() de php, solo cambio de nombre.

<?php $val_url = ''?><br>
Creao una variable vacio.

@if(isset($ruta_explode) && count($ruta_explode)>0)<br>
Verifico si la $ruta_explode existe y si la $ruta_explode que me trae su valor es mayor a "0"

@foreach ($ruta_explode as $val)<br>
Realizo un foreach para recorrer mi $ruta_explode

<?php $val_url .= $val ?><br>
Asigno el primer segment de mi url

@if($last_array!=$val)<br>
Hago un "if" para verificar si el valor de mi variable $last_array es distinto al valor que estoy pintando, para poder poner el enlace correspondiente dentro del atributo "<a>"<br>
por ejemplo:<br>

CREAR != DASHBOARD

Entonces esto me pintara esto

&lt;a href="{{ asset('dashboard') }}"&gt;DASHBOARD&lt; /a &gt;

@else
Una vez que compara el ultimo valor y si coincide lo unico que hago es pintarlo sin darle el enlace.

<?php $val_url .= '/'?>


Aqui le aplico al penultimo valor array un "/"
y esto queda así.

DASHBOARD/USUARIOS/CREAR

pinta el HTML así



&lt;li&gt;&lt;a href="{{ asset('dashboard') }}"&gt;DASHBOARD&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="{{ asset('dashboard/usuarios') }}"&gt;USUARIOS&lt;/a&gt;&lt;/li&gt;
&lt;li class="active"&gt;CREAR&lt;/li&gt;


Dentro de template.blade.php


solo incluyes al breadcrumb de la siguiente manera.


@include('layouts.partials.breadcrumb')

YA USTEDES MISMO LE DAN SUS COLORES O DISEÑO