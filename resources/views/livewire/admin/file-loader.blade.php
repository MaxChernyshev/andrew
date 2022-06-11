<div>
    <div class="panel-body card-body">
        <div class="form-group">
            <label for="image">File</label>
            <input wire:model="file" type="file" class="form-control @error("file") is-invalid @enderror" id="file" name="file">
        </div>
        @if($file)
            <span>
                <p><strong>You add file: </strong> {{ $file->getClientOriginalName() }}</p>
            </span>
        @endif
    </div>
</div>
