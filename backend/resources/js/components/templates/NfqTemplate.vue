<template>
  <div class="l-page-wrapper">
    <div class="l-header">
      <Header></Header>
    </div>
    <main class="l-main">
      <slot name="main"></slot>
    </main>
    <div class="l-footer"></div>
  </div>
</template>

<script>
import Header from "../organisms/Header.vue";
export default {
  components: {
    Header,
  },
  name: "NfqTemplate",
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
    padding-top: 104px;
  }
}
</style>