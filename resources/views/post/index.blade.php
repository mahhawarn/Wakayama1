<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('投稿一覧') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto bg-blue- text-slate-900 0mt-10 px-4 sm:px-6 lg:px-8 ">
        <div class="my-4">
            <a href="{{ route('post.create') }}" class="inline-block py-2 px-4 btn btn-primary text-decoration-none">
                {{ __('投稿する') }}
            </a>

            <a href="{{ route('myposts') }}" class="inline-block ml-4 py-2 px-4 btn btn-secondary text-decoration-none">
                {{ __('自分の投稿を確認する') }}
            </a>
        </div>

        <div class="my-4">
            @if (!empty($surveys))
                <ul>
                    @foreach ($surveys as $survey)
                        <li class="mb-6  rounded-lg p-4 bg-gradient-to-r from-green-200  to-purple-200">
                            <h3 class="text-lg font-bold mb-2 border-white border-bottom">お題：{{ $survey->title }}</h3>
                            
                            <div class="flex justify-between mt-8 ">
                            </div>
                            <div class="bg-gradient-to-r  from-green-200  to-purple-200">
                            <div class="flex justify-center  bg-gradient-to-r from-green-200  to-purple-200 text-3xl">
                                <p class="text-green-500 hover:text-blue-500">
                                    {{ $survey->vote1 }}
                                </p>
                                <p class="text-gray-600 mx-4 pt-2 text-xl">or</p>
                                <p class="text-purple-500 hover:text-blue-500 ">
                                    {{ $survey->vote2 }}
                                </p>
                            </div>
                            <div class="bg-white  border-2">
                                <p class=" mt-3 pl-5">コメント：{{ $survey->body }}</p>
                            </div>
                        </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="flex justify-center items-center h-full">
                    <p class="text-lg text-gray-600">投票できる投稿はありません。</p>
                </div>
            @endif
            @if (!empty($posts))
                <ul class="">
                    @foreach ($posts as $post)
                        <li class=" mb-6  bg-emerald-200 border rounded-xl p-2">
                            <p class=" mb-1 pl-3 text-gray-900">{{ $post->title }}</p>
                            {{-- <p class="text-gray-1000 mt-4">{{ $post->body }}</p> --}}
                            {{-- <div class="flex justify-between mt-8"> --}}
                                {{-- <p class="text-gray-600">{{ $post->user->name }}</p> --}}
                                {{-- <p class="text-gray-600">{{ $post->updated_at }}</p> --}}
                                {{-- <p>{{ $post->totalLikes->likes_count }}いいね</p> --}}
                                {{-- <a href="{{ route('post.likebutton', $post->id) }}" class="btn  btn-primary">いいね</a> --}}
                            {{-- </div> --}}
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="flex justify-center items-center h-full">
                    <p class="text-lg text-gray-600">投稿はありません。</p>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
