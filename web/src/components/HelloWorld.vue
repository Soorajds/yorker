//<template>
  <div >
    <form >
     bat: <input type="radio" v-model="role" value="bat">|
     bowl: <input type="radio" v-model="role" value="bowl">|
    all: <input type="radio" v-model="role" value="all">|
    wkt: <input type="radio" v-model="role" value="wkt">|
      <button @click="createPlayer()">Create</button>{{name}}
    </form>
    <i class="fas fa-tshirt"><p>k</p></i>
   <table class="player-table">
     <thead>
      <tr>
         <th>ID</th>
       <th>Name</th>
       <th>Role</th>
       <th>Type</th>
       <th>Bat rating</th>
       <th>Shot Selection</th>
       <th>Power</th>
       <th>control</th>
        <th>Bowl Rating</th>
       <th>Line & length</th>
       <th>variations</th>
       <th>accuracy</th>
       <th>Wkt Rating</th>
       <th>Reflex</th>
       <th>Atheletism</th>
       <th>Awarness</th>
      </tr>
     </thead>
     <tbody>
       <tr v-for="value in player" :key="value.id">
         <td>{{value.player_id}}</td>
         <td>{{value.name}}</td>
         <td>{{value.attributes.role}}</td>
         <td>{{value.attributes.type}}</td>
         <td>{{value.skills.bat.rating}}</td>
         <td>{{value.skills.bat.shot_selection}}</td>
          <td>{{value.skills.bat.power}}</td>
          <td>{{value.skills.bat.control}}</td>
          <td>{{value.skills.bowl.rating}}</td>
          <td>{{value.skills.bowl.line_length}}</td>
          <td>{{value.skills.bowl.variation}}</td>
          <td>{{value.skills.bowl.accuracy}}</td>
          <td>{{value.skills.wkt.rating}}</td>
          <td>{{value.skills.wkt.reflex}}</td>
          <td>{{value.skills.wkt.atheletism}}</td>
          <td>{{value.skills.wkt.awareness}}</td>
       </tr>
     </tbody>
   </table>
   {{objectz}}
  </div>
</template>

<script>
import Player from '../common/players.json'
export default {
  name:"chumma",
  data(){
    return{
      player:null,
      role:null,
     name:null,
     counter:0,
     objectz:[]
    }
  },
  mounted(){
    this.player=Player;
    this.createPlayer();
  },
  methods:{
    getRandomInt(min,max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    },
    
    createPlayer(){
      //let r =this.role;
      this.counter=this.counter+1;
      let fname=['Abinash ','Sam ','Tim '];
      let lname=['Thomas','North','Samuel'];
     
      var randName1=this.getRandomInt(0,fname.length-1);
      var randName2=this.getRandomInt(0,lname.length-1);
      let fullName=fname[randName1]+lname[randName2];
      this.name=fullName;
      var obj={
            player_id:this.counter,
    name:fullName,
    attributes:{
        role:"BAT",
        type:"RHB"
    },
    skills:{
        bat:{
            rating:7,
            shot_selection:56,
            power:66,
            control:48
        },
        bowl:{
            rating:3,
            line_length:21,
            variation:13,
            accuracy:15
        },
        wkt:{
            rating:2,
            reflex:5,
            atheletism:3,
            awareness:5
        }
    }
      }
      this.objectz.push(obj)
      // if( r == "bat"){

      // }
      // else if (r == "bowl"){

      // }
      // else if(r == "all"){

      // }
      // else{

      // }
    }
  }
}
</script>

<style>
.player-table{
  width: 100%;
}
.player-table {
 font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}
.player-table  td{
   border: 1px solid #ddd;
  padding: 8px;
  font-size: 10pt;
}

i{
  font-size: 80pt;
  display: flex;
  justify-content: center;
  align-content: center;
}

.player-table  tr:nth-child(even){background-color: #f2f2f2;}

.player-table  tr:hover {background-color: #ddd;}

.player-table  th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
   border: 1px solid #ddd;
  padding: 8px;
   font-size: 12pt;
}
</style>