<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <form action>
          <div class="row flex-row-reverse">
            <div class="form-group col align-self-end text-right">
              <router-link :to="{ name: 'categories.create' }" class="btn btn-primary">New Data</router-link>
            </div>
            <div class="form-group col">
              <label for>Search Category</label>
              <input
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
      <div class="col-12">
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead class="thead-inverse">
              <tr>
                <th>Index</th>
                <th>Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody v-for="(item, index) in categories" :key="index">
              <tr>
                <td>{{ index }}</td>
                <td>{{ item.name }}</td>
                <td>
                  <router-link
                    :to="{name: 'categories.edit', params: {id: item.id}}"
                    class="btn btn-primary"
                  >Edit</router-link>
                  <a href v-on:click.prevent="deleteItem(item.id)" class="btn btn-danger">Delete</a>
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
  mounted() {
    //
  },
  created() {
    this.getItem;
  },
  data() {
    return {
      categories: []
    };
  },
  methods: {
    deleteItem(id) {
      var url = `/api/v1/categories/${id}`;
      axios
        .delete(url)
        .then(response => {
          alert("Yakin ?");
          let index = this.categories.findIndex(
            categories => categories.id == id
          );
          this.categories.splice(index, 1);
        })
        .catch(err => {
          console.error(err);
        });
    }
  },
  computed: {
    getItem() {
      axios
        .get("/api/v1/categories")
        .then(res => {
          this.categories = res.data.data;
        })
        .catch(err => {
          console.error(err);
        });
    }
  }
};
</script>