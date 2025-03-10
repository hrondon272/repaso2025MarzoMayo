# repaso2025MarzoMayo
Este proyecto es un repaso de laravel y la aplicación de nuevos conocimientos como principios SOLID e inertia

## Listo el ejercicio sobre el primer principio SRP (Single Responsibility Principle)

> **"Un módulo debe tener una sola razón para cambiar."**

Crear un sistema para guardar un comentario de un usuario y enviarlo por correo, separando las responsabilidades de almacenamiento y envío.

### 🔹 **Detalles**  
- **Ruta:** `GET /comments/store`  
- **Controlador:** `CommentController`  

### 📝 **Descripción**  
1. Crear un **controlador** `CommentController` con un método `store()`.  
2. El método debe recibir un **comentario** (`message`) y un **email** como parámetros.  
3. Usar un **modelo** `Comment` para guardar el comentario en la base de datos.  
4. Crear una **clase separada** (`CommentNotificationService`) para manejar el envío del correo.  
5. **El controlador NO debe enviar el correo directamente**, sino delegar esa tarea a la clase de notificación.  

### 🎯 **Objetivo**  
Garantizar que el **controlador solo maneje el almacenamiento**, dejando el envío de notificaciones a una clase especializada.  
Esto sigue el **Principio de Responsabilidad Única (SRP)**, facilitando el mantenimiento y la escalabilidad del código. 🚀