<x-app-layout>
  <div class="flex justify-center">
    <div class="max-w-lg mx-auto mt-6 p-6 bg-white shadow-md rounded-md">
      <form action="#" class="mb-4">
        <div class="flex space-x-2 mb-2">
          <input type="text" name="search" placeholder="検索" class="flex-1 border rounded-md p-2">
          <select name="category" class="border rounded-md p-2 ml-2">
            <option>カテゴリ</option>
            <option value="カテゴリー1">カテゴリー1</option>
            <option value="カテゴリー2">カテゴリー2</option>
          </select>
          <x-primary-button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md ml-2">検索</x-primary-button>
        </div>
      </form>

      <table class="w-full border">
        <tr>
          <th class="py-2 border">タイトル</th>
          <th class="py-2 border">本文</th>
        </tr>
        <tr>
          <td class="py-2 border">タイトル</td>
          <td class="py-2 border">あああああ</td>
        </tr>
        <tr>
          <td class="py-2 border">タイトル</td>
          <td class="py-2 border">あああああ</td>
        </tr>
        <tr>
          <td class="py-2 border">タイトル</td>
          <td class="py-2 border">あああああ</td>
        </tr>
      </table>
    </div>
  </div>

  <div class="flex justify-center mt-6">
    <a href="#" class="px-4 py-2 text-blue-500 border border-blue-500 rounded-md">←12345→</a>
  </div>
</x-app-layout>
