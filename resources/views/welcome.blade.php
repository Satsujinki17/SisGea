<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>SisGea</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />




    <!-- Vue 3 desde CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <style>

    </style>
</head>

<body>
    <div id="app">
        <!-- Tu contenido Vue irá aquí -->
        <h1>Bienvenido a la página principal</h1>

        <!-- Ejemplo de área para componentes personalizados -->
        <div class="custom-content">
            <!-- Puedes agregar componentes o contenido dinámico aquí -->
        </div>
    </div>

    <script>
        // Crea la aplicación Vue básica
        const {
            createApp
        } = Vue;

        const app = createApp({
            // Datos reactivos - agrega tus propiedades aquí
            data() {
                return {
                    // Ejemplo: mensaje: 'Texto personalizado'
                }
            },

            // Ciclo de vida - útil para inicialización
            mounted() {
                console.log('Aplicación Vue montada');
                // Puedes agregar lógica de inicialización aquí
            }
        });

        // Registra componentes globales si es necesario
        // app.component('mi-componente', {...})

        // Monta la aplicación en el contenedor
        app.mount('#app');
    </script>
</body>

</html>

