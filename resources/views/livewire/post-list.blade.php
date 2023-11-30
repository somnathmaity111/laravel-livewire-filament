<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div class="flex items-center space-x-4 font-light ">
            <button class="{{ $this->sort === 'asc' ? 'border-b border-gray-700' : 'text-gray-500' }} py-4"
                wire:click="setSort('asc')">Latest</button>
            <button class="{{ $this->sort === 'desc' ? 'border-b border-gray-700' : 'text-gray-500' }} py-4 "
                wire:click="setSort('desc')">Oldest</button>
        </div>
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post)
            <x-post.post-item :post="$post" />
        @endforeach

    </div>
    <div class="py-3">
        {{ $this->posts->onEachSide(1)->links() }}
    </div>
</div>
