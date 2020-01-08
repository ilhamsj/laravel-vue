<template>
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Edit</h1>
      </div>
      <div class="col-lg-12" v-if="errored">
        <div class="alert alert-danger">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          <a
            href="#"
            class="alert-link"
          >Alert Link</a>.
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Basic Form Elements
            <span v-if="loading">Loading ...</span>
          </div>
          <div class="panel-body">
            <form @submit.prevent="productsUpdate">
              <div class="form-group has-error">
                <label for="name" class="control-label">Name</label>
                <input v-model="post.name" type="text" name="name" id="name" class="form-control" />
              </div>
              <div class="form-group has-success">
                <label for="price" class="control-label">Price</label>
                <input
                  v-model="post.price"
                  type="number"
                  name="price"
                  id="price"
                  class="form-control"
                />
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
      post: {},
      errored: false,
      loading: false
    };
  },
  created() {
    this.categoriesIndex();
    this.productsShow(this.$route.params.id);
  },
  props: ["errors"],
  computed: {},
  methods: {
    categoriesIndex() {
      axios
        .get("/api/v1/categories")
        .then(res => {
          this.categories = res.data.data;
        })
        .catch(err => {
          this.errored = true;
        });
    },
    productsShow(id) {
      axios
        .get(`/api/v1/products/${id}`)
        .then(res => {
          this.post = res.data.data;
        })
        .catch(err => {
          this.errored = true;
          var self = this;
          setTimeout(function() {
            self.errored = false;
          }, 3000);
        });
    },
    productsUpdate() {
      this.loading = true;
      axios
        .put(`/api/v1/products/${this.post.id}`, this.post)
        .then(res => {
          this.$router.push({ name: "products.index" });
          console.log(res);
        })
        .catch(err => {
          console.error(err);
        })
        .finally(() => (this.loading = false));
    }
  }
};
</script>
