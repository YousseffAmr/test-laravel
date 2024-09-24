<div>
    Team Name :
{{ $team->name }}
</div>
<br>
<div>
Team Slogan :
{{ $team->slogan }} 
</div>
 
@method('PUT')
@method('DELETE')
@csrf