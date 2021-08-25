<template>
  <button
    type="button"
    class="hamburger"
    @click="drawer"
    aria-controls="global-nav"
    :aria-expanded="isActive ? 'true' : 'false'"
    aria-label="メニューを開閉する"
  >
    <span class="hamburger__line"> </span>
  </button>
</template>

<script>
import { ref } from "vue";
export default {
  setup() {
    const message = ref("Home");

    return {
      message,
    };
  },

  mounted() {
    console.log("Component mounted.");
  },
};
</script>

<style lang="scss" scoped>
.hamburger {
  display: inline-block;
  cursor: pointer;
  position: relative;
  width: 48px;
  height: 48px;
  border-radius: 50%;
  border: 4px solid #f9d8ae;
  transition: all 0.3s ease-in-out;
  z-index: 20;
  &:hover,
  &:focus {
    box-shadow: 0 0 8px rgba(255, 255, 255, 0.5);
  }
  &__line {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    width: 20px;
    height: 4px;
    background-color: #f9d8ae;
    transition: inherit;
    &::before,
    &::after {
      position: absolute;
      display: block;
      width: 100%;
      height: 100%;
      background-color: inherit;
      content: "";
      transition: inherit;
    }
    &::before {
      top: -6px;
    }
    &::after {
      top: 6px;
    }
  }
  &[aria-expanded="true"] {
    .hamburger__line {
      background-color: transparent;
      &::before,
      &::after {
        top: 0;
        background-color: #f9d8ae;
      }
      &::before {
        transform: rotate(45deg);
      }
      &::after {
        transform: rotate(-45deg);
      }
    }
  }
}

// ==========================================================================
// Large
// ==========================================================================

@media screen and (min-width: 768px) {
  .p-hamburger {
    display: none;
  }
}
</style>