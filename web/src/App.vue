<template>
  <div id="app">
    <div id="nav">
        <button  @click="$router.go(-1)"><i class="fas fa-arrow-left"></i></button>
       <button  @click="$router.go(1)"><i class="fas fa-arrow-right"></i></button>

      <button>
        <router-link to="/">Team Management</router-link> 
      </button>
     <button>
        <router-link to="/about">Go To Match</router-link>
     </button>
     
    </div>
    <router-view/>
  </div>
</template>

<style>
*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
::-webkit-scrollbar{
  display: none;
}
#app {
color: white;
margin: 0;
padding: 0;
box-sizing: border-box;
background:linear-gradient(to bottom, rgba(116, 115, 115, 0.52), rgba(24, 17, 17, 0.73)), url(assets/gd.jpg) no-repeat center;
  background-size: cover;
}

#nav {
height: auto;
width: 100%;
display: flex;
justify-content: center;
position: sticky;
top: 0px;
}
 
#nav button {
  font-weight: bold;
  color: #cec2c2;
  text-decoration: none;
  height: 100%;
  padding: 10px;
  background: linear-gradient(to right, #141e30, #243b55); 
  border: 0.2px solid white;
}
#nav button a{
  text-decoration: none;
  color: white;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
