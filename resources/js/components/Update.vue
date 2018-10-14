<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header" style="text-align:center">Edit Post</div>

                    <div class="card-body">
                        <form v-on:submit="submitPostEdit()">
                           <div class="form-group">
                              <input type="text" placeholder="Title..." v-model="posts.title" class="form-control">
                           </div>
                           <div class="form-group">
                              <textarea type="text" rows="6" placeholder="Description..." v-model="posts.description"  class="form-control"></textarea>
                           </div>
                           <div class="form-group">
                              <router-link to="/" class="btn btn-outline-danger">Cancel</router-link>
                              <button class="btn btn-outline-success">Update</button>
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
  data:function() {
    return {
      posts: {
          title:'',
          description:'',
      },
      errors: []
    }
  },

created() { 

     let id = this.$route.params.id;
    axios.get(`/posts/` +id+ '/edit')
    .then(response => {
      this.posts = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })

  },

methods:{
    submitPostEdit() {
    let id = this.$route.params.id;
    axios.patch(`/posts/` +id, this.posts)
    .then(response => {
        console.log(response)
        this.$router.push({path:'/'})
        this.posts = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })

    
    }
  }
}
</script>