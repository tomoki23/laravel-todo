<x-app-layout>
  <div class="flex flex-col items-center">
    <form action="#" class="max-w-lg mx-auto mt-6 p-6 bg-white shadow-md rounded-md">
      <div class="mb-4">
        <label for="title">タイトル</label>
        <select name="category" class="w-32">
          <option>カテゴリー</option>
          <option value="カテゴリー">カテゴリー</option>
          <option value="カテゴリー">カテゴリー</option>
        </select>
      </div>
      <div class="mb-4">
        <input type="text" name="title" id="title" class="w-full">
      </div>
      <div class="mb-4">
        <label for="body">本文</label>
        <input type="text" name="body" id="body" class="w-full">
      </div>
      <div class="flex justify-center">
        <x-primary-button>更新</x-primary-button>
      </div>
    </form>
  </div>
</x-app-layout>
