<template>
  <div v-cloak>
    <header class="l-header">
      <Header></Header>
    </header>
    <main class="l-main">
      <router-view></router-view>
    </main>
  </div>
</template>

<script>
import Header from "./components/organisms/Header.vue";
export default {
  components: {
    Header,
  },
};
</script>

<style lang="scss" scoped>
[v-cloak] {
  display: none;
}

// ==========================================================================
// l-header
// ==========================================================================

.l-header {
    z-index: 10;
    position: fixed;
    top: 0;
    width: 100%;
    height: 80px;
}

// ==========================================================================
// Large
// ==========================================================================

@media screen and (min-width: 768px) {
    .l-header {
        height: 104px;
    }
}

// ==========================================================================
// l-main
// ==========================================================================

.l-main {
  width: 100%;
  padding-top: 80px;
}

// ==========================================================================
// Large
// ==========================================================================

@media screen and (min-width: 768px) {
  .l-main {
    margin-top: 104px;
  }
}
</style>