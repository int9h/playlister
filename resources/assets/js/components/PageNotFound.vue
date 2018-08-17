<template><div>

<app-header></app-header>

<section>
  <div class="container">
    <h1 class="title is-1">Oops, something bad happened...</h1>
    <div class="notification is-danger">
      404 Error: Page not found!
    </div>
  </div>
</section>

</div></template>

<script>
import AppHeader from './Pageheader'

export default {
  name: 'pageNotFound',
  components: {
    AppHeader
  }
}
</script>
