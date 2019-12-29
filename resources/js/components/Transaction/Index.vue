<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <form action>
          <div class="row flex-row-reverse">
            <div class="form-group col align-self-end text-right">
              <router-link :to="{ name: 'transactions.create' }" class="btn btn-primary">New Data</router-link>
            </div>
            <div class="form-group col">
              <label for>Search Transactions</label>
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
                <th>Total</th>
                <th>Pay</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody v-for="(item, index) in transactions" :key="index">
              <tr>
                <td>{{ index }}</td>
                <td>{{ item.customer }}</td>
                <td>{{ item.total }}</td>
                <td>{{ item.pay }}</td>
                <td>
                  <router-link
                    :to="{name: 'transactions.edit', params: {id: item.id}}"
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
      transactions: []
    };
  },
  methods: {
    deleteItem(id) {
      var url = `/api/v1/transactions/${id}`;
      axios
        .delete(url)
        .then(response => {
          alert("Yakin ?");
          let index = this.transactions.findIndex(
            transactions => transactions.id == id
          );
          this.transactions.splice(index, 1);
        })
        .catch(err => {
          console.error(err);
        });
    }
  },
  computed: {
    getItem() {
      axios
        .get("/api/v1/transactions")
        .then(res => {
          this.transactions = res.data.data;
        })
        .catch(err => {
          console.error(err);
        });
    }
  }
};
</script>