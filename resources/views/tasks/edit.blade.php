<x-app-layout>
  <div class="flex flex-col items-center">
    <form action="{{ route('tasks.update', ['id' => $task->id]) }}" method="POST" class="max-w-lg mx-auto mt-6 p-6 bg-white shadow-md rounded-md">
      @csrf
      @method('PUT')
      <div class="mb-4">
        <label for="title">タイトル</label>
        <select name="category" class="w-32">
          <option>カテゴリー</option>
          @foreach ($categories as $category)
          <option name="{{ $category->name }}" value="{{ $category->id }}"{{ $category->name == $task->category->name ? 'selected' : '' }}>{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-4">
        <input type="text" name="title" id="title" class="w-full" value="{{ $task->title }}">
      </div>
      <div class="mb-4">
        <label for="body">本文</label>
        <input type="text" name="body" id="body" class="w-full" value="{{ $task->body }}">
      </div>
      <div class="flex justify-center">
        <x-primary-button>更新</x-primary-button>
      </div>
    </form>
  </div>
</x-app-layout>
