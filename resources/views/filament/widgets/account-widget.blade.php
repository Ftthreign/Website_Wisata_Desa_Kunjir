<x-filament-widgets::widget>
    <x-filament::section>
        <section role="region" aria-labelledby="user-profile-card">
            <div
                class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-sky-500 via-teal-500 to-emerald-600 dark:from-sky-600 dark:via-teal-700 dark:to-emerald-800 p-6 shadow-xl transition-all duration-500">

                <!-- Background Effects -->
                <div class="absolute inset-0 bg-white/[0.04] dark:bg-black/[0.15] backdrop-blur-2xl"></div>
                <div
                    class="absolute -top-24 -right-24 h-64 w-64 rounded-full bg-white/10 dark:bg-white/5 blur-3xl opacity-40 animate-pulse">
                </div>
                <div
                    class="absolute -bottom-24 -left-24 h-64 w-64 rounded-full bg-white/10 dark:bg-white/5 blur-3xl opacity-30 animate-pulse delay-1000">
                </div>

                <!-- Main Content -->
                <div class="relative z-10 flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">

                    <!-- User Info -->
                    <div class="flex items-center gap-4">
                        <!-- User Details -->
                        <div class="flex flex-col gap-1">
                            <!-- Greeting -->
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-300 via-emerald-400 to-emerald-500 dark:from-emerald-300 dark:via-emerald-400 dark:to-emerald-500 font-semibold text-2xl uppercase tracking-wider drop-shadow-lg animate-[pulse_4s_ease-in-out_infinite]">
                                {{ $this->getGreeting() }},
                            </span>

                            <!-- Username -->
                            <h2 id="user-profile-card"
                                class="text-2xl font-bold text-emerald-500 dark:text-white drop-shadow-md tracking-tight leading-tight">
                                {{ $this->getUser()->name }}
                            </h2>

                            <!-- Email -->
                            <div class="mt-0.5 inline-flex items-center gap-1.5 text-xs text-white/80 dark:text-white/70"
                                aria-label="Alamat email pengguna">
                                <svg class="h-3.5 w-3.5 flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="truncate">{{ $this->getUser()->email }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Section -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full lg:w-auto">

                        <!-- Account Age -->
                        <div tabindex="0"
                            class="group relative overflow-hidden rounded-xl bg-white/10 dark:bg-white/5 backdrop-blur-md px-4 py-4 transition-all duration-300 hover:bg-white/[0.15] dark:hover:bg-white/[0.08] focus-visible:ring-2 focus-visible:ring-emerald-400 focus:outline-none hover:scale-[1.03] hover:shadow-lg">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                            <div class="relative">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <div
                                        class="flex h-7 w-7 items-center justify-center rounded-lg bg-white/15 dark:bg-white/10 group-hover:bg-white/25 dark:group-hover:bg-white/20 transition-colors duration-300">
                                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="text-xs font-semibold uppercase tracking-wide text-white/70 dark:text-white/60">
                                        Bergabung
                                    </span>
                                </div>
                                <p class="text-sm font-bold dark:text-white drop-shadow">
                                    {{ $this->getAccountAge() }}
                                </p>
                            </div>
                        </div>

                        <!-- Role Badge -->
                        <div tabindex="0"
                            class="group relative overflow-hidden rounded-xl bg-white/10 dark:bg-white/5 backdrop-blur-md px-4 py-4 transition-all duration-300 hover:bg-white/[0.15] dark:hover:bg-white/[0.08] focus-visible:ring-2 focus-visible:ring-emerald-400 focus:outline-none hover:scale-[1.03] hover:shadow-lg">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                            <div class="relative">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <div
                                        class="flex h-7 w-7 items-center justify-center rounded-lg bg-white/15 dark:bg-white/10 group-hover:bg-white/25 dark:group-hover:bg-white/20 transition-colors duration-300">
                                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="text-xs font-semibold uppercase tracking-wide text-white/70 dark:text-white/60">
                                        Role
                                    </span>
                                </div>

                                @php
                                    $roles = $this->getUser()->getRoleNames();
                                    $roleDisplay = $roles->isNotEmpty() ? ucfirst($roles->first()) : 'Tidak ada peran';
                                    $roleColor = match (strtolower($roleDisplay)) {
                                        'superadmin' => 'bg-gradient-to-r from-amber-400 to-yellow-500 text-white',
                                        'admin' => 'bg-gradient-to-r from-emerald-400 to-teal-500 text-white',
                                        'editor' => 'bg-gradient-to-r from-sky-400 to-blue-500 text-white',
                                        default => 'bg-white/20 dark:bg-white/10 text-white',
                                    };
                                @endphp

                                <div
                                    class="inline-flex items-center gap-1.5 rounded-lg {{ $roleColor }} backdrop-blur-sm px-3 py-1.5 shadow-md">
                                    <div
                                        class="h-1.5 w-1.5 rounded-full bg-white/90 shadow-lg animate-[pulse_3s_ease-in-out_infinite]">
                                    </div>
                                    <span class="text-sm font-bold drop-shadow">
                                        {{ $roleDisplay }}
                                    </span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </x-filament::section>
</x-filament-widgets::widget>
