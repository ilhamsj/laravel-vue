<template>
  <div class="container">
    <div class="row justify-content-center" style="min-height: 100vh">
      <div class="col-md-8">
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead class="thead-inverse">
              <tr>
                <th>Index</th>
                <th>Name</th>
                <th>ID</th>
              </tr>
            </thead>
            <tbody v-for="(item, index) in toys" :key="index">
              <tr @click="deleteItem(index)">
                <td scope="row">{{ index }}</td>
                <td>{{ item.name }}</td>
                <td>{{ item.id }}</td>
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
    this.getToy;
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
};
</script>