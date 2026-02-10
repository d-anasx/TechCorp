<div class="max-w-md w-full">
    <!-- Card Container -->
    <div class="bg-gray-800 rounded-2xl shadow-2xl p-8 text-center border border-gray-700">
        <!-- Icon -->
        <div class="mb-6 flex justify-center">
            <div class="bg-yellow-500/10 rounded-full p-4 inline-block">
                <svg class="w-16 h-16 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
        </div>

        <!-- Title -->
        <h1 class="text-3xl font-bold text-white mb-3">
            Account Pending Approval
        </h1>

        <!-- Description -->
        <p class="text-gray-400 mb-6 leading-relaxed">
            Thank you for signing up! Your account is currently awaiting approval from our admin team. You'll receive an
            email notification once your account has been reviewed and approved.
        </p>

        <!-- Status Badge -->
        <div class="bg-gray-700/50 rounded-lg p-4 mb-6 border border-gray-600">
            <div class="flex items-center justify-center space-x-2">
                <div class="flex space-x-1">
                    <div class="w-2 h-2 bg-yellow-500 rounded-full animate-pulse"></div>
                    <div class="w-2 h-2 bg-yellow-500 rounded-full animate-pulse delay-75"></div>
                    <div class="w-2 h-2 bg-yellow-500 rounded-full animate-pulse delay-150"></div>
                </div>
                <span class="text-yellow-500 font-semibold">Status: Pending Review</span>
            </div>
        </div>

        <!-- Info Box -->
        <div class="bg-blue-500/10 border border-blue-500/20 rounded-lg p-4 mb-6 text-left">
            <div class="flex items-start space-x-3">
                <svg class="w-5 h-5 text-blue-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <div>
                    <h3 class="text-blue-400 font-semibold text-sm mb-1">What happens next?</h3>
                    <p class="text-gray-400 text-sm">
                        Our team typically reviews new accounts within 24-48 hours. You'll be notified via email once
                        approved.
                    </p>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <!-- <div class="space-y-3">
                <button class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-[1.02]">
                    Return to Homepage
                </button>
                <button class="w-full bg-gray-700 hover:bg-gray-600 text-gray-300 font-semibold py-3 px-6 rounded-lg transition duration-200">
                    Contact Support
                </button>
            </div>
        </div> -->

        <!-- Footer Text -->
        <!-- <p class="text-gray-500 text-sm text-center mt-6">
            Need help? <a href="#" class="text-blue-400 hover:text-blue-300 underline">Contact our support team</a>
        </p> -->
    </div>
</div>

<style>
    .delay-75 {
        animation-delay: 0.15s;
    }

    .delay-150 {
        animation-delay: 0.3s;
    }
</style>
