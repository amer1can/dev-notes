<template>
    <div>
        <form>
            <h1> {{ item.title }}</h1>
<!--            <input type="text" :value="note.title">-->
<!--            <textarea :value="note.text"></textarea>-->
        </form>
    </div>
</template>

<script>
export default {
    name: "DashboardForm",
    props: ['item']
}
</script>

<style scoped>

</style>
