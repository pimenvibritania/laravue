<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Create New Post</div>

                    <div class="card-body">
                        <form >
                           <div class="form-group">
                              <input type="text" placeholder="Title..." class="form-control">
                           </div>
                           <div class="form-group">
                              <textarea type="text" rows="6" placeholder="Description..." class="form-control"></textarea>
                           </div>
                           <div class="form-group">
                              <router-link to="/" class="btn btn-warning">Cancel</router-link>
                              <button class="btn btn-success">Submit</button>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
