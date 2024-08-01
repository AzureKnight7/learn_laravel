<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue">
        <a href="{{ url('posts') }}" class="font-medium text-sm text blue-600 hover:underline">&laquo; Back to all Posts</a>
        <header class="mb-4 lg:mb-6 not-format">
          <address class="flex items-center mb-6 not-italic">
            <div class="inline-flex items-center mr-3 text-sm text-gray-900">
              <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
              <div>
                <a href="/posts?author={{$post->author->username}}" rel="author" class="text-xl font-bold text-gray-900">Jese Leos</a>
                <p class="text-base text-gray-500">Graphic Designer, educator & CEO Flowbite</p>
                <p class="text-base text-gray-500"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Feb. 8, 2022</time></p>
              </div>
            </div>
          </address>
          <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl">Best practices for successful prototypes</h1>
        </header>
        <p>Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way,
          you can think things through before committing to an actual design project.</p>
      </article>
    </div>
  </main>


</x-layout>