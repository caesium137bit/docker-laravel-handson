<template>
  <section class="p-section p-section--chartreuse-yellow">
    <div class="p-section__inner">
      <header class="p-section__header">
        <h2 class="p-section__title">
          <slot name="title"></slot>
        </h2>
        <p class="p-section__sub-title">
          <slot name="sub-title"></slot>
        </p>
      </header>
      <div class="p-section__content">
        <slot name="content"></slot>
      </div>
    </div>
  </section>

  <!--
  <section class="p-section p-section--chartreuse-yellow">
    <div class="p-section__inner">
      <header class="p-section__header">
        <h2 class="p-section__title">About</h2>
        <p class="p-section__sub-title">国旗辞典について</p>
      </header>
      <div class="p-section__content">
        <div class="c-flex">
          <img
            class="c-flex__item c-flex__item-sm-12 c-flex__item-lg-6"
            src="images/sample_752×564.png"
            alt=""
            width="752"
            height="564"
          />
          <p class="c-flex__item c-flex__item-sm-12 c-flex__item-lg-6">
            ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
          </p>
        </div>
        <div class="u-mt-16 u-text-center">
          <button class="p-button"><a href="/gallery">詳しくはこちら</a></button>
        </div>
      </div>
    </div>
  </section>

  <section class="p-section p-section--sky-blue">
    <div class="p-section__inner">
      <header class="p-section__header">
        <h2 class="p-section__title">Contact</h2>
        <p class="p-section__sub-title"></p>
      </header>
      <div class="p-section__content">
        <div class="c-flex">
          <img
            class="c-flex__item c-flex__item-sm-12 c-flex__item-lg-6"
            src="images/sample_752×564.png"
            alt=""
            width="752"
            height="564"
          />
          <p class="c-flex__item c-flex__item-sm-12 c-flex__item-lg-6">
            ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
          </p>
        </div>
        <div class="u-mt-16 u-text-center">
          <button class="p-button"><a href="/gallery">お問い合わせはこちら</a></button>
        </div>
      </div>
    </div>
  </section>
-->
</template>

<script>
export default {
};
</script>

<style lang="scss" scoped>
</style>