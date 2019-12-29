<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <form action>
          <div class="row flex-row-reverse">
            <div class="form-group col align-self-end text-right">
              <router-link :to="{ name: 'products.create' }" class="btn btn-primary">New Data</router-link>
            </div>
            <div class="form-group col">
              <label for>Search Product</label>
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
                <th>Price</th>
                <th>Category</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody v-for="(item, index) in products" :key="index">
              <tr>
                <td>{{ index }}</td>
                <td>{{ item.name }}</td>
                <td>{{ item.price }}</td>
                <td>{{ item.category }}</td>
                <td>
                  <router-link
                    :to="{name: 'products.edit', params: {id: item.id}}"
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
      products: []
    };
  },
  methods: {
    deleteItem(id) {
      var url = `/api/v1/products/${id}`;
      axios
        .delete(url)
        .then(response => {
          alert("Yakin ?");
          let index = this.products.findIndex(products => products.id == id);
          this.products.splice(index, 1);
        })
        .catch(err => {
          console.error(err);
        });
    }
  },
  computed: {
    getItem() {
      axios
        .get("/api/v1/products")
        .then(res => {
          this.products = res.data.data;
        })
        .catch(err => {
          console.error(err);
        });
    }
  }
};
</script>