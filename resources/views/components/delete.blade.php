<form action="/delete/{{$film->id}}" method="POST">
@method('delete')
@csrf 
<button type="submit" name="submit"
class=" btn"><i class="fa-solid fa-trash-can"></i></button>
</form>