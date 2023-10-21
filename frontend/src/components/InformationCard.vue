<script>
export default {
    props: {
        id: Number,
        title: String,
        content: String,
        timestamp: String
    },
    data() {
        return {
        }
    },
    methods: {
    },
    mounted() {
    }
};
</script>

<template>
    <div class="card">
        <h2>{{ title }}</h2>
        <hr>
        <p>{{ content }}</p>
    </div>
</template>
  
<style scoped>
.card {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    margin: 10px;
    /* box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1); */
}
</style>
  