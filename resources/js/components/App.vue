<template>
  <div id="app">
    <nav class="navbar navbar-expand-sm navbar-light bg-light shadow-sm mb-4">
      <div class="container">
        <router-link :to="{ name: 'home' }" class="navbar-brand">
          <b>Sistem Kasir</b>
        </router-link>

        <button
          class="navbar-toggler d-lg-none"
          type="button"
          data-toggle="collapse"
          data-target="#collapsibleNavId"
          aria-controls="collapsibleNavId"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <router-link :to="{ name: 'toys.index' }" class="nav-link">Toys</router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'toys.index' }" class="nav-link">Kasir</router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'toys.index' }" class="nav-link">Product</router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'toys.index' }" class="nav-link">Transaksi</router-link>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="dropdownId"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >Account</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="#">Login</a>
                <a class="dropdown-item" href="#">Register</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <router-view></router-view>
  </div>
</template>

<script>
export default {
  data() {
    return {
      menus: "home"
    };
  }
};
</script>