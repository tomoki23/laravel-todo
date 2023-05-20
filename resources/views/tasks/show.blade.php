<x-app-layout>
  <div class="w-3/4 mx-auto mt-6 p-6 bg-white shadow-md rounded-md">
    <div class="flex items-center mb-4">
      <h2 class="text-3xl font-bold"><strong>{{ $task->title }}</strong></h2>
      <p class="text-gray-600 ml-4">「カテゴリー：{{ $task->category->name }}」</p>
    </div>
    <div class="border-b border-gray-300 mb-4"></div>
    <p class="text-xl mb-8">{{ $task->body }}</p>
    <div class="flex justify-end">
      <x-primary-button class="px-6 py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition-colors"><a href="{{ route('tasks.edit', ['id' => $task->id]) }}">更新</a></x-primary-button>
      <form action="{{ route('tasks.delete', ['id' => $task->id]) }}" method="POST">
        @csrf
        @method('delete')
        <x-danger-button class="px-6 py-3 bg-red-500 text-white rounded-md hover:bg-red-600 transition-colors ml-4">削除</x-danger-button>
      </form>
    </div>
  </div>
</x-app-layout>
