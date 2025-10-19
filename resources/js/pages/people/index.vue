<script lang="ts" setup>
import { router } from '@inertiajs/vue3'

defineProps(['people'])

function addNewPeople() {
    router.visit('/people/create')
}

function editPeople(id) {
    router.visit(`people/${id}/edit`)
}

function deletePeople(id) {
    if (confirm("Are you sure?")) {
        router.delete(`/people/${id}`)
    }
}

</script>

<template>
    <h1>All People List</h1>
    <button class="success" @click="addNewPeople">Add new People</button>

    <div style="color:green" v-if="$page.props.flash.success">
        {{ $page.props.flash.success }}
    </div>
    <div style="color:red" v-if="$page.props.flash.danger">
        {{ $page.props.flash.danger }}
    </div>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
        <tr v-for="person in people">
            <td>{{ person.id }}</td>
            <td>{{ person.name }}</td>
            <td>{{ person.email }}</td>
            <td>{{ person.age }}</td>
            <td>
                <button class="default" @click="editPeople(person.id)">Edit</button>
                <button class="danger" @click="deletePeople(person.id)">Delete</button>
            </td>
        </tr>
        <tr v-if="people.length == 0">
            <td colspan="5"> <strong>No People Found</strong> </td>

        </tr>
    </table>

</template>

<style></style>