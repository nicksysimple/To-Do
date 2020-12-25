<template>
    <div class="task" >
        <h1>Tasks</h1>
        <div class="card" v-for="task in tasks">
            <div class="card-header">
                {{task.title}}
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">{{ task.body}} </p>
                <a href="#" class="btn btn-danger" @click="removeTask">Delete</a>
            </div>
        </div>
        
    </div>
</template>
<script>
export default {

data(){

return{
    tasks : []
    }
},

methods: {
props: ['task'],
getTasks(){
    axios.get('/api/tasks')
    .then(response => {
    this.tasks = response.data
    })
    .catch( error => { console.log(error);})
},
removeTask(){

    axios.delete('/api/task/' +this.task.id)
    .then ( response => {
    if(response.status == 200 ) {
    this.$emit('taskChanged');
    }
    })
    .catch(error => {console.log(error);})
}
},

created() {
    this.getTasks();
},
}
</script>
<style scoped>
.tasks{

padding-top : 10px;
}
.card{
margin : 10px;
}
    
</style>