<template>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Tags</th>
            <th scope="col">Created at</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="note in notes" :key="note.id">
            <th scope="row">{{ note.id }}</th>
            <td><a :href="`api/notes/${note.id}`">{{ note.title }}</a></td>
            <td>{{ note.tags }}</td>
            <td>{{ note.created_at }}</td>
            <td class="d-flex">
                <button class="btn btn-info mx-1">Edit</button>
                <button @click="deleteNote(note.id)" class="btn btn-dark mx-1">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "DashboardList",
    data() {
        return {
            notes: []
        }
    },
    mounted() {
        this.getList();
    },
    methods: {
        getList() {
            axios
                .get('/api/notes')
                .then(response => {
                    this.notes = response.data.data
                    console.log(this.notes)
                })
                .catch(error => console.log(error))
        },
        showNote(id) {
            axios
                .get('/api/notes/' + id)
        },
        deleteNote(id) {
            axios
                .delete('/api/notes/' + id)
                .then(response => console.log(response))
                .catch(error => console.log(error))

            this.notes.splice(id - 1, 1)
        }
    }

}
</script>

<style scoped>
</style>
