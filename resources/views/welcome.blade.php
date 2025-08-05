<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue + Filament Real</title>

    <!-- Incluir estilos de Filament -->
    @filamentStyles

    <style>
        .integration-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 20px;
        }
        .section {
            margin-bottom: 2rem;
        }
    </style>
</head>
<body class="filament-body">
    <div class="integration-container">
        <!-- Componente Vue -->
        <div class="section">
            <div id="vue-app">
                <h2 class="text-xl font-bold mb-4">Componente Vue</h2>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Mensaje controlado por Vue:
                    </label>
                    <input
                        type="text"
                        v-model="vueMessage"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm"
                    >
                </div>

                <div class="p-4 bg-gray-50 rounded-lg">
                    <p>Valor actual: {{ vueMessage }}</p>
                </div>
            </div>
        </div>

        <!-- Widget real de Filament -->
        <div class="section">
            <h2 class="text-xl font-bold mb-4">Widget de Filament</h2>

            <!-- Widget real de estadísticas de Filament -->
            <x-filament::widget>
                <x-filament::card>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">
                            Estadísticas de Usuarios
                        </h3>

                        <!-- Contenido real de Filament -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <x-filament::stats.card
                                description="Usuarios totales"
                                value="1,254"
                                icon="heroicon-o-user-group"
                                color="primary"
                            />

                            <x-filament::stats.card
                                description="Nuevos hoy"
                                value="24"
                                icon="heroicon-o-user-plus"
                                color="success"
                            />

                            <x-filament::stats.card
                                description="Activos ahora"
                                value="42"
                                icon="heroicon-o-user-circle"
                                color="warning"
                            />
                        </div>

                        <!-- Botón real de Filament -->
                        <div class="mt-4">
                            <x-filament::button
                                icon="heroicon-o-eye"
                                tag="a"
                                href="{{ route('filament.admin.resources.users.index') }}"
                            >
                                Ver todos los usuarios
                            </x-filament::button>
                        </div>
                    </div>
                </x-filament::card>
            </x-filament::widget>
        </div>

        <!-- Formulario real de Filament -->
        <div class="section">
            <h2 class="text-xl font-bold mb-4">Formulario de Filament</h2>

            <x-filament::card>
                <x-filament::form wire:submit.prevent="submit">
                    <div class="space-y-4">
                        <!-- Campo real de Filament -->
                        <x-filament::input.wrapper>
                            <x-filament::input.label>
                                Nombre completo
                            </x-filament::input.label>
                            <x-filament::input
                                type="text"
                                wire:model="name"
                            />
                        </x-filament::input.wrapper>

                        <!-- Campo real de Filament -->
                        <x-filament::input.wrapper>
                            <x-filament::input.label>
                                Correo electrónico
                            </x-filament::input.label>
                            <x-filament::input
                                type="email"
                                wire:model="email"
                            />
                        </x-filament::input.wrapper>

                        <!-- Campo real de Filament -->
                        <x-filament::input.checkbox
                            wire:model="terms"
                            label="Acepto los términos y condiciones"
                        />

                        <!-- Botón real de Filament -->
                        <x-filament::button type="submit">
                            Guardar cambios
                        </x-filament::button>
                    </div>
                </x-filament::form>
            </x-filament::card>
        </div>

        <!-- Tabla real de Filament -->
        <div class="section">
            <h2 class="text-xl font-bold mb-4">Tabla de Filament</h2>

            <x-filament::card>
                <div class="p-6">
                    <x-filament::table>
                        <x-slot name="header">
                            <x-filament::table.header>
                                Usuario
                            </x-filament::table.header>
                            <x-filament::table.header>
                                Correo
                            </x-filament::table.header>
                            <x-filament::table.header>
                                Rol
                            </x-filament::table.header>
                        </x-slot>

                        <x-filament::table.row>
                            <x-filament::table.cell>
                                John Doe
                            </x-filament::table.cell>
                            <x-filament::table.cell>
                                john@example.com
                            </x-filament::table.cell>
                            <x-filament::table.cell>
                                Administrador
                            </x-filament::table.cell>
                        </x-filament::table.row>

                        <x-filament::table.row>
                            <x-filament::table.cell>
                                Jane Smith
                            </x-filament::table.cell>
                            <x-filament::table.cell>
                                jane@example.com
                            </x-filament::table.cell>
                            <x-filament::table.cell>
                                Editor
                            </x-filament::table.cell>
                        </x-filament::table.row>
                    </x-filament::table>
                </div>
            </x-filament::card>
        </div>
    </div>

    <!-- Incluir scripts de Filament (Alpine.js y otros) -->
    @filamentScripts

    <script>
        // Aplicación Vue básica
        const { createApp } = Vue;

        createApp({
            data() {
                return {
                    vueMessage: 'Este texto es controlado por Vue'
                }
            }
        }).mount('#vue-app');
    </script>
</body>
</html>
