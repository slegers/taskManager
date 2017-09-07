<div class="col-sm-3">
  <div class="taakBalk"> 
  <h3>Taskbalk</h3>
  <ul class="tasks">
  @forelse($side as $taak)
      <li class="task">
          <h4 class="taskTitle"> {{ $taak->title }}
          <br>
          <small>{{ date('l d F',strtotime($taak->deadline_date)) }}</small>
          </h4>
      <div class="taskButtons">
        <form>
          <input type="submit" value="delete">
        </form>
        <form method="get" action="/task/<?= $taak->id?>">  
          <input type="submit" value="edit">
        </form>
        <!--   <div class="tags">
              Speelplein, werk
          </div> -->
     </div>
       </li>
  @empty 
  <li class="task">
          <h4 class="taskTitle"> Geen komende taken </h4>
       </li> 
  @endforelse
   </ul>
  </div>
</div>
