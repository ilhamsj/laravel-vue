<template>
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Product</h1>
      </div>
      <div class="col-lg-12" v-if="alert">
        <div class="alert alert-success">
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
            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
            <div class="pull-right">
              <div class="btn-group">
                <button
                  type="button"
                  class="btn btn-default btn-xs dropdown-toggle"
                  data-toggle="dropdown"
                >
                  Actions
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                  <li>
                    <router-link :to="{ name: 'products.create' }" class="nav-link">New Data</router-link>
                  </li>
                  <li>
                    <a href="#">Another action</a>
                  </li>
                  <li>
                    <a href="#">Something else here</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="#">Separated link</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="panel-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Catgory</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(item, index) in toys" :key="index">
                    <td>{{ item.name }}</td>
                    <td>{{ item.price }}</td>
                    <td>{{ item.category }}</td>
                    <td>{{ item.created_at }}</td>
                    <td>
                      <router-link
                        :to="{name: 'products.edit', params: {id: item.id}}"
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
      no: 1,
      alert: false
    };
  },
  methods: {
    deleteItem(id) {
      var status = confirm("Are you sure ?");

      if (status) {
        var url = `/api/v1/products/${id}`;
        axios
          .delete(url)
          .then(response => {
            let index = this.toys.findIndex(toys => toys.id == id);
            this.toys.splice(index, 1);
            this.alert = true;

            var self = this;
            setTimeout(function() {
              self.alert = false;
            }, 3000);
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
        .get("/api/v1/products")
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