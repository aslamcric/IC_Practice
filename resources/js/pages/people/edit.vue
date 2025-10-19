<script lang="ts" setup>
import { router, useForm } from '@inertiajs/vue3';

const props = defineProps(['people'])
const form = useForm({
    id: props.people.id,
    name: props.people.name,
    email: props.people.email,
    age: props.people.age
})

function save() {
    form.put(`/people/${props.people.id}`)
}

</script>

<template>
    <h1>Update People</h1>
     <button class="active" @click="router.visit('/people')">Go Back</button>

    <div style="color:green" v-if="$page.props.flash.success">
        {{ $page.props.flash.success }}
    </div>

    <form @submit.prevent="save">
        <label>Name:
            <input type="text" name="name" v-model="form.name">
        </label>
        <div style="color:red" v-if="form.errors.name">
            {{ form.errors.name }}
        </div>

        <label>Email:
            <input type="text" name="email" v-model="form.email">
        </label>
        <div style="color:red" v-if="form.errors.email">
            {{ form.errors.email }}
        </div>

        <label>Age:
            <input type="text" name="age" v-model="form.age">
        </label>
        <div style="color:red" v-if="form.errors.age">
            {{ form.errors.age }}
        </div>

        <button type="Submit" class="success">Update People</button>

    </form>
</template>



<style scoped></style>