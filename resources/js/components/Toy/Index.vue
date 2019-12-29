<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <form action>
          <div class="row flex-row-reverse">
            <div class="form-group col align-self-end text-right">
              <router-link :to="{ name: 'create' }" class="btn btn-primary">New Data</router-link>
            </div>
            <div class="form-group col">
              <label for>Search</label>
              <input
                @keypress="searchToys"
                v-model="search"
                type="text"
                name="search"
                id="search"
                class="form-control"
                placeholder
                aria-describedby="helpId"
              />
            </div>
          </div>
        </form>
      </div>
      <div class="col-12 col-md-8">
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Color</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody v-for="toy in toys" :key="toy.id">
              <tr>
                <td scope="row">{{ toy.id }}</td>
                <td>{{ toy.name }}</td>
                <td>{{ toy.color }}</td>
                <td>
                  <router-link
                    :to="{name: 'edit', params: {id: toy.id}}"
                    class="btn btn-primary"
                  >Edit</router-link>
                  <a href v-on:click.prevent="deletePost(toy.id)" class="btn btn-danger">Delete</a>
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
      toys: [],
      search: ""
    };
  },
  mounted() {
    this.getPost();
  },
  methods: {
    searchToys() {
      console.log(this.search);
    },
    getPost() {
      axios
        .get("/api/toys")
        .then(response => {
          console.log(response);
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
        })
        .catch(err => {
          console.error(err);
        });
    }
  }
};
</script>
