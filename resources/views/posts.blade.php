<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <div class="py-4 px-4 mx-auto max-w-screen-xl  lg:px-6">
    <div class="mx-auto max-w-screen-md sm:text-center">
      @if(request('category'))
      <input type="hidden" name="category" value="{{request('category') }}">
      @endif
      @if(request('author'))
      <input type="hidden" name="author" value="{{request('author') }}">
      @endif
      <form action="/posts">
        <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
          <div class="relative w-full">
            <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
              <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
              </svg>
            </div>
            <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search for article" type="text" id="search" name="search" autocomplete="off">

          </div>
          <div>
            <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Search

            </button>
          </div>
        </div>
      </form>
    </div>
  </div>


  <section class="bg-white">
    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-4 lg:px-0">
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

        <!-- {{--<article class="py-8 max-w-screen-md">
          <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title']}}</h2>
          </a>
          <div>
          By
            <a href="/posts/{{$post->author->username}}" class="hover underline text-base text-gray-500">{{$post->author->name }}
            </a>
            in 
            <a href="/categories/{{ $post->category->slug }}"class="hover underline text-base text-gray-500">{{$post->category->name}}
            </a>
            | {{ $post->created_at->format('j F Y')}}
          </div>
          <p class="my-4 font-light">{{ $post['body'] }}</p>
          <a href="/posts" class="font-medium text-blue-500 hover hover:underline">Read more &raquo;</a>
          </article>--}} -->

        @forelse ($posts as $post)
        <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
          <div class="flex justify-between items-center mb-5 text-gray-500">
            <a href="/posts?category={{ $post->category->slug }}">
              <span class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                </svg>
                {{$post->category->name}}
              </span>
            </a>
            <span class="text-sm">{{ $post->created_at->diffForHumans()}}</span>
          </div>
          <a href="/posts/{{ $post->slug }}" class="hover_underline">
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $post->title }}</h2>
          </a>
          <div class="flex justify-between items-center">
            <a href="/posts?author={{$post->author->username}}">
              <div class="flex items-center space-x-3">
                <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{$post->author->name}}" />
                <span class="font-medium text-sm">
                  {{$post->author->name}}
                </span>
              </div>
            </a>
            <a href="/posts/{{ $post->slug }}" class="inline-flex items-center font-medium text-primary-600 hover:underline text-sm">
              Read more
              <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </a>
          </div>
        </article>
        @empty
        <div>
          <p class="font-semibold text-xl my-4">Article not found!</p>
          <a href="/posts" class="block text-blue--600 hover:underline">&laquo; Back to all posts</a>
        </div>
        @endforelse
      </div>

  </section>

  <!-- <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
        <header class="mb-4 lg:mb-6 not-format">
          <address class="flex items-center mb-6 not-italic">
            <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
              <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
              <div>
                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">Jese Leos</a>
                <p class="text-base text-gray-500 dark:text-gray-400">Graphic Designer, educator & CEO Flowbite</p>
                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Feb. 8, 2022</time></p>
              </div>
            </div>
          </address>
          <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">Best practices for successful prototypes</h1>
        </header>
        <a href="posts" class="font-medium text-sm text-white blue-600 hover:underline">&laquo; Back to all Posts</a>
        <p>Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way,
          you can think things through before committing to an actual design project.</p>
      </article>
    </div>
  </main> -->




</x-layout>