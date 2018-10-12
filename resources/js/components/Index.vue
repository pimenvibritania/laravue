<template>
   <div class="card">
      <div class="card-header">
        <router-link to="/create" class="btn btn-info float-right">Create New Post </router-link>
      </div>
      <div class="card-body">
        <table class="table table-bordered"> 
        <thead class="thead-darks">
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th width="100"></th>
            <th width="100"></th>
            <th width="100"></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="post in posts" >
            <td>{{post.title}}</td>
            <td>{{post.description}}</td>
            <td>
              <router-link :to = "{name : 'readPost', params:{id:post.id}}" class="btn btn-info"><i class="fa fa-eye"></i> Show</router-link>
            </td>
            <td><button class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
            <td><button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
          </tr>
        </tbody>
      </table>
      </div>
   </div>
</template>

<script>

export default {
  data() {
    return {
      posts: [],
      errors: []
    }
  },

  // Fetches posts when the component is created.
  created() {
    axios.get(`/posts`)
    .then(response => {
      // JSON responses are automatically parsed.
      this.posts = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })

  }
}
</script>