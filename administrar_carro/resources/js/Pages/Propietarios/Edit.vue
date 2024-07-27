<script>
export default {
    name: 'PropietarioEdit'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import PropietarioForm from '@/Components/propietarios/Form.vue';

const props = defineProps({
    propietario: {
        type: Object,
        required: true
    }
})

const form = useForm({
    documento: props.propietario.documento,
    primer_nombre: props.propietario.primer_nombre,
    segundo_nombre: props.propietario.segundo_nombre,
    primer_apellido: props.propietario.primer_apellido,
    segundo_apellido: props.propietario.segundo_apellido,
    email: props.propietario.email,
    numero_telefon: props.propietario.numero_telefon,
    direccion: props.propietario.direccion,
})
</script>

<template>
    <AppLayout title="Editar Propietario">
        <template #header>
            <h1 class="bg-white text-xl text-blue-700 font-bold">Editar Propietario</h1>
        </template>

        <div class="py-12">
            <div class="max-ww-7xl mx-auto sm:px:6 lg:px-8">
                <div class="bh-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <PropietarioForm :updating="true" :form="form"
                            @submit="form.put(route('propietarios.update', propietario.id))" />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
