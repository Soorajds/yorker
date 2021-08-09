//<template>
  <div class="match-play"> 
    <div class="match-card">
      <div class="match-score-section">
        <section class="score-board">
          <span><i class="fas fa-horse-head"></i> SRH</span>
          <p>198/2</p>
        </section>
        <section class="live-player-section">
            <div class="bat-live">
              <p>R Sharma <span>20(20)*</span></p>
              <p>S Dhawan <span>40(20)*</span></p>
            </div>
            <div class="runs-scored-display">
              <img src="../assets/bowled.gif" alt="">
            </div>
            <div class="bowl-live"> 
              <p>V behra <span>20-2</span></p>
            </div>
        </section>
        <section class="over-diplay-section">
          <span>2</span>
          <span>1</span>
          <span>4</span>
          <span>4</span>
          <span>0</span>
          <span>1</span>
        </section>
      </div>
      <div class="match-score-btns-section">
        <button>0</button>
        <button>1</button>
        <button>2</button>
        <button>3</button>
        <button>4</button>
        <button>6</button>
        
      </div>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>
.match-play{
  width: 100%;
  height:100vh;
  background:linear-gradient(to bottom, rgba(116, 115, 115, 0.52), rgba(24, 17, 17, 0.73)), url(../assets/gd.jpg) no-repeat center;
  background-size: cover;
 display: flex;
 justify-content: center;
 align-items: center;
}

.match-card{
  margin:20px auto;
  width: 60%;
  height: 500px;
  
  background:linear-gradient(to bottom, rgba(92, 91, 90, 0.52), rgba(7, 6, 6, 0.73)), url(../assets/ground.jpeg) no-repeat center;
  background-size: cover;
}
.match-card .match-score-section{
  width: 100%;
  height: 80%;
  

}
.match-score-section .score-board{
  width: 30%;
  margin: auto;
  height: 25%;
  border: 3px solid rgb(77, 76, 76);
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(to bottom, #232526, #414345);
  border-radius: 10px;
  backdrop-filter: blur(10px);
   box-shadow: 0 0 1rem 0 rgba(17, 17, 17, 0.2); 
}
.score-board span{
  margin: 0px 10px;
  font-size: 20pt;
}
.score-board p{
  font-size: 40pt;
}
.match-card .live-player-section{
  width: 100%;
  height: 30%;
 font-size: 16pt;
  display: flex;
  margin-top: 30px;
  
}
.live-player-section .bat-live{
  width: 33%;
  height: 100%;
 
  padding: 20px;
    display: flex;
    flex-direction: column;
  align-items: flex-start;
  justify-content: center;
  
}
.bat-live p{
  margin:5px 0px;
}
.live-player-section .runs-scored-display{
  width: 33%;
  height: 100%;
  
}
.runs-scored-display img{
  width: 100%;
  height: 100%;
  object-fit: contain;
}
.live-player-section .bowl-live{
  width: 33%;
  height: 100%;
 
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: flex-end;
}
.match-card .match-score-btns-section{
  width: 100%;
  height: 20%;
  display: flex;
  align-items: center;

  box-sizing: border-box;
  
}
.match-card .over-diplay-section{
  width: 100%;
  height: 20%;
  margin-top: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.over-diplay-section span{
  background-color: #414345;
  color: white;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  font-size: 20pt;
  margin: 0px 20px;
  display: flex;
  justify-content: center;
  align-items: center;

}
.match-score-btns-section button{
  width: calc(100% / 6);
  height: 80%;
  margin: 10px;
  font-size: 30pt;
  font-weight: 700;
  color: white;
  border-radius: 20px 20px 0px 0px;
    box-shadow: 0 9px rgb(139, 119, 209);
    cursor: pointer;
  outline: none;
  border: 3px solid rgb(131, 144, 204);
  transition: all 0.1s ease-in;
}
.match-score-btns-section button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.match-score-btns-section button:nth-child(1){
  background-color: rgb(59, 163, 204);
   
}
.match-score-btns-section button:nth-child(1):hover{
  background-color: rgb(65, 179, 224);
  font-size: 35pt;
}
.match-score-btns-section button:nth-child(2){
  background-color: rgb(30, 115, 184);
}
.match-score-btns-section button:nth-child(2):hover{
  background-color: rgb(21, 133, 177);
  font-size: 35pt;
}
.match-score-btns-section button:nth-child(3){
  background-color: rgb(179, 189, 39);
}
.match-score-btns-section button:nth-child(3):hover{
  background-color: rgb(204, 214, 58);
  font-size: 35pt;
}
.match-score-btns-section button:nth-child(4){
  background-color: rgb(125, 192, 49);
}
.match-score-btns-section button:nth-child(4):hover{
  background-color:rgb(148, 224, 60);
  font-size: 35pt;
}
.match-score-btns-section button:nth-child(5){
  background-color: rgb(14, 167, 14);
}
.match-score-btns-section button:nth-child(5):hover{
  background-color: rgb(19, 196, 19);
  font-size: 35pt;
}
.match-score-btns-section button:nth-child(6){
  background-color: rgb(214, 131, 21);
}
.match-score-btns-section button:nth-child(6):hover{
  background-color: rgb(238, 145, 24);
  font-size: 35pt;
}
</style>
