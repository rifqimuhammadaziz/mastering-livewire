<div class="card">
    <div class="card-body">
        <h5 class="card-title">New Post</h5>
        <form wire:submit="save">
            <div class="mb-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" wire:model="form.title">
                @error('form.title') <small class="text-danger d-block mt-1">{{ $message }}</small> @enderror
            </div>
            <div class="mb-4">
                <label for="body" class="form-label">Body</label>
                <textarea name="body" id="body" class="form-control" wire:model="form.body"></textarea>
                @error('form.body') <small class="text-danger d-block mt-1">{{ $message }}</small> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
