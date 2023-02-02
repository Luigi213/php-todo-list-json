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
            };
            if (this.lang.trim() != '' && this.lang != '') {
                axios.post(this.apiUrl, obj, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                }).then((response) => {
                    this.lang = '';
                    this.toDoList = response.data
                })
            }

        },
        deleteObject(index) {
            const delect = {
                element: index,
            };
            axios.post(this.apiUrl, delect, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.toDoList = response.data
            })
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