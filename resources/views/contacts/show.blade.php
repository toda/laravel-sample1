<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            お問い合わせ詳細ページ
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 mt-10">
                    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                            <tr>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">名前</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">タイトル</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">URL</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">性別</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">年齢</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">問合せ内容</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">問合せ日時</th>
                                <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->id }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->name }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->title }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->email }}</td>
                                    @if($contact->url)
                                        <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->url }}</td>
                                    @else
                                    <td class="border-t-2 border-gray-200 px-4 py-3">(登録されていません)</td>
                                    @endif
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $gender }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $age }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->contact }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">{{ $contact->created_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="p-2 w-full">
                        <button onclick="location.href='{{ route('contacts.edit', ['id' => $contact->id]) }}'" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">変更する</button>
                    </div>
                    <form id="delete_{{ $contact->id }}" method="POST" action="{{ route('contacts.destroy', ['id' => $contact->id])}}">
                        @csrf
                        <div class="p-2 w-full">
                            <button type='button' data-id="{{$contact->id}}" onclick="deletePost(this)" class="flex mx-auto text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg">削除する</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    const deletePost = (e) => {
        'use strict;'
        if (confirm('本当に削除していいですか？')) {
            const deleteButton = document.querySelector(`#delete_${e.dataset.id} button`);
            deleteButton.type = "submit";
            deleteButton.submit;
        }
    };
    </script>
</x-app-layout>
