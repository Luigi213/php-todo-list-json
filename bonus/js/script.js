const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'serverList.php',
            toDoList: [],
            lang: '',
        }
    },
    methods: {
        addList() {
            const obj = {
                language: this.lang,
                status: false,
            };
            axios.post(this.apiUrl, obj, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.lang = '';
                this.toDoList = response.data
            })

        },
        deleteObject(index) {
            this.toDoList.splice(index, 1);
        },
        listChange(index) {
            let change = this.toDoList[index];
            if (change.status === false) {
                change.status = true
            }
            else (
                change.status = false
            )
            return change
        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.toDoList = response.data;
        })
    },
}).mount('#app')