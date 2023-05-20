<x-app-layout>
  <div class="flex justify-center">
    <div class="max-w-lg mx-auto mt-6 p-6 bg-white shadow-md rounded-md">
      <form action="#" class="mb-4">
        <div class="flex space-x-2 mb-2">
          <input type="text" name="search" placeholder="検索" class="flex-1 border rounded-md p-2">
          <select name="category" class="border rounded-md p-2 ml-2">
            <option>カテゴリ</option>
            @foreach ($categories as $category)
            <option name="{{ $category->name }}" id="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
          <x-primary-button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md ml-2">検索</x-primary-button>
        </div>
      </form>

      <table class="w-full border">
        <tr>
          <th class="py-2 border p-4">タイトル</th>
          <th class="py-2 border p-4">本文</th>
          <th class="py-2 border p-4">操作</th>
        </tr>
        @foreach ($tasks as $task)
          <tr>
            <th class="py-2 border p-4">{{ $task->title }}</th>
            <th class="py-2 border p-4">{{ $task->body }}</th>
            <th class="py-2 border p-4"><x-secondary-button><a href="{{ route('tasks.show', ['id' => $task->id]) }}">詳細</a></x-secondary-button></th>
          </tr>
        @endforeach

      </table>
    </div>
  </div>

  <div class="flex justify-center mt-6">
    <a href="#" class="px-4 py-2 text-blue-500 border border-blue-500 rounded-md">←12345→</a>
  </div>
</x-app-layout>
