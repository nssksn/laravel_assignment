<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        全てのツイート
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <div>
                        <!--ツイートを投稿するフォーム-->
                        
                    </div>

                    <!--<section class="text-gray-600 body-font relative">-->
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-col text-center w-full mb-12">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">ログインユーザー {{ $user->first_name }} {{ $user->last_name }}</h1>
                        
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">何かツイートしてください</p>
                        
                        </div>

                        <form method="post" action="{{ route('tweets.store') }}">
                       
                        @csrf
                        <div class="lg:w-1/2 md:w-2/3 mx-auto">
                        <x-input-error :messages="$errors->get('tweet')" class="mt-2" />
                        <div class="flex flex-wrap -m-2">
                            
                                
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="tweet" class="leading-7 text-sm text-gray-600">Message</label>
                                    <textarea id="tweet" name="tweet" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">ツイートする</button>
                                </div>
                            
                            <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                            </div>
                        </div>
                        </div>
                        </form>
                    </div>
                    <!--</section>-->

                    
                    <!--全てのツイート内容表示-->
                    <!--<section class="text-gray-600 body-font">-->
                    <div class="container px-5 py-24 mx-auto">
                    @foreach($tweets as $tweet)
                        <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                        <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                            <h2 class="text-gray-900 text-lg title-font font-medium mb-2">{{ $tweet->user->first_name}} {{ $tweet->user->last_name}}</h2>
                            <p class="leading-relaxed text-base">{{ $tweet->tweet }}</p>
                            <a href="{{ route('tweets.show', ['tweet' => $tweet->id]) }}" class="mt-3 text-indigo-500 inline-flex items-center">返信する
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                            </a>
                        </div>
                        </div>
                        @endforeach
                    </div>
                    <!--</section>-->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
