@isset($record)
<input type="hidden" name="id" value="{{$record->id ?? ''}}">
@endisset
<div class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input required type="text" class="form-control" id="formGroupExampleInput" value="{{$record->title ?? ''}}" name="title" placeholder="">
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Another label</label>
    <textarea required name="desc" rows="8" class="form-control">{{$record->desc ?? ''}}</textarea>
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Another label</label>
    <textarea required name="content" rows="15" class="form-control">{{$record->content ?? ''}}</textarea>
</div>
