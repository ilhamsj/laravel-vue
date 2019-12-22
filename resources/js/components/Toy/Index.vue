<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h3>Toys</h3>
        <ul v-for="toy in toys" :key="toy.id">
          <li>{{ toy.name }}</li>
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
    let url = "/api/toys";
    this.axios.get(url).then(response => {
      this.toys = response.data.data;
    });
  }
};
</script>
