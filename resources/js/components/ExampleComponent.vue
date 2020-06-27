<template>
    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Item type</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="document in documents" :key="document.id">
                    <td>{{ document.id }}</td>
                    <td>{{ document.name }}</td>
                    <td>{{ document.type }}</td>
                    <td><button class="btn btn-danger">Delete</button></td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                documents: []
            }
        },

          created: function(){
            let uri = '/terapias/public/api/documents';
              this.axios.get(uri).then(response => {
                this.documents = response.data.data;
              });  

        }
    }
</script>
