# **Gestión de Citas Médicas**

Este proyecto es una aplicación desarrollada en Laravel que permite gestionar citas médicas entre doctores y pacientes. La aplicación organiza horarios de trabajo de los doctores, permite consultar su disponibilidad y agendar citas asegurando que no haya conflictos en los horarios.

## **Características Principales**

- Gestión de usuarios (pacientes y doctores).
- Registro y consulta de horarios de trabajo para cada doctor.
- Agendamiento de citas asegurando disponibilidad de horarios.
- Validación para evitar conflictos entre citas.
- Vistas responsivas creadas con Blade y Bootstrap.

---

## **Tecnologías Utilizadas**

- **Backend:** Laravel 11
- **Frontend:** Blade y Bootstrap 5
- **Base de Datos:** MySQL
- **Validación:** Validaciones integradas en Laravel
- **Gestión de dependencias:** Composer

---

## **Instalación**

Sigue estos pasos para configurar el proyecto en tu máquina local:

1. **Clona el repositorio:**

   ```bash
   git clone https://github.com/Jcgmtxt/epsCitas
   cd gestion-citas-medicas
   ```

2. **Instala las dependencias del proyecto:**

   ```bash
   composer install
   ```

3. **Configura el archivo .env:**
Copia el archivo de ejemplo .env.example y renómbralo como .env. Configura los detalles de conexión a la base de datos:

   ```bash
   DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_base_datos
    DB_USERNAME=usuario
    DB_PASSWORD=contraseña
   ```

4. **Genera la clave de la aplicación:**

   ```bash
    php artisan key:generate
   ```

5. **Ejecuta las migraciones y seeder (opcional):**
    Crea las tablas necesarias en la base de datos y, si deseas, agrega datos iniciales para probar:

    ```bash
    php artisan migrate --seed
    ```

6. **Inicia el servidor de desarrollo:**

    ```bash
    php artisan serve
    ```
La aplicación estará disponible en http://127.0.0.1:8000.
 
---

# Gestión de Doctores y Citas

## Descripción

Este proyecto permite gestionar doctores, consultar sus horarios disponibles y agendar citas con ellos.

## Funcionalidades

1. **Gestión de Doctores**
   - Accede a `/doctors` para ver la lista de doctores registrados.
   - Desde aquí, puedes consultar los horarios de cada doctor.

2. **Consulta de Horarios**
   - Desde la página de un doctor, puedes consultar sus horarios disponibles.

3. **Agendamiento de Citas**
   - Accede a `/appointments/create/{doctor_id}` para agendar una cita con un doctor.
   - En la interfaz de agendamiento, selecciona el paciente, la fecha, la hora de inicio y la hora de fin de la cita.

## Estructura de Carpetas

- `app/Models`: Modelos de la aplicación (User, Schedule, Appointment).
- `app/Http/Controllers`: Controladores para gestionar la lógica del proyecto.
- `resources/views`: Vistas creadas con Blade.
- `routes/web.php`: Rutas de la aplicación.git as
