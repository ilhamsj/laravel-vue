<template>
  <div class="container">
    <div class="row justify-content-center" style="min-height: 100vh">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ message }}</div>
          <div :style="myStyle" class="card-body">{{ reverseMessage }}</div>
          <div class="card-body">{{ now }}</div>
          <div class="card-body">
            <div v-if="this.toys.length > 3">Now you see me</div>
            <div v-else>{{ this.toys.length }}</div>
          </div>
          <div class="card-body">
            <ul v-for="(item, index) in toys" :key="index">
              <li @click="deleteItem(index)">{{ `${index} ${item.name} ${item.id}` }}</li>
            </ul>
          </div>
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
    //
  },
  data() {
    return {
      message: "Dog",
      toys: [],
      myStyle: {
        color: "red",
        fontSize: "30px"
      }
    };
  },
  methods: {
    deleteItem(index) {
      console.log(index);
      this.toys.splice(index, 1);
    }
  },
  computed: {
    getToy() {
      axios
        .get("/api/toys")
        .then(res => {
          this.toys = res.data.data;
        })
        .catch(err => {
          console.error(err);
        });
    },
    reverseMessage() {
      return this.message
        .split("")
        .reverse()
        .join("");
    },
    now() {
      return Date.now();
    }
  }
  /*
  function => () => {

  }
  */
};
</script>