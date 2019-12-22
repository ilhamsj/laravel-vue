<template>
  <div id="app">
    <nav class="navbar justify-content-center border-bottom mb-4">
      <li class="nav-link">
        <router-link :to="{name: 'home'}">Home</router-link>
      </li>
      <li class="nav-link">
        <router-link :to="{name: 'toys'}">Toys</router-link>
      </li>
      <li class="nav-link">
        <router-link :to="{name: 'create'}">Create</router-link>
      </li>
    </nav>
    <router-view></router-view>
  </div>
</template>

<script>
export default {};
</script>
