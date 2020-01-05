<template>
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Create</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form @submit.prevent="addPost">
          <div class="form-group">
            <input v-model="post.name" type="text" name="name" class="form-control" />
          </div>
          <div class="form-group">
            <input v-model="post.color" type="color" name="colo" class="form-control" />
          </div>

          <div class="form-group">
            <button class="btn btn-outline btn-primary">Save</button>
          </div>
        </form>
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
  props: ["errors"],
  methods: {
    addPost() {
      console.log(this.post);
      axios
        .post("/api/toys", this.post)
        .then(response => {
          console.log(response);
          this.$router.push({ name: "toys.index" });
        })
        .catch(error => {
          var x = Object.values(error.response.data.errors);
          x.map((val, index) => {
            alert(val);
          });
        });
    }
  }
};
</script>