<template>
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-7">
        <div class="panel panel-default">
          <div class="panel-heading">DataTables Advanced Tables</div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                  </tr>
                </thead>
                <tbody v-for="(item, index) in toys" :key="index">
                  <tr>
                    <td>{{ item.name }}</td>
                    <td>{{ item.color }}</td>
                    <td>
                      <router-link
                        :to="{name: 'toys.edit', params: {id: item.id}}"
                        class="btn btn-primary btn-circle"
                      >
                        <i class="fa fa-pencil"></i>
                      </router-link>
                      <a
                        href
                        v-on:click.prevent="deleteItem(item.id)"
                        class="btn btn-danger btn-circle"
                      >
                        <i class="fa fa-times"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
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
    this.getItem;
  },
  data() {
    return {
      toys: [],
      no: 1
    };
  },
  methods: {
    deleteItem(id) {
      var status = confirm("Are you sure ?");

      if (status) {
        var url = `/api/toys/${id}`;
        axios
          .delete(url)
          .then(response => {
            let index = this.toys.findIndex(toys => toys.id == id);
            this.toys.splice(index, 1);
            alert("Delete Success");
          })
          .catch(err => {
            console.error(err);
          });
      }
    }
  },
  computed: {
    getItem() {
      axios
        .get("/api/toys")
        .then(res => {
          this.toys = res.data.data;
        })
        .catch(err => {
          console.error(err);
        });
    }
  }
};
</script>