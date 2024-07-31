<form action="{{ Route('catigory_add') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Please insert a name"/><br /><br />
    <input type="submit" value="save">
</form>