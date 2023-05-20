<x-app-layout>
  <div class="flex flex-col items-center">
    <form action="{{ route('tasks.store') }}" method="POST" class="max-w-lg mx-auto mt-6 p-6 bg-white shadow-md rounded-md">
      @csrf
      <div class="mb-4">
        <label for="title">タイトル</label>
        <select name="category_id" class="w-32">
          <option value="">カテゴリー</option>
          @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
        @error('category_id')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-4">
        <input type="text" name="title" id="title" class="w-full">
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-4">
        <label for="body">本文</label>
        <input type="text" name="body" id="body" class="w-full">
        @error('body')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="flex justify-center">
        <x-primary-button>登録</x-primary-button>
      </div>
    </form>
  </div>
</x-app-layout>
