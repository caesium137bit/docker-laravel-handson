<template>
  <div>
    <!--
    <p>{{ quizzes }}</p>
    -->
    <main
      class="l-main"
      style="
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      "
      v-if="!isLoading"
    >
      <div class="p-quizzes">
        <div class="p-quizzes__child" v-if="!completed">
          <h2 class="p-heading">第 {{ quizIndex + 1 }} 問</h2>
          <!--
          <img class="p-quizzes__image" src="images/national_flags/jp.png" alt="" />
          -->
          <img
            class="p-quizzes__image"
            :src="'images/national_flags/' + currentQuiz.answer_code + '.png'"
            alt=""
          />
          <div class="p-button-group p-button-group--column">
            <NfqButton
              v-for="nation in currentQuiz.nations"
              v-bind:key="nation.code"
              @click="onClickAnswer(nation.name)"
            >
              {{ nation.name }}
            </NfqButton>
          </div>
        </div>
        <div class="p-quizzes__child" v-if="completed">
          <h2 class="p-heading">最終結果</h2>
          <ul class="p-list--large">
            <li
              class="p-list__item"
              v-for="answer in answers"
              v-bind:key="answer.index"
            >
              第 {{ answer.index + 1 }} 問
              <ul class="p-list">
                <li
                  class="p-list__item"
                  v-for="nation in quizzes[answer.index].nations"
                  v-bind:key="nation.code"
                >
                  {{ nation.name }}
                </li>
              </ul>
              <span v-if="answer.isCorrect === true"
                >正解！({{ quizzes[answer.index].correct }})</span
              >
              <span v-if="answer.isCorrect === false"
                >不正解<br />正解は「{{
                  quizzes[answer.index].correct
                }}」でした。</span
              >
            </li>
          </ul>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
import NfqButton from "../atoms/NfqButton.vue";
export default {
  components: {
    NfqButton,
  },
  data: function () {
    return {
      isLoading: true,
      answers: [],
      quizIndex: 0,
      quizzes: [],
      code: "cn",
      /*
            quizzes: [{
                    correct: "日本",
                    nations: [{
                            code: "jp",
                            name: "日本",
                        },
                        {
                            code: "us",
                            name: "アメリカ",
                        },
                    ],
                },
                {
                    correct: "中国",
                    nations: [{
                            code: "cn",
                            name: "中国",
                        },
                        {
                            code: "ca",
                            name: "カナダ",
                        },
                    ],
                },
            ],
            */
    };
  },
  computed: {
    /*
          quizIds() {
              return [1, 2, 3];
              //return this.$route.params.id;
          },
        */
    currentQuiz() {
      return this.quizzes[this.quizIndex];
      //return this.quizzes[2];
    },
    completed() {
      return this.quizzes.length === this.answers.length;
    },
  },
  methods: {
    getQuizzes() {
      //const url = 'api/quizzes'
      const url = "api/quizzes";
      const params = {
        ids: [1, 2, 3],
      };
      //const ids = this.quizIds;
      //console.log('デバッグ' + ids)

      axios
        .get(url, {
          params: params,
        })
        .then((response) => {
          this.quizzes = response.data;
        })
        .catch((error) => {
          alert("次のエラーにより問題の読み込みに失敗しました。" + error);
        })
        .finally(() => {
          console.log(this.quizzes);
          this.isLoading = false;
        });
    },
    onClickAnswer(name) {
      let isCorrect = null;

      if (name === this.currentQuiz.correct) {
        isCorrect = true;
      } else {
        isCorrect = false;
      }

      const answer = {
        index: this.quizIndex,
        id: this.currentQuiz.id,
        isCorrect: isCorrect,
      };

      this.answers.push(answer);

      console.log(this.quizzes[this.quizIndex]);

      if (!this.completed) {
        this.quizIndex++;
      }
    },
  },
  created() {
    this.getQuizzes();
  },
  /*
  mounted() {
    this.getQuizzes();
  },
  */
};
</script>

<style lang="scss" scoped>
@import "../../sass/foundation/_f-variables.scss";

.p-quizzes {
  width: 320px;
  padding: 48px;
  border-radius: 8%;
  background: #faffff;
  box-shadow: 6px 6px 12px #646666, -6px -6px 12px #ffffff;
  &__child {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-self: center;
    & > *:not(:first-child) {
      margin-top: 32px;
    }
  }
  &__image {
    border: 1px solid $black;
  }
}

.p-button-group {
  display: flex;
  align-items: center;
  justify-content: center;
  &--column {
    flex-direction: column;
    & > * {
      width: 100%;
      &:not(:first-child) {
        margin-top: 8px;
      }
    }
  }
  &--row {
    flex-direction: row;
    & > * {
      margin: 0 8px;
    }
  }
}

.p-list {
  &__item {
    padding: 8px;
    &::before {
      content: "";
      width: 8px;
      height: 8px;
      display: inline-block;
      background-color: $accent-color;
      border-radius: 50%;
    }
  }
}
</style>
