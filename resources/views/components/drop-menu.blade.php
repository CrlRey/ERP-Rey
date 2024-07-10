<select name="departament" id="departament">
    <option value="">--SELECCIONA EL DEPARTAMENTO--</option>
    @foreach ($options as $option)
    <option value="{{ $option->id }}" {{ old('my_select', $selectedOption) == $option->id ? 'selected' : '' }}>{{ $option->name }}</option>
    @endforeach

</select>
