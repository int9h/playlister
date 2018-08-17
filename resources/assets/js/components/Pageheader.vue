<template><div>
<section class="hero header">
  <div class="hero-head">
    <header class="nav">
      <div class="container">
        <div class="nav-left">
          <a class="nav-item is-brand" href="/">
            <router-link class="nav-item" to="/" exact>Home</router-link>
          </a>
        </div>
        <span class="nav-toggle" :class="{ 'is-active': menuVisible }" @click="toggleMenu">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </div>
    </header>
  </div>
</section>

</div></template>

<script>
export default {
  name: 'Pageheader',
  data () {
    return {
      menuVisible: false
    }
  },
  methods: {
    toggleMenu () {
      this.menuVisible = !this.menuVisible
    }
  }
}
</script>
