<template>
    <div class="form" >

        <form @submit="OnSubmit" >
            
            <div class="form-group">
                <label for="titele">Title:</label>
                <input type="text" class="form-control" name="title" v-model="title">
            </div>

            <div class="form-group">
                <label for="titele">Task:</label>
                <input type="text" class="form-control" v-model="body" name="body">
            </div>
            <button class="btn btn-success">Create</button>

            
        </form> 
    </div>
</template>

<script>
export default {

data(){
return {
    body:"",
    title : ""
}
},

methods: {
    OnSubmit(){

   

        axios.post('/api/task/store',this.$data)
    .then(response => {
    alert('Success');
    })
    .catch(error => {console.log(error) ; })

    }
},
    
}
</script>