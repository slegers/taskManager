<div class="col-sm-3">
  <div class="taakBalk"> 
  <h3>Taskbalk</h3>
  <ul class="tasks">
  @foreach($side as $taak)
      <li class="task">
          <h4 class="taskTitle"> {{ $taak->title }}
          <br>
          <small>{{ date('l d F',strtotime($taak->deadline_date)) }}</small>
          </h4>
      <div class="taskButtons">
        <input type="button" value="edit">
         <input type="button" value="delete">
     </div>
       </li>
  
  @endforeach
      <!-- <li class="task">
      <div class="taskHeader">
        <form><input type="checkbox"> </form>
          <h4 class="taskTitle">Task manager afmaken en dan nog wat tekst toevoegen<br>
          <small>Donderdag 15 sept.</small>
          </h4>
      </div>
      <br>
      <div class="taskButtons">
        <input type="button" value="edit">
         <input type="button" value="delete">
     </div>
       </li>
      <!-- <li class="task">
        <div class="taskHeader">
        <form><input type="checkbox"> </form>
          <h4 class="taskTitle">Pleinraadweekend voorbereieden <br>
           <small>Donderdag 15 sept.</small>
          </h4>
        </div>
      <br>
      <div class="taskButtons">
        <input type="button" value="edit">
        <input type="button" value="delete">      
      </div>               
      <div class="tags">
        Speelplein, werk
      </div>
      </li> -->
   </ul>
  </div>
</div>
