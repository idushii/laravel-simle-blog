<div class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input type="text" class="form-control" id="formGroupExampleInput" value="{{$record->title}}" name="title" placeholder="">
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Another label</label>
    <textarea name="desc" rows="8" class="form-control">{{$record->desc}}</textarea>
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Another label</label>
    <textarea name="content" rows="15" class="form-control">{{$record->content}}</textarea>
</div>
