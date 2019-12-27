<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h3>Toys</h3>
        <ul v-for="toy in toys" :key="toy.id">
          <li>
            {{ toy.id }}
            {{ toy.name }}
            {{ toy.color }}
            <router-link :to="{name: 'edit', params: {id: toy.id}}">Edit</router-link>
            <button type="button" class="btn btn-primary" @click="deletePost(toy.id)">Delete</button>
          </li>
        </ul>
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
  created() {
    this.getPost();
  },
  methods: {
    getPost() {
      axios
        .get("/api/toys")
        .then(response => {
          this.toys = response.data.data;
          console.log(response.data.data);
        })
        .catch(err => {
          console.error(err);
        });
    },
    showPost(id) {
      var url = `/api/toys/${id}`;
      axios
        .get(url)
        .then(response => {
          console.log(response.data);
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
          console.log(index);
        })
        .catch(err => {
          console.error(err);
        });
    }
  }
};
</script>
