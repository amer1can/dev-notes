<template>
    <div class="container">
        <ul>
            <li class="list-unstyled" v-for="item in list" :key="item.id">
                <a :href="`/notes/${item.id}`">{{ item.title }}</a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "DashboardList",
    props: ['list']
}
</script>

<style scoped>

</style>
