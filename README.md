## Creando un CRUD para profesores

### Creo en ecosistema

```bash
php artisan make:model Profesor --all
```

Esto crea los siguientes elementos:
* migracion (para creer las tablas)
* factoria (Crear valores para una fila de la tabla)
* seeder (invocar a la factoria de un model e insertar los valores en la tabla)
* controlador (los métodos que voy a ejecutar ante solicitudes del cliente) 
* modelo (clase para ineteractuar con una tabla de la bd y hacer acciones típicas como insertar, borrar, consultar, actualizar)
* request (autoriza, valida los datos del formulario)
* policy (ni idea, suena a políticas que definirás acceso)
* rutas (tengo que crearlas y dirán que recursos ofrece mi aplicación)

## Ajusto los valores por defecto

Cómo el modelo se llama Profesor y la tabla quiero que se llame profesores y no profesor, tengo que indicarlo:


### Creo las rutas




### Creo la tabla

###
Poblamos la tabla


ProfesorController: 
Este código implementa las operaciones básicas CRUD para la entidad Profesor, 
incluyendo la creación, lectura, actualización y eliminación de registros de 
profesores en la base de datos. Las vistas relacionadas se encuentran en los 
archivos profesores.listado, profesores.create y profesores.editar.


Editar.blade:
muestra un formulario que permite actualizar la información de un profesor y 
está diseñado para ser utilizado en un proyecto de Laravel con tailwindcss para el estilo.

COMO CREAR LA PAGINACIÓN EN PROFESORES:

1º RESTRINGIMOS EL Nº DE FILAS A PROFESORES A 10
$profesores = Profesor::paginate (10);

para visualizarlo añadiremos en la vista link
<div class="bg-green-200" > {{$profesores ->links()}} </div>


AÑADIDO A ALUMNOS IDIOMAS Y ETIQUETA PARA VISUALIZARLO

INSTALAMOS REACT EN LARAVEL:

PRIMERO INSTALAMOS 3 PAQUETES
npm install --save-dev @vitejs/plugin-react
npm install react@latest react-dom@latest

MODIFICAMOS EL FICHERO DE CONFIGURACIÓN AÑADIENDO EL NUEVO PLUGIN QUE VAMOS A USAR:

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from "@vitejs/plugin-react"

export default defineConfig({
plugins: [
react(),
laravel({
.....

importamos librería jss
ahora en plantilla general especificamos a vite que coja app.jsx


