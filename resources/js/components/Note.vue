<template>
    <div class="row">
        <button @click="CreateModel" class="btn btn-primary col-sm-10">Add Note</button>

        <table class="table" v-if="notes">
            <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>body</th>

            </tr>
            </thead>
            <tbody>
            <tr  v-for="(note,index) in notes">
                <td>{{note +1}}</td>
                <td>{{note.name}}</td>
                <td>{{note.body}}</td>
                <td><button @click="UpdateModal(index)" class="btn btn-info">Edit</button></td>
                <td><button @click="deletetask(index)" class="btn btn-danger">Delete</button></td>
            </tr>
            </tbody>
        </table>


        <div class="modal" id="create-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Note</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" v-if="errors.length >0">
                            <ul>
                                <li v-for="error in errors">{{error}}</li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" v-model="note.title" id="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="content">Content</label>
                            <input type="text" v-model="note.content" id="content" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button"@click="CreateNote" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




</template>

<script>
    export default {
        name: "Note",
        data(){

            return{
                note:{
                    title:'',
                    content:''
                },
                notes:[],
                uri:'http://localhost:8000/admin/note',
                errors: [],
            }
        },

        methods:{
            CreateModel(){
                $("#create-modal").modal('show');
    },

            CreateNote(){
                axios.post(this.uri,{title: this.note.title,content: this.note.content}).then(response=>{
                    this.notes.push(response.data.note);
                    $("#create_modal").modal("hide");

                });

            },

            loadtask(){
                axios.get(this.uri).then(response=>{
                    this.notes = response.data.notes;
                });
            }
        },

        mounted(){
            this.loadtask();
        }
    }

</script>

<style scoped>

</style>
