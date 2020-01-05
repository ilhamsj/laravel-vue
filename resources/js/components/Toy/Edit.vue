<template>
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Edit</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form @submit.prevent="updateToy">
          <div class="form-group">
            <input v-model="toy.name" type="text" name="name" class="form-control" />
          </div>
          <div class="form-group">
            <input v-model="toy.color" type="color" name="colo" class="form-control" />
          </div>

          <div class="form-group">
            <button class="btn btn-primary">Save</button>
          </div>
        </form>
        Message is {{ toy.name }}
        <br />
        Color is {{ toy.color }}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      toy: {}
    };
  },
  created() {
    this.showToy(this.$route.params.id);
  },
  methods: {
    showToy(id) {
      axios
        .get(`/api/toys/${id}`)
        .then(res => {
          this.toy = res.data.data;
          console.log(res.data);
        })
        .catch(err => {
          console.error(err);
        });
      console.log(id);
    },
    updateToy() {
      axios
        .put(`/api/toys/${this.toy.id}`, this.toy)
        .then(res => {
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