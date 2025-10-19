<script lang="ts" setup>
import { router, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: "",
    email: "",
    age: ""
})

function save() {
    form.post('/people')
}

</script>

<template>
    <h1>Add New Peaple</h1>
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

        <button type="Submit" class="success">Save People</button>

    </form>
</template>



<style scoped></style>