# Creacion de una API con Laravel
## 1.- Creacon del proyecto
 Creamos un nuevo proyecto de Laravel
![image](https://github.com/user-attachments/assets/d4025963-0adc-4280-8bc7-522ca1de45e2)

## 2.- Configuracion de rutas
En la carpeta routes en el archivo routes.php colocamos el nombre que llevara cada una de las rutas de cada peticion POST, PUT, GET o DELETE 
![image](https://github.com/user-attachments/assets/51bff22c-d7cb-48c8-8311-455e1e96533d)

## 3.- Creamos los modelos de cada una de las apis
![image](https://github.com/user-attachments/assets/fc955131-3514-43ab-ba73-b280f18bba76)
![image](https://github.com/user-attachments/assets/48e41ffa-c94d-4d8b-9f39-ea62968cb9f2)

## 4.- Creamos las tablas para cada uno de los modelos
![image](https://github.com/user-attachments/assets/a5f242ca-99ec-4518-a5b7-52b51830ec84)

![image](https://github.com/user-attachments/assets/950183e6-4e3a-47b5-bcfc-782c2334a6bc)

## 5.- Creacion de los controladores para cada tabla, dentro se encontraran las funciones necesarias para las peticiones POST, GET, DELETE Y PUT
#Para la api de Nudibranquios
![image](https://github.com/user-attachments/assets/f3fce47b-be5e-40b3-956a-e2738f024a4e)


![image](https://github.com/user-attachments/assets/88885a74-7287-4cf5-b61c-fb43c6379d9b)

![image](https://github.com/user-attachments/assets/b6eb3df2-7b88-4152-b783-aa5a5b5ef2c1)

![image](https://github.com/user-attachments/assets/dea4edb5-7645-48ec-92e5-e5b34eeb61be)

#Para la api de usuarios se realiza el procedimiento anterior, pero considerendo el cambio de atrubutos de Usuario.

## 6.- Pruebas
Para probar las peticiones se levanta el servidor con:

![image](https://github.com/user-attachments/assets/9fa047fb-ff0d-4acb-a0fc-dc0159c6e544)

Usando una extension de Visual estudio se prueba que funcione cada una de las peticiones y finalmente se agregan lo registros deseados
![image](https://github.com/user-attachments/assets/797b462e-22eb-403a-be8d-7efff3aabe5c)
![image](https://github.com/user-attachments/assets/42518319-a25b-4771-bf68-451b9213d102)

## 7.- Migracion a MySQL
Para migrar las tablas con datos a MySQL procede a editarse el archivo .env del proyecto con los datos de nuestro MySQL
![image](https://github.com/user-attachments/assets/139368a3-aeed-49de-b3f3-b1d013fe3cf0)
 Posteriormente se usa el comando php artisan migrate y podremos ver las tablas en MySQL
 ![image](https://github.com/user-attachments/assets/3fa4e132-239d-4556-a977-89d9b3ea5318)
![image](https://github.com/user-attachments/assets/7395a725-411f-444e-a4cc-ab39a8075cb8)

Y ya tendremos nuestra API lista para usarse
![image](https://github.com/user-attachments/assets/a4db071b-4e71-4c5a-8da4-5edfc5490c80)

![image](https://github.com/user-attachments/assets/af39e252-1dba-4691-97ad-d06ab20f655c)









