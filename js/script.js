const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'serverList.php',
            toDoList: [],
            language: ''
        }
    },
    methods: {
        addList() {
            let obj = {
                language: this.language,
                status: false
            };
            axios.post(this.apiUrl, obj, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).the((response))
            this.language = ''

        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.toDoList = response.data
        })
    },
}).mount('#app')