<script>
export default {
    name: 'PropietariosIndex'
}
</script>

<script setup>

import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, } from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia';

defineProps({
    propietarios: {
        type: Object,
        required: true
    }
})

const deletePropietario = id => {
    if (confirm('esta seguro?')) {
        Inertia.delete(route('propietarios.destroy', id))
    }
}

</script>

<template>

    <AppLayout title="Propietarios">
        <template #header>
            <h1 class="text-left text-xl text-gray-700 font-bold">Listado de Propietarios Activos</h1>
            <div class="p-1 flex justify-end" v-if="$page.props.user.permissions.includes('create propietarios')">
                <Link :href="route('propietarios.create')"
                    class="mr-3 text-sm bg-green-500 hover:bg-green-700 text-white py-3 px-2 rounded focus:outline-none focus:shadow-outline">
                NUEVO PROPIETARIO
                </Link>
            </div>
        </template>

        <div class="text-gray-900 bg-white-200">

            <table class="w-full text-md bg-white shadow-md rounded mb-4">

                <tbody>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Documento</th>
                        <th class="text-left p-3 px-5">Primer Nombre</th>
                        <th class="text-left p-3 px-5">Segundo Nombre</th>
                        <th class="text-left p-3 px-5">Primer Apellido</th>
                        <th class="text-left p-3 px-5">Segundo Apellido</th>
                        <th class="text-left p-3 px-5">Email</th>
                        <th class="text-left p-3 px-5">Telefono</th>
                        <th v-if="$page.props.user.permissions.includes('read propietarios')"
                            class="text-left p-3 px-5">
                            Acción</th>
                    </tr>
                    <tr v-for="propietario in propietarios.data" class="border-b hover:bg-blue-100 bg-white-100">
                        <td class="p-3 px-5">
                            {{ propietario.documento }}
                        </td>
                        <td class="p-3 px-5">
                            {{ propietario.primer_nombre }}
                        </td>
                        <td class="p-3 px-5">
                            {{ propietario.segundo_nombre }}
                        </td>
                        <td class="p-3 px-5">
                            {{ propietario.primer_apellido }}
                        </td>
                        <td class="p-3 px-5">
                            {{ propietario.segundo_apellido }}
                        </td>
                        <td class="p-3 px-5">
                            {{ propietario.email }}
                        </td>
                        <td class="p-3 px-5">
                            {{ propietario.numero_telefon }}
                        </td>
                        <td class="p-3 px-5 flex justify-end">

                            <Link :href="route('propietarios.edit', propietario.id)"
                                v-if="$page.props.user.permissions.includes('update propietarios')"
                                class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                            EDITAR
                            </Link>

                            <Link v-if="$page.props.user.permissions.includes('delete propietarios')"
                                @click=" deletePropietario(propietario.id)"
                                class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                            ELIMINAR
                            </Link>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="flex justify-between py-3">
            <Link v-if="propietarios.current_page > 1" :href="propietarios.prev_page_url"
                class="text-sm bg-blue-500 hover:bg-blue-700 text-white py-2 mx-5 px-2 rounded focus:outline-none focus:shadow-outline">
            Prev
            </Link>
            <div v-else></div>
            <Link v-if="propietarios.current_page < propietarios.last_page" :href="propietarios.next_page_url"
                class="text-sm bg-blue-500 hover:bg-blue-700 text-white py-2 mx-5 px-2 rounded focus:outline-none focus:shadow-outline">
            next
            </Link>
        </div>
    </AppLayout>
</template>
