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
            formattedTimestamp: "",
        }
    },
    methods: {
        formatTimestamp() {
            const date = new Date(Date.parse(this.timestamp));
            const year = date.getFullYear();
            const month = date.getMonth() + 1;
            const day = date.getDate();
            const hours = date.getHours();
            const minutes = date.getMinutes();
            this.formattedTimestamp = `${year}年${month}月${day}日 ${hours}時${minutes}分`;
        }
    },
    mounted() {
        this.formatTimestamp()
    }
};
</script>

<template>
    <div class="card">
        <div class="card-header">
            <div class="card-title">{{ title }}</div>
            <div class="card-timestamp">{{ formattedTimestamp }}</div>
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
    min-width: 300px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.card-header {
    font-size: 1.5rem;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}
.card-timestamp {
    font-size: 1rem;
    color: #a1a1a1;
}
.card-content {
    font-size: 1rem;
}

.line-break {
    width: 80%;
    border: 1px solid #ddd;
}

@media only screen and (max-width: 800px) {
    .card-header {
        font-size: 1.2rem;
    }
    .card-timestamp {
        font-size: 0.8rem;
    }
    .card-content {
        font-size: 0.8rem;
    }
}
</style>
  