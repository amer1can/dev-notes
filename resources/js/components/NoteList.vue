<template>
    <div class="container">
        <div class="row flex-wrap">
            <h1 class="text-uppercase text-center">{{ list[0].category }} ({{ list.length }})</h1>
            <div class="col-md-4" v-for="item in list" :key="item.id">
                <div class="card mt-3">
                    <div class="card-header bg-dark text-white" :class="item.auth_only ? 'bg-opacity-50' : ''">{{ item.title }}</div>

                    <div class="card-body">
                        {{ item.text.substr(0,150) + '...' }}
                    </div>

                    <div class="card-footer d-flex flex-column">
                        <div class="d-flex flex-wrap align-items-center">
                            <span class="badge rounded-pill bg-danger m-1"
                                  v-for="(tag,i) in item.tags"
                                  :key="i"
                            >{{ tag }}</span>
                        </div>
                        <small class="text-end"><i>Created: {{ item.created_at }}</i></small>
                    </div>

                    <a :href="`/notes/${item.id}`"
                       class="text-center border-top link-warning"
                    >Читать</a>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "NoteList",
    props: ['list'],
}
</script>

<style scoped>

</style>
