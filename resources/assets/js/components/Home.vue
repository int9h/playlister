<template><div>

<section class="hero header is-fullheight is-custom-gradient-1 is-bold">
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
        <!-- <div class="nav-right nav-menu" :class="{ 'is-active': menuVisible }">
          <span class="nav-item is-hidden-mobile">
            <a class="button is-info" href="https://github.com/neculaesei/Playlister">
              <span class="icon">
                <i class="fa fa-github"></i>
              </span>
              <span>GitHub</span>
            </a>
          </span>
        </div> //-->
      </div>
    </header>
  </div>
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Instantly create shareable playlists
      </h1>
      <h2 class="subtitle"></h2>
      <div class="content">
        <p class="cta">
          <router-link class="button is-info is-medium is-outlined" to="/play/new">
            <span class="icon">
              <i class="fa fa-play" aria-hidden="true"></i>
            </span>
            <span>Create a new playlist</span>
          </router-link>
          <a href="/play/f52399980bef9bed4dc20fc5e45da450" class="button is-info is-medium is-outlined">
            <span class="icon">
              <i class="fa fa-music" aria-hidden="true"></i>
            </span>
            <span>Example playlist</span>
          </a>
        </p>
      </div>
    </div>
  </div>
  <div class="hero-foot">
    <div class="container footer has-text-centered">
      <div class="content"></div>
      <i class="fa fa-angle-double-down" aria-hidden="true"></i>
    </div>
  </div>
</section>

</div></template>

<script>
export default {
  name: 'home',
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
