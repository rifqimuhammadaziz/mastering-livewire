<div>
    <x-flash-message/>

    <form wire:submit="save">
{{--        <div class="mb-4">--}}
{{--            <label for="title" class="form-label">Title</label>--}}
{{--            <input type="text" name="title" id="title" class="form-control" wire:model="form.title">--}}
{{--            @error('form.title') <small class="text-danger d-block mt-1">{{ $message }}</small> @enderror--}}
{{--        </div>--}}
        <div class="mb-2">
            <textarea placeholder="What's on your mind?" name="body" id="body" class="form-control" wire:model="form.body"></textarea>
            @error('form.body') <small class="text-danger d-block mt-1">{{ $message }}</small> @enderror
        </div>
        <div class="flex justify-content-end">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

</div>
