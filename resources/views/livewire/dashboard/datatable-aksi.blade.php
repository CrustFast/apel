<div class="flex flex-col" id="hs-datatable-with-export" class="flex flex-col --prevent-on-load-init" data-hs-datatable='{
  "pageLength": 10,
  "pagingOptions": {
    "pageBtnClasses": "min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:focus:bg-neutral-700 dark:hover:bg-neutral-700"
  },
  "language": {
    "zeroRecords": "<div class=\"py-10 px-5 flex flex-col justify-center items-center text-center\"><svg class=\"shrink-0 size-6 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"11\" cy=\"11\" r=\"8\"/><path d=\"m21 21-4.3-4.3\"/></svg><div class=\"max-w-sm mx-auto\"><p class=\"mt-2 text-sm text-gray-600 dark:text-neutral-400\">No search results</p></div></div>"
  },
  "layout": {
    "topStart": {
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }
  }
}'>
  <div class="-m-1.5 overflow-x-auto" wire:poll.5s>
    <div class="p-1.5 min-w-full inline-block align-middle">
      <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
        <!-- Header -->
        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
          <div>
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200 uppercase">
              aksi
            </h2>
            <p class="text-sm text-gray-600 dark:text-neutral-400 capitalize">
              laporan pengaduan gratifikasi
            </p>
          </div>

          <div>
            <div class="inline-flex gap-x-2">
              <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                View all
              </a>

              <div class="flex-1 flex items-center justify-end space-x-2">
                <div id="hs-dropdown-datatable-with-export" class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                  <button id="hs-datatable-export-dropdown" type="button" class="hs-dropdown-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                      <polyline points="7 10 12 15 17 10"></polyline>
                      <line x1="12" x2="12" y1="15" y2="3"></line>
                    </svg>
                    Export
                    <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>
          
                  <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-32 transition-[opacity,margin] duration opacity-0 hidden z-20 bg-white rounded-xl shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] dark:shadow-[0_10px_40px_10px_rgba(0,0,0,0.2)] dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-datatable-export-dropdown">
                    <div class="p-1 space-y-0.5">
                      <button type="button" class="flex w-full items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" data-hs-datatable-action-type="copy">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                          <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                        </svg>
                        Copy
                      </button>
                      <button type="button" class="flex w-full items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" data-hs-datatable-action-type="print">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                          <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6"></path>
                          <rect x="6" y="14" width="12" height="8" rx="1"></rect>
                        </svg>
                        Print
                      </button>
                    </div>
                    <div class="p-1 space-y-0.5 border-t border-gray-200 dark:border-neutral-800">
                      <button type="button" class="flex w-full items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" data-hs-datatable-action-type="excel">
                        <svg class="shrink-0 size-3.5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M20.0324 1.91994H9.45071C9.09999 1.91994 8.76367 2.05926 8.51567 2.30725C8.26767 2.55523 8.12839 2.89158 8.12839 3.24228V8.86395L20.0324 15.8079L25.9844 18.3197L31.9364 15.8079V8.86395L20.0324 1.91994Z" fill="#21A366"></path>
                          <path d="M8.12839 8.86395H20.0324V15.8079H8.12839V8.86395Z" fill="#107C41"></path>
                          <path d="M30.614 1.91994H20.0324V8.86395H31.9364V3.24228C31.9364 2.89158 31.7971 2.55523 31.5491 2.30725C31.3011 2.05926 30.9647 1.91994 30.614 1.91994Z" fill="#33C481"></path>
                          <path d="M20.0324 15.8079H8.12839V28.3736C8.12839 28.7243 8.26767 29.0607 8.51567 29.3087C8.76367 29.5567 9.09999 29.6959 9.45071 29.6959H30.6141C30.9647 29.6959 31.3011 29.5567 31.549 29.3087C31.797 29.0607 31.9364 28.7243 31.9364 28.3736V22.7519L20.0324 15.8079Z" fill="#185C37"></path>
                          <path d="M20.0324 15.8079H31.9364V22.7519H20.0324V15.8079Z" fill="#107C41"></path>
                          <path opacity="0.1" d="M16.7261 6.87994H8.12839V25.7279H16.7261C17.0764 25.7269 17.4121 25.5872 17.6599 25.3395C17.9077 25.0917 18.0473 24.756 18.0484 24.4056V8.20226C18.0473 7.8519 17.9077 7.51616 17.6599 7.2684C17.4121 7.02064 17.0764 6.88099 16.7261 6.87994Z" class="fill-black dark:fill-neutral-200" fill="currentColor"></path>
                          <path opacity="0.2" d="M15.7341 7.87194H8.12839V26.7199H15.7341C16.0844 26.7189 16.4201 26.5792 16.6679 26.3315C16.9157 26.0837 17.0553 25.748 17.0564 25.3976V9.19426C17.0553 8.84386 16.9157 8.50818 16.6679 8.26042C16.4201 8.01266 16.0844 7.87299 15.7341 7.87194Z" class="fill-black dark:fill-neutral-200" fill="currentColor"></path>
                          <path opacity="0.2" d="M15.7341 7.87194H8.12839V24.7359H15.7341C16.0844 24.7349 16.4201 24.5952 16.6679 24.3475C16.9157 24.0997 17.0553 23.764 17.0564 23.4136V9.19426C17.0553 8.84386 16.9157 8.50818 16.6679 8.26042C16.4201 8.01266 16.0844 7.87299 15.7341 7.87194Z" class="fill-black dark:fill-neutral-200" fill="currentColor"></path>
                          <path opacity="0.2" d="M14.7421 7.87194H8.12839V24.7359H14.7421C15.0924 24.7349 15.4281 24.5952 15.6759 24.3475C15.9237 24.0997 16.0633 23.764 16.0644 23.4136V9.19426C16.0633 8.84386 15.9237 8.50818 15.6759 8.26042C15.4281 8.01266 15.0924 7.87299 14.7421 7.87194Z" class="fill-black dark:fill-neutral-200" fill="currentColor"></path>
                          <path d="M1.51472 7.87194H14.7421C15.0927 7.87194 15.4291 8.01122 15.6771 8.25922C15.925 8.50722 16.0644 8.84354 16.0644 9.19426V22.4216C16.0644 22.7723 15.925 23.1087 15.6771 23.3567C15.4291 23.6047 15.0927 23.7439 14.7421 23.7439H1.51472C1.16402 23.7439 0.827672 23.6047 0.579686 23.3567C0.3317 23.1087 0.192383 22.7723 0.192383 22.4216V9.19426C0.192383 8.84354 0.3317 8.50722 0.579686 8.25922C0.827672 8.01122 1.16402 7.87194 1.51472 7.87194Z" fill="#107C41"></path>
                          <path d="M3.69711 20.7679L6.90722 15.794L3.96694 10.8479H6.33286L7.93791 14.0095C8.08536 14.3091 8.18688 14.5326 8.24248 14.68H8.26328C8.36912 14.4407 8.47984 14.2079 8.5956 13.9817L10.3108 10.8479H12.4822L9.46656 15.7663L12.5586 20.7679H10.2473L8.3932 17.2959C8.30592 17.148 8.23184 16.9927 8.172 16.8317H8.14424C8.09016 16.9891 8.01824 17.1399 7.92998 17.2811L6.02236 20.7679H3.69711Z" fill="white"></path>
                        </svg>
                        Excel
                      </button>
                      <button type="button" class="flex w-full items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" data-hs-datatable-action-type="pdf">
                        <svg class="shrink-0 size-3.5" width="400" height="492" viewBox="0 0 400 492" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip4)">
                            <path d="M50.7496 -0.174609C22.9188 -0.174609 -0.0878906 22.4611 -0.0878906 50.6629V440.664C-0.0878906 468.495 22.5478 491.502 50.7496 491.502H349.095C376.926 491.502 399.932 468.866 399.932 440.664V119.683C399.932 119.683 400.675 110.406 396.593 101.129C392.882 92.5945 386.574 86.6573 386.574 86.6573L312.729 13.9263C312.729 13.9263 306.421 7.98906 297.144 3.90722C286.012 -0.916768 274.88 -0.174609 274.88 -0.174609H50.7496Z" fill="currentColor" class="fill-red-500"></path>
                            <path d="M50.7494 16.5238H274.508C274.508 16.5238 283.414 16.5238 290.094 19.4924C296.402 22.09 300.855 26.1718 300.855 26.1718L374.699 98.5317C374.699 98.5317 379.152 103.356 381.378 108.18C383.234 112.262 383.234 119.312 383.234 119.312V119.683V441.035C383.234 459.96 368.02 475.174 349.095 475.174H50.7494C31.8245 475.174 16.6104 459.96 16.6104 441.035V50.6629C16.6104 31.738 31.8245 16.5238 50.7494 16.5238Z" fill="currentColor" class="fill-white dark:fill-neutral-800"></path>
                            <path d="M99.7314 292.976C88.2281 281.472 100.845 265.887 134.242 248.818L155.393 238.427L163.557 220.245C168.009 210.226 175.06 193.898 178.771 184.25L185.45 166.439L180.626 153.08C174.689 136.752 172.833 112.261 176.544 103.356C181.368 91.4812 197.696 92.5944 204.004 105.582C209.199 115.601 208.457 133.784 202.52 156.791L197.696 175.715L202.148 183.137C204.375 187.219 211.425 196.867 217.363 204.288L228.866 218.389L242.967 216.534C288.238 210.597 303.452 220.616 303.452 235.088C303.452 253.27 267.829 254.755 238.143 233.974C231.464 229.15 227.011 224.698 227.011 224.698C227.011 224.698 208.457 228.408 199.18 231.006C189.532 233.603 185.079 235.088 170.978 239.912C170.978 239.912 166.154 246.962 162.814 252.157C150.94 271.453 137.21 287.038 127.191 292.976C117.172 298.171 105.669 298.542 99.7314 292.976ZM117.914 286.296C124.222 282.214 137.581 267 146.487 252.528L150.198 246.591L133.499 255.126C107.895 268.113 96.0207 280.359 101.958 287.781C105.298 291.862 109.75 291.491 117.914 286.296ZM285.27 239.541C291.578 235.088 290.836 226.182 283.414 222.471C277.848 219.502 273.395 219.131 258.923 219.131C250.017 219.874 235.916 221.358 233.319 222.1C233.319 222.1 241.112 227.666 244.451 229.522C248.904 232.119 260.407 236.943 268.571 239.541C276.735 242.138 281.559 242.138 285.27 239.541ZM217.734 211.339C214.023 207.257 207.344 199.093 203.262 192.785C197.696 185.735 195.098 180.911 195.098 180.911C195.098 180.911 191.016 193.527 188.048 201.32L178.029 226.182L175.06 231.748C175.06 231.748 190.645 226.553 198.438 224.698C206.972 222.471 223.671 219.131 223.671 219.131L217.734 211.339ZM196.211 124.507C197.324 116.343 197.696 108.18 195.098 104.098C187.677 96.3051 179.142 102.613 180.626 121.538C180.997 127.847 182.853 138.979 184.708 145.658L188.419 157.904L191.016 148.627C192.501 143.803 194.727 132.671 196.211 124.507Z" fill="currentColor" class="fill-red-500"></path>
                            <path d="M119.398 346.04H137.952C143.889 346.04 148.713 346.782 152.424 347.895C156.135 349.008 159.104 351.606 161.701 355.316C164.299 359.027 165.412 363.851 165.412 369.046C165.412 373.87 164.299 378.323 162.443 381.663C160.217 385.374 157.619 387.971 154.28 389.455C150.94 390.94 145.374 391.682 138.323 391.682H132.015V420.997H119.398V346.04ZM132.015 355.688V382.034H138.323C143.889 382.034 147.6 380.921 149.827 379.065C152.053 376.839 153.166 373.499 153.166 369.046C153.166 365.707 152.424 362.738 150.94 360.512C149.456 358.285 147.971 357.172 146.487 356.43C145.003 356.059 142.034 355.688 138.694 355.688H132.015Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                            <path d="M175.431 346.04H192.501C200.664 346.04 207.344 347.524 212.168 350.492C216.992 353.461 220.702 357.543 223.3 363.48C225.898 369.046 227.011 375.726 227.011 382.405C227.011 389.827 225.898 396.506 223.671 402.072C221.445 407.638 218.105 412.462 213.281 415.802C208.828 419.513 202.149 420.997 193.243 420.997H175.431V346.04ZM187.677 356.059V411.349H192.872C200.293 411.349 205.488 408.751 208.828 403.927C212.168 398.732 213.652 392.053 213.652 383.889C213.652 365.336 206.602 356.059 192.872 356.059H187.677Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                            <path d="M238.885 346.04H280.816V356.059H251.501V378.694H274.879V388.713H251.501V421.368H238.885V346.04Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                          </g>
                          <defs>
                            <clipPath id="clip4">
                              <rect width="400" height="491.75" fill="white"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                        PDF
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Header -->

        <!-- Search bar -->
        <div class="px-6 py-4 border-b border-gray-200 dark:border-neutral-700">
          <div class="relative max-w-xs ml-auto">
            <label for="table-search" class="sr-only">Search</label>
            <input type="text" name="table-search" id="table-search" class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Cari Pengaduan">
            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
              <svg class="size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- Table -->
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
          <thead class="bg-white dark:bg-neutral-800">
            <tr>
              <th scope="col" class="ps-8 lg:ps-6 xl:ps-6 pe-6 py-3 text-start">
                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                  Nama Pelapor
                </span>
              </th>
              <th scope="col" class="px-6 py-3 text-start">
                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                  Tanggal Dilaporkan
                </span>
              </th>
              <th scope="col" class="px-6 py-3 text-start">
                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                  Status
                </span>
              </th>
              <th scope="col" class="px-6 py-3 text-start">
                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                  Objek Gratifikasi
                </span>
              </th>
              <th scope="col" class="px-6 py-3 text-start">
                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                  Jenis Laporan
                </span>
              </th>
              <th scope="col" class="px-6 py-3 text-end"></th>
            </tr>
          </thead>
        
          <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
            @foreach($laporanGratifikasis as $laporan)
              <tr class="whitespace-nowrap">
                <td class="ps-8 lg:ps-6 xl:ps-6 pe-6 py-3">
                  <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $laporan->nama_pelapor }}</span>
                </td>
                <td class="px-6 py-3">
                  <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $laporan->tanggal_dilaporkan->format('d F Y') }}</span>
                </td>
                <td class="px-6 py-3">
                  @if($laporan->status == 'selesai')
                    <span class="py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                      <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                      </svg>
                      selesai
                    </span>
                  @elseif($laporan->status == 'proses')
                    <span class="py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                      <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                      proses
                    </span>
                  @else
                    <span class="py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
                      <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                      menunggu
                    </span>
                  @endif
                </td>
                <td class="px-6 py-3">
                  <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $laporan->objek_gratifikasi }}</span>
                </td>
                <td class="px-6 py-3">
                  <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $laporan->jenis_laporan }}</span>
                </td>
                <td class="px-6 py-1.5 text-end">
                  @if($laporan->id)
                    <a href="{{ route('edit-page', $laporan->id) }}" class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500">
                      Edit
                    </a>
                  @endif
                </td>                              
              </tr>
            @endforeach
          </tbody>
        </table>
        <!-- End Table -->

        <!-- Footer -->
        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
          <div>
            <p class="text-sm text-gray-600 dark:text-neutral-400">
                Menampilkan 
                <span class="font-semibold text-gray-800 dark:text-neutral-200">{{ $laporanGratifikasis->count() }}</span> 
                dari 
                <span class="font-semibold text-gray-800 dark:text-neutral-200">{{ $laporanGratifikasis->total() }}</span> 
                data
            </p>
          </div>        

          <div>
            <div class="inline-flex gap-x-2">
              <button 
                  wire:click="previousPage" 
                  class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" 
                  @if($laporanGratifikasis->onFirstPage()) disabled @endif>
                  <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m15 18-6-6 6-6"></path>
                  </svg>
                  Prev
              </button>

              <!-- Tombol Next -->
              <button 
                  wire:click="nextPage" 
                  class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" 
                  @if(!$laporanGratifikasis->hasMorePages()) disabled @endif>
                  Next
                  <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m9 18 6-6-6-6"></path>
                  </svg>
              </button>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
</div>