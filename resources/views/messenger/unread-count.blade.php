<?php $count = Auth::user()->id; ?>
@if($count > 0)
    <span class="label label-danger">{{ $count }}</span>
@endif
