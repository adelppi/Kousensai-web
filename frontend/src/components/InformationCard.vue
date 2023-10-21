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
        <div class="card-header">
            <div class="card-title">{{ title }}</div>
            <div class="card-timestamp">{{ timestamp }}</div>
        </div>
        <div class="line-break"></div>
        <div class="card-body">
            <p class="card-content">{{ content }}</p>
        </div>
    </div>
</template>
  
<style scoped>

.card {
    width: 45%;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
}

.card-header {
    width: 100%;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}

.line-break {
    width: 80%;
    border: 1px solid #ddd;
}

</style>
  