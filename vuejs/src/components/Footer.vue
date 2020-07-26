<template>
<div class="footer">
<ul class="nav justify-content-center">
  <li class="nav-item">
    Made with Love <span class="heart">&#9829;</span>
  </li>
</ul>
</div>
</template>

<script>
export default {
    name:'footer-vue'
}
</script>
<style lang="scss">
.footer{
        color:white !important;
        background-image: linear-gradient(289deg, rgba(33, 87, 244, 0.87) 0%, #19c7da 100%);
        padding: 1rem 0;
}
.heart{
  margin-left:10px;
}
</style>