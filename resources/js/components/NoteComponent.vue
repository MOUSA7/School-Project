<template>
    <div>
    <button @click="CreateModal" class="btn btn-primary btn-block">Create Note</button>


    <table class="table" v-if="notes">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Content</th>

        </tr>
        </thead>
        <tbody>
        <tr v-for="(note ,index) in notes">
            <td>{{index +1}}</td>
            <td>{{note.title}}</td>
            <td>{{note.content}}</td>
            <td><button @click="UpdateModal(index)" class="btn btn-primary">Edit</button></td>
            <td><button @click="DeleteModal(index)"  class="btn btn-danger">Delete</button></td>
        </tr>
        </tbody>
    </table>
           <!-- Create Modal-->
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
                            <input v-model="note.title" type="text" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <input v-model="note.content" type="text" id="content" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button"@click="CreateNote" class="btn btn-primary">Save changes</button>
                        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Create Modal-->
        <div class="modal" id="update-modal" tabindex="-1" role="dialog">
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
                            <input v-model="new_update_note.title" type="text" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <input v-model="new_update_note.content" type="text" id="content" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button"@click="UpdateNote" class="btn btn-primary">Save changes</button>
                        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {

        data(){
            return{
                note:{
                    title:'',
                    content:''
                },
                notes:[],
                uri:'http://localhost:8000/admin/note/',
                errors:[],
                new_update_note:[]
            }

        },
        methods:{

            CreateModal(){
              $('#create-modal').modal('show');
            },
            UpdateModal(index){
                this.errors =[];
                $('#update-modal').modal('show');
                this.new_update_note = this.notes[index]
            },
            DeleteModal(index){
                let confirmbox =confirm('Are you Sure to Delete this Note');

                if (confirmbox == true){
                    axios.delete(this.uri + this.notes[index].id)
                        .then(response=>{
                           this.$delete(this.notes,index)
                        }).catch(error=>{
                            console.log("Could Not Delete for Some reason ")
                    });
                }
            },
            CreateNote(){
              // console.log(this.note.title);
                axios.post(this.uri,{title: this.note.title,content: this.note.content}).then(response=>{
                    this.notes.push(response.data.note);
                    $('#create-modal').modal('hide');
                }).catch(error=>{

                    this.errors = [];

                    if (error.response.data.errors.title){
                        this.errors.push(error.response.data.errors.title[0])
                    }
                    if (error.response.data.errors.content){
                        this.errors.push(error.response.data.errors.content[0])
                    }
                })
            },

            UpdateNote(){
                axios.patch(this.uri + this.new_update_note.id,{

                        title:this.new_update_note.title,
                        content:this.new_update_note.content,

                }).then(response=>{
                    $('#update-modal').modal('hide');

                }).catch(error=>{
                    this.errors = [];

                    if (error.response.data.errors.title){
                        this.errors.push(error.response.data.errors.title[0])
                    }
                    if (error.response.data.errors.content){
                        this.errors.push(error.response.data.errors.content[0])
                    }
                });
            },

            loadNote(){
                  axios.get(this.uri).then(response=>{
                      this.notes = response.data.notes

                  });
              }
            },
            name: "NoteComponent"


            ,mounted(){
         this.loadNote();
        }
    }
</script>

<style scoped>

</style>
