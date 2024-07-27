<script>
export default {
    name: "PropietariosForm",
};
</script>

<script setup>
import FormSection from "@/Components/FormSection.vue";
import InputError from "../InputError.vue";
import InputLabel from "../InputLabel.vue";
import PrimaryButton from "../PrimaryButton.vue";
import TextInput from "../TextInput.vue";

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
            <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                <div class="col-sm-10 my-3">
                    <InputLabel
                        for="documento"
                        value="Documento"
                        class="w-full"
                    />
                    <TextInput
                        id="documento"
                        v-model="form.documento"
                        type="text"
                    />
                    <InputError
                        :message="$page.props.errors.documento"
                        class="mt-2"
                    />
                </div>
                <div class="col-sm-10 my-3">
                    <InputLabel
                        for="primer_nombre"
                        value="Primer Nombre"
                        class="w-full"
                    />
                    <TextInput
                        id="primer_nombre"
                        v-model="form.primer_nombre"
                        type="text"
                    />
                    <InputError
                        :message="$page.props.errors.primer_nombre"
                        class="mt-2"
                    />

                    <InputLabel
                        for="segundo_nombre"
                        value="Segundo Nombre"
                        class="w-full"
                    />
                    <TextInput
                        id="segundo_nombre"
                        v-model="form.segundo_nombre"
                        type="text"
                    />
                    <InputError
                        :message="$page.props.errors.segundo_nombre"
                        class="mt-2"
                    />
                </div>
                <div class="form-group col-sm-10 my-3">
                    <InputLabel
                        for="primer_apellido"
                        value="Primer Apellido"
                        class="w-full"
                    />
                    <TextInput
                        id="primer_apellido"
                        v-model="form.primer_apellido"
                        type="text"
                    />
                    <InputError
                        :message="$page.props.errors.primer_apellido"
                        class="mt-2"
                    />

                    <InputLabel
                        for="segundo_apellido"
                        value="Segundo Apellido"
                        class="w-full"
                    />
                    <TextInput
                        id="segundo_apellido"
                        v-model="form.segundo_apellido"
                        type="text"
                    />
                    <InputError
                        :message="$page.props.errors.segundo_nombre"
                        class="mt-2"
                    />
                </div>
                <div class="form-group col-sm-10 my-3">
                    <InputLabel for="email" value="Email" class="w-full" />
                    <TextInput id="email" v-model="form.email" type="email" />
                    <InputError
                        :message="$page.props.errors.email"
                        class="mt-2"
                    />

                    <InputLabel
                        for="numero_telefon"
                        value="Numero Telefono"
                        class="w-full"
                    />
                    <TextInput
                        id="numero_telefon"
                        v-model="form.numero_telefon"
                        type="text"
                    />
                    <InputError
                        :message="$page.props.errors.numero_telefon"
                        class="mt-2"
                    />

                    <InputLabel
                        for="direccion"
                        value="Dirección"
                        class="w-full"
                    />
                    <TextInput
                        id="direccion"
                        v-model="form.direccion"
                        type="text"
                    />
                    <InputError
                        :message="$page.props.errors.direccion"
                        class="mt-2"
                    />
                </div>
                <div class="form-group col-sm-10 my-3">
                    <InputLabel
                        for="foto_perfil"
                        value="Foto Perfil"
                        class="w-full"
                    />
                    <TextInput
                        id="foto_perfil"
                        v-model="form.foto_perfil"
                        type="text"
                    />
                    <InputError
                        :message="$page.props.errors.foto_perfil"
                        class="mt-2"
                    />
                </div>
                <div class="form-group col-sm-10 my-3">
                    <InputLabel
                        for="is_active"
                        value="Esta activo"
                        class="w-full"
                    />
                    <TextInput
                        id="is_active"
                        v-model="form.is_active"
                        type="text"
                    />
                    <InputError
                        :message="$page.props.errors.is_active"
                        class="mt-2"
                    />
                </div>
            </div>
        </template>

        <template #actions>
            <PrimaryButton>
                {{ updating ? "Actualizar" : "Crear" }}
            </PrimaryButton>
        </template>
    </FormSection>

    <template> </template>
</template>
