const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'serverList.php'
        }
    },
    methods: {
        getList() {
            axios.get(this.apiUrl).then((response) => {
                console.log(response.data)
            })
        }
    },
    mounted() {
        this.getList()
    },
}).mount('#app')