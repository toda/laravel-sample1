<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            お問い合わせ一覧
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="search p-2 w-full h-screen flex items-center justify-center">
                    <form method="get" action="{{ route('contacts.index') }}">
                        <input type="text" name="search" value="{{ $search }}" placeholder="タイトルで検索" />
                        <button
                            class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索する</button>
                    </form>
                </div>
                <div class="p-6 text-gray-900">
                    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                        ID</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        名前</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        タイトル</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        問合せ日時</th>
                                    <th
                                        class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->id }}</td>
                                        <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->name }}</td>
                                        <td class="border-t-2 border-gray-200 px-4 py-3"><a
                                                href="{{ route('contacts.show', ['id' => $contact->id]) }}"
                                                class="text-blue-500">{{ $contact->title }}</a></td>
                                        <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">
                                            {{ $contact->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $contacts->links() }}
                    <div class="p-2 w-full">
                        <button onclick="location.href='{{ route('contacts.create') }}'"
                            class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
