const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'serverList.php',
            toDoList: [],
        }
    },
    methods: {
        getList() {
            axios.get(this.apiUrl).then((response) => {
                this.toDoList = response.data
            })
        }
    },
    mounted() {
        this.getList()
    },
}).mount('#app')