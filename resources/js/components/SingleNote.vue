<template>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-10">
                <h1 class="text-uppercase text-center">{{ note.title }}</h1>
                <p> {{ note.text }} </p>
            </div>
            <div class="col-2 d-flex flex-column justify-content-center align-items-center border py-4">
                <h3>Tags: </h3>
                <span class="badge rounded-pill bg-danger m-1"
                      v-for="(tag,i) in note.tags"
                      :key="i"
                >{{ tag }}</span>
                <h3 class="mt-4">Date:</h3>
                <span>{{ note.created_at }}</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SingleNote",
    props: ['note']
}
</script>

<style scoped>

</style>
