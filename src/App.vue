<script setup>
import { RouterLink, RouterView } from 'vue-router'
import HelloWorld from './components/HelloWorld.vue'
import 'bootstrap/dist/css/bootstrap.min.css';
import './assets/main.css';
</script>

<template>
  <div class="container" style="max-width: 760px">
    <header>
      <div id="logo" style="width:400px; margin:20px 0;">
        <img src="@/assets/ann-sofie-jarnheimer-logo.svg" width="80" height="80"
             alt="Ann-Sofie Jarnheimer " style="float: left"/>
        <div style="float:left;width:300px; display:block; margin: 14px 0 0 20px">
          <h3>Ann-Sofie Jarnheimer</h3>
          <p>leg. psykoterapeut, leg. fysioterapeut</p>
        </div>
        <br clear="both">
      </div>

        <nav>
          <RouterLink to="/" class="d-none d-sm-inline">Start</RouterLink>
          <RouterLink to="/forelasningar">Föreläsning</RouterLink>
          <RouterLink to="/kurser">Kurser</RouterLink>
          <RouterLink to="/kompetens">Kompetens</RouterLink>
          <RouterLink to="/kontakt">Kontakt</RouterLink>
        </nav>

    </header>


    <!-- Content of the column -->
    <div class="content">
      <RouterView/>
    </div>
  </div>


</template>

<style scoped>

#logo h3
{
  font-size: 20px;
  margin-bottom: 0;
}

#logo p
{
  color: #666666;
  font-size: 14px;
}

</style>
