<div class="relative w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-white/80 dark:bg-zinc-900/80 backdrop-blur-xl p-6 sm:p-8 shadow-xl">
    @if ($submitted)
        <div class="flex flex-col items-center justify-center text-center py-10 space-y-4 animate-fade-in">
            <div class="w-16 h-16 rounded-full bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center text-emerald-500 shadow-lg shadow-emerald-500/10">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-zinc-900 dark:text-white">Message Sent Successfully!</h3>
            <p class="text-zinc-600 dark:text-zinc-400 max-w-md">
                Thank you for reaching out. Your message has been received and I will get back to you as soon as possible.
            </p>
            <button 
                wire:click="resetForm" 
                class="mt-4 px-6 py-2.5 rounded-xl bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 font-semibold text-sm hover:opacity-90 transition-all shadow-md"
            >
                Send Another Message
            </button>
        </div>
    @else
        <form wire:submit.prevent="submit" class="space-y-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-xs font-semibold uppercase tracking-wider text-zinc-700 dark:text-zinc-300 mb-2">
                        Your Name
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        wire:model="name"
                        placeholder="John Doe"
                        class="w-full px-4 py-3 rounded-xl bg-zinc-50 dark:bg-zinc-800/60 border border-zinc-200 dark:border-zinc-700/80 text-zinc-900 dark:text-white placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-400 focus:border-transparent text-sm transition-all"
                    >
                    @error('name') 
                        <span class="text-xs text-rose-500 mt-1 block">{{ $message }}</span> 
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-zinc-700 dark:text-zinc-300 mb-2">
                        Email Address
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        wire:model="email"
                        placeholder="john@example.com"
                        class="w-full px-4 py-3 rounded-xl bg-zinc-50 dark:bg-zinc-800/60 border border-zinc-200 dark:border-zinc-700/80 text-zinc-900 dark:text-white placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-400 focus:border-transparent text-sm transition-all"
                    >
                    @error('email') 
                        <span class="text-xs text-rose-500 mt-1 block">{{ $message }}</span> 
                    @enderror
                </div>
            </div>

            <!-- Subject -->
            <div>
                <label for="subject" class="block text-xs font-semibold uppercase tracking-wider text-zinc-700 dark:text-zinc-300 mb-2">
                    Subject
                </label>
                <input 
                    type="text" 
                    id="subject" 
                    wire:model="subject"
                    placeholder="Project Inquiry / Collaboration"
                    class="w-full px-4 py-3 rounded-xl bg-zinc-50 dark:bg-zinc-800/60 border border-zinc-200 dark:border-zinc-700/80 text-zinc-900 dark:text-white placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-400 focus:border-transparent text-sm transition-all"
                >
                @error('subject') 
                    <span class="text-xs text-rose-500 mt-1 block">{{ $message }}</span> 
                @enderror
            </div>

            <!-- Message -->
            <div>
                <label for="message" class="block text-xs font-semibold uppercase tracking-wider text-zinc-700 dark:text-zinc-300 mb-2">
                    Your Message
                </label>
                <textarea 
                    id="message" 
                    wire:model="message"
                    rows="5"
                    placeholder="Tell me about your project, goals, or timeline..."
                    class="w-full px-4 py-3 rounded-xl bg-zinc-50 dark:bg-zinc-800/60 border border-zinc-200 dark:border-zinc-700/80 text-zinc-900 dark:text-white placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-400 focus:border-transparent text-sm transition-all resize-none"
                ></textarea>
                @error('message') 
                    <span class="text-xs text-rose-500 mt-1 block">{{ $message }}</span> 
                @enderror
            </div>

            <!-- Submit Button -->
            <button 
                type="submit" 
                wire:loading.attr="disabled"
                class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white font-semibold text-sm shadow-lg shadow-indigo-500/25 hover:shadow-indigo-500/40 hover:scale-[1.01] active:scale-[0.99] transition-all flex items-center justify-center space-x-2 disabled:opacity-50"
            >
                <span wire:loading.remove>Send Message</span>
                <span wire:loading class="flex items-center space-x-2">
                    <svg class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span>Sending...</span>
                </span>
                <svg wire:loading.remove class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </button>
        </form>
    @endif
</div>
