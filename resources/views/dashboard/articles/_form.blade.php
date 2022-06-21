<label class="block">
    <span class="text-gray-700">Title</span>
    <input type="text" name="title" value="{{ old('title', $article->title) }}" class="mt-1 block w-full" placeholder="">
    @error('title')
    <p>{{ $message }}</p>
    @enderror
</label>
<label class="block">
    <span class="text-gray-700">Intro</span>
    <textarea name="intro" class="mt-1 block w-full" rows="3">{{ old('intro', $article->intro) }}</textarea>
    @error('intro')
    <p>{{ $message }}</p>
    @enderror
</label>
<label class="block">
    <span class="text-gray-700">Content</span>
    <textarea name="content" class="mt-1 block w-full" rows="3">{{ old('content', $article->content) }}</textarea>
    @error('content')
    <p>{{ $message }}</p>
    @enderror
</label>
<label class="block">
    <span class="text-gray-700">Author</span>
    <input type="text" name="author" value="{{ old('author', $article->author) }}" class="mt-1 block w-full" placeholder="">
    @error('author')
    <p>{{ $message }}</p>
    @enderror
</label>
<div class="block">
    <div class="mt-2">
        <div>
            <label class="inline-flex items-center">
                <input type="checkbox" name="published" value="1" @if(old('published', $article->published)) checked @endif>
                <span class="ml-2">Published</span>
            </label>
        </div>
    </div>
</div>
