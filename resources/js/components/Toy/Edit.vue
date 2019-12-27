<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Create</div>

          <div class="card-body">
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
            message is {{ toy.name }}
            <br />
            color is {{ toy.color }}
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
          this.$router.push({ name: "toys" });
        })
        .catch(err => {
          console.error(err);
        });
    }
  }
};
</script>