<template>
<div class="wrapper">
<h1 class="text-center" v-if="user.name">Страница Администратора {{ user.name }}</h1>

</div>
</template>

<script>
import auth from "../../services/auth/auth";
export default {
  name:'AdminPage',
  data() {
    return {
      user: {}
    }
  },
  created() {
    this.user = auth.user()
  }
}
</script>
<style scoped>
.wrapper{
  min-height: 800px;
}
</style>