<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>


  <section class="bg-white">
    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-4 lg:px-0">
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

        @foreach ($posts as $post)
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

        <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
          <div class="flex justify-between items-center mb-5 text-gray-500">
            <a href="/categories/{{ $post->category->slug }}">
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
            <a href="/posts/{{$post->author->username}}">
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
        @endforeach
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