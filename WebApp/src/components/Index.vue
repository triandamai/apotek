<template>
  <div id="app">
  </div>
</template>

<script>
import Aut from '../App/Aut.js'
// import axios from 'axios'
export default {
  name: 'app',
  created () {
    // this.GetCokies();
  },
  mixins: [Aut],
  data () {
    return {
      active: true
    }
  },
  mounted () {
    this.$parent.$on('toggleNav', (Active) => {
      console.log('resyivd')
      this.active = !this.active
    })
  },
  methods: {
    toggleNav () {
      this.$parent.$emit('toggleNav')
    }
  }
}
</script>

<style>
/* 
#app {
  display: flex;
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #32383f;
  margin-top: 60px;
}
#sidebar {
  display: flex;
  width: 20em;
  background: #5c9feb;
  height: 100vh;
}
#sidebar.active{
  display: block;
}
#sidebar a{
  display: block;
  padding: 10px 5px;
  color: rgb(56, 56, 56);
}
#content{
  display: flex;
  align-items: stretch;
  flex-direction: column;
  width: 100vw;
} */
</style>
