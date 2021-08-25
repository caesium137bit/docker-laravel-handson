<template>
  <button
    type="button"
    @click="$emit('click')"
    class="BaseButton"
    :class="classes"
    :disabled="disabled || loading"
  >
    <span v-if="loading">読み込み中…</span>
    <slot v-else></slot>
  </button>
</template>

 <script>
export default {
  name: "NfqButton",
  props: {
    type: {
      type: String,
      default: "primary",
      validator(val) {
        return ["primary", "second"].includes(val);
      },
    },
    size: {
      type: String,
      default: "middle",
      validator(val) {
        return ["small", "middle", "large"].includes(val);
      },
    },
    loading: {
      type: Boolean,
      default: false,
    },
    disabled: {
      type: Boolean,
      default: false,
    },
  },
  computed: {
    classes() {
      return ["_" + this.type, "_" + this.size];
    },
  },
};
</script>

<style lang="scss" scoped>
@import "../../sass/foundation/_f-variables.scss";

.BaseButton {
  position: relative;
  display: inline-block;
  padding: 1rem 3rem;
  cursor: pointer;
  transition: all 0.3s;
  text-align: center;
  vertical-align: middle;
  letter-spacing: 0.2rem;
  border-radius: 100vh;
  border: 0.2rem solid #fff;
  box-shadow: 0 0.8rem 1.6rem rgba(0, 0, 0, 0.3);
  &:hover,
  &:focus {
    transform: translate(0, 4px);
    box-shadow: 0 0.6rem 1.2rem rgba(0, 0, 0, 0.2);
  }
  &:active {
    transform: translate(0, 4px);
    box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.1);
  }
}

/* size */
.BaseButton._small {
  height: 24px;
  font-size: 0.8rem;
}
.BaseButton._middle {
  height: 32px;
  font-size: 1.6rem;
}
.BaseButton._large {
  height: 40px;
  font-size: 2.4rem;
}

/* type */
.BaseButton._primary {
  background-image: linear-gradient(
    to right,
    $main-color 0%,
    $second-color 100%
  );
  color: $white;
}
.BaseButton._second {
  background-image: linear-gradient(
    to right,
    $second-color 0%,
    $main-color 100%
  );
  color: $white;
}
</style>
