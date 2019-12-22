<template>
  <div id="app">
    <router-link :to="{name: 'home'}">Home</router-link>
    <router-link :to="{name: 'toys'}">toys</router-link>
    <router-link :to="{name: 'create'}">create</router-link>
    <router-view></router-view>
  </div>
</template>

<script>
export default {};
</script>
