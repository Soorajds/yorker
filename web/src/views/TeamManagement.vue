<template>
  <div class="team-management">
      <div class="team-management-header">
        <h2>A's Team</h2>
  <router-link to="/about"><button class="btn btn-start-match">Start Match <i class="fas fa-flag-checkered"></i></button></router-link>
 
      </div>
      <div class="team-management-body">
        <div class="player-card">
          <div class="player-card-head">
            <img src="../assets/jersey.png" alt="">
            <div class="player-card-name">
               <h3><big>J</big>ohn <big>D</big>avidson <button class="btn edit-btn"> <i class="fas fa-pen"></i> </button> </h3>
               
               <p>23 yrs</p>
               <div style="display:flex;margin-top:5px">
                 <span class="bat-role">LHB</span>
                 <span class="bwl-role">Spin</span>
               </div>
            </div>
          </div>
          <div class="player-rating">
              <span class="player-rating-img">
                <img src="../assets/bat.png" alt="">
              </span>
              <span class="player-rating-star">
                <p>7 <i class="fas fa-star" style="color:gold"></i></p>
              </span>
          </div>
          <div class="player-rating">
              <span class="player-rating-img">
                <img src="../assets/bowl.png" alt="">
              </span>
              <span class="player-rating-star">
                <p>7 <i class="fas fa-star" style="color:gold"></i></p>
              </span>
          </div>
          <div class="player-rating">
              <span class="player-rating-img">
                <img src="../assets/wkt.png" alt="">
              </span>
              <span class="player-rating-star">
                <p>7 <i class="fas fa-star" style="color:gold"></i></p>
              </span>
          </div>
        </div>

      </div>
  </div>
</template>

<script>



export default {
  name: 'Home',
  components: {
    
  }
}
</script>
<style scoped>
.team-management{
  height: 100vh;
 
  display: flex;
  flex-direction: column;
}
.team-management-header{
  width: 100%;
  
  padding: 10px;
 display: flex;
 align-items: center;
 height: auto;
}
.btn{
  padding: 5px;
}
.edit-btn{
  background-color: orange;
  color: white;
  border-radius: 50%;
}
.team-management-header a{
   position: absolute ;
    right: 20px;
}
.team-management-header .btn-start-match{
  margin: 5px;
 width: 100px;
background: linear-gradient(to right, #167016, #1cc942); 

  color: white;
 
  border-radius: 5px;

}
.team-management-body{
  padding: 10px;
  display: flex;
  flex-wrap: wrap;
}
.player-card{
  width: 300px;
  height: 350px;
  border: 3px solid rgb(4, 26, 39);
  border-radius: 10px;
  background:linear-gradient(to bottom, rgba(48, 90, 204, 0.52), rgba(24, 24, 24, 0.73)), url(../assets/bgcrad.jpg);
}
.player-card-head{
  width: 100%;
  height: 25%;
 border: 2px solid white;
 border-radius: 10px;
  display: flex;
}
.player-card-head img{
  width: 30%;
  height: 100%;
 
}
.player-card-name{
  width: 70%;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 5px;
}
.bat-role{
  padding: 3px;
  background-color: blue;
  
}
.bwl-role{
  margin-left: 10px;
  padding: 3px;
  background-color: rgb(155, 44, 44);
}
.player-rating{
  width: 100%;
  height: 25%;
 
  
  display: flex;
}
.player-rating-img{
  width:30%;
  height:100%;
  border-radius: 10px;
  border: 5px solid rgb(201, 192, 192);
}
.player-rating-img img{
  width: 100%;
  height: 100%;
  object-fit: contain;
  padding: 15px;
}
.player-rating-star{
  width:70%;
  height:100%;
  padding: 5px ;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 5px solid rgb(224, 224, 224);
  border-radius: 10px;
}
.player-rating-star p{
  font-size: 30pt;
}
</style>