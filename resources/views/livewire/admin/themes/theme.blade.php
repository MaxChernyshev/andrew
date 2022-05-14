<div>
    @if($updateMode == 'index')
        @include('livewire.admin.themes.index')
    @elseif($updateMode == 'create')
        @include('livewire.admin.themes.create')
    @elseif($updateMode == 'update')
        @include('livewire.admin.themes.update')
    @endif
</div>
