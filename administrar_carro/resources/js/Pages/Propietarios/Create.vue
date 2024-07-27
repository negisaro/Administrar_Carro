<script>
export default {
    name: 'PropietariosCreate'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import PropietarioForm from '@/Components/propietarios/Form_Plantilla.vue';

const form = useForm({
    documento: '',
    primer_nombre: '',
    segundo_nombre: '',
    primer_apellido: '',
    segundo_apellido: '',
    email: '',
    numero_telefon: '',
    direccion: ''
})
</script>

<template>
    <AppLayout title="Crear Propietario">
        <template #header>
            <h1 class="bg-white text-xl text-blue-700 font-bold">Crear Propietario</h1>
        </template>

        <div class="py-12">
            <div class="max-ww-7xl mx-auto sm:px:6 lg:px-8">
                <div class="bh-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <PropietarioForm :form="form" @submit="form.post(route('propietarios.store'))" />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
