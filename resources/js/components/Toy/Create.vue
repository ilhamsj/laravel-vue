<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Create</div>

          <div class="card-body">
            <form @submit.prevent="addPost">
              <div class="form-group">
                <input v-model="post.name" type="text" name="name" class="form-control" />
              </div>
              <div class="form-group">
                <input v-model="post.color" type="color" name="colo" class="form-control" />
              </div>

              <div class="form-group">
                <button class="btn btn-primary">Save</button>
              </div>
            </form>
            message is {{ post.name }}
            <br />
            color is {{ post.color }}
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      post: {}
    };
  },
  methods: {
    addPost() {
      console.log(this.post);
      axios
        .post("/api/toys", this.post)
        .then(res => {
          console.log(res);
        })
        .catch(err => {
          console.error(err);
        });
    }
  }
};
</script>