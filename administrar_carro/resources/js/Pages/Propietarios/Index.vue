<script>
export default {
    name: "PropietariosIndex",
};
</script>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/vue3";
import { Inertia } from "@inertiajs/inertia";

defineProps({
    propietarios: {
        type: Object,
        required: true,
    },
});

const deletePropietario = (id) => {
    if (confirm("esta seguro?")) {
        Inertia.delete(route("propietarios.destroy", id));
    }
};
</script>

<template>
    <AppLayout title="Propietarios">
        <template #header>
            <h1 class="text-left text-xl text-gray-700 font-bold">
                Listado de Propietarios Activos
            </h1>
            <div
                class="p-1 flex justify-end"
                v-if="
                    $page.props.user.permissions.includes('create propietarios')
                "
            >
                <Link
                    :href="route('propietarios.create')"
                    class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded"
                >
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
                        <th class="text-left p-3 px-5">Status</th>
                        <th
                            v-if="
                                $page.props.user.permissions.includes(
                                    'read propietarios'
                                )
                            "
                            class="btext-left w-1/9 px-5 p-3"
                        >
                            ACCIÓN
                        </th>
                    </tr>
                    <tr
                        v-for="propietario in propietarios.data"
                        class="border-b hover:bg-blue-100 bg-white-100"
                    >
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
                        <td class="px-6 py-4" v-if="propietario.is_active == 1">
                            <div class="flex items-center">
                                <div
                                    class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"
                                ></div>
                                Activo
                            </div>
                        </td>
                        <td class="px-6 py-4" v-else>
                            <div class="flex items-center">
                                <div
                                    class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"
                                ></div>
                                Inactivo
                            </div>
                        </td>
                        <td class="py-2 px-4 flex w-full">
                            <Link
                                :href="
                                    route('propietarios.edit', propietario.id)
                                "
                                v-if="
                                    $page.props.user.permissions.includes(
                                        'update propietarios'
                                    )
                                "
                                class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded mx-1"
                            >
                                EDITAR
                            </Link>

                            <Link
                                v-if="
                                    $page.props.user.permissions.includes(
                                        'delete propietarios'
                                    )
                                "
                                @click="deletePropietario(propietario.id)"
                                class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-300 hover:border-transparent rounded"
                            >
                                ELIMINAR
                            </Link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="flex justify-between py-3">
            <Link
                v-if="propietarios.current_page > 1"
                :href="propietarios.prev_page_url"
                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-300 hover:border-transparent rounded mx-1"
            >
                Anterior
            </Link>
            <div v-else></div>
            <Link
                v-if="propietarios.current_page < propietarios.last_page"
                :href="propietarios.next_page_url"
                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-300 hover:border-transparent rounded mx-1"
            >
                Siguiente
            </Link>
        </div>
    </AppLayout>
</template>
