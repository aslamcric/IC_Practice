<script setup>
import siteConfig from "../data/config";
const props = defineProps(['firstName', 'lastName', 'email', 'address']);
const fullName = `${props.firstName} ${props.lastName}`
// const fullName = props.firstName + " " + props.lastName

</script>

<template>
    <h1 class="text-2xl text-red-500">This is Inertia language</h1>
    <h2>Name: {{ firstName }} {{ lastName }}</h2>
    <h2>Email: {{ email }}</h2>
    <h2>Full Name: {{ fullName }}</h2>
    <h2>Address: {{ address }}</h2>
    <h2>Age: {{ $page.props.age }}</h2>
    <h2>Country: {{ $page.props.country }}</h2>

    <h2>Title: {{ siteConfig.title }}</h2>
    <h2>Batch: {{ siteConfig.batch }}</h2>
</template>



<style scoped></style>