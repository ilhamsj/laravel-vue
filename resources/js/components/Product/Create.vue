<template>
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Create</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Basic Form Elements</div>
          <div class="panel-body">
            <form @submit.prevent="store">
              <div class="form-group">
                <label>Name</label>
                <input v-model="post.name" type="text" name="name" class="form-control" />
              </div>
              <div class="form-group">
                <label>Price</label>
                <input v-model="post.price" type="number" name="price" class="form-control" />
              </div>

              <div class="form-group">
                <label>Selects</label>
                <select name="category_id" class="form-control" v-model="post.category_id">
                  <option
                    v-for="item in categories"
                    :key="item.id"
                    v-bind:value="item.id"
                  >{{ item.name }}</option>
                </select>
              </div>
              <button class="btn btn-outline btn-primary">Save</button>
            </form>
          </div>
          <div class="panel-body">{{ this.post.category }}</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      categories: [],
      post: {}
    };
  },
  created() {
    this.getItem;
  },
  props: ["errors"],
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
  },
  methods: {
    store() {
      axios
        .post("/api/v1/products", this.post)
        .then(response => {
          console.log(response);
          this.$router.push({ name: "products.index" });
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
