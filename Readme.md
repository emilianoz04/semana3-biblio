### Pasos Iniciales

Clonar el proyecto
Crear una rama que se llame rama2

### Resumen de la semana:

En esta semana, empece a practicar con archivo plano.
sabiendo ya la estructura del mismo y de como normalizarlo, cree un archivo csv para practicar.

movi el archivo generado con inteligencia artificial y lo pegue en la carpeta del proyecto:
con un ejemplo de contenido de cada campo

1,Miguel de Cervantes,Don Quijote de la Mancha,Novela clásica,Francisco de Robles
2,Gabriel García Márquez,Cien años de soledad,Realismo mágico,Sudamericana
3,Isabel Allende,La casa de los espíritus,Realismo mágico,Plaza & Janés
4,Jorge Luis Borges,Ficciones,Cuento,Sur

con este archivo se deberan generar scripts de php para poder separar cada campo y se tendra que dejar cada dato separado en otro archivo aparte solo para ese mismo daton, ejemplo para separar auotres tendre que generar un algoritmo que cree un archivo tipo txt donde solo esren los autores.

El archivo datos.txt debera unir todo los datos separados que estan cada uno en un diferente archivo txt y deberan estar dividido cada dato por un "|".

en la rama1 tengo hecha la actividad pero esta hecha de otra forma, se genero primero un archivo txt que noramliza los datos quitando las "," por un "|" y despues se separaon los datos en cada archivo txt diferente para cada dato.

### Actividad para desarrollar con mayor atención

Se pide normalizar el archivo origen que es datos.txt

Generé los siguientes archivos:

Autores.txt
Titulos.txt
Generos.txt
Editoriales.txt

Unificación de datos

Después hice otro script para volver a juntar todo.

Abrí todos los archivos al mismo tiempo
Fui leyendo una línea de cada uno
Uní los datos usando | como separador
Generé el archivo final Final.txt

Estos script no son para correr por entorno visual, se recomienda que sean corridos por la terminal, ingresando a la imagen del container.