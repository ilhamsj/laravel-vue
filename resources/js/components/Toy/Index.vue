<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Color</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody v-for="toy in toys" :key="toy.id">
              <tr>
                <td scope="row">{{ toy.id }}</td>
                <td>{{ toy.name }}</td>
                <td>{{ toy.color }}</td>
                <td>
                  <router-link :to="{name: 'edit', params: {id: toy.id}}">Edit</router-link>
                </td>
                <td>
                  <button type="button" class="btn btn-primary" @click="deletePost(toy.id)">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      toys: []
    };
  },
  mounted() {
    this.getPost();
  },
  methods: {
    getPost() {
      axios
        .get("/api/toys")
        .then(response => {
          this.toys = response.data.data;
        })
        .catch(err => {
          console.error(err);
        });
    },
    deletePost(id) {
      var url = `/api/toys/${id}`;
      axios
        .delete(url)
        .then(response => {
          let index = this.toys.findIndex(toys => toys.id == id);
          this.toys.splice(index, 1);
          // this.toys.splice(id, 1);
        })
        .catch(err => {
          console.error(err);
        });
    }
  }
};
</script>
