<div>
    <div class="panel-body card-body">
        <div class="form-group">
            <label for="image">Image</label>
            <input wire:model="image" type="file" class="form-control @error("image") is-invalid @enderror" id="image" name="image">
        </div>
{{--                @if($image)--}}
{{--                    <img src="{{ $image->temporaryUrl() }}" style="width: 150px" alt="">--}}
{{--                @endif--}}
    </div>
</div>
