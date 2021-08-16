<template>
    <div>
        <p>{{ quizzes }}</p>
        <main class="l-main" style="display:flex; flex-direction: column; align-items: center; justify-content: center;">
            <div class="p-quizzes">
                <div class="p-quizzes__child" v-if="!completed">
                    <h2 class="p-heading">第 {{ quizIndex + 1 }} 問</h2>
                    <!--
                                <img class="p-quizzes__image" src="images/sample_752×564.png" alt="">
                                -->
                    <div class="p-button-group p-button-group--column">
                        <button class="p-button" type="button" v-for="nation in currentQuiz.nations" v-bind:key="nation.code" @click="onClickAnswer(nation.name)">
                                            {{ nation.name }}
                                        </button>
                    </div>
                </div>
                <div class="p-quizzes__child" v-if="completed">
                    <h2 class="p-heading">最終結果</h2>
                    <ul class="p-list--large">
                        <li class="p-list__item" v-for="answer in answers" v-bind:key="answer.index">
                            第 {{ answer.index + 1 }} 問
                            <ul class="p-list">
                                <li class="p-list__item" v-for="nation in quizzes[answer.index].nations" v-bind:key="nation.code">
                                    {{ nation.name }}
                                </li>
                            </ul>
                            <span v-if="answer.isCorrect === true">正解！({{ quizzes[answer.index].correct }})</span>
                            <span v-if="answer.isCorrect === false">不正解<br>正解は「{{ quizzes[answer.index].correct }}」でした。</span>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            answers: [],
            quizIndex: 0,
            quizzes: [],
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
        },
        completed() {
            return (this.quizzes.length === this.answers.length);
        }
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
                });
        },
        onClickAnswer(name) {
            let isCorrect = null;

            if (name === this.currentQuiz.correct) {
                isCorrect = true
            } else {
                isCorrect = false
            }

            const answer = { index: this.quizIndex, id: this.currentQuiz.id, isCorrect: isCorrect }

            this.answers.push(answer)

            console.log(this.answers.length)

            if (!this.completed) {
                this.quizIndex++;
            }
        }
    },
    mounted() {
        this.getQuizzes();
    },
};
</script>

<style lang="scss" scoped>

</style>
