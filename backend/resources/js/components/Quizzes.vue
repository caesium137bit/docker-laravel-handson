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
</template>

<script>
export default {
  data: function () {
    return {
      quizzes: [],
    };
  },
  computed: {
    quizIds() {
      return [1, 2, 3];
      //return this.$route.params.id;
    },
  },
  methods: {
    getQuizzes() {
      //const url = 'api/quizzes'
      const url = "api/quizzes";
      //const ids = this.quizIds;
      //console.log('デバッグ' + ids)

      axios
        .get(url, {
          params: {
            ids:[2,3]
        }
      })
        .then((response) => {
          this.quizzes = response.data;
        })
        .catch((error) => {
          alert(error + "問題の読み込みに失敗しました。");
        })
        .finally(() => {
          console.log(this.quizzes);
        });
    },
  },
  mounted() {
    this.getQuizzes();
  },
};
</script>

<style lang="scss" scoped>
</style>