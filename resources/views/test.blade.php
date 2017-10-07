<form method="post" action="/update/{{$post->id}}/{{$post->company_id}}">

    {{method_field('patch')}}
<input type="text" name="title" value="{{$post->title}}">
<textarea rows="10" name="description" cols="30">{{$post->description}}</textarea>
<textarea rows="10" name="requirements" cols="30">{{$post->requirements}}</textarea>
    <input type="hidden" name="_token" value="{{csrf_token()}}">

<select name="">
    <option>{{$post->type}}</option>
</select>
<input type="text" value="{{$post->city}}">

<input type="submit">
</form>
