<template>
  <section class="section" :class="classes">
    <div class="section_inner">
      <header class="section_header">
        <h2 class="section_title">
          {{ title }}
        </h2>
        <p class="section_sub-title">
          {{ sub_title }}
        </p>
      </header>
      <div class="section_content">
        <slot name="content"></slot>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Section',
  props: {
    title: {
      type: String
    },
    sub_title: {
      type: String
    },
    background_color: {
      type: String,
      default: 'chartreuse-yellow',
      validator(val) {
        return [
          'chartreuse-yellow',
          'sky-blue'
        ].includes(val);
      }
    }
  },
  computed: {
    classes() {
      return ['_' + this.background_color];
    }
  }
};
</script>

<style lang="scss" scoped>
.section {
  &._chartreuse-yellow {
    background-color: rgba(254, 242, 99, 0.24);
  }
  &._sky-blue {
    background-color: rgba(160, 216, 239, 0.24);
  }
  &_inner {
    max-width: 960px;
    padding: 32px 16px;
    margin: 0 auto;
  }
  &_title {
    font-size: 2.4rem;
    text-align: center;
  }
  &_sub-title {
    display: flex;
    align-items: center;
    max-width: 320px;
    margin: 8px auto 0;
    &::before,
    &::after {
      border-top: 1px solid;
      content: "";
      flex-grow: 1;
    }
    &::before {
      margin-right: 16px;
    }
    &::after {
      margin-left: 16px;
    }
  }
  &_content {
    margin-top: 16px;
  }
}
</style>