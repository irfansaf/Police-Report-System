<x-app-layout>
    <div class="w-full flex flex-col items-center mt-10">
        <div class="w-4/5 flex flex-col gap-8">
            <div class="w-full font-semibold text-3xl">SAFE ZONE</div>
            <div class="font-semibold text-2xl">
                SafeZone is your trusted platform for reporting accidents and criminal
                activity. Our easy-to-use platform allows the community to quickly
                report incidents while maintaining confidentiality and accuracy.
                We work closely with law enforcement and local government agencies
                to ensure that reports are handled efficiently and effectively.
                Our goal is to create safer communities for all.
            </div>
            <div class="w-full h-32 flex flex-col justify-center items-center gap-8 mt-8 mb-8">
                <div class="font-semibold text-3xl  py-4">OUR SERVICE</div>
                @include('partials.landing.service')
            </div>
        </div>
    </div>
    @include('layouts.footer')
</x-app-layout>
