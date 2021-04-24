<template>
    <div>
        <p><b>{{title}}</b></p>
        <!-- v-on:submit.prevent="onSubmit" を追加 -->
        <form
        v-on:submit.prevent="onSubmit"
        >
        <span>ID : </span>
        <input
            type="text"
            placeholder="input your id"
            v-model="loginForm.loginId"
            >
            <p>
            Input loginId is {{ loginForm.loginId }}
            </p>
            <!-- ここから追加 -->
            <p class="error">
            {{ Validation.loginReult }}
            </p>
            <button v-on:click="checkFrom">
            送信する
            </button>
            <!-- ここまでを追加 -->
        </form>
    </div>
</template>

<script>
export default {
    props: {
        title : String
        },
    data: function() {
        return {
        loginForm:{
            loginId:null,
        },//ここにカンマを追加
        //ここから追加
        Validation:{
            loginReult: "",
        }
        //ここまでを追加
        }
    },//ここにカンマを追加
    //ここから追加
    methods: {
        checkFrom: function(event){
        var LoginId = false

        //IDの入力フォームのバリデーション
        if (!this.loginForm.loginId) {
            this.Validation.loginReult="ログインIDを入力してください"
        }
        else if(!this.checkString(this.loginForm.loginId)){
            this.Validation.loginReult="半角英数で入力してください"
        }else {
            LoginId = true
        }

        if(LoginId == true){
            this.Validation.loginReult=""
            alert('Hello,' + this.loginForm.loginId + '!');
        }
        event.preventDefault()
        },
        checkString: function(inputdata){
        var re = /^[A-Za-z0-9]*$/
        return re.test(inputdata);
        }
    }
    //ここまでを追加
}
</script>

<style scoped>
/* ここから追加 */
.error { color: red; }
/* ここまでを追加 */
</style>
