This is the create page
<form action="{{route('student.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="rnumber" placeholder="rnumber">
    <input type="number" name="team_id" placeholder="team_id">
    <input type="number" name="active" placeholder="active">
    <input type="submit">
</form>
