 <x-guest-layout>
    <!-- Main Hero Content -->
    <div
      class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
      style="background-image: url('https://assets.bonappetit.com/photos/61ba70da510874520d257b78/16:9/w_1920,c_limit/LEDE_Omas%20Hideaway,%20Credit%20Christine%20Dong.jpg')">
      <h1
        class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
        <span class="inline md:block">Miresevini ne laravel restaurant</span>
      </h1>
      <div class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
        Përjetoni shijen autentike të kuzhinës shqiptare në restorantin tonë, ku çdo pjatë është një festë për shijet tuaja—vizitoni dhe zbulojeni vetë!
      </div>
      <div class="flex flex-col items-center mt-12 text-center">
        <span class="relative inline-flex w-full md:w-auto">
          <a href="{{route('reservations.step.one')}}" type="button"
            class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
            Rezervo 
          </a>
      </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-white md:px-0">
      <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
          <div class="w-full md:w-1/2 md:px-3">
            <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
              <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
              <h3 class="text-xl">Restauranti jone
              </h3>
              <h2 class="text-4xl text-green-600">Miresevini</h2>
              <!-- </h1> -->
              <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                Restoranti ynë ofron një përvojë të veçantë. Stafi ynë i përkushtuar është gjithmonë i gatshëm t'ju shërbejë me buzëqeshje dhe kujdes maksimal.
              </p>
              <div class="relative flex">
                
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2">
            <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
              <img src="https://media.cntraveler.com/photos/654bd5e13892537a8ded0947/16:9/w_1920,c_limit/phy2023.din.oss.restaurant-lr.jpg" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-20 bg-gray-50">
      <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
        <div class="flex flex-wrap items-center -mx-3">
          <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
            <div class="w-full lg:max-w-md">
              <h2 class="mb-4 text-2xl font-bold">Rreth nesh </h2>
              <h2
                class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Pse na zgjidhni ne</h2>

              <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Tek ne ju shijoni ushqime tradicionale shqiptare të përgatitura me kujdes dhe pasion.Ambientet tona të ngrohta dhe mikpritëse janë ideale për një darkë të veçantë me familjen dhe miqtë tuaj.</p>
              <ul>
                
                
                
              </ul>
            </div>
          </div>
          <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
              class="mx-auto sm:max-w-sm lg:max-w-full"
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Restaurant_N%C3%A4sinneula.jpg/1280px-Restaurant_N%C3%A4sinneula.jpg" alt="feature image"></div>
        </div>
      </div>
    </section>
    <section class="mt-8 bg-white">
      <div class="mt-4 text-center">
        <h3 class="text-2xl font-bold">Our Menu</h3>
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
          TODAY'S SPECIALITY</h2>
      </div>
      <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
          @if($specials && $specials->menus)
          @foreach($specials->menus as $menu)
              <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                  <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="Image" />
                  <div class="px-6 py-4">
                      <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">{{ $menu->name }}</h4>
                      <p class="leading-normal text-gray-700">{{ $menu->description }}</p>
                  </div>
                  <div class="flex items-center justify-between p-4">
                      <span class="text-xl text-green-600">{{ $menu->price }}</span>
                  </div>
              </div>
          @endforeach
      @else
      <p class="text-2xl font-bold text-gray-700 content-center">Nuk ka menu speciale</p>
      @endif
           

        </div>
      </div>
    </section>
     

    

     
 </x-guest-layout>