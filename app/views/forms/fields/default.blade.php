<div class="form-group">
    {{ $control }}
    @if ($error)
        <p class="error_message">{{ $error }}</p>
    @endif
</div>