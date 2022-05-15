<div>
    @if($updateMode == 'index')
        @include('livewire.admin.questions.index')
    @elseif($updateMode == 'create')
        @include('livewire.admin.questions.create')
    @elseif($updateMode == 'update')
        @include('livewire.admin.questions.update')
    @endif
</div>
