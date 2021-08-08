<template>
  <div class="p-hero">
    <img
      src="images/sample_1280×720.png"
      alt="ヒーロー"
      class="p-hero__image"
      width="1280"
      height="720"
    />
    <div class="p-hero__filter">
      <h1 class="p-hero__title">国旗辞典</h1>
      <p class="p-hero__subtitle">世界の国旗一覧</p>
    </div>
  </div>

  <Section title="About" sub_title="国旗辞典について" background_color="sky-blue">
    <template v-slot:content>
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
    </template>
  </Section>
</template>

<script>
import Section from "./organisms/Section.vue";
export default {
  components: {
    Section,
  },
};
</script>

<style lang="scss" scoped></style>