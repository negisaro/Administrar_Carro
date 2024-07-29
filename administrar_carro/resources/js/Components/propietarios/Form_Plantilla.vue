<script>
export default {
    name: "PropietariosForm",
};
</script>

<script setup>
import FormSection from "@/Components/FormSection.vue";
import PrimaryButton from "../PrimaryButton.vue";
import InputError from "../InputError.vue";

defineProps({
    form: {
        type: Object,
        required: true,
    },
    updating: {
        type: Boolean,
        required: false,
        default: false,
    },
});

defineEmits(["submit"]);
</script>

<template>
    <FormSection @submitted="$emit('submit')">
        <template #title>
            {{
                updating ? "Actualizar Propietario" : "Crear nuevo Propietario"
            }}
        </template>

        <template #description>
            {{
                updating
                    ? "Actualización del Propietario"
                    : "Creación del Propietario"
            }}
        </template>

        <template #form>
            <div class="flex flex flex-col md:flex-row lg:flex-row mx-2">
                <div class="p-3">
                    <form class="w-full">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1 py-1"
                                    for="documento"
                                    id="documento"
                                >
                                    Documento
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white-200 text-gray-700 border border-blue-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500"
                                    id="documento"
                                    v-model="form.documento"
                                    type="text"
                                />
                                <InputError
                                    class="text-red-500 text-xs italic"
                                    :message="$page.props.errors.documento"
                                >
                                </InputError>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1 py-1"
                                    for="primer_nombre"
                                >
                                    Primer Nombre
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white-200 text-grey-darker border border-blue-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                    id="primer_nombre"
                                    type="text"
                                    v-model="form.primer_nombre"
                                />
                                <InputError
                                    class="text-red-500 text-xs italic"
                                    :message="$page.props.errors.primer_nombre"
                                >
                                </InputError>
                            </div>

                            <div class="w-full md:w-1/2 px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1 py-1"
                                    for="segundo_nombre"
                                >
                                    Segundo Nombre
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white-200 text-grey-darker border border-blue-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                    id="segundo_nombre"
                                    type="text"
                                    v-model="form.segundo_nombre"
                                />
                                <InputError
                                    class="text-red-500 text-xs italic"
                                    :message="$page.props.errors.segundo_nombre"
                                >
                                </InputError>
                            </div>

                            <div class="w-full md:w-1/2 px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-light py-2"
                                    for="primer_apellido"
                                >
                                    Primer Apellido
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white-200 text-grey-darker border border-blue-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                    id="primer_apellido"
                                    type="text"
                                    v-model="form.primer_apellido"
                                />
                                <InputError
                                    class="text-red-500 text-xs italic"
                                    :message="
                                        $page.props.errors.primer_apellido
                                    "
                                >
                                </InputError>
                            </div>

                            <div class="w-full md:w-1/2 px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-light py-2"
                                    for="segundo_apellido"
                                >
                                    Segundo Apellido
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white-200 text-grey-darker border border-blue-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                    id="primer_apellido"
                                    type="text"
                                    v-model="form.segundo_apellido"
                                />
                                <InputError
                                    class="text-red-500 text-xs italic"
                                    :message="
                                        $page.props.errors.segundo_apellido
                                    "
                                >
                                </InputError>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label
                                    class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                    for="email"
                                >
                                    Email
                                </label>
                                <input
                                    class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    id="email"
                                    v-model="form.email"
                                    type="email"
                                />
                                <InputError
                                    class="text-red-500 text-xs italic"
                                    :message="$page.props.errors.email"
                                >
                                </InputError>
                            </div>

                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label
                                    class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                    for="numero_telefon"
                                >
                                    Número Celular
                                </label>
                                <input
                                    class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    id="text"
                                    v-model="form.numero_telefon"
                                    type="text"
                                />
                                <InputError
                                    class="text-red-500 text-xs italic"
                                    :message="$page.props.errors.numero_telefon"
                                >
                                </InputError>
                            </div>

                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label
                                    class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                    for="direccion"
                                >
                                    Dirección
                                </label>
                                <input
                                    class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    id="direccion"
                                    v-model="form.direccion"
                                    type="text"
                                />
                                <InputError
                                    class="text-red-500 text-xs italic"
                                    :message="$page.props.errors.direccion"
                                >
                                </InputError>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/Grid Form-->
            </div>
        </template>

        <template #actions>
            <PrimaryButton>
                {{ updating ? "Actualizar" : "Crear" }}
            </PrimaryButton>
        </template>
    </FormSection>
</template>
