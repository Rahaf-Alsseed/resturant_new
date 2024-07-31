<form action="{{ Route('product_add') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Please insert a name"/><br /><br />
    <input type="text" name="price" placeholder="Please insert a price"/><br /><br />
    <input type="text" name="description" placeholder="Please insert a description"/><br /><br />
{{--  <select name="catigory_id">
    @foreach ($catigories as $catigory )
        <option value="{{ $catigory->id }}">{{ $catigory->name }}</option>

    @endforeach  --}}
    
</select>
<input type="submit" value="save">
</form>